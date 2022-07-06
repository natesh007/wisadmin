<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ; ?>/public/wis_assets/Images/ClientIcon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="<?= base_url() ; ?>/public/wis_assets/CSS/StyleSheet.css?ver=1" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?= base_url() ; ?>/public/wis_assets/Scripts/Script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <style>.error{color:#fff}</style>
</head>
<body>
    <div class="LoginBxHldr">
        <div class="ClntLogoHldr">
            <img src="<?= base_url() ; ?>/public/wis_assets/Images/ClientLogo-Big.png" class="ClntLogo" />
        </div>
        <form  action="<?php echo base_url('login'); ?>" method="post" id="Login" data-aos="fade-up" data-aos-delay="900" autocomplete="off" >
        <div class="LoginBox">
            <span class="TtlBx">Welcome</span>
            <span class="SbTtlBx">Please login with your credentials.</span>
            <div class="mb-3 row">
                <span class="FormTxt">Email ID</span>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter  Email ID" />
                </div>
            </div>
            <div class="mb-3 row">
                <span class="FormTxt">Password</span>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" />
                </div>
            </div>
            <input type="submit" class="secondary_btn" value="Log In"/>
            <!-- <button type="button" onclick="location.href='<?= base_url() ; ?>/dashboard'"class="btn btn-primary">Submit</button> -->
            <a href="#" class="LgnLnkTxt">Forgot Password?</a>
        </div>
    </form>
    </div>
    <div class="LoginBg"></div>
    <div class="LoginLftDvdr"></div>
</body>

        <script>
    
    <?php /*function formValidation()
    {
                postUrl = '<?php echo base_url('loginAjax'); ?>';
                dataToPost = 
                {
                    email           :   $("#email").val(),
                    password        :   $("#password").val(),
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
    }*/?>

    $('#Login').validate({
    rules: {
        Email: { required: true,
                    email: true},
        Password: {required: true}
    },
    messages: {
        Email: {
            required: "Please enter Email ID",
            Email: "Please enter valid Email ID"
        },
        Password: "Please enter Password"
    },
    submitHandler: function(form) {
        return true;
    }
});
</script>
</html>
