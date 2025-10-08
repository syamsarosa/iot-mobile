import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

enum DeviceRecordsState { loading, error, success }

class DeviceRecords extends StatefulWidget {
  const DeviceRecords({super.key, required this.title, required this.deviceId});

  final String title;
  final String deviceId;

  @override
  State<DeviceRecords> createState() => _DeviceRecordsState();
}

class _DeviceRecordsState extends State<DeviceRecords> {
  final url = Uri.parse("http://10.0.2.2:8000/api/device-records/");
  List deviceRecords = [];
  DeviceRecordsState deviceRecordsState = DeviceRecordsState.loading;

  Future<void> fetchDeviceRecords() async {
    setState(() => deviceRecordsState = DeviceRecordsState.loading);

    try {
      final response = await http
          .get(
            Uri.parse(url.toString() + widget.deviceId.toString()),
            headers: {"Content-Type": "application/json"},
          )
          .timeout(const Duration(seconds: 5));
      debugPrint("${response.statusCode}");
      if (response.statusCode == 200) {
        setState(() {
          deviceRecords = jsonDecode(response.body);
          deviceRecordsState = DeviceRecordsState.success;
        });
      } else {
        throw Exception("Failed to load device records ${response.statusCode}");
      }
    } catch (e) {
      setState(() => deviceRecordsState = DeviceRecordsState.error);
    }
  }

  @override
  void initState() {
    super.initState();
    fetchDeviceRecords();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
        backgroundColor: Theme.of(context).colorScheme.inversePrimary,
      ),
      body: Padding(padding: EdgeInsets.all(16), child: Text("data")),
    );
  }
}
