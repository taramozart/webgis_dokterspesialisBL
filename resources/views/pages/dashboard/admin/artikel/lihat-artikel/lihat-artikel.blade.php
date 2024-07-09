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
                            <div class="text-black text-[30px] font-bold">Lorem Ipsum is simply dummy text</div>
                            <div class="text-[16px]">Senin, 20 Oktober 2023</div>
                        </div>
                        <div class="flex m-auto justify-center items-center mt-5">
                            <svg width="416" height="229" viewBox="0 0 416 229" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0H416V229H0V0Z" fill="#D9D9D9" />
                            </svg>
                        </div>
                        <div class="text-[22px] text-black text-justify mt-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum.
                        </div>
                        <div class="flex justify-between mt-10">
                            <div class="div">Sumber Referensi :
                                https://maps.app.goo.glCJV9TWDKhNqoYcHm6 </div>
                            <div class="div">Penulis : Budi Susanto</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
