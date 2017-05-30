<!DOCTYPE html>
<html>
	<head>
	<title>Magikarp Draft</title>
  <link rel="stylesheet" type="text/css" href="css/IndexStyles.css">
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="js/IndexScripts.js?v=1"></script>
	<body>
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
