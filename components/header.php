<div class="grid-container-2 header side-padding">
    <?php require_once('functions.php'); ?>
    <div class="grid-item">
        <a href="/brewery"><img src="../brewery/assets/other/viistatha-logo.svg" alt="Viistatha Brewery"></a>
    </div>
    <div class="grid-item center-aligned">
        <ul class="grid-menu-container">
            <li><a <?= highlightCurrentPage("Brewery") ?> href="../brewery/generic-page.php?pageName=brewery">Brewery</a></li>
            <li><a <?= highlightCurrentPage("Beers") ?> href="../brewery/generic-page.php?pageName=beers">Beers</a></li>
            <li><a <?= highlightCurrentPage("Recipes") ?> href="../brewery/recipes.php">Recipes</a></li>
            <li><a <?= highlightCurrentPage("Press") ?> href="../brewery/generic-page.php?pageName=press">Press</a></li>
            <li><a <?= highlightCurrentPage("Contact") ?> href="../brewery/generic-page.php?pageName=contact">Contact</a></li>
            <li><a <?= highlightCurrentPage("Events") ?> href="../brewery/generic-page.php?pageName=events">Events</a></li>
        </ul>
    </div>
</div>