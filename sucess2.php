<?php
// Start the session
    session_start();
    
    //print_r($_SESSION);
    if(isset($_SESSION['loggedin'])){
        echo "<h1> Log in successfull for ".$_SESSION["loggedin"]." </h1>";
    }
?>
