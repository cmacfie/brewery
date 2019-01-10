<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/recipe.css">
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/our-brews.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Viistatha Brewery</title>
</head>

<div class="main">
    <?php include 'components/header.php' ?>

    <div class="padding-section"></div>
    <div class="grid-container-overflow side-padding introduction">
        <div class="grid-overflow-left recipe">
            <div class="absolute-position">
                <h1 class="link-text font-size-huge">Emperor,<br/> The Biggest!</h1>
                <p class="font-size-large">
                    The beer of khans, kings, queens,<br/> emperors and all rulers alike<br/>
                    Lorem ipsum
                </p>
            </div>
        </div>
        <div class="grid-overflow-right video">

            <img src="assets/images/video-img.jpg" alt="">
            <img src="assets/buttons/play-icon.svg" alt=""
                onmouseover='this.src="assets/buttons/play-icon-hover.svg"'
                 onmouseout='this.src="assets/buttons/play-icon.svg"'>
        </div>
    </div>

    <div class="padding-section"></div>
    <div class="side-padding-double recipe">
        <div class="grid-container-2">
            <div class="grid-item left">
                <h2 class="brown-text">Mashing</h2>
                <ul>
                    <li>6500 g pale ale malt (88%)</li>
                    <li>500 g cara malt (6%)</li>
                    <li>500 g wheat malt (6%)</li>
                </ul>
            </div>
            <div class="grid-item right">
                <h3>Mashing procedure</h3>
                <p class="normal-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
        <div class="padding-section"></div>
        <div class="grid-container-2">
            <div class="grid-item left">
                <h2 class="green-text">Hops</h2>
                <ul>
                    <li>35 g centennial @ 60 min</li>
                    <li>35 g columbus @ 30 min</li>
                    <li>35 g citra @ 30 min</li>
                    <li>35 g simcoe @ 15 min</li>
                    <li>35 g amarillo @ 15 min</li>
                </ul>
            </div>
            <div class="grid-item">
                <div class="green-box">
                    <img src="assets/other/zig-zag-top.svg" style="margin-bottom: -4px">
                    <div>
                        <h3 class="font-size-medium">Dry hopping</h3>
                        <ul>
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
            <p class="normal-text">Lorem ipsum dolor sit amet, in autem possim est. Appareat corrumpit ne vix, ornatus reformidans
                neglegentur vel an, vim nullam inermis molestiae in. Usu ne facete latine bonorum. Vix in timeam tamquam
                molestiae.

                Te vel quis aeque, vim prompta legimus mediocritatem ad, vel ad erant utinam aliquip. Cum diceret
                nominati et. Fastidii quaerendum nec an, ea mel tation numquam adipisci, option impetus ponderum ei his.
                Has eu invenire theophrastus, eum tale commune verterem no, mea ex iusto splendide. Eam et nostrud
                salutatus, usu omittam propriae mentitum cu. At aliquip omnesque expetenda nec.</p>
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