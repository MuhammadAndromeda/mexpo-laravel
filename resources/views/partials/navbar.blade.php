<header class="fixed top-0 left-0 w-full z-50 py-3 flex justify-between items-center bg-transparent">
    <div class="w-full h-max border-y-2 border-y-white bg-transparent backdrop-blur-sm flex justify-end items-center">
        <nav class="w-full hidden md:flex justify-between items-center">
            <div class="px-30 gap-10 text-white font-light tracking-wider flex">
                <a class="hover:opacity-70" href="#">Home</a>
                <a class="hover:opacity-70" href="#">Register</a>
                <a class="hover:opacity-70" href="#">News</a>
                <a class="hover:opacity-70" href="#">Events</a>
                <a class="hover:opacity-70" href="#">Gallery</a>
            </div>
            
            <div class="bg-white px-18 flex items-center gap-4">
                <img alt="Logo" class="w-auto h-18" src="{{ asset('assets/images/logo_navbar.png') }}"/>
            </div>
        </nav>
            
        <div class="relative md:absolute py-4 px-6 flex md:hidden cursor-pointer">
            <i onclick="openSide()" class="fa-solid fa-bars py-4 pr-10 pl-4 bg-indigo-950 text-white rounded-lg shadow-xl text-3xl transition-all duration-800"></i>
        </div>
    </div>

    <aside id="sidebar" class="fixed top-0 left-0 w-80 h-screen py-2 px-2 -translate-x-full transition-all duration-300">
        <div class="w-full h-full gap-8 px-6 py-8 bg-indigo-900/60 backdrop-blur-sm rounded-xl shadow-sm shadow-white/70 flex flex-col justify-start items-center">
            <div class="w-full flex justify-between items-center">
                <div class="flex justify-center items-center gap-2">
                    <img alt="Logo" class="w-auto h-12" src="../src/assets/images/logo-mexpo.png"/>
                    <p class="text-white text-center text-3xl font-medium font-oswald capitalize">mexpo-16</p>
                </div>
                
                <div class="relative flex md:hidden cursor-pointer">
                    <i onclick="closeSide()" class="fa-solid fa-xmark py-3 pr-9 pl-3 bg-indigo-950 text-white rounded-lg shadow-2xl text-2xl transition-all duration-800"></i>
                </div>
            </div>

            <nav class="w-full text-white text-lg font-light tracking-wider gap-2 flex flex-col justify-center items-center">
                <a class="w-full text-left hover:opacity-70" href="#">Home</a>
                <a class="w-full text-left hover:opacity-70" href="#">Register</a>
                <a class="w-full text-left hover:opacity-70" href="#">News</a>
                <a class="w-full text-left hover:opacity-70" href="#">Events</a>
                <a class="w-full text-left hover:opacity-70" href="#">Gallery</a>
            </nav>
        </div>
    </aside>
</header>