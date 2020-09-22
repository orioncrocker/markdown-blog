<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Blog Posts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=480, user-scalable=yes">
        <link rel="stylesheet" href="style.css?v=1">

        <meta property="og:title" content="orionc.dev/blog" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://orionc.dev/blog" />
        <meta property="og:description" content="blog" />
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
        <?php include 'postListRenderer.php'; ?>
    </div>
</body>
<footer></footer>
</html>