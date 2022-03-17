<html lang="en">

    <head>
        <title>Login and signup</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <div class="hero">
            <div class="form-box">
                
                <div class="button-box">
                    <div id="btn"></div>

                    <button type="button" class="toggle-btn" onclick="Login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="signup()">Signup</button>
                </div>
                <div class="social-icon">
                    <img src="instagram.png">
                    <img src="facebook.png">
                    <img src="twitter.png">
                    
                </div>

                <form id="Login" class="input-group">
                    <input type="text" name="username" class="input-field"placeholder="User id"required>
                    <input type="text" name="password" class="input-field"placeholder="Enter Password"required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="Submit" class="Submit-btn">Login</button>

                </form>
                <form  id="Signup" class="input-group">
                    <input type="text" name="userclass="input-field"placeholder="User id"required>
                    <input type="email" class="input-field"placeholder="Email id"required>
                    <input type="text" class="input-field"placeholder="Enter Password"required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                    <button type="Submit" class="Submit-btn">signup</button>
                    <div></div>

                </form>
            
            </div>

        </div>
        <script>
            var x = document.getElementById("Login");
            var y = document.getElementById("Signup");
            var z = document.getElementById("btn");

            function signup(){
                x.style.left = "-400px"
                y.style.left = "50px"
                z.style.left = "110px"
            }

            function Login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";

            }
        </script>
    </body>
</html>