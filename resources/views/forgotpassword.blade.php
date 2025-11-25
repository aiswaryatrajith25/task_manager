<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - TaskFlow</title>
    <link rel="stylesheet" href="{{ asset('css/forgotpassword.css') }}" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
<div class="container">

    <!-- Left Section -->
    <div class="left-section">
        <div class="logo">
            <i class="fa fa-recycle" aria-hidden="true"></i>
        </div>
        <h2 class="brand">TaskFlow</h2>
        <p class="tagline">Your tasks, your flow</p>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <h2>Forgot Password</h2>
        <p class="subtitle">Enter your email address to receive a reset link.</p>

        <form>
            <div class="input-group">
                <input type="email" placeholder="Email Address" required />
            </div>

            <button type="submit" class="btn">Send Reset Link</button>
        </form>

        <a href="{{ route('home') }}" class="back-link">Back to Log In</a>
    </div>

</div>
</body>
</html>
