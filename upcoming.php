<?php include ('php-calls/head.php'); ?>
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block">crear viaje</button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="col-xs-4 col-sm-3  col-lg 4 ongoing"><a href="ongoing.php"><i class="icon ico-ongoing visible-xs"></i>Ongoing</a></li>
        <li class="col-xs-4 col-sm-3  col-lg 4 planning"><a href="planning.php"><i class="icon ico-planning visible-xs"></i>Planning</a></li>
        <li class="col-xs-4 col-sm-3  col-lg 4 active upcoming"><a href="#"><i class="icon ico-upcoming visible-xs"></i>Upcoming</a></li>
      </ul>
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix upcoming">
  <div id="container-size" class="container">
    <section class="modules trips">
      <article class="trip">
        <?php include ('php-calls/trip_upcoming.php'); ?>
      </article>
      <article class="trip">
        <?php include ('php-calls/trip_upcoming_2.php'); ?>
      </article>
      <article class="trip">
        <div class="module-trips">
          <?php include ('php-calls/trip_upcoming_3.php'); ?>
        </div>
      </article>
   </section>
    <section class="aside hidden-xs">
        <button id="aside-trigger" class="aside-trigger hidden-xs hidden-extralg"></button>
        <div class="chat">
          <?php include ('php-calls/chat.php'); ?>
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
<?php include ('php-calls/footer.php'); ?>
