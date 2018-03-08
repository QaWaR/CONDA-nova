<?php include 'header.php';?>
<main> 
<div class="container">
    <div class="col-12 col-lg-8">
        <h2 class="text-secondary mt-3">Campaigns</h2>
        <hr>
        <div class="row mb-5">
            <!--SINGLE-CAMPAIGN-->
            <div class="col-12 col-md-6">
                <div class="campaign card mb-4">
                    <img src="images/armywings/armywings.jpg" class="card-img-top campaign-image">
                    <div class="campaign-header card-header bg-primary px-3 py-2 d-flex justify-content-between">
                        <p class="campaign-status text-uppercase text-white font-weight-bold my-auto mr-3">Starting in<span class="h4"> 1 </span> month</p>
                        <img src="images/armywings/wingslogo.jpg" class="rounded-circle campaign-logo">
                    </div>
                    <div class="campaign-content card-body text-dark bg-light">
                        <div class="card-title d-flex justify-content-start align-items-center">
                            <img src="images/flags/aut.jpg" class="img-fluid mr-3 flag">
                            <h4 class="campaign-title card-title mb-0">Company title</h4>
                        </div>
                        <p class="campaign-excerpt card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dignissimos a vitae recusandae amet itaque perferendis
                            architecto non aliquam maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit aspernatur possimus
                            neque eveniet natus, illo debitis dolore dolorem sequi aperiam fuga? Voluptatum velit, repudiandae consequatur
                            doloremque error culpa quasi itaque?</p>
                        <hr>
                        <div class="campaign-invest-wrapper text-dark d-flex flex-column flex-sm-row justify-content-around">
                            <div class="campaign-invest-scale rounded-circle border border-secondary p-3  mr-3 text-center">
                                <p class="investment-total-amount font-weight-bold m-0 mt-3">220.500&euro;</p>
                                <p class="investors-number  text-muted">22 Investors</p>
                                <p class="investment-completed">18%</p>
                            </div>
                            <div class="investment-amounts align-self-center pt-3">
                                <p class="text-muted"><span class="investment-min d-block h4 m-0 text-dark">75.000<sup class="currency">&euro;</sup></span> Minimum Investment</p>
                                <p class="text-muted"><span class="investment-max d-block h4 m-0 text-dark">700.000<sup class="currency">&euro;</sup></span> Maximum investment</p>
                            </div>
                        </div>       
                    </div>
                    <div class="card-footer p-0">
                        <div class="campaign-invest-info py-1 d-flex justify-content-around border-bottom border-muted">
                            <div class="info-cell px-2 py-2 d-flex flex-row">
                                <i class="far fa-star text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Special project"></i>
                            </div>
                            <div class="info-cell px-2 py-2 text-center">
                                <i class="fas fa-calendar-alt text-muted fa-1x mb-2" data-toggle="tooltip" data-placement="top" title="Contract term"></i>
                                <span class="d-block text-muted font-weight-bold">2 years</span>
                            </div>
                            <div class="info-cell px-2 py-2 text-center">
                                <i class="fas fa-chart-line text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Base rate"></i>
                                <span class="d-block text-muted font-weight-bold">2 years</span>
                            </div>
                            <div class="info-cell px-2 py-2 d-flex flex-row">
                                <i class="fas fa-rocket text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="Startup"></i>
                            </div>
                            <div class="info-cell px-2 py-2 d-flex flex-row">
                                <i class="fas fa-users text-muted fa-2x align-self-center" data-toggle="tooltip" data-placement="top" title="KMU"></i>
                            </div>
                        </div>
                        <div class="campaign-invest-info py-1 px-3 border-bottom border-muted">
                            <div class="row">
                                <div class="col-6 col-md-8 my-2 d-flex justify-content-around">
                                    <p class="font-weight-bold d-inline-block m-0 d-flex justify-content-center">1 hero token =
                                        <img src="images/campaigns/eth3.svg" class="pl-4">
                                    </p>
                                    <img src="" alt="">
                                </div>
                                <div class="col-6 col-md-4 my-2 d-flex justify-content-between">
                                    <p class="font-weight-bold d-inline-block m-0">0.5</p>
                                    <p class="font-weight-bold d-inline-block m-0">
                                        <span class="text-muted">ETH</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-button py-4 text-center">
                            <a class="btn btn-secondary text-uppercase my-1 py-2 px-4" href="#" role="button">View details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</main>

<?php include 'footer.php';?>