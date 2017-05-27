<?php

class pList {
  public $name;
}

//Get Values from login page
//$user = $_POST['username'];

//Connect to the database
  $connection = mysqli_connect("localhost", "root", "", "draftdb");

  //Option 1 Vardump correspondes to the pList class
  $pokemonList = mysql_query("SELECT forme FROM pokemon limit 1");
  $obj = mysql_fetch_object($result, 'pList');
  var_dump($obj);


  // Side option if the class var_dump doesn't work
  // Query the full database
  // $pokemonList = mysqli_query($connection, "SELECT forme FROM pokemon")
  //  or die("Failed to query database ".mysql_error());
  //
  // while ($row = mysql_fetch_object($pokemonList)) {
  //  echo $row->forme;
  // }
  // mysql_free_result($pokemonList)


?>
