<?php
require_once 'includes/header.php';
require_once __DIR__ . '/data.php';
?>

<main>

    <!-- Hero section -->
    <section class="hero">
        <h1>Skapad för elementen.<br>
            Formad för dig.</h1>

    </section>
    <!-- About -->
    <section class="about-section">
        <div class="about-text">
            <h1 class="about-heading">Gjort för att följa med.</h1>
            <p class="about-p">Upptäck vår senaste kollektion, skapad för ett liv närmare naturen. Plaggen följer med dig hela vägen, både uppför fjället och på promenaden i skogen. Materialen är slitstarka, funktionerna genomtänkta och passformen lika bekväm på stigen som i vardagen. Designen är tidlös och gjord för att hålla säsong efter säsong.</p>
        </div>
        <img
            class="img-about"
            src="/assets/pics/ad40c7378f6d96fbd17b58cb97a2c1c92aa5f097.jpg"
            alt="friluftsman i dimma"/>

    </section>

    <!-- placeholder carousel - remove later-->

    <section class="section-carousel">
        
        <div class="carousel-header">
            <h2 class="carousel-heading">Möt våra senaste favoriter</h2>
            <div class="arrow-nav-carousel">
                <button class="arrow left-arrow"><img src="/assets/symbols/arrow-left.svg" alt="Left arrow button" /></button>
                <button class="arrow right-arrow"><img src="/assets/symbols/arrow-right.svg" alt="Right arrow button" /> </button>
            </div>
        </div>
        <!-- "view window for slide-motion" -->
        <div class="carousel-viewer">
            <!-- box that will be moving -->
            <div class="slides-container">
                <!-- implement loop through products-array in data.php -->
                <!-- figure: container for each product in slide-->
                <?php foreach ($products as $product): ?>
                    <figure>
                        <img class="slide" src="<?= $product['image']['src']; ?>" alt="<?= $product['image']['alt']; ?>">
                        <!-- paragraph instead?? -->
                        <figcaption class="product-name"><?= $product['name']; ?></figcaption>
                        <div class="price-order-box">
                            <span class="price-order"><?= $product['price'] . "kr"; ?></span>
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
        <h1 class="viewer-heading">Genomtänkt in i minsta detalj.</h1>
        <div class="viewer-box"></div>
        <!-- Placeholder for color selection below 3D-animation -->
        <!--<span class="color-selector">&#x25C9 &#x25C9 &#x25C9</span> html unicode in hex for geometric shape (fisheye)-->
        <p class="viewer-p">Den här modellen är inspirerad av traditionella vandringsskor. Den har en tidlös silhuett med rötterna i friluftslivets historia och samtidigt den komfort och funktion du väntar dig i dag. Det kraftiga ovanmaterialet tål både blöt mossa och grusiga stigar, och den greppvänliga sulan ger stadga i ojämn terräng. Med den klassiska snörningen kan du justera passformen efter dagens tur.</p>
    </section>



    <!-- newsletter -->
    <section class="newsletter-section" id="newsletter">
        <form>
            <!-- In wireframe heading newsletter is set to h1, use h2 instead? -->
            <h1 class="newsletter-heading">En mer hållbar väg framåt.</h1>
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
        <h1 class="instagallery-heading">Se vart vi är</h1>
        <div class="instagram-info">
            <!--<img src="assets/logo/instagram.svg" alt="">-->
            <span>Följ @sparoutdoors på Instagram och få inspiration till ditt nästa äventyr. </span>
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