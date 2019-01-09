<html lang="eng">
<head>
    <title>News</title>
    <link rel="stylesheet" href="css/news.css">
</head>
<body>
<h1>News</h1>
<div class="grid-container-3">
    <?php
    include 'functions.php';
    $string = file_get_contents("news-data.json");
    $newsArray = json_decode($string, true);
    $iterations = sizeof($newsArray) > 3 ? 3 : sizeof($newsArray);
    for ($i = 0; $i < $iterations; $i++) {
        echo getNewsItem($newsArray, $i);
    }
    ?>
</div>
</body>
</html>