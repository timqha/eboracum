<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="charset="<?php bloginfo('charset'); ?>"">
    <title>Eboracum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pro_Solvo">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/fonts/CrimsonText-Bold.ttf">
    <!--    fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" ></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/app.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/twitter.js"></script>
    <?php wp_head();?>
    <style>
        h3::before {
            content: '';
            position: absolute;
            left: -30px;
            top: 32px;
            width: 22px;
            height: 22px;
            background: url("<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png") 100% 100% no-repeat;
            background-size: cover;
        }
    </style>
<body>

<span  id="page-top" ></span>
<div class="wrapper">
<?php //body_class(); ?>