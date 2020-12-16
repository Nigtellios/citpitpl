function openNav() {
  document.getElementById("overlay").classList.add('opened');
}

function closeNav() {
  document.getElementById("overlay").classList.remove('opened');
}

document.getElementById('main').addEventListener('click', closeNav);

window.addEventListener('load', function(){
  new Glider(document.querySelector('.glider'), {
    // Mobile-first defaults
    slidesToShow: 1,
    slidesToScroll: 1,
    scrollLock: true,
    // draggable: false,
    dots: '.dots',
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    },
    responsive: [
      {
        // max-width greater than >= 775px
        breakpoint: 775,
        settings: {
          // draggable: true,
          // Set below to `auto` and provide item width to adjust to viewport
          slidesToShow: 2,
          slidesToScroll: 1,
          itemWidth: 150,
          duration: 0.25
        }
      },{
        // max-width greater than >= 1024px
        breakpoint: 1024,
        settings: {
          // draggable: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          itemWidth: 150,
          duration: 0.25
        }
      }
    ]
  });
});