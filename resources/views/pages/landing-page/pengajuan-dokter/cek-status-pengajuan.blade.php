<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokter Spesialis Bandar Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-navbar />
    <div class="wrap px-3 md:px-0 m-auto min-h-screen container pt-[100px] flex flex-col gap-3 text-black items-center">
        <div class="rap  relative w-full">
            <div class="head md:text-[34px] text-[28px]  w-full text-center">
                Cek Status Pengajuan Lokasi Dokter Spesialis
            </div>
            <div class="di hidden md:block absolute top-0 bg-[#84A584] p-1 rounded-lg">
                <a href="/dashboard-pengajuan-dokter">
                    <img src="/Images/kembali.svg" alt="">
                </a>
            </div>
        </div>
        <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-sm mt-5">
            <table class="w-full text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                <thead class="text-base text-white bg-[#6C806C] rounded-lg">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Pengajuan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Status
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            Dr. Muhammad Saiful, Sp.PD
                        </td>
                        <td class="px-3 py-3">
                            23-04-2024
                        </td>
                        <td class="px-3 py-3">
                            Diproses
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            2
                        </td>
                        <td class="px-3 py-3">
                            Dr. Muhammad Saiful, Sp.PD
                        </td>
                        <td class="px-3 py-3">
                            23-04-2024
                        </td>
                        <td class="px-3 py-3">
                            Diterima
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            2
                        </td>
                        <td class="px-3 py-3">
                            Dr. Muhammad Saiful, Sp.PD
                        </td>
                        <td class="px-3 py-3">
                            23-04-2024
                        </td>
                        <td class="px-3 py-3">
                            Ditolak
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
