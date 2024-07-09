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
    <div class="wrap m-auto min-h-screen container pt-[200px] flex flex-col gap-3 text-black items-center">
        <div class="wrap w-[75%] bg-white p-4 rounded-lg border border-[#84A584]">
            <div class="head flex items-center gap-3">
                <a href="/home" class="back"><img src="/Images/kembali.svg" alt=""></a>
                <div class="back text-[26px] font-medium">User Profile</div>
            </div>
            <div class="profilee flex flex-col items-center justify-center mb-8 mt-4">
                <div class="">
                    <img src="/Images/profile.svg" alt="">
                </div>
                <div class="nama text-[26px] font-medium">Dr. Muhammad Saiful</div>
            </div>
            <div class="form flex flex-col gap-3">
                <div class="wrap w-full flex gap-3">
                    <div class="w-1/2">
                        <label For="name" class="text-black font-bold">Username</label>
                        <input type="text" id="name"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="muhammadsaiful" required />
                    </div>
                    <div class="w-1/2">
                        <label For="email" class="text-black font-bold">Email</label>
                        <input disabled type="text" id="email"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="saiful@example.com" required />
                    </div>
                </div>
                <div class="wrap w-full flex gap-3">
                    <div class="w-1/2">
                        <label For="sip" class="text-black font-bold">SIP</label>
                        <input type="text" id="sip"
                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] px-2 w-full bg-transparent"
                            placeholder="s1233432ddf" required />
                    </div>
                </div>
                <div class="btns flex w-full justify-end">
                    <button class="bg-[#84A584] hover:bg-[#596959] text-white py-2 rounded-lg px-8">Ubah</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
