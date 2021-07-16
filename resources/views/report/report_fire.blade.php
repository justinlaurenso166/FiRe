<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Fire</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
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
                            <div class="notifications">
                                <i class="material-icons dp48">notifications</i>
                                <span class="badge">0</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bahasa">
                                <span class="material-icons languange">language</span>
                                <span class="lang">ENG</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="sub-heading">
            <div class="row">
                <div class="col-2">
                    <a href="/home/citizen">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Report</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="map">
            <div id="googleMap" style="width:100%;height: 500px; margin: auto; margin-top: 40px;"></div>
            <div id="warnings-panel"></div>
            <div class="btn-accept">
                <button class="btn" id="accept">Accept</button>
            </div>
        </section>

        <div class="footer">
            <div class="row">
                <div class="col-4">
                    <a href="/">
                        <span class="material-icons home">home</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/report_fire">
                        <div class="notif">
                            <span class="material-icons campaign">campaign</span>
                        </div>
                    </a>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMLWP8dDcV8pcE3GbImnO71zDCGKIgFUk&callback=initMap&libraries=&v=weekly" async></script>
</body>
</html>

<script>
    // var coords = [
    // [35.733972, -5.881999],
    // [35.734077, -5.881033],
    // [35.736898, -5.877771],
    // [35.738396, -5.875154]
    // ];
    // var dist = [];//Array to hold distances
    // function calcRoute() { {
    //     var start = new google.maps.LatLng(35.728329, -5.882750);
    //     for (var i = 0; i < coords.length; i++){
    //         var point = new google.maps.LatLng(coords[i][0],coords[i][1]);
    //         var distance = google.maps.geometry.spherical.computeDistanceBetween(start, point);
    //         dist.push(distance);
    //     }  
    //         var test = dist[0];
    // var index = 0;
    // for (var i = 1; i < dist.length; i++){
    //         if(dist[i] < test){
    //             test = dist[i];
    //             index = i;
    //         }
    //     }
    // var end = new google.maps.LatLng(coords[index][0],coords[index][1]);

var selected_place = [];
function initMap() {
    var locations = [];
    var lokasi_sekarang = [];
    const markerArray = [];
    document.getElementById('accept').disabled = true;
    // Instantiate a directions service.
    const directionsService = new google.maps.DirectionsService();
    // Create a map and center it on Manhattan.
    const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 14,
        center: {lat: -0.04171359263971535, lng: 109.3401432687359},
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
    // Create a renderer for directions and bind it to the map.
    const directionsRenderer = new google.maps.DirectionsRenderer({ map: map });
    // Instantiate an info window to hold step text.
    const stepDisplay = new google.maps.InfoWindow();
    locations = @json($kebakaran);
    lokasi_sekarang = @json($pemadam);

        for (i = 0; i < lokasi_sekarang.length; i++) {  
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(lokasi_sekarang[i]['lat'], lokasi_sekarang[i]['lng']),
                map: map,
                icon: "{{asset('images/circle (2).png')}}",
            });
        }

        for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']),
                map: map
            });
            // locations.push(marker);
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    stepDisplay.setContent("<h5>Lokasi Kebakaran</h5><p>" + locations[i]['lokasi']+ "</p>");
                    stepDisplay.open(map, marker);
                    document.getElementById('accept').disabled = false;
                    selected_place = [marker.getPosition().lat(),marker.getPosition().lng()];
                }
            })(marker, i));
        }

        document.getElementById("accept").addEventListener("click", function(){
            stepDisplay.close();
            calculateAndDisplayRoute(directionsRenderer,directionsService,markerArray,stepDisplay,map);
        })
    }

    function calculateAndDisplayRoute(directionsRenderer,directionsService,markerArray,stepDisplay, map) {
    // First, remove any existing markers from the map.
    for (let i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }
    // Retrieve the start and end locations and create a DirectionsRequest using
    // DRIVING directions.
    var lokasi_pemadam = @json($pemadam);
    
    directionsService.route(
        {
        origin: {lat: lokasi_pemadam[0]['lat'], lng: lokasi_pemadam[0]['lng']},
        destination: { lat: selected_place[0], lng: selected_place[1]},
        travelMode: google.maps.TravelMode.DRIVING,
        avoidTolls: true
        },
        (result, status) => {
        // Route the directions and pass the response to a function to create
        // markers for each step.
        if (status === "OK" && result) {
            document.getElementById("warnings-panel").innerHTML =
            "<b>" + result.routes[0].warnings + "</b>";
            directionsRenderer.setDirections(result);
            showSteps(result, markerArray, stepDisplay, map);
        } else {
            window.alert("Directions request failed due to " + status);
        }
        }
    );
    }

    function showSteps(directionResult, markerArray, stepDisplay, map) {
    // For each step, place a marker, and add the text to the marker's infowindow.
    // Also attach the marker to an array so we can keep track of it and remove it
    // when calculating new routes.
    const myRoute = directionResult.routes[0].legs[0];
    
    const image = {
        url: "{{asset('images/circle (2).png')}}",
    }

    for (let i = 1; i < myRoute.steps.length; i++) {
        const marker = (markerArray[i] =
        markerArray[i] || new google.maps.Marker({
            icon: image,
        }));
        marker.setMap(map);
        marker.setPosition(myRoute.steps[i].start_location);
        attachInstructionText(
        stepDisplay,
        marker,
        myRoute.steps[i].instructions,
        map
        );
    }
    }

    function attachInstructionText(stepDisplay, marker, text, map) {
    google.maps.event.addListener(marker, "click", () => {
        stepDisplay.setContent(text);
        stepDisplay.open(map, marker);
    });
    }
    </script>
    