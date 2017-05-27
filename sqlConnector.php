<?php

//Get Values from login page
//$user = $_POST['username'];

//Connect to the database
$connection = mysqli_connect("localhost", "root", "", "draftdb");

//Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//Query
$pokemonList = mysqli_query("SELECT forme FROM pokemon limit 1");

//loop the data
if ( ($result = mysqli_query($connection, $pokemonList)) {

  //fetch associative array
  while ($row = mysql_fetch_assoc($result)) {
    printf ("%s\n", $row["forme"]);
  }

  //free result set
  mysqli_free_result($result)
}

//close connection
mysqli_close($connection);

?>
