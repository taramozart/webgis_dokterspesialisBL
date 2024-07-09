<div class="bg-[#FAF1E4]">
    <div class="wrap m-auto min-h-[95vh] flex md:flex-row flex-col gap-3 pt-[100px] px-3 text-black">
        <div class="left  order-2 md:order-1 flex flex-col gap-3 w-full md:w-[25%] ">
            {{-- drop web --}}
            <div class="sort flex gap-3">
                <div class="">Sort by : </div>
                <div class="menu flex flex-col gap-2">
                    <div class="top flex gap-3">
                        <div class="wilayah">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="wilayah"
                                class="text-white bg-[#84A584] hover:bg-[#637c63] focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center w-[130px]">Wilayah<svg
                                    class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="wilayah"
                                class="z-10 hidden bg-[#84A584] divide-y divide-gray-100 rounded-lg shadow w-[130px]">
                                <ul class="py-2 text-sm text-white" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-[#637c63]  ">Sukarame</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-[#637c63]  ">Way Halim</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-[#637c63]  ">Rajabasa</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="spesialisasi">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="Spesialisasi"
                                class="text-white bg-[#84A584] hover:bg-[#637c63] focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center w-[130px]">Spesialisasi<svg
                                    class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="Spesialisasi"
                                class="z-10 hidden bg-[#84A584] divide-y divide-gray-100 rounded-lg shadow w-[130px]">
                                <ul class="py-2 text-sm text-white" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-[#637c63]  ">Penyakit
                                            Dalam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-[#637c63]  ">Anak</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-[#637c63]  ">Gigi</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="bot flex gap-3">
                        <button id="tab1" onclick="showTab('tab1')"
                            class="riwayat text-white  hover:bg-[#637c63] focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center w-[130px] justify-center focus:bg-[#534B3C] bg-[#84A584]">Search</button>
                        <button id="tab2" onclick="showTab('tab2')"
                            class="openend text-white  hover:bg-[#637c63] focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center w-[130px] justify-center focus:bg-[#534B3C] bg-[#84A584]">History</button>
                    </div>
                </div>
            </div>
            {{-- drop web --}}

            {{-- konten --}}
            <div id="tabContent">
                <div id="content1" class="wrap-search">
                    <div class="searc mb-2">
                        <input placeholder="Cari Dokter" type="text"
                            class="w-full border border-[#D8C6A5] text-gray-900 text-sm rounded-md px-2 focus:outline-none focus:ring-transparent">
                    </div>
                    <div class=" md:h-[70vh] overflow-y-auto" id="detail-info">

                    </div>
                </div>
                {{-- kon2 --}}
                <div id="content2" class="wrap-history hidden">
                    <div class="searc mb-2">
                        <input placeholder="Cari History Dokter" type="text"
                            class="w-full border border-[#D8C6A5] text-gray-900 text-sm rounded-md px-2 focus:outline-none focus:ring-transparent">
                    </div>
                    <div class="detail text-black flex flex-col gap-3 h-[70vh] overflow-auto">
                        <div
                            class="dokter1 flex-shrink-0  w-full bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                            <div class="foto aspect-square h-[115px] rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                            </div>
                            <div class="detail flex flex-col justify-between">
                                <div class="wrap flex flex-col gap-1">
                                    <div class="nama text-[14px] font-semibold">
                                        Dr. Muhammad Saiful, Sp.PD
                                    </div>
                                    <div class="sep text-[11px] medium">
                                        Spesialis Penyakit Dalam
                                    </div>
                                    <div class="no flex gap-2 items-center">
                                        <div class="logo">
                                            <img src="/Images/telepon.svg" alt="">
                                        </div>
                                        <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                                    </div>
                                </div>
                                <div class="star">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="dokter1 flex-shrink-0  w-full bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                            <div class="foto aspect-square h-[115px] rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                            </div>
                            <div class="detail flex flex-col justify-between">
                                <div class="wrap flex flex-col gap-1">
                                    <div class="nama text-[14px] font-semibold">
                                        Dr. Muhammad Saiful, Sp.PD
                                    </div>
                                    <div class="sep text-[11px] medium">
                                        Spesialis Penyakit Dalam
                                    </div>
                                    <div class="no flex gap-2 items-center">
                                        <div class="logo">
                                            <img src="/Images/telepon.svg" alt="">
                                        </div>
                                        <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                                    </div>
                                </div>
                                <div class="star">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="dokter1 flex-shrink-0  w-full bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                            <div class="foto aspect-square h-[115px] rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                            </div>
                            <div class="detail flex flex-col justify-between">
                                <div class="wrap flex flex-col gap-1">
                                    <div class="nama text-[14px] font-semibold">
                                        Dr. Muhammad Saiful, Sp.PD
                                    </div>
                                    <div class="sep text-[11px] medium">
                                        Spesialis Penyakit Dalam
                                    </div>
                                    <div class="no flex gap-2 items-center">
                                        <div class="logo">
                                            <img src="/Images/telepon.svg" alt="">
                                        </div>
                                        <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                                    </div>
                                </div>
                                <div class="star">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="dokter1 flex-shrink-0  w-full bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                            <div class="foto aspect-square h-[115px] rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                            </div>
                            <div class="detail flex flex-col justify-between">
                                <div class="wrap flex flex-col gap-1">
                                    <div class="nama text-[14px] font-semibold">
                                        Dr. Muhammad Saiful, Sp.PD
                                    </div>
                                    <div class="sep text-[11px] medium">
                                        Spesialis Penyakit Dalam
                                    </div>
                                    <div class="no flex gap-2 items-center">
                                        <div class="logo">
                                            <img src="/Images/telepon.svg" alt="">
                                        </div>
                                        <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                                    </div>
                                </div>
                                <div class="star">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="dokter1 flex-shrink-0  w-full bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                            <div class="foto aspect-square h-[115px] rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                            </div>
                            <div class="detail flex flex-col justify-between">
                                <div class="wrap flex flex-col gap-1">
                                    <div class="nama text-[14px] font-semibold">
                                        Dr. Muhammad Saiful, Sp.PD
                                    </div>
                                    <div class="sep text-[11px] medium">
                                        Spesialis Penyakit Dalam
                                    </div>
                                    <div class="no flex gap-2 items-center">
                                        <div class="logo">
                                            <img src="/Images/telepon.svg" alt="">
                                        </div>
                                        <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                                    </div>
                                </div>
                                <div class="star">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- map --}}
        <div class="right order-1 md:order-2 w-full md:w-[75%] flex flex-col gap-4">

            <div class="mapp w-full h-[500px] md:h-[80%] rounded-lg border-2 overflow-hidden border-[#BCB3A3]">
                <div class="w-full h-full" wire:ignore id='map' style='width: 100%; height: 100%;'></div>
            </div>
            <div class="suges h-[130px] md:h-[20%] w-full flex gap-3 overflow-auto">
                <div
                    class="dokter1 flex-shrink-0  w-[310px] bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                    <div class="foto aspect-square h-full rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                    </div>
                    <div class="detail flex flex-col justify-between">
                        <div class="wrap flex flex-col gap-1">
                            <div class="nama text-[14px] font-semibold">
                                Dr. Muhammad Saiful, Sp.PD
                            </div>
                            <div class="sep text-[11px] medium">
                                Spesialis Penyakit Dalam
                            </div>
                            <div class="no flex gap-2 items-center">
                                <div class="logo">
                                    <img src="/Images/telepon.svg" alt="">
                                </div>
                                <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                            </div>
                        </div>
                        <div class="star">
                            <x-star-rating rating="4" />
                        </div>
                    </div>
                </div>
                <div
                    class="dokter1 flex-shrink-0  w-[310px] bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                    <div class="foto aspect-square h-full rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                    </div>
                    <div class="detail flex flex-col justify-between">
                        <div class="wrap flex flex-col gap-1">
                            <div class="nama text-[14px] font-semibold">
                                Dr. Muhammad Saiful, Sp.PD
                            </div>
                            <div class="sep text-[11px] medium">
                                Spesialis Penyakit Dalam
                            </div>
                            <div class="no flex gap-2 items-center">
                                <div class="logo">
                                    <img src="/Images/telepon.svg" alt="">
                                </div>
                                <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                            </div>
                        </div>
                        <div class="star">
                            <x-star-rating rating="4" />
                        </div>
                    </div>
                </div>
                <div
                    class="dokter1 flex-shrink-0  w-[310px] bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                    <div class="foto aspect-square h-full rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                    </div>
                    <div class="detail flex flex-col justify-between">
                        <div class="wrap flex flex-col gap-1">
                            <div class="nama text-[14px] font-semibold">
                                Dr. Muhammad Saiful, Sp.PD
                            </div>
                            <div class="sep text-[11px] medium">
                                Spesialis Penyakit Dalam
                            </div>
                            <div class="no flex gap-2 items-center">
                                <div class="logo">
                                    <img src="/Images/telepon.svg" alt="">
                                </div>
                                <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                            </div>
                        </div>
                        <div class="star">
                            <x-star-rating rating="4" />
                        </div>
                    </div>
                </div>
                <div
                    class="dokter1 flex-shrink-0  w-[310px] bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                    <div class="foto aspect-square h-full rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                    </div>
                    <div class="detail flex flex-col justify-between">
                        <div class="wrap flex flex-col gap-1">
                            <div class="nama text-[14px] font-semibold">
                                Dr. Muhammad Saiful, Sp.PD
                            </div>
                            <div class="sep text-[11px] medium">
                                Spesialis Penyakit Dalam
                            </div>
                            <div class="no flex gap-2 items-center">
                                <div class="logo">
                                    <img src="/Images/telepon.svg" alt="">
                                </div>
                                <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                            </div>
                        </div>
                        <div class="star">
                            <x-star-rating rating="4" />
                        </div>
                    </div>
                </div>
                <div
                    class="dokter1 flex-shrink-0  w-[310px] bg-white border-[#BCB3A3] border p-3 flex gap-3 rounded-lg shadow-lg">
                    <div class="foto aspect-square h-full rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src="/Images/dokter.png" alt="">
                    </div>
                    <div class="detail flex flex-col justify-between">
                        <div class="wrap flex flex-col gap-1">
                            <div class="nama text-[14px] font-semibold">
                                Dr. Muhammad Saiful, Sp.PD
                            </div>
                            <div class="sep text-[11px] medium">
                                Spesialis Penyakit Dalam
                            </div>
                            <div class="no flex gap-2 items-center">
                                <div class="logo">
                                    <img src="/Images/telepon.svg" alt="">
                                </div>
                                <div class="no text-[12px] text-[#84A584]">0856234234333</div>
                            </div>
                        </div>
                        <div class="star">
                            <x-star-rating rating="4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- footer --}}
    <div class="ftr bg-[#84A584] py-14 mt-6 flex ite">
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
                    }
                },
                {
                    "type": "Feature",
                    "geometry": {
                        "coordinates": [
                            "106.68681595869",
                            "-6.3292244652013"
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
                            "106.62490035406",
                            "-6.3266855038639"
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
                            "106.72391468711",
                            "-6.3934163494543"
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
                            "106.67224158205",
                            "-6.3884963990263"
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
                            "106.74495523289",
                            "-6.3642034511073"
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

        map.on('click', (e) => {
            const longitude = e.lngLat.lng;
            const latitude = e.lngLat.lat;

            @this.long = longitude
            @this.lat = latitude

            console.log({
                longitude,
                latitude
            });
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
                    }
                }
            }
        }
    </script>
@endpush
