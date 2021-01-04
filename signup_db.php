<?php
    session_start();
    //function OpenCon()
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "loginbase";
    
    // Create connection
    $conn = mysqli_connect($host, $user, $password, $db);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    else{
        
        $_SESSION["username"] = $_POST['username'];
        $query = " INSERT INTO cred (username, password) VALUES ('$_POST[username]','$_POST[password]')";

        $result = mysqli_query($conn, $query);

        header("Location: sucess1.php");
        exit;
    
    }

    $conn->close();

?>