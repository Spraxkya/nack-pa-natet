sessionStorage.setItem('info', 1);

const pilV = document.querySelector(".pilV");
const pilH = document.querySelector(".pilH");

var infoP1 = document.getElementById('info1');
var infoP2 = document.getElementById('info2');
var infoP3 = document.getElementById('info3');
var infoP4 = document.getElementById('info4');

pilV.addEventListener("click", () => {

    var info = sessionStorage.getItem('info');

    switch (info) {
        case '1':
            console.log('Info is 4');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'flex';
            sessionStorage.setItem('info', 4);
            break;
        case '2':
            console.log('Info is 1');
            infoP1.style.display = 'flex';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            sessionStorage.setItem('info', 1);
            break;
        case '3':
            console.log('Info is 2');
            infoP1.style.display = 'none';
            infoP2.style.display = 'flex';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            sessionStorage.setItem('info', 2);
            break;
        case '4':
            console.log('Info is 3');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'flex';
            infoP4.style.display = 'none';
            sessionStorage.setItem('info', 3);
            break;
        default:
            console.log('Info is not recognized');
            break;
    }
});

pilH.addEventListener("click", () => {

    var info = sessionStorage.getItem('info');

    switch (info) {
        case '1':
            console.log('Info is 2');
            infoP1.style.display = 'none';
            infoP2.style.display = 'flex';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            sessionStorage.setItem('info', 2);
            break;
        case '2':
            console.log('Info is 3');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'flex';
            infoP4.style.display = 'none';
            sessionStorage.setItem('info', 3);
            break;
        case '3':
            console.log('Info is 4');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'flex';
            sessionStorage.setItem('info', 4);
            break;
        case '4':
            console.log('Info is 1');
            infoP1.style.display = 'flex';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            sessionStorage.setItem('info', 1);
            break;
        default:
            console.log('Info is not recognized');
            break;
    }
});

function updateImages() {
    var screenWidth = window.innerWidth;
    var images = document.getElementsByClassName('exImg');
  
    var imageUrls = [
      '../tpl/images/portfolio/nack-mb.png',
      '../tpl/images/portfolio/kampanj-mb.png',
      '../tpl/images/portfolio/tapto-mb.png',
      '../tpl/images/portfolio/dalafastighet-mb.png'
    ];
  
    var standardUrls = [
      '../tpl/images/portfolio/nackcollective.jpg',
      '../tpl/images/portfolio/kampanj.jpg',
      '../tpl/images/portfolio/dala-tapto.jpg',
      '../tpl/images/portfolio/fastighetservice.jpg'
    ];
  
    for (var i = 0; i < images.length; i++) {
      var image = images[i];
      var imageUrlIndex = i % imageUrls.length; // Cycle through image URLs
  
      if (screenWidth < 465) {
        image.src = imageUrls[imageUrlIndex];
      } else {
        image.src = standardUrls[imageUrlIndex];
      }
    }
  }
  
  // Call the function on window load
  window.addEventListener('load', updateImages);
  
  // Call the function on window resize
  window.addEventListener('resize', updateImages);