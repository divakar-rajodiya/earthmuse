<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
    </head>
    <body>

        <div class="min-h-screen relative overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                 style="background-image: url('{{ asset('images/bg-coming-soon.jpeg') }}?height=1080&width=1920'); filter: sepia(20%) saturate(80%) brightness(110%)"></div>

            <div class="absolute inset-0 bg-stone-100/40"></div>

            <div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6 py-12 text-center">
                <div class="mb-12">
                    <h1 class="font-seasons-bold text-6xl md:text-7xl font-light text-stone-800 mb-12">EARTHMUSE</h1>

                    <div class="mb-8">
                        <h3 class="font-seasons-regular text-4xl md:text-5xl lg:text-6xl text-stone-800 mb-4">Launching</h3>
                        <h3 class="font-seasons-regular text-4xl md:text-5xl lg:text-6xl text-stone-800">soon</h3>
                    </div>

                    <p class="font-lexend-semibold text-lg md:text-xl text-stone-800 max-w-md mx-auto mb-8 leading-relaxed">
                        We are currently making some improvements to our website!
                    </p>

                    <a href="mailto:hello@earthmuse.in?subject=Notify Me"
                       class="font-lexend-regular bg-white/90 hover:bg-[#6C4840] hover:text-white text-stone-800 px-8 py-3 rounded-full text-sm font-medium border border-stone-200 shadow-sm transition-all duration-300">
                        NOTIFY ME
                    </a>
                </div>

                <div class="mb-12">
                    <p class="font-lexend-semibold text-xl md:text-2xl font-bold tracking-wider text-stone-800 mb-6">Follow Our Journey</p>
                    <div class="flex justify-center">
                        <a href="https://www.instagram.com/earthmuse.in" target="_blank">
                            <i class="fa-brands fa-instagram text-3xl text-[#6C4840] hover:opacity-80"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <p class="font-lexend-semibold text-xl md:text-2xl lg:text-3xl text-stone-800 leading-relaxed">
                        Skincare Grounded in Science.
                    </p>
                    <p class="font-lexend-semibold text-xl md:text-2xl lg:text-3xl text-stone-800">Elevated by Earth.</p>
                </div>
            </div>
        </div>
    </body>
</html>
