document.addEventListener('DOMContentLoaded', function() { 
    const cards = document.querySelectorAll('.clickable-card');

    cards.forEach(card => {
        card.addEventListener('click', function() {
            const href = this.dataset.href;
            if (href) { 
                window.location.href = href;
            } else {
                console.warn("URL не задан для карточки!"); 
            }
        });
    });
});

$('#cardCarousel').on('slid.bs.carousel', function () {
  let currentIndex = $('.carousel-item.active').index();
  console.log('Текущий слайд:', currentIndex);
});

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navup = document.getElementById('navup');

    menuToggle.addEventListener('click', function() {
        navup.classList.toggle('active');
    });
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-inner custom-tooltip"></div></div>'
    });
});

const menuItems = document.querySelectorAll('.cont li');
const contentItems = document.querySelectorAll('.content-item');

menuItems.forEach(item => {
  item.addEventListener('click', function() {
    menuItems.forEach(item => item.classList.remove('active'));
    contentItems.forEach(item => item.classList.remove('active'));

    this.classList.add('active');

    const target = this.dataset.target;

    document.getElementById(target).classList.add('active');
  });
});
