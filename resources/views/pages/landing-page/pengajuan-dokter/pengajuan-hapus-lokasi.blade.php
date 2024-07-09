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
            <div class="head md:text-[34px] text-[28px]   w-full text-center">
                Selamat Datang di, Hapus Pengajuan Lokasi Dokter Spesialis
            </div>
            <div class="di hidden md:block absolute top-0 bg-[#84A584] p-1 rounded-lg">
                <a href="/dashboard-pengajuan-dokter">
                    <img src="/Images/kembali.svg" alt="">
                </a>
            </div>
        </div>
        <div class="text-[21px] font-semibold flex justify-start w-full">Data yang sudah ada sebelumnya</div>
        <div class="formm bg-white rounded-lg p-4 w-full flex flex-col gap-3">
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                <div class="md:w-1/2 w-full">
                    <label For="name" class="text-black font-bold">Nama Dokter</label>
                    <input type="text" id="name"
                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                        placeholder="Masukkan Nama" required />
                </div>
                <div class="md:w-1/2 w-full">
                    <label For="kecamatan" class="text-black font-bold">Kecamatan</label>
                    <input type="text" id="kecamatan"
                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                        placeholder="Masukkan Kecamatan" required />
                </div>
            </div>
            {{--  --}}
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                <div class="md:w-1/2 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="bidang" class="text-black font-bold">Bidang Spesialisasi</label>
                        <input type="text" id="bidang"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="Masukkan Bidang Spesialisasi" required />
                    </div>
                    <div class="wrap">
                        <label For="kontak" class="text-black font-bold">Nomer Kontak</label>
                        <input type="text" id="kontak"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="Masukkan Kontak" required />
                    </div>
                </div>
                <div class="md:w-1/2 w-full">
                    <label For="alamat" class="text-black font-bold">Alamat</label>
                    <textarea name="alamat" id="alamat" class="w-full h-[80%] p-2 rounded-md"></textarea>
                </div>
            </div>
            {{--  --}}
            <div class="wrap flex justify-center mt-3">
                <div class="df flex bg-[#6C806C] p-3 rounded items-center text-white gap-3">
                    <div class="">
                        Apakah anda yakin ingin menghapus data yang diinputkan diatas?
                    </div>
                    <div class="">
                        <input type="checkbox">
                    </div>
                </div>
            </div>
            {{-- btn --}}
            <div class="btns flex w-full justify-end">
                <button class="bg-[#6C806C] hover:bg-[#596959] text-white py-2 rounded-lg px-8">Kirim</button>
            </div>
        </div>
    </div>


</body>

</html>
