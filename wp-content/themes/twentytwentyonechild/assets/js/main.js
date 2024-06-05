$(document).ready(function () {
  $(".home_banner_slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
  });
});

$(document).ready(function () {
  $(".inner_reviews ").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });
});

$(document).ready(function () {
  $(".main_team ").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
        responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });
});

$(document).ready(function () {
  $(".right_sec_slider").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true
  });
});


// Faq accordion //
document.addEventListener('DOMContentLoaded', function () {
  const accordionItems = document.querySelectorAll('.faq-item');

  accordionItems.forEach(function (item) {
      item.addEventListener('click', function () {
          this.classList.toggle('active');
      });
  });
});


// Hamburger //
$(".hamburger").click(function(){
  $("#menu-header-menu").toggleClass("is-active");
  $(this).toggleClass("is-active");
});


// Counter//
$(document).ready(function(){
  $('#counter .count').each(function() {
      var $this = $(this);
      var countTo = $this.attr('data-number');
      
      if ($this.closest('.item').hasClass('no-add-pluse')) {
         $({ countNum: $this.text() }).animate({ countNum: countTo },
              {
                  duration: 2000,
                  easing: 'swing',
                  step: function () {
                      $this.text(Math.floor(this.countNum) + '');
                  },
                  
              });
      } else {
          if (countTo === '24/7') {
              $this.text('24/7');
          } else {
              $({ countNum: $this.text() }).animate({ countNum: countTo },
              {
                  duration: 2000,
                  easing: 'swing',
                  step: function () {
                      $this.text(Math.floor(this.countNum) + '+');
                  },
                  complete: function () {
                      $this.text(Math.floor(this.countNum) + '+');
                  }
              });
          }
      }
  });
});


// ----------------- Sticky header menu bar------------------------- 

 $(window).scroll(function(){
      if($(this).scrollTop() > 40){
          $('.header_wrap').addClass('sticky')
      } else{
          $('.header_wrap').removeClass('sticky')
      }
  });

// ----------------- Sticky header menu bar------------------------- 


// ----------------- Arrow Scroll to Top ------------------------- 

jQuery(document).ready(function(){
    //console.log('ddddd');
    jQuery('.arrow_img').click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
});

// ----------------- Arrow Scroll to Top ------------------------- 




