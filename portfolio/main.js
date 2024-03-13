var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
  let sidebar = document.querySelector('.sidebar')
let menu = document.querySelector('.bx-menu')

menu.addEventListener('click',()=>{
  sidebar.classList.toggle('active')
})
  if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
      }

let cursor = document.querySelector(".cursor");

document.addEventListener("mousemove",(dot)=>{
  cursor.style.left = dot.x+"px";
  cursor.style.top = dot.y+"px"; 
})