function openNav() {
  // document.getElementById("overlay").style.width = "50%";
  document.getElementById("overlay").classList.add('opened');
}

function closeNav() {
  // document.getElementById("overlay").style.width = "0%";
  document.getElementById("overlay").classList.remove('opened');
}

document.getElementById('main').addEventListener('click', closeNav);