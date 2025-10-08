import 'package:flutter/material.dart';
import 'package:flutter_application_1/device_records.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

enum DeviceState { loading, success, error }

class DevicesPage extends StatefulWidget {
  const DevicesPage({super.key, required this.title});
  final String title;

  @override
  State<DevicesPage> createState() => _DevicesPageState();
}

class _DevicesPageState extends State<DevicesPage> {
  final url = Uri.parse("http://10.0.2.2:8000/api/devices/");
  List devices = [];
  DeviceState deviceState = DeviceState.loading;

  Future<void> fetchDevices() async {
    setState(() => deviceState = DeviceState.loading);

    try {
      final response = await http
          .get(url, headers: {"Content-Type": "application/json"})
          .timeout(const Duration(seconds: 5));

      if (response.statusCode == 200) {
        setState(() {
          devices = jsonDecode(response.body);
          deviceState = DeviceState.success;
        });
      } else {
        throw Exception("Failed to load devices ${response.statusCode}");
      }
    } catch (e) {
      setState(() => deviceState = DeviceState.error);
    }
  }

  @override
  void initState() {
    super.initState();
    fetchDevices();
  }

  @override
  Widget build(BuildContext context) {
    final Widget content;

    switch (deviceState) {
      case DeviceState.loading:
        content = Center(child: _buildLoadingView());
        break;
      case DeviceState.error:
        content = Center(child: _buildErrorView());
        break;
      case DeviceState.success:
        content = Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [_buildDeviceList()],
        );
        break;
    }

    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
        backgroundColor: Theme.of(context).colorScheme.inversePrimary,
      ),
      body: Padding(padding: EdgeInsets.all(16), child: content),
    );
  }

  Widget _buildLoadingView() => const Column(
    mainAxisAlignment: MainAxisAlignment.center,
    children: [
      Text("Getting devices data. Please wait.", textAlign: TextAlign.center),
      SizedBox(height: 8),
      CircularProgressIndicator(),
    ],
  );

  Widget _buildErrorView() => Column(
    mainAxisAlignment: MainAxisAlignment.center,
    children: [
      Text(
        "Something went wrong. Please try to get the list of available devices manually.",
        textAlign: TextAlign.center,
        style: TextStyle(color: Colors.red, fontWeight: FontWeight.bold),
      ),
      SizedBox(height: 8),
      ElevatedButton(onPressed: fetchDevices, child: Text("Get Devices Data")),
    ],
  );

  Widget _buildDeviceList() => Expanded(
    child: ListView.builder(
      itemCount: devices.length,
      itemBuilder: (context, index) {
        final device = devices[index];
        String deviceName = device["name"].toString().toUpperCase();

        return Column(
          children: [
            Card(
              child: ListTile(
                title: Text(deviceName),
                subtitle: Text(
                  "Temp: ${device["temp_act"]} °C\n"
                  "Hum: ${device["hum_act"]} %\n"
                  "IP: ${device["ip_address"]}",
                ),
                onTap: () {
                  Navigator.push(
                    context,
                    MaterialPageRoute(
                      builder: (context) => DeviceRecords(
                        title: "$deviceName Records",
                        deviceId: device["id"],
                      ),
                    ),
                  );
                },
              ),
            ),
            if (index <= devices.length - 1) SizedBox(height: 8),
            if (index == devices.length - 1)
              ElevatedButton(
                onPressed: fetchDevices,
                child: Text("Get Devices Data"),
              ),
          ],
        );
      },
    ),
  );
}
