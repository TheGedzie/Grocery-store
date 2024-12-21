<?php

require_once('db.php');

$login  = $_POST['username'];
$pass  = $_POST['password'];

if(empty($login)||empty($pass)){
    echo "Заполните все поля!";
}
else{
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result ->num_rows>0)
    {
        while($row = $result->fetch_assoc()) {

            if($login == 'admin' && $pass == 'root' )
            {
                 header('Location:../main_admin/index.php'); 
            }
            else{
                header('Location:../main_users/index.php'); 
            }
           
        }
    } 
    else{
        echo "Нет такого пользователя!";
    }


}