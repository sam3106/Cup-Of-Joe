<?php include("server.php");?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cup Of Joe</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
	
</head>
<body>
   
    <header class="cf">
        <div id="hidden-nav-wrapper" class="remove">
            <div id="hidden-nav">
                <ul>
                    <li >
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Shop</a>
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
                    <a href="#">Shop</a>
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
	
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Coffee</a></li>
    <li><a href="#tabs-2">Gear</a></li>
    <li><a href="#tabs-3">Coffee Desert</a></li>
    <li><a href="#tabs-4">Brewing</a></li>
  </ul>
  
  <div id="tabs-1">
   <div id="shop-title">
                <h3 id="category"> Coffee</h3>
            </div>
           <ul id="shop-item-container">
<?php	
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$statement = $db->query("SELECT * FROM items WHERE category='coffee'");
while($row = $statement->fetch(PDO::FETCH_ASSOC)){ 
?>
<li class="shop-item">
<img class='shop-images' src="<?php echo $row["image"];?>">
<h3 class='items-title'><?php echo $row["title"];?></h3>
<p class='item-prices'><?php echo $row["title"];?></p>
<p class='item-descriptions'><?php echo $row["description"];?></p>

<input type="button" onclick="location.href='addcart.php?id=<?php echo $row["item_id"];?>';" value="Add to Cart" />
</li> 
<?php } ?>
           </ul>
   </div>
  
  <div id="tabs-2">
    <div id="shop-title">
                <h3 id="category"> Gear</h3>
            </div>
           <ul id="shop-item-container">
<?php	
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$statement = $db->query("SELECT * FROM items WHERE category='gear'");
while($row = $statement->fetch(PDO::FETCH_ASSOC)){ 
?>
<li class="shop-item">
<img class='shop-images' src="<?php echo $row["image"];?>">
<h3 class='items-title'><?php echo $row["title"];?></h3>
<p class='item-prices'><?php echo $row["title"];?></p>
<p class='item-descriptions'><?php echo $row["description"];?></p>

<input type="button" onclick="location.href='addcart.php?id=<?php echo $row["item_id"];?>';" value="Add to Cart" />
</li>
<?php } ?>
           </ul>
	</div>
  
  <div id="tabs-3">
  <div id="shop-title">
                <h3 id="category"> Coffee Desert</h3>
            </div>
           <ul id="shop-item-container">
<?php	
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$statement = $db->query("SELECT * FROM items WHERE category='coffeeDesert'");
while($row = $statement->fetch(PDO::FETCH_ASSOC)){ 
?>
<li class="shop-item">
<img class='shop-images' src="<?php echo $row["image"];?>">
<h3 class='items-title'><?php echo $row["title"];?></h3>
<p class='item-prices'><?php echo $row["title"];?></p>
<p class='item-descriptions'><?php echo $row["description"];?></p>

<input type="button" onclick="location.href='addcart.php?id=<?php echo $row["item_id"];?>';" value="Add to Cart" />
</li>
<?php } ?>
           </ul>
  </div>
  
  <div id="tabs-4">
  <div id="shop-title">
                <h3 id="category"> Brewing</h3>
            </div>
           <ul id="shop-item-container">
<?php	
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$statement = $db->query("SELECT * FROM items WHERE category='brewing'");
while($row = $statement->fetch(PDO::FETCH_ASSOC)){ 
?>
<li class="shop-item">
<img class='shop-images' src="<?php echo $row["image"];?>">
<h3 class='items-title'><?php echo $row["title"];?></h3>
<p class='item-prices'><?php echo $row["title"];?></p>
<p class='item-descriptions'><?php echo $row["description"];?></p>

<input type="button" onclick="location.href='addcart.php?id=<?php echo $row["item_id"];?>';" value="Add to Cart" />
</li>
<?php } ?>
           </ul>
  </div>
  
</div>
	


    <footer class="cf">
        <div class="cf">
            <h4>Powered By: Teron Sampson</h4>
            <span>Privacy Statement</span>
        </div>
    </footer>
   <script src="shop.js"></script>
    <script src="main.js"></script>
</body>

</html>