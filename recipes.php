<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/our-brews.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/recipe.css">
    <link rel="stylesheet" href="css/news.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:400;700" rel="stylesheet">
    <title>Viistatha Brewery</title>
    <script type="text/javascript" src="js/functions.js"></script>
</head>

<div class="main">
    <?php include 'components/header.php' ?>

    <div class="padding-section"></div>

    <div class="grid-container-overflow side-padding introduction">
        <div class="grid-overflow-left recipe">
            <div class="absolute-position">
                <h1 class="link-text font-size-huge">Emperor,<br/> The Biggest</h1>
                <p class="sub-headline">
                    The beer of khans, kings, queens,<br/> emperors and all rulers alike<br/>
                    Lorem ipsum
                </p>
            </div>
        </div>
        <div class="grid-overflow-right video">

            <div onmouseenter="changeImageOnHover(this, event)" onmouseleave="changeImageOnHover(this, event)">
                <img class="cursor-pointer" src="assets/images/video-img.jpg" alt="video-img">
                <img class="cursor-pointer" id="play-icon" src="assets/buttons/play-icon.svg" alt="video-img-icon">
            </div>
        </div>
    </div>

    <div class="padding-section"></div>
    <div class="side-padding-double recipe">
        <div class="grid-container-2">
            <div class="grid-item left">
                <h2 class="brown-text">Mashing</h2>
                <ul class=" list">
                    <li>6500 g pale ale malt (88%)</li>
                    <li>500 g cara malt (6%)</li>
                    <li>500 g wheat malt (6%)</li>
                </ul>
            </div>
            <div class="grid-item right">
                <h3>Mashing procedure</h3>
                <p class="normal-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et orci pharetra,
                    euismod purus non, pretium mauris. Phasellus quis arcu id erat suscipit egestas. Mauris blandit
                    fermentum tempus.</p>
            </div>
        </div>
        <div class="padding-section"></div>
        <div class="grid-container-2">
            <div id="hops" class="grid-item left">
                <h2 class="green-text">Hops</h2>
                <ul class="list">
                    <li>35 g centennial @ 60 min</li>
                    <li>35 g columbus @ 30 min</li>
                    <li>35 g citra @ 30 min</li>
                    <li>35 g simcoe @ 15 min</li>
                    <li>35 g amarillo @ 15 min</li>
                </ul>
            </div>
            <div class="grid-item">
                <div class="green-box">
                    <img src="assets/other/zig-zag-top.svg" style="margin-bottom: -5px">
                    <div>
                        <h3>Dry hopping</h3>
                        <ul class="list-box-version">
                            <li>35 g centennial - 7 days</li>
                            <li>23 g simcoe - 7 days</li>
                            <li>23 g columbus - 7 days</li>
                        </ul>
                    </div>
                    <img src="assets/other/zig-zag-bottom.svg">
                </div>
            </div>
        </div>
        <div class="padding-section"></div>
        <div class="grid-container-1">
            <h3>Other Notes</h3>
            <p class="normal-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et orci pharetra,
                euismod purus non, pretium mauris. Phasellus quis arcu id erat suscipit egestas. Mauris blandit
                fermentum tempus. Quisque aliquet quam quis varius tempus. Nunc nec libero turpis. Sed nec ante augue.
                Phasellus vitae semper quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ipsum
                ex, lobortis vel nisi quis, condimentum pellentesque elit. Phasellus lacus massa, tincidunt in ultricies
                at, lacinia porta metus. Integer mollis lectus arcu, a vestibulum justo accumsan at. Cras blandit
                tincidunt pretium. Nulla dignissim quam ornare lacus consequat bibendum. Nam metus lorem, tempus vel
                lobortis eu, luctus sit amet tortor. Aliquam accumsan blandit neque, ut ultricies ipsum aliquet nec.</p>
        </div>
    </div>

    <div class="padding-section"></div>

    <div class="side-padding">
        <h1>Recipes</h1>
    </div>

    <?php include 'components/news.php' ?>

    <div class="padding-section"></div>

    <?php include 'components/footer.php' ?>
</div>