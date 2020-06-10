function showsize() {
  var skridtlaengde = document.getElementById("skridtlaengde").value;
  var stelstorrelse = 0.66 * skridtlaengde;
  var hojde = stelstorrelse * -12.7604;
  var placering = "translate(0px, " + hojde + "px)";
  document.getElementById("indicator").style.transform = placering;
  document.getElementById("stelstorrelse_output").innerHTML = "Din stelstørelse er " + Math.round(stelstorrelse) + " cm";
}
