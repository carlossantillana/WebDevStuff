<?php
    if(isset($_POST["enterEmail"]) && isset($_POST["enterPassword"]) ) {// makes sure username has been entered
    //Variable Initialization
    
    $host= "localhost";
    $user= "root";
    $password = "Lapras#131";
    $database = "messaging";
    $conn =mysqli_connect($host, $user, $password, $database)
    or die("Could not connect! <br>" .mysqli_connect_error() );
    $getEmail= stripslashes( $_POST['enterEmail']);
    $getPassword= stripslashes($_POST['enterPassword']);
    $db = mysqli_select_db($conn, "login");
    //Doing db work

      $query= mysqli_query($conn, "SELECT * FROM login WHERE email = '$getEmail' and password = '$getPassword'");
      $rows = mysqli_num_rows($query);
      if ($rows == 1 ){
        header('Location: loginScreen.html');
      }
      else{
  	header('Location: index.html');
      }
      //Closing db
      mysqli_close($conn);
}
?>
