<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-navbar />
    <div class="wrap px-3 md:px-0 pt-[100px] min-h-screen container m-auto">
        <div class="head ">
            <div class="tanggal text-[18px] md:text-[20px] font-medium text-[#8F8F8F]">Senin, 20 Oktober 2023</div>
        </div>
        <div class="title my-2 text-[30px] md:text-[34px] text-black font-semibold">Judul Artikel Kesehatan Sistem informasi
            geografis lokasi praktik dokter
            spesialis
        </div>
        <div class="wrap mb-3 flex flex-col md:flex-row gap-3">
            <div class="left  sm:w-full md:w-[75%] flex flex-col gap-3">
                <div class="gambar w-full h-[300px] md:h-[400px]">
                    <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                </div>
                <div class="text text-[14px] md:text-[16px] text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem
                    Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                    also
                    the leap into electronic typesetting,

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, </div>
                <div class="sumber text-[#4F4F4F] text-[12px] md:text-[14px] font-medium">Sumber Referensi: Detik.com</div>
                <div class="sumber text-[#4F4F4F] text-[12px] md:text-[14px] font-medium">Penulis: Budi Susanto</div>
            </div>
            <div class="right sm:w-full md:w-[25%]">
                <div class="head text-[20px] font-medium text-[#4F4F4F]">Artikel Lainnya</div>
                <div class="wrap flex flex-col gap-2 h-[500px] md:h-[80%] overflow-y-auto">
                    <a href="#" class="art hover:bg-gray-100 bg-white p-2 rounded-md flex gap-1">
                        <div class="img flex-shrink-0 w-[140px] h-[90px]">
                            <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                        </div>
                        <div class="text text-[14px] text-black">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </div>
                    </a>
                    <a href="#" class="art hover:bg-gray-100 bg-white p-2 rounded-md flex gap-1">
                        <div class="img flex-shrink-0 w-[140px] h-[90px]">
                            <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                        </div>
                        <div class="text text-[14px] text-black">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </div>
                    </a>
                    <a href="#" class="art hover:bg-gray-100 bg-white p-2 rounded-md flex gap-1">
                        <div class="img flex-shrink-0 w-[140px] h-[90px]">
                            <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                        </div>
                        <div class="text text-[14px] text-black">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </div>
                    </a>
                    <a href="#" class="art hover:bg-gray-100 bg-white p-2 rounded-md flex gap-1">
                        <div class="img flex-shrink-0 w-[140px] h-[90px]">
                            <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                        </div>
                        <div class="text text-[14px] text-black">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </div>
                    </a>
                    <a href="#" class="art hover:bg-gray-100 bg-white p-2 rounded-md flex gap-1">
                        <div class="img flex-shrink-0 w-[140px] h-[90px]">
                            <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                        </div>
                        <div class="text text-[14px] text-black">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </div>
                    </a>
                    <a href="#" class="art hover:bg-gray-100 bg-white p-2 rounded-md flex gap-1">
                        <div class="img flex-shrink-0 w-[140px] h-[90px]">
                            <img class="w-full h-full object-cover" src="/Images/artikel.png" alt="">
                        </div>
                        <div class="text text-[14px] text-black">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="ftr bg-[#84A584] py-14 flex ite">
        <div class="w-[30%] text-white pl-20">
            <div class="con">Contact Us :</div>
            <div class="con">Telp :</div>
            <div class="con">Email :</div>
        </div>
        <div class="w-[40%] font-semibold flex justify-center items-center text-white text-center">
            @ 2024 All Rights Reserved.
        </div>
        <div class="w-[30%]"></div>
    </div>
</body>

</html>
