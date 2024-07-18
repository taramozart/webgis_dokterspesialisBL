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
    <div class="pl-[280px] min-h-screen pt-5 pr-5 pb-[90px] full-height">
        <div class="m-10">
            <div class="text-end items-end justify-end text-black text-[32px] font-bold">Selamat Datang,
                Admin
            </div>
            <div class="bg-white rounded-md h-full w-full m-auto mt-10">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="p-10">
                        <div class="flex justify-between">
                            <div class="text-black text-[30px] font-bold">{{ $data['judul'] }}</div>
                            <div class="text-[16px]">
                                @php
                                    $formattedDay = Carbon\Carbon::parse($data['created_at'])->translatedFormat('l');
                                    $formattedDate = Carbon\Carbon::parse($data['created_at'])->translatedFormat('j F');
                                    $formattedYear = Carbon\Carbon::parse($data['created_at'])->translatedFormat('Y');
                                @endphp

                                {{ $formattedDay }}, {{ $formattedDate }} {{ $formattedYear }}
                            </div>
                        </div>
                        <div class="flex m-auto justify-center items-center mt-5">
                            <img src="{{url(asset('storage/'.$data['gambar']))}}" width="416" height="229" alt="">
                        </div>
                        <div class="text-[22px] text-black text-justify mt-5">
                            {{ $data['deskripsi'] }}
                        </div>
                        <div class="flex justify-between mt-10">
                            <div class="div">
                                Sumber Referensi : {{$data['sumber']}} 
                            </div>
                            <div class="div">
                                Penulis : {{$data['penulis']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
