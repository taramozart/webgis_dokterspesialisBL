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
                <div class="text-black text-[26px] font-bold mb-5">Edit Data Lokasi</div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Nama Dokter</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Nama" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">No.SIP</label>
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
                        <label htmlFor="name"class="text-black font-bold">Latitude</label>
                        <input type="number" id="name"
                            class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                            placeholder="Masukkan Latitude" required />
                    </div>
                    <div class="w-full">
                        <label htmlFor="name" class="text-black font-bold">Longitude</label>
                        <input type="number" id="name"
                            class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                            placeholder="Masukkan Longitude" required />
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
                    }
                },

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
                        'coklat': '#534B3C',
                    }
                }
            }
        }
    </script>
@endpush
