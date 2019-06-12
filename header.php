<!DOCTYPE html <?php language_attributes(); ?>>
<html>

<head <?php do_action('add_head_attributes'); ?>>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(); ?></title>
 <?php wp_head();?>
 <style>
        header {
    width: 100vw;
    height: 500px;
    background-image: url(<?php echo esc_url(get_theme_mod( 'showcase' ) ); ?>);
        background-size: cover;
    background-position: bottom;

}
        </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Blissful Photos</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
            </div>

        </div>
    </nav>
