<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ranah Salido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>

    @include('layouts.navbar')
    <!-- Carousel di Bagian Atas -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="9500">
                <img src="carousel1.png" class="d-block w-100" alt="...">

                <!-- Caption di dalemnya -->
                <div class="carousel-caption d-none d-md-block">
                    <!--                     <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p> -->
                </div>

            </div>

            <div class="carousel-item" data-bs-interval="9500">
                <img src="carousel2.png" class="d-block w-100" alt="...">

                <!-- Caption di dalemnya -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome</h5>
                    <p>Get to know more about us!</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="9500">
                <img src="carousel3.png" class="d-block w-100" alt="...">

                <!-- Caption di dalemnya -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome</h5>
                    <p>Get to know more about us!</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="9500">
                <img src="carousel4.png" class="d-block w-100" alt="...">

                <!-- Caption di dalemnya -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome</h5>
                    <p>Get to know more about us!</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="9500">
                <img src="carousel5.png" class="d-block w-100" alt="...">

                <!-- Caption di dalemnya -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome</h5>
                    <p>Get to know more about us!</p>
                </div>
            </div>

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!-- Buat About Us -->
    <br>
    <div class="card text-center">
        <div class="card-body">
            <h3>Peta Persebaran</h3>
        </div>
    </div>

    <!-- Content Dashboardnya -->
    <!-- Pegawai Pekerja, Luas Tanah, Jenis Bibit-->
    <div class="container mt-4">

        <div id="map" style="height: 1000px;"></div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([0.28152000, 99.51965000], 10);

        // Use Mapbox Satellite imagery
        L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/satellite-v9/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWJpemFyZGQiLCJhIjoiY2xxa2UxaTl0MXN1djJybW1yMWw5dzZzeiJ9.po1LGC3lGsMzjNxAjB9UaA', {
    attribution: '<a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYWJpemFyZGQiLCJhIjoiY2xxa2UxaTl0MXN1djJybW1yMWw5dzZzeiJ9.po1LGC3lGsMzjNxAjB9UaA'
}).addTo(map);
      
        // Add a marker to the map with a popup
        var markerLocations = [
        @foreach ($marker as $item)
        { coordinates: [{{ $item->latitude }}, {{ $item->longitude }}], popupContent:
                '<b>Lokasi:</b> {{ $item->lokasi }}<br>' +
                '<b>Sektor:</b> {{ $item->sektor }}<br>' +
                '<b>Jenis Bibit:</b> {{ $item->jenis_bibit }}<br>' +
                '<b>Jumlah Bibit:</b> {{ $item->jumlah_bibit }}<br>' +
                '<b>Luas Tanah:</b> {{ $item->luas_tanah }}' },
        @endforeach
       
        // Add more marker locations as needed
    ];

    // Loop through the array and add markers to the map
    for (var i = 0; i < markerLocations.length; i++) {
        var marker = L.marker(markerLocations[i].coordinates)
            .addTo(map)
            .bindPopup(markerLocations[i].popupContent);
    }

    </script>

</body>

</html>