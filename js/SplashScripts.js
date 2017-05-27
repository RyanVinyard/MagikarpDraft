$( document ).ready(function() {
    console.log("Page has loaded successfully");
    console.log(localStorage);
    var teamNames = localStorage["array"].split(",");
    console.log(teamNames);
    document.getElementById("teamNames").innerHTML = teamNames[0];

});
