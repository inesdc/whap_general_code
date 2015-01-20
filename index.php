<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
    <?php include ('header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block"><a href="crear.php">crear viaje</a></button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="width33-xs col-sm-3 active ongoing"><a href="#">Ongoing</a></li>
        <li class="width33-xs col-sm-3 planning"><a href="planning.php">Planning</a></li>
        <li class="width33-xs col-sm-3 upcoming"><a href="upcoming.php">Upcoming</a></li>
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
          <p>Details</p>
        </div>
      </article>
      <article class="col-sm-6 col-md-4">
        <div class="module-ongoing" data-toggle="modal" data-target="#basicModal">
          <p>2</p>
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
          <p>4</p>
        </div>
      </article>
      <article class="col-sm-6 col-md-4">
        <div class="module-ongoing">
          <p>5</p>
        </div>
      </article>
      <article class="col-sm-6 col-md-4">
        <div class="module-ongoing">
          <p>6</p>
        </div>
      </article>
      <article class="col-sm-6 col-md-4">
        <div class="module-ongoing">
          <p>7</p>
        </div>
      </article>
   </section>

   <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              <div class="btn-group btn-group-justified" role="group" >
                <button type="button" class="btn btn-default" data-toggle="modal" data-dismiss="modal" data-target="#basicModal2">Left</button>
                <button type="button" class="btn btn-default">Middle</button>
                <button type="button" class="btn btn-default">Right</button>
              </div>
            </div>
            <div class="modal-body">
                <h3>Modal Body</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <h3>Modal Body</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
  </div>

  </div>
</div>

<!-- Javascript -->

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
