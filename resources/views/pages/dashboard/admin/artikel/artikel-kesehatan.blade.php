<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel Kesehatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] h-screen pt-2 pr-5 pb-[85px] full-height">
        <div class="rounded h-full pb-1 mt-5">
            <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar p-10">
                {{-- isi konten disini --}}
                <div class="flex justify-end mb-10">
                    <div class="text-center items-center justify-center text-black font-bold text-[34px] font-bold">Selamat
                        Datang, Admin
                    </div>
                </div>
                <div class="flex justify-between text-black">
                    <a href="/buat-artikel" type="button"
                        class="flex justify-start group w-[200px] h-[50px] text-lg font-medium rounded-lg bg-[#534B3C] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white">
                        <div class="text-center justify-center items-center flex font-bold m-auto">Buat Artikel
                        </div>
                    </a>
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
                        <thead class="text-xs text-white uppercase bg-[#6C806C]">
                            <tr>
                                <th scope="col" class="px-3 py-2">
                                    No
                                </th>
                                <th scope="col" class="px-3 py-2">
                                    Hari / Tanggal
                                </th>
                                <th scope="col" class="px-3 py-2">
                                    Subtittle
                                </th>
                                <th scope="col" class="px-3 py-2">
                                    Penulis
                                </th>
                                <th scope="col" class="px-3 py-2 m-auto justify-center items-center text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dummyData = [
                                [
                                    'hari_tanggal' => 'Senin, 1 Januari 2024',
                                    'subtittle' => 'Lorem ipsum dolor sit amet',
                                    'penulis' => 'John Doe',
                                ],
                                [
                                    'hari_tanggal' => 'Selasa, 2 Januari 2024',
                                    'subtittle' => 'Consectetur adipiscing elit',
                                    'penulis' => 'Jane Smith',
                                ],
                            ];
                            ?>
                            <?php foreach ($dummyData as $index => $data): ?>
                            <tr
                                class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#cbdccb] text-black hover:text-white">
                                <td class="px-3 py-2">
                                    <?= $index + 1 ?>
                                </td>
                                <td class="px-3 py-2">
                                    <?= $data['hari_tanggal'] ?>
                                </td>
                                <td class="px-3 py-2">
                                    <?= $data['subtittle'] ?>
                                </td>
                                <td class="px-3 py-2">
                                    <?= $data['penulis'] ?>
                                </td>
                                <td class="px-3 py-2">
                                    <div
                                        class="flex justify-items-center justify-center items-center m-auto text-center gap-4">
                                        <a href="/lihat-artikel" title="Lihat">
                                            <div class="flex justify-center items-center m-auto text-center">Lihat
                                            </div>
                                        </a>
                                        <a href="/edit-artikel" title="Edit">
                                            <div class="flex justify-center items-center m-auto text-center">Edit
                                            </div>
                                        </a>
                                        <div class="div">
                                            <button class="p-1 rounded-md cursor-pointer delete-button" title="Delete"
                                                type="button" data-index="<?= $index ?>">
                                                <svg width="15" height="19" viewBox="0 0 15 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 16.5C1.5 17.6 2.4 18.5 3.5 18.5H11.5C12.6 18.5 13.5 17.6 13.5 16.5V6.5C13.5 5.4 12.6 4.5 11.5 4.5H3.5C2.4 4.5 1.5 5.4 1.5 6.5V16.5ZM13.5 1.5H11L10.29 0.79C10.11 0.61 9.85 0.5 9.59 0.5H5.41C5.15 0.5 4.89 0.61 4.71 0.79L4 1.5H1.5C0.95 1.5 0.5 1.95 0.5 2.5C0.5 3.05 0.95 3.5 1.5 3.5H13.5C14.05 3.5 14.5 3.05 14.5 2.5C14.5 1.95 14.05 1.5 13.5 1.5Z"
                                                        fill="#777777" />
                                                </svg>
                                            </button>
                                        </div>
                                        <?php endforeach; ?>
                                        <!-- Modal -->
                                        <div id="popup-modal" tabindex="-1" aria-hidden="true"
                                            class="z-50 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-[#84A584] rounded-lg shadow">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-white bg-transparent bg-[#534B3C] hover:bg-[#443c2e] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                        data-modal-hide="popup-modal-delete">
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
                                                            Data akan terhapus, Anda Yakin?</h3>
                                                        <button data-modal-hide="popup-modal-ya" type="button"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Ya
                                                        </button>
                                                        <button data-modal-hide="popup-modal-tidak" aria-hidden="true"
                                                            type="button"
                                                            class="py-2.5 px-5 ms-3 text-sm font-medium rounded-lg bg-[#534B3C] hover:bg-[#443c2e] text-white hover:text-white focus:z-10 ">Tidak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const deleteButtons = document.querySelectorAll('.delete-button');
                                                deleteButtons.forEach(button => {
                                                    button.addEventListener('click', function() {
                                                        const index = this.dataset.index;
                                                        const modal = document.getElementById('popup-modal');
                                                        modal.classList.remove('hidden');
                                                        modal.setAttribute('aria-hidden', 'false');
                                                        modal.setAttribute('tabindex', '0');
                                                        const modalTidak = document.getElementById('popup-modal');
                                                        modalTidak.classList.remove('hidden');
                                                        modalTidak.setAttribute('aria-hidden', 'false');
                                                        modalTidak.setAttribute('tabindex', '0');
                                                        const closeButton = modal.querySelector(
                                                            '[data-modal-hide="popup-modal-delete"]');
                                                        closeButton.addEventListener('click', () => {
                                                            modal.classList.add('hidden');
                                                            modal.setAttribute('aria-hidden', 'true');
                                                            modal.setAttribute('tabindex', '-1');
                                                        });
                                                        const closeButtonTidak = modalTidak.querySelector(
                                                            '[data-modal-hide="popup-modal-tidak"]');
                                                        closeButtonTidak.addEventListener('click', () => {
                                                            modalTidak.classList.add('hidden');
                                                            modalTidak.setAttribute('aria-hidden', 'true');
                                                            modalTidak.setAttribute('tabindex', '-1');
                                                        });
                                                    });
                                                });
                                            });
                                        </script>
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
                                            <path d="M9.0492 1.08221L1.08169 8.88528L8.88477 16.8528"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
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
                                            <path d="M1.17188 15.8857L9.05759 8L1.17188 0.114288" stroke="currentColor"
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
