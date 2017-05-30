$( document ).ready(function() {
    var teamNames = localStorage["array"].split(",");
    var arrayLength = teamNames.length;
    var team = [];

    for (var i = 0; i < arrayLength; i++) {
      team[i] = teamNames[i];
      $("#teamNames").append(teamNames[i] + ":" + "<br><br>");
    }

    $("#whoseTurn").text(teamNames[0]);
});
