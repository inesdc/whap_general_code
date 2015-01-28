<?php include ('php-calls/head.php'); ?>
 <body>
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block"><a href="crear.php">crear viaje</a></button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="col-xs-4 col-sm-3 active ongoing"><a><i class="icon ico-ongoing visible-xs"></i>Ongoing</a></li>
        <li class="col-xs-4 col-sm-3 planning"><a href="planning.php"><i class="icon ico-planning visible-xs"></i>Planning</a></li>
        <li class="col-xs-4 col-sm-3 upcoming"><a href="upcoming.php"><i class="icon ico-upcoming visible-xs"></i>Upcoming</a></li>
      </ul>
    </div>
  </header>
<!-- CONTENT -->
  <div id="main" class="clearfix ongoing">
    <div id="container-size" class="container">
      <section class="modules col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <article class="col-sm-12 col-md-12">
          <div class="details">
            <p>Details</p>
          </div>
        </article>
        <article class="col-sm-6 col-md-4">
          <div class="module-ongoing">
            <?php include ('php-calls/itinerary.php'); ?>
          </div>
        </article>
        <article class="col-sm-6 col-md-4">
          <div class="module-ongoing" data-toggle="modal" data-target="#basicModal">
            <?php include ('php-calls/nearby.php'); ?>
          </div>
        </article>
        <article class="aside">
          <button id="aside-trigger" class="hidden-xs hidden-extralg">chat</button>
          <div class="module-ongoing">
            <p>3</p>
          </div>
        </article>
        <article class="col-sm-6 col-md-4">
          <div class="module-ongoing">
            <?php include ('php-calls/feeds.php'); ?>
          </div>
        </article>
        <article class="col-xs-4 col-sm-6 col-md-4">
          <div class="module-ongoing">
            <?php include ('php-calls/album.php'); ?>
          </div>
        </article>
        <article class="col-xs-4 col-sm-6 col-md-4">
          <div class="module-ongoing">
             <?php include ('php-calls/bring.php'); ?>
          </div>
        </article>
      	<article class="col-xs-4 col-sm-6 col-md-4">
            <div class="module-ongoing">
              <?php include ('php-calls/budget.php'); ?>
            </div>
        </article>
     </section>
    </div>
  </div>

<!-- Javascript -->
<?php include ('php-calls/footer.php'); ?>

</body>
</html>
