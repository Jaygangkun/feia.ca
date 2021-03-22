
var $ = jQuery.noConflict();
$(document).ready(function() {

  var blog_post_title = $('.entry-content .vce-row-container').find('.blog-post-title')

  blog_post_title.parent('div').addClass('recent-post');

  $(".vce-text-block.italic-text").equalHeight();
  $(".blog-cnt p").equalHeight();
  $(".blog-cnt h3").equalHeight();

    $('.header-main .menu').responsiveMenu({
        'menuIcon_text': '',
        onMenuopen: function() {}
    });

    $('.content-slide').owlCarousel({
        items:1,
        margin:0,
        nav:true,
        dots:false,
        loop:true,

    })
        var outerheight = $(".key-facts .vce-single-image-inner").outerHeight();
      $(".key-fact-hover").css("height", outerheight);
      
      /*
        Blogs Load More.
      */
      var blogs_page = 2;
      $(document).on('click', '.load-more-blogs', function () {
            $(this).text('LOADING..');
            $.ajax({
                datatype: 'JSON',
                url: jmax.ajaxurl,
                type: 'post',
                data: {
                    'action': 'blogs_load_more',
                    'paged': blogs_page
                },
                success: function (response) {    
                    blogs_page++;
                    $('.load-more-blogs').text('LOAD MORE');
                    $(".blog-post").append(response.data.loaded_content);
                    if (response.data.hide_button == 'true') {
                        $('.load-more-blogs').hide();
                    } else {
                        $('.load-more-blogs').show();
                    }
                },
            });
        });

});
$(function () {
    jQuery('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        jQuery.get(imgURL, function (data) {
            var $svg = jQuery(data).find('svg');
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }
            $svg = $svg.removeAttr('xmlns:a');
            $img.replaceWith($svg);
        }, 'xml');
    });
});
jQuery(window).scroll(function () {});

$(window).resize(function () {
   $(".vce-text-block.italic-text").equalHeight();
   $(".blog-cnt p").equalHeight();
   $(".blog-cnt h3").equalHeight();

});

$(window).on("resize", function() {

    var outerheight = $(".key-facts .vce-single-image-inner").outerHeight();
      $(".key-fact-hover").css("height", outerheight);
      

   });

/*equal height*/

;
(function ($) {
  $.fn.equalHeight = function (option) {
    var $this = this
    var get_height = function () {
      var maxheight = 0;
      setTimeout(function () {
        $this.css("height", "")
        $this.each(function () {
          maxheight = $(this).outerHeight() > maxheight ? $(this).outerHeight() : maxheight;
        })
        $this.css('height', maxheight + 'px');
      }, 501)
    }
    var init = function () {
      get_height()
      $(window).bind("resize", get_height)
    }
    $this.destroy = function () {
      $this.css("height", "auto")
      $(window).unbind("resize", get_height)
    }
    init()
    return this
  }
})(jQuery);
/*equal height end*/