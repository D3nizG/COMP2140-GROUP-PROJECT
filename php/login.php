<html>
    <head>
        <title>Login and Sign Up Form</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="formfield">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="double-btn" onclick="login()">Login</button>
                    <button type="button" class="double-btn" onclick="signup()">Sign Up</button> 
                </div>
                <div class="logo">
                    <img src="logo.png">
                </div>
				
                <form method="post" action="includes/login-inc.php" id="login" class="text-field">
                    <input type="text" name="username" class="txtbox" placeholder="Enter Account Id or Email address" required>
                    <input type="text" name="password" class="txtbox" placeholder="Please Enter Password" required>
                    <button type="submit" name="submit" class="sbtn">Login</button>
                </form>


				<!--                <form id="signup" class="text-field">
                    <input type="text" class="txtbox" placeholder="Create Account Id" required>
                    <input type="email" class="txtbox" placeholder="Enter Email address" required>
                    <input type="text" class="txtbox" placeholder=" Choose Password" required>
                    <button type="submit" class="sbtn">Create an Account</button>
                </form>
-->
            </div>
        </div>
        <script>
            var a=document.getElementById("login");
            var b=document.getElementById("signup");
            var c=document.getElementById("btn");

            function signup(){
                a.style.left="-400px";
                b.style.left=" 30px";
                c.style.left="110px";
            }
            function login(){
                a.style.left="30px";
                b.style.left="470px";
                c.style.left="0px";
            }
        </script>
    </body>
</html>