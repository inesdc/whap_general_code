<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/icons/favicon.ico">
    <title>WHAP</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  </head>
  <body>
  <header>
    <?php include('header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block">crear viaje</button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="width33-xs col-sm-3 ongoing"><a href="index.php">Ongoing</a></li>
        <li class="width33-xs col-sm-3 active planning"><a href="#">Planning</a></li>
        <li class="width33-xs col-sm-3 upcoming"><a href="upcoming.php">Upcoming</a></li>
      </ul>
    </div>
  </header>
<!-- CONTENT -->
<div id="main" class="clearfix planning">
  <div id="container-size" class="container">
    <section class="modules trips">
      <article class="trip">
        <?php include('trip.php'); ?>
      </article>
      <article class="trip">
        <?php include('trip.php'); ?>
      </article>
      <article class="trip">
        <div class="module-trips">
          <?php include('trip.php'); ?>
        </div>
      </article>
    </section>
    <section class="aside">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">Offers</button>
        <div class="module_offers">
          <p>1</p>
        </div>
        <div class="module_offers">
          <p>2</p>
        </div>
        <div class="module_offers">
          <p>3</p>
        </div>
        <div class="module_offers">
          <p>4</p>
        </div>
    </section>
  </div>
</div>

<!-- Javascript -->

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
