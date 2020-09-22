<?php
/**
 * Loads the markdown file given in the ?page query param into $markdown.
 */
require_once 'postRenderer.php';
$postSlug = $_GET['page'];
$page = 'posts/' . $postSlug;
if (file_exists($page)) {
    $markdown = file_get_contents($page);
    $pageTitle = getPostTitle($markdown);
} else {
    $markdown = "# 404 <br/> Post '$postSlug' not found 😢 ";
    $pageTitle = 'Blog post not found!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    <header>
    <div class="header_logo">
        <div class="logo">
        <div class="logo_text">orion crocker</div>
        </div>
    </div>
    <nav>
        <!-- <div class="navbar" >
        <a id="hl" href="index.html">About</a>
        <a id="hl" href="work.html">Work</a>
        <a id="hl" href="blog.html">Blog</a>
        <a id="hl" href="contact.html">Contact</a>
        </div> -->
    </nav>
    </header>
    <div class="blog">
        <div class='markdown'>
                <?php echo renderMarkdown($markdown); ?>
        </div>
    </div>
</body>
<footer></footer>
</html>
