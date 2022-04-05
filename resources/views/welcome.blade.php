<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> --}}

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="top-5 left-10 fixed">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="178.000000pt" height="27.000000pt" viewBox="0 0 1024.000000 158.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,158.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path fill="#FFFFFF" d="M710 1558 c-24 -13 -58 -40 -74 -61 -28 -35 -31 -46 -31 -110 0 -40
                4 -80 9 -89 7 -16 1 -18 -63 -18 l-71 0 0 -70 0 -70 115 0 115 0 0 -215 0
                -215 85 0 85 0 0 215 0 215 125 0 125 0 0 70 0 69 -77 3 c-64 2 -77 6 -74 18
                9 29 13 121 7 145 -9 37 -66 96 -111 116 -54 25 -112 24 -165 -3z m124 -129
                c29 -23 33 -54 10 -87 -30 -43 -114 -15 -114 38 0 24 42 70 63 70 8 0 26 -9
                41 -21z"/>
                <path fill="#FFFFFF" d="M563 1071 c-159 -39 -284 -134 -313 -235 -30 -109 8 -209 104 -273
                99 -67 99 -67 644 -71 l493 -3 -15 28 c-18 35 -51 66 -96 88 -84 43 -124 47
                -485 55 -358 7 -399 12 -448 50 -35 27 -41 53 -23 89 21 39 74 71 166 97 l75
                22 3 86 c3 99 10 95 -105 67z"/>
                <path fill="#FFFFFF" d="M930 1006 l0 -84 66 -16 c68 -17 158 -57 169 -76 3 -6 49 -10 106
                -10 83 0 99 3 99 15 0 50 -84 137 -178 184 -66 33 -190 71 -234 71 l-28 0 0
                -84z"/>
                <path fill="#FFFFFF" d="M2320 969 c-70 -14 -148 -57 -175 -97 -29 -43 -35 -135 -10 -181 38
                -74 107 -102 306 -125 146 -17 195 -33 205 -70 25 -99 -208 -142 -391 -72 -38
                15 -77 29 -85 32 -10 3 -25 -11 -43 -43 -27 -44 -28 -48 -11 -60 26 -19 117
                -52 193 -70 82 -19 244 -13 314 12 141 50 192 207 99 304 -46 48 -100 65 -270
                86 -189 23 -248 59 -200 120 29 37 114 58 209 53 62 -4 91 -11 141 -36 l63
                -32 32 38 c18 20 33 43 33 49 0 20 -100 71 -172 88 -72 16 -167 18 -238 4z"/>
                <path fill="#FFFFFF" d="M3138 923 c-12 -26 -81 -178 -155 -337 -73 -159 -133 -293 -133 -298
                0 -4 31 -8 69 -8 l68 0 32 70 31 70 181 0 181 0 31 -70 31 -70 68 0 c48 0 68
                4 67 13 0 6 -69 161 -152 342 l-153 330 -72 3 -73 3 -21 -48z m215 -385 c-6
                -12 -243 -10 -243 2 0 10 78 188 107 244 l15 28 62 -133 c35 -74 61 -137 59
                -141z"/>
                <path fill="#FFFFFF" d="M3845 664 c-77 -168 -148 -323 -157 -345 l-17 -39 69 0 70 0 35 70
                35 70 178 0 178 0 34 -70 34 -70 69 0 c61 0 68 2 63 18 -3 9 -73 163 -155 342
                l-150 325 -73 3 -73 2 -140 -306z m279 8 c31 -67 56 -127 56 -132 0 -6 -49
                -10 -126 -10 -69 0 -124 4 -122 9 25 66 124 269 129 263 3 -4 32 -62 63 -130z"/>
                <path fill="#FFFFFF" d="M4590 626 l0 -346 65 0 65 0 0 115 0 115 73 0 74 0 79 -112 80 -113
                77 -3 c42 -2 77 -1 77 2 0 3 -38 58 -84 123 l-84 118 27 14 c40 21 81 62 103
                105 16 31 19 54 16 112 -3 62 -8 79 -35 116 -18 25 -51 54 -79 68 -46 24 -58
                25 -251 28 l-203 3 0 -345z m374 220 c18 -8 41 -24 50 -37 20 -29 21 -91 2
                -127 -24 -47 -57 -57 -180 -57 l-111 0 -3 104 c-1 58 0 111 2 118 7 19 195 18
                240 -1z"/>
                <path fill="#FFFFFF" d="M5290 915 l0 -55 105 0 105 0 0 -290 0 -290 70 0 70 0 0 290 0 290
                110 0 110 0 0 55 0 55 -285 0 -285 0 0 -55z"/>
                <path fill="#FFFFFF" d="M6010 625 l0 -345 260 0 260 0 0 55 0 55 -195 0 -195 0 0 90 0 90
                170 0 170 0 0 55 0 55 -170 0 -170 0 0 90 0 90 195 0 195 0 0 55 0 55 -260 0
                -260 0 0 -345z"/>
                <path fill="#FFFFFF" d="M7020 625 l0 -345 240 0 240 0 0 55 0 55 -172 2 -173 3 -3 288 -2
                287 -65 0 -65 0 0 -345z"/>
                <path fill="#FFFFFF" d="M7680 625 l0 -345 65 0 65 0 0 345 0 345 -65 0 -65 0 0 -345z"/>
                <path fill="#FFFFFF" d="M8040 625 l0 -345 65 0 65 0 0 345 0 345 -65 0 -65 0 0 -345z"/>
                <path fill="#FFFFFF" d="M8390 625 l0 -345 70 0 70 0 2 236 3 235 170 -235 170 -236 73 0 72
                0 0 345 0 345 -65 0 -65 0 0 -235 c0 -129 -3 -235 -7 -235 -5 1 -84 106 -178
                235 l-169 235 -73 0 -73 0 0 -345z"/>
                <path  fill="#FFFFFF"d="M9240 625 l0 -345 65 0 65 0 0 345 0 345 -65 0 -65 0 0 -345z"/>
                <path fill="#FFFFFF" d="M9600 625 l0 -347 188 4 c163 4 194 7 243 27 75 29 138 86 174 157
                27 54 30 68 30 159 0 89 -4 106 -28 157 -33 67 -90 121 -166 157 -53 25 -65
                26 -248 29 l-193 4 0 -347z m345 224 c133 -34 198 -196 131 -332 -45 -93 -125
                -131 -266 -125 l-75 3 -3 233 -2 232 85 0 c48 0 106 -5 130 -11z"/>
                <path fill="#FFFFFF" d="M11 428 c21 -41 117 -153 166 -194 135 -113 302 -194 451 -219 l43
                -7 -3 88 -3 87 -70 19 c-88 24 -174 65 -248 119 l-59 41 36 37 c20 20 36 40
                36 44 0 4 -81 7 -180 7 l-181 0 12 -22z"/>
                <path fill="#FFFFFF"  d="M712 228 l3 -223 73 -3 c214 -9 469 88 639 242 57 52 163 181 163
                199 0 4 -82 7 -181 7 l-181 0 36 -44 36 -45 -32 -25 c-97 -74 -237 -135 -345
                -152 l-43 -7 0 137 0 136 -85 0 -85 0 2 -222z"/>
                </g>
                </svg>


            </div>
            
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-slate-200 dark:text-slate-200 ">Sadamad</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-slate-200 dark:text-slate-200 ">Logi sisse</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-slate-200 dark:text-slate-200">Registreeru</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="">
                <div class="flex justify-center">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="256.000000pt" height="204.000000pt" viewBox="0 0 512.000000 508.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,508.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M2455 5074 c-90 -21 -117 -30 -167 -55 -135 -66 -234 -162 -298 -292
                        -86 -174 -91 -371 -15 -543 l24 -54 -230 0 -229 0 0 -235 0 -235 370 0 370 0
                        0 -695 0 -695 275 0 275 0 0 695 0 695 395 0 395 0 0 235 0 235 -251 0 c-235
                        0 -251 1 -244 18 55 137 58 148 63 267 5 144 -9 211 -71 330 -73 140 -214 257
                        -367 306 -63 20 -248 35 -295 23z m188 -440 c118 -59 159 -196 91 -301 -63
                        -97 -171 -125 -275 -73 -145 74 -145 290 0 367 53 28 136 31 184 7z"/>
                        <path d="M2970 3242 l0 -279 73 -12 c93 -15 250 -55 346 -87 115 -39 292 -129
                        344 -174 l45 -40 320 0 320 0 -9 43 c-25 108 -110 240 -229 350 -257 238 -688
                        414 -1157 471 l-53 7 0 -279z"/>
                        <path d="M1988 3479 c-674 -121 -1108 -432 -1203 -863 -23 -105 -16 -281 15
                        -381 120 -386 515 -615 1127 -655 82 -5 749 -10 1501 -10 1236 0 1352 1 1352
                        16 0 40 -68 143 -145 219 -64 65 -100 91 -180 132 -171 87 -358 137 -638 169
                        -117 14 -306 18 -1062 24 -881 7 -924 8 -1013 28 -51 11 -116 28 -145 37 -181
                        59 -293 180 -272 294 27 142 201 282 460 369 87 29 306 82 339 82 14 0 16 28
                        16 280 l0 280 -22 -1 c-13 0 -71 -9 -130 -20z"/>
                        <path d="M70 1325 c398 -593 1027 -1038 1722 -1219 140 -37 284 -66 324 -66
                        l24 0 0 275 0 275 -22 4 c-459 100 -791 255 -1121 523 l-67 55 97 107 c54 58
                        107 116 117 129 l19 22 -582 0 -581 0 70 -105z"/>
                        <path d="M2280 726 l0 -704 66 -7 c121 -13 538 1 674 23 593 97 1118 349 1570
                        754 167 150 376 395 494 581 l37 57 -582 0 -582 0 19 -22 c10 -13 63 -71 117
                        -130 l98 -107 -83 -66 c-244 -197 -548 -358 -841 -445 -102 -31 -296 -73 -384
                        -85 l-53 -7 0 431 0 431 -275 0 -275 0 0 -704z"/>
                        </g>
                    </svg>
                </div>
                <div class="flex justify-center pt-10">
                    <h1 class="text-5xl font-bold text-slate-200">Saarte Liinid Logiraamat</h1>
                </div>
                <div class="">
                    <p class="flex justify-center pt-10 text-2xl italic text-slate-200">Tere tulemast Saarte Liinide sadamahaldussüsteemi</p>
                    <p class="flex justify-center pt-10 text-2xl text-slate-200">Kui Te logite Logiraamatusse sisse esmakordselt, siis ei saa Te süsteemi kasutada kuna Teie kasutajakontol puuduvad selleks õigused.</p>
                    <p class="flex justify-center pt-10 text-2xl text-slate-200">Teie kontole kasutajaõiguste lisamiseks pöörduge oma administraatori või Ahti Paju poole.</p>
                </div>
            </div>
        </div>
    </body>
</html>
