<?php
/**
* Template Name: Tech101 Signup Page
*
*/

get_header();
?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style type="text/css">
    .vcv-header{
        display: none;
    }
</style>
<div class="tech101signup-header">
    <div class="tech101signup-header-content">
        <a href="https://feia.ca/tech101/"><img class="tech101signup-header-logo__img" src="<?php echo get_template_directory_uri()?>/images/tech101-logo.png"></a>
    </div>
</div>
<div class="tech101signup-page-content">
    <div class="tech101signup-page-content-wrap">
        <div class="tech101signup-content-left" style="background-image:url(<?php echo get_template_directory_uri()?>/images/tech101signup-image.jpg);">
            <div class="tech101signup-page-rip" style="background-image:url(<?php echo get_template_directory_uri()?>/images/tech101signup-page-rip-new.png)"></div>
        </div>
        <div class="tech101signup-content-right">
            <div class="tech101signup-step" step="1">
                <h2 class="tech101signup-title">Join Tech 101 today, <br>100% free.</h2>
                <p class="tech101signup-desc">Sign up now and gain full access to Tech 101's courses and community features! Simple enter your details below and we will send you a link to your account through your email.</p>
                <div class="flex-row">
                    <div class="flex-col-50">
                        <div class="tech101signup-form-group">
                            <label>First Name</label>
                            <div class="tech101signup-form-input-wrap">
                                <input type="text" id="first_name">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-50">
                        <div class="tech101signup-form-group">
                            <label>Last Name</label>
                            <div class="tech101signup-form-input-wrap">
                                <input type="text" id="last_name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tech101signup-form-group">
                    <label>Username</label>
                    <div class="tech101signup-form-input-wrap">
                        <input type="text" id="username">
                    </div>
                </div>
                <div class="tech101signup-form-group">
                    <label>Email</label>
                    <div class="tech101signup-form-input-wrap">
                        <input type="text" id="email">
                    </div>
                </div>
                <div class="tech101signup-form-group">
                    <label>Postal Code (Optional)</label>
                    <div class="tech101signup-form-input-wrap">
                        <input type="text" id="post_code">
                    </div>
                </div>

                <div class="tech101signup-form-group">
                    <label class="container">Yes, I would like to receive exclusive opportunities, community updates, career advice, and more through the Tech 101 Newsletter!
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="tech101signup-form-group tech101signup-form-group-submit-btn">
                    <span class="tech101signup-form-btn" id="tech101signup_next_btn">Next</span>
                    <div>
                    <span class="tech101signup-desc">Already have an account?</span><a class="tech101signup-form-link" href="https://tech101.feia.ca/login">Login</a>
                    </div>
                </div>
            </div>
            <div class="tech101signup-step" step="2" style="display: none">
                <h2 class="tech101signup-title">You're ready to begin!</h2>
                <p class="tech101signup-desc">Check your inbox for an "activate your account email" and set up your password.</p>
                <p class="tech101signup-desc">You should also receivea welcome email that will help you get started with everything Tech 101 has to offer.</p>
                <p class="tech101signup-desc">See you on the other side!</p>
            </div>
        </div>
    </div>
</div>
<div class="tech101signup-footer">
    <div class="tech101signup-footer-wrap">
        <p id="tech101signup_footer_desc">By creating an account, you agree to the <a class="tech101signup-footer-link" href="https://tech101.feia.ca/tos">Terms of Service</a>, and acknowledge that Tech 101 may process your personal data in accordance with the <a class="tech101signup-footer-link" href="https://tech101.feia.ca/privacy">Privacy Policy.</a></p>
    </div>
</div>
<script type="text/javascript">
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    jQuery(document).ready(function(){
        
        jQuery(document).on('click', '#tech101signup_next_btn', function(){

            jQuery('.tech101signup-step[step="1"]').hide();
                    jQuery('.tech101signup-step[step="2"]').show();
                    return;
            if(jQuery('#first_name').val() == ''){
                alert('Please Input First Name');
                jQuery('#first_name').focus();
                return;
            }

            if(jQuery('#last_name').val() == ''){
                alert('Please Input Last Name');
                jQuery('#last_name').focus();
                return;
            }

            if(jQuery('#username').val() == ''){
                alert('Please Input Username');
                jQuery('#username').focus();
                return;
            }

            if(jQuery('#email').val() == ''){
                alert('Please Input Email');
                jQuery('#email').focus();
                return;
            }

            if(!validateEmail(jQuery('#email').val())){
                alert('Please Input Available Email');
                jQuery('#email').focus();
                return;
            }

            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php')?>',
                type: 'post',
                data: {
                    action: 'tech101_signup',
                    first_name: jQuery('#first_name').val(),
                    last_name: jQuery('#last_name').val(),
                    username: jQuery('#username').val(),
                    email: jQuery('#email').val(),
                    post_code: jQuery('#post_code').val(),
                },
                success: function(){
                    jQuery('.tech101signup-step[step="1"]').hide();
                    jQuery('.tech101signup-step[step="2"]').show();
                }
            })
        })
    })
</script>
