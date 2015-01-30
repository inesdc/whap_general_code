<?php include ('php-calls/head.php'); ?>
  <body class="create">
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block hidden-xs">crear</button>
      </div>
      <ul class="secondary-nav list-unstyled hidden-xs">
        <li class="col-xs-4 col-sm-3 ongoing"><a href="index.php">Ongoing</a></li>
        <li class="col-xs-4 col-sm-3 planning"><a href="planning.php">Planning</a></li>
        <li class="col-xs-4 col-sm-3 upcoming"><a href="upcoming.php">Upcoming</a></li>
      </ul>
    </div>
  </header>
<!-- CONTENT -->
<div id="main" class="clearfix create">
  </script>
  <div id="container-size" class="container">
    <h3>New trip</h3>
    <form class="row">
      <div class="form-group col-sm-8">
        <label for="Trip-name">Give it a name</label>
        <input type="text" class="form-control" id="trip-name">
      </div>
      <div class="form-group col-sm-8">
        <label for="trip-type">¿What kind of trip is it?</label>
        <select id="trip-type" class="form-control">
          <option>Select a kind of trip</option>
          <option>Adventure</option>
          <option>Familiar</option>
          <option>Relax</option>
          <option>Surfing</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-group col-sm-8">
        <label for="trip-description">Add a description</label>
        <textarea class="form-control" id="trip-description" rows="3"></textarea>
      </div>
      <div class="add_steps_drop hidden-xs">
        <h3 class="col-xs-12">Add steps</h3>
        <div class="col-sm-6 col-md-4">
          <div class="droppable" data-col="1" data-row="1">
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
          <div class="droppable" data-col="1" data-row="2">
          </div>
          <div class="droppable visible-sm" data-col="1" data-row="3">
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable" data-col="2" data-row="1">
          </div>
          <div class="droppable" data-col="2" data-row="2">
          </div>
          <div class="droppable visible-sm" data-col="2" data-row="3">
          </div>
        </div>
        <div class="col-md-4 hidden-sm">
          <div class="droppable" data-col="3" data-row="1">
          </div>
          <div class="droppable" data-col="3" data-row="2">
          </div>
          <div class="droppable visible-sm">
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <button type="submit" class="btn btn-default">Crear</button>
      </div> 
    </form>
  </div>
  <section class="aside add_steps_drag col-xs-12">
    <div class="container">
      <h3>Steps</h3>
      <p>Drag &amp; Drop the steps you want to fulfill and create the trip. You will always be able to edit what you’ve filled and completethe rest.</p>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <span>How much</span>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <span>Where</span>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <span>When</span>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <span>How</span>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <span>Who</span>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <span>What</span>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include ('php-calls/footer.php'); ?>
