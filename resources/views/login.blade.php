<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<style>
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #eacda3;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #d6ae7b, #eacda3);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #d6ae7b, #eacda3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    font-family: 'Roboto', sans-serif;
}

.container {
    position: relative;
    display: flex;
    align-items: center ;
    
}

.image {
    display:inline-block;
    vertical-align: baseline;
    margin-right: 100px; 
}
.image img {
    width: 400px; /* Set the width of the image */
    height: 400px; /* Set the height of the image */
}
.left {
    left: 20;
    vertical-align: middle;
}

.login-container {
    display:inline-block;
    background-color: #eacda3a5;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.071);
    vertical-align:center;
    text-align: center;
    vertical-align: middle;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color:rgb(100,0,0);
    letter-spacing:1px;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: rgb(100,0,3,0.4);
    font-size:14px;
    letter-spacing:0.5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input:focus
{
    border:none;
    outline:none;
    border:1.5px solid rgb(100,0,3,0.9);
    transition:0.3s all;
}
button {
    background-color: rgb(100,0,3,0.9);
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    letter-spacing:1px;
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
    color: #0d6ef0;
    font-weight:bold;
    letter-spacing:1px;   
    margin: 0 10px;
}

.extra-links a:hover {
    text-decoration: underline;
}
@media only screen and (max-width: 800px)
{
    body
    {
        
       
        background: -webkit-linear-gradient(to left, #d6ae7b, #eacda3);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #d6ae7b, #eacda3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        font-family: 'Roboto', sans-serif;
    }
    .container
    {
        height:100%;
        width:100%;
        background-image: url("/assets/img/aangawadir.png");
        background-size:auto;
        text-align:center;
        border:1px solid black;
    }
    .in
    {
        height:auto;
        width:90%;
        margin:0% auto;
        position: relative;
        display:block;
        overflow: hidden;
    }
    .image 
    {
        display:none;
    }

    .login-container 
    {
        text-align:center;
        padding:30px;
        margin:2px auto;
        box-shadow:0px 0px 5px  rgba(0, 0, 0, 0.177);
    }
    label
    {
        color: rgb(100,0,0);
        letter-spacing:1px;
        font-size:16px;
    }
    button
    {
        width:50%;
        font-size:20px;
    }

    h2
    {
         
        font-size:24px;
    }
    input{
        width:95%;
    }
    .extra-links a 
    {
        color:blue;
    }
}
</style>
<body>
    <div class="container">
        <div class="in">
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
    </div>
    <script>
        document.getElementById("login-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting (for demonstration purposes)
            // Your login logic here
        });
    </script>
</body>

</html>
