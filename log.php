
<html lang="en">
<head>
   
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
    
    </head>

<body>
    
    <form autocomplete="off" class="login_form" method="post" name="form" onsubmit="vali();">
        <h1>Login Page</h1>
        
        <label>Username:</label><span id="err2" style="margin-left: 10%;"></span>
        <input type="text" id="email" placeholder="email" autocomplete="off">
        <span id="err2"></span>
        <br />
        <label>Password</label><span id="err4" style="margin-left: 10%;"></span>
        <input type="password" id="password" placeholder="Password" autocomplete="off"/>
        <span id="err4"></span>

        <button type="button" onclick="login()">Login</button>
        <a>forgot password?</a><a href="/project/index.html">Back</a>
    </form>
    
</body>
<?php require 'script.php'; ?>
<script>
    function login(){
        if(email() && password()){
            var emailid = $("#email").val();
            var pwd = $("#password").val();
            if(emailid == 'admin@gmail.com' && pwd == '1234'){
                alert("Successfully Logged In");
                window.location = '/project/registeredUsersList.php';
            }
            else{
                alert("Invalid Username and password. Try Again ");
                $("#email").val("");
                $("#password").val("");
            }
        }
        
    }
</script>
</html>
