<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <h1>Verify Your Email Address</h1>
    <p>Please click the button below to verify your email address.</p>
    
    <a href="{{ url('/verify-email/' . $token) }}" 
       style="background-color: #0093FF; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
        Verify Email Address
    </a>
    
    <p>If you did not create an account, no further action is required.</p>
</body>
</html>