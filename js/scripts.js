$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
});

// WEATHER START //
var mainWeather = {
    init: function() {
      return mainWeather.getWeather();
  },

  getWeather: function() {
      $.get(
      'http://api.openweathermap.org/data/2.5/weather?q=' + "Henichesk" + "," + 'UA' + "&APPID=90218217a5640940a557861baa80b780", 
      function(data) {
        var json = {
          json: JSON.stringify(data),
          delay: 1
        };
        echo(json);
      }
    );
  },
  //Prints result from the weatherapi, receiving as param an object
  createWeatherWidg: function(data) {
    return "<div class='pressure'>Температура: " + (data.main.temp - 273.15).toFixed(2) + " C</div>"
  }
};

var echo = function(dataPass) {
  $.ajax({
    type: "POST",
    url: 'http://api.openweathermap.org/data/2.5/weather?q=' + "Henichesk" + "," + 'UA' + "&APPID=90218217a5640940a557861baa80b780",
    data: dataPass,
    cache: false,
    success: function(json) {
      var wrapper = $("#weather");
      wrapper.empty();
      wrapper.append(mainWeather.createWeatherWidg(json));
    }
  });
};

mainWeather.init();
// WEATHER END //

//SWIPER SLIDER

  var mySwiper = new Swiper ('.swiper-now-watch', {
    slidesPerView: 'auto',
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 1000,
    },
    navigation: {
      nextEl: '.swiper-now-watch-button-next',
      prevEl: '.swiper-now-watch-button-prev',
    },
  });