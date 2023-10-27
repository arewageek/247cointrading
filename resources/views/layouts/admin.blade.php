<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '247 Coin Trading') }}</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .already-hidden{
                width: auto;
            }

            *{
                scrollbar-color: gray;
                scrollbar-width: 5pt;
            }

        </style>

        <script>
            const toggleNav = () => {
                $('.nav-links').toggle(500)
            }

            const toggleInvest = () => {
                $('.invest-sub-nav').toggle(500)
                $('.caret .open-caret').toggle()
                $('.caret .close-caret').toggle()
            }
        </script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        {{-- <x-banner /> --}}

        <div class="min-h-screen bg-gray-100">
            @include('layouts.partials.adminnav')

            <!-- Page Content -->
            <main class="w-full">

                {{-- modals --}}

                    <div class="modal hidden">
                        <div class="modal-overlay bg-[#0005] fixed w-screen h-screen backdrop-blur-sm flex justify-center items-center px-5 md:px-[20pt] top-0 left-0 right-0 z-50">
                            <div class="modal-content w-full md:w-1/3 bg-gray-50 min-h-[200pt] rounded-lg shadow-2xl">
                                <div class="modal-header flex justify-between items-center px-3 py-2 shadow">
                                    <div></div>
                                    <div onclick="javascript:$('.modal').fadeOut(200)" class="text-red-500 hover:tex-red-600 w-[25pt] h-[25pt] flex justify-center items-center shadow font-bold cursor-pointer hover:shadow-3xl">X</div>
                                </div>
                                
                                <div class="modal-content w-full min-h-[200pt] h-full text-gray-600 p-5 flex justify-center items-center">
                                    <div class="modal-text justify-between items-center flex flex-col md:flex-row w-full space-y-8">
                                        {{-- <div class="md:border-r-2 border-r-gray-300 p-4 flex flex-col items-center">
                                            <div>
                                                <img src="/resources/3/user.png" alt="Username" class="w-[30pt] h-300pt] rounded-full">
                                            </div>
                                            <div class="text-center">
                                                <h3 class="text-xl font-bold">User's Full Name</h3>
                                                <p class="text-sm italic">@usernema</p>
                                            </div>

                                            <div class="mt-8">
                                                <button class="px-3 py-2 rounded-lg bg-red-600 text-red-100 font-bold text-xs hover:text-red-600 hover:bg-red-100 transition-all shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class='w-full p-3'>
                                            <h4 class="text-xl font-bold">
                                                User Information
                                            </h4>

                                            <div class="my-5">
                                                <div class=" px-1 rounded-lg w-full relative">
                                                    <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                                        Full Name
                                                    </label>
                                                    <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3" disabled />
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    
                {{-- modals --}}
                
                <div class="flex flex-col md:flex-row m-4">

                    {{-- side nav --}}
                        <div class="p-2 w-full md:w-[200pt] lg:w-[250pt] md:min-h-screen overflow-hidden sticky">
                            <div class="nav w-full shadow-lg h-auto md:min-h-1/3 bg-white rounded-2xl px-5 md:py-5 my-3 md:my-0">
                                <div class="px-3 py-2 rounded-lg my-3 bg-white flex justify-between items-center">
                                    <div class="font-bold nav-hidden">{{ auth() -> user() -> name}}</div>
                                    <div class="navig md:hidden" onclick="toggleNav()">
                                        <div class="navig-hover:hidden h-[25pt] w-[25pt] shadow-md flex justify-center items-center cursor-pointer hover:shadow-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </div>

                                        <div class="navig-hover:flex hidden h-[25pt] w-[25pt] shadow-md justify-center items-center cursor-pointer hover:shadow-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                                <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-links text-gray-500 hidden md:block py-4">
                                    <a href="/admin/dashboard" class="{{request() -> route() -> uri == 'admin/dashboard' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-blue-500 text-white hover:text-blue-200 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-gray-200 transition-all my-3 hover:text-gray-800 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Dashboard
                                        </div>
                                    </a>

                                    <a href="/admin/users" class="{{request() -> route() -> uri == 'admin/users' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-blue-500 text-white hover:text-blue-200 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-gray-200 transition-all my-3 hover:text-gray-800 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Users
                                        </div>
                                    </a>

                                    <a href="/admin/investments" class="{{request() -> route() -> uri == 'admin/investments' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-blue-500 text-white hover:text-blue-200 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-gray-200 transition-all my-3 hover:text-gray-800 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Investments
                                        </div>
                                    </a>

                                    <a href="/admin/payments" class="{{request() -> route() -> uri == 'admin/payments' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-blue-500 text-white hover:text-blue-200 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-gray-200 transition-all my-3 hover:text-gray-800 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Payments
                                        </div>
                                    </a>

                                    <a href="/admin/withdrawals" class="{{request() -> route() -> uri == 'admin/withdrawals' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-blue-500 text-white hover:text-blue-200 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-gray-200 transition-all my-3 hover:text-gray-800 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Withdrawals
                                        </div>
                                    </a>

                                    <a href="/admin/plans" class="{{request() -> route() -> uri == 'admin/plans' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-blue-500 text-white hover:text-blue-200 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-gray-200 transition-all my-3 hover:text-gray-800 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Plans
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    {{-- ? side nav --}}
                    
                    <div class="w-full">
                        @yield('content')

                        {{-- site footer --}}

                            <footer class="w-full p-5 border-t-2 border-t-gray-600">
                                <div class=" text-gray-600 text-sm">
                                    All Rights Reserved &copy; {{ env('APP_NAME') }} {{ Date('Y') }}
                                </div>
                            </footer>

                        {{-- ? site footer --}}
                        
                    </div>
                </div>
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
