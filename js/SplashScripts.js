$( document ).ready(function() {
    var teamNames = localStorage["array"].split(",");

    var arrayLength = teamNames.length;
    var team = [];

    for (var i = 0; i < arrayLength; i++) {
      team[i] = teamNames[i];
      var currentIndex = teamNames.indexOf(teamNames[i]);
      $("#teamNames").append("<div id=teamSlot" + currentIndex + ">" + teamNames[i] + ": " + "</div><br><br>");
      // $("#teamNames").HTML(teamNames[i] + "<p> : </p>");
    }

    $("#whoseTurn").text(teamNames[0]);
});
