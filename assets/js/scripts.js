function darkTheme() {
const body = document.querySelector('body');
body.classList.add('dark');
console.log(body);
} 
function basicTheme() {
const body = document.querySelector('body');
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