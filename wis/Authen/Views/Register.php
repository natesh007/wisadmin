<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="UniMentor | Guidance & Support That Can Make The Difference">
    <meta name="description" content="Discover this platform where juniors and seniors can interact with each other one-on-one and find some great resources for your career growth. Sign Up now and be a part of this network that really could do wonders for you. ">
    <link rel="icon" href="<?php echo base_url(); ?>/public/alumini-assets/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/alumini-assets/public/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e28431b1d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/student-assets/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/alumini-assets/public/css/animate.min.css">
    <title>UniMentor | Guidance & Support That Can Make The Difference</title>
    <!--<style>
        .form-group {
            flex-wrap: wrap;
        }
    </style>-->
</head>

<body class="pad0">
    <!-- home-header started -->
    <div class="register_wrap">
        <div class="register_sec">
            <div class="container">
                <div class="row">
                    <div class="signup_wrap">
                        <div class="signup_left">
                            <figure class="branding" data-aos="fade-down">
                                <a href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>/public/alumini-assets/images/logo.svg" alt="logo">
                                </a>
                            </figure>
                            <div class="signup_titiles" data-aos="fade-up" data-aos-delay="500">
                                <h3>Welcome to Unimentor!</h3>
                                <figure><img src="<?php echo base_url(); ?>/public/alumini-assets/images/login_img.png"></figure>
                                <p>
                                    Get ready to meet up over one-on-one sessions.
                                    And explore amazing videos, webinars and more that can help you.
                                    Find everything that you need on UniMentor and enjoy
                                    the rewarding experiences!</p>
                                <!--<p>You will never have to leave behind any friends or seniors at school ever. Because you can now connect with them and many other alumni you haven't got a chance to meet yet, whenever you want, on this platform. </p>
                                <p>Discover Now.</p>-->
                                <!--<p>Warm Regards,<br/> Principal, milescss</p>-->
                            </div>
                            <div class="login_footer">
                                <h6>International Educational Gateway Pvt. Ltd. © 2021</h6>
                                <p>All Rights Reserved . Univariety</p>
                            </div>
                        </div>
                        <div class="signup_form new_live_changes">
                            <div class="form_title">
                                <h3 data-aos="fade-up" data-aos-delay="700">Sign Up</h3>
                                <p data-aos="fade-up" data-aos-delay="700">&#42; marked fields are mandatory</p>
                                <!--&#42;-->
                            </div>
                            <div class="signup_form_cnt">
                                <?php if (session('errmsg')) : ?>
                                    <div class="d-flex">
                                        <div class="col-12">
                                            <span class="help-block"><?= session('errmsg') ?></span>
                                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <form action="<?php //base_url('register'); 
                                                ?>" method="post" id="Register" data-aos="fade-up" data-aos-delay="1000">
                                    <div class="signup-list">
                                        <h6>Registering as &#42;</h6>
                                        <div class="form-group row g-2">
                                            <?php foreach ($type as $t) { ?>
                                                <div class="col-6">
                                                    <div class="radio_box" id="sm">
                                                        <input type="radio" id="<?php echo $t->UserType; ?>" name="Category" value="<?php echo $t->UserTypeID; ?>">
                                                        <label for="<?php echo $t->UserType; ?>"><?php echo $t->UserType; ?> </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div id="caterpos"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row g-2">
                                        <div class="col-6">
                                            <input type="text" class="form-control" name="FullName" id="FullName" placeholder="First Name &#42;">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name &#42;">
                                        </div>
                                    </div>
                                    <div class="form-group row g-2">
                                        <div class="col-6">
                                            <div class="radio_box" id="Male">
                                                <input type="radio" id="male" name="Gender" value="1">
                                                <label for="male">Male &#42;</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="radio_box" id="Female">
                                                <input type="radio" id="female" name="Gender" value="2">
                                                <label for="female">Female &#42;</label>
                                            </div>
                                        </div>
                                        <div id="generpos"></div>
                                    </div>
                                    <div class="form-group row g-2">
                                        <div class="col-4">
                                            <select class="form-control" name="code" id="code">
                                                <?php foreach ($country as $coun) { ?>
                                                    <option value="<?php echo $coun->PhoneCode; ?>" <?php if ($coun->PhoneCode == '91') {
                                                                                                        echo 'selected';
                                                                                                    } ?>><?php echo $coun->CountryName; ?>(<?php echo '+' . $coun->PhoneCode; ?>)</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="Mobnum" id="Mobnum" placeholder="Mobile Number &#42;" oninput="Checknumber()">
                                        </div>
                                    </div>
                                    <div class="form-group row g-2">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="Email" id="Email" placeholder="Email &#42;">
                                        </div>
                                    </div>
                                    <div class="form-group row g-2">
                                        <div class="col-12">
                                            <input type="password" name="password" class="form-control password" id="password" placeholder="Password &#42;">
                                            <i class="far fa-eye" id="togglePassword"></i>
                                        </div>
                                    </div>
                                    <div class="signup_foot">
                                        <input type="submit" id="signup" class="secondary_btn" value="Sign Up" />
                                        <p>By Signing up, you agree to our <a href="<?php echo base_url('terms'); ?>">Terms of use</a> and <a href="<?php echo base_url('privacy'); ?>">Privacy Policy.</a></p>
                                        <label>Already have an account? <a href="<?php echo base_url(); ?>">Log In</a></label>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EMAIL CONFIRM -->

    <div class="modal fade show" id="verify_signUp_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelvideo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content overflow-hidden">
                <div class="modal-header d-flex justify-content-end">
                    <a href="<?php echo base_url('reback');?>" style="color:#fff;font-size:24px;text-decoration:none;">&times;</a>
                </div>
                <div class="modal-body p-0">
                    <div class="d-flex flex-column justify-content-center align-items-center p-5">
                        <span class="icon icon-tick dark-green text-white mb-4 text-center square-48 rounded-circle d-flex justify-content-center align-items-center">
                            <img src="<?php echo base_url(); ?>/public/student-assets/images/email.svg" />
                        </span>
                        <h2 class="text-white mb-3">Verify your email address</h2>
                        <p class="font-18 font-500 text-center text-white mb-0">We have sent you an email to <b>(<?= session()->get('Email') ?>).</b> <?php /*and an SMS to (<?= '+' . session()->get('MobileNumber') ?>)</b> to validate your contact details*/ ?>After receiving the email
                            <!--/ SMS-->, please confirm using the link provided to complete your sign up process.
                        </p>
                    </div>
                    <div class="w-100 p-4 text-center bg-white footer-text">
                        Haven't received an email
                        <!--/ SMS-->?
                        <b><a href="<?php echo base_url('resendactive'); ?>">Resend confirmation</a></b>
                        <?php if (session('rmsgs')) { ?>
                            <p class="d-block">
                                <span class="help-block"><?php echo  session('rmsgs'); ?></span>
                            </p>
                        <?php  } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="<?php echo base_url(); ?>/public/alumini-assets/cdnjs/ajaxlib.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/alumini-assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/alumini-assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>/public/alumini-assets/js/animate.js" type="text/javascript"></script>

    <!-- AJAX CALL FOR REGISTER -->
    <script>
        <?php if (session()->get('Email')) { ?>
            $('#verify_signUp_pop').modal({
                backdrop: 'static',
                keyboard: false
            })
            $("#verify_signUp_pop").modal("show");
        <?php } ?>

        function Checknumber() {
            $('.help-block').remove();
            var mobnum = $("#Mobnum").val();
            if (mobnum != null) {
                var a = /^[1-9][0-9]{0,9}$/;
                if (a.test(mobnum)) {
                    $('#Mobnum').css('background', '#FCFCFC');
                    $('.help-block').remove();
                    $("#signup").prop('disabled', false);
                } else {
                    $('#Mobnum').css('background', '#FAC4C4');
                    $('<span class="help-block">Enter a valid 10 digit mobile number </span>').insertAfter("#Mobnum");
                    $("#signup").prop('disabled', false);
                }
            } else {
                $('#Mobnum').css('background', '#FCFCFC');
                $('.help-block').remove();
                $("#signup").prop('disabled', false);
            }
        }
        $("#Register").submit(function(event) {
            $('#caterror').remove();
            $('#Fnerr').remove();
            $('#Lnerr').remove();
            $('#Generr').remove();
            $('#Moberr').remove();
            $('#Emerr').remove();
            $('#Passerr').remove();
            postUrl = '<?php echo base_url('RegisterAjax'); ?>';
            dataToPost = {
                Category: $("input[name='Category']:checked").val(),
                FullName: $("#FullName").val(),
                LastName: $("#LastName").val(),
                Gender: $("input[name='Gender']:checked").val(),
                MobileNumber: $("#code").val() + $("#Mobnum").val(),
                Email: $("#Email").val(),
                Password: $("#password").val(),
            };
            $.ajax({
                type: "POST",
                url: postUrl,
                data: dataToPost,
                async: false,
            }).done(function(data) {
                if (data.length != 0) {
                    errors = data.split(",");
                    var item = [];
                    for (i = 0; i < errors.length; i++) {
                        var errrorarray = errors[i].split('~');
                        if (errrorarray[0] == 'Category') {
                            if (errrorarray[1] != '') {
                                if ($('#caterror').length == 0) {
                                    $('.radio_box label').css('background-color', '#f4bebc');
                                    $('<span class="error" id="caterror">' + errrorarray[1] + '</span>').insertAfter("#caterpos");
                                }

                            } else {
                                $('.radio_box input[name="Category"]:checked + label').css('background-color', '#217AFF');
                                $('.radio_box input[name="Category"]:not(:checked) + label').css('background-color', '#ffffff');
                                $('#caterror').remove();
                            }
                        } else if (errrorarray[0] == 'FullName') {
                            if (errrorarray[1] != '') {
                                if ($('#Fnerr').length == 0) {
                                    $('#FullName').css('background-color', '#f4bebc');
                                    $('<span class="error" id="Fnerr">' + errrorarray[1] + '</span>').insertAfter("#FullName");
                                }
                            } else {
                                $('#FullName').css('background-color', '#ffffff');
                                $('#Fnerr').remove();
                            }
                        } else if (errrorarray[0] == 'LastName') {
                            if (errrorarray[1] != '') {
                                if ($('#Lnerr').length == 0) {
                                    $('#LastName').css('background-color', '#f4bebc');
                                    $('<span class="error" id="Lnerr">' + errrorarray[1] + '</span>').insertAfter("#LastName");
                                }
                            } else {
                                $('#LastName').css('background-color', '#ffffff');
                                $('#Lnerr').remove();
                            }
                        } else if (errrorarray[0] == 'Gender') {
                            if (errrorarray[1] != '') {
                                if ($('#Generr').length == 0) {
                                    $('.radio_box label').css('background', '#f4bebc !important');
                                    $('<span class="error" id="Generr">' + errrorarray[1] + '</span>').insertAfter("#generpos");
                                }
                            } else {
                                $('.radio_box input[name="Gender"]:checked + label').css('background-color', '#217AFF');
                                $('.radio_box input[name="Gender"]:not(:checked) + label').css('background-color', '#ffffff');
                                $('#Generr').remove();
                            }
                        } else if (errrorarray[0] == 'MobileNumber') {
                            if (errrorarray[1] != '') {
                                if ($('#Moberr').length == 0) {
                                    $('#Mobnum').css('background-color', '#f4bebc');
                                    $('<span class="error" id="Moberr">' + errrorarray[1] + '</span>').insertAfter("#Mobnum");
                                }
                            } else {
                                $('#Mobnum').css('background-color', '#fcfcfc');
                                $('#Moberr').remove();
                            }
                        } else if (errrorarray[0] == 'Email') {
                            if (errrorarray[1] != '') {
                                if ($('#Emerr').length == 0) {
                                    $('#Email').css('background-color', '#f4bebc');
                                    $('<span class="error" id="Emerr">' + errrorarray[1] + '</span>').insertAfter("#Email");
                                }
                            } else {
                                $('#Email').css('background-color', '#fcfcfc');
                                $('#Emerr').remove();
                            }
                        } else if (errrorarray[0] == 'Password') {
                            if (errrorarray[1] != '') {
                                if ($('#Passerr').length == 0) {
                                    $('#password').css('background-color', '#f4bebc');
                                    $('<span class="error" id="Passerr">' + errrorarray[1] + '</span>').insertAfter("#password");
                                }
                            } else {
                                $('#password').css('background-color', '#fcfcfc');
                                $('#Passerr').remove();
                            }
                        }
                    }
                    event.preventDefault();
                } else {
                    return true;
                }
            }).fail(function() {
                alert("Sorry, Please Fill the Form again.");
                event.preventDefault();
            });

        });
        $("input[type='text'],input[type='password']").on("focus", function() {
            if (this.value != null) {
                $(this).css('background-color', '#FFFFFF');
            }
        });
        // $("input[type='checkbox']").on("change",function(){
        //     if($('input[name="Category"]').prop("checked") == true)
        //     {
        //         $('.radio_box input[name="Category"]:checked + label').css('background-color', '#217AFF');
        //         $('.radio_box input[name="Category"]:not(:checked) + label').css('background-color', '#ffffff');
        //     }
        //     else{
        //         $('.radio_box label').css('background-color', '#f4bebc'); 
        //     }
        // });
        // $("input[type='checkbox']").on("change",function(){
        //     if($('input[name="Gender"]').prop("checked") == true)
        //     {
        //         $('.radio_box input[name="Gender"]:checked + label').css('background-color', '#217AFF');
        //         $('.radio_box input[name="Gender"]:not(:checked) + label').css('background-color', '#ffffff');
        //     }
        //     else{
        //         $('.radio_box label').css('background-color', '#f4bebc'); 

        //     }
        // });
    </script>

</body>

</html>