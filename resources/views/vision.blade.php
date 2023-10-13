@extends('partials.header')
@section('content')
<div class="position-relative h-[1964px] bg-gradient-to-r from-[#FF00B8] from-10% via-[#C564CB] via-100% w-screen">
    <div class="absolute left-[35%] top-[-20%]">
        <img src="patterns/circle-small.svg" alt="">
    </div>
    <div class="w-screen h-screen flex mx-auto px-28">

        <div class="flex flex-row w-screen mt-64 justify-between">
            <div class="w-5/12">
                <h1 class="font-bold font-circularstd text-7xl text-white leading-24 mb-8">Our Vision</h1>
                <p class="font-book text-3xl text-justify text-white tracking-wider font-circularstd">to provide top-notch medical care that's  affordable and accessible to all. We are committed to breaking down barriers to  healthcare, ensuring that everyone can receive  the care they need without financial hardship.</p>
            </div>
            <div class="w-5/12 flex">
                <div class="w-[600px] h-[600px]">
                    <img src="patterns/lokasi.svg" class="w-full" alt="">
                </div>
                <div class="w-[600px] h-[600px]">
                    <img src="patterns/tas.svg" class="w-full" alt="">
                </div>
            </div>
        </div>
        <div class="absolute left-[-34%] bottom-[-20%]">
            <img src="patterns/circle.svg" alt="">
        </div>
    </div>
    <div class="relative w-screen h-screen flex mx-auto px-28">
        <div class="flex flex-row w-screen justify-between">
            <div class="w-5/12">
               <img src="patterns/app.svg" class="w-full" alt="">
            </div>
            <div class="w-5/12 flex">
                <div>

                    <h1 class="font-bold text-white mb-8 text-7xl text-right font-circularstd">Our Mission</h1>
                    <p class="font-book text-3xl text-justify text-white tracking-wider font-circularstd">Building Healthcare Service System which is efficient, accessible and cost effective. Providing care by emphasizing on quality of services through modern and advanced technology with latest medical equipment.</p>
                </div>
            </div>
        </div>
        <div class="absolute right-[-10%] bottom-[-30%]">
            <img src="patterns/circle.svg" class="w-full" alt="">
        </div>
    </div>
    
</div>
<div class="relative bg-gradient-to-br from-[#FFCCEE] from-100% via-[#FEE6F4] via-100% w-screen h-screen flex items-center mx-auto ">
    <div class="flex flex-row justify-between items-center w-screen px-16">
        <div class="absolute">
            <img src="patterns/bg.png" class="w-full" alt="">
        </div>
        <div class="w-6/12 z-10">
            <h1 class="font-bold mb-8 text-7xl text-left leading-24 font-circularstd">Let’s start to build
                future <span class="text-[#F84FDD]">with us</span>
            </h1>
            <button class="py-8 text-2xl bg-gradient-to-br from-[#FF00B8] 100% via-[#A169CD] via-100% shadow-3d font-bold text-white rounded-full w-6/12 shadow-3d">
                Contact Us
            </button>
        </div>
        <div class="w-6/12">
            <img src="patterns/salaman.svg" class="origin-top-left rotate-12" alt="">
        </div>
    </div>
    <div class="absolute w-screen bottom-0 py-8 flex flex-row items-center justify-between px-16">
        <div>
            <span class="text-xl font-circularstd">© Copyright Lulu.id All Rights Reserved</span>
        </div>
        <div>
            <img src="images/logo-footer.png" class="mb-6" alt="">
            <p class="text-xl font-circularstd">A Danmogot.com Company 2013-2022</p>
        </div>
    </div>
</div>

@endsection
@extends('partials.footer')