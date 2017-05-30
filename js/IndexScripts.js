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
