<!-- 
    Author: Mark Schuurmans
    Date: 12-5-2021

    Praktijkopdracht Thema 4    
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <title>Home · BTC de Pettelaer</title>
        <link rel="stylesheet" href="styles/style.css">
        <script src="scripts/script.js" defer></script>
        <script src="scripts/index.js" defer></script>
    </head>
    <body>
        <?php 
            session_start();
            include "includes/header.php";
        ?>
        <main>
            <div class="bubble"></div>
            <section class="intro background">
                <div>
                    <h1>Tennissen bij BTC De Pettelaer</h1>
                </div>
            </section>
            <section class="sponsors">
                <div>
                    <a target="_blank" href="https://www.adcrepro.nl/">
                        <object data="images/sponsors/adc.svg" type="image/svg+xml"></object>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://nl.bavaria.com/">
                        <object data="images/sponsors/bavaria.svg" type="image/svg+xml"></object>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://www.vlc-partners.nl/">
                        <object data="images/sponsors/vlc.svg" type="image/svg+xml"></object>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://www.dutchlawdesk.com/">
                        <object data="images/sponsors/dutchlawdesk.svg" type="image/svg+xml"></object>
                    </a>
                </div>
            </section>

            <section class="navigation">
                <a href="https://www.pettelaer.nl/index.php?page=Paviljoen&usetabs&sid=2">
                    <span>Vereniging</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Lidmaatschap&usetabs&sid=2">
                    <span>Lidmaatschap</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Training&sid=2">
                    <span>Training</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Competitie_algemeen&usetabs&sid=2">
                    <span>Competitie</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Toernooien&sid=2">
                    <span>Toernooien</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Agenda&sid=2">
                    <span>Agenda</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Jeugd&usetabs&sid=2">
                    <span>Jeugd</span><span>></span>
                </a>
                <a href="https://www.pettelaer.nl/index.php?page=Banen_overzicht&usetabs&sid=2">
                    <span>Banen overzicht</span><span>></span>
                </a>
            </section>

            <section class="intro--section">
                <h2>Welkom!</h2>
                <div>
                    <p>BTC De Pettelaer is een bourgondische tennisclub in het hart van de sfeervolle stad 's-Hertogenbosch. Een tennisclub voor jong en oud, prestatieve en recreatieve spelers. Bij De Pettelaer gaan sportiviteit en gezelligheid hand in hand. In de prachtige atmosfeer van clubhuis 'De Knotwilg' wordt gelachen, gegeten en gedronken.</p>
                    <p>Tot snel op ons park!</p>
                    <p>Patrick van Druten (voorzitter)</p>
                </div>
            </section>

            <section class="contact--section">
                <div class="contact--hero">
                    <h4>Contact informatie</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, illo ex. Dolorum sed, ea temporibus provident, amet voluptates aliquid delectus natus error, voluptate vero? Iure.</p>
                    <div>
                        <div class="image--container">
                            <svg viewBox="0 0 512 512">
                                <path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path>
                            </svg>
                        </div>
                        <a href="mailto:info@pettelaer.nl">info@pettelaer.nl</a>
                    </div>
                    <div>
                        <div class="image--container">
                            <svg viewBox="0 0 320 512">
                                <path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-64 452c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v8zm64-80c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path>
                            </svg>
                        </div>
                        <a href="tel:0736130175">073 - 61 30 175</a>
                    </div>
                    <div>
                        <div class="image--container">
                            <svg viewBox="0 0 384 512">
                                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                            </svg>
                        </div>
                        <a href="https://www.google.com/maps/place/Coornhertstraat+24,+5216+HX+'s-Hertogenbosch" target="_blank">Coornhertstraat 24, 5216 HX 's-Hertogenbosch</a>
                    </div>
                </div>  
                <div>
                    <div>
                        <a target="_blank" href="https://www.google.com/maps/place/Coornhertstraat+24,+5216+HX+'s-Hertogenbosch">
                            <img src="images/map.png" alt="">
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <?php 
            include "includes/footer.php";
        ?>
    </body>
</html>