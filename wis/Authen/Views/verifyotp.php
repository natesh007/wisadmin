<!DOCTYPE html>
<html>
    <head>
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url();?>/public/alumini-assets/images/favicon.ico"   sizes="16x16">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e28431b1d9.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/style.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/animate.min.css">


	<title>ALUMNi</title>
    </head>
    <body class="pad0">
        <!-- home-header started -->
        <div class="register_wrap">
            <div class="register_sec">                
                <div class="container">
                    <div class="row">
                        <div class="login_wrap">
                            <div class="login_text">
                                <figure class="branding" data-aos="fade-down">
                                    <a href="<?php echo base_url();?>">
                                        <img src="<?php echo base_url();?>/public/alumini-assets/images/logo.svg" alt="logo">
                                    </a>
                                </figure>
                                <div class="login_slider"  data-aos="fade-up" data-aos-delay="500">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <div class="login-slider">
                                                    <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/LoginPageImage_1.svg"></figure>
                                                    <h4>Careers & Colleges Research Tools</h4>
                                                    <p>Our 26+ Career & College Research Tools help students & parents get detailed and reliable information about various Careers, Courses, Colleges, Fees and much more.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="login-slider">
                                                    <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/LoginPageImage_2.svg"></figure>
                                                    <h4>Psychometric Tests</h4>
                                                    <p>Online Psychometric tests for career guidance are the first step in Career Planning for Students to help them discover their Aptitude, Interest and Personality.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="login-slider">
                                                    <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/LoginPageImage_3.png"></figure>
                                                    <h4>Personalised Counselling</h4>
                                                    <p>Through an unbiased counselling approach, our Expert Counsellors help students gain clarity on Courses, Careers, Colleges, Entrance Tests and much more.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="login-slider">
                                                    <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/LoginPageImage_4.svg"></figure>
                                                    <h4>Alumni Guidance</h4>
                                                    <p>Successful Alumni, or seniors from School have gone through their own Career journey already. Univariety helps you connect with the successful seniors of your school to benefit from their Guidance.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="login-slider">
                                                    <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/LoginPageImage_5.svg"></figure>
                                                    <h4>University Guidance</h4>
                                                    <p>Students & Parents can interact with Indian and International Universities to get info on College admissions, scholarships & more.</p>
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="login_footer">
                                    <h6>International Educational Gateway Pvt. Ltd. © 2021</h6>
                                    <p>All Rights Reserved . Univariety</p>
                                </div>
                            </div>
                            <div class="login_form">
                                <h3  data-aos="fade-up" data-aos-delay="700">Verify with OTP</h3>
                                <label  data-aos="fade-up" data-aos-delay="900">Sent to <?php  if(session()->get('Mobnum') || session()->get('CountryCode')){ echo session()->get('CountryCode').session()->get('Mobnum');} ?><a href="<?php echo base_url('resendloginotp');?>" class="resend">Resend OTP</a></label>
                                <?php if (session('remsg')) : ?>
                                    <div class="d-block">
                                        <span class="help-block text-center"><?= session('remsg') ?></span>
                                    </div>
                                <?php endif ?>
                                <form  action="<?php echo base_url('verifyotp');?>" method="post" data-aos="fade-up" data-aos-delay="1100">
                                    <div class="form-group"> 
                                        <ul>
                                            <li><input type="text" class="form-control <?php if (session('msg')) : ?> lgerror <?php endif ?>" id="otp" name="otp[]" maxlength="1"  ></li>
                                            <li><input type="text"class="form-control <?php if (session('msg')) : ?> lgerror <?php endif ?>" id="otp" name="otp[]"maxlength="1" ></li>
                                            <li><input type="text"class="form-control <?php if (session('msg')) : ?> lgerror <?php endif ?>" id="otp" name="otp[]"maxlength="1"  ></li>
                                            <li><input type="text"class="form-control <?php if (session('msg')) : ?> lgerror <?php endif ?>" id="otp" name="otp[]"maxlength="1"  ></li>
                                        </ul>
                                    </div>
                                    <?php if (session('msg')) : ?>
                                        <div class="px-5">
                                            <span class="help-block"><?= session('msg') ?></span>
                                        </div>
                                    <?php endif ?>  
                                    <div class="form_submissions">
                                        <!--<a class="secondary_btn" data-toggle="modal" data-target="#verifyOtp">Continue</a>-->
                                        <button type="submit" class="secondary_btn">Continue</button>
                                    </div>
                                </form> 
                                <div class="login_social_media" data-aos="fade-up" data-aos-delay="1200">
                                    <span class="or"><em>or</em></span>
                                    <?php /*<label>Log in with social network</label>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>/public/alumini-assets/images/facebook2.svg"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>/public/alumini-assets/images/google.svg"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>/public/alumini-assets/images/linkedin.svg"></a>
                                        </li>
                                    </ul> */ ?>
                                    <p>Don’t have an account? <a href="<?php echo base_url('register'); ?>">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
         
            
        <div class="modal fade" id="verifyOtp"   role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="sucess_body">
                            <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/check.svg"></figure>
                            <p>Mobile number verified</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
         

        <!-- footer_wrapper started -->
       
        
        <script src="<?php echo base_url();?>/public/alumini-assets/cdnjs/ajaxlib.js"></script>	 	 
        <script type="text/javascript" src="<?php echo base_url();?>/public/alumini-assets/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>/public/alumini-assets/js/swiper-bundle.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>/public/alumini-assets/js/custom.js"></script>   
        <script src="<?php echo base_url();?>/public/alumini-assets/js/animate.js" type="text/javascript"></script> 
        
        <script>
            $(document).ready(function(){
                var swiper = new Swiper('.swiper-container', {
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    loop: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                });
            });
        </script>
    </body>
</html>