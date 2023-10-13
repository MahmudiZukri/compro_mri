@extends('partials.header')
    @section('content')
    <div class="relative h-screen w-screen bg-gradient-to-r from-[#FFCCEE] from-50% via-[#FEC7EB] via-100% flex flex-row items-center">
        <div class="">
            <div class="flex flex-row w-screen justify-between 3xl:px-16 px-8">
                <div class="absolute 3xl:w-[300px] w-[200px] top-0 left-0">
                    <img src="patterns/jarum2.svg" class="w-full origin-center rotate-24" alt="">
                </div>
                <div class="flex flex-row w-[1280px] items-center justify-center">
                    <div class="3xl:w-4/12">
                        <h1 class="text-3xl 3xl:text-8xl font-bold 3xl:leading-24 leading-12 font-circularstd">Our Traction</h1>
                    </div>
                    <div class="3xl:w-6/12 origin-center rotate-70">
                        <img src="patterns/roket.svg" class="w-full" alt="">
                    </div>
                </div>
            </div>
            <div class="3xl:flex flex-row justify-between 3xl:px-16 px-8">
                <div class="mb-4">
                    <h1 class="3xl:text-5xl text-2xl font-bold 3xl:mb-8 font-circularstd">Investor MRI</h1>
                    <h1 class="text-4xl font-medium text-[#F84FDD] font-circularstd">150+</h1>
                </div>
                <div class="mb-4">
                    <h1 class="3xl:text-5xl text-2xl font-bold 3xl:mb-8 font-circularstd">Treatment in the 1st year</h1>
                    <h1 class="text-4xl font-medium text-[#F84FDD] font-circularstd">30.000 Treatment</h1>
                </div>
                <div class="mb-4">
                    <h1 class="3xl:text-5xl text-2xl font-bold 3xl:mb-8 font-circularstd">Treatment Growth</h1>
                    <h1 class="text-4xl font-medium text-[#F84FDD] font-circularstd">426%</h1>
                </div>
            </div>
            {{-- <div class="">
            </div> --}}
        </div>
    </div>
    <div id="" class="relative bg-gradient-to-r from-[#FF00B8] from-0% via-[#A169CD] via-100%  w-screen h-screen flex items-center mx-auto ">
        <div class="flex flex-row justify-between items-center px-32 w-screen ">
            <div class="absolute bottom-0">
                <img src="" alt="">
            </div>
            <div class="w-7/12">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

            </div>
            
        </div>
    </div>
    </div>
    <div id="" class="relative bg-gradient-to-r from-[#FFCCEE] from 0% via-[#FFCBED] via-100% w-screen h-screen flex mx-auto ">
        <div class="flex justify-between items-center 3xl:px-32 px-8 w-screen bg-[url('/patterns/bg.png')] bg-no-repeat bg-center">

            <div class="3xl:w-5/12">
                <h1 class="font-bold 3xl:mb-16 mb-4 3xl:text-7xl text-3xl text-left font-circularstd">Let’s start to build
                    future <span class="text-[#F84FDD]">with us</span>
                </h1>
                <button class="3xl:py-8 p-4 3xl:text-3xl bg-gradient-to-br from-[#FF00B8] from-10% via-[#A169CD] via-100% font-bold font-circularstd text-white rounded-full 3xl:w-6/12 shadow-3d">
                    Contact Us
                </button>
            </div>
            <div class="w-5/12">
                <img src="patterns/salaman.svg" class="" alt="">
            </div>
        </div>
        <div class="absolute bottom-0 3xl:px-32 px-6 py-8 3xl:flex flex-row items-center w-screen 3xl:justify-between">
            <div class="text-center mb-4">
                <span class="3xl:text-xl font-circularstd">© Copyright Lulu.id All Rights Reserved</span>
            </div>
            <div class="3xl:text-left text-center">
                <div class="flex justify-center 3xl:justify-end">
                    <img src="images/logo-footer.png" class="3xl:mb-6 text-center" alt="">
                </div>
                <span class="3xl:text-xl font-circularstd">A Danmogot.com Company 2013-2022</span>
            </div>
        </div>
    </div>
    @endsection