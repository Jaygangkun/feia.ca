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
<script type="text/javascript">
  (function(g,r,s,f){g.grsfSettings={campaignId:"dq98lx",version:"2.0.0"};s=r.getElementsByTagName("head")[0];f=r.createElement("script");f.async=1;f.src="https://app.growsurf.com/growsurf.js"+"?v="+g.grsfSettings.version;f.setAttribute("grsf-campaign", g.grsfSettings.campaignId);!g.grsfInit?s.appendChild(f):"";})(window,document);
</script>
<div class="tech101signup-page-content">
    <div class="tech101signup-page-content-wrap">
        <div class="tech101signup-content-left" style="background-image:url(<?php echo get_template_directory_uri()?>/images/tech101signup-image-new.png);">
            <div class="tech101signup-page-rip" style="background-image:url(<?php echo get_template_directory_uri()?>/images/tech101signup-page-rip-new.png)"></div>
            <a class="tech101signup-logo-wrap" href="https://feia.ca/tech101/">
                <img class="tech101signup-logo__img-new" src="<?php echo get_template_directory_uri()?>/images/tech101-logo-dark .png">
            </a>
            <div class="tech101signup-learn-wrap">
                <div class="tech101signup-learn-wrap__wave--top" style="background-image:url(<?php echo get_template_directory_uri()?>/images/signup-wave-top.svg)"></div>
                <div class="tech101signup-learn-wrap__content">
                    <p class="tech101signup-learn__desc">Upgrade your digital skills with FREE certificate courses on Excel, Powerpoint, Microsoft Teams, and more!</p>
                    <div class="tech101signup-socials">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-excel.png">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-word.png">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-powerpoint.png">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-microsoft teams.png">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-google-calendar.png">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-gmail.png">
                        <img class="tech101signup-social__img" src="<?php echo get_template_directory_uri()?>/images/icon-zoom.png">
                    </div>
                    <p class="tech101signup-learn__desc2">Learn essential skills to help you land your next job.</p>
                    <ul class="tech101signup-learn-skills">
                        <li>
                            <img class="tech101signup-learn-skill__img" src="<?php echo get_template_directory_uri()?>/images/icon-check.svg">
                            <p>Beginner-friendly, bite-sized courses</p>
                        </li>
                        <li>
                            <img class="tech101signup-learn-skill__img" src="<?php echo get_template_directory_uri()?>/images/icon-check.svg">
                            <p>Certificate provided for each course</p>
                        </li>
                        <li>
                            <img class="tech101signup-learn-skill__img" src="<?php echo get_template_directory_uri()?>/images/icon-check.svg">
                            <p>Access to job opportunities and career tips in the Tech 101 Community group and weekly newsletters</p>
                        </li>
                        <li>
                            <img class="tech101signup-learn-skill__img" src="<?php echo get_template_directory_uri()?>/images/icon-check.svg">
                            <p>100% FREE</p>
                        </li>
                    </ul>
                    <div class="tech101signup-learn-btns">
                        <span class="tech101signup-learn-btn" id="btn_watch_video">Watch the video</span>
                        <a class="tech101signup-learn-btn tech101signup-learn-btn--fill" href="https://feia.ca/tech101/">Learn more</a>
                    </div>
                </div>
                <div class="tech101signup-learn-wrap__wave--bottom" style="background-image:url(<?php echo get_template_directory_uri()?>/images/signup-wave-bottom.png)"></div>
            </div>
        </div>
        <div class="tech101signup-content-right">
            <div class="tech101signup-step" step="1">
                <h2 class="tech101signup-title">Join Tech 101 today, <br>100% free.</h2>
                <p class="tech101signup-desc">Created by Fort Erie International Academy and Huawei Technologies, Tech 101 was designed to make digital literacy accessible to all Canadians.</p>
                <form name="tech101signup_form">
                    <div class="flex-row">
                        <div class="flex-col-50">
                            <div class="tech101signup-form-group">
                                <label>First Name</label>
                                <div class="tech101signup-form-input-wrap">
                                    <input type="text" id="first_name" name="first_name">
                                </div>
                            </div>
                        </div>
                        <div class="flex-col-50">
                            <div class="tech101signup-form-group">
                                <label>Last Name</label>
                                <div class="tech101signup-form-input-wrap">
                                    <input type="text" id="last_name" name="last_name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tech101signup-form-group">
                        <label>Email</label>
                        <div class="tech101signup-form-input-wrap">
                            <input type="text" id="email" name="email">
                        </div>
                    </div>
                    <div class="tech101signup-form-group">
                        <label>Postal Code (Optional)</label>
                        <div class="tech101signup-form-input-wrap">
                            <input type="text" id="post_code" name="post_code">
                        </div>
                    </div>

                    <div class="tech101signup-form-group">
                        <label class="container">Yes, I would like to receive exclusive opportunities, community updates, career advice, and more through the Tech 101 Newsletter!
                            <input type="checkbox" checked name="receive_update">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="tech101signup-form-group tech101signup-form-group-submit-btn">
                        <span class="tech101signup-form-btn" id="tech101signup_next_btn">Next</span>
                        <div>
                        <span class="tech101signup-desc">Already have an account?</span><a class="tech101signup-form-link" href="https://tech101.feia.ca/login">Login</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tech101signup-step" step="2" style="display: none">
                <h2 class="tech101signup-title">You're ready to begin!</h2>
                <p class="tech101signup-desc">Check your inbox for an "activate your account email" and set up your password.</p>
                <p class="tech101signup-desc">You should also receive a welcome email that will help you get started with everything Tech 101 has to offer.</p>
                <p class="tech101signup-desc">See you on the other side!</p>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_video">
    <div class="modal-wrap">
        <div class="modal-content">
            <div class="video-wrap">
                <iframe data-src="https://www.youtube.com/embed/cPr1fZ4CK8I"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    jQuery(document).ready(function(){
        
        jQuery(document).on('click', '#tech101signup_next_btn', function(){
            
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

            if (window.growsurf) {
                growsurf.triggerReferral(jQuery('#email').val());
            }
            
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php')?>',
                type: 'post',
                data: {
                    action: 'tech101_signup',
                    first_name: jQuery('#first_name').val(),
                    last_name: jQuery('#last_name').val(),
                    username: jQuery('#email').val(),
                    email: jQuery('#email').val(),
                    post_code: jQuery('#post_code').val(),
                },
                success: function(){
                    jQuery('.tech101signup-step[step="1"]').hide();
                    jQuery('.tech101signup-step[step="2"]').show();
                }
            })
        })

        jQuery(document).on('click', '#btn_watch_video', function(){
            jQuery('.video-wrap iframe').attr('src', jQuery('.video-wrap iframe').attr('data-src'));
            jQuery('body').addClass('show-modal');
        })

        jQuery(document).on('click', '.modal', function(){
            jQuery('body').removeClass('show-modal');
            jQuery('.video-wrap iframe').attr('src', '');
        })

        // document.addEventListener('click', e => {
        //     let clickedOutside = true;

        //     e.path.forEach(item => {
        //         if (!clickedOutside)
        //             return;

        //         if (item.className === 'video-wrap' || item.className === 'tech101signup-learn-btn')
        //             clickedOutside = false;
        //     });

        //     if (clickedOutside){
        //         // Make an action if it's clicked outside..
        //         jQuery('body').removeClass('show-modal');
        //         jQuery('.video-wrap iframe').attr('src', '');
        //     }
                
        // });
    })
</script>
