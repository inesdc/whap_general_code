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
  <body class="create">
  <header>
    <?php include ('header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block">cancelar</button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="width33-xs col-sm-3 ongoing"><a href="index.php">Ongoing</a></li>
        <li class="width33-xs col-sm-3 planning"><a href="planning.php">Planning</a></li>
        <li class="width33-xs col-sm-3 upcoming"><a href="upcoming.php">Upcoming</a></li>
      </ul>
    </div>
  </header>
<!-- CONTENT -->
<div id="main" class="clearfix create">
  <div id="container-size" class="container">
    <h3>New trip</h3>
    <form>
      <div class="form-group">
        <label for="Trip-name">Give it a name</label>
        <input type="text" class="form-control" id="trip-name">
      </div>
      <div class="form-group">
        <label for="trip-type">¿What kind of trip is it?</label>
        <select id="trip-type" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="trip-description">Add a description</label>
        <textarea class="form-control" id="trip-description" rows="3"></textarea>
      </div>
      <div class="add_steps_drop">
        <h3>Add steps</h3>
        <div class="col-sm-6 col-md-4">
          <div id="droppable" class="droppable">
            <span class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" href="#"><i class="icon ico-plus"></i>Add step</span>
            <ul class="dropdown-menu" role="menu">
              <li>How much</li>
              <li>Where</li>
              <li>When</li>
              <li>How</li>
              <li>Who</li>
              <li>What</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable">
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable">
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable">
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable">
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable">
          </div>
        </div>
      </div>
      <div class="botom-fixed-button">
        <button type="submit" class="btn btn-default">Crear</button>
      </div> 
    </form>
    <section class="aside add_steps_drag">
      <h3>Steps</h3>
      <p>Drag&drop the steps you want to fulfill and create the trip. You will always be able to edit what you’ve filled and completethe rest.</p>
      <div id="draggable" class="draggable module-steps">
      </div>
      <div class="draggable module-steps">
      </div>
      <div class="draggable module-steps">
      </div>
      <div class="draggable module-steps">
      </div>
      <div class="draggable module-steps">
      </div>
      <div class="draggable module-steps">
      </div>
    </section>
  </div>
  
</div>

<!-- Javascript -->

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/functions.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
</body>
</html>
