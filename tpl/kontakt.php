<!DOCTYPE html>
<html lang="sv">
<head>
        <title> Kontakt | Näck på nätet </title>
        <meta name="google-site-verification" content="eNBc7Cwi3V09UMFuT71TavlUyDX_eCZ5ThHZb6nb4jQ" />
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Vi hjälper dig skapa ett smultronställe på nätet">
        <meta http-equiv=”content-language” content=”sv-SE”/>
        <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
        <link rel="stylesheet" type="text/css" href="./styles/kontakt.css"/>
        <link rel="stylesheet" type="text/css" href="./styles/header.css"/>
    <link rel="stylesheet" type="text/css" href="./styles/footer.css" />
        <script type="text/javascript" src="./scripts/kontakt.js" async></script>
        <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.14/build/player/lottie.min.js"></script>
</head>
<body>
<?php
        include './header.php';
?>
        <main>
        <section class="hero">
            <div class="headings">
                <h1>Kontakta oss!</h1>
            </div>
            <div class="hero-content">
                <div class="left">
                    <div class="container">

                        <form method="POST" action="../inc/kontakt.inc.php">
                                <h2>Vill du bli kontaktad?</h2>
                                <div>
                                        <label for="name">Namn:</label>
                                        <input type="text" id="name" name="name"><br>
                                </div>
                                <div>
                                        <label for="email">Email: </label>
                                        <input type="email" id="email" name="email"><br>
                                </div>
                                <input type="submit" value="Enter">
                        </form>
                        <ul>
                                <li>
                                        <h2>Maila oss!</h2>
                                        <a href="">rikard.johansson@nack-pa-natet.se</a>
                                </li>
                                <li>
                                        <h2>Ring oss!</h2>
                                        <a href="">073-685 1904</a>
                                </li>
                                <li>
                                        <h2>Här bor vi!</h2>
                                        Skomakargatan 5, 781 70 Borlänge
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg id="cloud1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409 273">
                <path class="cls-1" d="m400.76,147.13c5.01,8.52,7.88,18.43,7.88,29,0,31.84-26.03,57.66-58.13,57.66-12.46,0-24.01-3.89-33.48-10.52-9.86,28.62-37.02,49.18-68.98,49.18-20.95,0-39.83-8.83-53.13-22.96-7.27,1.51-14.82,2.3-22.55,2.3-18.42,0-35.76-4.48-50.94-12.4-12.84,11.28-29.68,18.13-48.12,18.13C33.02,257.52.36,224.86.36,184.58c0-28.96,16.88-53.98,41.33-65.76-1.69-6.15-2.59-12.63-2.59-19.31,0-40.29,32.66-72.95,72.95-72.95,8.93,0,17.49,1.61,25.4,4.55,13.38-15.64,33.27-25.56,55.47-25.56,14.35,0,27.73,4.14,39.02,11.31,12.55-10.2,28.55-16.31,45.98-16.31,35.84,0,65.64,25.85,71.78,59.92.27-.01.54-.01.81-.01,32.1,0,58.13,25.82,58.13,57.67,0,10.57-2.87,20.48-7.88,29Z"/>
            </svg>
            <svg id="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                <path d="M1664 896q0 209-103 385.5T1281.5 1561 896 1664t-385.5-103T231 1281.5 128 896t103-385.5T510.5 231 896 128t385.5 103T1561 510.5 1664 896z" class="svgShape"></path>
            </svg>
            <div id="lottie-animation-1"></div>
        </section>
        </main>
        <?php
            include './footer.php';
        ?>
        <script>
                function loadLottieAnimations() {
                // Load the Lottie animations here
                lottie.loadAnimation({
                        container: document.getElementById('lottie-animation-1'),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: '../tpl/images/kontakt/half-moon.json'
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
        </script>
</body>