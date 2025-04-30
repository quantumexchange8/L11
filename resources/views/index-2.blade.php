<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Vanward International
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
      background-color: #03BFCB;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      border: none;
      border-radius: 0;
      padding: 0.7em;
    }

    .btn-secondary {
        color: #fff;
        background-color: #03BFCB !important;
        border-color: #03BFCB !important;
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
      color: #ffffff;
      background-color: #03BFCB;
      font-size: 1em;
      padding: 0.5em 1em;
    }
    .dropdown-menu li .dropdown-item:hover {
      background-color: #005067;
    }

    select option:checked {
      background-color: #005067 !important;
      color: #ffffff !important;
    }

    select option:hover {
      background-color: #005067 !important;
      color: #ffffff !important;
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
  background-color: #03BFCB; 
  border-color: #03BFCB; 
  padding:10px; 
  border-radius: 8px;
}

  </style>

    </head>
    <body style="background-color: #004767;">
        @include('cookie-consent::index')
        {{-- @include('custom-cookie-consent') --}}
        {{-- <div class="loading-bar" id="loader">
                <img src="{{ asset('logo.gif') }}" class="loader-logo" >
                <div class="progress"></div>
        </div> --}}
        <div class="col-lg-12 text-center">
            <div class="p-2">
                <img src="{{ asset('assets/img/logo new.png') }}" class="img-fluid" alt="" style="width:250px;">

            </div>
        </div>

        <!--  WELCOME TEXT --> 

        <div class="col-lg-12">
          <div class="slider text-center" style="color: white; padding-top:20px;">
            <div class="slide">
              <h1>Welcome to Vanward International</h1>
              <p style="color:#03BFCB;">Please select your language and country</p>
            </div>
            <div class="slide">
              <h1>Bienvenue chez Vanward International</h1>
              <p style="color:#03BFCB;">Veuillez sélectionner votre langue et votre pays</p>
            </div>
            <div class="slide">
              <h1>欢迎来到 Vanward International</h1>
              <p style="color:#03BFCB;">请选择您的语言和国家</p>
            </div>
            <div class="slide">
              <h1>أهلاً بك في فانوارد الدولية </h1>
              <p style="color:#03BFCB;">يرجى تحديد اللغة والبلد الخاص بك</p>
            </div>
            <div class="slide">
              <h1>Willkommen bei Vanward International</h1>
              <p style="color:#03BFCB;">Bitte wählen Sie Ihre Sprache und Ihr Land aus</p>
            </div>
            <div class="slide">
              <h1>Welkom bij Vanward International</h1>
              <p style="color:#03BFCB;">Selecteer alstublieft uw taal en land</p>
            </div>
            <div class="slide">
              <h1>Velkommen til Vanward International</h1>
              <p style="color:#03BFCB;">Vennligst velg ditt språk og land</p>
            </div>
            <div class="slide">
              <h1>Välkommen till Vanward International</h1>
              <p style="color:#03BFCB;">Vänligen välj ditt språk och land</p>
            </div>
            <div class="slide">
              <h1>Tervetuloa Vanward Internationaliin</h1>
              <p style="color:#03BFCB;">Valitse kieli ja maa, ole hyvä</p>
            </div>
            <div class="slide">
              <h1>Willkomme bi Vanward International</h1>
              <p style="color:#03BFCB;">Bitte wählen Sie Ihre Sprache und Ihr Land us</p>
            </div>
            <div class="slide">
              <h1>Tere tulemast Vanward Internationali</h1>
              <p style="color:#03BFCB;">Palun valige oma keel ja riik</p>
            </div>
            <div class="slide">
              <h1>Vanward Internationalへようこそ</h1>
              <p style="color:#03BFCB;">言語と国を選択してください</p>
            </div>
            <div class="slide">
              <h1>Velkommen til Vanward International</h1>
              <p style="color:#03BFCB;">Vælg venligst dit sprog og dit land</p>
            </div>
          </div>
        </div>

        <!-- WELCOME TEXT ENDS -->

        <!-- DROPDOWN SECTION --> 

        <div class="col-lg-12" style="padding-top: 20px;">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row text-center"   style="background-color: #004767; border-radius: 25px; margin:10px;">
                        <div id="chartdiv"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 col-md-12 p-4">
                        <p style="color:#ffffff;">Please select your language :</p>
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
                        <p style="color:#ffffff;">Please select your country :</p>

                          <!-- <h2><a onclick="countryAsia()">Asia Pacific</a></h2> -->
                          <a
                            class="btn btn-secondary dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            Asia Pacific / Australia / Middle East
                          </a>
                          <div class="dropdown-menu">
                            <ul aria-labelledby="dropdownMenuLink">
                              <li><a class="dropdown-item" href="http://vanwardintl.com/lang/en" id="myLink1">Australia</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/zh" id="myLink2">China</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/ja" id="myLink3">Japan</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink4">New Zealand</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/ar" id="myLink5">United Arab Emirates</a></li>
                            </ul>
                          </div>


                          <a
                            class="btn btn-secondary dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            Europe
                          </a>
                          <div class="dropdown-menu">
                            <ul>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/de" id="myLink6">Austria</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/nl" id="myLink7">Belgium</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink8">Czech Republic (Czechia)</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/da" id="myLink9">Denmark</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/et" id="myLink10">Estonia</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/fi" id="myLink11">Finland</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/fr" id="myLink12">France</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/de" id="myLink13">Germany</a></li>
                            </ul>
                            <ul>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink14">Greece</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink15">Hungary</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink16">Iceland</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink30">Ireland</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/it" id="myLink17">Italy</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/de" id="myLink18">Liechtenstein</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/fr" id="myLink19">Luxembourg</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/nl" id="myLink20">Netherlands</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/no" id="myLink21">Norway</a></li>
                            </ul>
                            <ul>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink22">Poland</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/pt" id="myLink23">Portugal</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink24">Slovakia</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink25">Slovenia</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/es" id="myLink26">Spain</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/sv" id="myLink27">Sweden</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/de" id="myLink28">Switzerland</a></li>
                              <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink29">United Kingdom</a></li>
                            </ul>
                          </div>

                          <p></p>

                          <a
                          class="btn btn-secondary dropdown-toggle"
                          href="#"
                          role="button"
                          id="dropdownMenuLink"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          North America / South America
                        </a>
                        <div class="dropdown-menu">
                          <ul aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="https://vanwardintl.com/lang/pt" id="myLink30">Brazil</a></li>
                            <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink31">Canada</a></li>
                            <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink32">United States of America</a></li>
                          </ul>
                        </div>

                        <a
                          class="btn btn-secondary dropdown-toggle"
                          href="#"
                          role="button"
                          id="dropdownMenuLink"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Africa
                        </a>
                        <div class="dropdown-menu">
                          <ul aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="https://vanwardintl.com/lang/en" id="myLink33">South Africa</a></li>
                          </ul>
                        </div>

                      </div>
                </div>
            </div>
        </div>

        <!-- DROPDOWN SECTION ENDS -->

        <!-- FOOTER --> 
        <div class="col-lg-12">
          <div class="row" style="color: #ffffff;">

              <p style="padding: 50px;">
                All the information, news, opinions, research, and analyses on this website are provided as a reference. All the information provided by Vanward International Securities Limited on this website is subject to change from time to time and up to date. By using Online platforms there is a possibility of communication failures, hardware, software, and connection issues, measures are in place to minimize the failure and delay, and users should be responsible and aware of this. Vanward International Securities Limited is not responsible for this communication failure. The unauthorized use, of all and/or any information on this website, is strictly prohibited. <br><br>
              </p>
              <p style="padding-left: 50px;">Vanward International © {{ now()->year }}</p>
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
          width: 100%;
          height: 500px;
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
    height: 500px;
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
    interactive: true
  });
  
  continentSeries.mapPolygons.template.states.create("hover", {
    fill: root.interfaceColors.get("primaryButtonActive")
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
                fill: am5.color("#03BFCB"),
                strokeOpacity: 0
            })
        );


        var circle2 = container.children.push(
            am5.Circle.new(root, {
                radius: 4,
                tooltipY: 0,
                // fill: colorset.next(),
                fill: am5.color("#03BFCB"),
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
            url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "China",
              latitude: 35.8616,
              longitude: 104.1953,
              url: "https://vanwardintl.com/lang/zh"
        },
        {
              title: "Japan",
              latitude: 36.2048,
              longitude: 138.2529,
              url: "https://vanwardintl.com/lang/ja"
        },
        {
              title: "New Zealand",
              latitude: -40.9005,
              longitude: 174.8859,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "United Arab Emirates",
              latitude: 23.4240,
              longitude: 53.8478,
              url: "https://vanwardintl.com/lang/ar"
        },
        {
              title: "Austria",
              latitude: 47.5162,
              longitude: 14.5500,
              url: "https://vanwardintl.com/lang/de"
        },
        {
              title: "Belgium",
              latitude: 50.5038,
              longitude: 4.4699,
              url: "https://vanwardintl.com/lang/nl"
        },
        {
              title: "Czech Republic",
              latitude: 49.8174,
              longitude: 15.4729,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Denmark",
              latitude: 56.2639,
              longitude: 9.5017,
              url: "https://vanwardintl.com/lang/da"
        },
        {
              title: "Estonia",
              latitude: 58.5952,
              longitude: 25.0136,
              url: "https://vanwardintl.com/lang/et"
        },
        {
              title: "Finland",
              latitude: 61.9241,
              longitude: 25.7481,
              url: "https://vanwardintl.com/lang/fi"
        },
        {
              title: "France",
              latitude: 46.2276,
              longitude: 2.2137,
              url: "https://vanwardintl.com/lang/fr"
        },
        {
              title: "Germany",
              latitude: 51.1656,
              longitude: 10.4515,
              url: "https://vanwardintl.com/lang/de"
        },
        {
              title: "Greece",
              latitude: 39.0742,
              longitude: 21.8243,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Hungary",
              latitude: 47.1624,
              longitude: 19.5033,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Iceland",
              latitude: 64.9630,
              longitude: -19.0208,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Ireland",
              latitude: 53.4129,
              longitude: -8.2438,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Italy",
              latitude: 41.8719,
              longitude: 12.5673,
              url: "https://vanwardintl.com/lang/it"
        },
        {
              title: "Liechtenstein",
              latitude: 47.166,
              longitude: 9.5553,
              url: "https://vanwardintl.com/lang/de"
        },
        {
              title: "Luxembourg",
              latitude: 49.8152,
              longitude: 6.1295,
              url: "https://vanwardintl.com/lang/fr"
        },
        {
              title: "Netherlands",
              latitude: 52.1326,
              longitude: 5.2912,
              url: "https://vanwardintl.com/lang/nl"
        },
        {
              title: "Norway",
              latitude: 60.4720,
              longitude: 8.4689,
              url: "https://vanwardintl.com/lang/no"
        },
        {
              title: "Poland",
              latitude: 51.9194,
              longitude: 19.1451,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Portugal",
              latitude: 39.3998,
              longitude: -8.2244,
              url: "https://vanwardintl.com/lang/pt"
        },
        {
              title: "Slovakia",
              latitude: 48.6690,
              longitude: 19.6990,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Slovenia",
              latitude: 46.1512,
              longitude: 14.9954,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Spain",
              latitude: 40.4636,
              longitude: -3.7492,
              url: "https://vanwardintl.com/lang/es"
        },
        {
              title: "Sweden",
              latitude: 60.1281,
              longitude: 18.6435,
              url: "https://vanwardintl.com/lang/sv"
        },
        {
              title: "Switzerland",
              latitude: 46.8181,
              longitude: 8.2275,
              url: "https://vanwardintl.com/lang/de"
        },
        {
              title: "United Kingdom",
              latitude: 55.3780,
              longitude: -3.4359,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "Brazil",
              latitude: -14.2350,
              longitude: -51.9252,
              url: "https://vanwardintl.com/lang/pt"
        },
        {
              title: "Canada",
              latitude: 56.1303,
              longitude: -106.3467,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "United States of America",
              latitude: 37.0902,
              longitude: -95.7128,
              url: "https://vanwardintl.com/lang/en"
        },
        {
              title: "South Africa",
              latitude: -30.5594,
              longitude: 22.9375,
              url: "https://vanwardintl.com/lang/en"
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
    fill: am5.color(0xffffff)
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
//   "US": "https://vanwardintl.com/lang/en",
//   // canada
//   "CA": "https://vanwardintl.com/lang/en",
//   // brazil
//   "BR": "https://vanwardintl.com/lang/pt",
//   // australia
//   "AU": "https://vanwardintl.com/lang/en",
//   // china
//   "CN": "https://vanwardintl.com/lang/zh",
//   // japan
//   "JP": "https://vanwardintl.com/lang/ja",
//   // new zealand
//   "NZ": "https://vanwardintl.com/lang/en",
//   // uae
//   "AE": "https://vanwardintl.com/lang/ar",
//   // austria
//   "AT": "https://vanwardintl.com/lang/de",
//   // belgium
//   "BE": "https://vanwardintl.com/lang/nl",
//   //czech republic
//   "CZ": "https://vanwardintl.com/lang/en",
//   // denmark
//   "DK": "https://vanwardintl.com/lang/da",
//   // estonia
//   "EE": "https://vanwardintl.com/lang/et",
//   // finland
//   "FI": "https://vanwardintl.com/lang/fi",
//   // france
//   "FR": "https://vanwardintl.com/lang/fr",
//   // germany
//   "DE": "https://vanwardintl.com/lang/de",
//   // greece
//   "GR": "https://vanwardintl.com/lang/en",
//   // hungary
//   "HU": "https://vanwardintl.com/lang/en",
//   // iceland
//   "IS": "https://vanwardintl.com/lang/en",
//   // italy
//   "IT": "https://vanwardintl.com/lang/it",
//   // liechtenstein
//   "LI": "https://vanwardintl.com/lang/de",
//   // luxemborg
//   "LU": "https://vanwardintl.com/lang/fr",
//   // netherlands
//   "NL": "https://vanwardintl.com/lang/nl",
//   // norway
//   "NO": "https://vanwardintl.com/lang/no",
//   // poland
//   "PL": "https://vanwardintl.com/lang/en",
//   // portugal
//   "PT": "https://vanwardintl.com/lang/pt",
//   // slovakia
//   "SK": "https://vanwardintl.com/lang/en",
//   // slovenia
//   "SI": "https://vanwardintl.com/lang/en",
//   // spain
//   "ES": "https://vanwardintl.com/lang/es",
//   // sweden
//   "SE": "https://vanwardintl.com/lang/sv",
//   // switzerland
//   "CH": "https://vanwardintl.com/lang/de",
//   // uk
//   "GB": "https://vanwardintl.com/lang/en",
//   // south africa
//   "ZA": "https://vanwardintl.com/lang/en",
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
    interactive: true
  });
  
  countrySeries.mapPolygons.template.states.create("hover", {
    fill: root.interfaceColors.get("primaryButtonActive")
  });


      }); // end am5.ready()
  </script>
    </html>
