<?php include 'header.php';?>
<main>
    <section class="carousel slide bg-lg-primary mb-3" data-ride="carousel" data-interval="0" id="cover-carousel"> <!--CAROUSEL COVER SLIDE -->
        <div class="carousel-inner">
            <img class="d-block w-100 d-lg-none pt-3" src="images/index-cover-carousel.jpg">
            <div class="carousel-item active bg-primary">
                <div class="container w-md-50">
                    <h3 class="mb-3 pt-3">Mit CONDA Österreich investieren Sie grenzenlos, in Unternehmen mit Persönlichkeit.</h3>
                    <p class="mb-3">Ab 100 Euro unterstützen Sie Unternehmen durch Ihre Investition und profitieren langfristig von deren Erfolg.</p>
                    <button class="btn btn-danger btn-lg border border-danger w-lg-100 mb-3 rounded-0 px-4 py-3">
                        Für Unternehmer
                    </button>
                    <button class="btn btn-success btn-lg border border-success w-lg-100 ml-3 mb-3 rounded-0 px-4 py-3">
                        Für Investoren
                    </button>
                </div>
            </div>
        </div>
    </section> <!-- END CAROUSEL COVER SLIDE-->

    <div class="cta container"> <!-- CALL-TO-ACTION SECTION-->
        <section class="cta-wrapper d-flex flex-wrap justify-content-around py-4">
            <a href="#" class="d-block mx-3">
                <div class="cta-single text-center">
                    <div class="cta-icon d-inline-block py-4 px-4 bg-primary rounded-circle mb-2">
                        <i class="far fa-envelope fa-fw fa-4x text-white"></i>
                    </div>
                    <p>Newslettter Subscription</p>
                </div>   
            </a>
            <a href="#" class="d-block mx-3">
                <div class="cta-single text-center">
                    <div class="cta-icon d-inline-block py-4 px-4 bg-primary rounded-circle mb-2">
                        <i class="fas fa-newspaper fa-fw fa-4x text-white"></i>
                    </div>
                    <p>Your investment Guide</p>
                </div>
            </a>
            <a href="#" class="d-block mx-3">
                <div class="cta-single text-center">
                    <div class="cta-icon d-inline-block py-4 px-4 bg-primary rounded-circle mb-2">
                        <i class="fas fa-warehouse fa-fw fa-4x text-white"></i>
                    </div>
                    <p>Investieren In Immobilienprojekte</p>
                </div>
            </a>
            <a href="#" class="d-block mx-3">
                <div class="cta-single text-center">
                    <div class="cta-icon d-inline-block py-4 px-4 bg-warning rounded-circle mb-2">
                        <i class="fab fa-connectdevelop fa-fw fa-4x text-white"></i>
                    </div>
                    <p>Join our ICO!</p>
                </div>
            </a>
        </section>
    </div> <!-- END CALL-TO-ACTION SECTION-->

    <section class="camapigns-news container"> <!--START CAMPAIGNS AND NEWS SECTION -->
        <div class="row mb-5">
            <div class="col-12 col-lg-8">
                <h2 class="text-secondary mt-3">Campaigns</h2>
                <hr>
                <div class="row mb-5">
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/armywings/armywings.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3">Starting in<span class="h4"> 1 </span> month</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">Army wings</h4>
                                </div> <!--END-->
                                <!-- SHORT SUMMARY - EXCERT -->
                                <p class="campaign-excerpt card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dignissimos a vitae recusandae amet itaque perferendis
                                    architecto non aliquam maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit aspernatur possimus
                                    neque eveniet natus, illo debitis dolore dolorem sequi aperiam fuga? Voluptatum velit, repudiandae consequatur
                                    doloremque error culpa quasi itaque?</p> <!--END-->
                                <hr>
                                
                                <div class="campaign-invest-wrapper text-dark d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->   
                                    <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center"><!-- SCALE -->
                                        <p class="investment-total-amount font-weight-bold m-0 mt-3">220.500&euro;</p>
                                        <p class="investors-number  text-muted">22 Investors</p>
                                        <p class="investment-completed">18%</p>
                                    </div> <!--END-->  
                                    <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                                        <p class="text-muted"><span class="investment-min d-block h4 m-0 text-dark">75.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                                        <p class="text-muted"><span class="investment-max d-block h4 m-0 text-dark">700.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                                    </div> <!--END-->
                                </div>       
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->
                                <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-muted"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                                    <div class="info-cell mx-1 px-2 py-2 d-flex flex-row">
                                        <i class="far fa-star text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Special project"></i>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-calendar-alt text-muted fa-1x mb-2" data-toggle="tooltip" data-placement="top" title="Contract term"></i>
                                        <span class="d-block text-muted font-weight-bold">2 years</span>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-chart-line text-muted fa-1x mb-2 align-self-center" data-toggle="tooltip" data-placement="top" title="Base rate"></i>
                                        <span class="d-block text-muted font-weight-bold">4.5 %</span>
                                    </div>
                                </div> <!--END-->         
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN-->
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/darts/dartcover.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3">Private placement</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">Darts heroes (CI/VMn/LW/PP)</h4>
                                </div> <!--END-->
                                <!-- SHORT SUMMARY - EXCERT -->
                                <p class="campaign-excerpt card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dignissimos a vitae recusandae amet itaque perferendis
                                    architecto non aliquam maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit aspernatur possimus
                                    neque eveniet natus, illo debitis dolore dolorem sequi aperiam fuga? Voluptatum velit, repudiandae consequatur
                                    doloremque error culpa quasi itaque?</p> <!--END-->
                                <hr>
                                
                                <div class="campaign-invest-wrapper text-dark d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->    
                                    <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                                        <p class="text-muted"><span class="investment-min d-block h4 m-0 text-dark text-center">450.000<sup class="currency">&euro;</sup></span> Capital Investment</p>
                                    </div> <!--END-->
                                </div>       
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->       
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN-->
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/campaigns/m-office.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3"><span class="h4"> 3 </span> months remaining</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">M office ICO</h4>
                                </div> <!--END-->
                                <!-- SHORT SUMMARY - EXCERT -->
                                <p class="campaign-excerpt card-text mt-3">Phasellus vehicula risus nec lacus facilisis, eu condimentum turpis tincidunt. Ut ullamcorper est ut bibendum volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin ut consectetur felis. Aenean facilisis metus non fermentum ultricies. Donec in aliquam lacus, eu porttitor tortor. Maecenas facilisis pharetra elementum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> <!--END-->
                                <hr>
                                <div class="campaign-invest-wrapper text-dark d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->   
                                    <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center"><!-- SCALE -->
                                        <p class="investment-type font-weight-bold m-0 mt-3">AHT</p>
                                        <p class="investment-total-amount font-weight-bold m-0">1.00</p>
                                        <p class="investors-number  text-muted">5 Participants</p>
                                        <p class="investment-completed">0%</p>
                                    </div> <!--END-->  
                                    <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                                        <span class="d-block text-muted mb-1">HERO token</span>
                                        <p class="text-muted"><span class="investment-min d-block h4 m-0 text-dark">75.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                                        <span class="d-block text-muted mb-1">HERO token</span>
                                        <p class="text-muted"><span class="investment-max d-block h4 m-0 text-dark">700.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                                    </div> <!--END-->
                                </div>       
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->
                                <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-muted"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                                    <div class="info-cell mx-1 px-2 py-2 d-flex flex-row">
                                        <i class="far fa-star text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Special project"></i>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <span class="d-block text-muted font-weight-bold">Value in $</span>
                                        <span class="d-block text-dark font-weight-bold">0.00</span>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <span class="d-block text-muted font-weight-bold">Value in &euro;</span>
                                        <span class="d-block text-dark font-weight-bold">0.00</span>
                                    </div>
                                </div> <!--END-->         
                                <div class="campaign-invest-info py-1 px-3 border-bottom border-muted">
                                    <div class="row">
                                        <div class="col-6 my-2 d-flex justify-content-around border-right border-muted">
                                            <p class="font-weight-bold d-inline-block m-0 d-flex justify-content-center">1 HERO token =
                                                <img src="images/campaigns/eth3.svg" class="pl-1">
                                            </p>
                                            <img src="" alt="">
                                        </div>
                                        <div class="col-6 my-2 d-flex justify-content-around">
                                            <p class="font-weight-bold d-inline-block m-0">0.5</p>
                                            <p class="font-weight-bold d-inline-block m-0">
                                                <span class="text-muted">ETH</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-success text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN-->
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/campaigns/intechor.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3"><span class="h4"> 1 </span> month remaining</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/che.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">Intechor travel</h4>
                                </div> <!--END-->
                                <!-- SHORT SUMMARY - EXCERT -->
                                <p class="campaign-excerpt card-text mt-3">Etiam congue nisl et libero semper placerat. Integer tincidunt ac est id facilisis. Vestibulum suscipit dictum augue eu tempus. Donec dignissim luctus pulvinar. Integer at quam dapibus, scelerisque justo id, ultrices massa. Suspendisse lacinia dui a viverra aliquet. Suspendisse potenti. Nam nec dolor sodales, luctus massa ac, varius est. Aenean mattis, orci non ultrices porta, nulla nulla feugiat neque, vel interdum mi mi sed purus. Mauris iaculis lectus dui, a dignissim odio ornare non. Aenean scelerisque magna a turpis efficitur blandit. Phasellus et ultricies diam. Sed vitae accumsan turpis. Cras euismod, diam nec dapibus dapibus, lectus lectus ultricies quam, id varius dolor mi vel lectus. </p> <!--END-->
                                <hr>
                                <div class="campaign-invest-wrapper text-dark d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->   
                                    <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center"><!-- SCALE -->
                                        <p class="investment-total-amount font-weight-bold m-0 mt-3">311.500&euro;</p>
                                        <p class="investors-number  text-muted">7 Investors</p>
                                        <p class="investment-completed">565%</p>
                                    </div> <!--END-->  
                                    <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                                        <p class="text-muted"><span class="investment-min d-block h4 m-0 text-dark">55.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                                        <p class="text-muted"><span class="investment-max d-block h4 m-0 text-dark">550.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                                    </div> <!--END-->
                                </div>       
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->
                                <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-muted"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                                    <div class="info-cell mx-1 px-2 py-2 d-flex flex-row">
                                        <i class="far fa-star text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Special project"></i>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-calendar-alt text-muted fa-1x mb-2" data-toggle="tooltip" data-placement="top" title="Contract term"></i>
                                        <span class="d-block text-muted font-weight-bold">4 years</span>
                                    </div>
                                </div> <!--END-->         
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN-->
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/campaigns/makit.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-secondary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3">Investment finished</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">Makit - ein regionales Produkt</h4>
                                </div> <!--END-->
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->
                                <div class="campaign-failed p-2 d-flex flex-row justify-content-around border-bottom border-muted"><!--THIS SECTION ONLY IF CAMPAIGN FAILS-->
                                    <div class="investment-amounts align-self-center pt-3">
                                        <p class="text-muted">
                                            <span class="investment-min d-block h3 m-0 text-dark">
                                                0<sup class="currency">&euro;</sup>
                                            </span> Supports
                                        </p>
                                        <p class="text-muted">
                                            <span class="investment-max h4 m-0 text-dark">0</span> Supporter
                                        </p>
                                    </div>
                                    <div class="completed-wrapper my-auto d-inline-block rounded-circle bg-info p-3 text-white text-center">
                                        <p class="m-0 h3">0%</p>
                                        <p class="m-0">completed</p>
                                    </div>
                                </div> <!--END-->
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN-->
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/campaigns/oceanic-travel.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3">Successfully financed</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">Oceanic travel</h4>
                                </div> <!--END-->
                                <!-- SHORT SUMMARY - EXCERT -->
                                <p class="campaign-excerpt card-text mt-3">Roll on, deep and dark blue ocean, roll. Ten thousand fleets sweep over thee in vain. Man marks the earth with ruin, but his control stops with the shore. Repudiandae consequatur
                                    doloremque error culpa quasi itaque?</p> <!--END-->     
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->
                                <div class="campaign-failed p-2 d-flex flex-row justify-content-around border-bottom border-muted"><!--THIS SECTION ONLY IF CAMPAIGN FAILS-->
                                    <div class="investment-amounts align-self-center pt-3">
                                        <p class="text-muted">
                                            <span class="investment-min d-block h3 m-0 text-dark">
                                                63.000<sup class="currency">&euro;</sup>
                                            </span> Supported
                                        </p>
                                        <p class="text-muted">
                                            <span class="investment-max h4 m-0 text-dark">10</span> Supporters
                                        </p>
                                    </div>
                                    <div class="completed-wrapper my-auto d-inline-block rounded-circle bg-info p-3 text-white text-center">
                                        <p class="m-0 h3">21%</p>
                                        <p class="m-0">supported</p>
                                    </div>
                                </div> <!--END-->
                                <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-muted"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-calendar-alt text-muted fa-1x mb-2" data-toggle="tooltip" data-placement="top" title="Contract term"></i>
                                        <span class="d-block text-muted font-weight-bold">4 years</span>
                                    </div>
                                    <div class="info-cell mx-1 px-2 py-2 text-center">
                                        <i class="fas fa-chart-line text-muted mb-2 fa-1x align-self-center" data-toggle="tooltip" data-placement="top" title="Base rate"></i>
                                        <span class="d-block text-muted font-weight-bold">4.5 %</span>
                                    </div>
                                </div> <!--END-->         
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN-->
                    <!--CAMPAIGN-->
                    <div class="col-12 col-md-6">
                        <div class="campaign card mb-4">  
                            <a href="single-campaign.php"><!--CAMPAIGN IMAGE AND STATUS-->
                                <img src="images/campaigns/medix.jpg" class="card-img-top campaign-image">
                                <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                                    <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3"><span class="h4"> 1 </span> months remaining</p>
                                    <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                                </div>
                            </a> <!--END-->                
                            <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                                <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                                    <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                                    <h4 class="campaign-title card-title mb-0">Medix (CF)</h4>
                                </div> <!--END-->
                                <!-- SHORT SUMMARY - EXCERT -->
                                <p class="campaign-excerpt card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dignissimos a vitae recusandae amet itaque perferendis
                                    architecto non aliquam maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit aspernatur possimus
                                    neque eveniet natus, illo debitis dolore dolorem sequi aperiam fuga? Voluptatum velit, repudiandae consequatur
                                    doloremque error culpa quasi itaque?</p> <!--END-->
                                <hr>
                                
                                <div class="campaign-invest-wrapper text-dark d-flex flex-column flex-sm-row justify-content-around"><!-- CAMPAIGN KNOB(SCALE) WITH CURRENT INVESTMENT STATUS AND BASIC INFO-->   
                                    <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center"><!-- SCALE -->
                                        <p class="investment-total-amount font-weight-bold m-0 mt-3">76.500&euro;</p>
                                        <p class="investors-number  text-muted">121 Investors</p>
                                        <p class="investment-completed">225%</p>
                                    </div> <!--END-->  
                                    <div class="investment-amounts align-self-center pt-3"><!-- BASIC INFO ABOUT INVESTMENTS -->
                                        <p class="text-muted"><span class="investment-min d-block h4 m-0 text-dark">35.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                                        <p class="text-muted"><span class="investment-max d-block h4 m-0 text-dark">180.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                                    </div> <!--END-->
                                </div>       
                            </div>  
                            <div class="card-footer p-0"><!-- CAMPAIGN ADDITIONAL INFO, CELLS WITH ICONS AND BUTTON FOR MORE INFO -->        
                                <div class="footer-button py-4 text-center"><!--BUTTON FOR MORE INFO -->
                                    <a class="btn btn-success text-uppercase my-1 py-2 px-4" href="single-campaign.php" role="button">View details</a>
                                </div> <!--END-->
                            </div>
                        </div>
                    </div> <!--END CAMPAIGN--> 
                </div>
                <div class="d-flex">
                    <a class="btn btn-success py-2 px-3 mx-auto" role="button" href="campaigns.php">Load More</a>
                </div>
            </div>
            
            <div class="col-12 col-lg-4">
                <h2 class="text-secondary mt-3">News</h2>
                <hr>
                <div class="news-single card p-2 mb-4">
                    <a href="single-news.php" class="news-image d-block">
                        <img src="images/news/house.jpg" class="card-img-top img-fluid">
                    </a>
                    <div class="card-body p-0 text-dark">
                        <a href="">
                            <h4 class="news-heading card-title mt-3 text-dark">Das halschte meine Deutsche! Hilfe!</h4>
                        </a>
                        <div class="date-author d-flex align-items-baseline">
                            <i class="far fa-clock mr-1 text-muted"></i>
                            <p class="card-subtitle text-muted">September 11, 2017 By
                                <span>
                                    <a href="" class="text-success">admin </a>
                                </span> in
                                <span>
                                    <a href="" class="text-success"> Uncategorized</a>
                                </span>
                            </p>
                        </div>
                        <p class="news-summary card-text text-dark mt-3">Maecenas imperdiet arcu id urna fringilla suscipit. Nullam non luctus mauris. Aliquam at orci ut metus congue dapibus.
                            Nullam non turpis in purus porttitor gravida ac nec ligula. Sed at nibh turpis. Etiam porttitor magna vitae augue
                            ullamcorper, ultricies porta quam finibus. Proin diam metus, bibendum eu felis in, accumsan cursus dui. Fusce
                            condimentum feugiat</p>
                        <a href="" class="d-inline-block text-success mb-3">Read more</a>
                    </div>
                </div>
                <div class="news-single card p-2 mb-4">
                    <div class="card-body p-0 text-dark">
                        <a href="single-news.php">
                            <h4 class="news-heading card-title mt-3 text-dark">Was ist das meine gotte!?</h4>
                        </a>
                        <div class="date-author d-flex align-items-baseline">
                            <i class="far fa-clock mr-1 text-muted"></i>
                            <p class="card-subtitle text-muted">December 11, 2017 By
                                <span>
                                    <a href="" class="text-success">admin </a>
                                </span> in
                                <span>
                                    <a href="" class="text-success"> Uncategorized</a>
                                </span>
                            </p>
                        </div>
                        <p class="news-summary card-text text-dark mt-3">Maecenas imperdiet arcu id urna fringilla suscipit. Nullam non luctus mauris. Aliquam at orci ut metus congue dapibus.
                            Nullam non turpis in purus porttitor gravida ac nec ligula. Sed at nibh turpis. Etiam porttitor magna vitae augue
                            ullamcorper, ultricies porta quam finibus. Proin diam metus, bibendum eu felis in, accumsan cursus dui. Fusce
                            condimentum feugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, incidunt? </p>
                        <a href="" class="d-inline-block text-success mb-3">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- END CAMPAIGNS AND NEWS SECTION -->

    <section class="discover-projects mb-3"> <!--  DISCOVER-PROJECTS SECTION -->
        <div class="main-part py-5 px-auto text-center border-bottom border-top border-secondary">
            <div class="container">
                <h2 class="mb-4">Sie suchen interessante Investitionsmöglichkeiten?</h2>
                <p class="lead mb-5">Entdecken Sie gleich alle Crowdinvesting-Projekte!</p>
                <button class="btn btn-success py-3 px-3 text-uppercase">Projekte entdecken</button>
            </div>
        </div>
        <div class="current-status border-bottom border-secondary">
            <div class="container">
                <div class="status-signle-wrapper d-flex flex-wrap flex-columnn flex-sm-column flex-md-row  justify-content-around justify-content-sm-around justify-content-xl-between">
                    <div class="status-single text-center py-5 px-5">
                        <p class="input h2 mb-1">19,14 Mio.$</p>
                        <p class="kapital m-0">investierts Kapital</p>
                    </div>
                    <div class="status-single text-center py-5 px-5">
                        <p class="input h2 mb-1">87</p>
                        <p class="total-projects m-0">erfolgreich finanzierte Projekte</p>
                    </div>
                    <div class="status-single text-center py-5 px-5">
                        <p class="input h2 mb-1">9.42</p>
                        <p class="total-investors m-0">Investoren</p>
                    </div>
                    <div class="status-single text-center py-5 px-5">
                        <p class="input h2 mb-1">1,194 $</p>
                        <p class="average-amount m-0">urchschnittliche Investitionssumme</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--END DISCOVER-PROJECTS SECTION-->

    <section class="investors-say py-5"> <!--WHAT INVESTORS SAY CAROUSEL -->
        <div class="container">
            <h2 class="text-center text-sm-center text-md-left mb-3">Das sagen Investoren</h2>
            <div id="carouselExampleSLidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active content-wrapper">
                        <div class="image-comment-wrapper py-3 px-5 text-center">
                            <img src="images/investors/michael.jpg" class="mb-4 rounded-circle">
                            <p class="h4 text-uppercase mb-4">Michael Altrichter</p>
                            <p class="lead text-muted px-5">"Crowdinvest ist seit geraumer Zeit immer stärker im Kommen, da es sich für viele Geschäftsmodelle,
                                vor allem im B2C Bereich, hervorragend anbietet. Es freut mich wirklich sehr, dass es mit CONDA
                                bei uns ein derart engagiertes Team gibt, das dieses Thema so stark fördert und in die Breite
                                trägt!"</p>
                        </div>
                    </div>
                    <div class="carousel-item content-wrapper">
                        <div class="image-comment-wrapper py-3 px-5 text-center">
                            <img src="images/investors/bernd.jpg" class="mb-4 rounded-circle">
                            <p class="h4 text-uppercase mb-4">Bernd Lutzka</p>
                            <p class="lead text-muted px-5">"Für Business Angels stellt sich stetes die Frage nach Erfolgspotentialen von Start Ups. Es gibt
                                hier zwar keine signifikanten Muster oder einfache Kochrezepte, aber ein erkennbares Kundenproblem
                                und eine machbare Lösung sind die Basis für jedes Geschäftskonzept. Wenn dann auch noch ein williges
                                und fähiges Team die Lösung umsetzt, sollte sich ein halbwegs risikofreudiger Investor rasch
                                entscheiden, denn auch bei Business Angels herrscht Wettbewerb um die besten Projekte!"</p>
                        </div>
                    </div>
                    <div class="carousel-item content-wrapper">
                        <div class="image-comment-wrapper py-3 px-5 text-center">
                            <img src="images/investors/niko.jpg" class="mb-4 rounded-circle">
                            <p class="h4 text-uppercase mb-4">Niko Alm</p>
                            <p class="lead text-muted px-5">"Privates Kapital muss arbeiten können. Das macht CONDA möglich und zeigt damit, wie Wirtschaft und
                                Finanzierung in Zukunft (auch) funktionieren werden: im eigenverantwortlichen Zusammenwirken
                                von Investoren und Unternehmen."</p>
                        </div>
                    </div>
                    <div class="carousel-item content-wrapper">
                        <div class="image-comment-wrapper py-3 px-5 text-center">
                            <img src="images/investors/marcus.jpg" class="mb-4 rounded-circle">
                            <p class="h4 text-uppercase mb-4">Marcus Ceh</p>
                            <p class="lead text-muted px-5">"CONDA hat ein umfassendes Experten und Partnernetzwerk und ist daher für mich die sicherste, professionellste
                                und kompetenteste Crowdinvesting-Plattform mit den besten Business-Ideen und sehr hohen langfristigen
                                Rendite-Chancen."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- END WHAT INVESTORS SAY CAROUSEL -->
</main>
<?php include 'footer.php';?>