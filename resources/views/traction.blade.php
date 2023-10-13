<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MRI</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->


        <style>
        </style>
    </head>
    <body class="overflow-x-hidden">
        <div class="relative h-screen w-screen mx-auto bg-gradient-to-r from-[#FFCCEE] from 50% via-[#FEC7EB] via-100% ">
            @include('partials.nav')
            <div class="w-screen">

                <div class="flex flex-row justify-center">
                    <div class="absolute w-[300px] top-[2rem] left-[24rem]">
                        <img src="assets/jarum.svg" class="origin-center rotate-24" alt="">
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="w-3/12">
                            <h1 class="text-8xl font-bold leading-24 font-circularstd">Our Traction</h1>
                        </div>
                        <div class="w-5/12  origin-center rotate-70">
                            <img src="assets/roket.svg" class="w-full" alt="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-row justify-between ">
                        <div>
                            <h1 class="text-3xl font-bold mb-8 font-circularstd">Investor MRI</h1>
                            <h1 class="text-3xl text-[#F84FDD] font-circularstd">150+</h1>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold mb-8 font-circularstd">Treatment in the 1st year</h1>
                            <h1 class="text-3xl text-[#F84FDD] font-circularstd">30.000 Treatment</h1>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold mb-8 font-circularstd">Treatment Growth</h1>
                            <h1 class="text-3xl text-[#F84FDD] font-circularstd">426%</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="relative bg-gradient-to-r from-[#FF00B8] from-0% via-[#A169CD] via-100%  w-screen h-screen  flex items-center mx-auto bg-black-400">
            @include('partials.nav')
            <div class="flex flex-row justify-between items-center px-32 w-screen ">
                <div class="absolute bottom-0">
                    <img src="assets/bg-bar" alt="">
                </div>
                <div class="w-7/12">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                </div>
                
            </div>
        </div>
        </div>
        <div id="" class="relative bg-gradient-to-r from-[#FFCCEE] from 0% via-[#FFCBED] via-100% w-screen h-screen flex mx-auto ">
            @include('partials.nav')
            <div class="flex justify-between items-center px-32 w-screen bg-[url('/assets/patterns/bg-lulu.svg')] bg-no-repeat bg-center">

                <div class="w-5/12">
                    <h1 class="font-bold mb-16 text-7xl text-left font-circularstd">Let’s start to build
                        future <span class="text-[#F84FDD]">with us</span>
                    </h1>
                    <button class="py-8 text-3xl bg-gradient-to-r from-[#FF00B8] 100% from-10% via-[#A169CD] via-100% font-bold font-circularstd text-white rounded-full w-6/12 drop-shadow-3ds">
                        Contact Us
                    </button>
                </div>
                <div class="w-5/12">
                    <img src="assets/salaman.svg" class="" alt="">
                </div>
            </div>
            <div class="absolute bottom-0 px-32 py-8 flex flex-row items-center w-screen justify-between">
                <div>
                    <span class="text-xl font-circularstd">© Copyright Lulu.id All Rights Reserved</span>
                </div>
                <div>
                    <img src="assets/logo-footer.png" class="mb-6" alt="">
                    <p class="text-xl font-circularstd">A Danmogot.com Company 2013-2022</p>
                </div>
            </div>
        </div>
        
    </body>
</html>