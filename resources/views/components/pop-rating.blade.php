<!-- Rating Modal Component -->
<div>
    <!-- Modal toggle -->
    <div>
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="rating-button block text-white bg-[#534B3C] hover:bg-[#383226] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Beri Rating
        </button>
    </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Rating Dokter
                    </h3>
                    <button type="button" class="close-button text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-3">
                    <div class="text-[22px] text-[#505A66] font-semibold text-center">
                        Apakah Anda Pernah Berkunjung Ke Tempat Ini ?
                    </div>
                    <div class="text-center">
                        Berikan penilaian dan pengalaman anda untuk pengguna lain
                    </div>
                    <div class="text-center mt-2 flex justify-center">
                        <img src="/Images/userRating.svg" alt="">
                    </div>
                    <div class="flex justify-center mt-2">
                        <div class="flex items-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <input type="checkbox" id="rating{{ $i }}" class="hidden" value="{{ $i }}">
                                <label for="rating{{ $i }}" class="cursor-pointer text-xl">
                                    <svg class="star-icon fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30">
                                        <path class="st0" d="M0 0h24v24H0z" fill="none" />
                                        <path class="star-path" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </label>
                            @endfor
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea class="w-full h-[150px] rounded border border-gray-300 p-3" name="" id="" placeholder="Masukkan Review"></textarea>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-2 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button class="save-button bg-[#84A584] hover:bg-[#6b886b] w-full text-white font-bold py-2 px-4 rounded">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // rating
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star-icon');
        const starPaths = document.querySelectorAll('.star-path');
        const ratingButton = document.querySelector('.rating-button');
        const closeButton = document.querySelector('.close-button');
        const modal = document.getElementById('default-modal');

        ratingButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

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
