<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Sunrise Fund Limited
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="{{ asset('assets/img/logg.png') }}">
        <style>
            #loader {
                width: 70px;
                height: 70px;
                animation: loading 2s linear infinite;
            }

            .loader-logo{
                position: fixed;
                top: 50%;
                left: 50%;
                width: 50%;
                height: auto;
                transform: translate(-50%, -50%);
            }

            @keyframes loading {
                0% {
                    width: 0;
                }
                50% {
                    width: 50%;
                }
                100% {
                    width: 100%;
                }
            }
        </style>

<style>
    #loader {
      width: 70px;
      height: 70px;
      animation: loading 2s linear infinite;
    }

    .loader-logo {
      position: fixed;
      top: 50%;
      left: 50%;
      width: 50%;
      height: auto;
      transform: translate(-50%, -50%);
    }

    @keyframes loading {
      0% {
        width: 0;
      }
      50% {
        width: 50%;
      }
      100% {
        width: 100%;
      }
    }

    .navbar-brand {
      font-size: 1.4em;
    }
    .navbar-dark .navbar-nav a.nav-link {
      color: #ffffff;
      font-size: 1.1em;
    }
    .dropdown-menu {
      background-color: #F5F0E6;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      border: none;
      border-radius: 0;
      padding: 0.7em;
    }

    .btn-secondary {
        color: #767171;
        background-color: #e6d6ba !important;
        border-color: #e6d6ba !important;
    }

    @media only screen and (min-width: 992px) {
      .dropdown:hover .dropdown-menu {
        display: flex;
      }
      .dropdown-menu.show {
        display: flex;
      }
    }
    .dropdown-menu ul {
      list-style: none;
      padding: 0;
    }
    .dropdown-menu li .dropdown-item {
      color: #623e3e;
      background-color: #F5F0E6;
      font-size: 1em;
      padding: 0.5em 1em;
    }
    .dropdown-menu li .dropdown-item:hover {
      background-color: #212527;
    }

    select option:checked {
      background-color: #d1af6f !important;
      color: #000000 !important;
    }

    @media only screen and (max-width: 992px) {
      .dropdown-menu.show {
        flex-wrap: wrap;
        max-height: 350px;
        overflow-y: scroll;
      }
    }
    @media only screen and (min-width: 992px) and (max-width: 1140px) {
      .dropdown:hover .dropdown-menu {
        width: 40vw;
        flex-wrap: wrap;
      }
    }

    .dropdown-menu {
      border-radius: 0;
      border: none;
      padding: 0.5em;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    .dropdown-menu ul {
      list-style: none;
      padding: 0;
    }

    .dropdown-menu li a {
      color: rgb(248, 60, 60);
      padding: 0.5em 1em;
    }
    /* .dropdown-menu li:first-child a {
      font-weight: bold;
      font-size: 1.1em;
      color: #516beb;
    } */
    @media screen and (min-width: 993px) {
      .dropdown:hover .dropdown-menu {
        display: flex;
      }
      .dropdown-menu.show {
        display: flex;
      }
    }
    @media screen and (max-width: 992px) {
      .dropdown-menu.show {
        max-height: 60vh;
        overflow-y: scroll;
      }
    }
    select option {
    line-height: 20px;
}
  </style>
  <style>
.slider {
  position: relative;
  width: 100%;
  height: 80px;
  overflow: hidden;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.slide.active {
  opacity: 1;
  animation: slideAnimation 5s infinite;
}

@keyframes slideAnimation {
  0%, 100% {
    opacity: 0;
  }
  20%, 80% {
    opacity: 1;
  }
}


.js-cookie-consent {
  position: fixed;
  bottom: 0px;
  left: 0;
  right: 0;
  text-align: center;
  width: 100%;
  z-index: 9999;
  background-color: rgb(2, 53, 77);;
  border-color: #fffacc;
  border: solid 1px;
}
.cookie-consent__message{
  color:#fff!Important;
}

.js-cookie-consent-agree{
  background-color: #F5F0E6; 
  border-color: #F5F0E6; 
  padding:10px; 
  border-radius: 8px;
}

  </style>

    </head>
    <body style="background-color: #F5F0E6;">
        @include('cookie-consent::index')
        {{-- @include('custom-cookie-consent') --}}
        {{-- <div class="loading-bar" id="loader">
                <img src="{{ asset('logo.gif') }}" class="loader-logo" >
                <div class="progress"></div>
        </div> --}}
        <div class="col-lg-12 text-center">
            <div class="p-2">
                <img src="{{ asset('assets/img/SUNRISE4.png') }}" class="img-fluid" alt="" style="width:250px;">

            </div>
        </div>

        <!--  WELCOME TEXT --> 

        <div class="col-lg-12">
          <div class="slider text-center" style="color: rgb(0, 0, 0); padding-top:20px;">
            <div class="slide">
              <h1>Welcome to Sunrise Fund Limited</h1>
              <p style="color:#000000;">Please select your language and country</p>
            </div>
            <div class="slide">
              <h1>Bienvenue chez Sunrise Fund Limited</h1>
              <p style="color:#000000;">Veuillez sélectionner votre langue et votre pays</p>
            </div>
            <div class="slide">
              <h1>欢迎来到 Sunrise Fund Limited</h1>
              <p style="color:#000000;">请选择您的语言和国家</p>
            </div>
            <div class="slide">
              <h1>أهلاً بك في فانوارد الدولية </h1>
              <p style="color:#000000;">يرجى تحديد اللغة والبلد الخاص بك</p>
            </div>
            <div class="slide">
              <h1>Willkommen bei Sunrise Fund Limited</h1>
              <p style="color:#000000;">Bitte wählen Sie Ihre Sprache und Ihr Land aus</p>
            </div>
            <div class="slide">
              <h1>Welkom bij Sunrise Fund Limited</h1>
              <p style="color:#000000;">Selecteer alstublieft uw taal en land</p>
            </div>
            <div class="slide">
              <h1>Velkommen til Sunrise Fund Limited</h1>
              <p style="color:#000000;">Vennligst velg ditt språk og land</p>
            </div>
            <div class="slide">
              <h1>Välkommen till Sunrise Fund Limited</h1>
              <p style="color:#000000;">Vänligen välj ditt språk och land</p>
            </div>
            <div class="slide">
              <h1>Tervetuloa Sunrise Fund Limitediin</h1>
              <p style="color:#000000;">Valitse kieli ja maa, ole hyvä</p>
            </div>
            <div class="slide">
              <h1>Willkomme bi Sunrise Fund Limited</h1>
              <p style="color:#000000;">Bitte wählen Sie Ihre Sprache und Ihr Land us</p>
            </div>
            <div class="slide">
              <h1>Tere tulemast Sunrise Fund Limitedi</h1>
              <p style="color:#000000;">Palun valige oma keel ja riik</p>
            </div>
            <div class="slide">
              <h1>Sunrise Fund Limitedへようこそ</h1>
              <p style="color:#000000;">言語と国を選択してください</p>
            </div>
            <div class="slide">
              <h1>Velkommen til Sunrise Fund Limited</h1>
              <p style="color:#000000;">Vælg venligst dit sprog og dit land</p>
            </div>
          </div>
        </div>

        <!-- WELCOME TEXT ENDS -->

        <!-- DROPDOWN SECTION --> 

        <div class="col-lg-12" style="padding-top: 20px;">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row text-center"   style="background-color: #F5F0E6; border-radius: 25px; margin:10px;">
                        <div id="chartdiv"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 col-md-12 p-4">
                        <p style="color:#000000;">Please select your language :</p>
                        <select id="dropSelectLanguage" class="btn btn-secondary" style="text-align: left;" onchange="ChangeLanguage()">
                         
                          <option value="en"  @if (Session::get('locale') == 'en' || empty(Session::get('locale'))) selected @endif>English</option>
                          <option value="ar" @if (Session::get('locale') == 'ar') selected @endif>Arabic</option>
                          <option value="zh" @if (Session::get('locale') == 'zh') selected @endif>Chinese (Simplified)</option>
                          <option value="da" @if (Session::get('locale') == 'da') selected @endif>Danish</option>
                          <option value="nl" @if (Session::get('locale') == 'nl') selected @endif>Dutch</option>
                          <option value="et" @if (Session::get('locale') == 'et') selected @endif>Estonian</option>
                          <option value="fi" @if (Session::get('locale') == 'fi') selected @endif>Finnish</option>
                          <option value="fr" @if (Session::get('locale') == 'fr') selected @endif>French</option>
                          <option value="de" @if (Session::get('locale') == 'de') selected @endif>German</option>
                          <option value="de" @if (Session::get('locale') == 'it') selected @endif>Italian</option>
                          <option value="ja" @if (Session::get('locale') == 'ja') selected @endif>Japanese</option>
                          <option value="no" @if (Session::get('locale') == 'no') selected @endif>Norwegian</option>
                          <option value="pt" @if (Session::get('locale') == 'pt') selected @endif>Portugese</option>
                          <option value="es" @if (Session::get('locale') == 'es') selected @endif>Spanish</option>
                          <option value="sv" @if (Session::get('locale') == 'sv') selected @endif>Swedish</option>
                          <option value="gsw" @if (Session::get('locale') == 'gsw') selected @endif>Switzerland (Swiss German)</option>
                        </select>
                      <br><br>
                      


                   
                    </div>
                </div>
            </div>
        </div>

        <!-- DROPDOWN SECTION ENDS -->

        <!-- FOOTER --> 
        <div class="col-lg-12">
          <div class="row" style="color: #635d5d; font-size: 14px;">

              <p style="padding: 50px 150px 25px 150px; ">
                All the information, news, opinions, research, and analyses on this website are provided as a reference. All the information provided by Sunrise on this website is subject to change from time to time and up to date. By using Online platforms there is a possibility of communication failures, hardware, software, and connection issues, measures are in place to minimize the failure and delay, and users should be responsible and aware of this. Sunrise is not responsible for this communication failure. The unauthorized use, of all and/or any information on this website, is strictly prohibited. <br><br>
              </p>
              <p style="margin-left:auto; margin-right:auto; text-align:center;">Sunrise © {{ now()->year }}</p>
          </div>
        </div>
        <!-- FOOTER ENDS -->
        
    </body>
    <script>
       function countryEurope() {
        var eur = document.getElementById("countryEurope");
        var asia = document.getElementById("countryAsia");

        if (eur.style.display === "none") {
            eur.style.display = "block";
            asia.style.display = "none";
        } else {
            eur.style.display = "none";
            asia.style.display = "none";
        }
      }
      function countryAsia() {
        var eur = document.getElementById("countryEurope");
        var asia = document.getElementById("countryAsia");

        if (asia.style.display === "none") {
            eur.style.display = "none";
            asia.style.display = "block";
        } else {
            eur.style.display = "none";
            asia.style.display = "none";
        }
      }
    </script>
     <script>
        var slides = document.querySelectorAll('.slide');
        var currentSlide = 0;
      
        function showSlide(index) {
          slides[currentSlide].classList.remove('active');
          slides[index].classList.add('active');
          currentSlide = index;
        }
      
        function nextSlide() {
          var nextIndex = (currentSlide + 1) % slides.length;
          showSlide(nextIndex);
        }
      
        // Start the slideshow
        showSlide(0);
        setInterval(nextSlide, 5000);
        </script>

    <!-- Map -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        #chartdiv {
          width: 70%;
          height: 400px;
        }
        </style>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Dropdown -->
    <script>
      function ChangeLanguage() {
        var selectLanguage = document.getElementById("dropSelectLanguage").value;
        var link = document.getElementById("myLink");
        var appUrl = "{{ env('APP_URL') }}";

        if (selectLanguage === "en") {
          // alert('English');
          window.location.href = appUrl + "/lang/en/";
        } else if (selectLanguage === "ar") {
          // alert('Arabic');
          window.location.href = appUrl + "/lang/ar/";
        } else if (selectLanguage === "zh") {
          // alert('Chinese');
          window.location.href = appUrl + "/lang/zh/";
        } else if (selectLanguage === "da") {
          // alert('Danish');
          window.location.href = appUrl + "/lang/da/";
        } else if (selectLanguage === "nl") {
          // alert('Dutch');
          window.location.href = appUrl + "/lang/nl/";
        } else if (selectLanguage === "et") {
          // alert('Estonian');
          window.location.href = appUrl + "/lang/et/";
        } else if (selectLanguage === "fi") {
          // alert('Finnish');
          window.location.href = appUrl + "/lang/fi/";
        } else if (selectLanguage === "fr") {
          // alert('French');
          window.location.href = appUrl + "/lang/fr/";
        } else if (selectLanguage === "de") {
          // alert('German');
          window.location.href = appUrl + "/lang/de/";
        } else if (selectLanguage === "it") {
          // alert('Italian');
          window.location.href = appUrl + "/lang/it/";
        } else if (selectLanguage === "ja") {
          // alert('Japanese');
          window.location.href = appUrl + "/lang/ja/";
        } else if (selectLanguage === "no") {
          // alert('Norwegian');
          window.location.href = appUrl + "/lang/no/";
        } else if (selectLanguage === "pt") {
          // alert('Portugese');
          window.location.href = appUrl + "/lang/pt/";
        } else if (selectLanguage === "es") {
          // alert('Spanish');
          window.location.href = appUrl + "/lang/es/";
        } else if (selectLanguage === "sv") {
          // alert('Swedish');
          window.location.href = appUrl + "/lang/sv/";
        } else if (selectLanguage === "gsw") {
          // alert('Switzerland (Swiss German)');
          window.location.href = appUrl + "/lang/gsw/";
        } else{
          // alert('English');
          window.location.href = appUrl + "/lang/en/";
        }
      }
    </script>



  


<!-- Styles -->
<style>
  #chartdiv {
    width: 100%;
    height: 400px;
  }
  </style>
  
  <!-- Resources -->
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  
  <!-- Chart code -->
  <script>
  am5.ready(function() {
  
  // Create root element
  // https://www.amcharts.com/docs/v5/getting-started/#Root_element
  var root = am5.Root.new("chartdiv");
  
   /* remove amchart logo */
   root._logo.dispose();
   
  // Set themes
  // https://www.amcharts.com/docs/v5/concepts/themes/
  root.setThemes([
    am5themes_Animated.new(root)
  ]);
  
  
  // Create the map chart
  // https://www.amcharts.com/docs/v5/charts/map-chart/
  var chart = root.container.children.push(am5map.MapChart.new(root, {
    panX: "rotateX",
    projection: am5map.geoNaturalEarth1()
  }));
  
  
  // Create polygon series for continents
  // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
  var continentSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_continentsLow,
    exclude: ["antarctica"]
  }));
  
  continentSeries.mapPolygons.template.setAll({
    tooltipText: "{name}",
    interactive: true,
    fill: am5.color("#d9d2c5") 
  });
  
  continentSeries.mapPolygons.template.states.create("hover", {
    fill: am5.color("#d1af6f") 
  });
  
  // Set up zooming in on clicked continent
  continentSeries.mapPolygons.template.events.on("click", function (ev) {
  continentSeries.zoomToDataItem(ev.target.dataItem); 
  continentSeries.hide();
  countrySeries.show();
  homeButton.show();
  

    // Create point series for markers
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
    var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
    var colorset = am5.ColorSet.new(root, {});

    pointSeries.bullets.push(function() {
        var container = am5.Container.new(root, {
            tooltipText: "{title}",
            cursorOverStyle: "pointer"
          });

        container.events.on("click", (e) => {
            window.location.href = e.target.dataItem.dataContext.url;
        });



        var circle = container.children.push(
            am5.Circle.new(root, {
                radius: 4,
                tooltipY: 0,
                // fill: colorset.next(),
                fill: am5.color("#e6d6ba"),
                strokeOpacity: 0
            })
        );


        var circle2 = container.children.push(
            am5.Circle.new(root, {
                radius: 4,
                tooltipY: 0,
                // fill: colorset.next(),
                fill: am5.color("#c7b189"),
                strokeOpacity: 0,
                tooltipText: "{title}"
            })
        );

        circle.animate({
            key: "scale",
            from: 1,
            to: 5,
            duration: 600,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity
        });
        circle.animate({
            key: "opacity",
            from: 1,
            to: 0.1,
            duration: 600,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity
        });

        return am5.Bullet.new(root, {
            sprite: container
        });
    });

    var cities = [
        {
            title: "Australia",
            latitude: -25.2743,
            longitude: 133.7751,
            url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "China",
              latitude: 35.8616,
              longitude: 104.1953,
              url: "https://sunrisefundlimited.com/lang/zh"
        },
        {
              title: "Japan",
              latitude: 36.2048,
              longitude: 138.2529,
              url: "https://sunrisefundlimited.com/lang/ja"
        },
        {
              title: "New Zealand",
              latitude: -40.9005,
              longitude: 174.8859,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "United Arab Emirates",
              latitude: 23.4240,
              longitude: 53.8478,
              url: "https://sunrisefundlimited.com/lang/ar"
        },
        {
              title: "Austria",
              latitude: 47.5162,
              longitude: 14.5500,
              url: "https://sunrisefundlimited.com/lang/de"
        },
        {
              title: "Belgium",
              latitude: 50.5038,
              longitude: 4.4699,
              url: "https://sunrisefundlimited.com/lang/nl"
        },
        {
              title: "Czech Republic",
              latitude: 49.8174,
              longitude: 15.4729,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Denmark",
              latitude: 56.2639,
              longitude: 9.5017,
              url: "https://sunrisefundlimited.com/lang/da"
        },
        {
              title: "Estonia",
              latitude: 58.5952,
              longitude: 25.0136,
              url: "https://sunrisefundlimited.com/lang/et"
        },
        {
              title: "Finland",
              latitude: 61.9241,
              longitude: 25.7481,
              url: "https://sunrisefundlimited.com/lang/fi"
        },
        {
              title: "France",
              latitude: 46.2276,
              longitude: 2.2137,
              url: "https://sunrisefundlimited.com/lang/fr"
        },
        {
              title: "Germany",
              latitude: 51.1656,
              longitude: 10.4515,
              url: "https://sunrisefundlimited.com/lang/de"
        },
        {
              title: "Greece",
              latitude: 39.0742,
              longitude: 21.8243,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Hungary",
              latitude: 47.1624,
              longitude: 19.5033,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Iceland",
              latitude: 64.9630,
              longitude: -19.0208,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Ireland",
              latitude: 53.4129,
              longitude: -8.2438,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Italy",
              latitude: 41.8719,
              longitude: 12.5673,
              url: "https://sunrisefundlimited.com/lang/it"
        },
        {
              title: "Liechtenstein",
              latitude: 47.166,
              longitude: 9.5553,
              url: "https://sunrisefundlimited.com/lang/de"
        },
        {
              title: "Luxembourg",
              latitude: 49.8152,
              longitude: 6.1295,
              url: "https://sunrisefundlimited.com/lang/fr"
        },
        {
              title: "Netherlands",
              latitude: 52.1326,
              longitude: 5.2912,
              url: "https://sunrisefundlimited.com/lang/nl"
        },
        {
              title: "Norway",
              latitude: 60.4720,
              longitude: 8.4689,
              url: "https://sunrisefundlimited.com/lang/no"
        },
        {
              title: "Poland",
              latitude: 51.9194,
              longitude: 19.1451,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Portugal",
              latitude: 39.3998,
              longitude: -8.2244,
              url: "https://sunrisefundlimited.com/lang/pt"
        },
        {
              title: "Slovakia",
              latitude: 48.6690,
              longitude: 19.6990,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Slovenia",
              latitude: 46.1512,
              longitude: 14.9954,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Spain",
              latitude: 40.4636,
              longitude: -3.7492,
              url: "https://sunrisefundlimited.com/lang/es"
        },
        {
              title: "Sweden",
              latitude: 60.1281,
              longitude: 18.6435,
              url: "https://sunrisefundlimited.com/lang/sv"
        },
        {
              title: "Switzerland",
              latitude: 46.8181,
              longitude: 8.2275,
              url: "https://sunrisefundlimited.com/lang/de"
        },
        {
              title: "United Kingdom",
              latitude: 55.3780,
              longitude: -3.4359,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "Brazil",
              latitude: -14.2350,
              longitude: -51.9252,
              url: "https://sunrisefundlimited.com/lang/pt"
        },
        {
              title: "Canada",
              latitude: 56.1303,
              longitude: -106.3467,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "United States of America",
              latitude: 37.0902,
              longitude: -95.7128,
              url: "https://sunrisefundlimited.com/lang/en"
        },
        {
              title: "South Africa",
              latitude: -30.5594,
              longitude: 22.9375,
              url: "https://sunrisefundlimited.com/lang/en"
        }
    ];

    for (var i = 0; i < cities.length; i++) {
        var city = cities[i];
        addCity(city.longitude, city.latitude, city.title, city.url);
    }

    function addCity(longitude, latitude, title, url) {
        pointSeries.data.push({
            url: url,
            geometry: {
                type: "Point",
                coordinates: [longitude, latitude]
            },
            title: title
        });
    }

    homeButton.events.on("click", function() {
    chart.goHome();
    continentSeries.show();
    countrySeries.hide();
    pointSeries.hide();
    homeButton.hide();
    });
  });

