<?php include("server.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cup Of Joe</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <header class="cf">
        <div id="hidden-nav-wrapper" class="remove">
            <div id="hidden-nav">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="">
                        <a href="shop.html">Shop</a>
                    </li>
                    <li class="">
                        <a href="location.html">Locations</a>
                    </li>
                    <li class="">
                        <a href="contact-us.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div id="hidden-nav-background">
            </div>
        </div>
        <div class="cf remove" id="login-wrapper">
        
        </div>
        <div class="remove" id="login-X">
            <span>X</span>
        </div>
        <div class="remove" id="login-container">
           <?php include("errors.php"); ?>
            <form id="sign-up" class="" method="post" action="index.php">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

               <label for="username">
                    <b>Username</b>
                </label>
                <input type="text" placeholder="Enter Username" name="username" required>
                
                <label for="email">
                    <b>Email</b>
                </label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw">
                    <b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="password" minlength="4" required>
               <p>Already a memeber<a id="signIn"> Sign-in</a></p>
                <p>By creating an account you agree to our
                    <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <button type="submit" name="sign-up" class="signupbtn">Sign Up</button>
            </form>
    <!--                                     Sign In                                   -->
                    <form  id="sign-in" class="close-sign-in" method="post" action="index.php">  
                <h1>Sign In</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email">
                    <b>Email</b>
                </label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label for="psw">
                    <b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="password" required>
               <p>New to the site?<a id="signUp"> Sign-up</a></p>
                <p>By creating an account you agree to our
                    <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <button type="submit" name="sign-in" class="signupbtn">Sign in</button>
            </form>
        </div>


        <nav class="menu-header">
            <ul class=" menu-nav">
                <div id="menu-btn">
                    <div class="btn-line"></div>
                    <div class="btn-line"></div>
                    <div class="btn-line"></div>
                </div>
                <li class="nav-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="location.html">Locations</a>
                </li>
                <li class="nav-item">
                    <a href="contact-us.html">Contact</a>
                </li>
                <li class="logo">
                    <a href="index.php">
                        <img src="logo.png">
                    </a>
                </li>      
             <a id='login'> Login/Register</a>
                <a class="purchase-cart" href="">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </ul>
        </nav>
    </header>
   <section class="login-error-section">
    <div>
    <h1> Email and or password entered is incorrect. Please try again</h1>
    </div>
    </section>
    <footer class="cf">
        <div class="cf">
            <h4>Powered By: Teron Sampson</h4>
            <span>Privacy Statement</span>
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>