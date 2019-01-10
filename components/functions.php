<?php

function getNewsItem($newsArray, $id)
{
    $imgPath = $newsArray[$id]["imgPath"];
    $date = $newsArray[$id]["date"];
    $title = $newsArray[$id]["title"];
    return '<div class="grid-item">
                <img src=' . $imgPath . ' alt=' . $title . '>
                <h5>' . $date . '</h5>
                <a href="generic-news.php?id='.$id.'"><h3 class="link-text">' . $title . '</h3></a>
            </div>';
}

function highlightCurrentPage($page)
{
    if (strtolower($page) === $activePage = basename($_SERVER['PHP_SELF'], ".php")) {
        return 'class="pink-text"';
    }
}

function createNewsPage($newsId){

    $string = file_get_contents("../brewery/assets/news-data.json");
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
                    <p> '. $text .'</p>
                </div>
                <div class="grid-overflow-right">
                    <img src="' . $imgPath . '" alt="">
                </div>
            </div>
    ';
}

function createGenericPage($pageName)
{
    $string = file_get_contents("assets/generic-page-data.json");
    $pageArray = json_decode($string, true);
    $pageTitle = $pageArray[$pageName]["pageTitle"];
    $pageText = $pageArray[$pageName]["pageText"];
    $imgPath = $pageArray[$pageName]["imgPath"];
    return '
            <div class="grid-container-overflow side-padding introduction">
                <div class="grid-overflow-left">
                    <div class="introduction">
                        <h1 class="pink-text">' . $pageTitle . '</h1>
                        <p class="sub-headline">
                            ' . $pageText . '
                        </p>    
                    </div>    
                    <br/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                         anim id est laborum
                     </p>
                </div>
                <div class="grid-overflow-right">
                    <img src="' . $imgPath . '" alt="">
                </div>
            </div>
    ';
}