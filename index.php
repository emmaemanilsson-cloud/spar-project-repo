<?php
require_once 'includes/header.php';
require_once __DIR__ . '/data.php';
?>


<main>

    <!-- banner section -->

    <!-- Hero section -->
    <section class="hero">
        <h1>Skapad för <br>
            elementen.<br>
            Formad för dig.</h1>

    </section>

    <!-- placeholder carousel - remove later-->

    <section class="carousel-placeholder">
        <h2>Upptäck vår senaste kollektion</h2>

        <div class="carousel-view">
            <div class="slide-container">
                <!-- figure: container for images and info about each product -->
                <figure>
                    <img class="slide" src="" alt="">
                    <!-- paragraph instead?? -->
                    <figcaption class="product-name">
                        << /figcaption>
                            <div class="price">
                                <span class="product-price"></span>
                                <!-- button for placing order (keep for now, until descision made)-->
                                <button>Lägg i varukorg</button>
                            </div>
                </figure>
            </div>
        </div>
    </section>


    <!-- newsletter -->
    <section class="newsletter-section">
        <form>
            <!-- In wireframe heading newsletter is set to h1, use h2 instead? -->
            <h2 class="newsletter-heading">Följ vår resa</h2>
            <p class="newsletter-p">Prenumerera på vårt nyhetsbrev och få 10 % rabatt på din första beställning.
                Samtidigt får du följa med på vår resa mot en mer hållbar framtid och ta
                del av hur vi kontinuerligt utvecklar vårt hållbarhetsarbete.</p>
            <!--  -->
            <fieldset class="email-field">
                <label for="email">Din e-postadress</label>
                <!-- Added placeholder with example-mail -->
                <input type="email" id="'email" name="email" placeholder="example@mail.com">
            </fieldset>
            <button type="submit" class="newsletter-button">
                Registrera dig
            </button>
        </form>

    </section>


    <!-- Insta-gallery -->
    <section class="insta-section">
        <h2 class="instagallery-heading">Få inspiration varje dag @sparoutdoor</h2>
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