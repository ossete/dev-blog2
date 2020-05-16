const body = document.querySelector('body');
const openMenu = document.querySelector('#open-menu');
const closeMenu = document.querySelector("#close-menu");
const navMobile = document.querySelector("#nav-mobile");
/* Body Class */
openMenu.addEventListener('click', function() {
  body.classList.add('menu-is-open');
  console.log(body);
});
closeMenu.addEventListener('click', function() {
  body.classList.remove('menu-is-open');
  console.log(body);
});
/* Show Menu */
openMenu.addEventListener('click', function() {
  navMobile.classList.add('visible');
  console.log(navMobile);
});
closeMenu.addEventListener('click', function() {
  navMobile.classList.remove('visible');
  console.log(navMobile);
});

/* Open Menu Opacity */
openMenu.addEventListener('click', function() {
  openMenu.classList.add('opacity');
  console.log(openMenu);
});
closeMenu.addEventListener('click', function() {
  openMenu.classList.remove('opacity');
  console.log(openMenu);
});
/* Close Menu Opacity */
openMenu.addEventListener('click', function() {
  closeMenu.classList.remove('opacity');
  console.log(closeMenu);
});
closeMenu.addEventListener('click', function() {
  closeMenu.classList.add('opacity');
  console.log(openMenu);
});


/* Dark Theme Function */
function darkTheme() {
body.classList.add('dark');
console.log(body);
} 
function basicTheme() {
body.classList.remove('dark');
console.log(body);
} 
document.getElementById("darkTheme").onclick = function() {darkTheme()};
document.getElementById("basicTheme").onclick = function() {basicTheme()};




//This maybe an alternative
// SET/GET Element Attributes
// h1.setAttribute('id', 'main-header'); 
// h1.removeAttribute('id');

//Codes were used at the index html / inner js
/* <script>
function darkTheme() {
const body = document.querySelector('body');
body.classList.add('dark');
} 
function basicTheme() {
const body = document.querySelector('body');
body.classList.remove('dark');
} 
</script> */