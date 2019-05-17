<?php
    session_start();
    require('db_credentials.php');

    $inputUsername = $_POST['createUsername'] ? $_POST['createUsername'] : null;
    $inputPassword = $_POST['createPassword'] ? $_POST['createPassword'] : null;
    $vPassword = $_POST['verifyPassword'] ? $_POST['verifyPassword'] : null;

    //create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);

//    if ($mysqli->connect_error) {
//    die('Connect Error (' . $mysqli->connect_errno . ') '
//        . $mysqli->connect_error);
//        print "failed";
//    }  
//        
//    print "Connected! Status:" . $mysqli->host_info . "\n";
    
    //protect database from corrupt user input
    $inputUsername = $mysqli->real_escape_string($inputUsername);
    $inputPassword = $mysqli->real_escape_string($inputPassword);
    $vPassword = $mysqli->real_escape_string($vPassword);

    $protectedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);
    
    //Check if the passwords match
    
    if($inputPassword == null || $vPassword == null || $inputUsername == null){
        echo '<p style = "text-align: center;">You did not fill out all the fields. All are required. Try Again.</p>';
        session_write_close();
        exit;
    }
    
    if($inputPassword != $vPassword){
        echo '<p style = "text-align: center;">Oops!The passwords you input did not match. Please try again.</p>';
        session_write_close();
        exit;
    }
    
    //Check for duplicate username
    $query = "SELECT * FROM user_info WHERE username = ' ".$inputUsername." ' ";
    $result = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($result) == 1) {
        echo '<p style = "text-align: center;">Oops! That Username is already taken. <br>Please try a different one.</p>';    
        session_write_close();
        exit;
    }
    //Username is not takin and the passwords match
    else {
        $sql = "INSERT INTO user_info (username, password) VALUES ('".$inputUsername."', '".$protectedPassword."')";
        echo '<p style = "text-align: center;">Success! You Have Made an Account!</p>';
        if($mysqli->query($sql) === TRUE) {
            session_write_close();
            exit;
        }
         else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>