// home button
var homeButton = chart.children.push(am5.Button.new(root, {
  paddingTop: 10,
  paddingBottom: 10,
  x: am5.percent(100),
  centerX: am5.percent(100),
  opacity: 0,
  interactiveChildren: false,
  icon: am5.Graphics.new(root, {
    svgPath: "M16,8 L14,8 L14,16 L10,16 L10,10 L6,10 L6,16 L2,16 L2,8 L0,8 L8,0 L16,8 Z M16,8",
    fill: am5.color("#c7b189")
  }),
  background: am5.RoundedRectangle.new(root, {
    fill: am5.color("#EFE8DC"),     // Background color here
    cornerRadiusTL: 6,
    cornerRadiusTR: 6,
    cornerRadiusBL: 6,
    cornerRadiusBR: 6
  })
}));


  
  // Create polygon series for countries
  // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
// List of selected country codes (ISO 3166-1 alpha-2 codes)
// var selectedCountries = ["US", "CA", "BR", 
//                         "AU", "CN", "JP", "NZ", "AE",
//                         "AT", "BE", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IS", "IT", "LI", "LU", "NL", "NO", "PL",
//                         "PT", "SK", "SI", "ES", "SE", "CH", "GB", 
//                         "ZA"
//                         ]

// Define a map of country codes to their respective URLs
// var countryUrls = {
//   // united states
//   "US": "https://sunrisefundlimited.com/lang/en",
//   // canada
//   "CA": "https://sunrisefundlimited.com/lang/en",
//   // brazil
//   "BR": "https://sunrisefundlimited.com/lang/pt",
//   // australia
//   "AU": "https://sunrisefundlimited.com/lang/en",
//   // china
//   "CN": "https://sunrisefundlimited.com/lang/zh",
//   // japan
//   "JP": "https://sunrisefundlimited.com/lang/ja",
//   // new zealand
//   "NZ": "https://sunrisefundlimited.com/lang/en",
//   // uae
//   "AE": "https://sunrisefundlimited.com/lang/ar",
//   // austria
//   "AT": "https://sunrisefundlimited.com/lang/de",
//   // belgium
//   "BE": "https://sunrisefundlimited.com/lang/nl",
//   //czech republic
//   "CZ": "https://sunrisefundlimited.com/lang/en",
//   // denmark
//   "DK": "https://sunrisefundlimited.com/lang/da",
//   // estonia
//   "EE": "https://sunrisefundlimited.com/lang/et",
//   // finland
//   "FI": "https://sunrisefundlimited.com/lang/fi",
//   // france
//   "FR": "https://sunrisefundlimited.com/lang/fr",
//   // germany
//   "DE": "https://sunrisefundlimited.com/lang/de",
//   // greece
//   "GR": "https://sunrisefundlimited.com/lang/en",
//   // hungary
//   "HU": "https://sunrisefundlimited.com/lang/en",
//   // iceland
//   "IS": "https://sunrisefundlimited.com/lang/en",
//   // italy
//   "IT": "https://sunrisefundlimited.com/lang/it",
//   // liechtenstein
//   "LI": "https://sunrisefundlimited.com/lang/de",
//   // luxemborg
//   "LU": "https://sunrisefundlimited.com/lang/fr",
//   // netherlands
//   "NL": "https://sunrisefundlimited.com/lang/nl",
//   // norway
//   "NO": "https://sunrisefundlimited.com/lang/no",
//   // poland
//   "PL": "https://sunrisefundlimited.com/lang/en",
//   // portugal
//   "PT": "https://sunrisefundlimited.com/lang/pt",
//   // slovakia
//   "SK": "https://sunrisefundlimited.com/lang/en",
//   // slovenia
//   "SI": "https://sunrisefundlimited.com/lang/en",
//   // spain
//   "ES": "https://sunrisefundlimited.com/lang/es",
//   // sweden
//   "SE": "https://sunrisefundlimited.com/lang/sv",
//   // switzerland
//   "CH": "https://sunrisefundlimited.com/lang/de",
//   // uk
//   "GB": "https://sunrisefundlimited.com/lang/en",
//   // south africa
//   "ZA": "https://sunrisefundlimited.com/lang/en",
// };

