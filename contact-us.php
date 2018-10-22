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
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="">
                        <a href="shop.php">Shop</a>
                    </li>
                    <li class="">
                        <a href="#">Locations</a>
                    </li>
                    <li class="active">
                        <a href="contact-us.php">Contact</a>
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
                <input type="password" placeholder="Enter Password" minlength="4" name="password" required>
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
                    <a href="location.php">Locations</a>
                </li>
                <li class="nav-item">
                    <a href="#">Contact</a>
                </li>
                <li class="logo">
                    <a href="index.php">
                        <img src="logo.png">
                    </a>
                </li>
    <?php  if(isset($_SESSION['username'])){
     echo "<h2 class='username'>Welcome " . $_SESSION['username'] . "</h2>
     <a class='logout' href='logout.php'>Logout</a>";
                 }else{
                    echo  "<a id='login'> Login/Register</a>";   
                }
     ?>
                 <?php  if(isset($_SESSION['username'])){
     echo '<a class="purchase-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>';
                 }else{
                   echo '<a class="purchase-cart" onclick="return signInFirst()"><i class="fas fa-shopping-cart"></i></a>'; 
                }
     ?>
            </ul>
        </nav>
    </header>
    <main>
        <div id="contact-heading">
            <h2>Have a question... </h2>
            <div>
                <img src="contact-banner.png">
            </div>
        </div>
        <div id="contact-container">
            <div>
                <h2>Contact Us</h2>
            </div>
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.."></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>

    <footer class="cf">
        <div class="cf">
            <h4>Powered By: Teron Sampson</h4>
            <span>Privacy Statement</span>
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>