<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>New Contact Form Submission</title>
</head>
<body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>
    <div style='max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px;'>
        <h2>New Contact Form Submission</h2>
        <p>A new customer has submitted the contact form. Here are the details:</p>
        <ul>
            <li><strong>First Name:</strong> {{ $data['firstname'] ?? '' }}</li>
            <li><strong>Last Name:</strong> {{ $data['lastname'] ?? '' }}</li>
            <li><strong>Email:</strong> {{ $data['email'] ?? '' }}</li>
            <li><strong>Contact Number:</strong> {{ $data['phone'] ?? '' }}</li>
            <li><strong>Message:</strong> {{ $data['message'] ?? '' }}</li>
        </ul>
    </div>
</body>
</html>
