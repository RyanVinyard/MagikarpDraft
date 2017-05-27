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
$pokemonList = mysqli_query($connection, "SELECT forme FROM pokemon");

//loop the data
// if  ($result = mysqli_query($connection, $pokemonList)) {
//
//   //fetch associative array
//   while ($row = mysql_fetch_assoc($result)) {
//     printf ("%s\n", $row["forme"]);
//   }
//
//   //free result set
//   mysqli_free_result($result);
// }




if ($pokemonList->num_rows > 0) {
  echo "<table><tr><th>Pokemon</th></tr>";
  // output data of each row
  while($row = $pokemonList->fetch_assoc()) {
    echo "<tr><td>".$row["forme"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

//close connection
mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/SplashStyles.css">
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="js/SplashScripts.js"></script>
    <meta charset="utf-8">
    <title>Welcome to the draft!</title>
  </head>
  <body>
    <div id="splashHeader">
      <img src="http://fontmeme.com/permalink/170527/feaa6a98b401d0e8560a8e9df3cbe045.png" alt="pokemon-font" border="0">
    </div>
    <h3>Team Names:</h3>
    <div id="teamNames">
    </div>

    <!-- <div id="pokemonTable">
      <table>
        <thead>
          <tr>
            <td>Pokemon</td>
          </tr>
        </thead>
        <tbody>g
        </tbody>
        </table>
    </div> -->



  </body>
</html>
