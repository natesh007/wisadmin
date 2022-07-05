<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="UniMentor | Guidance & Support That Can Make The Difference">
    <meta name="description" content="Discover this platform where juniors and seniors can interact with each other one-on-one and find some great resources for your career growth. Sign Up now and be a part of this network that really could do wonders for you. ">
    <link rel="icon" href="<?php echo base_url();?>/public/alumini-assets/images/favicon.ico"   sizes="16x16">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e28431b1d9.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/style.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/alumini-assets/public/css/animate.min.css">

	<title>UniMentor  | Guidance & Support That Can Make The Difference</title>
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
                                <h3  data-aos="fade-up" data-aos-delay="700">Log In</h3>
                                <form  action="<?php echo base_url('login'); ?>" method="post" id="Login" data-aos="fade-up" data-aos-delay="900" autocomplete="off"> 
                                    <div class="form-group"> 
                                        <input type="text" class="form-control email embox" id="Email" name="Email" placeholder="Email" aria-describedby="emailHelp" autocomplete="off">
                                    </div>
                                    <div class="form-group"> 
                                        <input type="password" class="form-control password psbox" id="password" name="Password" placeholder="Password" aria-describedby="emailHelp" autocomplete="off">
                                        <i class="far fa-eye" id="togglePassword"></i>
                                        <?php if (session('msg')) : ?>
                                            <div class="form-group">
                                                <span class="help-block"><?= session('msg') ?></span>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    
                                    <div class="form_actions">
                                        <div class="customCheckbox">
                                            <input type="checkbox" id="Remember">
                                            <label for="Remember">Remember me</label>
                                        </div>
                                        <a href="<?php echo base_url();?>/forgot">Forgot Your Password?</a>
                                    </div>
                                    <div class="form_submissions">
                                        <input type="submit" class="secondary_btn" value="Log In"/>
                                       <?php /* <a href="<?php echo base_url();?>/loginotp">Login with OTP</a>*/?>
                                    </div>
                                </form>
                                <div class="login_social_media"  data-aos="fade-up" data-aos-delay="1300">
                                    <?php /*<span class="or"><em>or</em></span>
                                    <label>Log in with social network</label>
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
                                    </ul>*/?>
                                    <p>Don’t have an account? <a href="<?php echo base_url();?>/register">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="containar">
                        <div class="login_wrap">
                            <div class="login_text">
                                <figure><img src="images/login_img.svg" alt="login"></figure>
                                <h3>Careers & Colleges Research Tools</h3>
                                <p>Our 26+ Career & College Research Tools help students & parents get detailed and reliable information about various Careers, Courses, Colleges, Fees and much more.</p>
                            </div>
                            <div class="login_form">
                                
                            </div>
                        </div>
                    </div>
                </div>                 -->
            </div>
        </div>
         
        <div class="modal fade" id="verifyOtp"   role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="sucess_body">
                            <figure><img src="<?php echo base_url();?>/public/alumini-assets/images/check.svg"></figure>
                            <p>Your password has been changes. You can now log in with your new credentials</p>
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
        <script type="text/javascript" src="<?php echo base_url();?>/public/alumini-assets/js/animate.js"></script> 
        
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
        <?php if(session('msgss')){ ?>
            <script>
                $(document).ready(function(){
                    $("#verifyOtp").modal('show');
                });
            </script>
        <?php } ?>
        <script>
            <?php if (session('msg')) : ?>
                $('.embox').css('background-color','#FAC4C4');
                $('.psbox').css('background-color','#FAC4C4');
            <?php endif ?>
            $("#Login").submit(function( event ) { 
                $('#passerr').remove();
                $('#emerr').remove();
                postUrl = '<?php echo base_url('loginAjax'); ?>';
                dataToPost = 
                {
                    Email           :   $("#Email").val(),
                    Password        :   $("#password").val(),
                };
                $.ajax({type: "POST",url : postUrl,data: dataToPost,async:false,}).done(function(data)  
                {
                    if(data.length != 0)
                    {
                        errors = data.split(","); 
                        var item = [];
                        for(i=0; i<errors.length; i++ )
                        {
                            var errrorarray = errors[i].split('~');
                            if(errrorarray[0] == 'Email')
                            {
                                if(errrorarray[1] != '')
                                {
                                    if ($('#emerr').length == 0) 
                                    {
                                        $('.embox').css('background-color','#FAC4C4');
                                        $('<p id="emerr">'+errrorarray[1]+'</p>').insertAfter("#Email");                   
                                    }
                                    
                                }
                                else
                                {
                                    $('.embox').css('background-color','#FFFFFF');
                                    $('#emerr').remove();
                                }
                            }
                            else if(errrorarray[0] == 'Password')
                            {
                                if(errrorarray[1] != '')
                                {
                                    if ($('#passerr').length == 0) 
                                    {
                                        $('.psbox').css('background-color','#FAC4C4');
                                        $('<p id="passerr">'+errrorarray[1]+'</p>').insertAfter( "#password" );                   
                                    }  
                                }
                                else
                                {
                                    $('.psbox').css('background-color','#FFFFFF');
                                    $('#passerr').remove();
                                }
                            }
                        }
                        event.preventDefault();
                    }
                    else
                    {
                        return true;
                    }
                }).fail(function()  {
                    alert("Sorry, Please Fill the Form again.");
                    event.preventDefault();
                });
            });

            $(function () {

                if (localStorage.chkbox && localStorage.chkbox != '') {
                    $('#Remember').attr('checked', 'checked');
                    $('#Email').val(atob(localStorage.username));
                    $('#password').val(atob(localStorage.pass));
                } else {
                    $('#Remember').removeAttr('checked');
                    $('#Email').val('');
                    $('#password').val('');
                }

                $('#Remember').click(function () {

                    if ($('#Remember').is(':checked')) {
                        // save username and password
                        localStorage.username = btoa($('#Email').val());
                        localStorage.pass = btoa($('#password').val());
                        localStorage.chkbox = $('#Remember').val();
                    } else {
                        localStorage.username = '';
                        localStorage.pass = '';
                        localStorage.chkbox = '';
                    }
                });
            });
        </script>
    </body>
</html>