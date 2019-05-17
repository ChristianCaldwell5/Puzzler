<?php
    
    require('db_credentials.php');

    $inputUsername = $_POST['username'] ? $_POST['username'] : null;
    $inputPassword = $_POST['password'] ? $_POST['password'] : null;

//    $username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    $inputUsername = $mysqli->real_escape_string($inputUsername);

    $query = "SELECT * FROM user_info WHERE username = '".$inputUsername."' ";
    $result = $mysqli->query($query);

    if($result->num_rows === 1) {
            
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if(password_verify($inputPassword, $row['password'])){
            setcookie('username', $username);
            header("Location: puzzlerMember.php");
            exit; 
        }
            
    }    
    
    echo '<script language="javascript">';
    echo 'alert("Oops! Wrong username or password was used!")';
    echo '</script>';
    require "puzzlerLogin.php";
    
   
?>
