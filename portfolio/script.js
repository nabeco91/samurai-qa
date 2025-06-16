// MAIN
const mainAnimation = document.querySelector('.main-animation');

window.addEventListener('load',function(){
  if(mainAnimation) {
    mainAnimation.classList.add('fade-in');
  }
});

// skill fade-in
window.addEventListener('scroll', function(){
  const skillItem = document.querySelectorAll('.skill-item');
  skillItem.forEach((element, index)=>{
    const position = element.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (position < screenPosition){
      element.style.setProperty('--delay', index);
      element.classList.add('skill-item-fadein');
    }
  })
})

//about fade-in
const aboutAnimation = document.querySelector('.about-container');

window.addEventListener('scroll',function(){
  if(aboutAnimation){const position = aboutAnimation.getBoundingClientRect().top; // aboutAnimation の位置を取得
  const screenPosition = window.innerHeight / 1.3;
  
  if(position < screenPosition){
    aboutAnimation.classList.add('about-fadein')
  }}
});

//scroll to top
const scrollToTopBtn = document.getElementsByClassName('scrollToTop')[0];
if(scrollToTopBtn){
  scrollToTopBtn.addEventListener('click',function(){
    window.scrollTo({
      top: 0,
      behavior:'smooth'
    });
  });
};

//hamburger menu