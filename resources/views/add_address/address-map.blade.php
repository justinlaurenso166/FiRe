<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/address.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    @laravelPWA
</head>
<body>
    <div class="container-fluid">
        <div class="heading">
            <div class="row">
                <div class="col-4 col-xl-2">
                    <h2>FiRe</h2>
                </div>
                <div class="col-4 col-xl-8"></div>
                <div class="col-4 col-xl-2">
                    <div class="row">
                        <div class="col-6">
                            <div class="histories">
                                <span class="material-icons history">
                                    history
                                </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="notifications">
                                <i class="material-icons dp48">notifications</i>
                                <span class="badge">0</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="sub-heading">
            <div class="row">
                <div class="col-2">
                    <a href="/add_address">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Tambah Alamat Saya</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-8">
                    <input type="text" placeholder="Search Box" id="pac-input" class="controls form-control" class="pac-input">
                </div>
                <div class="col-4">
                    <div class="toggle">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                        <span class="tipe-map">Dark</span>
                    </div>
                </div>
            </div>

            <div id="googleMap" style="width:100%;height: 550px; margin: auto; margin-top: 60px;"></div>
            <div id="warnings-panel"></div>
            <div class="add-btn">
                <a href="/add_address/save">
                    <button class="btn">Add</button>
                </a>
            </div>
        </section>

        <div class="footer">
            <div class="row">
                <div class="col-4">
                    <a href="/home/citizen">
                        <span class="material-icons home active">home</span>
                    </a>
                </div>
                <div class="col-4">
                    <span class="material-icons quiz">quiz</span>
                </div>
                <div class="col-4">
                    <span class="material-icons account_circle">account_circle</span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMLWP8dDcV8pcE3GbImnO71zDCGKIgFUk&callback=mapDark&libraries=places&v=weekly" async></script>
</body>
</html>

<script>
    var marker;
    function mapLight(){
        const map = new google.maps.Map(document.getElementById("googleMap"), {
        center: { lat: -0.04171359263971535, lng: 109.3401432687359},
        zoom: 13,
        mapTypeId: "roadmap",
    });
    google.maps.event.addListener(map, "click", function(e) {

latLng = e.latLng;

console.log(e.latLng.lat());
console.log(e.latLng.lng());

console.log("Marker");
// if marker exists and has a .setMap method, hide it
if (marker && marker.setMap) {
    marker.setMap(null);
}
marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: "{{asset('images/map-marker-icon.png')}}",
    });
});
    // Create the search box and link it to the UI element.
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);
    // map.controls[google.maps.ControlPosition.].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });
    let markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
        const places = searchBox.getPlaces();
        
        if (places.length == 0) {
            return;
        }
        // Clear out the old markers.
        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];
        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();
        places.forEach((place) => {
        if (!place.geometry || !place.geometry.location) {
            console.log("Returned place contains no geometry");
            return;
        }
        const icon = {
            url: "{{asset('images/map-marker-icon.png')}}",
        };
        // Create a marker for each place.
        markers.push(
            new google.maps.Marker({
                map,
                icon,
                title: place.name,
                position: place.geometry.location,
            })
            );
            
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
    
}


function mapDark() {
    const map = new google.maps.Map(document.getElementById("googleMap"), {
        center: { lat: -0.04171359263971535, lng: 109.3401432687359},
        zoom: 13,
        styles: [
            { elementType: "geometry", stylers: [{ color: "#1E1E1E" }] },
            { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
            { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
            {
                featureType: "administrative.locality",
                elementType: "labels.text.fill",
                stylers: [{ color: "#d59563" }],
            },
            {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [{ color: "#d59563" }],
            },
            {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [{ color: "#263c3f" }],
            },
            {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [{ color: "#6b9a76" }],
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [{ color: "#38414e" }],
            },
            {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [{ color: "#212a37" }],
            },
            {
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [{ color: "#9ca5b3" }],
            },
            {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [{ color: "#746855" }],
            },
            {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [{ color: "#1f2835" }],
        },
        {
            featureType: "road.highway",
            elementType: "labels.text.fill",
            stylers: [{ color: "#f3d19c" }],
        },
        {
            featureType: "transit",
            elementType: "geometry",
            stylers: [{ color: "#2f3948" }],
        },
        {
            featureType: "transit.station",
            elementType: "labels.text.fill",
            stylers: [{ color: "#d59563" }],
        },
        {
            featureType: "water",
            elementType: "geometry",
            stylers: [{ color: "#17263c" }],
        },
        {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [{ color: "#515c6d" }],
        },
        {
            featureType: "water",
            elementType: "labels.text.stroke",
            stylers: [{ color: "#17263c" }],
        },
    ],
});
google.maps.event.addListener(map, "click", function(e) {

latLng = e.latLng;

console.log(e.latLng.lat());
console.log(e.latLng.lng());

console.log("Marker");
// if marker exists and has a .setMap method, hide it
if (marker && marker.setMap) {
    marker.setMap(null);
}
marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: "{{asset('images/map-marker-icon.png')}}",
    });
});
// Create the search box and link it to the UI element.
const input = document.querySelector("#pac-input");
const searchBox = new google.maps.places.SearchBox(input);
// map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
// Bias the SearchBox results towards current map's viewport.
map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
});
let markers = [];
// Listen for the event fired when the user selects a prediction and retrieve
// more details for that place.
searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();
    
    if (places.length == 0) {
        return;
    }
    // Clear out the old markers.
    markers.forEach((marker) => {
        marker.setMap(null);
    });
    markers = [];
    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();
    places.forEach((place) => {
        if (!place.geometry || !place.geometry.location) {
            console.log("Returned place contains no geometry");
            return;
        }
        const icon = {
            url: "{{asset('images/map-marker-icon.png')}}",
        };
        // Create a marker for each place.
        markers.push(
            new google.maps.Marker({
                map,
                icon,
                title: place.name,
                position: place.geometry.location,
            })
            );
            
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
        } else {
            bounds.extend(place.geometry.location);
        }
    });
    map.fitBounds(bounds);
});
}

document.addEventListener('DOMContentLoaded', function () {
var checkbox = document.querySelector('input[type="checkbox"]');

checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
    // do this
        document.querySelector(".tipe-map").innerHTML = "Dark";
        mapDark();
    } else {
    // do that
        document.querySelector(".tipe-map").innerHTML = "Light";
        mapLight();
    }
});
});
</script>