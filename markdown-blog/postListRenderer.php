<?php
require_once 'postRenderer.php';
$path = './blog/';
$dirs = array_slice(scandir($path), 2);

foreach ($dirs as $dir) {

    $dirpath = $path . $dir;
    if(is_dir($dirpath)) {

        $files = array_slice(scandir($dirpath), 2);
        if (count($files) > 0) {
            ?>
            <h1><?php echo $dir ?></h1>
            <?php

            foreach($files as $file) {
                $filepath = $dirpath . '/' . $file;

                if(is_file($filepath) && pathinfo($file, PATHINFO_EXTENSION) == 'md') {
                    $md = file_get_contents($filepath);
                    $pageTitle = getPostTitle($md, $filepath);
                    $pageDate = getPostDate($filepath);
                    ?>
                    <li>
                        <?php
                        if ($pageDate)
                            echo $pageDate;
                        else
                            echo "date not found!";
                        echo " :: ";
                        ?>
                        <a href = <?php echo getPostSlug($filepath) ?>>
                        <?php echo $pageTitle ?></a>
                    </li>
                    <?php
                }
            }
        }
    }
} ?>