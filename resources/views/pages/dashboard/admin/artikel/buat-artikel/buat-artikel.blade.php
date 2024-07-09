<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] min-h-screen pt-10 pr-5 pb-[90px] full-height">
        <div class="m-10">
            <div class="text-end items-end justify-end text-black text-[32px] font-bold">Selamat Datang,
                Admin
            </div>
            <div class="rounded h-full pb-1 mt-5 ml-0 mr-10">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="flex justify-start text-black text-[30px] font-bold">Buat Artikel Baru</div>
                    <div class="flex justify-between gap-5 mt-5">
                        <div class="w-[60%] mb-4">
                            <label htmlFor="name" class="text-black">Subtittle</label>
                            <input type="text" id="name"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full"
                                placeholder="Masukkan Judul Artikel Anda" required />
                        </div>
                        <div class="w-[40%] mb-4">
                            <label htmlFor="image" class="text-sm mb-1 block text-black">Gambar</label>
                            <div class="relative">
                                <input type="file" id="image" accept="image/*" class="hidden" required
                                    onchange="displayFileName()" />
                                <label for="image"
                                    class="cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block font-bold">
                                    Unggah Gambar
                                </label>
                                <span id="file-name" class="text-[#8F8F8F] text-sm ml-2">Tidak ada gambar.</span>
                            </div>
                            <script>
                                function displayFileName() {
                                    const input = document.getElementById('image');
                                    const fileNameSpan = document.getElementById('file-name');
                                    if (input.files.length > 0) {
                                        const fileName = input.files[0].name;
                                        fileNameSpan.textContent = fileName;
                                    } else {
                                        fileNameSpan.textContent = 'Tidak ada gambar.';
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="div">
                        <div class="w-full mb-4">
                            <label htmlFor="name" class="text-black">Deskripsi Artikel</label>
                            <textarea id="message" rows="4"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full h-[300px]"
                                placeholder="Masukkan Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-between gap-5 mt-5">
                        <div class="mb-4 w-full">
                            <label htmlFor="name" class="text-black">Sumber Artikel</label>
                            <input type="text" id="name"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full"
                                placeholder="Masukkan Penulis Artikel" required />
                        </div>
                        <div class="mb-4 w-full">
                            <label htmlFor="name" class="text-black">Penulis Artikel</label>
                            <input type="text" id="name"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full"
                                placeholder="Masukkan Penulis Artikel" required />
                        </div>
                    </div>
                    <div class="mb-4 flex mt-5 justify-end">
                        <a href="">
                            <div
                                class="w-[145px] text-center m-auto cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block font-bold">
                                Publish
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
