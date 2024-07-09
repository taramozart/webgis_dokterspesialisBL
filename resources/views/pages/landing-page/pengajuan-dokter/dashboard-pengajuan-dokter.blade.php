<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .password-container {
            position: relative;
        }

        .eye-icon {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #eye-close {
            display: none;
        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="m-0 box-border md:flex h-screen w-full bg-white">
        <div
            class="left w-full md:w-1/2 lg:w-1/2 flex-col bg-[#E5ECE5] items-center justify-center lg:flex relative hidden">
            <div class="">
                <Image src="/Images/logo-login.png" alt="logo-dashboard" width={500} height={500} />
            </div>
        </div>
        <div class="w-full md:w-1/2 relative bg-[#FFFCF5]">
            <div class="h-screen flex flex-col items-center justify-center px-5 pt-14">
                <div class="wrap text-black flex flex-col justify-between  h-[90%]">
                    <div class="head text-[30px] md:text-[34px]">
                        <div class="selamat">
                            Selamat Datang di, <br>
                            Pengajuan Lokasi Dokter Spesialis
                        </div>
                        <div class="text-[20px]">
                            Ajukan Informasi dan Lokasi Dokter
                        </div>
                    </div>
                    <div class="pilihan flex flex-col gap-5 text-[20px] text-white">
                        <div class="wrap flex gap-5 justify-center">
                            <a href="/pengajuan-tambah-lokasi"
                                class="tambah w-[40%] md:w-[35%] rounded-lg shadow-md bg-[#84A584] h-[150px] flex justify-center items-center text-center p-3 hover:bg-[#5d795d]">
                                Tambah Lokasi Baru</a>
                            <a href="/pengajuan-ubah-lokasi"
                                class="perubahan w-[40%] md:w-[35%] rounded-lg shadow-md bg-[#84A584] h-[150px] flex justify-center items-center text-center p-3 hover:bg-[#5d795d]">
                                Perubahan Data Lokasi</a>
                        </div>
                        <div class="wrap flex gap-5 justify-center">
                            <a href="/pengajuan-hapus-lokasi"
                                class="hapus w-[40%] md:w-[35%] rounded-lg shadow-md bg-[#84A584] h-[150px] flex justify-center items-center text-center p-3 hover:bg-[#5d795d]">
                                Hapus Data Lokasi</a>
                            <a href="/cek-status-pengajuan"
                                class="hapus w-[40%] md:w-[35%] rounded-lg shadow-md bg-[#84A584] h-[150px] flex justify-center items-center text-center p-3 hover:bg-[#5d795d]">
                                Cek Status Pengajuan</a>
                        </div>
                    </div>
                    <div class="fot text-[#777777] text-center text-[18px]">
                        Pengajuan dokter merupakan layanan yang dapat digunakan oleh pengguna dokter dalam melakukan
                        pengajuan titik lokasi dan informasi mengenai praktek kesehatan berada.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function togglePasswordVisibility(action) {
            var passwordInput = document.getElementById("password");
            var eyeOpenIcon = document.getElementById("eye-open");
            var eyeCloseIcon = document.getElementById("eye-close");

            if (action === "open") {
                passwordInput.type = "text";
                eyeOpenIcon.style.display = "none";
                eyeCloseIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                eyeOpenIcon.style.display = "block";
                eyeCloseIcon.style.display = "none";
            }
        }
    </script>
</body>

</html>
