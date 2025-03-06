<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            background: #0073e6;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }
        p {
            font-size: 16px;
            color: #333;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $messageText }}</p>
        <div class="footer">
            <p>Links Station &copy; 2025</p>
        </div>
    </div>
</body>
</html>
