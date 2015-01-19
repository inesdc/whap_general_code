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
        <button type="button" class="btn btn-default btn-block">crear viaje</button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="width33-xs col-sm-3 ongoing"><a href="index.php">On going</a></li>
        <li class="width33-xs col-sm-3 active planning"><a href="#">Planning</a></li>
        <li class="width33-xs col-sm-3 upcoming"><a href="#">Upcomming</a></li>
      </ul>
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix planning">
  <div id="container-size" class="container">
    <section class="modules trips">
      <article class="trip">
        <div class="module-trips">
          <div class="trips-summary">
          </div>
            <div class="trip-steps hide">
              <div class="trip-cards row">

                <div class="deciding col-xs-12 col-md-8 pad0R-md ">
                    <h3>Deciding</h3>
                    <div class="how-much-cards col-xs-12 col-sm-3">
                      <div class="trip-card">hola</div>
                    </div>
                    <div class="where-cards col-xs-12 col-sm-3">
                      <div class="trip-card"></div>
                    </div>
                    <div class="when-cards col-xs-12 col-sm-3">
                      <div class="trip-card"></div>
                    </div>
                    <div class="how-cards col-xs-12 col-sm-3">
                      <div class="trip-card"></div>
                    </div>
                </div>

                <div class="decided remove_padding coll-xs-12 col-md-4 pad0L-md">
                  <h3>Decided</h3>
                  <div class="who-cards col-xs-12 col-sm-6">
                    <div class="trip-card"></div>
                  </div>
                  <div class="what-cards col-xs-12 col-sm-6">
                    <div class="trip-card"></div>
                  </div>
                </div>
              </div>
              <div class="planning-contents"></div>
                <div class="how-much-content"></div>
                <div class="where-content"></div>
                <div class="when-content"></div>
                <div class="how-content"></div>
                <div class="who-content"></div>
                <div class="what-content"></div>
            </div>
        </div>
      </article>
      <article class="">
        <div class="module-trips" data-toggle="modal" data-target="#basicModal">
          <p>2</p>
        </div>
      </article>
      <article class="">
        <div class="module-trips">
          <p>4</p>
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
<script> 
  $( "#header" ).load( "assets/header.html" );
</script>
<script src="assets/js/functions.js"></script>
</body>
</html>
