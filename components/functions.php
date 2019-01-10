<?php

function getNewsItem($newsArray, $id) {
    $imgPath = $newsArray[$id]["imgPath"];
    $date = $newsArray[$id]["date"];
    $title = $newsArray[$id]["title"];
    return '<div class="grid-item">
                <img src=' . $imgPath . ' alt=' . $title . '>
                <h5>' . $date . '</h5>
                <a href="generic-news.php?id=' . $id . '"><h3 class="link-text">' . $title . '</h3></a>
            </div>';
}

function highlightCurrentPage($page) {
    if (strtolower($page) === $activePage = basename($_SERVER['PHP_SELF'], ".php") or
        isset($_GET["pageName"]) && $_GET["pageName"] === strtolower($page)) {
        return 'class="pink-text"';
    }
}

function createNewsPage($newsId) {
    $string = file_get_contents("assets/news-data.json");
    $newsArray = json_decode($string, true);
    $imgPath = $newsArray[$newsId]["imgPath"];
    $date = $newsArray[$newsId]["date"];
    $title = $newsArray[$newsId]["title"];
    $text = $newsArray[$newsId]["text"];
    return '
        <div class="grid-container-overflow side-padding introduction">
            <div class="grid-overflow-left">
                <div class="introduction">
                    <h1 class="pink-text">' . $title . '</h1>
                    <p class="sub-headline">
                        ' . $date . '
                    </p>    
                </div>    
                <br/>
                <p> ' . $text . '</p>
            </div>
            <div class="grid-overflow-right">
                <img src="' . $imgPath . '" alt="">
            </div>
        </div>
    ';
}

function createGenericPage($pageName) {
    $string = file_get_contents("assets/generic-page-data.json");
    $pageArray = json_decode($string, true);
    $pageTitle = $pageArray[$pageName]["pageTitle"];
    $pageSubTitle = $pageArray[$pageName]["pageSubTitle"];
    $pageText = $pageArray[$pageName]["pageText"];
    $imgPath = $pageArray[$pageName]["imgPath"];
    return '
        <div class="grid-container-overflow side-padding introduction">
            <div class="grid-overflow-left">
                <div class="introduction">
                    <h1 class="pink-text">' . $pageTitle . '</h1>
                    <p class="sub-headline">
                        ' . $pageSubTitle . '
                    </p>    
                </div>    
                <br/>
            </div>
            <div class="grid-overflow-right">
                <img src="' . $imgPath . '" alt="">
            </div>
        </div>
        <div class="padding-section"></div>
        <div class="side-padding">
            <h5>' . $pageText . '</h5>
        </div>
    ';
}