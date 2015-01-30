<div id="content-itinerary" class="module itinerary modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">   
           <nav class="hidden-xs modal-header">
                <div class="top hidden-xs">
                    <span class="center"></span>
                    <img id="paperAirplane" src="images/paperAirplane.png">
                    <h2 class="modualHeader">Itinerary</h2>                
                </div>
            </nav>
            <div class="modal-body">
                <section class="col-xs-12 col-sm-8">
                    <div class="content">
                        <div class='heads'>
                        <ul class="profilePictures list-unstyled">
                            <li class="head excluded"><img class="avatar" src="images/guy1.png"></li>
                            <li class="head"><img class="avatar" src="images/guy2.png"></li>
                            <li class="head"><img class="avatar" src="images/guy3.png"></li>
                            <li class="head"><img class="avatar" src="images/guy4.png"></li>
                            <li class="head excluded"><img class="avatar" src="images/guy5.png"></li>
                            <span class="streach"></span>
                        </ul>
                    </div>
                    <div class="schedule clearfix">
                        <div class="current-date clearfix" data-toggle="modal" data-target="#content-itinerary">
                            <div class="timeline pull-left col-xs-1">
                                <i class="icon ico-timeline-ball"></i>
                            <div class="line"></div>
                        </div>
                        <div class="itinerarys col-xs-11">
                            <div class="cita cita1">
                                <span class="col-xs-3"><i class="icon ico-on-time hidden"></i><strong>10:30</strong></span>
                                <div class="action col-xs-9">
                                    <p>Pick up Mario and Ana</p>
                                    <div class="location">
                                        <img class="locationIcon" src="images/location-blue.png">
                                        <h2 class="barcelona"><strong>Montenegro</strong></h2>
                                    </div> 
                                </div>
                            </div>
                            <div class="cita cita2 hidden">
                                <span class="col-xs-3"><i class="icon ico-on-time hidden"></i><strong>11:30</strong></span>
                                <div class="action col-xs-9">
                                    <p>Groceries and cleaning</p>
                                    <div class="location">
                                        <img class="locationIcon" src="images/location-blue.png">
                                        <h2 class="barcelona"><strong>Mercadona</strong></h2>
                                    </div> 
                                </div>
                            </div>  
                        </div>
                    </div>  
                    <div class="buttons">
                        <ul class="optionButtons list-unstyled">
                            <li id="on-time" class="what">ON TIME</li>
                            <li id="delay" class="what"><a>DELAY</a></li>
                            <li id="advance" class="what">ADVANCE</li>
                            <li id="delete" class="what">DELETE</li>    
                        </ul>
                    </div>
                </section>
                <div id="delay-options">
                    <p>Ola k ase?</p>
                </div>
                <div class="map hidden-xs col-sm-6">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default">Save changes</button>
            </div>
        </div>
    </div>
</div>