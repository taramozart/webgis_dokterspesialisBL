<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="">
    <style>
        .navv
        {
            background-color: #84A584;
        }

        @media (min-width: 768px) {
            .menuu {
                background-color: #84A584 !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navv border-gray-200 :bg-gray-900 fixed w-full top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class=" text-white hidden md:block">WEB GIS <br> DOKTER SPESIALIS</div>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse md:w-auto w-full md:justify-start justify-between">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 :focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/images/user.svg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-white rounded-lg shadow :bg-gray-700 :divide-gray-600"
                    id="user-dropdown">

                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/user/login"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-white :hover:bg-gray-600 :text-gray-200 hover:text-black">Login</a>
                        </li>

                        </li>
                        <li>
                            <a href="/user/buat-akun"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-white :hover:bg-gray-600 :text-gray-200 hover:text-black">Buat
                                Akun</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-[#84A584] rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 :text-gray-400 :hover:bg-gray-700 :focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-white rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  :bg-gray-800 md::bg-gray-900 :border-gray-700 bg-white menuu">
                    <li>
                        @php
                            $home = [
                                'home',
                            ];
                        @endphp
                        <a href="/home"
                            class="block py-2 px-3  md:p-0 md::text-blue-500 x @if (in_array(Request::path(), $home))  md:text-[#534B3C]  text-white font-bold bg-[#84A584] rounded md:bg-transparent
                            @else
                                text-black md:text-white font-normal @endif"
                            aria-current="page">Home</a>
                    </li>
                    {{--  --}}
                    <li>
                        @php
                            $profile = [
                                'profile-dokter',
                                'detail-dokter',
                            ];
                        @endphp
                        <a href="/profile-dokter"
                        class="block py-2 px-3  md:p-0 md::text-blue-500 x @if (in_array(Request::path(), $profile))  md:text-[#534B3C]  text-white font-bold bg-[#84A584] rounded md:bg-transparent
                        @else
                            text-black md:text-white font-normal @endif"
                        aria-current="page">Profile Dokter</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-white md:hover:bg-transparent md:hover:text-[#534B3C] md:p-0 :text-white md::hover:text-blue-500 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-white md:hover:bg-transparent md:hover:text-[#534B3C] md:p-0 :text-white md::hover:text-blue-500 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-white md:hover:bg-transparent md:hover:text-[#534B3C] md:p-0 :text-white md::hover:text-blue-500 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>

</html>
