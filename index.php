<?php $title = 'S&J | Tepih Servis & Dubinsko Pranje'; ?>
<?php include('components/header.php') ?>
<?php include('components/body-before.php') ?>

<!-- Page Content -->

<!-- Hero -->
<section id="hero">
    <div class="hero-slider">
        <div class="hero-slider-item">
            <picture>
                <source media="(min-width:650px)" srcset="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-1.jpg">
                <img src="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-1-m.webp" alt="Tepih servis i dubinsko pranje | Vrhunsko pranje">
            </picture>
            <div class="hero-slider-item-inner">
                <div class="wrapper">
                    <div class="text-block">
                        <h3>Potrebno vam je vrhunsko dubinsko pranje tepiha?</h3>
                        <a class="default-btn" href="#contact">Kontaktirajte nas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item">
            <picture>
                <source media="(min-width:650px)" srcset="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-2.jpg">
                <img src="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-2-m.webp" alt="Tepih servis i dubinsko pranje | Nameštaj">
            </picture>
            <div class="hero-slider-item-inner">
                <div class="wrapper">
                    <div class="text-block">
                        <h3>Želite da vaš nameštaj ponovo miriše na novo?</h3>
                        <a class="default-btn" href="">Pozovite nas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item">
            <picture>
                <source media="(min-width:650px)" srcset="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-3.jpg">
                <img src="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-3-m.webp" alt="Tepih servis i dubinsko pranje | Cenovnik">
            </picture>
            <div class="hero-slider-item-inner">
                <div class="wrapper">
                    <div class="text-block">
                        <h3>Dosta vam je preskupih hemikalija za čišćenje koje ne daju prave rezultate?</h3>
                        <a class="default-btn" href="#prices">Pogledajte naš cenovnik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About us -->
<section id="about-us">
    <div class="wrapper">
        <div class="about-us-text" data-aos="flip-left">
            <p class="display-4">Ko smo mi?</p>
            <h3>S&J je kompanija koja se dugi niz godina uspešno bavi dubinskim čišćenjem i pranjem mebliranog nameštaja, tepiha
                i itisona, staza, uz veoma povoljne cene, najmodernijim i najkvalitetnijim mašinama i hemikalijama na tržištu, koje veoma efikasno uklanjaju:</h3>
            <ul>
                <li>- Grinje</li>
                <li>- Tvrdokorne fleke</li>
                <li>- Neprijatne mirise</li>
                <li>- Mirise i dlake kućnih ljubimaca</li>
            </ul>
        </div>
    </div>
</section>
<section id="user-counter" class="text-white">
    <div class="wrapper">
        <div class="w-100 d-flex d-lg-none justify-content-center" id="counter-slider-control">
            <button id="counter-prev" class="btn text-white">
                <?php echo $iconChevLeft; ?>
            </button>
            <button id="counter-next" class="btn text-white">
                <?php echo $iconChevRight; ?>
            </button>
        </div>
        <div id="counter" class="users-counter-slider ">
            <div class="users-counter-slider-item" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="counter-icon-holder"><img loading="lazy" data-src="assets/img/slider/korisnici.svg" alt="Tepih servis i dubinsko pranje | Korisnici"></div>
                <p class="counter-number"><span class="counter-value" data-count="500">0</span>+ </p>
                <p>zadovoljnih klijenata</p>
            </div>
            <div class="users-counter-slider-item" data-aos="fade-up">
                <div class="counter-icon-holder"><img loading="lazy" data-src="assets/img/slider/tepih-servis.svg" alt="Tepih servis i dubinsko pranje | Tepisi"></div>
                <p class="counter-number"><span class="counter-value" data-count="5000">0</span>+ m<sup>2</sup> </p>
                <p>opranog tepiha</p>
            </div>
            <div class="users-counter-slider-item" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="counter-icon-holder"><img loading="lazy" data-src="assets/img/slider/dubinsko-pranje.svg" alt="Tepih servis i dubinsko pranje | Nameštaj"></div>
                <p class="counter-number"><span class="counter-value" data-count="2500">0</span>+ </p>
                <p>opranih komada nameštaja</p>
            </div>
        </div>
    </div>
