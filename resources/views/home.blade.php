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
        @include('partials.nav')
        <div id="home1" class="relative bg-gradient-to-br from-[#FE4ECD] from-0% via-[#C564CB] via-100% h-screen w-screen">
            <div class="absolute left-0 translate-x-[-25rem] top-0 translate-y-[-15rem] 2xl:h-[32rem] 2xl:w-[32rem]">
                <img src="{{ asset('/patterns/circle.svg') }}" class="w-[400px]" alt="">
            </div>
            <div class="w-5/12 absolute left-16 top-[16rem] z-10">
                <h1 class="font-bold font-circularstd text-xl 2xl:text-3xl 3xl:text-7xl z-20 text-white 2xl:leading-12 3xl:leading-24">We help you maintaining your health and <br>
                    find the best solution
                </h1>
            </div>
            <div class="absolute right-0 bottom-[0px] z-10">
                <img src="{{ asset('/images/doctor.png')}}" class="xl:w-[38rem]" alt="">
            </div>
            <div class="absolute right-0 bottom-0 xl:h-[40rem] 2xl:h-[40rem] xl:w-[40rem] 2xl:w-[40rem] ">
                <img src="/patterns/circle.svg" class="w-full ml-[10rem]
                mt-[10rem]" alt="">
            </div>
            <div class="absolute bottom-[0rem] left-[12rem] origin-top-left rotate-24">
                <img src="/patterns/bg-shapes-2.png" class="2xl:w-[65rem] 3xl:w-[80rem]" alt="">
            </div>
        </div>
        <div id="home2 " class="relative bg-gradient-to-r from-[#FEE6F4] from-5% via-[#FEE6F4] via-100%  h-[4004px]">
            <div class="relative flex justify-center items-center h-screen ">
                <div class="absolute left-0">
                    <img src="patterns/Syringe.svg" class="w-full" alt="">
                </div>
                <div class="w-4/12">
                    <h1 class="text-center font-bold font-circularstd text-7xl text-bold leading-24 mb-16">
                        Get to know
                        MRI Products
                    </h1>
                    <div class="relative">
                        <img src="patterns/star.svg" class="absolute top-[-20px] left-[-30px] w-18" alt="">
                        <button class="w-full py-8 rounded-full text-white font-bold text-xl font-circularstd bg-gradient-to-b from-[#FF00B8] from-5% via-[#C564CB] via-100% rounded-10">Explore</button>
                        <img src="patterns/star.svg" class="absolute bottom-[-20px] right-[-20px] w-18" alt="">
                    </div>

                </div>
                <div class="absolute right-0 w-[460px] h-[460px] translate-y-2 translate-x-2/4">
                    <img src="patterns/circle-medium.svg" class="" alt="">
                </div>
            </div>
            <div class="relative h-screen mx-auto w-screen flex justify-center bg-[url('/patterns/bg-shapes.svg')] bg-center bg-no-repeat">
                <div class="w-5/12 text-center">
                    <h1 class="font-bold text-7xl mb-16 font-circularstd">Lulu.id</h1>
                    <p class="text-xl font-medium font-circularstd"><span class="font-bold">Lulu.id Beauty Clinic</span> <span class="font-book">is dedicated to delivering high-quality facial and body treatments, ensuring that every individual receives the appropriate and top-notch beauty care they deserve.</span></p>
                    <div class="flex mt-16">
                        <div class="translate-y-[-0.8rem] origin-bottom -rotate-12 z-10">
                            <img src="images/lulu1.png" class="bg-contain border-4 rounded-3xl border-white shadow-3d" alt="">
                        </div>
                        <div class="translate-x-[-0.5rem] origin-top-left rotate-12 z-20">
                            <img src="images/lulu2.png" class="bg-contain border-4 rounded-3xl border-white shadow-3d" alt="">
                        </div>
                        <div class="translate-x-[-2rem] translate-y-[-1rem] origin-bottom -rotate-12 z-30">
                            <img src="images/lulu3.png" class="bg-contain border-4 rounded-3xl border-white shadow-3d" alt="">
                        </div>
                    </div>
                </div>
                <div class="absolute left-[6rem] bottom-[6rem] paginate flex flex-wrap ">
                    <div class="grid grid-cols-3 gap-2">
                    <div class="">
                        <a href="" class="w-12 h-12 flex justify-center items-center bg-gradient-to-b from-[#FF00B8] from-30% via-[#DC00D3] via-100% rounded-full text-white font-medium text-xl font-circularstd">1</a>
                    </div>
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="" class=" text-black font-medium text-xl font-circularstd">2</a>
                    </div>
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="" class=" text-black font-medium text-xl font-circularstd">3</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="h-screen relative w-screen flex flex-row px-24 bg-[url('/patterns/bg-shapes.svg')] bg-center bg-no-repeat">
                <div class="absolute left-[10%]">
                    <img src="patterns/circle2.svg" alt="">
                </div>
                <div class="mt-16">
                    <h1 class="font-bold text-7xl mb-16 font-circularstd">Silium.id</h1>
                    <p class="font-book text-xl font-circularstd">Silium.id is a beauty studio that specializes in nail, <br> eyelash, and eyebrow treatments. We are dedicated <br> to providing high-quality care using the latest <br> products and techniques, and have a team of experts <br> who provide the right solutions.</p>
                </div>
                <div class="absolute right-[10%]">
                    <img src="patterns/price-tag.svg" class="w-full" alt="">
                </div>
                <div class="absolute left-[6rem] bottom-[6rem] paginate flex flex-wrap ">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="w-12 h-12 flex justify-center items-center bg-[#FF00B8] rounded-full">
                            <a href="" class=" text-white font-medium text-xl font-circularstd">1</a>
                        </div>
                        <div class="w-12 h-12 flex justify-center items-center ">
                            <a href="" class=" text-black font-medium text-xl font-circularstd">2</a>
                        </div>
                        <div class="w-12 h-12 flex justify-center items-center ">
                            <a href="" class=" text-black font-medium text-xl font-circularstd">3</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative h-screen w-screen flex justify-center z-[100px] flex-row">
                <div class="absolute bottom-[-5rem] w-[520px] flex flex-row justify-center">
                    <img src="patterns/lunoar.svg" class="" alt="">
                </div>
                <div class="w-6/12 text-center mt-16">
                    <h1 class="font-bold text-7xl mb-16 font-circularstd">Lunoar.id</h1>
                    <p class="font-book text-2xl font-circularstd">Lunoar is our beauty product that provides the best protection and  nutrition for the skin, as well as providing natural hydration, firmness,  and brightening to the face.</p>
                </div>
                <div class="absolute right-0 translate-x-[16rem] translate-y-[4rem] z-0 w-[550px] h-[550px]">
                    <img src="patterns/circle-medium.svg" class="w-full" alt="">
                </div>
                <div class="absolute left-[6rem] bottom-[6rem] paginate flex flex-wrap ">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="w-12 h-12 flex justify-center items-center bg-[#FF00B8] rounded-full">
                            <a href="" class=" text-white font-medium text-xl font-circularstd">1</a>
                        </div>
                        <div class="w-12 h-12 flex justify-center items-center ">
                            <a href="" class=" text-black font-medium text-xl font-circularstd">2</a>
                        </div>
                        <div class="w-12 h-12 flex justify-center items-center ">
                            <a href="" class=" text-black font-medium text-xl font-circularstd">3</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="home3" class="relative bg-gradient-to-b from-[#FFCBEE] from-100% via-[#FFB5E6] via-100% via w-screen h-screen  flex items-center mx-auto z-50">
            <div class="flex flex-row justify-between items-center px-16 w-full bg-[url('/patterns/bg-shapes.png')] bg-no-repeat bg-center bg-contain">

                <div class="w-6/12">
                    <h1 class="font-bold mb-16 text-7xl text-left leading-24 font-circularstd">Let’s start to build
                        future <span class="text-[#F84FDD]">with us</span>
                    </h1>
                    <button class="py-8 shadow-3d text-2xl font-circularstd bg-gradient-to-br from-[#FF00B8] 100% via-[#A169CD] via-100% font-bold text-white rounded-full w-6/12">
                        Contact Us
                    </button>
                </div>
                <div class="w-[500px] ">
                    <img src="patterns/salaman.svg" class="origin-top-left rotate-12" alt="">
                </div>
            </div>
        </div>
        <div id="home4" class="relative bg-gradient-to-br from-[#FF00B8] from 70%  via-[#D281D6] via-100% w-screen h-[1550px] z-50 ">
            <div class="absolute top-[-10rem] left-[25rem] w-[400px]">
                <img src="patterns/jarum.svg" class="z-0 w-full" alt="">
            </div>
            <div class="absolute top-[10rem] right-0 w-[400px]">
                <img src="patterns/tetoskop.svg" class="z-0 origin-bottom -rotate-12" alt="">
            </div>
            <div class="absolute top-[10rem] left-0 w-[400px]">
                <img src="patterns/tas.svg" class="z-0 w-full" alt="">
            </div>
            <div class="flex justify-center items-center z-15">
                <div class="text-center mt-[16rem]">
                    <h1 class="2xl:text-6xl 3xl:text-7xl font-bold text-white mb-16 font-circularstd">Meet Our Doctor</h1>
                    <p class="font-book text-white 2xl:text-xl font-circularstd">Our doctor is certified for giving the best treatment</p>
                </div>
            </div>
            <div class="flex flex-row justify-center mt-36">
                <div class="w-[190px] h-[190px] mx-32 text-center z-10">
                    <img src="images/doctor1.png" class="w-full rounded-full mb-8" alt="">
                    <span class="font-medium text-xl text-white font-circularstd">dr. Rointan Hutahaean</span>
                </div>
                <!-- ... -->
                <div class="w-[190px] h-[190px] mx-32 text-center z-10">
                    <img src="images/doctor2.png" class="w-full rounded-full mb-8" alt="">
                    <span class="font-medium text-xl text-white font-circularstd">dr. AR. Ridha Putri, Sp.D.V</span>
                </div>
                <div class="w-[190px] h-[190px] mx-32 text-center z-10">
                    <img src="images/doctor3.png" class="w-full rounded-full mb-8" alt="">
                    <span class="font-medium text-xl text-white font-circularstd">dr. Rudi Chandra, Sp.D.V</span>
                </div>
            </div>
            <div class="flex flex-row justify-center mt-36">
                <div class="w-[190px] h-[190px] mx-32 text-center z-10">
                    <img src="images/doctor4.png" class="w-full rounded-full mb-8" alt="">
                    <span class="font-medium text-xl text-white font-circularstd">dr. Ayu Agustin</span>
                </div>
                <!-- ... -->
                <div class="w-[190px] h-[190px] mx-32 text-center z-10">
                    <img src="images/doctor5.png" class="w-full rounded-full mb-8" alt="">
                    <span class="font-medium text-xl text-white font-circularstd">dr. Elviza Fahriani M.K.M</span>
                </div>
                <div class="w-[190px] h-[190px] mx-32 text-center z-10">
                    <img src="images/doctor6.png" class="w-full rounded-full mb-8" alt="">
                    <span class="font-medium text-xl text-white font-circularstd">dr. Jonathan Perangin-angin</span>
                </div>
            </div>
            <div class="absolute bottom-0 z-0 right-0 origin-top-left rotate-24 w-[1200px]">
                <img src="/patterns/bg-shapes-2.png" class="w-full" alt="">
            </div>
        </div>
        <div id="home5" class="relative w-screen bg-gradient-to-br from-[#FDF3F9] from 70% via-[#FFFFFF] via-100%   z-50 ">
            <div class="flex flex-row justify-between h-screen items-center px-16">
                <div class="w-6/12">
                    <div class="w-4/12 mb-16">
                        <h1 class="font-bold text-8xl font-circularstd">Project Overview</h1>
                    </div>
                    <div class="flex">
                        <div class="me-24">
                            <h1 class="font-bold text-3xl mb-8 font-circularstd">Investment Targets
                            <h1 class="font-medium text-5xl text-[#F84FDD] font-circularstd">Rp30.000.000.000</h1>
                        </div>
                        <div>
                            <h1 class="font-bold text-3xl mb-8 font-circularstd">Break Even Point</h1>
                            <h1 class="font-medium text-5xl text-[#F84FDD] font-circularstd">3 Years</h1>
                        </div>
                    </div>
                </div>
                <div class="w-4/12 flex items-center">
                    <img src="patterns/roket.svg" class="w-full" alt="">
                </div>
                <div class="absolute right-0 bottom-0 w-[550px] h-[550px] translate-x-2/4 translate-y-[17rem]">
                    <img src="patterns/circle-medium.svg" class="w-full " alt="">
                </div>
                <div class="absolute left-0 top-0 translate-x-[-22rem] translate-y-[-15rem]">
                    <img src="patterns/circle-2.svg" class="w-full" alt="">
                </div>
            </div>

        </div>

        <div id="home6" class="relative bg-gradient-to-b from-[#FFECF9] from-100% via-[#FBC3ED] h-[2700px] via-70% w-screen mx-auto z-50">
            <div class="flex w-screen items-center justify-between px-16">
                <div class="w-7/12">
                    <h1 class="2xl:text-6xl 3xl:text-7xl mb-16 font-bold font-circularstd">IT Solution</h1>
                    <p class="2xl:text-2xl font-circularstd">Everything is integrated with digital system</p>
                </div>
                <div class="w-5/12">
                    <img src="patterns/hp.svg" class="w-full origin-top-left rotate-12" alt="">
                </div>
            </div>
            <div class="flex justify-center my-16">
                <div class="w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d">
                    <h4 class="text-2xl font-book mb-4 font-circularstd">Realtime Treatment Monitoring System</h4>
                    <img src="images/solution1.png" class="w-full" alt="">
                </div>
                <div class="w-6/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d">
                    <h4 class="text-2xl font-book mb-4 font-circularstd">Online Scheduling System</h4>
                    <img src="images/solution2.png" class="w-full" alt="">
                </div>
            </div>
            <div class="flex justify-center mb-8">
                <div class="w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d">
                    <h4 class="text-2xl font-book mb-4 font-circularstd">Online Consultation with Our Beauty Expert</h4>
                    <img src="images/solution3.png" class="w-full" alt="">
                </div>
                <div class="w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d">
                    <h4 class="text-2xl font-book mb-4 font-circularstd">Online Payment System</h4>
                    <img src="images/solution4.png" class="w-full" alt="">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-3/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d">
                    <h4 class="text-2xl font-book mb-4 font-circularstd">Drone Customer Service</h4>
                    <img src="images/solution5.png" class="w-full" alt="">
                </div>
                <div class="w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d">
                    <h4 class="text-2xl font-book mb-4 font-circularstd">Reservation and Advanced Booking Tech</h4>
                    <img src="images/solution4.png" class="w-full" alt="">
                </div>
            </div>
        </div>
        <!-- <div id="home7" class="relative bg-gradient-to-br from-[#FF00B8] from-50% via-[#A169CD] via-100% w-screen h-screen mx-auto ">
            <div class="flex justify-center items-center w-screen-xl h-screen px-28">
                <div class="relative mb-36 text-center">
                    <div class="absolute left-0 bottom-0 origin-bottom -rotate-12">
                        <img src="petik-kiri.png" alt="">
                    </div>
                    <div class="absolute right-0 bottom-0 origin-top-left rotate-12">
                        <img src="petik-kanan.png" alt="">
                    </div>
                    <h1 class="font-bold  text-8xl text-white font-circularstd">What our customers say</h1>x
                </div>
            </div>
            <div class="flex flex-row">

            </div>
        </div> -->
        <script src="js/main.js"></script>
    </body>
</html>
