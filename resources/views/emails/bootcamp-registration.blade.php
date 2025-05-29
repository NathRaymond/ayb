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
    <p>Phone: +234 810 617 1072, +1 330 400 0513</p>
    <p>Email: aimgr@africanyoungbrains.com</p>
    <p>Best regards,<br>AYB Team</p>
</body>

</html>