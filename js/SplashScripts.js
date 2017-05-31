$( document ).ready(function() {
    var teamNames = localStorage["array"].split(",");

    var arrayLength = teamNames.length;
    var team = [];

//This populates the html with team names. It also creates several divs with the
//ids of teamSloti, where i is the current team's index. Nifty.
    for (var i = 0; i < arrayLength; i++) {
      team[i] = teamNames[i];
      var currentIndex = teamNames.indexOf(teamNames[i]);
      $("#teamNames").append("<div id=teamSlot" + currentIndex + ">" + teamNames[i] + ": " + "</div><br><br>");
    }

    $("#whoseTurn").text(teamNames[0]);
});
