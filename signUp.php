<?php
    if(isset($_POST["registerEmail"]) && isset($_POST["registerPassword"]) ) {// makes sure username has been entered
    //Variable Initialization
    $host= "localhost";
    $user= "root";
    $password = "Lapras#131";
    $database = "messaging";
    $getEmail;
    $getPassword;
    $getEmail= $_POST['registerEmail'];
    $getPassword=$_POST['registerPassword'];
    //Establishing connection to db
    $conn =mysqli_connect($host, $user, $password, $database)
      or die("Could not connect! <br>" .mysqli_connect_error() );
    //Doing db work
    $sql = "INSERT INTO login(email, password) VALUES ('$getEmail', '$getPassword')";
    $conn->query($sql);
    //Closing db
    mysqli_close($conn);
  }
header('Location: loginScreen.html');
?>

