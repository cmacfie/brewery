<html lang="eng">
<head>
    <link rel="stylesheet" href="../brewery/css/header.css">
</head>
<body>
<div class="grid-container-2 header side-padding">
    <?php require_once('functions.php'); ?>
    <div class="grid-item">
        <a href="/brewery"><img src="../brewery/assets/other/viistatha-logo.svg" alt="Viistatha Brewery"></a>
    </div>
    <div class="grid-item center-aligned">
        <ul class="grid-menu-container">
            <li><a <?= highlightCurrentPage("Brewery") ?> href="brewery.php">Brewery</a></li>
            <li><a <?= highlightCurrentPage("Beers") ?> href="beers.php">Beers</a></li>
            <li><a <?= highlightCurrentPage("Recipes") ?> href="../brewery/recipes.php">Recipes</a></li>
            <li><a <?= highlightCurrentPage("Press") ?> href="beers.php">Press</a></li>
            <li><a <?= highlightCurrentPage("Contact") ?> href="contact.php">Contact</a></li>
            <li><a <?= highlightCurrentPage("Events") ?> href="events.php">Events</a></li>
        </ul>
    </div>
</div>
</body>
</html>