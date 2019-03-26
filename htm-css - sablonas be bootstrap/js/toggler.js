let toggler = document.querySelector('.login-toggler');
let menuContent = document.querySelector('[data="toggler-menu"]');

menuContent.querySelector('.separator').remove();

menuContent.addEventListener('mouseleave', ()=>{
  toggleMenu();
})
// let myX;
// let myY;

toggler.addEventListener('click', (e) => {
  if (menuContent.classList.contains('d-none')) {
    menuContent.classList.remove('d-none');
  }
  toggleMenu();
  // myX = e.pageX;
  // myY = e.pageY;
  // window.addEventListener('mousemove', watchDistance);
});

// function watchDistance(e) {
//   let difX = myX - e.pageX;
//   let difY = myY - e.pageY;
//   let distance = Math.pow(difX ** 2 + difY ** 2, 1 / 2);
//   if (distance > 350) {
//     toggleMenu();
//     window.removeEventListener('mousemove', watchDistance);
//   }
// }

function toggleMenu() {
  if (menuContent.classList.contains('login-menu-show')) {
    menuContent.classList.remove('login-menu-show');
    menuContent.classList.add('login-menu-hidden');
  } else {
    menuContent.classList.remove('login-menu-hidden');
    menuContent.classList.add('login-menu-show');
  }
}