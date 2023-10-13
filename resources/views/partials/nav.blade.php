
<header class="w-full fixed top-0 bg-transparent flex flex-wrap items-center justify-between mx-auto p-4 z-100">
    <nav class="nav w-full">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center">
                <span class="self-center text-logo text-2xl font-circularstd font-bold whitespace-nowrap
                {{ Request::is('/') ? 'text-white' : '' }}">MRI.id</span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-circularstd font-medium flex flex-col p-4 md:p-0 mt-4  md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li class="{{ Request::is('/') ? 'font-bold text-white/50' : 'text-[#F84FDD]' }} ">
                    <a href="{{ url('/') }}" >Home</a>
                </li>
                <li>
                    <a href="{{ url('vision') }}" class="{{ Request::is('/') ? 'text-white/50' : 'text-[#F84FDD]' }}">Our Vision</a>
                </li>
                <li>
                    <a href="{{ url('traction') }}" class="{{ Request::is('/') ? 'text-white/50' : 'text-[#F84FDD]' }}">Our Traction</a>
                </li>
                <li>
                    <a href="{{ url('gallery') }}" class="{{ Request::is('/') ? 'text-white/50' : 'text-[#F84FDD]' }}">Gallery</a>
                </li>
                <li>
                    <a href="{{ url('aboutus') }}" class="{{ Request::is('/') ? 'text-white/50' : 'text-[#F84FDD]' }}">About Us</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>



