<!DOCTYPE html>
<html>
	<head>
	<title>Magikarp Draft</title>
  <link rel="stylesheet" type="text/css" href="css/IndexStyles.css">
	<body>
		<script>
			var numTeams = 0;
			var teamNames = [];
			function numPlayers(){
    			var number1 = parseInt(document.getElementById("number1").value);
    			numTeams = number1;

					document.getElementById("banner").style.display = 'none';
					document.getElementById("banner2").style.display = 'block';
					console.log("you did it");

				for (i = 0; i<number1; i++){
    				product = document.createElement("input");
    				product.placeholder = "Enter Team Name " + (i+1);
    				product.name = "name"+(i+1);
    				product.id = "id"+(i+1);

					document.getElementById("formcontent").appendChild(product);
				}
				document.getElementById("number1").style = "display: none";
				document.getElementById("submit").style = "display: none";
				document.getElementById("endButt").style = "display: initial";


			}

			function endingFunc(){
				for (i=0; i<numTeams; i++){
					teamNames.push(document.getElementById("id"+(i+1)).value);
				}

				localStorage["array"] = teamNames;
				window.location.href = "splash.php";





			}
			window.onload = function() {
  		document.getElementById("banner2").style.display = 'none';
			};
		</script>
		<div id="banner">
			<img src="http://fontmeme.com/permalink/170527/d83da235a584b670ff5accbab4b97a00.png" alt="pokemon-font" border="0">
		</div>
		<div id="banner2">
			<img src="http://fontmeme.com/permalink/170527/657fe99a7e202d98757f2b85c49daa96.png" alt="pokemon-font" border="0">
		</div>
		<br>
		<div class="inputs">
			<input id="number1" type="number" min = "2" max = "10">
			<input id ="submit" type="submit" value="Submit"  onclick="numPlayers()">
			<br><br>
		 	<div id="formcontent"></div>
		 	<br><br>
		 	<input id="endButt" type ="button" value = "Submit Team Names" style="display: none;"
		 		onclick ="endingFunc()">
		</div>
		<br>
		<div id="hitmontop">
			<img src="./img/hitmontop.gif">
		</div>

	</body>
</html>
