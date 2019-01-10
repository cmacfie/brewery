<div class="news side-padding">
    <div class="grid-container-3">
        <?php
        $string = file_get_contents("../brewery/assets/news-data.json");
        $newsArray = json_decode($string, true);
        $iterations = sizeof($newsArray) > 3 ? 3 : sizeof($newsArray);
        for ($i = 0; $i < $iterations; $i++) {
            echo getNewsItem($newsArray, $i);
        }
        ?>
    </div>
</div>