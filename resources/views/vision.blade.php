
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MRI</title>

        <!-- Fonts -->
        <link href="{{ asset('css/font.css')}}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->


        <style>
        </style>
    </head>
<body class="overflow-x-hidden">
<div class="position-relative h-[1964px] bg-gradient-to-r from-[#FF00B8] from-5% via-[#C564CB] via-100% w-screen">
    @include('partials.nav')
    <div class="absolute left-[35%] top-[-20%]">
        <img src="assets/patterns/circle-small.svg" alt="">
    </div>
    <div class="w-screen h-screen flex mx-auto bg-black-400 px-28">

        <div class="flex flex-row w-screen mt-64 justify-between">
            <div class="w-5/12">
                <h1 class="font-bold font-circularstd text-7xl text-white leading-24 mb-8">Our Vision</h1>
                <p class="font-book text-3xl text-justify text-white tracking-wider">to provide top-notch medical care that's  affordable and accessible to all. We are committed to breaking down barriers to  healthcare, ensuring that everyone can receive  the care they need without financial hardship.</p>
            </div>
            <div class="w-5/12 flex">
                <div class="w-[600px] h-[600px]">
                    <img src="assets/patterns/lokasi.svg" alt="">
                </div>
                <div class="w-[600px] h-[600px]">
                    <img src="assets/patterns/tas.svg" alt="">
                </div>
            </div>
        </div>
        <div class="absolute left-[-34%] bottom-[-20%]">
            <img src="assets/patterns/circle.svg" alt="">
        </div>
    </div>
    <div class="relative w-screen h-screen flex mx-auto bg-black-400 px-28">
        <div class="flex flex-row w-screen justify-between">
            <div class="w-5/12">
               <img src="assets/patterns/hp.svg" class="w-full" alt="">
            </div>
            <div class="w-5/12 flex">
                <div>

                    <h1 class="font-bold text-white mb-8 text-7xl text-right">Our Mission</h1>
                    <p class="font-book text-3xl text-justify text-white tracking-wider">Building Healthcare Service System which is efficient, accessible and cost effective. Providing care by emphasizing on quality of services through modern and advanced technology with latest medical equipment.</p>
                </div>
            </div>
        </div>
        <div class="absolute right-[-10%] bottom-[-30%]">
            <img src="assets/patterns/circle.svg" class="w-full" alt="">
        </div>
    </div>
    
    <div class="relative bg-gradient-to-br from-[#FFCCEE] from-100% via-[#FEE6F4] via-100% w-screen h-screen  flex items-center mx-auto bg-black-400 px-28">
        <div class="flex flex-row justify-between items-center w-screen bg-[url('/assets/patterns/bg-lulu.svg')] bg-no-repeat bg-center bg-contain">

            <div class="w-5/12">
                <h1 class="font-bold mb-8 text-7xl text-left leading-24">Let’s start to build
                    future <span class="text-[#F84FDD]">with us</span>
                </h1>
                <button class="py-6 text-2xl bg-gradient-to-br from-[#FC50CE] from-10%  to-[#D67BD6] via-100% font-bold text-white rounded-full w-7/12">
                    Contact Us
                </button>
            </div>
            <div class="w-[500px] ">
                <img src="assets/salaman.svg" class="origin-top-left rotate-12" alt="">
            </div>
        </div>
    </div>
</div>
</body>
</html>
