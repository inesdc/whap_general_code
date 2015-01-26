<?php include ('php-calls/head.php'); ?>
  <body class="create">
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block">cancelar</button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="col-xs-4 col-sm-3 ongoing"><a href="index.php">Ongoing</a></li>
        <li class="col-xs-4 col-sm-3 planning"><a href="planning.php">Planning</a></li>
        <li class="col-xs-4 col-sm-3 upcoming"><a href="upcoming.php">Upcoming</a></li>
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

<?php include ('php-calls/footer.php'); ?>
