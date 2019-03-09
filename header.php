<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="header">
            <div class="menu">
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Our team </a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div> 
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
            </div>   
        </div>
        
