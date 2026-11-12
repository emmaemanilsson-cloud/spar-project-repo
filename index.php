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

        <div class="placeholder-container">
            <div class="placeholder-box"></div>
            <div class="placeholder-box"></div>
            <div class="placeholder-box"></div>
        </div>
    </section>


    <!-- In mobile view - 3D-view-section display:none? -->
    <section class="3D-viewer-section">
        <h3>I blickfånget</h3>
        <div class="3D-viewer-box"></div>
        <!-- Placeholder for color selection below 3D-animation -->
        <span class="color-selector">&#x25C9 &#x25C9 &#x25C9</span> <!--html unicode in hex for geometric shape (fisheye)-->
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