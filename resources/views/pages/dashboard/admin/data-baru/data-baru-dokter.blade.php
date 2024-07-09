<div class="wrapp bg-[#FAF1E4]">
    <div class="hidden">
        <x-navbar />
    </div>
    <x-sidebar-admin/>
    <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-[85px] full-height">
        <div class="flex justify-between gap-5">
            <div class="w-[60%]">
                <div class="text-black text-[26px] font-bold">Peta Kota Bandar Lampung</div>
                <div class=" items-center justify-center w-full mt-5">
                    <div class="rounded-lg border-4 border-[#BCB3A3]">
                        {{-- maps nya disini --}}
                        <div class="w-full h-[630px]">
                            <div class="w-full h-full" wire:ignore id='map' style='width: 100%; height: 100%;'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[40%]">
                <div class="text-black text-[26px] font-bold mb-5">Tambah Data Lokasi</div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Nama Dokter</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Nama" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">No. SIP</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan No. SIP" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Bidang Spesialisasi</label>
                    <select id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full h-[40px] bg-transparent"
                        required>
                        <option value="">Pilih Bidang Spesialisasi</option>
                        <option value="anak">Anak</option>
                        <option value="penyakit dalam">Penyakit Dalam</option>
                    </select>
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Nomor Kontak</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Nomor Kontak" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Jadwal Praktik</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Jadwal Praktik" required />
                </div>
                <div class="w-full mb-1">
                    <label for="kecamatan" class="text-black font-bold">Kecamatan</label>
                    <select id="kecamatan" name="kecamatan"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full h-[40px] bg-transparent"
                        required>
                        <option value="">Pilih Kecamatan</option>
                        <option value="Bandar Lampung">Bandar Lampung</option>
                        <option value="Rajabasa">Rajabasa</option>
                        <option value="Tanjung Karang Pusat">Tanjung Karang Pusat</option>
                        <option value="Tanjung Karang Timur">Tanjung Karang Timur</option>
                        <option value="Tanjung Karang Barat">Tanjung Karang Barat</option>
                        <option value="Tanjung Senang">Tanjung Senang</option>
                        <option value="Tanjung Karang Timur Kota">Tanjung Karang Timur Kota</option>
                        <option value="Tanjung Karang Barat Kota">Tanjung Karang Barat Kota</option>
                        <option value="Kedamaian">Kedamaian</option>
                        <option value="Teluk Betung Utara">Teluk Betung Utara</option>
                        <option value="Teluk Betung Selatan">Teluk Betung Selatan</option>
                        <option value="Kemiling">Kemiling</option>
                        <option value="Panjang">Panjang</option>
                        <option value="Tanjung Karang Timur Kota">Tanjung Karang Timur Kota</option>
                        <option value="Tanjung Karang Barat Kota">Tanjung Karang Barat Kota</option>
                    </select>
                </div>
                <div class="w-full mb-1 flex flex-col">
                    <label for="name" class="text-black font-bold mb-1">Alamat</label>
                    <textarea id="message" rows="4"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full h-[70px] bg-transparent"
                        placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="flex justify-between gap-2 mb-1">
                    <div class="w-full">
                        <label htmlFor="name" class="text-black font-bold">Latitude</label>
                        <input type="number" id="name"
                            class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                            placeholder="Masukkan Latitude" required wire:model="latitude"/>
                    </div>
                    <div class="w-full">
                        <label htmlFor="name" class="text-black font-bold">Longitude</label>
                        <input type="number" id="name"
                            class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                            placeholder="Masukkan Longitude" required wire:model="longitude"/>
                    </div>
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="image" class="mb-1 text-black font-bold">Gambar</label>
                    <div class="relative">
                        <input type="file" id="image" accept="image/*" class="hidden" required
                            onchange="displayFileName()" />
                        <label for="image"
                            class="cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block font-bold">
                            Unggah Gambar
                        </label>
                        <span id="file-name" class="text-[#8F8F8F] text-sm ml-2">Tidak ada gambar.</span>
                    </div>
                    <script>
                        function displayFileName() {
                            const fileInput = document.getElementById('image');
                            const fileNameSpan = document.getElementById('file-name');
                            if (fileInput.files.length > 0) {
                                fileNameSpan.textContent = fileInput.files[0].name;
                            } else {
                                fileNameSpan.textContent = 'Tidak ada gambar.';
                            }
                        }
                    </script>
                </div>
                <div class="mb-4 flex mt-5 m-auto justify-end">
                    <a href="">
                        <div
                            class="w-[145px] font-bold text-center m-auto cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block">
                            Simpan
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const defaultLocation = [{{ (float)env('MAPBOX_DEFAULT_LONG') }}, {{ (float)env('MAPBOX_DEFAULT_LAT') }}];

        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        var map = new mapboxgl.Map({
            container: 'map',
            center: defaultLocation,
            zoom: 12.15,
            style: 'mapbox://styles/mapbox/streets-v11'
        });

        const geoJson = {
            "type": "FeatureCollection",
            "features": [
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "105.22482267639634",
                            "-5.418189841691614"
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
                    }
                },
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "105.30448118632034",
                            "-5.414802148366661"
                        ],
                        "type": "Point"
                    },
                    "properties": {
                        "iconSize": [
                            50,
                            50
                        ],
                        "locationId": 29,
                        "name": "Dr. Burhan",
                        "image": "https://www.krakataumedika.com/images/dr_Hadi_New.png",
                        "spesialis": "Spesialis Penyakit Dalam",
                        "telepon": "0856234234333",
                        "rating": 4,
                        "alamat": "Jl. Jati 1 no 12, Way Halim, Bandar Lampung",
                        "jadwal": "Jumat, 10.00 wib - 13.00 wib\nSenin, 08.00 wib - 14.00 wib",
                        "maps": "https://maps.app.goo.gl/2WrYVtLzUMinwF576",
                    }
                },
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "105.24616806352168",
                            "-5.460380426674831"
                        ],
                        "type": "Point"
                    },
                    "properties": {

                        "iconSize": [
                            50,
                            50
                        ],
                        "locationId": 22,
                        "name": "Dr. Hirawati",
                        "image": "https://krakataumedika.com/images/dra_Entin.png",
                        "spesialis": "Spesialis Anak",
                        "telepon": "0856234234333",
                        "rating": 5,
                        "alamat": "Jl. Jati 1 no 12, Way Halim, Bandar Lampung",
                        "jadwal": "Jumat, 10.00 wib - 13.00 wib\nSenin, 08.00 wib - 14.00 wib",
                        "maps": "https://maps.app.goo.gl/2WrYVtLzUMinwF576",
                    }
                },
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "105.30355312600983",
                            "-5.448062313634082"
                        ],
                        "type": "Point"
                    },
                    "properties": {

                        "iconSize": [
                            50,
                            50
                        ],
                        "locationId": 19,
                        "name": "Dr. Adam Suseno",
                        "image": "https://krakataumedika.com/images/dr_Anton_Sirait_.png",
                        "spesialis": "Spesialis Penyakit Dalam",
                        "telepon": "0856234234333",
                        "rating": 3,
                        "alamat": "Jl. Jati 1 no 12, Way Halim, Bandar Lampung",
                        "jadwal": "Jumat, 10.00 wib - 13.00 wib\nSenin, 08.00 wib - 14.00 wib",
                        "maps": "https://maps.app.goo.gl/2WrYVtLzUMinwF576",
                    }
                },
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "105.27014295485714",
                            "-5.439901424611463"
                        ],
                        "type": "Point"
                    },
                    "properties": {
                        "iconSize": [
                            50,
                            50
                        ],
                        "locationId": 18,
                        "name": "Dr. Witajari",
                        "image": "https://krakataumedika.com/images/dr_Elsa.png",
                        "spesialis": "Spesialis Penyakit Dalam",
                        "telepon": "0856234234333",
                        "rating": 3,
                        "alamat": "Jl. Jati 1 no 12, Way Halim, Bandar Lampung",
                        "jadwal": "Jumat, 10.00 wib - 13.00 wib\nSenin, 08.00 wib - 14.00 wib",
                        "maps": "https://maps.app.goo.gl/2WrYVtLzUMinwF576",
                    }
                },
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "105.27725808389823",
                            "-5.418189841691614"
                        ],
                        "type": "Point"
                    },
                    "properties": {
                        "iconSize": [
                            50,
                            50
                        ],
                        "locationId": 12,
                        "name": "Dr. Putri Ratu",
                        "image": "https://krakataumedika.com/images/dr_Inne.png",
                        "spesialis": "Spesialis Penyakit Dalam",
                        "telepon": "0856234234333",
                        "rating": 4,
                        "alamat": "Jl. Jati 1 no 12, Way Halim, Bandar Lampung",
                        "jadwal": "Jumat, 10.00 wib - 13.00 wib\nSenin, 08.00 wib - 14.00 wib",
                        "maps": "https://maps.app.goo.gl/2WrYVtLzUMinwF576",
                    }
                }
            ]
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
                    maps
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

                const detaill = `
                <div class="detail  text-black min-h-[70vh]">
                        <div class="head text-[24px] font-semibold">${name}</div>
                        <div class="mg aspect-square  w-full flex justify-center h-[210px]  mt-2">
                            <img class="h-full object-cover rounded-lg  shadow-lg " src=${image}
                                alt="">
                        </div>
                        <div class="wrap-teks mt-3 flex flex-col gap-1">
                            <div class="teks flex gap-1">
                                <div class="ka font-semibold">Kategori :</div>
                                <div class="ka">${spesialis}</div>
                            </div>
                            <div class="teks flex gap-1">
                                <div class="ka font-semibold">Kontak :</div>
                                <div class="ka">${telepon}</div>
                            </div>
                            <div class="teks flex flex-col gap-1">
                                <div class="ka font-semibold">Jadwal Praktik :</div>
                                <div class="ka">${jadwal}</div>
                            </div>
                            <div class="teks flex flex-col gap-1">
                                <div class="ka  font-semibold">Alamat :</div>
                                <div class="ka">${alamat}</div>
                            </div>
                            <div class="teks flex gap-1 items-center">
                                <div class="ka  font-semibold">Rating :</div>
                                <div class="star flex">
                                    ${ratingStars}
                                </div>
                            </div>
                            <!-- Modal toggle -->
                            <div class="mt-2">
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    class="block text-white bg-[#534B3C] hover:bg-[#383226] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Beri Rating
                                </button>
                            </div>
                            {{--  --}}
                            <!-- Main modal -->
                            <div id="default-modal" tabindex="-1" aria-hidden="true"
                                class="hidden flex bg-modal overflow-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen max-h-full">
                                <div class="relative m-auto p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Rating Dokter
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="default-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
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
                                                        <input type="checkbox" id="rating{{ $i }}"
                                                            class="hidden" value="{{ $i }}">
                                                        <label for="rating{{ $i }}"
                                                            class="cursor-pointer text-xl">
                                                            <svg class="star-icon fill-current text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"
                                                                width="30" height="30">
                                                                <path class="st0" d="M0 0h24v24H0z"
                                                                    fill="none" />
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
                                            <button id="saveRatingButton"
                                                class="bg-[#84A584] hover:bg-[#6b886b] w-full text-white font-bold py-2 px-4 rounded">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="mb-5">
                        <div class="ka font-semibold">Review :</div>
                        <div class="w-full bg-[#C8BAA1] h-[2px]"></div>
                        <div class="cardd p-4 mt-3  bg-white rounded-lg border flex flex-col gap-3 border-[#DFD1B6]">
                            <div class="cardd1 flex gap-3">
                                <div class="">
                                    <img class="w-[40px] h-[40px]" src="/Images/review.svg" alt="">
                                </div>
                                <div class="kontern   w-full">
                                    <div class="head font-semibold text-[20px]">
                                        Unknown <span class="text-[16px] text-[#8F0202]">28 Oktiber 2022</span> <br>
                                        <span class="text-[16px] text-gray-400">10.00 WIB</span>
                                    </div>
                                    <div class="star ">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-gray-300 dark:text-gray-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iure nesciunt
                                        eveniet ducimus nulla minima voluptatem sint cupiditate porro dicta?
                                    </div>
                                </div>
                            </div>
                            <div class="cardd1 flex gap-3">
                                <div class="">
                                    <img class="w-[40px] h-[40px]" src="/Images/review.svg" alt="">
                                </div>
                                <div class="kontern   w-full">
                                    <div class="head font-semibold text-[20px]">
                                        Unknown <span class="text-[16px] text-[#8F0202]">28 Oktiber 2022</span> <br>
                                        <span class="text-[16px] text-gray-400">10.00 WIB</span>
                                    </div>
                                    <div class="star ">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-gray-300 dark:text-gray-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iure nesciunt
                                        eveniet ducimus nulla minima voluptatem sint cupiditate porro dicta?
                                    </div>
                                </div>
                            </div>
                            <div class="cardd1 flex gap-3">
                                <div class="">
                                    <img class="w-[40px] h-[40px]" src="/Images/review.svg" alt="">
                                </div>
                                <div class="kontern   w-full">
                                    <div class="head font-semibold text-[20px]">
                                        Unknown <span class="text-[16px] text-[#8F0202]">28 Oktiber 2022</span> <br>
                                        <span class="text-[16px] text-gray-400">10.00 WIB</span>
                                    </div>
                                    <div class="star ">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-6 h-6 ms-2 text-gray-300 dark:text-gray-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iure nesciunt
                                        eveniet ducimus nulla minima voluptatem sint cupiditate porro dicta?
                                    </div>
                                </div>
                            </div>
                        </div>
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

        var marker = new mapboxgl.Marker();

        map.on('click', (e) => {
            console.log(e);
            const longitude = e.lngLat.lng;
            const latitude = e.lngLat.lat;

            @this.longitude = longitude
            @this.latitude = latitude

            console.log({
                longitude,
                latitude
            });

            marker.setLngLat(e.lngLat).addTo(map)
            // POP UP RATING
            // Rating Check rate functionality
            const stars = document.querySelectorAll('.star-icon');
            const starPaths = document.querySelectorAll('.star-path');

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    const ratingValue = index + 1;
                    console.log('Rating: ', ratingValue);
                    // Reset all stars' colors
                    starPaths.forEach((path, idx) => {
                        if (idx < ratingValue) {
                            path.classList.add('text-yellow-300');
                        } else {
                            path.classList.remove('text-yellow-300');
                        }
                    });
                });
            });

            // Event listener untuk tombol "Beri Rating"
            const ratingButtons = document.querySelectorAll('[data-modal-toggle]');
            ratingButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-target');
                    const modal = document.getElementById(modalId);
                    modal.classList.toggle('hidden');
                });
            });

            // Event listener untuk tombol "Tutup" di dalam modal
            const closeButtons = document.querySelectorAll('[data-modal-hide]');
            closeButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-hide');
                    const modal = document.getElementById(modalId);
                    modal.classList.add('hidden');
                });
            });
            // POP UP RATING

        });

        // MAP diluar dari loop on
        document.addEventListener("DOMContentLoaded", function() {
            // Hide all tab contents except the first one
            document.querySelectorAll('[id^="content"]').forEach((el, index) => {
                if (index !== 0) {
                    el.classList.add('hidden');
                }
            });
        });

        function showTab(tab) {
            // Hide all tab contents
            document.querySelectorAll('[id^="content"]').forEach((el) => {
                el.classList.add('hidden');
            });

            // Remove active class from all buttons
            document.querySelectorAll('[id^="tab"]').forEach((btn) => {
                btn.classList.remove('tab-active');
            });

            // Show the selected tab content
            document.getElementById('content' + tab.slice(-1)).classList.remove('hidden');
            // Add active class to the clicked button
            document.getElementById(tab).classList.add('tab-active');
        }

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
        // MAP

        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'modal': 'rgba(0, 0, 0, 0.35)',
                        'coklat': '#534B3C',
                    }
                }
            }
        }
    </script>
@endpush
