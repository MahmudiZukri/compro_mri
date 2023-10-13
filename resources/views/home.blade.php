@extends('partials.header')
    @section('content')
    <div id="home1" class="relative bg-gradient-to-br from-[#FE4ECD] from-0% via-[#C564CB] via-100% h-screen w-screen">
        <div class="absolute left-0 translate-x-[-25rem] top-0 translate-y-[-15rem] 2xl:h-[32rem] 2xl:w-[32rem]">
            <img src="{{ asset('/patterns/circle.svg') }}" class="w-[400px]" alt="">
        </div>
        <div class="3xl:w-6/12 absolute 3xl:left-16 left-8 3xl:top-[16rem] top-[10rem] z-10">
            <h1 class="font-bold font-circularstd text-2xl 2xl:text-3xl 3xl:text-7xl z-20 text-white 2xl:leading-12 3xl:leading-24">
                We help you maintaining your health <br> and find the best solution
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
        <div class="relative 3xl:flex justify-center items-center h-screen ">
            <div class="3xl:absolute 3xl:left-0 3xl:top-0 3xl:translate-x-16 3xl:w-full w-[200px]">
                <img src="patterns/jarum2.svg" class="w-full" alt="">
            </div>
            <div class="3xl:w-4/12 px-8">
                <h1 class="3xl:text-center text-center font-bold font-circularstd 3xl:text-7xl text-2xl text-bold xl:leading-24 mb-16">
                    Get to know
                    MRI Products
                </h1>
                <div class="relative">
                    <img src="patterns/star.svg" class="absolute top-[-20px] left-[-30px] w-18" alt="">
                    <button class="3xl:w-full w-full 3xl:py-8 py-4 rounded-full text-white font-bold text-xl font-circularstd bg-gradient-to-b from-[#FF00B8] from-5% via-[#C564CB] via-100% rounded-10">Explore</button>
                    <img src="patterns/star.svg" class="absolute bottom-[-20px] right-[-20px] w-18" alt="">
                </div>

            </div>
            <div class="absolute right-0 w-[460px] h-[460px] translate-y-2 translate-x-2/4">
                <img src="patterns/circle-medium.svg" class="" alt="">
            </div>
        </div>
        <div id="lulu" class="relative h-screen w-screen pt-8 3xl:flex 3xl:justify-center content-between bg-[url('/patterns/bg-shapes.svg')] bg-center bg-no-repeat">
            <div class="3xl:w-5/12 px-8 3xl:text-center">
                <h1 class="font-bold 3xl:text-7xl text-2xl 3xl:mb-16 mb-4 font-circularstd">Lulu.id</h1>
                <p class="text-xl font-medium font-circularstd"><span class="font-bold">Lulu.id Beauty Clinic</span> <span class="font-book">is dedicated to delivering high-quality facial and body treatments, ensuring that every individual receives the appropriate and top-notch beauty care they deserve.</span></p>
                <div class="flex 3xl:mt-16 my-16 3xl:justify-start justify-center">
                    <div class="translate-y-[-0.8rem] origin-bottom -rotate-12 z-10">
                        <img src="images/lulu1.png" class="w-full border-4 rounded-3xl border-white shadow-3d" alt="">
                    </div>
                    <div class="translate-x-[-0.5rem] origin-top-left rotate-12 z-20">
                        <img src="images/lulu2.png" class="w-full border-4 rounded-3xl border-white shadow-3d" alt="">
                    </div>
                    <div class="translate-x-[-2rem] translate-y-[-1rem] origin-bottom -rotate-12 z-30">
                        <img src="images/lulu3.png" class="w-full border-4 rounded-3xl border-white shadow-3d" alt="">
                    </div>
                </div>
            </div>
            <div class="3xl:absolute absolute 3xl:left-[6rem] 3xl:bottom-[6rem] bottom-0 translate-x-3/4 translate-y-[-6rem] paginate flex justify-center flex-wrap ">
                <div class="grid grid-cols-3 gap-2">
                    <div class="">
                        <a href="#lulu" class="w-12 h-12 flex justify-center items-center bg-gradient-to-b from-[#FF00B8] from-30% via-[#DC00D3] via-100% rounded-full text-white font-medium text-xl font-circularstd">1</a>
                    </div>
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="#silium" class=" text-black font-medium text-xl font-circularstd">2</a>
                    </div>
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="#lunoar" class=" text-black font-medium text-xl font-circularstd">3</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="silium" class="relative h-screen w-screen 3xl:flex 3xl:flex-row 3xl:items-center 3xl:px-24 px-8 bg-[url('/patterns/bg-shapes.svg')] bg-center bg-no-repeat">
            <div class="absolute left-[10%]">
                <img src="patterns/circle2.svg" alt="">
            </div>
            <div class="3xl:mt-16">
                <h1 class="font-bold 3xl:text-7xl text-2xl 3xl:mb-16 mb-4 font-circularstd">Silium.id</h1>
                <p class="font-book text-xl font-circularstd">Silium.id is a beauty studio that specializes in nail, <br> eyelash, and eyebrow treatments. We are dedicated <br> to providing high-quality care using the latest <br> products and techniques, and have a team of experts <br> who provide the right solutions.</p>
            </div>
            <div class="3xl:absolute 3xl:right-[10%] hidden">
                <img src="patterns/price-tag.svg" class="w-full" alt="">
            </div>
            <div class="3xl:absolute absolute bottom-0 3xl:left-[6rem] 3xl:bottom-[6rem] translate-x-2/4 translate-y-[-6rem] paginate flex justify-center flex-wrap ">
                <div class="grid grid-cols-3 gap-2">
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="#lulu" class=" text-black font-medium text-xl font-circularstd">1</a>
                    </div>
                    <div class="">
                        <a href="#silium" class="w-12 h-12 flex justify-center items-center bg-gradient-to-b from-[#FF00B8] from-30% via-[#DC00D3] via-100% rounded-full text-white font-medium text-xl font-circularstd">2</a>
                    </div>
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="#lunoar" class=" text-black font-medium text-xl font-circularstd">3</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="lunoar" class="relative h-screen w-screen flex justify-center flex-row px-8">
            <div class="absolute bottom-0 translate-y-16 w-[550px] 3xl:flex 3xl:flex-row 3xl:justify-center hidden">
                <img src="patterns/lunoar.svg" class="w-full" alt="">
            </div>
            <div class="3xl:w-6/12 3xl:text-center text-left mt-16">
                <h1 class="font-bold 3xl:text-7xl text-2xl 3xl:mb-16 mb-4 font-circularstd">Lunoar.id</h1>
                <p class="font-book text-2xl font-circularstd">Lunoar is our beauty product that provides the best protection and  nutrition for the skin, as well as providing natural hydration, firmness,  and brightening to the face.</p>
            </div>
            <div class="absolute right-0 translate-x-[16rem] translate-y-[4rem] z-0 w-[550px] h-[550px]">
                <img src="patterns/circle-medium.svg" class="w-full" alt="">
            </div>
            <div class="3xl:absolute absolute 3xl:left-[6rem] 3xl:bottom-[6rem] bottom-0  translate-y-[-6rem] paginate flex justify-center flex-wrap ">
                <div class="grid grid-cols-3 gap-2">
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="#lulu" class=" text-black font-medium text-xl font-circularstd">1</a>
                    </div>
                    <div class="w-12 h-12 flex justify-center items-center ">
                        <a href="#silium" class=" text-black font-medium text-xl font-circularstd">2</a>
                    </div>
                    <div class="">
                        <a href="#lunoar" class="w-12 h-12 flex justify-center items-center bg-gradient-to-b from-[#FF00B8] from-30% via-[#DC00D3] via-100% rounded-full text-white font-medium text-xl font-circularstd">3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home3" class="relative bg-gradient-to-b from-[#FFCBEE] from-100% via-[#FFB5E6] via-100% via w-screen h-screen flex items-center mx-auto z-10">
        <div class="3xl:flex 3xl:flex-row 3xl:justify-between 3xl:items-center 3xl:px-16 px-8 w-screen">
            <div class="3xl:absolute left-1/4 hidden">
               <img src="patterns/bg.png" alt=""> 
            </div>
            <div class="3xl:w-6/12 z-20">
                <h1 class="font-bold 3xl:mb-16 3xl:text-7xl text-3xl text-left 3xl:leading-24 leading-12 font-circularstd">Let’s start to build
                    future <span class="text-[#F84FDD]">with us</span>
                </h1>
                <button class="3xl:py-8 p-4 shadow-3d 3xl:text-2xl font-circularstd bg-gradient-to-br from-[#FF00B8] 100% via-[#A169CD] via-100% font-bold text-white rounded-full 3xl:w-6/12">
                    Contact Us
                </button>
            </div>
            <div class="3xl:w-6/12 hidden">
                <img src="patterns/salaman.svg" class="w-full origin-top-left rotate-12" alt="">
            </div>
        </div>
        <div class="absolute bottom-0 3xl:px-32 px-6 py-8 3xl:flex flex-row items-center w-screen 3xl:justify-between">
            <div class="text-center mb-4">
                <span class="3xl:text-xl font-circularstd">© Copyright Lulu.id All Rights Reserved</span>
            </div>
            <div class="3xl:text-left text-center">
                <img src="images/logo-footer.png" class="mb-6" alt="">
                <span class="text-xl font-circularstd">A Danmogot.com Company 2013-2022</span>
            </div>
        </div>
    </div>
    <div id="home4" class="relative bg-gradient-to-br from-[#FF00B8] from-70% py-8 px-8 via-[#D281D6] via-100% w-screen 3xl:h-[1550px] z-0 ">
        <div class="hidden absolute top-[-10rem] left-[25rem] w-[400px] hidden">
            <img src="patterns/jarum.svg" class="z-0 w-full" alt="">
        </div>
        <div class="hidden absolute top-[10rem] right-0 w-[400px] hidden">
            <img src="patterns/tetoskop.svg" class="z-0 origin-bottom -rotate-12" alt="">
        </div>
        <div class="hidden absolute top-[10rem] left-0 w-[400px] hidden">
            <img src="patterns/tas.svg" class="z-0 w-full" alt="">
        </div>
        <div class="flex justify-center items-center z-15">
            <div class="3xl:text-center 3xl:mt-[16rem]">
                <h1 class="2xl:text-6xl 3xl:text-7xl text-5xl font-bold text-white 3xl:mb-16 mb-4 font-circularstd">Meet Our Doctor</h1>
                <p class="font-book text-white 2xl:text-xl text-xl font-circularstd">Our doctor is certified for giving the best treatment</p>
            </div>
        </div>
        <div class="">
            <div class="3xl:flex flex-row justify-center 3xl:mt-36 mt-8">
                <div class="3xl:w-[200px] 3xl:h-[200px] mb-4 3xl:mx-32 text-center z-10">
                    <div class="w-[150px]">
                        <img src="images/doctor1.png" class="w-full rounded-full mb-8" alt="">
                    </div>
                    <span class="font-medium text-xl text-white font-circularstd">dr. Rointan Hutahaean</span>
                </div>
                <!-- ... -->
                <div class="3xl:w-[200px] 3xl:h-[200px] mb-4 3xl:mx-32 text-center z-10">
                    <div class="w-[150px]">
                        <img src="images/doctor2.png" class="w-full rounded-full mb-8" alt="">
                    </div>
                    <span class="font-medium text-xl text-white font-circularstd">dr. AR. Ridha Putri, Sp.D.V</span>
                </div>
                <div class="3xl:w-[200px] 3xl:h-[200px] mb-4 3xl:mx-32 text-center z-10">
                    <div class="w-[150px]">
                        <img src="images/doctor3.png" class="w-full rounded-full mb-8" alt="">
                    </div>
                    <span class="font-medium text-xl text-white font-circularstd">dr. Rudi Chandra, Sp.D.V</span>
                </div>
            </div>
            <div class="3xl:flex flex-row 3xl:justify-center 3xl:mt-36 mt-8">
                <div class="3xl:w-[200px] 3xl:h-[200px] 3xl:mx-32 text-center z-10">
                    <div class="w-[150px]">
                        <img src="images/doctor4.png" class="w-full rounded-full mb-8" alt="">
                    </div>
                    <span class="font-medium text-xl text-white font-circularstd">dr. Ayu Agustin</span>
                </div>
                <!-- ... -->
                <div class="3xl:w-[200px] 3xl:h-[200px] 3xl:mx-32 text-center z-10">
                    <div class="w-[150px]">
                        <img src="images/doctor5.png" class="w-full rounded-full mb-8" alt="">
                    </div>
                    <span class="font-medium text-xl text-white font-circularstd">dr. Elviza Fahriani M.K.M</span>
                </div>
                <div class="3xl:w-[200px] 3xl:h-[200px] 3xl:mx-32 text-center z-10">
                    <div class="w-[150px]">
                        <img src="images/doctor6.png" class="w-full rounded-full mb-8" alt="">
                    </div>
                    <span class="font-medium text-xl text-white font-circularstd">dr. Jonathan Perangin-angin</span>
                </div>
            </div>
        </div>
        <div class="3xl:absolute hidden bottom-0 z-0 right-0 origin-top-left rotate-24 w-[1200px]">
            <img src="/patterns/bg-shapes-2.png" class="w-full" alt="">
        </div>
    </div>
    <div id="home5" class="relative w-screen pt-16 px-8 bg-gradient-to-br from-[#FDF3F9] from-70% via-[#FFFFFF] via-100% z-50 ">
        <div class="3xl:flex flex-row justify-between h-screen 3xl:items-center 3xl:-16">
            <div class="3xl:w-6/12">
                <div class="w-4/12 3xl:mb-16">
                    <h1 class="font-bold 3xl:text-8xl text-3xl mb-4 font-circularstd">Project Overview</h1>
                </div>
                <div class="3xl:flex">
                    <div class="3xl:me-24 mb-4">
                        <h1 class="font-bold 3xl:text-3xl text-2xl 3xl:mb-8 font-circularstd">Investment Targets
                        <h1 class="font-medium 3xl:text-5xl text-[#F84FDD] font-circularstd">Rp30.000.000.000</h1>
                    </div>
                    <div>
                        <h1 class="font-bold 3xl:text-3xl text-2xl 3xl:mb-8 font-circularstd">Break Even Point</h1>
                        <h1 class="font-medium 3xl:text-5xl text-[#F84FDD] font-circularstd">3 Years</h1>
                    </div>
                </div>
            </div>
            <div class="3xl:w-4/12">
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
    <div id="home6" class="relative bg-gradient-to-b from-[#FFECF9] from-100% via-[#FBC3ED] via-70% py-8 w-screen mx-auto z-50">
        <div class="3xl:flex w-screen 3xl:items-center justify-between 3xl:px-16 px-8">
            <div class="3xl:w-7/12">
                <h1 class="2xl:text-6xl 3xl:text-7xl text-5xl 3xl:mb-16 mb-4 font-bold font-circularstd">IT Solution</h1>
                <p class="2xl:text-2xl text-xl font-circularstd">Everything is integrated with digital system</p>
            </div>
            <div class="3xl:w-5/12 w-screen">
                <img src="patterns/hp.svg" class="w-full 3xl:origin-top-left 3xl:rotate-12" alt="">
            </div>
        </div>
        <div class="3xl:flex justify-center 3xl:my-16">
            <div class="3xl:w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d mb-4">
                <h4 class="text-2xl font-book mb-4 font-circularstd">Realtime Treatment Monitoring System</h4>
                <img src="images/solution1.png" class="w-full" alt="">
            </div>
            <div class="3xl:w-6/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d mb-4">
                <h4 class="text-2xl font-book mb-4 font-circularstd">Online Scheduling System</h4>
                <img src="images/solution2.png" class="w-full" alt="">
            </div>
        </div>
        <div class="3xl:flex justify-center 3xl:mb-8">
            <div class="3xl:w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d mb-4">
                <h4 class="text-2xl font-book mb-4 font-circularstd">Online Consultation with Our Beauty Expert</h4>
                <img src="images/solution3.png" class="w-full" alt="">
            </div>
            <div class="3xl:w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d mb-4">
                <h4 class="text-2xl font-book mb-4 font-circularstd">Online Payment System</h4>
                <img src="images/solution4.png" class="w-full" alt="">
            </div>
        </div>
        <div class="3xl:flex justify-center">
            <div class="3xl:w-3/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d mb-4">
                <h4 class="text-2xl font-book mb-4 font-circularstd">Drone Customer Service</h4>
                <img src="images/solution5.png" class="w-full" alt="">
            </div>
            <div class="3xl:w-4/12 p-8 bg-[#FFC7E2] mx-4 rounded-2xl shadow-4d mb-4">
                <h4 class="text-2xl font-book mb-4 font-circularstd">Reservation and Advanced Booking Tech</h4>
                <img src="images/solution4.png" class="w-full" alt="">
            </div>
        </div>
    </div>
    <div id="home7" class="relative bg-gradient-to-br from-[#FE49CA] from-50% via-[#A169CD] via-100% w-screen h-screen mx-auto ">
        <div class="h-screen flex justify-center items-center">
            <div>
                <div class="relative 3xl:mb-36 3xl:text-center">
                    <div class="absolute left-0 bottom-0 origin-bottom -rotate-12">
                        <img src="images/petik-kiri.png" alt="">
                    </div>
                    <div class="absolute right-0 bottom-0 origin-top-left rotate-12">
                        <img src="images/petik-kanan.png" alt="">
                    </div>
                    <h1 class="font-bold 3xl:text-8xl text-3xl text-white font-circularstd">What our customers say</h1>
                </div>
                <div class="3xl:w-[1536px] mx-auto">
                    <div class="testimoni-slider">
                        <div class="item flex items-center bg-white rounded-2xl p-8  ">
                            <p class="font-book font-circularstd text-lg mb-4">aku ga takut panas-panasan lagi, because i always upgrade the skin’s glow by snow white treatment at Lulu Clinic</p>
                            <div class="border"></div>
                            <div class="flex justify-between items-center py-2">
                                <p class="text-xl">Alyssa</p>
                                <div></div>
                            </div>
                        </div>
                        <div class="item flex items-center bg-white rounded-2xl p-8  ">
                            <p class="font-book font-circularstd text-lg mb-4">aku ga takut panas-panasan lagi, because i always upgrade the skin’s glow by snow white treatment at Lulu Clinic</p>
                            <div class="border"></div>
                            <div class="flex justify-between items-center py-2">
                                <p class="text-xl">Alyssa</p>
                                <div></div>
                            </div>
                        </div>
                        <div class="item flex items-center bg-white rounded-2xl p-8  ">
                            <p class="font-book font-circularstd text-lg mb-4">aku ga takut panas-panasan lagi, because i always upgrade the skin’s glow by snow white treatment at Lulu Clinic</p>
                            <div class="border"></div>
                            <div class="flex justify-between items-center py-2">
                                <p class="text-xl">Alyssa</p>
                                <div></div>
                            </div>
                        </div>
                        <div class="item flex items-center bg-white rounded-2xl p-8  ">
                            <p class="font-book font-circularstd text-lg mb-4">aku ga takut panas-panasan lagi, because i always upgrade the skin’s glow by snow white treatment at Lulu Clinic</p>
                            <div class="border"></div>
                            <div class="flex justify-between items-center py-2">
                                <p class="text-xl">Alyssa</p>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    @endsection

