<?php get_header(); ?>
<style>
    .home-form {
        border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
        border-bottom: 0.15rem solid #c8102e;
        background: #89d3ff1f;
        color: #000 !important;
    }

    .button-home {
        background: #c8102e;
        font-family: 'Montserrat', sans-serif;
        font-size: 0.75rem;
        color: #fff;
    }

    body {
        font-family: 'Montserrat', sans-serif;
    }

    input:-moz-placeholder {
        color: #000 !important;
    }

    input:-ms-input-placeholder {
        color: #000 !important;
    }
</style>
<div class="uk-width-1-1">
    <div uk-grid="" class="uk-section-secondary uk-grid uk-grid-stack uk-margin-remove-left uk-light">
        <div style="background-image: url(/wp-content/themes/smartinnovation/images/MEDUSA_HOME_IMG001[1X].jpg);/*! width: 62%; */padding-left: 0px;" class="uk-width-4-6@m uk-background-contain uk-background-norepeat uk-background-center-left uk-background uk-section-large uk-first-column">
            <div style="margin-right: 0px;/*! padding: 0px; */right: -45%;width: 24%;/*! max-width: 54rem; */" class=" uk-width-2-6@m ">
                <div style="right: -200%;width: 216%; background: #000;" class="uk-card uk-card-secondary uk-card-large uk-card-body uk-margin-remove-first-child uk-1-1@m uk-position-relative uk-position-z-index ">
                    <h2 class="uk-text-bold  uk-text-left uk-heading-small uk-margin-remove-top uk-margin-remove-bottom"> MedUSA </h2>
                    <hr style="border-top: 5px solid #CCA653;margin-left: -7rem;margin-right: 35rem;">
                    <div class="el-content uk-panel uk-margin-small-top">
                        <p class="uk-text-large">Physician services to help you<br>manage your practice.</p>
                    </div>
                    <div class="uk-margin-medium-top">
                        <button class="uk-button button-home" style="margin-right: 1rem;">View our Services</button>
                        <button class="uk-button button-home">Software we Offer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-default">
        <div class="uk-section uk-light uk-background-cover uk-background-secondary uk-background-blend-multiply uk-padding-remove-vertical" style="background-image: url(/wp-content/themes/smartinnovation/images/MEDUSA_HOME_IMG003[1X].png)">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                    <div class="uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top" style="margin-top: auto;">
                        <h2 class="">Cloud Based RCM Services<br>and Software</h2>
                        <hr style="border-top: 3px solid #CCA653;margin-left: -3rem;margin-top: 0;margin-bottom: 0;margin-right: -3rem;">
                        <h3 class="uk-margin-medium">Excellent Services is Our Promise</h3>
                        <p class="uk-margin-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio neque. Natus, consequatur ab placeat dicta labore non eum ipsa magni velit voluptatum delectus officia animi dignissimos accusantium similique? Labore nulla, officia et soluta ab assumenda minus quo, saepe corporis, magni odio.</p>
                        <button class="uk-margin-medium uk-width-1-2@m uk-button button-home">See Our Case Studies</button>
                    </div>
                    <div>
                        <img class="uk-position-z-index" data-src="\wp-content\themes\smartinnovation\images\MEDUSA_HOME_IMG002[1X].jpg" style="/*! max-height: 500px; *//*! max-width: 494px; */position: relative;top: 10%;" alt="" uk-img="" src="http://smartinnovation.test/wp-content/themes/smartinnovation/images/MEDUSA_HOME_IMG002[1X].jpg">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="uk-section-default">
        <div class="uk-section uk-background-cover uk-background-secondary " style="background-image: url(/wp-content/themes/smartinnovation/images/MEDUSA_HOME_IMG003[1X].png)">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-1-4@m uk-padding-large " uk-grid>
                    <div>
                    </div>
                    <div class="uk-width-3-4@m uk-flex-center">
                        <div class="uk-container">
                            <div class="uk-width-2-2 uk-padding ">
                                <h2 class="uk-text-bold uk-text-secondary uk-text-center">From Small Pratices to Larger Provider Health<br>System, Med USA Provides Scalable Solutions.</h2>
                            </div>
                            <div class="uk-width-2-3 uk-padding uk-padding-remove-horizontal uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-text-secondary uk-text-left">Reach out to see how our team can help</h4>
                            </div>
                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-2 ">
                                    <input class=" uk-input uk-form-blank home-form " type="text" placeholder="Fist Name">
                                </div>
                                <div class="uk-width-1-2">
                                    <input class=" uk-input uk-form-blank home-form " type="text" placeholder="Last Name">
                                </div>
                                <div class="uk-width-1-2">
                                    <input class=" uk-input uk-form-blank home-form " type="text" placeholder="Email">
                                </div>
                                <div class="uk-width-1-2">
                                    <input class=" uk-input uk-form-blank home-form " type="text" placeholder="Phone">
                                </div>
                                <div class="uk-width-1-4"></div>
                                <div class="uk-width-1-4"></div>
                                <div class="uk-width-1-4"></div>
                                <div class="uk-width-1-4">
                                    <button class="uk-button button-home">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>