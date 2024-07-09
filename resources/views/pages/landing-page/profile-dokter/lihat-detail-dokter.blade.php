<div class="wrapp">
    <x-navbar />
    <div class="wrap px-3 md:px-0 pt-[100px] min-h-screen container m-auto">
        <div class="wrap  flex md:flex-row flex-col gap-3">
            <a href="/profile-dokter" class="back md:w-[4%] ">
                <img src="/Images/kembali.svg" alt="">
            </a>
            <div class="detail md:w-[48%]  text-black">
                <div class="head text-[24px] font-semibold">Informasi Dokter</div>
                <div class="mg aspect-square  w-full flex  h-[210px]  mt-2">
                    <img class="h-full object-cover rounded-lg  shadow-lg "
                        src="https://krakataumedika.com/images/dr_Eko.png" alt="">
                </div>
                <div class="wrap-teks mt-3 flex flex-col gap-1">
                    <div class="teks flex gap-1">
                        <div class="ka font-semibold">Kategori :</div>
                        <div class="ka">Spesialis Penyakit Dalam</div>
                    </div>
                    <div class="teks flex gap-1">
                        <div class="ka font-semibold">No. SIP :</div>
                        <div class="ka">1871/503/00634/446-SIP.M/III.16/IX/2023</div>
                    </div>
                    <div class="teks flex gap-1">
                        <div class="ka font-semibold">Kontak :</div>
                        <div class="ka">0856234234333</div>
                    </div>
                    <div class="teks flex flex-col gap-1">
                        <div class="ka font-semibold">Jadwal Praktik :</div>
                        <div class="ka">Jumat, 10.00 wib - 13.00 wib</div>
                        <div class="ka">Senin, 08.00 wib - 14.00 wib</div>
                    </div>
                    <div class="teks flex gap-1">
                        <div class="ka font-semibold">Alamat :</div>
                        <div class="ka"> Jl. Jati 1 no 12, Way Halim, Bandar Lampung</div>
                    </div>
                    {{-- rating --}}
                    <div class="teks flex gap-1 items-center">
                        <div class="ka font-semibold">Rating :</div>
                        <x-star-rating rating=4 />
                    </div>
                    <!-- Rating Modal Component -->
                    <div>
                        <!-- Modal toggle -->
                        <div>
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="rating-button block text-white bg-[#534B3C] hover:bg-[#383226] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Beri Rating
                            </button>
                        </div>

                        <!-- Main modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Rating Dokter
                                        </h3>
                                        <button type="button"
                                            class="close-button text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="default-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                    <input type="checkbox" id="rating{{ $i }}" class="hidden"
                                                        value="{{ $i }}">
                                                    <label for="rating{{ $i }}"
                                                        class="cursor-pointer text-xl">
                                                        <svg class="star-icon fill-current text-gray-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"
                                                            width="30" height="30">
                                                            <path class="st0" d="M0 0h24v24H0z" fill="none" />
                                                            <path class="star-path"
                                                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                        </svg>
                                                    </label>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <textarea class="w-full h-[150px] rounded border border-gray-300 p-3" name="" id=""
                                                placeholder="Masukkan Review"></textarea>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-2 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button
                                            class="save-button bg-[#84A584] hover:bg-[#6b886b] w-full text-white font-bold py-2 px-4 rounded">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="map md:mt-0 mt-4 mb-4 text-black md:w-[48%] ">
                <div class="head text-[24px] font-semibold">
                    Map
                </div>
                <div class="mg w-full h-[270px] bg-[#D9D9D9] rounded mt-2">
                    <div class="w-full h-full" wire:ignore id='map' style='width: 100%; height: 100%;'></div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="ftr mt-2 bg-[#84A584] py-14 flex ite">
        <div class="w-[30%] text-white pl-20">
            <div class="con">Contact Us :</div>
            <div class="con">Telp :</div>
            <div class="con">Email :</div>
        </div>
        <div class="w-[40%] font-semibold flex justify-center items-center text-white text-center">
            @ 2024 All Rights Reserved.
        </div>
        <div class="w-[30%]"></div>
    </div>
</div>


