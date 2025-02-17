<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Email</title>
</head>
<body>
    <h2>Contact Form Details</h2>
    <p><strong>Name:</strong> {{ $data->name }}</p>
    <p><strong>Email:</strong> {{ $data->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data->message }}</p>
</body>
</html>