</section>
<!-- Transport -->
<section id="transport" class="position-relative">
    <img loading="lazy" data-src="assets/img/tepih-servis-i-dubinsko-pranje-transport.jpg" alt="Prevoz i dostava tepih i staza" class="transport-img">
    <div class="transport-content d-flex align-items-center">
        <div class="wrapper ">
            <div class="transport-content-inner" data-aos="fade-right">
                <h2>Transport i dolazak</h2>
                <p><?php echo $iconCheckCircle; ?> Dolazimo po tepihe kojima je potrebna nega i vraćamo ih u najboljem mogućem stanju na vašu kućnu adresu.</p>
                <p><?php echo $iconCheckCircle; ?> Besplatan prevoz tepiha za sve delove grada, nezavisno od kvadrature!</p>
                <p><?php echo $iconCheckCircle; ?> Dolazimo na vašu adresu u slučaju da vam je potrebno pranje nameštaja!</p>
                <p><?php echo $iconCheckCircle; ?> Zakazivanje se vrši danas za sutra (Danas za naredni radni dan) ali i danas za danas u pojedinim slučajevima!</p>
            </div>
        </div>
    </div>
</section>


<!-- Prices -->
<section id="prices">
    <div class="wrapper">
        <div class="w-100">
            <div class="text-center">
                <h2 class="display-4">Cenovnik</h2>
                <p>Poštovani korisnici, pred vama je kompletan cenovnik naših usluga:</p>
            </div>
            <div class="prices-block">

                <h2 class="prices-title">Pranje tepiha</h2>
                <table>
                    <tr>
                        <th class="price-details-title">Usluga:</th>
                        <th class="money-price-title">Cena:</th>
                    </tr>
                    <tr>
                        <td class="price-details">Mašinsko dubinsko pranje tepiha sa ispiranjem</td>
                        <td class="money-price">od 250 RSD / m<sup>2</sup></td>
                    </tr>
                </table>
                <h2 class="prices-title">Čišćenje i pranje nameštaja</h2>
                <table>
                    <tr>
                        <th class="price-details-title">Usluga:</th>
                        <th class="money-price-title">Cena:</th>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje stolice</td>
                        <td class="money-price">200 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje taburea</td>
                        <td class="money-price">300 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje i vakumiranje jastuka</td>
                        <td class="money-price">300 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje fotelje</td>
                        <td class="money-price">1000 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje dvoseda</td>
                        <td class="money-price">1500 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje troseda</td>
                        <td class="money-price">2000 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Ugaone garniture</td>
                        <td class="money-price">700 RSD / po sedalnom delu</td>
                    </tr>
                </table>
                <h2 class="prices-title">Čišćenje dušeka</h2>
                <table>
                    <tr>
                        <th class="price-details-title">Usluga:</th>
                        <th class="money-price-title">Cena:</th>
                    </tr>
                    <tr>
                        <td class="price-details">Single</td>
                        <td class="money-price">1500 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Bračni</td>
                        <td class="money-price">2000 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Dečji</td>
                        <td class="money-price">1000 RSD / kom</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-dark">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 text-center pt-5 text-white">
                <h2 class="display-4">Kontakt</h2>
            </div>
            <div class="col-12 col-md-6 px-4 contact-left" data-aos="fade-right" data-aos-offset="200">
                <?php include('components/contact-form.php'); ?>
            </div>
            <div class="col-12 col-md-6 px-4 d-flex align-items-center position-relative contact-right" data-aos="fade-left" data-aos-offset="200">
                <ul id="contact-info" class="text-white">
                    <li>
                        <h3 class="h1 mb-3 font-weight-light">S&J Cleaning Company</h3>
                    </li>
                    <li>
                        <p class="h4"><?php echo $iconPhone; ?> 065 87 000 38</p>
                    </li>
                    <li>
                        <p class="h4"><?php echo $iconPhone; ?> 064 939 98 43</p>
                    </li>
                    <li>
                        <p class="h4"><?php echo $iconMap; ?> 1: Beograd, Radnička 3</p>
                    </li>
                    <li>
                        <p class="h4"><?php echo $iconMap; ?> 2: Barič, Obrenovac, Baričkih Boraca 10b</p>
                    </li>
                    <li><a href="mailto:office@tepihservisidubinsko.rs" class="h4 text-white font-weight-light contact-mail"><?php echo $iconAt; ?> <span>office@tepihservisidubinsko.rs</span></a></li>
                </ul>
                <span class="vertical-line"></span>
            </div>
        </div>
    </div>
</section>

<?php include('components/body-after.php') ?>
<?php include('components/footer.php') ?>