@push('scripts')
    <script>
        const defaultLocation = [{{ (float)env('MAPBOX_DEFAULT_LONG') }}, {{ (float)env('MAPBOX_DEFAULT_LAT') }}];

        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        var map = new mapboxgl.Map({
            container: 'map',
            center: defaultLocation,
            zoom: 11.15,
            style: 'mapbox://styles/mapbox/streets-v11'
        });

        const geoJson = {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                        "106.73830754205",
                        "-6.2922403995615"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "iconSize": [
                        50,
                        50
                    ],
                    "locationId": 30,
                    "name": "Dr. Muhammad Saiful, Sp.PD",
                    "image": "https://krakataumedika.com/images/dr_Eko.png",
                    "spesialis": "Spesialis Penyakit Dalam",
                    "telepon": "0856234234333",
                    "rating": 0,
                    "alamat": "Jl. Jati 1 no 12, Way Halim, Bandar Lampung",
                    "jadwal": "Jumat, 10.00 wib - 13.00 wib\nSenin, 08.00 wib - 14.00 wib",
                    "maps": "https://maps.app.goo.gl/2WrYVtLzUMinwF576",
                    "sip": "1871/503/00634/446-SIP.M/III.16/IX/2023",
                }
            }]
        }

        const loadLocations = () => {
            geoJson.features.forEach((location) => {
                const {
                    geometry,
                    properties
                } = location;
                const {
                    locationId,
                    name,
                    image,
                    telepon,
                    rating,
                    spesialis,
                    alamat,
                    jadwal,
                    maps,
                    sip
                } = properties;

                let markerElement = document.createElement('div');
                markerElement.className = 'marker' + locationId;
                markerElement.id = locationId;
                markerElement.style.backgroundImage =
                    'url(https://cdn-icons-png.flaticon.com/512/9193/9193824.png)';
                markerElement.style.backgroundSize = 'cover';
                markerElement.style.width = '50px';
                markerElement.style.height = '50px';

                // RATING Star
                let ratingStars = '';
                if (rating === undefined || rating === null || isNaN(rating) || rating === 0) {
                    ratingStars = 'Belum memiliki rating';
                } else {
                    for (let i = 0; i < 5; i++) {
                        if (i < rating) {
                            ratingStars += `<svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                        } else {
                            ratingStars += `<svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                        }
                    }
                }

                const contents = `
                <div
                    class="dokter1  md:w-[310px] w-[260px] bg-[#84A584] border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                    <div class="foto aspect-square h-[75px] md:h-[85px] rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src= ${image} alt="">
                    </div>
                    <div class="detail flex flex-col justify-between text-white">
                        <div class="wrap flex flex-col gap-1">
                            <div class="nama text-[10px] md:text-[12px] font-semibold">
                                ${name}
                            </div>
                            <div class="sip md:text-[11px] text-[10px] medium">
                                ${sip}
                            </div>
                            <div class="sep md:text-[11px] text-[10px] medium">
                                ${spesialis}
                            </div>
                            <div class="no flex gap-2 items-center">
                                <div class="logo">
                                    <img src="/Images/telepon.svg" alt="">
                                </div>
                                <div class="no md:text-[11px] text-[10px] ">${telepon}</div>
                            </div>
                        </div>
                        <div class="wrap gap-3 flex items-center">
                            <div class="star flex">
                                ${ratingStars}
                            </div>
                            <a href="${maps}"  target="_blank"  class="p-1 bg-white text-[11px] text-black rounded">
                                Lihat Rute
                            </a>
                        </div>
                    </div>
                </div>
                `

                const popup = new mapboxgl.Popup({
                    offset: 25
                }).setHTML(contents).setMaxWidth("400px")

                new mapboxgl.Marker(markerElement)
                    .setPopup(popup)
                    .setLngLat(geometry.coordinates)
                    .addTo(map);
                markerElement.addEventListener('click', function() {
                    document.getElementById('detail-info').innerHTML = detaill;
                });
            });
        };

        loadLocations();

        map.addControl(new mapboxgl.NavigationControl());

        map.on('click', (e) => {
            const longitude = e.lngLat.lng;
            const latitude = e.lngLat.lat;

            @this.long = longitude
            @this.lat = latitude

            console.log({
                longitude,
                latitude
            });

        });


        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'modal': 'rgba(0, 0, 0, 0.35)',
                    }
                }
            }
        }
    </script>
@endpush
