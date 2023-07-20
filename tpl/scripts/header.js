var nav = document.getElementsByTagName('nav')[1];
var dropDown = document.querySelector('.drop');

function dropdownMenu() {

    if (nav.style.display === 'none') {
        nav.style.display = 'flex';
        dropDown.style.opacity = '1';
      } else {
        nav.style.display = 'none';
        dropDown.style.opacity = '0';
      }
}