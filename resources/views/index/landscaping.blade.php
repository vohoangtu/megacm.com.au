@extends("index.layouts.app")

@section("content")
    <section id="lanscaping-services" class="p-lg-5">
        <div class="container-fluid">

            <div class="row py-5">

                <div class="col-md">


                    <h3 class="green">Service Schedules</h3>

                    <div class="row">
                        <div class="col-md">
                            <ul data-aos="zoom-in-up" class="aos-init aos-animate">
                                <li><img src="images/ic/ic_earthworks.png" style="max-width: 25px; margin-right: 10px;"> Earthworks</li>
                                <li><img src="images/ic/ic_artificialturf.png" style="max-width: 25px; margin-right: 10px;"> Artificial Turf</li>
                                <li><img src="images/ic/ic_gardenbeds.png" style="max-width: 25px; margin-right: 10px;"> Garden Beds &amp; Planting</li>
                                <li><img src="images/ic/ic_paving.png" style="max-width: 25px; margin-right: 10px;"> Paving and Tiling</li>
                                <li><img src="images/ic/ic_retainingwalls.png" style="max-width: 25px; margin-right: 10px;"> Retaining Walls</li>
                                <li><img src="images/ic/ic_fencing.png" style="max-width: 25px; margin-right: 10px;"> Fencing</li>
                                <li><img src="images/ic/ic_concreting.png" style="max-width: 25px; margin-right: 10px;"> Concreting</li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <ul data-aos="zoom-in-down" class="aos-init aos-animate">
                                <li><img src="images/ic/ic_decking.png" style="max-width: 25px; margin-right: 10px;"> Decking and Pergolas</li>
                                <li><img src="images/ic/ic_realturf.png" style="max-width: 25px; margin-right: 10px;"> Real Turf</li>
                                <li><img src="images/ic/ic_irrigation.png" style="max-width: 25px; margin-right: 10px;"> Irrigation</li>
                                <li><img src="images/ic/ic_maintenance.png" style="max-width: 25px; margin-right: 10px;"> Commercial Garden Maintenance</li>
                                <li><img src="images/ic/ic_residential.png" style="max-width: 25px; margin-right: 10px;"> Residential Renovations</li>
                                <li><img src="images/ic/ic_playground.png" style="max-width: 25px; margin-right: 10px;"> Playground &amp; Childcare Landscaping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md p-5 bg-dkgreen">
                    <h5> Whether it is a rental property that requires low maintenance landscaping; ‘ready-for-sale’; turn-key solution for project homes or an artistic design for an opulent home, we construct and deliver beautiful landscapes at a competitive rate. </h5>
                    <h5 class="yellow mt-5">As licensed builders and proud members of housing and industry associations, we uphold the highest standards of workmanship and ethics ensuring 100% client satisfaction.</h5>
                </div>





            </div>



        </div>
    </section>
    <!-- gallery -->
    <div class="container-fluid p-0">
        <section class="px-0 py-5 bg-dkgray">

            <!--  ================== MEDIA BOXES ================== -->
            <div class="p-5">
                <div class="filters-container">



                    <ul class="custom-filter" id="filter2">
                        <li> <a class="selected" href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".artturf">Artificial Turf</a></li>
                        <li><a href="#" data-filter=".concrete">Concreting</a></li>
                        <li><a href="#" data-filter=".deck">Decking</a></li>
                        <li><a href="#" data-filter=".fence">Fencing</a></li>
                        <li><a href="#" data-filter=".paving">Paving & Tiling</a></li>
                        <li><a href="#" data-filter=".planting">Planting</a></li>
                        <li><a href="#" data-filter=".realturf">Real Turf</a></li>
                        <li><a href="#" data-filter=".walls">Retaining Walls</a></li>
                        <li><a href="#" data-filter=".garden">Garden Maintenance</a></li>
                        <li><a href="#" data-filter=".reno">Residential Renovations</a></li>
                        <li><a href="#" data-filter=".play">Playground & Childcare Landscaping</a></li>

                    </ul>

                </div>
            </div>

            <div id="grid2">

                <!-- -------------------------- art 01 -------------------------- -->
                <div class="media-box artturf">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-01-big.jpg">
                            <div class="media-box-title">Artificial Turf</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- conc 01 -------------------------- -->
                <div class="media-box concrete">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-01-big.jpg">
                            <div class="media-box-title">Concreting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- deck 01 -------------------------- -->
                <div class="media-box deck" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/deck/deck-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/deck/deck-01-big.jpg">
                            <div class="media-box-title">Decking</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- fence 01 -------------------------- -->
                <div class="media-box fence" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/fence/fence-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/fence/fence-01-big.jpg">
                            <div class="media-box-title">Fencing</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- paving 01 -------------------------- -->
                <div class="media-box paving">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/paving/paving-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-01-big.jpg">
                            <div class="media-box-title">Paving and Tiling</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- planting 01 -------------------------- -->
                <div class="media-box planting">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/planting/planting-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/planting/planting-01-big.jpg">
                            <div class="media-box-title">Planting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- realturf 01 -------------------------- -->
                <div class="media-box realturf">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-01-big.jpg">
                            <div class="media-box-title">Real Turf</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- walls 01 -------------------------- -->
                <div class="media-box walls">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/walls/walls-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/walls/walls-01-big.jpg">
                            <div class="media-box-title">Retaining Walls</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- art 02 -------------------------- -->
                <div class="media-box artturf">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-02-big.jpg">
                            <div class="media-box-title">Artificial Turf</div>

                        </div>
                    </div>
                </div>


                <!-- -------------------------- conc 02 -------------------------- -->
                <div class="media-box concrete">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-02-big.jpg">
                            <div class="media-box-title">Concreting</div>

                        </div>
                    </div>
                </div>
                <!-- -------------------------- deck 02 -------------------------- -->
                <div class="media-box deck">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/deck/deck-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/deck/deck-02-big.jpg">
                            <div class="media-box-title">Decking</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- play 01 -------------------------- -->
                <div class="media-box play" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/play/play-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-01-big.jpg">
                            <div class="media-box-title">Playground & Childcare Landscaping</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- fence 02 -------------------------- -->
                <div class="media-box fence">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/fence/fence-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/fence/fence-02-big.jpg">
                            <div class="media-box-title">Fencing</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- paving 02 -------------------------- -->
                <div class="media-box paving" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/paving/paving-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-02-big.jpg">
                            <div class="media-box-title">Paving and Tiling</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- realturf 02 -------------------------- -->
                <div class="media-box realturf" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-05-big.jpg">
                            <div class="media-box-title">Real Turf</div>

                        </div>
                    </div>
                </div>


                <!-- -------------------------- walls 02 -------------------------- -->
                <div class="media-box walls">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/walls/walls-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/walls/walls-02-big.jpg">
                            <div class="media-box-title">Retaining Walls</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- art 03 -------------------------- -->
                <div class="media-box artturf">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-03-big.jpg">
                            <div class="media-box-title">Artificial Turf</div>

                        </div>
                    </div>
                </div>
                <!-- -------------------------- deck 03 -------------------------- -->
                <div class="media-box deck">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/deck/deck-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/deck/deck-03-big.jpg">
                            <div class="media-box-title">Decking</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- realturf 03 -------------------------- -->
                <div class="media-box realturf" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-03-big.jpg">
                            <div class="media-box-title">Real Turf</div>

                        </div>
                    </div>
                </div>


                <!-- -------------------------- gm -------------------------- -->
                <div class="media-box garden" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/gm/gm-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/gm/gm-01-big.jpg">
                            <div class="media-box-title">Garden Maintenance</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- concrete -------------------------- -->
                <div class="media-box concrete" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-04-big.jpg">
                            <div class="media-box-title">Concreting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- paving -------------------------- -->
                <div class="media-box paving" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/paving/paving-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-04-big.jpg">
                            <div class="media-box-title">Paving and Tiling</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- fence -------------------------- -->
                <div class="media-box fence" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/fence/fence-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/fence/fence-03-big.jpg">
                            <div class="media-box-title">Fencing</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- planting -------------------------- -->
                <div class="media-box planting" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/planting/planting-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/planting/planting-03-big.jpg">
                            <div class="media-box-title">Planting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- realturf -------------------------- -->
                <div class="media-box realturf" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-04-big.jpg">
                            <div class="media-box-title">Real Turf</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- walls -------------------------- -->
                <div class="media-box walls" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/walls/walls-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/walls/walls-03-big.jpg">
                            <div class="media-box-title">Retaining Walls</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- reno -------------------------- -->
                <div class="media-box reno" data-columns="2" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/reno/reno-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/reno/reno-01-big.jpg">
                            <div class="media-box-title">Residential Rennovation</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- gm -------------------------- -->
                <div class="media-box garden"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/gm/gm-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/gm/gm-02-big.jpg">
                            <div class="media-box-title">Garden Maintenance</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- artturf -------------------------- -->
                <div class="media-box artturf" >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/etc/etc-01.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/etc/etc-01-big.jpg">
                            <div class="media-box-title">Artificial Turf</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- deck -------------------------- -->
                <div class="media-box deck"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/deck/deck-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/deck/deck-05-big.jpg">
                            <div class="media-box-title">Decking</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- fence -------------------------- -->
                <div class="media-box fence"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/fence/fence-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/fence/fence-04.jpg">
                            <div class="media-box-title">Fencing</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- paving -------------------------- -->
                <div class="media-box paving"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/paving/paving-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-05-big.jpg">
                            <div class="media-box-title">Paving and Tiling</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- planting -------------------------- -->
                <div class="media-box planting"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/planting/planting-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/planting/planting-04-big.jpg">
                            <div class="media-box-title">Planting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- realturf -------------------------- -->
                <div class="media-box realturf"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-06.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/realturf/realturf-06-big.jpg">
                            <div class="media-box-title">Real Turf</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- concrete -------------------------- -->
                <div class="media-box concrete"  >
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/concreting/concrete-05-big.jpg">
                            <div class="media-box-title">Concreting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- reno -------------------------- -->
                <div class="media-box reno" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/reno/reno-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/reno/reno-02-big.jpg">
                            <div class="media-box-title">Residential Renovation</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- reno -------------------------- -->
                <div class="media-box reno">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/reno/reno-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/reno/reno-03-big.jpg">
                            <div class="media-box-title">Residential Renovation</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- walls -------------------------- -->
                <div class="media-box walls">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/walls/walls-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/walls/walls-04-big.jpg">
                            <div class="media-box-title">Retaining Walls</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- paving -------------------------- -->
                <div class="media-box paving">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/paving/paving-06.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-06-big.jpg">
                            <div class="media-box-title">Paving and Tiling</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- walls -------------------------- -->
                <div class="media-box walls">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/walls/walls-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/walls/walls-05-big.jpg">
                            <div class="media-box-title">Retaining Walls</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- art 07 -------------------------- -->
                <div class="media-box artturf">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-07.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/artturf/artturf-07-big.jpg">
                            <div class="media-box-title">Artificial Turf</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- deck 06 -------------------------- -->
                <div class="media-box deck">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/deck/deck-06.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/deck/deck-06-big.jpg">
                            <div class="media-box-title">Decking</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- planting 05 -------------------------- -->
                <div class="media-box planting">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/planting/planting-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/planting/planting-05-big.jpg">
                            <div class="media-box-title">Planting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- planting 06 -------------------------- -->
                <div class="media-box planting">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/planting/planting-06.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/planting/planting-06-big.jpg">
                            <div class="media-box-title">Planting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- planting 07 -------------------------- -->
                <div class="media-box planting">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/planting/planting-07.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/planting/planting-07-big.jpg">
                            <div class="media-box-title">Planting</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- paving 07 -------------------------- -->
                <div class="media-box paving" data-columns="2">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/paving/paving-07.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-07-big.jpg">
                            <div class="media-box-title">Paving and Tiling</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- play 02 -------------------------- -->
                <div class="media-box play">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/play/play-02.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-02-big.jpg">
                            <div class="media-box-title">Playground & Childcare Landscaping</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- play 03 -------------------------- -->
                <div class="media-box play">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/play/play-03.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-03-big.jpg">
                            <div class="media-box-title">Playground & Childcare Landscaping</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- play 04 -------------------------- -->
                <div class="media-box play">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/play/play-04.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-04-big.jpg">
                            <div class="media-box-title">Playground & Childcare Landscaping</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- play 05 -------------------------- -->
                <div class="media-box play">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/play/play-05.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-05-big.jpg">
                            <div class="media-box-title">Playground & Childcare Landscaping</div>

                        </div>
                    </div>
                </div>

                <!-- -------------------------- play 06 -------------------------- -->
                <div class="media-box play">
                    <div class="media-box-image mb-open-popup" data-type="inline">
                        <div data-width="240" data-height="160" data-thumbnail="http://www.jjjlandscaping.com.au/gallery/play/play-06.jpg" ></div>

                        <div class="thumbnail-overlay mb-open-popup happy-blue" data-src="http://www.jjjlandscaping.com.au/gallery/paving/paving-06-big.jpg">
                            <div class="media-box-title">Playground & Childcare Landscaping</div>

                        </div>
                    </div>
                </div>

            </div> <!-- #grid -->

            <!--  ================== END MEDIA BOXES ================== -->

        </section>
    </div>


