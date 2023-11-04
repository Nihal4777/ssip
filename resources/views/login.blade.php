<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>

body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fff;
}

.container {
    position: relative;
    display: flex;
    align-items: center;
}

.image {
    margin-right: 50px; 
}
.image img {
    width: 400px; /* Set the width of the image */
    height: 400px; /* Set the height of the image */
}
.left {
    left: 0;
}

.login-container {
    background-color: #483285;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

.extra-links {
    margin-top: 20px;
}

.extra-links a {
    text-decoration: none;
    color: #4caf50;
    margin: 0 10px;
}

.extra-links a:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="container">
        <div class="image left">
            <img src="/assets/img/aangawadir.png" alt="Left Image">
        </div>
    <div class="login-container">
        <h2>Login</h2>
        @if ($errors->any())
    <div class="alert alert-danger solid alert-dismissible fade show mt-3">
        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">×</span>
        </button> --}}
        <ul class="mb-0 pl-3">
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="post" action="/login">
            {{ csrf_field() }}
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <div class="extra-links">
                <a href="#forgot-password">Forgot Password?</a>
                <span>|</span>
                <a href="signup.html">Sign Up</a>
            </div>
        </form>
    </div>
    <script>
        document.getElementById("login-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting (for demonstration purposes)
            // Your login logic here
        });
    </script>
</body>

</html>