// Filter the countries from the am5geodata_worldLow GeoJSON
// var selectedCountryFeatures = am5geodata_worldLow.features.filter(function(feature) {
//   return selectedCountries.includes(feature.id);
// });

// Create polygon series for selected countries
// var countrySeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
//   geoJSON: {
//     type: "FeatureCollection",
//     features: selectedCountryFeatures.map(function(feature) {
//       return {
//         type: "Feature",
//         geometry: feature.geometry,
//         properties: {
//           name: feature.properties.name,
//           url: countryUrls[feature.id] 
//         }
//       };
//     })
//   },
//   exclude: ["AQ"],
//   visible: false
// }));

var countrySeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
  geoJSON: am5geodata_worldLow,
  exclude: ["AQ"],
  visible: false
}));
  
// Set up click event for the map polygons
countrySeries.mapPolygons.template.events.on("click", function(ev) {
  var url = ev.target.dataItem.dataContext.url;
  if (url) {
    window.location.href = url; 
  }
});
  
  countrySeries.mapPolygons.template.setAll({
    tooltipText: "{name}",
    interactive: true,
    fill: am5.color("#d9d2c5")
  });
  
  countrySeries.mapPolygons.template.states.create("hover", {
    fill: am5.color("#d1af6f") 
  });


      }); // end am5.ready()
  </script>
    </html>
