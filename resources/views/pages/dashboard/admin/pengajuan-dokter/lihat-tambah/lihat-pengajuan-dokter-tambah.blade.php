<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] min-h-screen pt-10 pr-5 pb-[90px] full-height">
        <div class="m-10">
            <div class="text-end items-end justify-end text-black text-[32px] font-bold">Selamat Datang,
                Admin
            </div>
            <div class="flex justify-start items-start text-start text-[30px] text-black mb-5 font-bold">Pengajuan
                Dokter</div>
            <div class="bg-white rounded-md h-full">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar p-10">
                    {{-- isi konten disini --}}
                    <div class="p-10">
                        <div class="flex justify-between">
                            <div class="text-red-500 font-bold text-[22px]">Status : Pengajuan Data Baru</div>
                        </div>
                        <div class="flex justify-between gap-10 text-black">
                            <div class="w-[50%]">
                                <svg class="w-full h-full" viewBox="0 0 416 229" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0H416V229H0V0Z" fill="#D9D9D9" />
                                </svg>
                                <div class="mb-4 flex mt-5">
                                    <a href="/path/to/your/file.pdf" download>
                                        <div
                                            class="w-[120px] flex gap-3 text-center m-auto cursor-pointer bg-[#6C806C] hover:bg-[#475447] text-white py-2 px-4 rounded-lg font-bold">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.5 17.7083V3.125" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.25 11.4583L12.5 17.7083L18.75 11.4583" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M19.7923 21.875H5.20898" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Unduh
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-[50%]">
                                <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                                        <tbody>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Nama Dokter
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    Dr. Ariella
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Spesialisasi
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    Spesialis Orthopedi
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Nomor Kontak
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    123456789
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Jadwal Praktik
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    123456789
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    No. SIP
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    123/abc/56789
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Kecamatan
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    Sukarame
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Alamat
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    Jalan nangka 1 no 3 Kec.
                                                    Sukarame Bandar Lampung
                                                </td>
                                            </tr>
                                            <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                <td class="px-3 py-2 font-bold text-[16px]">
                                                    Link maps
                                                </td>
                                                <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                    https://maps.app.goo.gl/CJV9TWDKhNqoYcHm6
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
                                        class="w-[116px] text-center m-auto cursor-pointer bg-[#89D389] hover:bg-[#475447] text-white py-2 px-2 rounded-lg inline-block font-bold">
                                        Terima
                                    </div>
                                </button>
                            </div>
                            <div class="div">
                                <button>
                                    <div
                                        class="w-[116px] text-center m-auto cursor-pointer bg-[#FF4747] hover:bg-[#903b3b] text-white py-2 px-2 rounded-lg inline-block font-bold">
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
