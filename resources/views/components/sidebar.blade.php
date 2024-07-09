@vite('resources/css/app.css')

@php
    $currentPage = request()->route()->getName();
@endphp

<div class="sidebar bg-[#EEE7DA] min-h-screen">
    <div class="left w-[250px] bg-[#84A584] h-screen fixed p-3">
        <div class="head">
            <div class="web text-end text-[24px] font-semibold">WebGIS <br> Dokter Spesialis</div>
            <div class="text-[16px] text-end text-white">Bandar Lampung</div>
        </div>
        <div class="menu  h-[73%] justify-between mt-[60px] w-full flex flex-col gap-2">
            <div class="wrap flex flex-col gap-2">
            <a href="{{ route('/admin/data-baru-dokter') }}" class="{{ $currentPage == '/admin/data-baru-dokter' ? 'bg-[#534B3C] text-white' : 'bg-[#EEE7DA] text-black' }} rounded-lg p-3 w-full text-[16px] font-medium text-center">Data Baru Dokter</a>

            <a href="{{ route('/admin/kelola-data-dokter') }}" class="{{ $currentPage == '/admin/kelola-data-dokter' ? 'bg-[#534B3C] text-white' : 'bg-[#EEE7DA] text-black' }} rounded-lg p-3 w-full text-[16px] font-medium text-center">Kelola Data Dokter</a>

            <a href="{{ route('/admin/pengajuan-dokter') }}" class="{{ $currentPage == '/admin/pengajuan-dokter' ? 'bg-[#534B3C] text-white' : 'bg-[#EEE7DA] text-black' }} rounded-lg p-3 w-full text-[16px] font-medium text-center">Pengajuan Dokter</a>

            <a href="{{ route('/admin/data-pengajuan') }}" class="{{ $currentPage == '/admin/data-pengajuan' ? 'bg-[#534B3C] text-white' : 'bg-[#EEE7DA] text-black' }} rounded-lg p-3 w-full text-[16px] font-medium text-center">Data Pengajuan</a>

            <a href="{{ route('/admin/artikel-kesehatan') }}" class="{{ $currentPage == '/admin/artikel-kesehatan' ? 'bg-[#534B3C] text-white' : 'bg-[#EEE7DA] text-black' }} rounded-lg p-3 w-full text-[16px] font-medium text-center">Artikel Kesehatan</a>
        </div>
        <a href="" class="logout flex items-center rounded-lg p-2 w-full text-[16px] font-medium text-center gap-2 bg-[#534B3C] text-white">
            <img src="/Images/logout.svg" alt="hhhjjh">
            <div>Logout</div>
        </a>
    </div>
    </div>
    <div class="konten pl-[260px]">
        <div class="wrap p-3">
          
            {{ $slot }}
        </div>
    </div>
</div>