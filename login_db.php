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
        
        $x = $_POST['username'];		
        $y = $_POST['password'];		
        $_SESSION["loggedin"] = $_POST['username'];

        $query = "SELECT password FROM cred WHERE username LIKE ". "'".$x."'";
        $result = mysqli_query($conn,$query);

        $ans = mysqli_fetch_array($result);

        if ($ans[0] == $y){
            header("Location: sucess2.php");
            exit;
        }
        else{
            echo "<h3> Login Failed </h3>";
        } 
    }
    $conn->close();
?>