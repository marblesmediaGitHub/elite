
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" href="https://www.brianwatkinsphotography.co.uk/wp-content/themes/brianwatkinsphotography/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
    <meta name="format-detection" content="telephone=no">
    <title>Elite Valeting</title>
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109938840-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109938840-1');
</script>
<?php wp_head()?>
</head>

<body>

   <!-- Mobile Nav -->

    <div id="mySidenav" class="sidenav" style="width: 0px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="https://www.brianwatkinsphotography.co.uk/" title="Home">Home</a>
        <a href="https://www.brianwatkinsphotography.co.uk/#about" title="About">About</a>
        <a href="/gallery/" title="Gallery">Gallery</a>
        <a href="/contact/" title="Contact">Contact</a>
    </div>

    <!-- Nav -->

    <div id="nav" class="nav">
        <div class="content-nav-only">
            <div class="logo">
                <a href="https://www.brianwatkinsphotography.co.uk/" class="color-1 logo-link">Brian Watkins Photography</a>

            </div>
            <div class="display-mobile color-1"><span class="color-1" onclick="openNav()"><i class="fa fa-bars color-1" aria-hidden="true"></i></span></div>
            <ul>

                <li><a href="https://www.brianwatkinsphotography.co.uk/" title="Home" class="color-1 fade-in-1s mobile-none scroll">Home</a></li>
                <li><a href="https://www.brianwatkinsphotography.co.uk/#about" title="About" class="color-1 fade-in-1s mobile-none scroll">About</a></li>
                <li><a href="/gallery/" title="Gallery" class="color-1 fade-in-1s mobile-none">Gallery</a></li>
                <li><a href="/contact/" title="Contact" class="color-1 fade-in-1s mobile-none">Contact</a></li>
            </ul>
        </div>
    </div>

<!-- Content -->

<div id="header">

</div>
<!--
<div class="fade-in-2s">

        <img class="scroll-down animated slideInUp" src="http://www.brianwatkinsphotography.co.uk/wp-content/themes/brianwatkinsphotography/mouse.png" alt="Mouse image to scroll down"/>
</div>
-->
