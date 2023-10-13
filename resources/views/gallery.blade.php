@extends('partials.header')
    @section('content')
    <div class="overflow-hidden relative h-screen w-screen bg-gradient-to-r from-[#FA85D4] from-100% via-[#F595DF] via-100%">
        <div class="absolute left-0 translate-x-[-44rem] w-[900px] h-[900px] translate-y-[3rem]">
            <img src="patterns/circle.svg" class="w-full" alt="">
        </div>
        <div class="flex flex-row  h-screen">
            <div class="flex items-center w-2/12 z-10">
                <ul>
                    <li class="mb-8">
                        <a href="" class="font-book text-white text-xl font-circularstd ml-18">Products</a>
                    </li>
                    <li class="mb-8">
                        <a href="" class="font-book text-white text-xl font-circularstd ml-24">Venue</a>
                    </li>
                    <li class="mb-8">
                        <a href="" class="font-book text-white text-xl font-circularstd ml-24">Ambience</a>
                    </li>
                    <li>
                        <a href="" class="font-book text-white text-xl font-circularstd ml-18">Event</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center w-3/12 z-10">
                <div>
                    <h1 class="font-bold font-circularstd text-white text-7xl ">Gallery</h1>
                <div class="border border-white w-4/12 border-8 my-8"></div>
                <p class="font-book text-white text-xl font-circularstd">visual narrative of our journey, showcasing <br>a captivating collection of photos</p>

                <div class="flex my-12">
                    <div class="p-8 rounded-2xl bg-gradient-to-br from-[#FCB2E4] from-100% via-[#FB97DC] via-80% w[100px]">
                        <div class="flex flex items-center bg-gradient-to-r p-8 h-[150px] from-[#FC93DA] from-40% via-[#FC93DA] via-100% rounded-2xl">
                            <div class="flex items-center">
                                <img src="patterns/camera.svg" class="w-full" alt="">
                                <span class="font-book text-xl text-white font-circularstd">Photos</span>
                            </div>
                        </div>
                        <div class="p-8 h-[150px] ">
                            <div class="flex items-center">
                                <img src="patterns/video.svg" class="w-full" alt="">
                                <span class="font-book text-xl text-white font-circularstd">Videos</span>
                            </div>
                        </div>
                    </div>
                </div>  
                </div>
            </div>
            <div class="w-7/12 overflow-y-hidden flex items-end z-30">
                <div class="h-5/6 w-screen border-x-2 border-white">
                    <div class="gallery-slider">
                        <div class="h-screen gallery-item">
                            <div class="flex justify-end">
                                <div class="w-1/2">
                                    <div class="p-4 flex justify-between">
                                        <div>
                                            <h1 class="font-bold text-xl  text-white font-circularstd">Laser Rejuv</h1>
                                            <span class="font-medium text-xl  text-white font-circularstd">Improving the health of skin</span>
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-white text-5xl font-circularstd   ">01</h1>
                                        </div>
                                    </div>
                                    <img src="images/gallery/2.png" class="w-full" alt="">
                                </div>
                            </div>
                            <div class="flex justify-start">
                                <div class="w-1/2">
                                    <div class="p-4 flex justify-between">
                                        <div>
                                            <h1 class="font-bold text-xl  text-white font-circularstd">Facial Treatment</h1>
                                            <span class="font-medium text-xl  text-white font-circularstd">Cleansing, exfoliation, and dirt removal</span>
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-white text-5xl font-circularstd   ">02</h1>
                                        </div>
                                    </div>
                                    <img src="images/gallery/1.png" class="w-full" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="h-screen gallery-item">
                            
                            <div class="flex justify-end">
                                <div class="w-1/2 translate-y-8">
                                    <div class="p-4 flex justify-between">
                                        <div>
                                            <h1 class="font-bold text-xl  text-white font-circularstd">Treatment Room</h1>
                                            <span class="font-medium text-xl  text-white font-circularstd">Space within a healthcare facility</span>
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-white text-5xl font-circularstd   ">03</h1>
                                        </div>
                                    </div>
                                    <img src="images/gallery/1.png" class="w-full" alt="">
                                </div>
                            </div>
                            <div class="flex justify-start">
                                <div class="w-1/2 translate-y-8">
                                    <div class="p-4 flex justify-between">
                                        <div>
                                            <h1 class="font-bold text-xl  text-white font-circularstd">Private Room</h1>
                                            <span class="font-medium text-xl  text-white font-circularstd">Ensure comfort, privacy, and safety</span>
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-white text-5xl font-circularstd   ">04</h1>
                                        </div>
                                    </div>
                                    <img src="images/gallery/2.png" class="w-full" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
