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
                                <div class="login_slider" data-aos="fade-up" data-aos-delay="500">
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
                                <h3 data-aos="fade-up" data-aos-delay="700">Log In</h3>
                                <form action="<?php echo base_url('loginotp');?>" method="post" id="loginotps" data-aos="fade-up" data-aos-delay="900"> 
                                    <div class="d-flex form-group" id="moberr">
                                        <select class="form-control slbox mx-1 slbox" name="code" id="code">
                                            <?php foreach($country as $coun){?>
                                            <option value="<?php echo $coun->PhoneCode; ?>" <?php if($coun->PhoneCode == '91'){ echo 'selected'; }?>><?php echo '+'.$coun->PhoneCode; ?></option>
                                            <?php } ?>
                                        </select> 
                                        <input type="text" class="form-control phone phbox" id="Mobilenum" name="Mobilenum" oninput="Checknumber()" placeholder="Mobile Number" aria-describedby="emailHelp">
                                    </div> 
                                    <div class="form_submissions">
                                        <button type="submit" class="secondary_btn">Continue</button>
                                        <a href="<?php echo base_url();?>">Log in using Password</a>
                                    </div>
                                </form>
                                <div class="login_social_media" data-aos="fade-up" data-aos-delay="1300">
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
                                    <p>Don’t have an account? <a href="<?php echo base_url('register');?>">Sign Up</a></p>
                                </div>
                            </div>
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

        <script>
            function Checknumber()
            {
                $('.help-block').remove();
                var mobnum = $("#Mobilenum").val();
                if(mobnum != null){
                    var a =  /^[1-9][0-9]{0,9}$/;  
                    if (a.test(mobnum))   
                    {  
                        $('#Mobilenum').css('background','#FCFCFC');
                        $('.help-block').remove();
                    }   
                    else   
                    {  
                        $('#Mobilenum').css('background','#FAC4C4');
                        $('<span class="help-block">This field should not start with zero and must enter 10 digits only </span>').insertAfter( "#moberr" );
                    }
                }  
                else{
                    $('#Mobilenum').css('background','#FCFCFC');
                    $('.help-block').remove(); 
                }  
            }
            $("#loginotps").submit(function( event ) { 
                $('#pherr').remove();
                $('#emerr').remove();
                postUrl = '<?php echo base_url('loginotpajax'); ?>';
                dataToPost = 
                { 
                    Mobile :  $("#code").val()+$("#Mobilenum").val(),  
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
                            if(errrorarray[0] == 'Mobile')
                            {
                                if(errrorarray[1] != '')
                                {
                                    if ($('#emerr').length == 0) 
                                    {
                                        $('.slbox').css('background-color','#FAC4C4');
                                        $('.phbox').css('background-color','#FAC4C4');
                                        $('<p id="emerr">'+errrorarray[1]+'</p>').insertAfter("#moberr");                   
                                    }
                                    
                                }
                                else
                                {
                                    $('.slbox').css('background-color','#FFFFFF');
                                    $('.phbox').css('background-color','#FFFFFF');
                                    $('#emerr').remove();
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
        </script>
    </body>
</html>