<head>
    <link rel="stylesheet" type="text/css" href="./styles/header.css" />
</head>
<header id="header">
        <div>
            <div class="logo">
                <img src="./images/logo.png" alt="">
            </div>
            <nav class="classic">
                <ul>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/') { echo 'class="active"'; } ?>><a href="/nack-pa-natet/">Hem</a></li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/erbjudande.php') { echo 'class="active"'; } ?>><a href="./erbjudande.php">Erbjudande</a></li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/kontakt.php') { echo 'class="active"'; } ?>><a href="./kontakt.php">Kontakta oss</a></li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/portfolj.php') { echo 'class="active"'; } ?>><a href="./portfolj.php">Portfölj</a></li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/om-oss.php') { echo 'class="active"'; } ?>><a href="./om-oss.php">Om oss</a></li>
                </ul>
                <button onclick="dropdownMenu();"><img src="./images/navmenu-100.svg" alt=""></button>
            </nav>
        </div>
        <nav class="drop">
            <button onclick="dropdownMenu();"><img src="./images/right-arrow.svg" alt=""></button>
            <ul>
                <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/') { echo 'class="active"'; } ?>><a href="/nack-pa-natet/">Hem</a></li>
                <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/erbjudande.php') { echo 'class="active"'; } ?>><a href="./erbjudande.php">Erbjudande</a></li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/kontakt.php') { echo 'class="active"'; } ?>><a href="./kontakt.php">Kontakta oss</a></li>
                <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/portfolj.php') { echo 'class="active"'; } ?>><a href="./portfolj.php">Portfölj</a></li>
                <li <?php if ($_SERVER['PHP_SELF'] == '/nack-pa-natet/tpl/om-oss.php') { echo 'class="active"'; } ?>><a href="./om-oss.php">Om oss</a></li>
            </ul>
        </nav>
        <script type="text/javascript" src="./scripts/header.js" async></script>
    </header>