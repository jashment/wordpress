window.onload = function () {
  document.getElementById('primaryNav').className = 'closed';
};
function toggleMenu() {
  var y = document.getElementById('primaryNav');
  var x = document.getElementById('hamburgerBtn');
  if (document.getElementById('primaryNav').className === 'closed') {
    y.className = 'open';
    x.className = 'open';
  } else {
    y.className = 'closed';
    x.className = 'closed'
  }
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 