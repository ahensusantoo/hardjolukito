<?php global $SConfig ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="IKBP">

        <link rel="shortcut icon" href="<?= site_url() ?>assets/frontend/images/logo-ra/logo-circle.png">
        <title><?=$SConfig->_site_name ?></title>

        <!-- vendor css -->

        <link href="<?=base_url('assets/backend') ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?=base_url('assets/backend') ?>/lib/font-awesome/css/icons.min.css" rel="stylesheet">
        <link href="<?=base_url('assets/backend') ?>/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link href="<?=base_url('assets/backend') ?>/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
        <link href="<?=base_url('assets/backend') ?>/lib/SpinKit/spinkit.css" rel="stylesheet">
        
        <!-- crafpip CSS -->
        <link href="<?=base_url('assets/backend') ?>/lib/confirm_dialog/jquery-confirm.min.css" rel="stylesheet">
        
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/backend') ?>/css/style.css">

        <script src="<?=base_url('assets/backend') ?>/lib/jquery/jquery.js"></script>
        <style type="text/css" media="screen">
            .copy-notification {
                color: #ffffff;
                background-color: rgba(0,0,0,0.8);
                padding: 20px;
                border-radius: 30px;
                position: fixed;
                top: 50%;
                left: 50%;
                width: 150px;
                margin-top: -30px;
                margin-left: -85px;
                display: none;
                text-align:center;
                z-index: 9999;
            }
        </style>
    </head>

    <body>



        <div id="loading" style="position: fixed; width: 100vw; height: 100vh; background-color: #ffffff9c; z-index: 9999; padding-top: 25vh;" class="text-center">
            <div class="d-flex pos-relative align-items-center">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div><!-- d-flex -->
        </div>

        