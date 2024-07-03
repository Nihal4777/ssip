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
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .otpbtn
    {
        background:none;
        border:none;
        color:rgb(100,0,3,0.9);
    }
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

.cont {
    position: relative;
    display: flex;
    align-items: center;
}

.image {
    margin-right: 50px; 
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

.login-cont {
    display:inline-block;
    background-color: #eacda3a5;
    padding: 40px;
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
    color: rgb(100,0,3,0.4);
    font-size:14px;
    letter-spacing:0.5px;
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

#login-button {
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
#login-button:hover {
    background-color: #45a049;
}

.extra-links {
    margin-top: 20px;
}

.extra-links a {
    text-decoration: none;
    color: #0d6ef0;
    margin: 0 10px;
    font-weight:bold;
    letter-spacing:1px;   
}

.extra-links a:hover {
    text-decoration: underline;
}
input:focus
{
    border:none;
    outline:none;
    border:1.5px solid rgb(100,0,3,0.9);
    transition:0.3s all;
}
@media only screen and (max-width: 800px)
{
    body
    {
        
       
        background: -webkit-linear-gradient(to left, #d6ae7b, #eacda3);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #d6ae7b, #eacda3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        font-family: 'Roboto', sans-serif;
    }
    .cont
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
    .login-cont 
    {
        text-align:center;
        padding:30px;
        margin:2px auto;
        box-shadow:0px 0px 5px  rgba(0, 0, 0, 0.177);
    }
    #fg{
          color: rgb(100,0,3,0.9);
    }   
    label
    {
        color: rgb(100,0,0);
        letter-spacing:1px;
        font-size:16px;
    }
    #login-button
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
    <div class="cont">
        <div class="in">
        <div class="image left">
            <img src="/assets/img/aangawadir.png" alt="Left Image">
        </div>
    <div class="login-cont">
        <h2>Login</h2>
        @if ($errors->any())
    <div class="alert alert-danger solid alert-dismissible fade show mt-3">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                <!--<button type="button" class="btn btn-link ms-auto" id="fg">Get OTP</button>-->
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" id="login-button">Login</button>
            <div class="extra-links">
                <!--<a href="#forgot-password">Forgot Password?</a>-->
                <!--<span>|</span>-->
                <!--<a href="signup.html">Sign Up</a>-->
            </div>
        </form>
    </div>
    </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        var email=document.getElementById("email")
        document.getElementById("fg").addEventListener("click", function(event) {
            event.preventDefault(); 
            var xhr=new XMLHttpRequest();
		  xhr.onload=function(e) {
		      if(this.readyState === 4) {
		          console.log("Server returned: ",e.target.responseText);
		      }
		  };
		  xhr.open("GET",`getOTP?email=${email.value}`,true);
		  xhr.send();
		  xhr.onload = () => {
			console.log("DONE", xhr.readyState); // readyState will be 4
			if (xhr.status === 200) {
				console.log(xhr.response);
				console.log(xhr.responseText);
			  }
		  };

        });
    </script>
</body>

</html>
