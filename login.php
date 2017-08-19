<?php
    if(isset($_POST["enterEmail"]) && isset ($_POST["enterPassword"])) { // makes sure username has been entered
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
      $sql = "SELECT email FROM login WHERE email = '$getEmail' and password = '$getPassword'";
      $result->query($sql);
      $row = mysql_fetch_array($result, MYSQLI_ASSOC);
      $active = row['active'];
      $count = mysqli_num_rows($result);
      if ($count == 1){
          session_register("myEmail");
          $_SESSION['login_user'] = $getEmail;
          header(location: loginScreen.html)
      }
      else{
          $error = "invalid login";
      }
      //Closing db
      mysqli_close($conn);
}
?>
