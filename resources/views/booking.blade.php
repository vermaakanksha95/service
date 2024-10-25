@extends('layout')
@section('content')
<div class="flex gap-10 w-full bg-slate-600  ">

    <div>
        <img src="Taxi-Booking-App.png" alt="">
    </div>
    <div class="mt-20 flex-1 flex items-center justify-center flex-col">
        <h2 class="text-2xl  font-semibold p-1 text-yellow-500">Start Your Journey with Us</h2>
        <form action="" class="p-5   rounded  items-center  ">
            <div class="flex flex-col mb-3">
                <label for="" class="text-white">pick up location</label>
                <input type="text" class="w-full  px-3 py-2 rounded flex">
            </div>
            <div class="flex flex-1 flex-col mb-3">
                <label for="" class="text-white">drop off location</label>
                <input type="text" class="w-full px-3 py-2 rounded">
            </div>




            <html>

            <head>
                <title>Displaying Text Directions With setPanel()</title>
                <script>
                    function initMap() {
                        const directionsRenderer = new google.maps.DirectionsRenderer();
                        const directionsService = new google.maps.DirectionsService();
                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 7,
                            center: {
                                lat: 41.85,
                                lng: -87.65
                            },
                            disableDefaultUI: true,
                        });

                        directionsRenderer.setMap(map);
                        directionsRenderer.setPanel(document.getElementById("sidebar"));

                        const control = document.getElementById("floating-panel");

                        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

                        const onChangeHandler = function() {
                            calculateAndDisplayRoute(directionsService, directionsRenderer);
                        };

                        document
                            .getElementById("start")
                            .addEventListener("change", onChangeHandler);
                        document
                            .getElementById("end")
                            .addEventListener("change", onChangeHandler);
                        document
                            .getElementById("mode")
                            .addEventListener("change", onChangeHandler);
                    }

                    function calculateAndDisplayRoute(directionsService, directionsRenderer) {
                        const start = document.getElementById("start").value;
                        const end = document.getElementById("end").value;
                        const selectedMode = document.getElementById("mode").value;

                        directionsService
                            .route({
                                origin: start,
                                destination: end,
                                travelMode: google.maps.TravelMode[selectedMode],
                            })
                            .then((response) => {
                                directionsRenderer.setDirections(response);
                            })
                            .catch((e) =>
                                window.alert("Directions request failed due to " + status)
                            );
                    }

                    window.initMap = initMap;
                </script>
                <style>
                    /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
                    /* Optional: Makes the sample page fill the window. */
                    html,
                    body {
                        height: 100%;
                        margin: 0;
                        padding: 0;
                    }

                    #container {
                        height: 100%;
                        display: flex;
                    }

                    #sidebar {
                        flex-basis: 15rem;
                        flex-grow: 1;
                        padding: 1rem;
                        max-width: 30rem;
                        height: 100%;
                        box-sizing: border-box;
                        overflow: auto;
                    }

                    #map {
                        flex-basis: 0;
                        flex-grow: 4;
                        height: 100%;
                    }

                    #floating-panel {

                        z-index: 5;
                        background-color: #fff;
                        padding: 5px;
                        border: 1px solid #999;
                        text-align: center;
                        font-family: "Roboto", "sans-serif";
                        line-height: 30px;
                        padding-left: 10px;
                    }

                    #floating-panel {
                        background-color: #fff;
                        border: 0;
                        border-radius: 2px;
                        box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
                        margin: 10px;
                        padding: 0 0.5em;
                        font: 400 18px Roboto, Arial, sans-serif;
                        overflow: hidden;
                        padding: 5px;
                        font-size: 14px;
                        text-align: center;
                        line-height: 30px;
                        height: auto;
                    }

                    #map {
                        flex: auto;
                    }

                    #sidebar {
                        flex: 0 1 auto;
                        padding: 0;
                    }

                    #sidebar>div {
                        padding: 0.5rem;
                    }
                </style>
            </head>

            <body>
                <div id="floating-panel">
                    <strong>Start:</strong>
                    <select id="start">
                        <option value="chicago, il">Chicago</option>
                        <option value="st louis, mo">St Louis</option>
                        <option value="joplin, mo">Joplin, MO</option>
                        <option value="oklahoma city, ok">Oklahoma City</option>
                        <option value="amarillo, tx">Amarillo</option>
                        <option value="gallup, nm">Gallup, NM</option>
                        <option value="flagstaff, az">Flagstaff, AZ</option>
                        <option value="winona, az">Winona</option>
                        <option value="kingman, az">Kingman</option>
                        <option value="barstow, ca">Barstow</option>
                        <option value="san bernardino, ca">San Bernardino</option>
                        <option value="los angeles, ca">Los Angeles</option>
                    </select>
                    <br />
                    <strong>End:</strong>
                    <select id="end">
                        <option value="chicago, il">Chicago</option>
                        <option value="st louis, mo">St Louis</option>
                        <option value="joplin, mo">Joplin, MO</option>
                        <option value="oklahoma city, ok">Oklahoma City</option>
                        <option value="amarillo, tx">Amarillo</option>
                        <option value="gallup, nm">Gallup, NM</option>
                        <option value="flagstaff, az">Flagstaff, AZ</option>
                        <option value="winona, az">Winona</option>
                        <option value="kingman, az">Kingman</option>
                        <option value="barstow, ca">Barstow</option>
                        <option value="san bernardino, ca">San Bernardino</option>
                        <option value="los angeles, ca">Los Angeles</option>
                    </select>
                    <br />
                    <b>Mode of Travel: </b>
                    <select id="mode">
                        <option value="DRIVING">Driving</option>
                        <option value="WALKING">Walking</option>
                        <option value="BICYCLING">Bicycling</option>
                        <option value="TRANSIT">Transit</option>
                    </select>
                </div>
                <div id="container">
                    <div id="map"></div>
                    <div id="sidebar"></div>
                </div>
                <div style="display: none">
                    <div id="floating-panel">
                        <strong>Start:</strong>
                        <select id="start">
                            <option value="chicago, il">Chicago</option>
                            <option value="st louis, mo">St Louis</option>
                            <option value="joplin, mo">Joplin, MO</option>
                            <option value="oklahoma city, ok">Oklahoma City</option>
                            <option value="amarillo, tx">Amarillo</option>
                            <option value="gallup, nm">Gallup, NM</option>
                            <option value="flagstaff, az">Flagstaff, AZ</option>
                            <option value="winona, az">Winona</option>
                            <option value="kingman, az">Kingman</option>
                            <option value="barstow, ca">Barstow</option>
                            <option value="san bernardino, ca">San Bernardino</option>
                            <option value="los angeles, ca">Los Angeles</option>
                        </select>
                        <br />
                        <strong>End:</strong>
                        <select id="end">
                            <option value="chicago, il">Chicago</option>
                            <option value="st louis, mo">St Louis</option>
                            <option value="joplin, mo">Joplin, MO</option>
                            <option value="oklahoma city, ok">Oklahoma City</option>
                            <option value="amarillo, tx">Amarillo</option>
                            <option value="gallup, nm">Gallup, NM</option>
                            <option value="flagstaff, az">Flagstaff, AZ</option>
                            <option value="winona, az">Winona</option>
                            <option value="kingman, az">Kingman</option>
                            <option value="barstow, ca">Barstow</option>
                            <option value="san bernardino, ca">San Bernardino</option>
                            <option value="los angeles, ca">Los Angeles</option>
                        </select>
                    </div>
                </div>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&callback=initMap&v=weekly&solution_channel=GMP_CCS_textdirections_v2"
                    defer></script>
            </body>

            </html>
            <a href="" class="bg-yellow-500 text-white px-3 py-2 rounded  font-semibold self-center">Book Now</a>
        </form>
    </div>
</div>

@endsection