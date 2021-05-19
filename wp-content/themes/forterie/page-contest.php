<?php
/**
* Template Name: Tech101 Contest Page
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
<div class="tech101signup-page-content tech101contest-page-content">
    <div class="tech101signup-page-content-wrap">
        <div class="tech101signup-content-left">
            <a class="tech101signup-logo-wrap" href="https://feia.ca/tech101/">
                <img class="tech101contest-logo__img-new" src="<?php echo get_template_directory_uri()?>/images/tech101-logo-new.png">
            </a>
            <div class="tech101signup-learn-wrap">
                <img class="tech101contest-img" src="<?php echo get_template_directory_uri()?>/images/tech101-content-img.jpg">
                <p class="tech101contest__desc1"><b>Register for Tech 101 and you'll automatically be entered to win a $200 Amazon gift card.</b> We draw a new winner every month</p>
                <p class="tech101contest__desc1">Tech 101 is free platform offering <b>1-hour courses</b> on essential digital skills such as Microsoft Excel, Zoom, and cybersecurity.</p>
                <p class="tech101contest__desc2">Contest open to residents of Canada, excluding Quebec, aged 18 or older. No purchase necessary.</p>
                
                <div class="tech101contest-learn-btns">
                    <a class="tech101signup-learn-btn tech101signup-learn-btn--fill" href="https://feia.ca/tech101/">Learn more about Tech 101</a>
                </div>
            </div>
        </div>
        <div class="tech101signup-content-right">
            <div class="tech101signup-step" step="1">
                <h2 class="tech101signup-title">Join Tech 101 today, <br>100% free.</h2>
                <p class="tech101signup-desc">Upgrade your digital skills with FREE certificate courses on Excel, PowerPoint, Microsoft Teams, and more!</p>
                <form name="tech101signup_form">
                    <div class="flex-row" style="display: none">
                        <div class="flex-col-50">
                            <div class="tech101signup-form-group">
                                <label>First Name</label>
                                <div class="tech101signup-form-input-wrap">
                                    <input type="text" id="first_name" name="first_name" value="first">
                                </div>
                            </div>
                        </div>
                        <div class="flex-col-50">
                            <div class="tech101signup-form-group">
                                <label>Last Name</label>
                                <div class="tech101signup-form-input-wrap">
                                    <input type="text" id="last_name" name="last_name" value="last">
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
                    <div class="tech101signup-form-group" style="display: none">
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
                        <span class="tech101signup-form-btn" id="tech101signup_next_btn">Submit</span>
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

    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    jQuery(document).ready(function(){
        
        jQuery(document).on('click', '#tech101signup_next_btn', function(){
            
            // if(jQuery('#first_name').val() == ''){
            //     alert('Please Input First Name');
            //     jQuery('#first_name').focus();
            //     return;
            // }

            // if(jQuery('#last_name').val() == ''){
            //     alert('Please Input Last Name');
            //     jQuery('#last_name').focus();
            //     return;
            // }

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

            if (window.growsurf && getParameterByName('grsf') != null && getParameterByName('grsf') != '') {
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
                    // jQuery('.tech101signup-step[step="1"]').hide();
                    // jQuery('.tech101signup-step[step="2"]').show();
                    location.href= "<?php echo get_site_url()?>/tech101signupconfirmation";
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
