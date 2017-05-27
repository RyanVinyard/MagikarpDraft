
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

    <div id="pokemonTable">
      <table>
        <thead>
          <tr>
            <td>Pokemon</td>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $result){
            echo'<tr>';
            echo'<td>'. $result['forme']."</td>";
            echo'<tr>';
          } ?>
        </tbody>
        </table>
    </div>



  </body>
</html>