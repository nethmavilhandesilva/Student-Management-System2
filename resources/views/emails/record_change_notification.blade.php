<!DOCTYPE html>
<html>
<head>
    <title>Record Change Notification</title>
</head>
<body>
    <h3>{{ $details['subject'] }}</h3>
    <p>{{ $details['message'] }}</p>

    <p><strong>Record Details:</strong></p>
    <ul>
        @foreach($details['data']->getAttributes() as $key => $value)
            <li><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>

    <p>Thank you,</p>
    <p>Your App Team</p>
</body>
</html>
