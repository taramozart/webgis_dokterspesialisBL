<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Kelola Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] min-h-screen pt-10 pr-5 pb-[90px] full-height">
        <div class="m-10">
            <div class="text-end items-end justify-end text-black text-[32px] font-bold">Selamat Datang,
                Admin
            </div>
            <div class="flex justify-start items-start text-start text-[30px] text-black mb-5 font-bold">Data Dokter
                Spesialis
            </div>
            <div class="bg-white rounded-md h-full">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="p-10">
                        <div class="absolute -mt-5 -ml-5">
                            <a href="/kelola-data-dokter">
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
                        <div class="ml-10 -mt-5">
                            <div class="flex justify-between mb-5">
                                <div class="text-black font-bold text-[22px]">Info</div>
                            </div>
                            <div class="flex justify-between gap-10 text-black">
                                <div class="w-[50%]">
                                    <img src="{{url(asset('storage/'.$data['gambar']))}}" alt="">
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
                                                        {{ $data['nama'] }}
                                                    </td>
                                                </tr>
                                                <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                    <td class="px-3 py-2 font-bold text-[16px]">
                                                        No.SIP
                                                    </td>
                                                    <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                        {{ $data['nomor_sip']}}
                                                    </td>
                                                </tr>
                                                <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                    <td class="px-3 py-2 font-bold text-[16px]">
                                                        Spesialisasi
                                                    </td>
                                                    <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                        {{$data['bidang_spesialisasis']['keterangan']}}
                                                    </td>
                                                </tr>
                                                <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                    <td class="px-3 py-2 font-bold text-[16px]">
                                                        Nomor Kontak
                                                    </td>
                                                    <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                        {{$data['nomor_kontak']}}
                                                    </td>
                                                </tr>
                                                <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                    <td class="px-3 py-2 font-bold text-[16px]">
                                                        Jadwal Praktik
                                                    </td>
                                                    <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                        {{$data['jadwal']}}
                                                    </td>
                                                </tr>
                                                <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                    <td class="px-3 py-2 font-bold text-[16px]">
                                                        Kecamatan
                                                    </td>
                                                    <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                        {{$data['kecamatans']['keterangan']}}
                                                    </td>
                                                </tr>
                                                <tr class="bg-white hover:bg-[#84A584] text-black hover:text-white">
                                                    <td class="px-3 py-2 font-bold text-[16px]">
                                                        Alamat
                                                    </td>
                                                    <td class="px-5 py-2 border-b border-[#D9D9D9]">
                                                        {{$data['alamat']}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md h-full mt-5">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="p-10">
                        <div class="text-[24px] font-bold text-black">Reviews</div>
                        <div class="flex justify-between">
                            <div class="w-[40%]">
                                <div class="text-[20px] font-bold text-black mt-5">Total Review</div>
                                <div class="flex">
                                    <div class="text-[42px] font-bold text-black">100</div>
                                    <div
                                        class="flex text-center items-center mt-5 ml-2 text-[20px] font-bold text-black">
                                        Reviewer</div>
                                </div>
                                <div class="text-[20px] text-[#8F8F8F] mt-5">Jumlah keseluruhan dari review</div>
                            </div>
                            <div class="border-l h-[130px]"></div>
                            <div class="w-[60%] ml-10">
                                <div class="text-[20px] font-bold text-black mt-5">Avarange Rating</div>
                                <div class="flex">
                                    <div class="text-[42px] font-bold text-black">4.2</div>
                                    <div class="flex items-center ml-5">
                                        <svg class="w-8 h-8 text-yellow-300 ms-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-8 h-8 text-yellow-300 ms-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-8 h-8 text-yellow-300 ms-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-8 h-8 text-yellow-300 ms-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-8 h-8 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-[20px] text-[#8F8F8F] mt-5">Rata - rata rating dari seluruh reviewer
                                </div>
                            </div>
                        </div>
                        <div class="border-b w-[100%] mt-10 mb-10"></div>
                        <div class="overflow-y-auto overflow-x-auto hide-scrollbar h-[500px]">
                            <?php
                            $dummyData = [
                                [
                                    'nama' => 'Unknown',
                                    'tanggal' => '28 Oktober 2022',
                                    'waktu' => '10.00 wib',
                                    'rating' => 4,
                                    'review' => 'This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.',
                                    'gambar' => '/docs/images/people/profile-picture-5.jpg',
                                ],
                                [
                                    'nama' => 'Unknown',
                                    'tanggal' => '28 Oktober 2022',
                                    'waktu' => '10.00 wib',
                                    'rating' => 4,
                                    'review' => 'This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.',
                                    'gambar' => '/docs/images/people/profile-picture-5.jpg',
                                ],
                                [
                                    'nama' => 'Unknown',
                                    'tanggal' => '28 Oktober 2022',
                                    'waktu' => '10.00 wib',
                                    'rating' => 4,
                                    'review' => 'This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.',
                                    'gambar' => '/docs/images/people/profile-picture-5.jpg',
                                ],
                                [
                                    'nama' => 'Unknown',
                                    'tanggal' => '28 Oktober 2022',
                                    'waktu' => '10.00 wib',
                                    'rating' => 4,
                                    'review' => 'This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.',
                                    'gambar' => '/docs/images/people/profile-picture-5.jpg',
                                ],
                                [
                                    'nama' => 'Unknown',
                                    'tanggal' => '28 Oktober 2022',
                                    'waktu' => '10.00 wib',
                                    'rating' => 4,
                                    'review' => 'This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.',
                                    'gambar' => '/docs/images/people/profile-picture-5.jpg',
                                ],
                            ];
                            ?>
                            <?php foreach ($dummyData as $data): ?>
                            <article>
                                <div class="flex mb-5">
                                    <div class="w-[90%]">
                                        <div class="flex items-center mb-2">
                                            <img class="w-10 h-10 me-4 rounded-full" src="<?php echo $data['gambar']; ?>"
                                                alt="">
                                            <div class="font-medium text-black flex">
                                                <p><?php echo $data['nama']; ?><span
                                                        class="pl-2 text-[#8F0202]"><?php echo $data['tanggal']; ?></span>
                                                    <time datetime="2014-08-16 19:00"
                                                        class="block text-sm text-black"><?php echo $data['waktu']; ?></time>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ml-14">
                                            <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                                <?php for ($i = 0; $i < $data['rating']; $i++): ?>
                                                <svg class="w-6 h-6 text-yellow-300" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <?php endfor; ?>
                                                <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">
                                                    <?php echo $data['review']; ?>
                                                </h3>
                                            </div>
                                            <p class="mb-2 text-black"><?php echo $data['review']; ?></p>
                                        </div>
                                    </div>
                                    <div class="w-[10%]">
                                        <div class="text-[#8F8F8F] text-[16px] font-bold">
                                            <button class="cursor-pointer delete-button" title="Delete"
                                                type="button" data-modal-target="popup-modal-0"
                                                data-modal-toggle="popup-modal-0">
                                                Hapus
                                            </button>
                                            <!-- Modal -->
                                            <div id="popup-modal-0" tabindex="-1" aria-hidden="true"
                                                class="z-50 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-[#84A584] rounded-lg shadow">
                                                        <button
                                                            type="button"class="absolute top-3 end-2.5 text-white bg-transparent bg-[#534B3C] hover:bg-[#443c2e] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                            data-modal-hide="popup-modal-0">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="white"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="white" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 md:p-5 text-center">
                                                            <svg class="mx-auto mb-4 text-white w-12 h-12"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-white ">
                                                                Anda Yakin Ingin Menghapus Data?</h3>
                                                            <a href="/data-pengajuan"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya
                                                            </a>
                                                            <button data-modal-hide="popup-modal-0" aria-hidden="true"
                                                                type="button"
                                                                class="py-2.5 px-5 ms-3 text-sm font-medium rounded-lg bg-[#534B3C] hover:bg-[#443c2e] text-white hover:text-white focus:z-10 ">Tidak</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>