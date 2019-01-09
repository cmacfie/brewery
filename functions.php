<?php

function getNewsItem($newsArray, $id)
{
    $imgPath = $newsArray[$id]["imgPath"];
    $date = $newsArray[$id]["date"];
    $title = $newsArray[$id]["title"];
    $link = $newsArray[$id]["link"];
    return '<div class="newsItem">
                <img src=' . $imgPath . ' alt=' . $title . '>
                <p>' . $date . '</p>
                <a href="' . $link . '"><h2 class="blue">' . $title . '</h2></a>
            </div>';
}
?>