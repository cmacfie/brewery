<div class="grid-container-12 header side-padding">
    <?php require_once('functions.php'); ?>
    <div class="grid-item left">
        <a href="/brewery"><img src="assets/other/viistatha-logo.svg" alt="Viistatha Brewery"></a>
    </div>
    <div id="header-menu" class="grid-item right center-aligned">
        <ul class="grid-menu-container">
            <li><a <?= highlightCurrentPage("Brewery") ?> href="generic-page.php?pageName=brewery">Brewery</a></li>
            <li><a <?= highlightCurrentPage("Beers") ?> href="generic-page.php?pageName=beers">Beers</a></li>
            <li><a <?= highlightCurrentPage("Recipes") ?> href="recipes.php">Recipes</a></li>
            <li><a <?= highlightCurrentPage("Press") ?> href="generic-page.php?pageName=press">Press</a></li>
            <li><a <?= highlightCurrentPage("Contact") ?> href="generic-page.php?pageName=contact">Contact</a></li>
            <li><a <?= highlightCurrentPage("Events") ?> href="generic-page.php?pageName=events">Events</a></li>
        </ul>
    </div>
</div>