<?php global $SConfig ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?=base_url('assets/backend/img/logo.png')?>">
        <title><?=$SConfig->_site_name ?></title>

        <!-- vendor css -->
        <link href="<?=base_url('assets/backend') ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?=base_url('assets/backend') ?>/lib/Ionicons/css/ionicons.css" rel="stylesheet">

        <link rel="stylesheet" href="<?=base_url('assets/backend') ?>/css/style.css">
    </head>

    <body>
        <style type="text/css" media="screen">
            .logo-name{
                margin: 15px -21px 0 -21px;
                /* background-image: linear-gradient(to right, #d1c9f5,#bfb2f7,#ae9df5,#9780f2,#8266f2,var(--color-second)); */
                background-image: linear-gradient(to right, #afb3db,#8389d6,#6b73cf,#555dbd,#454da8,var(--color-second));
            }

            .title-login{
                color: var(--color-frist); 
                font-size: 20px; 
                text-align: center;
                display:flex;
                align-items:center;
            }

            .logo-login{
                text-align: center;
                display:flex;
                align-items:center;
            }
        </style>