<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/our-brews.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Viistatha Brewery</title>
</head>

<body>
<div class="main">
    <?php include 'components/header.php' ?>
    <div class="padding-section"></div>
    <div class="grid-container-overflow side-padding introduction">
        <div class="grid-overflow-left">
            <div class="absolute-position">
                <h1 class="pink-text">Well Hello!</h1>
                <p>We are <em class="link-text">Viistatha Brewery</em>.<br/>
                    We love making <em class="link-text">open-source</em> beer.<br/>
                    Everyone should be able to make <br/>
                    <em class="link-text">great enjoyable beer</em>
                </p>
                <br/>
                <a class="link-container" href="recipes.php">
                    <div>See our recipes</div>
                    <div class="link-image"></div>
                </a></div>

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
