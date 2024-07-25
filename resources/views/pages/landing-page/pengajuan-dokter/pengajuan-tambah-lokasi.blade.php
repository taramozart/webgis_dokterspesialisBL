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
    <form action="{{ route('pengajuan-tambah-lokasi-post') }}" method="POST" enctype="multipart/form-data">
        <div
            class="wrap md:px-0 px-3 m-auto min-h-screen container pt-[100px] flex flex-col gap-3 text-black items-center">
            @csrf
            <div class="rap  relative w-full">
                <div class="head md:text-[34px] text-[28px]  w-full text-center">
                    Selamat Datang di, Tambah Pengajuan Lokasi Dokter Spesialis
                </div>
                <div class="di hidden md:block absolute top-0 bg-[#84A584] p-1 rounded-lg">
                    <a href="/dashboard-pengajuan-dokter">
                        <img class="" src="/Images/kembali.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="formm mb-3 bg-white rounded-lg p-4 w-full flex flex-col gap-3">
                <div class="wrap w-full md:flex-row flex-col flex gap-3">
                    <div class="md:w-1/2 w-full">
                        <label For="name" class="text-black font-bold">Nama Dokter</label>
                        <input type="text" id="name" name="nama"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nama" required />
                        @error('nama')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:w-1/2 w-full">
                        <label For="kecamatan" class="text-black font-bold">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" name="kecamatan"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 p-2 w-full bg-transparent">
                            <option disabled selected>Pilih Kecamatan</option>
                            @foreach ($wilayah as $item)
                                <option value="{{ $item->id }}">{{ $item->keterangan }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{--  --}}
                <div class="wrap w-full md:flex-row flex-col flex gap-3">
                    <div class="md:w-1/2 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="bidang" class="text-black font-bold">Bidang Spesialisasi</label>
                            <select name="bidang_spesialisasi" id="bidang"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 p-2 w-full bg-transparent">
                                <option disabled selected>Pilih Bidang Spesialisasi</option>
                                @foreach ($spesialisasi as $item)
                                    <option value="{{ $item->id }}">{{ $item->keterangan }}</option>
                                @endforeach
                            </select>
                            @error('bidang_spesialisasi')
                                <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="wrap">
                            <label For="kontak" class="text-black font-bold">Nomer Kontak</label>
                            <input type="text" id="kontak" name="nomor_kontak"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                                placeholder="Masukkan Kontak" required />
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <label For="alamat" class="text-black font-bold">Alamat</label>
                        <textarea placeholder="Masukkan Alamat Lokasi" name="alamat" id="alamat" class="w-full h-[80%] p-2 rounded-md"></textarea>
                        @error('alamat')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{--  --}}
                <div class="wrap w-full md:flex-row flex-col flex gap-3">
                    <div class="md:w-1/2 w-full">
                        <label For="jadwal" class="text-black font-bold">Jadwal Praktik</label>
                        <textarea name="jadwal" id="jadwal" class="w-full h-[80%] p-2 rounded-md"
                            placeholder="Masukkan Jadwal Hari dan Jam Praktik"></textarea>
                        @error('jadwal')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:w-1/2 w-full">
                        <label For="maps" class="text-black font-bold">Link Maps</label>
                        <input type="text" id="maps" name="link_map"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="Ex : https://maps.app.goo.gl/kgvu6ddLeiZehTq1A" required />
                        @error('link_map')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                        <div class="text-red-400 text-[12px] md:[text-14px]">Share location praktik dokter --> buka
                            google maps --> Klik lokasi anda --> share location
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="wrap w-full md:flex-row flex-col flex gap-3">
                    <div class="md:w-1/2 w-full">
                        <label For="sip" class="text-black font-bold">No.SIP</label>
                        <input type="text" id="sip" name="nomor_sip" 
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor SIP" required />
                        @error('nomor_sip')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:w-1/2 w-full">
                        <label For="image" class="text-black font-bold">Gambar</label>
                        <div class="relative">
                            <input type="file" id="image" name="gambar" accept="image/*" class="hidden" />
                            <label for="image"
                                class="cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block">
                                Unggah Gambar
                            </label>
                            <span id="file-name" class="text-[#8F8F8F] text-sm ml-2">Tidak ada gambar.</span>
                        </div>
                        @error('gambar')
                            <div class="text-red-400 text-[12px] md:[text-14px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{--  --}}
                {{-- btn --}}
                <div class="btns flex w-full justify-end">
                    <button type="submit" class="bg-[#6C806C] hover:bg-[#596959] text-white py-2 rounded-lg px-8">Kirim</button>
                </div>
            </div>
        </div>
    </form>


</body>

</html>
