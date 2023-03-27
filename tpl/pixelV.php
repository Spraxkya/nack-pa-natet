<!DOCTYPE html>
<html lang="sv">
<head>
    <title>Näck på nätet | Webbyrå </title>
    <meta name="google-site-verification" content="eNBc7Cwi3V09UMFuT71TavlUyDX_eCZ5ThHZb6nb4jQ" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.5" />
    <meta name="description" content="Vi hjälper dig skapa ett smultronställe på nätet">
    <meta http-equiv=”content-language” content=”sv-SE”/>
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl/styles/pa-natet.css" />
    <script type="text/javascript" src="./tpl/scripts/universal.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header">
        <div id="nav">
            <ul>
                <li onclick="tab1Pc();" id="li1"> OM OSS </li>
                <li onclick="tab2Pc(); rubriPc();" id="li2"> PRODUKTER </li>
                <li onclick="tab3Pc();" id="li3"> SMULTRONSTÄLLE </li>
            </ul>
        </div>
    </header>
    <main>
        <div id="tab1">
            <div id="left1">
                <h1> Webbyrå </h1>
                <img class="datorI" alt="En 8-bitars dator med näck skrivet på skärmen." src="./tpl/images/pa-natet/Dator.svg">
                <div class="datorC">
                    <span class="datorT fonti"> - Välkommen till Näck på nätet!</span>
                    <span class="datorT fonti"> - Ditt <span class="datorT fonti" style="color: var(--pink);">smultronställe</span> på nätet!</span>
                </div>
            </div>
            <div class="hideM" id="right1">
                <div class="right1C">
                    <div class="trettretH">
                        <div class="trettretW">
                            <img alt="En blå 8-bitars stjärna." class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                        <div class="trettretW" style="flex-direction: column;">
                            <img alt="" class="textS" src="./tpl/images/pa-natet/Sjalvutnamnda-kreativa-stjarnskott.svg">
                        </div>
                        <div class="trettretW">
                            <img alt="En blå 8-bitars stjärna." class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                    </div>
                    <div class="sjuttisju">
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Nya höjder</h3>
                                <p class="p2">
                                    Behöver du hjälp att skapa intresse kring ditt varumärke och öka försäljningen av dina produkter? Vi är experter på att ta webbsidor till nya höjder!
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Kreativitet</h3>
                                <p class="p2">
                                    Vi specialicerar oss på att utveckla webbplatser som sticker ut från mängden och trollbinder dina besökarna från start till transaktion.
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                            <div class="ikonC"><h3>Vi sätter igång</h3><img alt="En svart pil som pekar åt höger." class="ikonPil" src="./tpl/images/pa-natet/Svart-pil-hoger.svg"></div>
                                <p class="p2">
                                    Önskar du en offert? Har du frågor gällande våra tjänster? Eller har du någonting helt annat du vill diskutera?<br><br> Hör av dig redan idag!
                                </p>    
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                                <h3 style="padding-bottom: 5%;">Kontaktuppgifter</h3>
                                <div class="ikonC"><img alt="Ett 8-bitars ansikte av en superhjälte." class="ikon" src="./tpl/images/pa-natet/Batman.svg"><p class="p2">Rikard Johansson</p></div>
                                <div class="ikonC"><img alt="En svart 8-bitars gammeldags telefon." class="ikon" src="./tpl/images/pa-natet/Telefon.svg"><a href="tel:+4673-6851904"><p class="p2 linkW fonti">073-685 1904</p></a></div>
                                <div class="ikonC"><img alt="Ett svart 8-bitars brev." class="ikon" src="./tpl/images/pa-natet/E-post.svg"><a href="mailto:hej@nack-pa-natet.se"><p class="p2 linkW fonti">hej@nack-pa-natet.se</p></a></div>
                                <div class="ikonC"><img alt="En svart 8-bitars kalender." class="ikon" src="./tpl/images/pa-natet/Kalender.svg"><a href="https://www.nack-pa-natet.se/kampanj/1.php?hi=58008" target="_blank"><p class="p2 linkW fonti" style="text-decoration:underline;">Boka tid direkt!</p></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kalenderLuring">
                    <?php
                        include_once 'tpl/calenderPC.tpl.php'
                    ?>
                </div>
            </div>
            <div class="hidePc" id="right12">
                <div class="right1C">
                    <div class="starTopM">
                        <div class="trettretW">
                            <img alt="En blå 8-bitars stjärna." class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                        <div class="trettretW" style="flex-direction: column;">
                            <img alt="Ett citat där det står Självutnämnda kreativa stjärnskott." class="textS" src="./tpl/images/pa-natet/Sjalvutnamnda-kreativa-stjarnskott.svg">
                        </div>
                        <div class="trettretW">
                            <img alt="En blå 8-bitars stjärna." class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                    </div>
                    <div class="sjuttisju">
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Nya höjder</h3>
                                <p class="p2">
                                    Behöver du hjälp att skapa intresse kring ditt varumärke och öka försäljningen av dina produkter? Vi är experter på att ta webbsidor till nya höjder!
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Kreativitet</h3>
                                <p class="p2">
                                    Vi specialicerar oss på att utveckla webbplatser som sticker ut från mängden och trollbinder dina besökarna från start till transaktion.
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                            <div class="ikonC"><h3>Vi sätter igång</h3><img alt="En svart pil som pekar åt höger." class="ikonPil hideM" src="./tpl/images/pa-natet/Svart-pil-hoger.svg"></div>
                                <p class="p2">
                                    Önskar du en offert? Har du frågor gällande våra tjänster? Eller har du någonting helt annat du vill diskutera?<br><br> Hör av dig redan idag!<img alt="En svart pil som pekar nedåt." class="ikonPil hidePc spec" src="./tpl/images/pa-natet/Svart-pil-nerat.svg">   
                                </p> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="kontaktM hidePc">
                    <div class="kontaktC">
                        <span class="fonti bigT">Kontaktuppgifter</span>
                        <div class="ikonCm"><img alt="Ett 8-bitars ansikte av en superhjälte." class="ikonM" src="./tpl/images/pa-natet/Batman.svg"><p class="p3 fonti">Rikard Johansson</p></div>
                        <div class="ikonCm"><img alt="En svart 8-bitars gammeldags telefon." class="ikonM" src="./tpl/images/pa-natet/Telefon.svg"><a href="tel:+4673-6851904"><p style="padding:0;" class="p3 fonti">073-685 1904</p></a></div>
                        <div class="ikonCm"><img alt="Ett svart 8-bitars brev." class="ikonM" src="./tpl/images/pa-natet/E-post.svg"><a href="mailto:hej@nack-pa-natet.se"><p style="padding:0;" class="p3 fonti">hej@nack-pa-natet.se</p></a></div>
                        <div class="ikonCm"><img alt="En svart 8-bitars kalender." class="ikonM" src="./tpl/images/pa-natet/Kalender.svg"><a href="https://www.nack-pa-natet.se/kampanj/1.php?hi=58008" target="_blank"><p style="padding:0;text-decoration:underline;" class="p3 fonti">Boka tid direkt!</p></a></div>
                    </div>
                </div>
                <div class="fillers"></div>
            </div>
        </div>
        <div id="tab2">
            <div id="left2" class="hideM">
                <div class="fix hideM"><span class="fonti produktR">-</span><span onclick="rubri1Pc();" class="fonti produktR" id="rubrik1">Wordpress </span></div>
                <div class="fix hideM"><span class="fonti produktR">-</span><span onclick="rubri2Pc();" class="fonti produktR" id="rubrik2">Handkodad </span></div>
                <div class="fix hideM"><span class="fonti produktR">-</span><span onclick="rubri3Pc();" class="fonti produktR" id="rubrik3">Kampanj </span></div>
            </div>
            <div id="left22">
                <div class="fix hidePc" id="rubrik1M"><span class="fonti produktR">-</span><span onclick="rubri1M();" class="fonti produktR" >Wordpress </span></div>
                <div class="fix hidePc" id="rubrik2M"><span class="fonti produktR">-</span><span onclick="rubri2M();" class="fonti produktR" >Handkodad </span></div>
                <div class="fix hidePc" id="rubrik3M"><span class="fonti produktR">-</span><span onclick="rubri3M();" class="fonti produktR" >Kampanj </span></div>
            </div>
            <div id="right2" class="hideM">
                <div id="right2C1" class="right2C">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Wordpress används i över 40% av alla webbsidor på internet på grund av sitt användarvänliga administrationssytem som tillåter även den otekniske att kontrollera och uppdatera en professionell webbsida. Det är ett open-source "Content Management System" (CMS) som tillåter administrering av hemsidor utan omfattande kunskap inom kodning.
                        <br><br>
                        Med ett stort utbud av teman och tillägg erbjuder Wordpress goda möjligheter både för individuella anpassningar och tillfredsställande skalbarhet. Många små och medelstora företag väljer att bygga sin hemsida i Wordpress av dessa anledningar. Dessutom är Wordpress ett SEO-anpassat alternativ som tillåter god sökmotoroptimering. Det finns dock vissa begränsningar i en Wordpress-hemsida med avseende på anpassningsbarhet, funktionalitet och kreativitet som enbart överträffas av en handkodad sida. 
                        <br><br>
                        När vi bygger hemsidor med Wordpress använder vi oss av ett samlat utbud av tillägg för att maximera kvalité och funktionalitet till det bästa priset. Vi gillar dessutom att kombinera Wordpress-hemsidor med handkodning för att ge hemsidan det där lilla extra!
                        <br><br>
                        </p>
                    </div>
                </div>
                <div id="right2C2" class="right2C">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Har ni ambition att bygga en unik webbplats med ett banbrytande design och/eller funktionalitet? Kanske en webbapplikation där hela sidans innehåll bara behöver laddas in en enda gång? Eller en egen adminpanel helt skräddarsydd efter er organisations behov? Viss funktionalitet och design utvecklas enklast genom att erfarna webbutvecklare skräddarsyr webbplatsen utefter era behov. 
                        <br><br>
                        En handkodad webbsida innebär att webbsidans design, funktionalitet och innehåll har skapats och implementerats genom att webbutvecklare skriver all HTML, CSS and JavaScript-kod som används på sidan. Detta till skillnad från ett ”drag-and-drop”-gränssnitt som används av de flesta webbplatsbyggare. Att handkoda en webbsida kräver både tekniskt kunnande och skicklighet. 
                        <br><br>  
                        Fördelen med en handkodad webbsida är att design- och funktionsmöjligheterna är obegränsade. Om du kan föreställa dig det - så kan vi koda det. Sidan blir dessutom ruskigt lättanvänd och snabb vilket sökmotorerna älskar.
                        <br><br>  
                        </p>
                    </div>
                </div>
                <div id="right2C3" class="right2C">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        En webbkampanj är ett kraftfullt verktyg för företag och organisationer att skapa engagemang och värdeskapande interaktioner med sina kunder och besökare. En genomtänkt kampanj bygger starka varumärken, generar leads och ökar försäljningen. Kampanjen kan även ge värdefull insikt i kundernas beteende och preferenser, vilket leder till kloka och datadriva affärsbeslut. 
                        <br><br>
                        Vi är övertygade om att webbkampanjer bör skräddarsys efter organisationens unika erbjudande och målgrupp. Tillsammans med våra kunder utvecklar vi webbaserade kampanjer med tydligt målfokus både med långa och korta tidshorisonter. Våra kampanjer existerar i gränslandet mellan det fysiska och digitala rummet. Vi älskar att skapa kampanjer som engagerar människor att lyfta blicken bort från flödet och mot den fysiska världen. 
                        <br><br>  
                        Oavsett om du har en egen kampanjidé som du vill testa eller om du vill att vi ska designa den från grunden så kan vi hjälpa dig. Vi letar ständigt efter nya lösningar och idéer på effektfulla kampanjer som världen ej ännu skådat.
                        <br><br>  
                        </p>
                    </div>
               </div>
            </div>
            <div id="right22" class="hidePc">
                <div class="pilC"><img alt="En vit pil som pekar åt höger." onclick="rubriKlickL();" id="leftP" class="hidePc" src="./tpl/images/pa-natet/Vit-pek-hoger.svg"><span id="font1" class="fonti produktRM hidePc">Wordpress</span><span id="font2" class="fonti produktRM hidePc">Handkodad</span><span id="font3" class="fonti produktRM hidePc">Kampanj</span><img alt="En vit pil som pekar åt höger." onclick="rubriKlickR();" id="rightP" class="hidePc" src="./tpl/images/pa-natet/Vit-pek-hoger_1.svg"></div>
                <div id="right2C12" class="right2C hidePc">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Wordpress används i över 40% av alla webbsidor på internet på grund av sitt användarvänliga administrationssytem som tillåter även den otekniske att kontrollera och uppdatera en professionell webbsida. Det är ett open-source "Content Management System" (CMS) som tillåter administrering av hemsidor utan omfattande kunskap inom kodning.
                        <br><br>
                        Med ett stort utbud av teman och tillägg erbjuder Wordpress goda möjligheter både för individuella anpassningar och tillfredsställande skalbarhet. Många små och medelstora företag väljer att bygga sin hemsida i Wordpress av dessa anledningar. Dessutom är Wordpress ett SEO-anpassat alternativ som tillåter god sökmotoroptimering. Det finns dock vissa begränsningar i en Wordpress-hemsida med avseende på anpassningsbarhet, funktionalitet och kreativitet som enbart överträffas av en handkodad sida. 
                        <br><br>
                        När vi bygger hemsidor med Wordpress använder vi oss av ett samlat utbud av tillägg för att maximera kvalité och funktionalitet till det bästa priset. Vi gillar dessutom att kombinera Wordpress-hemsidor med handkodning för att ge hemsidan det där lilla extra!
                        <br><br>
                        </p>
                </div>
                </div>
                <div id="right2C22" class="right2C hidePc">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Har ni ambition att bygga en unik webbplats med ett banbrytande design och/eller funktionalitet? Kanske en webbapplikation där hela sidans innehåll bara behöver laddas in en enda gång? Eller en egen adminpanel helt skräddarsydd efter er organisations behov? Viss funktionalitet och design utvecklas enklast genom att erfarna webbutvecklare skräddarsyr webbplatsen utefter era behov. 
                        <br><br>
                        En handkodad webbsida innebär att webbsidans design, funktionalitet och innehåll har skapats och implementerats genom att webbutvecklare skriver all HTML, CSS and JavaScript-kod som används på sidan. Detta till skillnad från ett ”drag-and-drop”-gränssnitt som används av de flesta webbplatsbyggare. Att handkoda en webbsida kräver både tekniskt kunnande och skicklighet. 
                        <br><br>  
                        Fördelen med en handkodad webbsida är att design- och funktionsmöjligheterna är obegränsade. Om du kan föreställa dig det - så kan vi koda det. Sidan blir dessutom ruskigt lättanvänd och snabb vilket sökmotorerna älskar.
                        <br><br>  
                        </p>
                    </div>
                </div>
                <div id="right2C32" class="right2C hidePc">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        En webbkampanj är ett kraftfullt verktyg för företag och organisationer att skapa engagemang och värdeskapande interaktioner med sina kunder och besökare. En genomtänkt kampanj bygger starka varumärken, generar leads och ökar försäljningen. Kampanjen kan även ge värdefull insikt i kundernas beteende och preferenser, vilket leder till kloka och datadriva affärsbeslut. 
                        <br><br>
                        Vi är övertygade om att webbkampanjer bör skräddarsys efter organisationens unika erbjudande och målgrupp. Tillsammans med våra kunder utvecklar vi webbaserade kampanjer med tydligt målfokus både med långa och korta tidshorisonter. Våra kampanjer existerar i gränslandet mellan det fysiska och digitala rummet. Vi älskar att skapa kampanjer som engagerar människor att lyfta blicken bort från flödet och mot den fysiska världen. 
                        <br><br>  
                        Oavsett om du har en egen kampanjidé som du vill testa eller om du vill att vi ska designa den från grunden så kan vi hjälpa dig. Vi letar ständigt efter nya lösningar och idéer på effektfulla kampanjer som världen ej ännu skådat.
                        <br><br>  
                        </p>
                    </div>
               </div>
            </div>
        </div>
        <div id="tab3">
            <div class="smulT"><h2 class="fonti">Näck på nätet ...</h2> </div>
            <div class="smulC ">
                <div class="flip-cardM hidePc"><div id="flipperM" class="flip-card-innerM"><div onclick="cardsM();" class="flip-card-front"><img alt="Ett smultron på baksidan av ett spelkort." class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back" onclick="cardsM1();"><span class="cardT fonti" id="cardM"></span></div></div></div>
                <div class="flip-card hideM"><div class="flip-card-inner"><div onmouseenter="getNextCard(1)" class="flip-card-front"><img alt="Ett smultron på baksidan av ett spelkort." class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back"><span class="cardT fonti" id="card1"></span></div></div></div>
                <div class="flip-card hideM"><div class="flip-card-inner"><div onmouseenter="getNextCard(2)" class="flip-card-front"><img alt="Ett smultron på baksidan av ett spelkort." class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back"><span class="cardT fonti" id="card2"></span></div></div></div>
                <div class="flip-card hideM"><div class="flip-card-inner"><div onmouseenter="getNextCard(3)" class="flip-card-front"><img alt="Ett smultron på baksidan av ett spelkort." class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back"><span class="cardT fonti" id="card3"></span></div></div></div>
            </div>
            <div class="smulE"><span class="endT fonti">Ditt smultronställe på nätet</span></div>
        </div>
    </main>
    <footer id="footer">
        <div id="navF">
            <ul>
                <li onclick="tab1M();" id="liF1"> OM OSS </li>
                <li onclick="tab2M(); rubriM();" id="liF2"> PRODUKTER </li>
                <li onclick="tab3M();" id="liF3"> <img alt="Ett smultron på baksidan av ett spelkort." class="tilt" src="./tpl/images/pa-natet/Smultron_tilt.svg"></li>
            </ul>
        </div>
    </footer>
        <script type="text/javascript" src="./tpl/scripts/pa-natet.js" async></script>
</body>