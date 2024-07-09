<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-navbar/>
    <div class="wrap px-3 md:px-0 pt-[100px] min-h-screen container m-auto">
        <div class="head flex md:flex-row flex-col md:items-center md:justify-between">
            <div class="text-[30px] text-black font-bold">Profil Dokter</div>
            <form class="flex justify-end">
                <div class="relative w-full text-start">
                    <input type="text" id="simple-search"
                        class="bg-white border text-sm rounded-md block w-full md:w-[330px] py-2 p-2.5" placeholder="Cari Dokter"
                        required />
                </div>
            </form>
        </div>
        {{-- table --}}
        <div class="relative overflow-x-auto overflow-y-auto shadow-sm mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                <thead class="text-base text-white bg-[#534B3C]">
                    <tr>
                        <th scope="col" class="px-3 py-2">
                            No
                        </th>
                        <th scope="col" class="px-3 py-2">
                            Nama Dokter
                        </th>
                        <th scope="col" class="px-3 py-2">
                            Spesialisasi
                        </th>
                        <th scope="col" class="px-3 py-2">
                            Jadwal Praktik
                        </th>
                        <th scope="col" class="px-3 py-2 justify-center items-center text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-gray-700 hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-2">
                            1
                        </td>
                        <td class="px-3 py-2">
                            Dr. Muhammad Saiful, Sp.PD
                        </td>
                        <td class="px-3 py-2">
                            Spesialis Penyakit Dalam
                        </td>
                        <td class="px-3 py-2">
                            Senin - Jumat
                            17.00 wib - 20.00 wib
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex justify-items-center justify-center items-center m-auto text-center gap-4">
                                <a href="/detail-dokter" title="Lihat">
                                    <div class="flex justify-center items-center m-auto text-center">Lihat</div>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative flex justify-center mt-5">
            <div class="">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm gap-2">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-white rounded-lg hover:bg-[#4f634f] hover:text-white font-bold">
                                <svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.0492 1.08221L1.08169 8.88528L8.88477 16.8528" stroke="black"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#84A584] rounded-lg hover:bg-[#4f634f] hover:text-white font-bold">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-white rounded-lg hover:bg-[#4f634f] hover:text-white font-bold">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-white rounded-lg hover:bg-[#4f634f] hover:text-white font-bold">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-white rounded-lg hover:bg-[#4f634f] hover:text-white font-bold">
                                <svg width="11" height="17" viewBox="0 0 11 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.17188 15.8857L9.05759 8L1.17188 0.114288" stroke="black"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="ftr bg-[#84A584] py-14 flex ite">
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
</body>

</html>
