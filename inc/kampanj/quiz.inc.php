<?php
    if (isset($_POST["submit"])) {

    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $insta = $_POST['insta'];
    $emailPre = $_POST['email'];
    $ident = $_POST['legitimation'];

    if($_POST['nyhet'] == null) {
        $news = 'off';
    }else {
        $news = $_POST['nyhet'];
    }

    $email = strtolower($emailPre);

    include '../db.inc.php';

    $timed = new DateTime();
    $timedA = $timed->modify('+ 8 hours');
    $timedC = $timedA->format('r');

    $SQL = $conn->prepare("INSERT INTO `de_vet_du_member$ident` (`q1`,`q2`,`q3`,`q4`,`q5`,`insta`,`email`,`news`,`tidslag`) VALUES (?,?,?,?,?,?,?,?,?)");

    $SQL->bind_param('sssssssss', $q1, $q2, $q3, $q4, $q5, $insta, $email, $news, $timedC);
    $SQL->execute();

    header("location: ../../pa-natet/kampanj/strand-kok&bar/3.php?loggedIn$ident");
    exit();
    } else {
    header("location: ../../pa-natet/kampanj/strand-kok&bar/3.php?fail");
    exit();
    }