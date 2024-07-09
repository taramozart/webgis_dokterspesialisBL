<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="flex items-center">
        @for ($i = 1; $i <= 5; $i++) <input type="checkbox" id="rating{{ $i }}" class="hidden" value="{{ $i }}">
            <label for="rating{{ $i }}" class="cursor-pointer text-xl">
                <svg class="star-icon fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    width="24" height="24">
                    <path class="st0" d="M0 0h24v24H0z" fill="none" />
                    <path class="star-path"
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
            </label>
            @endfor
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star-icon');
            const starPaths = document.querySelectorAll('.star-path');

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    const rating = index + 1;
                    console.log('Rating: ', rating);
                    // Reset all stars' colors
                    starPaths.forEach((path, idx) => {
                        if (idx < rating) {
                            path.classList.add('text-yellow-500');
                        } else {
                            path.classList.remove('text-yellow-500');
                        }
                    });
                });
            });
        });

    </script>
</body>

</html>
