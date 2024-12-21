
<?php
require_once('db.php');

$login = $_POST['username'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpassword'];
$email = $_POST['email'];

if(empty($login)||empty($pass)||empty($repeatpass)||empty($email)){
    echo "Зполните все поля!";
}else{

  if($pass!=$repeatpass){
    echo "Пароли не совпдают!";

  }
  
  else{

    $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";

    $conn -> query($sql);




  }
}

?>



