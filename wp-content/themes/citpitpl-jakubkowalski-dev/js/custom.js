function openNav() {
  document.getElementById("overlay").classList.add('opened');
}

function closeNav() {
  document.getElementById("overlay").classList.remove('opened');
}

document.getElementById('main').addEventListener('click', closeNav);