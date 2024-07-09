<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Pengajuan Dokter Hapus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] min-h-screen pt-10 pr-5 pb-[90px] full-height">
        <div class="">
            <div class="text-end items-end justify-end text-black text-[32px] font-bold">Selamat Datang,
                Admin
            </div>
            <div class="flex justify-start text-[30px] mb-5 ml-5 text-black font-bold">Pengajuan Dokter</div>
            <div class="bg-white rounded-md h-full w-[70%] m-auto">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="p-5">
                        <div class="flex justify-center m-auto text-start">
                            <div class="text-red-500 text-[22px] font-bold">Status : Pengajuan Penghapusan Lokasi

                            </div>
                        </div>
                        <div class="flex justify-center gap-2 text-black">
                            <div class="w-[70%]">
                                <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                                        <tbody>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    Nama Dokter
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    Dr. Ariella
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    Spesialisasi
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    Spesialis Orthopedi
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    Nomor Kontak
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    123456789
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    Jadwal Praktik
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    123456789
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    No. SIP
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    123/abc/56789
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    Kecamatan
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    Sukarame
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold">
                                                    Alamat
                                                </td>
                                                <td class="px-5 py-2 border-b border-gray-700">
                                                    Jalan nangka 1 no 3 Kec.
                                                    Sukarame Bandar Lampung
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center gap-5 mt-10">
                            <div class="div">
                                <button>
                                    <div
                                        class="w-[116px] text-center m-auto cursor-pointer bg-[#89D389] text-white py-2 px-2 rounded-lg inline-block font-bold">
                                        Terima
                                    </div>
                                </button>
                            </div>
                            <div class="div">
                                <button>
                                    <div
                                        class="w-[116px] text-center m-auto cursor-pointer bg-[#FF4747] text-white py-2 px-2 rounded-lg inline-block font-bold">
                                        Tolak
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-[10px] ml-2">
                        <a href="/pengajuan-dokter">
                            <div
                                class="w-[45px] text-center m-auto cursor-pointer bg-[#6C806C] hover:bg-[#475447] text-white py-2 px-2 rounded-lg inline-block">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 23.75L6.25 15L15 6.25" stroke="black" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M23.75 15H6.25" stroke="black" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
