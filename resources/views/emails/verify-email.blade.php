<!DOCTYPE html>
<html>
<head>
    <title>Verify Email</title>
</head>
<body>
    <h2>Hello {{ $user->name }},</h2>
    <p>Thank you for registering! Click the link below to verify your email:</p>
    <a href="{{ url('/verify-user/' . $user->verification_code) }}">Verify My Email</a>
    <p>If you did not register, ignore this email.</p>
</body>
</html>
