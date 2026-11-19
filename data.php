<?php

// testarray with testImage

$images = [
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],

];


// test-array with product images and product info for carousel

$products = [
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/testImages/insta.jpg",
            'alt' => "Shoe"
        ],
        'price' => 2999,
    ],
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/testImages/carouselTestImg.png",
            'alt' => "Shoe"
        ],
        'price' => 2999,
    ],
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/testImages/insta.jpg",
            'alt' => "Shoe"
        ],
        'price' => 2999,
    ],
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/testImages/carouselTestImg.png",
            'alt' => "Shoe"
        ],
        'price' => 2999,
    ],
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/testImages/insta.jpg",
            'alt' => "Shoe"
        ],
        'price' => 2999,
    ],
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/testImages/carouselTestImg.png",
            'alt' => "Shoe"
        ],
        'price' => 2999,
    ]
];

?>

<!-- Encode php-array to javascript-->
<script>
    const products = <?= json_encode($products) ?>;
</script>