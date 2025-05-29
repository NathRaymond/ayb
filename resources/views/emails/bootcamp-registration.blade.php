<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Registering</title>
</head>
<body>
    <p>Dear {{ $firstname }} {{ $lastname }},</p>
    
    <p>Thank you for registering for AYB AI, Data Science & Machine Learning Training!</p>
    
    <p>Kindly click the link below to apply for our scholarship offer:</p>
    
    <p><a href="{{ $scholarshipLink }}">{{ $scholarshipLink }}</a></p>
    
    <p>For any questions, please contact us:</p>
    <p>Phone: 08148009197</p>
    <p>Email: ayb@gmail.com</p>
    <p>WhatsApp: 07032066257</p>
    
    <p>Best regards,<br>AYB Team</p>
</body>
</html>