<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invalid Verification Token</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        .error-icon {
            color: #dc3545;
            font-size: 48px;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 15px;
        }
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-outline {
            background-color: transparent;
            border: 2px solid #007bff;
            color: #007bff;
        }
        .btn-outline:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fas fa-exclamation-circle error-icon"></i>
        <h1>Invalid or Expired Token</h1>
        <p>We're sorry, but the verification link you clicked is either invalid or has expired. This can happen if the link was already used or if too much time has passed since it was sent.</p>
        <div>
            <a href="{{ route('email-confirm') }}" class="btn">Request New Verification</a>
            <a href="{{ route('index') }}" class="btn btn-outline">Go to Homepage</a>
        </div>
    </div>
</body>
</html>