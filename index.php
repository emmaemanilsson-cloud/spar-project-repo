<?php
require_once 'includes/header.php';
require_once __DIR__ . '/data.php';
?>


<main>

    <!-- Hero section -->
    <section class="hero">
        <h1>Skapad för <br>
            elementen.<br>
            Formad för dig.</h1>

    </section>
    <!-- About -->
    <section class="about-section">
        <h2 class="about-heading">Gjort för att följa med.</h2>
        <p class="about-p">Redo för nästa äventyr? Upptäck vår senaste kollektion, skapad för ett liv närmare naturen. Genomtänkta detaljer, tidlös design och omtanke i varje val.</p>
        <img
            class="img-about"
            src="/assets/khai-truong-TuT_ttpdEIM-unsplash 1 1.png"
            alt="" />

    </section>

    <!-- placeholder carousel - remove later-->

    <section class="section-carousel">
        <h2 class="carousel-heading">Möt våra senaste favoriter</h2>

        <div class="carousel-viewer">
            <div class="slides-container">
                <!-- implement loop through products-array in data.php -->
                <!-- (consider: create functions, separate php-logic and html-structure more??) -->
                <!-- figure: container for each product in slide-->
                <?php foreach ($products as $product): ?>
                    <figure>
                        <img class="slide" src="<?= $product['image']['src']; ?>" alt="<?= $product['image']['alt']; ?>">
                        <!-- paragraph instead?? -->
                        <figcaption class="product-name"><?= $product['name']; ?></figcaption>
                        <div class="price">
                            <span class="product-price"><?= $product['price'] . "kr"; ?></span>
                            <!-- button for placing order (keep for now, until descision made)-->
                            <button>Lägg i varukorg</button>
                        </div>
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- i blickfånget -->
    <section class="viewer-section">
        <h2 class="viewer-heading">Genomtänkt in i minsta detalj.</h2>
        <div class="viewer-box"></div>
        <!-- Placeholder for color selection below 3D-animation -->
        <span class="color-selector">&#x25C9 &#x25C9 &#x25C9</span> <!--html unicode in hex for geometric shape (fisheye)-->
        <p class="viewer-p">En hyllning till det klassiska friluftslivet. Med inspiration från traditionella vandringsskor kombinerar den här modellen en tidlös silhuett med en robust karaktär. Skapad för att följa med på allt från skogspromenader till nya äventyr långt bortom stadens gator.</p>
    </section>



    <!-- newsletter -->
    <section class="newsletter-section" id="newsletter">
        <form>
            <!-- In wireframe heading newsletter is set to h1, use h2 instead? -->
            <h2 class="newsletter-heading">En mer hållbar väg framåt.</h2>
            <p class="newsletter-p">Prenumerera på vårt nyhetsbrev och få 10 % rabatt på din första beställning! Som prenumerant följer du med på vår resa mot en mer hållbar framtid. Vi berättar löpande hur vi utvecklar vårt hållbarhetsarbete och vilka steg vi tar framåt.</p>
            <!--  -->
            <fieldset class="email-field">
                <label for="email">Din e-postadress</label>
                <!-- Added placeholder with example-mail -->
                <input type="email" id="email" name="email" placeholder="example@mail.com">
            </fieldset>
            <button type="submit" class="newsletter-button">
                Registrera dig
            </button>
        </form>

    </section>


    <!-- Insta-gallery -->
    <section class="insta-section">
        <h2 class="instagallery-heading">Era äventyr, vår inspiration</h2>
        <div class="instagram-info">
            <img src="assets/instagram.svg" alt="">
            <span>sparoutdoor</span>
        </div>
        <div class="instagrid-container">
            <div class="img-container">
                <!-- loop through array to get each image (src and alt) -->
                <?php foreach ($images as $image): ?>
                    <img class="insta-img" src="<?= $image['src']; ?>" alt="<?= $image['alt']; ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>