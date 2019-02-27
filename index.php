<!-- <?php include "contact.php"; ?> -->

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical English</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic|Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
	<?php if(isset($msg)) { echo $msg; } ?>
    <div class="top-bar">
      <div class="row">
      <div class="">
        <ul class="center menu">
          <li class="menu-text"><a href="#">Practical English</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#sample">Sample</a></li>
          <li><a href="#authors">Authors</a></li>
          <li><a href="#order">Download</a></li>
        </ul>
      </div>
      </div>
    </div>

    <div class="callout large intro">
    <div class="row column text-center">
        <h1>Practical English Series</h1>
        <p class="lead">Relevant, level-appropriate English skills for young adult learners.</p>
    </div>
    </div> 

    <ul class="tabs" data-tabs id="books">
      <li class="tabs-title is-active"><a href="#book1" id="book1tab" aria-selected="true">Writing I<span class="show-for-large screen-reader-text">: The Sentence</span></a></li>
      <li class="tabs-title"><a href="#book2" id="book2tab">Writing II<span class="show-for-large screen-reader-text">: The Paragraph</span></a></li>
      <li class="tabs-title"><a href="#book3" id="book3tab ">Reading I<span class="show-for-large screen-reader-text">: Essential TOEIC Skills</span></a></li>
    </ul>

    <div class="tabs-content" datbs-content="books">
      
      <!-- BOOK I : INFO -->
      <div class="row">
        <div class="tabs-panel is-active" id="book1">
          <?php include "partials/book1/intro.php"; ?>
          <hr>
          <?php include "partials/book1/columns.php"; ?>
          <hr>
          <?php include "partials/book1/content.php"; ?>
          <hr>
          <?php include "partials/book1/authors.php"; ?>
          <hr class="long-hr">
          <?php include "partials/book1/download.php"; ?>
        </div>
      </div>
    
      <!-- BOOK II INFO -->
      <div class="row">
        <div class="tabs-panel" id="book2">
          <?php include "partials/book2/intro.php"; ?>
          <hr>
          <?php include "partials/book2/columns.php"; ?>
          <hr>
          <?php include "partials/book2/content.php"; ?>
          <hr>
          <?php include "partials/book1/authors.php"; ?> 
          <hr class="long-hr">
          <?php include "partials/book2/download.php"; ?> 
        </div>
      </div>

      <!-- BOOK III INFO -->
      <div class="row">
        <div class="tabs-panel" id="book3">
          <?php include "partials/book3/intro.php"; ?>
          <hr>
          <?php include "partials/book3/content.php"; ?>
          <hr>
          <?php include "partials/book3/authors.php"; ?>  
          <hr class="long-hr">
          <?php include "partials/book3/download.php"; ?> 
        </div>
      </div>

    </div>

    <footer class="callout large secondary copy">
      <div class="row">
        <strong>Copyright &copy; 2016-2019</strong>
      </div>
    </footer>
    

    <script src="assets/js/app.js"></script>
    <script src="assets/js/color-switcher.js"></script>
    <script src="assets/js/ajax-form-submit.js"></script>
  </body>
</html>