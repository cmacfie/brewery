<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="initial-scale=1">-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/introduction.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:400;700" rel="stylesheet">
    <title>Viistatha Brewery</title>
    <script type="text/javascript" src="components/functions.js"></script>
</head>

<body>
<div class="main">
    <?php include 'components/header.php'; ?>
    <div class="padding-section"></div>
    <?= createNewsPage($_GET["id"]); ?>
    <div class="padding-section"></div>
    <?php include 'components/footer.php' ?>
</div>
</body>
</html>