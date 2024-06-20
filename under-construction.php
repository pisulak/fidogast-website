<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Kacper Pisula">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet"> 
    <title>Fido Gast - wyposażenie gastronomii</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
</head>
<body>
    <header class="primary-heading">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#"><img src="images/logo.jpeg" alt="FidoGast"></a>
                <button class="mobile-nav-toggle" aria-controls="nav-list-wrapper" aria-expanded="false">
                    <img class="icon-open" src="images/icon-hamburger.svg" alt="" aria-hidden="true">
                    <img class="icon-close" src="images/icon-close.svg" alt="" aria-hidden="true">
                </button>
                <nav class="nav-list-wrapper" id="nav-list-wrapper">
                    <ul aria-label="Primary" role="list" class="nav-list">
                        <li class="nav-list-option-1"><a href="#about-us">o nas</a></li>
                        <li class="nav-list-option-2"><a href="#photo-gallery">galeria zdjęć</a></li>
                        <li class="nav-list-option-3"><a href="#our-partners">partnerzy</a></li>
                        <li class="nav-list-option-4"><a href="#our-offer">nasza oferta</a></li>
                        <li class="nav-list-option-5 list-option-mobile"><a href="#footer">kontakt</a></li>
                    </ul>
                </nav>
                <button class="button-default button-appear"><a href="#footer">Kontakt</a></button>
            </div>
        </div>
    </header>

    <main>

        <section id="about-us" class="padding-block-900">
            <div class="container">
                <div class="column">
                    <div class="flow text-center-mobile">
                        <h1 class="font-size-primary-heading font-weight-bold">O nas</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam possimus praesentium laboriosam a quam obcaecati tempore cumque! Ipsam, nobis ipsa dolor quasi quae aliquam voluptatibus.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, rerum.
                        </p>
                    </div>
                    <div class="flow text-center-mobile padding-block-900">
                        <ul role="list" class="numbered-elements">
                            <li>
                                <div class="numbered-element flow" style="--flow-spacer: 1em;">
                                    <h3 class="numbered-element-title font-size-500 font-weight-bold">Lorem ipsum dolor sit.</h3>
                                    <p data-width="wide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sit iusto voluptates recusandae pariatur eum assumenda tempora deleniti velit. Voluptates mollitia autem expedita dignissimos nostrum.</p>
                                </div>
                            </li>
                            <li>
                                <div class="numbered-element flow" style="--flow-spacer: 1em;">
                                    <h3 class="numbered-element-title font-size-500 font-weight-bold">Lorem ipsum dolor sit.</h3>
                                    <p data-width="wide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quas sunt qui nulla? Voluptatem id qui sed cumque sapiente corporis quas minima ea reprehenderit labore.</p>
                                </div>
                            </li>
                            <li>
                                <div class="numbered-element flow" style="--flow-spacer: 1em;">
                                    <h3 class="numbered-element-title font-size-500 font-weight-bold">Lorem ipsum dolor sit.</h3>
                                    <p data-width="wide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at consequatur consequuntur repellat, cum, ipsum ducimus quam corrupti esse nesciunt asperiores! Ea veritatis enim necessitatibus?</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="photo-gallery" class="padding-block-700">
            <div class="container">
                <div class="photo-gallery-partners-grid-layout">
                    <div class="photo-gallery-image photo-gallery-hidden"><img src="images/image5.jpg" alt=""></div>
                    <div class="photo-gallery-image photo-gallery-hidden"><img src="images/image3.jpeg" alt=""></div>
                    <div class="photo-gallery-image photo-gallery-hidden"><img src="images/image0.jpeg" alt=""></div>
                    <div class="photo-gallery-image photo-gallery-hidden"><img src="images/image1.jpeg" alt=""></div>
                </div>
            </div>
        </section>

        <section id="our-partners" class="padding-block-700">
            <div class="container">
                <h2 class="our-partners-heading font-size-secondary-heading font-weight-bold">Nasi partnerzy</h2>
                <div class="partners-grid-layout">
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://www.rational-online.com/pl_pl/home/"><img src="images/rational-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Światowy lider rynku i technologii w zakresie urządzeń do gotowania do kuchni komercyjnych.</p>
                        <button class="button-default button-pc-only"><a href="https://www.rational-online.com/pl_pl/home/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://komat.com.pl/"><img src="images/komat-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Producent mebli i urządzeń ze stali nierdzewnej dla gastronomii.</p>
                        <button class="button-default button-pc-only"><a href="https://komat.com.pl/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://www.winterhalter.com/"><img src="images/winterhalter-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Winterhalter, specjaliści w zakresie zmywania. Jesteśmy synonimem profesjonalnych rozwiązań, jakości i niezawodności.</p>
                        <button class="button-default button-pc-only"><a href="https://www.winterhalter.com/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://www.primulator.pl/"><img src="images/primulator-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Kompleksowe rozwiązania dla kawiarni, lodziarni, cukierni, piekarni i hoteli - od technologicznej fazy projektowej lokalu, poprzez wyposażenie w sprzęt, kończąc na szkoleniach.</p>
                        <button class="button-default button-pc-only"><a href="https://www.primulator.pl/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://www.rmgastro.com/"><img src="images/rmgastro-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Czeskim producent profesjonalnego sprzętu kuchennego.</p>
                        <button class="button-default button-pc-only"><a href="https://www.rmgastro.com/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://stalgast.com/"><img src="images/stalgast-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Producent urządzeń gastronomicznych i mebli ze stali nierdzewnej. Importer sprzętu i naczyń kuchennych. Serwis techniczny. Projekty technologiczne.</p>
                        <button class="button-default button-pc-only"><a href="https://stalgast.com/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://www.hendi.eu/"><img src="images/hendi-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Dostawca urządzeń kuchennych, narzędzi kuchennych, artykułów bufetowych, zastawy stołowej, narzędzi barowych i grilli dla branży hotelarskiej.</p>
                        <button class="button-default button-pc-only"><a href="https://www.hendi.eu/">Odwiedź ich stronę</a></button>
                    </div>
                    <div class="partners-grid-element partners-hidden">
                        <a href="https://dajar.pl/"><img src="images/dajar-logo.jpg" alt=""></a>
                        <hr class="mobile-only">
                        <p class="grid-text-pc">Dajar, akcesoria kuchenne, zastawa stołowa, garnki i patelnie.</p>
                        <button class="button-default button-pc-only"><a href="https://dajar.pl/">Odwiedź ich stronę</a></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-offer" class="background-accent-default text-neutral-light | padding-block-700 background-photo-element">
            <div class="container">
                <div class="column vertical-align">
                    <div>
                        <p class="font-size-primary-heading font-weight-bold">Nasza oferta</p>
                    </div>
                    <div>
                        <ul class="our-offer-list right-side">
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Tenetur unde nobis provident.</li>
                            <li>Repellendus eos explicabo expedita.</li>
                            <li>Nihil facilis esse nam!</li>
                            <li>Laborum error culpa sed.</li>
                            <li>Labore dicta ut unde!</li>
                            <li>Quisquam architecto qui voluptatibus!</li>
                            <li>A soluta corrupti animi!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="footer" class="footer | padding-block-700 background-neutral-900 text-neutral-100">
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-logo">
          <a href="#">
            <img src="images/logo-nav.png" class="nav-logo" alt="FidoGast">
          </a>

          <ul class="footer-list" role="list">
                <li class="nav-icon-element nav-icon-mail">
                    <svg class="nav-icon">
                        <use xlink:href="images/nav-icons.svg#mail-svgrepo-com"></use>
                    </svg>
                    <div class="mobile-nav-mail">biuro@fidogast.pl</div>
                </li>
                <li class="nav-icon-element nav-icon-phone">
                    <svg class="nav-icon">
                        <use xlink:href="images/nav-icons.svg#phone-svgrepo-com"></use>
                    </svg>
                    <div class="mobile-nav-phone">(013) 42-221-65</div>
                </li>
                <li class="nav-icon-element nav-icon-location">
                    <svg class="nav-icon">
                        <use xlink:href="images/nav-icons.svg#location-svgrepo-com"></use>
                    </svg>
                    <div class="mobile-nav-location">38-440 Iwonicz-Zdrój, ul. Floriańska 44a</div>
                </li>
          </ul>
          <p class="footer-list-info">kliknij w ikonę aby skopiować</p>
        </div>
        <div class="footer-nav">
          <nav class="footer-nav-link">
            <ul class="flow" style="--flow-spacer: 1em" aria-label="Footer" role="list">
                <li><a href="#about-us">o nas</a></li>
                <li><a href="#photo-gallery">galeria zdjęć</a></li>
                <li><a href="#our-partners">partnerzy</a></li>
                <li><a href="#our-offer">nasza oferta</a></li>
                <li><a href="#">przewiń na górę</a></li>
            </ul>
          </nav>
        </div>
        <div class="footer-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.731576116746!2d21.806949215183437!3d49.602811155956665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473c4763ffe8f77f%3A0xb54cbdc9686674b0!2sFloria%C5%84ska%2044%2C%2038-440%20Iwonicz!5e0!3m2!1sen!2spl!4v1659438843496!5m2!1sen!2spl" class="location max-width-mobile" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>Copyright 2022. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>