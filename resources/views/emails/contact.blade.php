<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Contacting Us</title>
</head>
<body>
    <h2>Hello {{ $data['name'] }},</h2>
    <p>Thank you for reaching out to us! Here is a copy of your message:</p>
    
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>

    <p>We will get back to you shortly.</p>

    <p>Best regards,<br><strong>NotaryPhil</strong></p>
</body>
</html>
