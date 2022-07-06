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
                            <div class="login_form"  data-aos="fade-up" data-aos-delay="800">
                                <h3>Set new password for <span>“<?= session()->get('EmailVrfy')?>”</span></h3>
                                <form action="<?= base_url('setpassword')?>" method="post">
                                    <div class="form-group">                                         
                                        <input type="password" class="form-control password <?php if (isset($validation)){ if(\Config\Services::validation()->showError('psw')){ ?> lgerror <?php }} ?>" id="password" name="psw" placeholder="Enter New Password" value="<?php if(isset($password )){ echo $password; } ?>">
                                        <i class="far fa-eye" id="togglePassword"></i>
                                        <?php if (isset($validation)): ?>
                                            <div class="text-left">
                                                <?= \Config\Services::validation()->showError('psw'); ?>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                    
                                    <div class="form-group"> 
                                        <input type="password" class="form-control password <?php if (isset($validation)){ if(\Config\Services::validation()->showError('cpsw')){ ?> lgerror <?php }} ?>" id="password2" name="cpsw" placeholder="Confirm Password" value="<?php if(isset($cpassword )){ echo $cpassword; } ?>">
                                        <i class="far fa-eye" id="togglePassword2"></i>
                                        <?php if (isset($validation)): ?>
                                            <div class="text-left">
                                                <?= \Config\Services::validation()->showError('cpsw'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                      
                                    <div class="form_submissions">
                                        <button type="submit" class="secondary_btn">Submit</button>
                                        <a href="<?php echo base_url()?>">Return to Login</a>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="modal fade" id="mobileverify"   role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="sucess_body">
                            <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/check.svg"></figure>
                            <?php if(is_numeric(session()->get('EmailVrfy'))){
                                echo "<p>Mobile number verified</p>";
                            }else{
                                echo "<p>Email verified</p>";
                            }
                            ?>
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
        <?php if(session('show')){ ?>
            <script>
                $(document).ready(function(){
                    $("#mobileverify").modal('show');
                });
            </script>
        <?php } ?>
    </body>
</html>