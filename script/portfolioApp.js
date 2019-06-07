// IMAGE SLIDES & CIRCLES ARRAYS, LEFT & RIGHT ARROW VARIABLES, PREVIEW IMAGES ARRAY, & COUNTER
const titleImg = document.getElementById('title-img');
const pageTitle = document.getElementById('page-title');
const pageTitleLine = document.getElementById('page-title-line');
const portfolioImgs = document.getElementsByClassName('portfolio-img');
const leftArrow = document.getElementById('left-arrow-portfolio');
const rightArrow = document.getElementById('right-arrow-portfolio');
const previewImgs = document.getElementsByClassName('preview');
let counter = 0;


// SET INITIAL PORTFOLIO TITLE IMAGE
titleImg.src = portfolioImgs[counter].src;
titleImg.alt = portfolioImgs[counter].alt;


// REMOVE 'target' CLASS FROM 'rect' <span> ELEMENTS FUNCTION
// ADD 'target' CLASS MATCH CURRENT IMAGE
const setPreviewTarget = () => {
  for (let i = 0; i < previewImgs.length; i++) {
    previewImgs[i].classList.remove('target');
  }
  previewImgs[counter].classList.add('target');
}


// SET ALL PREVIEW ROW IMAGES FUNCTION
const setPreviewImgs = () => {
  for (let i = 0; i < previewImgs.length; i++) {
    previewImgs[i].style.backgroundImage = 'url(' + portfolioImgs[i].src; + ')';
    //console.log(i);
  }
}
setPreviewImgs();


// CHANGE PORTFOLIO IMAGE FUNCTION
// first, img opacity transitioned to '0'
const changeTitleImg = () => {
  titleImg.style.opacity = '0';
  const currentImage = portfolioImgs[counter];
  
  // next, change img & preview img target with setTimeout
  setTimeout( () => {
    titleImg.src = currentImage.src;
    titleImg.alt = currentImage.alt;
    // call function
    setPreviewTarget();
    
    // lastly, img opacity transitioned to '1'
    setTimeout( () => {
      titleImg.style.opacity = '1';
    }, 1050);
  }, 450);
}


// LEFT & RIGHT ARROW CLICK EVENTS FUNCTION
const arrowClick = e => {
  const target = e.target;
  // left arrow
  if (target == leftArrow) {
    if (counter == 0) {
      //console.log('that was the first image, loop to the last image');
      counter = (portfolioImgs.length - 1);
    } else {
      //console.log('previous image');
      counter--;
    }
  }
  // right arrow
  else if (target == rightArrow) {
    if (counter == (portfolioImgs.length - 1)) {
      //console.log('that was the last image, loop to the first image');
      counter = 0;
    } else {
      //console.log('next image');
      counter++;
    }
  }
  // call this function
  changeTitleImg();
  // hide page title on first arrow click
  if (pageTitle.style.opacity = '1') {
    pageTitle.style.opacity = '0';
    pageTitleLine.style.opacity = '0';
  }
}


// LEFT & RIGHT ARROW CLICK EVENT LISTENERS
leftArrow.addEventListener('click', arrowClick);
rightArrow.addEventListener('click', arrowClick);

