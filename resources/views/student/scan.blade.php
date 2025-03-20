@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Scan QR Code for Branch ID: {{ $BranchId }}</h1>

    <!-- HTML5 QR Code Reader -->
    <div id="reader" style="width: 100%; height: 400px; background-color: black;"></div>

    <!-- Instascan Camera Feed -->
    <div id="camera" style="width: 100%; height: 400px; background-color: black;"></div>
    <p id="result"></p>

    <!-- Load Instascan Library -->
    <script src="https://cdn.jsdelivr.net/npm/instascan@1.0.0/instascan.min.js"></script> <!-- Ensure this is the first script -->

    <!-- Load HTML5 QR Code Scanner -->
    <script src="https://unpkg.com/html5-qrcode"></script>

    <script type="text/javascript">
        // First, the HTML5 QR Code scanner
        function onScanSuccess(qrMessage) {
            // Redirect to the extracted URL (which contains student details)
            window.location.href = qrMessage;
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 }
        );
        html5QrcodeScanner.render(onScanSuccess);

        // Then, the Instascan camera feed scanner
        if (navigator.mediaDevices && navigator.mediaDevices.enumerateDevices) {
            navigator.mediaDevices.enumerateDevices().then(function(devices) {
                console.log('Devices:', devices);  // Debug: Check detected devices

                // Look for video devices (camera)
                let videoDevices = devices.filter(function(device) {
                    return device.kind === 'videoinput';
                });

                if (videoDevices.length > 0) {
                    // We have a camera available
                    startCamera();
                } else {
                    alert('No camera found');
                    console.log('No video input devices detected');  // Debug: No camera found
                }
            }).catch(function(error) {
                console.error('Error accessing devices:', error);  // Debug: Error in getting devices
            });
        } else {
            alert('Camera not supported by this browser');
        }

        function startCamera() {
            let scanner = new Instascan.Scanner({ video: document.getElementById('camera') });

            // Debug: Check camera access
            Instascan.Camera.getCameras().then(function(cameras) {
                console.log('Cameras:', cameras);  // Debug: Check cameras available

                if (cameras.length > 0) {
                    // If there are cameras, use the first one
                    scanner.start(cameras[0]);
                } else {
                    alert('No camera found');
                    console.log('No cameras detected');  // Debug: No cameras available
                }
            }).catch(function(e) {
                console.error('Error accessing camera:', e);  // Debug: Error accessing the camera
                alert('Error accessing camera');
            });

            // Listen for QR code scan from Instascan
            scanner.addListener('scan', function(content) {
                document.getElementById('result').innerText = 'QR Code Data: ' + content;
                
                // Optionally, handle the scanned content, e.g., navigate to a new page
                window.location.href = content; // Redirect to the URL in the QR code
            });
        }
    </script>

</div>
@endsection
