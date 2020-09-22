<?php
require_once 'postRenderer.php';
$path = './posts';
$files = array_slice(scandir($path), 2);

foreach ($files as $file) {
    $md = file_get_contents($path . '/' . $file);
    // Get only summary (first lines of post)
    $md = addTitleHref($md, $file);
    $md = getFirstLines($md, 4);
    ?>
    <div class="blog-post">
        <?php echo renderMarkdown($md); ?>
    </div>
<?php } ?>