@endsection

@push("home.footer.js")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset("plugins/jquery.isotope.min.js")}}"></script>
    <script src="{{asset("plugins/aos.js")}}"></script>
    <script src="{{asset("plugins/jquery.easing.js")}}"></script>
    <script src="{{asset("plugins/waypoints.min.js")}}"></script>
    <script src="{{asset("plugins/jquery.transit.min.js")}}"></script>
    <script src="{{asset("plugins/jquery.imagesLoaded.min.js")}}"></script>
    <script src="{{asset("plugins/modernizr.custom.min.js")}}"></script>


    <script src="{{asset("plugins/jquery.magnific-popup.min.js")}}"></script>

    <script src="{{asset("plugins/jquery.mediaBoxes.js")}}"></script>

    <script>


        $('#grid2').mediaBoxes({
            filterContainer: '#filter2',
            search: '#search2',
            columns: 5,
            overlayEffect: 'direction-aware',
            boxesToLoadStart: 10,
            boxesToLoad: 8,
            horizontalSpaceBetweenBoxes: 18,
            verticalSpaceBetweenBoxes: 18,
        });



    </script>
    <script>AOS.init();</script>
@endpush
@push("home.head.css")
    @foreach([
    "plugins/animate.css",
    "plugins/aos.css",
    "plugins/magnific-popup.css",
    "plugins/mediaBoxes.css",

] as $css)
        <link rel="stylesheet" href="{{asset($css)}}">
    @endforeach

    <style type="text/css">
        #lanscaping-services{
            background: #038732;
            color: #fff;
        }
        #lanscaping-services ul{
            list-style-type: none;
        }
        #lanscaping-services ul{
            padding: 0;
            padding-left: 2.2rem;
        }
        #lanscaping-services ul li{
            font-size: 15px;
            margin-bottom: 15px;
        }
        #lanscaping-services .bg-dkgreen{
            background: #efefef;
            color: #333;
            font-size: 14px;
        }
        #lanscaping-services img{
            filter: brightness(0) invert(1);
        }
        /* change the style of the first grid */
        #grid .thumbnail-overlay{
            background: #fff;
            padding: 0 15px;
        }
        #grid .thumbnail-overlay>div.aligment>div.aligment {
            text-align: left; /* FOR HORIZONTAL ALIGN */
        }
        .media-boxes-drop-down{
            float: right;
            margin-left: 8px;
        }


        /* change the style of the second grid */
        .white-popup .media-box-view-image a,
        #grid2 .media-box-date, .white-popup .media-box-date{
            color: #fff;
        }
        .white-popup {
            position: relative;
            background: #FFF;
            padding: 20px;
            width: auto;
            max-width: 500px;
            margin: 20px auto;
        }
        #grid2 .thumbnail-overlay{
            padding: 10px 5px; color: #fff;

        }
        #search2{
            float: right;
        }
        #filter2 li a.selected {
            background: #28ac86;
        }
        #grid2 .thumbnail-overlay>div.aligment>div.aligment {
            text-align: left; /* FOR HORIZONTAL ALIGN */
        }

        .media-boxes-no-more-entries{
            display: none;
        }

        /* style of the footer of each media box */
        .media-box-footer{
            padding: 15px 20px;
            font-size: 11px;
            color: #777;
        }
        .media-box-title{color: #fff}

        /* make your own style of the filter */
        .filters-container{
            margin-bottom: 40px;
        }
        .custom-filter{
            padding: 10px;
            text-align: center;
        }
        .custom-filter li{
            list-style: none;
            display: inline-block;
            margin: 0 10px;
            font-size: 12px;
        }
        .custom-filter li a{
            font-size: 16px;
            text-decoration: none;
        }
        .custom-filter li a:hover{
            color: #4FB222;
        }
        .custom-filter li a.selected{
            color: #4FB222 !important; background: transparent !important;
        }

        .media-boxes-search{background: transparent; border: 1px solid #999}


        /* Remove box shadow and border-radius from the media boxes */
        .media-box-container{
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;

            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -o-box-shadow: none;
            -ms-box-shadow: none;
            box-shadow: none;
        }




        /* The different colors */

        .happy-blue{
            background: rgba(33, 187, 180, .8);
        }

        .red{
            background: rgba(229, 59, 44, .8);
        }
        .dark-blue{
            background: rgba(59, 90, 111, .8);
        }
        .turquoise{
            background: rgba(0, 167, 142, .8);
        }
        .blue{
            background: rgba(65, 131, 196, .8);
        }
        .light-gray{
            background: rgba(153, 153, 153, .8);
        }
        .purple{
            background: rgba(141, 108, 171, .8);
        }
        .pink{
            background: rgba(245, 117, 108, .8);
        }
        .palid-green{
            background: rgba(132, 175, 162, .8);
        }


    </style>
@endpush
