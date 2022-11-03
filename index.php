<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="For Search Engine Optimization">
    
    <meta property="og:title" content="For Share Title " />
    <meta property="og:description" content="Share Description " />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://my.image.url" />
    <meta property="og:url" content="https://duit.ee" />
    
    <link rel="stylesheet" href="./scss/style.css" />
    <title>Jinhan Du Project</title>
    <link rel="icon" type="image/png" href="./img/burger.png">
</head>
<body>
    <?php
        include "scss/blocks/nav/nav.html";
        include "scss/blocks/hero/hero.html";
        include "scss/blocks/domain/domain.html";
        include "scss/blocks/plan/block-plan.html";
        include "scss/blocks/block-feature/block-feature.html";
        include "scss/blocks/block-showcase/block-showcase.html";
        include "scss/blocks/block-testimonial/block-testimonial.html";
        include "scss/blocks/block-callout/block-callout.html";
        include "scss/blocks/block-footer/block-footer.html";
    ?>
    <script src="index.js"></script>
    <script src="./aos-animation/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>
</html>