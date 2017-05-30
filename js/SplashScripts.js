

$( document ).ready(function() {
    var teamNames = localStorage["array"].split(",");
    var arrayLength = teamNames.length;

    function pClick() {
      alert("working");
    }
    for (var i = 0; i < arrayLength; i++) {
      $("#teamNames").append(teamNames[i] + ":" + "<br><br>");
    }


});
