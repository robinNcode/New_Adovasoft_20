const carouselex = document.getElementById('carouselexExampleControls')
const items = carouselex.querySelectorAll('.carouselex-item');
let currentItem = 0;
let isActive = true;

function setCurrentItem(index) {
  currentItem = (index + items.length) % items.length;
}

function hideItem(direction) {
  isActive = false;
  items[currentItem].classList.add(direction);
  items[currentItem].addEventListener('animationend', function() {
    this.classList.remove('active', direction);
  });
}

function showItem(direction) {
  items[currentItem].classList.add('next', direction);
  items[currentItem].addEventListener('animationend', function() {
    this.classList.remove('next', direction);
    this.classList.add('active');
    isActive = true;
  });
}

document.getElementById('carouselexPrev').addEventListener('click', function(e) {
  e.preventDefault()
  if (isActive) {
    hideItem('to-right');
    setCurrentItem(currentItem - 1);
    showItem('from-left');
  }
});

document.getElementById('carouselexNext').addEventListener('click', function(e) {
  e.preventDefault()
  if (isActive) {
    hideItem('to-left');
    setCurrentItem(currentItem + 1);
    showItem('from-right');
  }
});