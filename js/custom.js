/*var wid = $(window).width(),
hei = $(window).height();
alert("width:" + wid +"px and height: " + hei + "px.")
*/

$(document).ready(function () {
  /*function bannerheight(){
      var head_height = $("header").outerHeight(true);
      $("body").css("padding-top",head_height + "px")
    $(".banner-sec").css("min-height","calc(100vh - " + head_height + "px)")
  };
  bannerheight();
  $(window).resize(bannerheight);*/

  $(".navbar-toggler").click(function () {
    $('html').toggleClass('show-menu');
  });

  function scrolling() {
    var sticky = $('header'),
      scroll = $(window).scrollTop();

    if (scroll >= 15) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  };
  scrolling();
  $(window).scroll(scrolling);

  // hide #back-top first
  $("#myBtn").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#myBtn').fadeIn();
      } else {
        $('#myBtn').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#myBtn').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 1000);
      return false;
    });
  });

});


//cursor





$('.nav-item').click(function () {

  //console.log("Clicked");
  $('.nav-item.active').removeClass('active');
  $(this).addClass('active');
});








$("#slider").on("input change", (e) => {
  const sliderPos = e.target.value;
  // Update the width of the foreground image
  $('.foreground-img').css('width', `${sliderPos}%`)
  // Update the position of the slider button
  $('.slider-button').css('left', `calc(${sliderPos}% - 0px)`)
});



const nav = document.querySelector(".nav-container");

if (nav) {
  const toggle = nav.querySelector(".nav-toggle");

  if (toggle) {
    toggle.addEventListener("click", () => {
      if (nav.classList.contains("is-active")) {
        nav.classList.remove("is-active");
      }
      else {
        nav.classList.add("is-active");
      }
    });

    nav.addEventListener("blur", () => {
      nav.classList.remove("is-active");
    });
  }
}


$('.thumbnail').on('click', function () {
  var clicked = $(this);
  var newSelection = clicked.data('big');
  var $img = $('.primary').css("background-image", "url(" + newSelection + ")");
  clicked.parent().find('.thumbnail').removeClass('selected');
  clicked.addClass('selected');
  $('.primary').empty().append($img.hide().fadeIn('slow'));
});


$('#collection').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/whitebgleft.svg'>", "<img src='assets/images/whitebgright.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    767: {
      items: 2
    },
    600: {
      items: 3
    },
    1201: {
      items: 4
    }
  }
})


$('#road').on('initialized.owl.carousel changed.owl.carousel', function (e) {
  if (!e.namespace) {
    return;
  }
  var carousel = e.relatedTarget;
  $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/0' + carousel.items().length);
})
$('#road').owlCarousel({
  loop: true,
  nav: true,
  dots: false,
  margin: 10,
  autoplayTimeout: 4000,
  smartSpeed: 400,
  center: true,
  navText: ['&#8592;', '&#8594;'],

  responsive: {
    0: {
      items: 1,
      stagePadding: 50,
    },
    577: {
      items: 1,
      stagePadding: 150,
    },
    993: {
      items: 1,
      stagePadding: 250,
    },
    1201: {
      items: 1,
      stagePadding: 350,
    },
    1601: {
      items: 1,
      stagePadding: 450,
    }
  }
});

$('#event').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/blackbgleft.svg'>", "<img src='assets/images/black1.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})
$('#work').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/whitebgleft.svg'>", "<img src='assets/images/whitebgright.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})
$('#display').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/storage/left.svg'>", "<img src='assets/images/storage/right.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
$('#displaysecond').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/storage/left.svg'>", "<img src='assets/images/storage/right.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})

$('#gallery').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/blackbgleft.svg'>", "<img src='assets/images/black1.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
$('#guide').owlCarousel({
  loop: true,
  // margin: 10,
  nav: true,
  dots: false,
  autoplay: false,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/whitebgleft.svg'>", "<img src='assets/images/whitebgright.svg'>"],

  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})


// fullpage.initialize('#fullpage', {
// 		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
// 		menu: '#menu',
// 		css3:true
// 	});



$('#brandlogo').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayHoverPause: false,
  navText: ["<img src='assets/images/blackbgleft.svg'>", "<img src='assets/images/black1.svg'>"],

  responsive: {
    0: {
      items: 2
    },
    400: {
      items: 3
    },
    600: {
      items: 4
    },
    1000: {
      items: 5
    },
    1600: {
      items: 7
    }
  }
})