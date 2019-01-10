<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/our-brews.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:400;700" rel="stylesheet">
    <title>Viistatha Brewery</title>
    <script type="text/javascript" src="components/functions.js"></script>
</head>

<body>
<div class="main">
    <?php include 'components/header.php' ?>
    <div class="padding-section"></div>
    <div class="grid-container-overflow side-padding introduction">
        <div class="grid-overflow-left">
            <div class="absolute-position introduction">
                <h1 class="pink-text">Well Hello!</h1>
                <p class="sub-headline">We are <span class="link-text">Viistatha Brewery</span>.<br/>
                    We love making <span class="link-text">open-source</span> beer.<br/>
                    Everyone should be able to make <br/>
                    <span class="link-text">great enjoyable beer</span>
                </p>
                <div class="link-container list-box-version">
                <a onmouseenter="changeImageOnHover(this, event)" onmouseleave="changeImageOnHover(this, event)" class="link-container" href="recipes.php">
                    <div class="wide-text">See our recipes</div>
                    <img id="main-introduction-link" src="assets/buttons/button-regular.svg">
                </a></div></div>

        </div>
        <div class="grid-overflow-right">
            <img src="assets/images/header-img.jpg" alt="">
        </div>
    </div>
    <div class="padding-section"></div>
    <div class="side-padding">
        <h2>News</h2>
    </div>
    <?php include 'components/news.php' ?>
    <div class="padding-section"></div>
    <?php include 'components/our-brews.php'?>
    <div class="padding-section"></div>
    <?php include 'components/footer.php' ?>
</div>
</body>

</html>
