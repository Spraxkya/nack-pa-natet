/* Loading Screen */
window.addEventListener("load", function () {
    var loadScreen = document.getElementById('loading-screen');

    setTimeout(function(){
        document.body.removeChild(loadScreen);
    }, 3000);

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        document.body.style.overflow = 'scroll';
    }
});