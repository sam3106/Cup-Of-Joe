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
                    <li >
                        <a href="index.php">Home</a>
                    </li>
                    <li class="">
                        <a href="shop.php">Shop</a>
                    </li>
                    <li class="">
                        <a href="location.php">Locations</a>
                    </li>
                    <li class="">
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
                    <a href="contact-us.php">Contact</a>
                </li>
                <li class="logo">
                    <a href="index.php">
                        <img src="logo.png">
                    </a>
                </li>
     <h2 class='username'>Welcome <?php echo $_SESSION['username'] ?></h2>
     <a class='logout' href='logout.php'>Logout</a>
                 
                <a class="purchase-cart" href="cart.php">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </ul>
        </nav>
    </header> 
   
       <main id='cart-main' >
          <div class='cart-container'>
          <h1 id='cart-item-name'>Items in cart</h1>
<?php	
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$statement = $db->query("SELECT * FROM items WHERE item_id IN (SELECT item_id FROM cart WHERE user_id=".$_SESSION['user_id'].")"); 
while($row = $statement->fetch(PDO::FETCH_ASSOC)){ 
?>
<div class='cart-entry'>
<div class="cart-left-side">
<img class='cart-item-img' src='<?php echo $row['image'];?>'>
<h1 class='cart-item-name'> <?php echo $row['title'];?></h1>
</div>
<div class="cart-right-side">

<h2>price</h2>
<h4 id='cart-price'><?php echo $row['price'];?></h4>

</div>
</div>
<?php } ?>
		   
		   
		   
           </div>
		   
		   
		   
            <div id='total-price'>
             <input onclick="noInfo()" type='button' value='click to proceed'/>
             </div>
             
       </main>
    <footer class="cf">
        <div class="cf">
            <h4>Powered By: Teron Sampson</h4>
            <span>Privacy Statement</span>
        </div>
    </footer>
       <script src="shop.js"></script>
       <script src="cart.js"></script>

</body>

</html>