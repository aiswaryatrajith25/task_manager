<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Login & Register</title>

    <!-- FontAwesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>

<div class="auth-container">

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

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab active" onclick="showTab('login')">Log In</button>
            <button class="tab" onclick="showTab('register')">Register</button>
        </div>

        <div class="line"></div>

        <!-- LOGIN FORM -->
        <form id="login" class="form active">
            <h3>Welcome back!</h3>

            <div class="input-group">
                <i class="fa fa-envelope"></i>
                <input type="email" placeholder="Email Address">
            </div>

            <div class="input-group">
                <i class="fa fa-eye toggle-password" onclick="togglePassword('loginPassword', this)"></i>
                <input type="password" placeholder="Password" id="loginPassword">
            </div>

            <div class="row">
                <label>
                    <input type="checkbox"> Remember Me
                </label>

                <a href="/forgot-password" class="forgot-link">Forgot Password?</a>
            </div>

            <button type="button" class="btn login-btn">Log In</button>
        </form>

        <!-- REGISTER FORM -->
        <form id="register" class="form">
            <div class="row double">

                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Full Name">
                </div>

                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Email Address">
                </div>
            </div>

            <div class="row double">

                <div class="input-group">
                    <i class="fa fa-eye toggle-password" onclick="togglePassword('registerPassword', this)"></i>
                    <input type="password" placeholder="Password" id="registerPassword">
                </div>

                <div class="input-group">
                    <i class="fa fa-eye toggle-password" onclick="togglePassword('confirmPassword', this)"></i>
                    <input type="password" placeholder="Confirm Password" id="confirmPassword">
                </div>
            </div>

            <button type="button" class="btn register-btn">Register</button>
        </form>

    </div>

</div>


<script>
    function showTab(tab) {
        document.querySelectorAll('.tab').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.form').forEach(f => f.classList.remove('active'));

        event.target.classList.add('active');
        document.getElementById(tab).classList.add('active');
    }

    function togglePassword(inputId, icon) {
        // e.preventDefault();
        console.log("inputId",inputId);
    const input = document.getElementById(inputId);
    console.log("input",input);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>

</body>
</html>
