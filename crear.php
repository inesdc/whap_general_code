<?php include ('php-calls/head.php'); ?>
  <body class="create">
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block hidden-xs crear-cont"><a href="planning.php">crear</a></button>
      </div>
      <ul class="secondary-nav list-unstyled hidden-xs">
        <li class="col-xs-4 col-sm-3 col-lg 4 ongoing"><a href="index.php">Ongoing</a></li>
        <li class="col-xs-4 col-sm-3 col-lg 4 planning"><a href="planning.php">Planning</a></li>
        <li class="col-xs-4 col-sm-3 col-lg 4 upcoming"><a href="upcoming.php">Upcoming</a></li>
      </ul>
    </div>
  </header>
<!-- CONTENT -->
<div id="main" class="clearfix create">
  </script>
  <div id="container-size" class="container">
    <div class="basic-info">
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
      </form>
      <div class="col-xs-12">
        <button class="btn btn-default create-trip-btn"><a href="planning.php">Crear</a></button>
      </div> 
      </div>
      <div class="add_steps_drop hidden-xs">
        <h3 class="col-xs-12">Add steps</h3>
        <div class="col-sm-6 col-md-4">
          <div class="droppable" data-col="1" data-row="1">
            <span class="dropdown-toggle add-step-droppdown" type="button" data-toggle="dropdown" aria-expanded="false" href="#"><i class="icon ico-plus"></i>Add step</span>
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
          <div class="droppable hidden-xlg" data-col="1" data-row="3">
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="droppable" data-col="2" data-row="1">
          </div>
          <div class="droppable" data-col="2" data-row="2">
          </div>
          <div class="droppable hidden-xlg" data-col="2" data-row="3">
          </div>
        </div>
        <div class="col-md-4 hidden-sm hidden-md hidden-lg visible-xlg">
          <div class="droppable" data-col="3" data-row="1">
          </div>
          <div class="droppable" data-col="3" data-row="2">
          </div>
        </div>
      </div>
      
    </form>
  </div>
  <section class="aside add_steps_drag col-xs-12">
    <div class="container">
      <h3>Steps</h3>
      <p>Drag &amp; Drop the steps you want to fulfill and create the trip. You will always be able to edit what you’ve filled and completethe rest.</p>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <div class="step-title">
            <i class="icon ico-wallet-line"></i><h3>How much</h3>
            <p class="hidden"><small>Add a Budget</small></p>
          </div>
          <div class="create-step-content hidden-xs">
            <form class="howMuchCreateCard">
              <p class="budgetCardCreate">Add a Budget</p>
              <fieldset class="form-group">
                <select class="form-control">
                  <option>Poor &amp; Proud<small>(100-300€)</small></option>
                  <option>Cheap but fun<small>(300-600€)</small></option>
                  <option>Dont mind spending a bit<small>(600-900€)</small></option>
                  <option>Money ain't a thing<small>(900-...€)</small></option>
                </select>
              </fieldset>
              <div class="checkbox">
                <label class="of-checkbox">
                  <input class="checkbox" type="checkbox">
                  <span></span>Block Additional Options
                </label>
              </div>
              <div class="inputGroup">
                <button class="btn btn-default"><a href="#">GOT IT</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <div class="step-title">
            <i class="icon ico-location-line"></i><h3>Where</h3>
            <p class="hidden"><small>Define 1 or more places</small></p>
          </div>
          <div class="create-step-content hidden-xs">
            <form class="whereCreateCard">
              <p>Add a Place</p>
              <div class="option-added clearfix">
                <p class="pull-left">Rio de Janeiro</p>
                <i class="icon ico-location-gray  pull-right"></i>
              </div>
              <div class="option-adding clearfix">
                <p class="pull-left">Add more options</p>
                <i class="icon ico-add-blue pull-right"></i>
              </div>
              <div class="checkbox">
                <label class="of-checkbox">
                  <input class="checkbox" type="checkbox">
                  <span></span>Block Additional Options
                </label>
              </div>
              <div class="inputGroup">
                <button class="btn btn-default"><a href="#">READY</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <div class="step-title">
            <i class="icon ico-calendar-line"></i><h3>When</h3>
            <p class="hidden"><small>Select the dates</small></p>
          </div>
          <div class="create-step-content hidden-xs">
            <form class="whenCreateCard">
              <div id="datepicker">
              </div>
              <div class="datepicker">
                  <input id="datepicker" type="text" class="form-control" placeholder="18/01/2014-24/01/2015">
              </div>
              <div class="input-group">
                <div class="input-group-btn">
                    <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle month" type="button">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                        Or Just Pick A Month
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labeledby="dLabel">
                        <li><a href="#">February</a></li>
                        <li><a href="#">March</a></li>
                        <li><a href="#">April</a></li>
                        <li><a href="#">May</a></li>
                        <li><a href="#">June</a></li>
                        <li><a href="#">July</a></li>
                        <li><a href="#">August</a></li>
                        <li><a href="#">September</a></li>
                        <li><a href="#">October</a></li>
                        <li><a href="#">November</a></li>
                        <li><a href="#">December</a></li>
                    </ul>
                  </div>
                </div>
                <div class="checkbox">
                <label class="of-checkbox">
                  <input class="checkbox" type="checkbox">
                  <span></span>Block Additional Options
                </label>
              </div>
                <div class="inputGroup">
                  <button class="btn btn-default"><a href="#">SET</a></button>
                </div>
              </form>
          </div>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <div class="step-title">
            <i class="icon ico-how-line"></i><h3>How</h3>
            <p class="hidden"><small>Select the transport</small></p>
          </div>
          <div class="create-step-content hidden-xs">
            <form class="howCreateCard">
              <div class="how">
                <div class="clearfix">
                  <div class="col-xs-4"><img src="images/plane.png"><span>Plane</span></div>
                  <div class="col-xs-4"><img src="images/train.png"><span>Train</span></div>
                  <div class="col-xs-4"><img src="images/boat.png"><span>Boat</span></div>
                </div>
                <div class="clearfix">
                  <div class="col-xs-4"><img src="images/moto.png"><span>Moto</span></div>
                  <div class="col-xs-4"><img src="images/bike.png"><span>Bike</span></div>
                  <div class="col-xs-4"><img src="images/foot.png"><span>Foot</span></div>
                </div>
                <div class="clearfix">
                  <div class="col-xs-4"><img src="images/car.png"><span>Car</span></div>
                  <div class="col-xs-4"><img src="images/furgo.png"><span>Van</span></div>
                  <div class="col-xs-4"><img src="images/plus.png" class="plus"><span>Other</span></div>
                </div>
              </div>
              <div class="checkbox">
                <label class="of-checkbox">
                  <input class="checkbox" type="checkbox">
                  <span></span>Block Additional Options
                </label>
              </div>
              <div class="inputGroup">
                <button class="btn btn-default"><a href="#">GO></a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <div class="step-title">
            <i class="icon ico-who-line"></i><h3>Who</h3>
            <p class="hidden"><small>Invite some people</small></p>
          </div>
          <div class="create-step-content hidden-xs">
            <form class="whoCreateCard">
              <div class="input-group">
                <ul class="form-input" id="redesSociales">
                  <li><a href="#"><img class ="facebook"src="images/facebook.png"></a></li>
                  <li><a href="#"><img src="images/twitter.png"></a></li>
                  <li><a href="#"><img src="images/google.png"></a></li>
                  <li><a href="#"><img src="images/instagram.png"></a></li>
                  <li><a href="#"><img src="images/whatsapp.png"></a></li>
                  <li><a href="#"><img src="images/email.png"></a></li>
                </ul>
                <div class="checkbox">
                  <label class="of-checkbox">
                    <input class="checkbox" type="checkbox">
                    <span></span>Block Additional Options
                  </label>
                </div>
                <div class="inputGroup">
                  <button class="btn btn-default"><a href="#">SET</a></button>
                </div>
              </div>
            </form>  
          </div>
        </div>
      </div>
      <div class="draggable module-steps">
        <div class="module-steps-inner">
          <div class="step-title">
            <i class="icon ico-what-line"></i><h3>What</h3>
            <p class="hidden"><small>Set the details</small></p>
          </div>
          <div class="create-step-content hidden-xs">
            <form class="whatCreateCard">
              <div class="menu">
                <ul class="secondary-menu list-unstyled clearfix">
                  <li role="presentation" class="active col-xs-4"><a href="#">Activities</a></li>
                  <li class="col-xs-4"><a href="#">Transport</a></li>
                  <lic class="col-xs-4"><a href="#">Sleeping</a></li>
                </ul>
              </div>
              <div class="bodystuff clearfix">
                  <div class="col-xs-6">
                    <img src="images/alien.png">
                    <p>Explore Ideas</p>
                  </div>
                  <div class="col-xs-6">
                    <img src="images/plus.png">
                    <p>Add Manuallly</p>
                  </div>
              </div>
              <div class="checkbox">
                <label class="of-checkbox">
                  <input class="checkbox" type="checkbox">
                  <span></span>Block Additional Options
                </label>
              </div>
              <div class="">
                <button class="btn btn-default"><a href="#">SET</a></button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <button class="visible-xs btn btn-default create-trip-btn"><a href="planning.php">Crear</a></button>
</div>

<?php include ('php-calls/footer.php'); ?>
