sessionStorage.setItem('info', 0);

function info() {
    var info = sessionStorage.getItem('info');
    var infoP1 = document.getElementById('info1')
    var infoP2 = document.getElementById('info2')
    var infoP3 = document.getElementById('info3')
    var infoP4 = document.getElementById('info4')
    var infoP5 = document.getElementById('info5')

    switch (info) {
        case '1':
            console.log('Info is 1');
            infoP1.style.display = 'block';
            break;
        case '2':
            console.log('Info is 2');
            infoP2.style.display = 'block';
            break;
        case '3':
            console.log('Info is 3');
            infoP3.style.display = 'block';
            break;
        case '4':
            console.log('Info is 4');
            infoP4.style.display = 'block';
            break;
        case '5':
            console.log('Info is 5');
            infoP5.style.display = 'block';
            break;
        default:
            console.log('Info is not recognized');
            break;
    }
}

function loadLottieAnimations() {
    // Load the Lottie animations here
    lottie.loadAnimation({
        container: document.getElementById('lottie-animation-1'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '../tpl/images/om-oss/Snowfall.json'
    });
}
document.addEventListener('DOMContentLoaded', function() {
    if (typeof lottie !== 'undefined') {
        loadLottieAnimations();
        console.log('It is loaded');
    } else {
        console.error('Lottie library is not loaded');
    }
});