const current = document.querySelector('#current');
const imgs = document.querySelectorAll('.thumbs img');
const opacity = 1;

imgs.forEach(img => img.addEventListener('click', imgClick));

function imgClick(e) {
    imgs.forEach(img => (img.style.opacity = 0.5));
    current.src = e.target.src;
    e.target.style.opacity = opacity;
}