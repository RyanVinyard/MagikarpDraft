

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/SplashStyles.css">
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="js/SplashScripts.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Welcome to the draft!</title>
  </head>
  <body>
    <div id="splashHeader">
      <img src="http://fontmeme.com/permalink/170527/feaa6a98b401d0e8560a8e9df3cbe045.png" alt="pokemon-font" border="0">
    </div>
    <h3>Team Names:</h3>
    <div id="teamNames">
    </div>

      <?php
      //Connect to the database
      $connection = mysqli_connect("localhost:3306", "root", "", "draftdb");

      //Check connection
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      //Query
      mysqli_query($connection, "SET NAMES 'utf8'");
      $pokemonList = mysqli_query($connection, "SELECT forme, id FROM pokemon");

      echo '<table border="1" class="pTable">';
      $i=0;
      while($row = mysqli_fetch_assoc($pokemonList))
      {
        if($i%12==0){
          echo'<tr class="tr">';
          $pokemon = '';
        }

        //$pokemon .='<td class="td"><img src="./img/pokeImages/737.png" alt = "" style="width:50px; height:50px; padding-top:5px;"><button onclick="pClick">'.$row['forme'].'</button></td>';
        $pokemon .='<td class="td"><img src="./img/pokeImages/'.$row['id'].'.gif" alt = "" style="width:50px; height:50px; padding-top:5px;"><button onclick="pClick">'.$row['forme'].'</button></td>';



        if($i%12==9){
          echo '</tr>';
          echo '<tr class="tr">'. $pokemon . '</tr>';
        }

        $i++;
      }
      echo '</table>';



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

      //Second attempt
      // if ($pokemonList->num_rows > 0) {
      //   echo "<table><tr><th>Pokemon</th></tr>";
      //   // output data of each row
      //   while($row = $pokemonList->fetch_assoc()) {
      //     echo "<tr><td>".$row["forme"]."</td></tr>";
      //   }
      //   echo "</table>";
      // } else {
      //   echo "0 results";
      // }

      //close connection
      mysqli_close($connection);

      ?>


  </body>
</html>
