window.onload = function() {
  
}

var map;
var markers = [];
var infoWindow;


function initMap() {
    var losAngeles = { 
        lat: 34.063380, 
        lng: -118.358080 
    };
    map = new google.maps.Map(document.getElementById("map"), {
      center: losAngeles,
      zoom: 11,
      mapTypeId: "roadmap",
    });
    infoWindow = new google.maps.InfoWindow();
    searchStores();
  }

function searchStores() {
  var foundStores = [];
  var country = document.getElementById('country-input').value;
  if(country){
    for (var store of stores){
      var countryList = store['country'];
      if(countryList.toUpperCase() == country.toUpperCase()){
        foundStores.push(store);
	  }
  }
  
    }else {
      foundStores = stores;
  }
  clearLocations();
  displayStores(foundStores);
  showStoresMarkers(foundStores);
  setOnClickListener();
}

function clearLocations() {
  infoWindow.close();
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers.length = 0;
}

function setOnClickListener() {
  var storeElements = document.querySelectorAll('.store-container');
  storeElements.forEach(function(element, index){
    element.addEventListener('click', function(){
      new google.maps.event.trigger(markers[index], "click");
    })
  })
}

function displayStores() {
  var storesHtml ='';
  for(var [index, store] of stores.entries()){
	var branchname = store['branchName'];
    var address = store['addressLines'];
    var phone = store['phoneNumber'];
    storesHtml += `
            <div class="store-container">
              <div class="store-container-background">
                <div class="store-info-container">
                  <div class="store-address">
				    <span><strong>${branchname}</strong></span>
                    <span>${address[0]}</span>
                    <span>${address[1]}</span>
                  </div>
                  <div class="store-phone-number">${phone}</div>
                </div>
                <div class="store-number-container">
                  <div class="store-number">
                    ${index+1}
                  </div>
                </div>
              </div>
            </div>
    `
    document.querySelector('.stores-list').innerHTML = storesHtml;
    
  }
}

function showStoresMarkers(stores){
  var bounds = new google.maps.LatLngBounds();
  for(var [index, store] of stores.entries()){
    var latlng = new google.maps.LatLng(
      store["coordinates"]["latitude"],
      store["coordinates"]["longitude"]);
    var name = store["name"];
    var address = store["addressLines"];
    var openStatusText = store["remarks"];
    var phoneNumber = store["phoneNumber"];
	var email = store["email"];
    bounds.extend(latlng);
    createMarker(latlng, name, address, openStatusText, phoneNumber, email, index+1)
  }
  map.fitBounds(bounds);
  
}

function createMarker(latlng, name, address, openStatusText, phoneNumber, email, index) {
  var html = `
      <div class="store-info-window">
        <div class="store-info-name">
          ${name}
        </div>
        <div class="store-info-status">
          ${openStatusText}
        </div>
        <div class="store-info-address">
          <div class="circle">
            <i class="fas fa-location-arrow"></i>
          </div>
          ${address}
        </div>
        <div class="store-info-phone">
          <div class="circle">
            <i class="fas fa-envelope"></i>
          </div>
          ${email}
        </div>		
  ` 
  var marker = new google.maps.Marker({
            map: map,
            position: latlng,
            label: index.toString(),
          });
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
          markers.push(marker);
}