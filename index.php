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
        <!-- ITINERARY -->
        <div id="itinerary" class="module card itinerary">


        <nav id="itinerary">
            <div class="top">
                <span class="center"></span>
                <img id="paperAirplane" src="images/paperAirplane.png">
                <h2 class="modualHeader">Itinerary</h2>                
            </div>
        </nav>

        
        <section id="itinerary">
            <div class="content">
                <div class='heads'>
    		        <ul class="profilePictures">
                        <li class="head"><img class="avatar" src="images/guy1.png"></li>
                        <li class="head"><img class="avatar" src="images/guy2.png"></li>
                        <li id="front" class="head"><img class="avatar" src="images/guy3.png"></li>
                        <li class="head"><img class="avatar" src="images/guy4.png"></li>
                        <li id="front" class="head"><img class="avatar" src="images/guy5.png"></li>
                        <span class="streach"></span>
                    </ul>
                </div>
                <div class="schedule">
                <ul class="itinerarys">
                    <li class="cita"><strong>10:30</stong> Pick up Mario and Ana</li>
                    <span class="center"></span>
                </ul>
                </div>

            <div class="location">
                <div class="box">
                <img class="locationIcon" src="images/location.png">
                <h2 class="barcelona"><strong>Montenegro</strong></h2>
                </div>
            </div>

            <div class="buttons">
                <ul class="optionButtons">
                    <li class="what">ON TIME</li>
                    <li class="what">DELAY</li>
                    <li class="what">ADVANCE</li>
                    <li class="what">DELETE</li>    
                </ul>
            </div>
        </div>
            </section>

        <footer id="itinerary">
            <div class="expand">
                 <span class="center"></span>
                 <img id="arrow" src="images/arrow.png">
            </div>
        </footer>

 
        </div>
      </article>

<!-- NEARBY -->

      <article class="col-sm-6 col-md-4">
        <div id="nearby" class="module card nearby" data-toggle="modal" data-target="#basicModal">
         <nav id="nearby">
            <div class="top">
                <span class="center"></span>
                <img id="map" src="images/map.png">
                <h2 class="modualHeader">Nearby</h2>                
            </div>
        </nav>

        
        <section>
            <div class="content">
                <img id="moon" src="images/moon.png">
                <img id="globe" src="images/globe.png">
                <img id="dot" src="images/dot.png">

            </div>
        </section>

        <footer id="nearby">
            <div class="expand">
                 <span class="center"></span>
                 <img id="arrow" src="images/arrow.png">
            </div>
        </footer> 
        </div>
      </article>

<!-- CHAT -->


      <article class="aside">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">chat</button>
        <div class="module">
          <p>3</p>
        </div>
      </article>

<!-- ALBUM -->
      <article class="col-sm-6 col-md-4">
        <div id="album" class="album module card">
          

        <nav id="album">
            <div class="top">
                <span class="center"></span>
                <img id="camera" src="images/camera.png">
                <h2 class="modualHeader">Album</h2>                
            </div>
        </nav>


<div id="album" class="content">

<div id="album" class="pictures">
    <div id="pic1" class="image">
    </div>
    <div id="pic2" class="image">
    </div>
    <div id="pic3" class="image">
    </div>

</div>

<div id="album" class="pictures">

    <div id="pic4" class="image">
    </div>
    <div id="pic5" class="image">
    </div>
    <div id="pic6" class="image">
    </div>

</div>
</div>
<footer id="nearby">
            <div class="expand">
                 <span class="center"></span>
                 <img id="arrow" src="images/arrow.png">
            </div>
        </footer> 
        </div>
      </article>


<!-- BRING -->

      <article class="col-sm-6 col-md-4">
        <div id="bring" class="module card bring">
          <nav>
   	<div class="top">                
                <img id="bring" src="images/bring.png">
                <h2 class="modualHeader">Bring</h2>                
            </div>
        </nav>

<div class="list">
        <table class="items">
            <thead>
                <tr>
                    <th class="edit" colspan="3"><span id="edit">edit</span></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


<div class="container">
    <div class="input">
        <input type="text" class="custinput" id="item-input" placeholder="Enter item here..." autofocus>
        <button type="submit" class="btn">add</button>
    </div>
</div>
        </div>
      </article>

<!-- FEEDS -->

      <article class="col-sm-6 col-md-4">
        <div id="feed" class="module card feed">
          
        <nav id="feed">
            <div class="top">
                <span class="center"></span>
                <img id="feeds" src="images/feeds.png">
                <h2 class="modualHeader">Feeds</h2>                
            </div>
        </nav>

        
        <section>
            <div class="content">
                <div class="location" id="annecy">
                    <img class="sun" src="images/sol.png">
                    <h2 class="temp">18°C</h2>
                    <h3 class="city">Annecy</h3>
                    <p class="country">France</p>
                </div>
                <div class="location" id="encinitas">
                    <img class="wind" src="images/wind.png">
                    <h2 class="temp">29°C</h2>
                    <h3 class="city">Encinitas, CA</h3>
                    <p class="country">USA</p>
                </div>
                <span class="center"></span>    
            </div>
        </section>

        <footer id="feed">
            <div class="expand">
                 <span class="center"></span>
                 <img id="arrow" src="images/arrow.png">
            </div>
        </footer>

        </div>
      </article>

<!-- BUDGET -->


      <article class="col-sm-6 col-md-4">
        <div id="budget" class="module card budget">
          <nav>
            <div class="top">
                <span class="center"></span>
                <img id="budget" src="images/budget.png">
                <h2 class="modualHeader">Budget</h2>                
            </div>
        </nav>

        
        <section>
            <div class="content">
		        <div class="remaining">
	                <h2>Remaining <strong>730€</strong> of <strong>1.300€</strong></h2>
                    <span class="center"></span>
                </div>

        
            <table>
                <tr>
                    <td class="cost">-24€</td>
                    <td class="item">Gas / 24€ each</td>
                </tr>
                <tr>
                    <td class="cost">-150€</th>
                    <td class="item">Horse Riding / 30€ each</td>
                </tr>
                <tr>
                    <td class="cost">-40€</td>
                    <td class="item">Groceries / 8€ each</td>
                </tr>
                <tr>
                    <td class="cost">-20€</td>
                    <td class="item">Pizzas / 4€ each</td>	
                </tr>
            </table>
            </div>  
        </section>

        <footer>
            <div class="expand">
                 <span class="center"></span>
                 <img id="arrow" src="images/arrow.png">
            </div>
        </footer>
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
