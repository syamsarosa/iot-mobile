import 'package:flutter/material.dart';

class LoadingWidget extends StatelessWidget {
  const LoadingWidget({
    super.key,
    this.loadingText = "Fetching data. Please wait.",
  });

  final String loadingText;

  @override
  Widget build(BuildContext context) {
    return Column(
      mainAxisAlignment: MainAxisAlignment.center,
      children: [
        Text(loadingText, textAlign: TextAlign.center),
        SizedBox(height: 8),
        CircularProgressIndicator(),
      ],
    );
  }
}
