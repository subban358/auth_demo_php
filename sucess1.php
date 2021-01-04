<?php
// Start the session
    session_start();
    
    //print_r($_SESSION);
    if(isset($_SESSION['username'])){
        echo "<h1> Welcome ".$_SESSION["username"]." </h1>";
    }
?>
