<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajuan Dokter</title>
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
    <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-[85px] full-height">
        <div class="rounded h-full pb-1 mt-5">
            <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar p-10">
                {{-- isi konten disini --}}
                <div class="flex justify-end mb-10">
                    <div class="text-center items-center justify-center text-black font-bold text-[32px]">Selamat
                        Datang, Admin
                    </div>
                </div>
                <div class="flex justify-between text-black">
                    <div class="text-[30px] font-bold">Pengajuan Dokter</div>
                    <div class="flex justify-end text-center items-center">
                        <div class="relative w-full text-start">
                            <input type="text" id="simple-search"
                                class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-[231px]"
                                placeholder="Search..." required />
                        </div>
                    </div>
                </div>
                <div class="relative overflow-x-auto overflow-y-auto shadow-sm mt-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                        <thead class="text-[18px] text-white bg-[#6C806C] font-bold">
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
                                    Nomor Kontak
                                </th>
                                <th scope="col" class="px-3 py-2 justify-center items-center text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dummyData = [
                                [
                                    'nama_dokter' => 'Dr. John Doe',
                                    'spesialisasi' => 'Dokter Umum',
                                    'nomor_kontak' => '08123456789',
                                ],
                                [
                                    'nama_dokter' => 'Dr. Jane Smith',
                                    'spesialisasi' => 'Dokter Gigi',
                                    'nomor_kontak' => '087654321',
                                ],
                            ];
                            ?>
                            @foreach ($dummyData as $index => $data)
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#cbdccb] text-black hover:text-white">
                                    <td class="px-3 py-2"><?= $index + 1 ?></td>
                                    <td class="px-3 py-2"><?= $data['nama_dokter'] ?></td>
                                    <td class="px-3 py-2"><?= $data['spesialisasi'] ?></td>
                                    <td class="px-3 py-2"><?= $data['nomor_kontak'] ?></td>
                                    <td class="px-3 py-2 font-bold">
                                        <div
                                            class="flex justify-items-center justify-center items-center m-auto text-center gap-4">
                                            <a href="/lihat-pengajuan-dokter-tambah" title="Lihat">
                                                <div class="flex justify-center items-center m-auto text-center">Lihat
                                                </div>
                                            </a>
                                            <div>
                                                <button class="flex justify-center items-center m-auto text-center"
                                                    data-modal-target="popup-modal-1"
                                                    data-modal-toggle="popup-modal-1">Terima
                                                </button>
                                            </div>
                                            <div class="div">
                                                <button class="p-1 rounded-md cursor-pointer delete-button text-red-500"
                                                    title="Delete" type="button" data-modal-target="popup-modal-0"
                                                    data-modal-toggle="popup-modal-0">
                                                    Tolak
                                                </button>
                                            </div>
                                            <?php endforeach; ?>
                                            <!-- Modal -->
                                            <div id="popup-modal-1" tabindex="-1" aria-hidden="true"
                                                class="z-50 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-[#84A584] rounded-lg shadow">
                                                        <button
                                                            type="button"class="absolute top-3 end-2.5 text-white bg-transparent bg-[#534B3C] hover:bg-[#443c2e] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                            data-modal-hide="popup-modal-1">
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
                                                                Anda Yakin Ingin Menerima Dokter?</h3>
                                                            <a href="/data-pengajuan"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya
                                                            </a>
                                                            <button data-modal-hide="popup-modal-1" aria-hidden="true"
                                                                type="button"
                                                                class="py-2.5 px-5 ms-3 text-sm font-medium rounded-lg bg-[#534B3C] hover:bg-[#443c2e] text-white hover:text-white focus:z-10 ">Tidak</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                Anda Yakin Ingin Menolak Dokter?</h3>
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
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="relative flex justify-end mt-5">
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
        </div>
    </div>
</body>

</html>