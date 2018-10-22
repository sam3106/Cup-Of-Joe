<?php
session_start();
    $username = $_POST['username'];

$username = $_POST['username'];
$db = mysqli_connect("localhost", "root", "root", "coffeelogin");
$username = $_POST['username'];
$password = $_POST['password'];
$email =  $_POST['email'];
    



if(isset($_POST['sign-in'])){

$username_match_email = "SELECT * FROM members WHERE email = '".$_POST['email']."' AND password='".$_POST['password']."'";
$user_result = mysqli_query($db, $username_match_email);
$count_user = mysqli_num_rows($user_result);

if($count_user > 0){
$user_row = mysqli_fetch_array($user_result);
$_SESSION['username'] = $user_row['username'];
$_SESSION['user_id'] = $user_row['ID']; 
header("location:login.php");
exit();
}

else{
header("location:login-error.php");
exit();
}
}

if(isset($_POST['sign-up'])){
$check_duplicate_username = "SELECT username FROM members WHERE username = '$username' ";
$user_result = mysqli_query($db, $check_duplicate_username);
$count_user = mysqli_num_rows($user_result);
$check_duplicate_email = "SELECT email FROM members WHERE email = '$email' ";
$email_result = mysqli_query($db, $check_duplicate_email);
$count_email = mysqli_num_rows($email_result);
if($count_user > 0){
    header("Location:signup-error.php");
        $_SESSION['username'] = null;  
    return false;
    exit();
  }if($count_email > 0){
    header("Location:signup-error.php");
        $_SESSION['username'] = null;  
    return false;
    exit();
  }
    else{
        $query = "INSERT INTO members (username, email, password) ";
 $query .= "VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($db, $query);
            $_SESSION['username'] = $_POST['username'];
       $_SESSION['user_id'] = $_SESSION['username'];
        header("location:login.php");
         exit();
}
} 

if(isset($_POST['remove'])){
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$statementDelete = $db->query("DELETE * FROM items WHERE item_id IN (SELECT item_id FROM cart WHERE user_id=".$_SESSION['user_id'].")"); 
while($rowDelete = $statementDelete->fetch(PDO::FETCH_ASSOC)){
}
}
?>