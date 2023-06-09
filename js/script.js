
window.onscroll = () => {
  if (window.scrollv > 80) {
    document.querySelector('.navigation .navbar').classList.add('active');
  } else {
    document.querySelector('.navigation .navbar').classList.remove('active');
  }
}


/*search form*/

let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
  searchForm.classList.toggle('active');
}



/*swiper featured products*/



const swiper = new Swiper('.featured-slider', {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});



/*products.html */

window.onscroll = () => {
  if (window.scrollv > 80) {
    document.querySelector('.products .navbar').classList.add('active');
  } else {
    document.querySelector('.products .navbar').classList.remove('active');
  }
}




/*news*/

const btn = document
    .querySelector('.read-more-btn');

const text = document
    .querySelector('.cardread-more');

const cardHolder = document
    .querySelector('.card-holder');

cardHolder
    .addEventListener('click', e => {

        const current = e.target;

        const isReadMoreBtn = current.className.includes('read-more-btn');

        if (!isReadMoreBtn)
            return;

        const currentText = e.target.parentNode.querySelector('.cardread-more');

        currentText.classList.toggle('cardread-more--open');

        current.textContent = current.textContent.includes('Read More...') ? 'Read Less...' : 'Read More...';

    });




    