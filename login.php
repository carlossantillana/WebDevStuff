<?php
    if(isset($POST['enterEmail'])){ // makes sure username has been entered
    //Variable Initialization
    $host= "localhost";
    $user= "root";
    $password = "Lapras#131";
    $database = "messaging";
    $getEmail;
    $getPassword;
    $getEmail= $_POST['enterEmail'];
    $getPassword=$_POST['enterPassword'];
    //Establishing connection to db
    $conn =mysqli_connect($host, $user, $password, $database)
      or die("Could not connect! <br>" .mysqli_connect_error() );
      //Doing db work
      $sql = "";
      $conn->query($sql);
      //Closing db
      mysqli_close($conn);
}
?>

