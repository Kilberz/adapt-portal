<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'adapt. | Portal') }}</title>


    <!-- Scripts -->
    @vite(['public/css/app.css', 'resources/js/app.js'])


</head>

<body class="flex h-full" id="app">
    <div class="max-w-[90rem] flex flex-col mx-auto size-full">
        @auth
            <header
                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-4 sm:py-4 dark:bg-neutral-800 dark:border-neutral-700">
                <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
                    aria-label="Global">
                    <div class="flex items-center justify-between">
                        <a class="flex-none text-2xl font-semibold dark:text-white" href="/" aria-label="Brand">
                            <svg class="mx-auto h-8 fill-gray-900 dark:fill-white" viewBox="0 0 3402.00023 1033.61111"
                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1">
                                    <g id="redefining-comms--dark-copy-3" transform="translate(-305.0847, -93.1944)">
                                        <path
                                            d="M926.362803,311.401235 L926.362803,911.469907 L786.07421,911.469907 L786.079281,849.738582 C735.688184,888.459766 672.659478,911.469907 604.271645,911.469907 C439.035283,911.469907 305.084746,777.139959 305.084746,611.435571 C305.084746,445.731183 439.035283,311.401235 604.271645,311.401235 C672.659478,311.401235 735.688184,334.411376 786.079281,373.13256 L786.07421,311.401235 L926.362803,311.401235 Z M612.860742,440.602623 C518.778795,440.602623 442.510307,517.087139 442.510307,611.435571 C442.510307,705.784003 518.778795,782.268519 612.860742,782.268519 C706.94269,782.268519 783.211177,705.784003 783.211177,611.435571 C783.211177,517.087139 706.94269,440.602623 612.860742,440.602623 Z M1633.17396,93.1944444 L1633.17396,911.469907 L1492.88536,911.469907 L1492.91872,849.991485 C1442.58251,888.559937 1379.67949,911.469907 1311.44068,911.469907 C1146.20432,911.469907 1012.25378,777.139959 1012.25378,611.435571 C1012.25378,445.731183 1146.20432,311.401235 1311.44068,311.401235 C1379.78231,311.401235 1442.77205,334.380296 1493.14617,373.054105 L1493.27398,93.1944444 L1633.17396,93.1944444 Z M1320.02978,440.602623 C1225.94783,440.602623 1149.67934,517.087139 1149.67934,611.435571 C1149.67934,705.784003 1225.94783,782.268519 1320.02978,782.268519 C1414.11172,782.268519 1490.38021,705.784003 1490.38021,611.435571 C1490.38021,517.087139 1414.11172,440.602623 1320.02978,440.602623 Z M2340.34299,311.401235 L2340.34299,911.469907 L2200.0544,911.469907 L2200.05947,849.738582 C2149.66837,888.459766 2086.63967,911.469907 2018.25183,911.469907 C1853.01547,911.469907 1719.06493,777.139959 1719.06493,611.435571 C1719.06493,445.731183 1853.01547,311.401235 2018.25183,311.401235 C2086.63967,311.401235 2149.66837,334.411376 2200.05947,373.13256 L2200.0544,311.401235 L2340.34299,311.401235 Z M2026.84093,440.602623 C1932.75898,440.602623 1856.49049,517.087139 1856.49049,611.435571 C1856.49049,705.784003 1932.75898,782.268519 2026.84093,782.268519 C2120.92288,782.268519 2197.19137,705.784003 2197.19137,611.435571 C2197.19137,517.087139 2120.92288,440.602623 2026.84093,440.602623 Z M2583.70076,308.530093 L2583.69568,370.261418 C2634.08678,331.540234 2697.11549,308.530093 2765.50332,308.530093 C2930.73968,308.530093 3064.69022,442.860041 3064.69022,608.564429 C3064.69022,774.268817 2930.73968,908.598765 2765.50332,908.598765 C2697.11549,908.598765 2634.08678,885.588624 2583.69568,846.86744 L2583.70076,1126.80556 L2443.41216,1126.80556 L2443.41216,308.530093 L2583.70076,308.530093 Z M3307.44238,93.1944444 L3307.44238,242.41367 L3466.15896,242.41367 L3466.15896,376.86736 L3306.27535,376.86736 L3306.27535,700.553621 C3306.27535,755.530424 3336.61822,782.433967 3380.9655,782.433967 C3403.13914,782.433967 3428.81388,775.415651 3449.82049,764.888178 L3489.49963,886.538977 C3448.65345,902.915046 3414.80948,909.933361 3371.62923,911.10308 L3367.89605,911.220643 C3245.13095,914.347648 3165.06427,842.99033 3165.06427,700.553621 L3165.06427,376.86736 L3057.69717,376.86736 L3057.69717,242.41367 L3165.06427,242.41367 L3165.06427,93.1944444 L3307.44238,93.1944444 Z M2756.91422,437.731481 C2662.83228,437.731481 2586.56379,514.215997 2586.56379,608.564429 C2586.56379,702.912861 2662.83228,779.397377 2756.91422,779.397377 C2850.99617,779.397377 2927.26466,702.912861 2927.26466,608.564429 C2927.26466,514.215997 2850.99617,437.731481 2756.91422,437.731481 Z M3625.48855,911.469907 C3670.55301,911.469907 3707.08497,874.834467 3707.08497,829.642361 C3707.08497,784.450255 3670.55301,747.814815 3625.48855,747.814815 C3580.42409,747.814815 3543.89212,784.450255 3543.89212,829.642361 C3543.89212,874.834467 3580.42409,911.469907 3625.48855,911.469907 Z"
                                            id="Combined-Shape-Copy-16"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <div class="sm:hidden">
                            <button type="button"
                                class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700"
                                data-hs-collapse="#navbar-collapse-with-animation"
                                aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                                <svg class="hs-collapse-open:hidden size-4" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <svg class="hs-collapse-open:block flex-shrink-0 hidden size-4" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div id="navbar-collapse-with-animation"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end sm:ps-7">
                            <a class="py-3 ps-px sm:px-3 font-medium text-primary dark:text-primary" href="/"
                                aria-current="page">Patients</a>
                            <a class="py-3 ps-px sm:px-3 font-medium dark:text-primary" href="#"
                                aria-current="page">Another Page</a>
                            <a class="py-3 ps-px sm:px-3 font-medium dark:text-primary" href="#"
                                aria-current="page">Another Page</a>

                            @guest
                                <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-primary sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-primary"
                                    href="#">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                    Log in
                                </a>
                            @endguest

                            @auth
                                <div
                                    class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] ps-px sm:px-3">
                                    <button type="button"
                                        class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-primary sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-3 sm:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-primary">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg>
                                        {{ Auth::user()->name }}
                                        <svg class="ms-2 size-2.5 text-gray-500 dark:text-neutral-500" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                        </svg>
                                    </button>
                                    <div
                                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                            href="{{ route('user-profile.edit') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                            </svg>
                                            Edit Profile
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-red hover:bg-gray-100 focus:ring-2 focus:ring-primary dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                                <path d="M7.5 1v7h1V1z" />
                                                <path
                                                    d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                                            </svg>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </nav>
            </header>
        @endauth


        @yield('content')
    </div>



</body>

</html>
