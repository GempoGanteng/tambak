<!-- resources/views/qrcode.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
    <h1>QR Code</h1>
    <img src="{{ Storage::url('image/qrcode.png') }}" alt="QR Code">
</body>
</html>
