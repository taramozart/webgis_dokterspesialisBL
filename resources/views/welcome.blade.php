<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Check Star</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="bg-gray-200">
    <x-navbar-tes/>
    <div class="max-w-md mx-auto bg-white rounded p-6">
        <h1 class="text-xl font-bold mb-4">Rating Check Star</h1>
        
        <!-- Include the component -->
        {{-- @include('components.RatingCheckStar') --}}
        <x-star></x-star>
        <x-tab></x-tab>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
