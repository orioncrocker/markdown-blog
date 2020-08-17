<?php
require_once 'postRenderer.php';
$path = './posts';
$files = array_slice(scandir($path), 2);

foreach ($files as $file) {
    $md = file_get_contents($path . '/' . $file);
    // Get only summary (first lines of post)
    $md = getFirstLines($md, 3);
    $md = addTitleHref($md, $file);
    ?>
    <div class="blog-post">
        <?php echo renderMarkdown($md); ?>
        <a href="blog-post.php?page=<?php echo explode('.', $file)[0] ?>.md">Read post</a>
    </div>
<?php } ?>
