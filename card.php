<?php include 'header.php';?>
<main> 
<div class="container">
    <div class="col-12 col-lg-8">
        <h2 class="text-secondary mt-3">Campaigns</h2>
        <hr>
        <div class="row mb-5">
            <!--CAMPAIGN-->
            <div class="col-12 col-md-6">
                <div class="campaign card mb-4">  
                    <a href="#"><!--CAMPAIGN IMAGE AND STATUS-->
                        <img src="images/armywings/armywings.jpg" class="card-img-top campaign-image">
                        <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                            <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3">Starting in<span class="h4"> 1 </span> month</p>
                            <img src="images/campaigns/rsz-intechor-logo.jpg" class="rounded-circle campaign-logo">
                        </div>
                    </a> <!--END-->                
                    <div class="campaign-content card-body text-dark bg-light"><!-- CAMPAIGN TITLE AND EXCERT(SUMMARY ABOUT COMPANY), WITH INVESTMENT STATUS-->       
                        <div class="card-title d-flex justify-content-start align-items-center"><!-- TITLE WITH COUNTRY FLAG -->
                            <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                            <h4 class="campaign-title card-title mb-0">Company title</h4>
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
                        <div class="campaign-invest-info py-1 d-flex flex-wrap justify-content-around border-bottom border-muted"><!--ADDITIONAL INFORMATION DISPLAYED AS ICONS WITH TOOLTIPS-->
                            <div class="info-cell mx-1 px-2 py-2 d-flex flex-row">
                                <i class="far fa-star text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Special project"></i>
                            </div>
                            <div class="info-cell mx-1 px-2 py-2 text-center">
                                <i class="fas fa-calendar-alt text-muted fa-1x mb-2" data-toggle="tooltip" data-placement="top" title="Contract term"></i>
                                <span class="d-block text-muted font-weight-bold">2 years</span>
                            </div>
                            <div class="info-cell mx-1 px-2 py-2 text-center">
                                <i class="fas fa-chart-line text-muted mb-2 fa-1x align-self-center" data-toggle="tooltip" data-placement="top" title="Base rate"></i>
                                <span class="d-block text-muted font-weight-bold">4.5 %</span>
                            </div>
                            <div class="info-cell mx-1 px-2 py-2 d-flex flex-row">
                                <i class="fas fa-rocket text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Startup"></i>
                            </div>
                            <div class="info-cell mx-1 px-2 py-2 d-flex flex-row">
                                <i class="fas fa-users text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="KMU"></i>
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
                            <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="#" role="button">View details</a>
                        </div> <!--END-->
                    </div>
                </div>
            </div> <!--END CAMPAIGN-->
        </div>
    </div>
</div>


</main>

<?php include 'footer.php';?>