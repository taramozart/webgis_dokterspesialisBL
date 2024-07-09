<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>GIS Dokter Spesialis</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- TES --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- TES --}}


    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    {{-- mapbox --}}
{{--    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />--}}
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css' rel='stylesheet' />
    <link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.2.0/mapbox-gl-directions.css" rel="stylesheet">
    @livewireStyles

    <style>
        .tab-active {
            background-color: #534B3C;
            color: #FFFFFF;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #8B7E66;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #6e6451;
        }


        /*CUSTOM CSS on file map.blade.php*/
        .mapbox-directions-instructions-wrapper {
            max-height: 10vh;
        }
        @media (min-width: 768px) {
            .mapbox-directions-instructions-wrapper {
                max-height: 37vh;
            }
        }
        .mapbox-directions-origin, .mapbox-directions-destination, .directions-icon-reverse {
            display: none;
        }
        .mapboxgl-popup-close-button {
            right: 17px;
            top: 15px;
            font-size: x-large;
        }
        .mapbox-directions-component-keyline {
            display: none;
        }
        .mapbox-directions-profile{
            display: none;
        }
        /*CUSTOM CSS on file map.blade.php*/
    </style>
</head>

<body>
    <div id="app">
        <main class="p-0 m-0">
            @yield('content')
            {{ isset($slot) ? $slot : null }}
        </main>
    </div>

    @livewireScripts
{{--    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>--}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js'></script>
    <script>
        // rating
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-icon');
            const starPaths = document.querySelectorAll('.star-path');

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    const rating = index + 1;
                    console.log('Rating: ', rating);
                    // Reset all stars' colors
                    starPaths.forEach((path, idx) => {
                        if (idx < rating) {
                            path.classList.add('text-yellow-300');
                        } else {
                            path.classList.remove('text-yellow-300');
                        }
                    });
                });
            });
        });
    </script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.2.0/mapbox-gl-directions.js"></script>
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly" defer ></script>--}}
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places&v=weekly"></script>--}}
    @stack('scripts')

</body>

</html>
