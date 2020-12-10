function openNav() {
  document.getElementById("overlay").style.width = "50%";
}

function closeNav() {
  document.getElementById("overlay").style.width = "0%";
}

document.getElementById('main').addEventListener('click', closeNav);
document.getElementByClassName('.menu-item').addEventListener('click', closeNav);