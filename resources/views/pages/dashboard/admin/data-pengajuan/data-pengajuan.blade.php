<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengajuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-[85px] full-height">
        <div class="rounded h-full pb-1 mt-5">
            <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar p-10">
                {{-- isi konten disini --}}
                <div class="flex justify-end mb-10">
                    <div class="text-center items-center justify-center text-black font-bold text-[34px]">Selamat
                        Datang, Admin
                    </div>
                </div>
                <div class="flex justify-between text-black">
                    <div class="text-[30px] font-bold">Data Pengajuan Dokter</div>
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
                                    Nama Dokter
                                </th>
                                <th scope="col" class="px-3 py-2">
                                    Spesialisasi
                                </th>
                                <th scope="col" class="px-3 py-2">
                                    Nomor Kontak
                                </th>
                                <th scope="col" class="px-3 py-2 justify-start items-start text-start">
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
                                    <td class="px-3 py-2">
                                        <?= $index + 1 ?>
                                    </td>
                                    <td class="px-3 py-2">
                                        <?= $data['nama_dokter'] ?>
                                    </td>
                                    <td class="px-3 py-2">
                                        <?= $data['spesialisasi'] ?>
                                    </td>
                                    <td class="px-3 py-2">
                                        <?= $data['nomor_kontak'] ?>
                                    </td>
                                    <td class="px-3 py-2">
                                        <div
                                            class="flex justify-items-start justify-start items-start 
                                        text-start gap-4">
                                            <a href="/lihat-data-pengajuan-tambah" title="Lihat">
                                                <div class="flex justify-center items-center m-auto text-center">Lihat
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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
