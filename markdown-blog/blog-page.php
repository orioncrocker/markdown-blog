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
<<<<<<< HEAD
    <?php include("head.php"); ?>
=======
    <!-- from orion's website -->
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css?v=1">

    <meta property="og:title" content=<?php echo $pageTitle ?> />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://orionc.dev/blog.html" />
    <meta property="og:description" content="blog" />

    <!-- from github blog site -->
    <title><?php echo $pageTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> ef624b7e01f3c1fb5a8dbc0af5925486bd9ac86a
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
