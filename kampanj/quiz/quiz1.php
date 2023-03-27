<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Demo Quiz</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../tpl/styles/kampanj/QR.css" />
    <link rel="stylesheet" type="text/css" href="../../tpl/styles/universal.css" />
    <script type="text/javascript" src="../../tpl/scripts/kampanj/QR.js" defer></script>
</head>
<body>
    <div id="bros" class="bottomHalf"></div>
    <main>
        <div class="top">
            <h1 style="font-size: clamp(1rem, 17.5vw, 85px);" class="guld liText damn2">VAD VET DU</h1>
            <h2 class="guld liText damn2">OM DE VET DU?</h2>
            <span style="font-size: clamp(1rem, 6vw, 24px);" class="topSpan">SVARA PÅ FRÅGORNA FÖR EN CHANS PÅ BILJETTEN!</span>
        </div>
        <div class="grattisFormC">
            <form id="attansForm" method="POST" action="process-formQuiz.php"  autocomplete="off" onsubmit="hellYeah();">
                <label>Vad går dom med i skogen?</label>
                <input type="text" name="q1" required>
                <label>När slutar arbetsdagen om man ska fucka ur?</label>
                <input type="text" name="q2" required>
                <label>Dansa är kul, men vad föredrar dom?</label>
                <input type="text" name="q3" required>
                <label>DuDuDuDu?</label>
                <input type="text" name="q4" required>
                <label>Vem låg med din syrra?</label>
                <input type="text" name="q5" required>
                <label>Din Instagram:</label>
                <input type="text" name="insta" required>
                <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                <div class="checkboxC">
                    <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Näck på Nätet får behandla mina personuppgifter.</span>
                </div>
                <div class="checkboxC">
                    <input name="nyhet" type="checkbox"><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                </div>
                <input style="display:none;" id="klick1" type="submit" name="submit">
            </form>
        </div>
        <div class="mittmitt">
            <input id="removy" class="guld blackBorder guldshadow" onclick="skicka1();" type="button" value="VINN BILJETTEN!">
            <img class="logo" src="../../tpl/images/kampanj/logo.png"/>
        </div>
<!--
        <div class="top2">
            <h1 class="guld liText grattis">SNYGGT!</h1>
            <h3 style="font-size: clamp(1rem, 5.6vw, 29px);" class="guld liText grattis3">VINNAREN ANNONSERAS PÅ INSTAGRAM</h3>
            <h2 class="guld liText grattis2">STRAND KÖK & BAR</h2>
            <span class="topSpan2">EN LITEN TEASER PÅ BILJETTEN</span>
        </div>
        <div class="yey">    
            <img class="biljett" src="../../../tpl/images/mora/biljett.svg"/>
        </div>
        <div class="bot">
            <span class="botSpanTop">FÖLJ OSS:</span>
            <div class="mittmitt2 guld">
                <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL blackBorderS">Strand Kök & Bar</span></a>
                <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL blackBorderS">strandimora</span></a>
            </div>
            <img class="logo" src="../../../tpl/images/mora/logo.png"/>
        </div>
        <div class="intN">
            <span style="font-size: clamp(1rem, 8vw, 35px);" class="intNspan">Din lilla fuskare..</span>
            <video autoplay="" playsinline="" muted="" loop="">
                <source src="../../../tpl/images/mora/well.mp4" type="video/mp4">
            </video>
            <span style="font-size: clamp(1rem, 8vw, 35px);text-align:center;padding: 0 5%;" class="intNspan">Håll koll på våran instagram! Där ser du när tävlingen startar <a style="display: unset; text-decoration:underline;" href="https://www.instagram.com/strandimora/">moraistrand</a></span>
        </div>
!-->
    </main>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
</body>