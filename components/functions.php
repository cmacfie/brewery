<?php

function getNewsItem($newsArray, $id)
{
    $imgPath = $newsArray[$id]["imgPath"];
    $date = $newsArray[$id]["date"];
    $title = $newsArray[$id]["title"];
    $link = $newsArray[$id]["link"];
    return '<div class="grid-item">
                <img src=' . $imgPath . ' alt=' . $title . '>
                <p>' . $date . '</p>
                <a href="' . $link . '"><h3 class="link-text">' . $title . '</h3></a>
            </div>';
}

function highlightCurrentPage($page)
{
    if (strtolower($page) === $activePage = basename($_SERVER['PHP_SELF'], ".php")) {
        return 'class="pink-text"';
    }
}
