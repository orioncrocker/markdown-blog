<meta charset="UTF-8">
<link rel="stylesheet" href="/style.css?v=1">

<?php
if ($pageTitle != '') { ?>
  <meta property="og:title" content="<?php echo $pageTitle ?>">
  <title><?php echo $pageTitle ?></title>
<?php
} ?>

<meta property="og:type" content="website" />
<meta property="og:url" content=<?php echo "https://yourwebsite.com" . $postSlug ?> />
<meta property="og:description" content="blog" />
<meta name="viewport" content="width=device-width, initial-scale=1">
