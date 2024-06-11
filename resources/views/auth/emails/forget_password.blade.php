<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Email</title>
</head>
<body>
    <p>Hello!</p>
    <p>You are receiving this email because we received a password reset request for your account.</p>
    <p>Click the following link to reset your password:</p>
    <a href="{{ route('resetpassword', ['token' => $token]) }}">Reset Password</a>
    <p>If you did not request a password reset, no further action is required.</p>
    <p>Thank you!</p>
</body>
</html>
