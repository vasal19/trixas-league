var checkBox = document.getElementById('two-way');
checkBox.addEventListener('click', toggleMatch);

var firstTeam = document.getElementById('first-team');
var secondTeam = document.getElementById('second-team');
firstTeam.addEventListener('change', loadTeams);
secondTeam.addEventListener('change', loadTeams);

function toggleMatch() {
  var match = document.getElementById('match');
  if (checkBox.checked == false) {
    var matchCont = document.getElementsByClassName('match-cont')[1];
    match.removeChild(matchCont);
  } else {
    var matchCont = document.createElement("div");
    matchCont.className = "match-cont";
    match.appendChild(matchCont);
    matchCont = document.getElementsByClassName('match-cont')[1];
    var node = document.createElement("input");
    var spanNode = document.createElement("span");
    node.type = "number";
    node.min = "0";
    var team = "Team 2"
    spanNode.innerHTML = team;
    matchCont.appendChild(spanNode);
    matchCont.appendChild(node);
    matchCont.appendChild(node.cloneNode(true));
    spanNode.cloneNode(true);
    var span2Node = document.createElement("span");
    team = "Team 1";
    span2Node.innerHTML = team;
    matchCont.appendChild(span2Node);
  }
}
