<?php

// testarray with testImage

$images = [
    [
        'src' => "/assets/instagallery/pictures/SoME.jpg",
        'alt' => "SoMepicture",
        'type' => "image",
    ],
    [
        'src' => "/assets/instagallery/videos/spar_brand_vid.mp4",
        'alt' => "SoMevideo",
        'type' => "video",
    ],
    [
        'src' => "/assets/instagallery/pictures/SoMe_Bild_Deskstop.jpg",
        'alt' => "SoMepicture",
        'type' => "image",
    ],
    [
        'src' => "/assets/instagallery/videos/Instagram-story.mp4",
        'alt' => "SoMevideo",
        'type' => "video",
    ],
    [
        'src' => "/assets/instagallery/pictures/SoMe_bild.png",
        'alt' => "SoMepicture",
        'type' => "image",
    ],
    [
        'src' => "/assets/instagallery/videos/somevideo.mp4",
        'alt' => "SoMevideo",
        'type' => "video"
    ],

];


// test-array with product images and product info for carousel

$products = [
    [
        'name' => "Stig vandringssko Sand",
        'image' => [
            'src' => "/assets/products/render_sko_en.jpg",
            'alt' => "Vandringsskor i brun mocka med snörning"
        ],
        'price' => 3499,
    ],
    [
        'name' => "Led axelväska",
        'image' => [
            'src' => "/assets/products/väskarender.jpg",
            'alt' => "Axelremsväska i brunt tyg med dragkedjor"
        ],
        'price' => 699,
    ],
    [
        'name' => "Källa stålflaska",
        'image' => [
            'src' => "/assets/products/vattenflaskarender.jpg",
            'alt' => "Vattenflaska med skruvkork i blankt stål"
        ],
        'price' => 399,
    ],
    [
        'name' => "Vind läppbalsam",
        'image' => [
            'src' => "/assets/products/hudvårdrender.jpg",
            'alt' => "Läppbalsam i krämfärgad/beige tub med skruvkork bredvid medföljande förpackning."
        ],
        'price' => 149,
    ],
    [
        'name' => "Rast friluftsmugg",
        'image' => [
            'src' => "/assets/products/mugg.jpg",
            'alt' => "Skogsgrön mugg i stål med matt finish på sidorna och blank topp. Öra i form av två hakar i stål som går att fälla in/ut."
        ],
        'price' => 299,
    ],
    [
        'name' => "Puls smartring",
        'image' => [
            'src' => "/assets/products/ring_klar.jpg",
            'alt' => "Högteknologisk ring i blankt stål som mäter pulsen med hjälp av sensorer på insidan."
        ],
        'price' => 2995,
    ],
    [
        'name' => "Stig vandringssko Mossa",
        'image' => [
            'src' => "/assets/products/sko_grön.jpg",
            'alt' => "Vandringsskor i grön mocka med snörning"
        ],
        'price' => 3499,
    ],
    [
        'name' => "Stig vandringssko Lava",
        'image' => [
            'src' => "/assets/products/sko_röd.jpg",
            'alt' => "Vandringsskor i röd mocka med snörning"
        ],
        'price' => 3499,
    ]
];

?>

<!-- Encode php-array to javascript-->
<script>
    const products = <?= json_encode($products) ?>;
</script>