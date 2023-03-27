function loadLottieAnimations() {
    // Load the Lottie animations here
    lottie.loadAnimation({
        container: document.getElementById('lottie-animation-1'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '../tpl/images/erbjudande/arrow-down.json'
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