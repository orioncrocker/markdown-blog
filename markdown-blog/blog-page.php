<?php
/**
 * Loads the markdown file given in the ?page query param into $markdown.
 */
require_once 'postRenderer.php';
$page = $_GET['page'];
$postSlug = substr($page, 0, -3);
if (file_exists($page)) {
    $markdown = file_get_contents($page);
    $pageTitle = getPostTitle($markdown);
    $date = getPostDate($page);
} else {
    $markdown = "# Page '" . $postSlug . "' doesn't exist! " .
                "<br>![404](/images/godzilla.png)<br>";
    $pageTitle = 'Page not found!';
    $date = '404';
}
$pageTitle = $pageTitle . " :: orionc.dev"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
</head>
<body>
    <header>
    <?php include("header.php"); ?>
    </header>
    <div class="blog">
        <div class='markdown'>
            <?php echo $date . '<br>';
            echo renderMarkdown($markdown); ?>
        </div>
    </div>
</body>
<footer>
  <?php include("footer.php"); ?>
</footer>
</html>
