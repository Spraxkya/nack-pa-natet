var nav = document.getElementsByTagName('nav')[1];

function dropdownMenu() {

    if (nav.style.display === 'none') {
        nav.style.display = 'flex';
      } else {
        nav.style.display = 'none';
      }
}

document.body.onload = dropdownMenu();