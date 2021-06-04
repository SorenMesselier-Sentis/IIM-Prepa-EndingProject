const items = document.querySelectorAll('img');
const nbSlide = items.length;
const next = document.querySelector('.right');
const previous = document.querySelector('.left');
let count = 0;

function nextSlide(){
  items[count].classList.remove('active')

  if (count < nbSlide -1 ){
    count++;
  }else {
    count = 0;
  }

  items[count].classList.add('active')
  //console.log(count);
}
next.addEventListener('click', nextSlide)

function previousSlide(){
  items[count].classList.remove('active')
  if (count > 0){
    count--;
  }else {
    count = nbSlide - 1;
  }

  items[count].classList.add('active')
  //console.log(count);
}
previous.addEventListener('click', previousSlide)