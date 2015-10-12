<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
    <title><?php echo $title; ?> - Nicz's Portfolio</title>
    <link href="<?php echo $site_url; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $site_url; ?>/css/custombox.min.css" rel="stylesheet">
    <link href="<?php echo $site_url; ?>/images/favicon.ico" rel="icon" >
    <!-- jQuery -->
    <script src="<?php echo $site_url; ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $site_url; ?>/js/functions.js"></script>
  </head>
  
  <body>
    <input type="hidden" id="page" value="<?php echo $active_page; ?>"/>
    <div class="header">
      <div class="header-primary">
        <!--img src="<?php echo $site_url; ?>/images/header.jpg" alt="header image"-->
        <h1><a href="<?php echo $site_url; ?>">Nicz's Portfolio</a></h1>
      </div>
    </div>
    <div class="nav">
      <div id="nav-primary">
        <ul>
            <li id="header" class="list"><a href="#">Home</a></li>
            <li id="projects" class="list"><a href="#">Projects</a></li>
            <li id="about" class="list"><a href="#">About</a></li>
            <li id="contact" class="list"><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>