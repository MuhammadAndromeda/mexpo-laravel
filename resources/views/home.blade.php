@extends('layout.main')
@section('content')
    <section class="w-full h-screen px-8 md:px-25 py-10 bg-hero-gradient flex flex-col-reverse md:flex-row justify-between items-center">
        <div class="w-full md:container mx-auto gap-1 lex flex-col justify-center items-center md:items-start z-10">
            <div class="gap-2 md:gap-4 flex flex-col justify-center items-center md:items-start">
                <h1 class="text-white text-6xl lg:text-7xl text-center md:text-left font-oswald font-black heading-bold uppercase leading-tight">
                    WELCOME TO THE 16TH MANAGEMENT EXPO
                </h1>
                <p class="text-white text-xl md:text-2xl mb-5 md:mb-8 font-semibold">
                    16th Management Expo
                </p>
            </div>

            <div class="flex justify-center md:justify-start items-center gap-4">
                <button class="bg-white text-indigo-900 px-8 py-3 text-sm md:text-base rounded-md font-bold hover:bg-gray-100 transition shadow-lg">
                    More about us?
                </button>
                <button class="border border-white text-white px-8 py-3 text-sm md:text-base rounded-md font-bold hover:bg-white/10 transition">
                    More about us?
                </button>
            </div>
        </div>

        <div class="w-full h-screen flex justify-center items-end">
            <img src="{{ asset('assets/images/hero-image.png') }}" alt="Hero Section Image" class="w-60 md:w-120 h-auto"/>
        </div>
    </section>

    <section class="pr-0 md:pr-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 justify-between items-center">
            <!-- Left: Image Mosaic -->
            <div class="grid grid-cols-2">
                <img alt="Culture 1" class="w-full h-70 object-cover" src="{{ asset('assets/images/sub-image-1.png') }}"/>
                <img alt="Culture 2" class="w-full h-70 object-cover" src="{{ asset('assets/images/sub-image-2.png') }}"/>
                <img alt="Culture 3" class="w-full h-100 object-cover" src="{{ asset('assets/images/sub-image-3.png') }}"/>
                <img alt="Culture 4" class="w-full h-100 object-cover" src="{{ asset('assets/images/sub-image-4.png') }}"/>
            </div>

            <!-- Right: Content -->
            <div class="px-8 py-8">
                <h2 class="text-7xl text-center md:text-left font-oswald font-black text-indigo-950 mb-6 uppercase leading-none">
                    SUB OF EVENTS
                </h2>
                <p class="text-xl text-center md:text-left text-gray-800 mb-10 max-w-md">
                    Theese are some events that you can choose by your own self
                </p>

                <div class="space-y-4">
                    <div class="border border-indigo-200 rounded-lg p-4 text-indigo-800 font-semibold text-center hover:bg-indigo-50 transition cursor-pointer">
                        International Management Startup Challenge (IMSC)
                    </div>
                    <div class="border border-indigo-200 rounded-lg p-4 text-indigo-800 font-semibold text-center hover:bg-indigo-50 transition cursor-pointer">
                        International Business Case Competition (IBCC)
                    </div>
                    <div class="border border-indigo-200 rounded-lg p-4 text-indigo-800 font-semibold text-center hover:bg-indigo-50 transition cursor-pointer">
                        Management Olympiad (MO)
                    </div>
                    <div class="border border-indigo-200 rounded-lg p-4 text-indigo-800 font-semibold text-center hover:bg-indigo-50 transition cursor-pointer">
                        Universitas Airlangga Stock Exchange Competition (UASTEC)
                    </div>
                    <div class="border border-indigo-200 rounded-lg p-4 text-indigo-800 font-semibold text-center hover:bg-indigo-50 transition cursor-pointer">
                        Mexpo Pusat
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-backdrop py-20 px-12 relative overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-start">
            <div class="text-indigo-400 gap-2 flex justify-center items-center">
                <svg class="h-12 w-12" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l2.4 7.4h7.6l-6.1 4.5 2.3 7.1-6.2-4.5-6.2 4.5 2.3-7.1-6.1-4.5h7.6z"></path></svg>
                <p class="text-white text-xl text-left font-oswald font-bold uppercase">visit the website</p>
            </div>
            <h2 class="text-white text-6xl font-oswald font-black uppercase max-w-2xl leading-tight">
                GET TO KNOW MORE ABOUT MANAGEMENT EXPO 2026.
            </h2>
            <div class="w-auto h-auto md:h-38 flex justify-center items-end">
                <button class="mt-8 md:mt-0 border-2 border-white text-white px-10 py-3 rounded-sm font-bold flex items-center gap-4 hover:bg-white hover:text-black transition cursor-pointer">
                    GET MORE <span>→</span>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-backdrop pb-32 px-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-sm shadow-xl flex flex-col justify-between h-125">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-black uppercase text-gray-900 leading-tight">STRATEGIC BUSINESS CASE</h3>
                        <div class="bg-indigo-600 text-white p-2 rounded-full">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-8">these real-world industry challenges with data-driven, innovative solutions. Open to everyone passionate about strategy and problem-solving.</p>
                </div>
                <img alt="Business Illustration" class="w-full object-cover rounded-md" src="{{ asset('assets/images/feature-image-1.png') }}"/>
            </div>
            <!-- Card 2: Purple Focused -->
            <div class="bg-indigo-600 p-8 rounded-sm shadow-xl flex flex-col justify-between h-125 text-white">
                <div class="h-1/2 bg-white/20 rounded-lg overflow-hidden mb-6">
                    <img alt="Art" class="w-full h-full object-cover opacity-80" src="{{ asset('assets/images/feature-image-2.png') }}"/>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-3xl font-black uppercase leading-tight">CREATIVE MARKETING PITCH</h3>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <p class="text-sm opacity-80">Design compelling campaigns for unique product ideas. Open to all creative minds regardless of background or experience.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-sm shadow-xl flex flex-col justify-between h-125">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-black uppercase text-gray-900 leading-tight">ENTREPRENEURIAL IDEA LAB</h3>
                        <div class="bg-indigo-600 text-white p-2 rounded-full">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-8">Pitch your unique startup concepts to industry experts. Open to all innovators ready to disrupt the market.</p>
                </div>
                <div class="h-1/2 bg-white/20 rounded-lg overflow-hidden mb-6">
                    <img alt="Startup Illustration" class="w-full h-full object-cover opacity-80" src="{{ asset('assets/images/feature-image-3.png') }}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-8 md:px-12 bg-white">
        <div class="container mx-auto">
            <div class="gap-6 flex flex-col-reverse md:flex-row justify-between items-start mb-16">
                <p class="text-lg md:text-2xl font-bold text-gray-800 max-w-sm md:mb-0">
                    Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.
                </p>
                <h2 class="text-6xl md:text-7xl font-oswald font-black text-indigo-950 uppercase text-left leading-none">OUR SUB<br/>EVENT 2026.</h2>
            </div>
            <div class="px-8 md:px-0 bg-indigo-950 rounded-xl overflow-hidden gap-2 lg:gap-20 flex flex-col md:flex-row justify-center items-center shadow-2xl">
                <div class="py-10 md:w-1/4">
                    <img alt="Pre Event Poster" class="w-full rounded-sm shadow-md" src="{{ asset('assets/images/poster-sub-event.png') }}"/>
                </div>
                <div class="pb-8 md:pb-0 flex flex-col justify-center text-white">
                    <h3 class="text-5xl font-black uppercase mb-6 leading-tight">PRE EVENT<br/>MANAJEMEN EXPO 14</h3>
                    <p class="text-xl opacity-80 mb-8 max-w-lg">
                        Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.
                    </p>
                    <div class="space-y-2 mb-12">
                        <p class="text-xl font-semibold">24 Juni 2026 &amp; Aula Soepoyo 09.05 — Selesai</p>
                    </div>
                    <button class="bg-white text-indigo-950 font-bold py-4 px-12 rounded-lg text-xl hover:bg-gray-100 transition self-start">Register</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white grid grid-cols-1 md:grid-cols-2">
        <div class="bg-backdrop flex flex-col justify-center p-24">
            <h2 class="text-white text-8xl font-oswald font-black uppercase mb-8">EVENT 2025</h2>
            <p class="text-gray-200 text-2xl">theese are some events that you can choose by your own self</p>
        </div>
        <div class="grid grid-cols-2">
            <img alt="History 1" class="w-full h-90 object-cover" src="{{ asset('assets/images/sub-image-1.png') }}"/>
            <img alt="History 2" class="w-full h-90 object-cover" src="{{ asset('assets/images/sub-image-2.png') }}"/>
            <img alt="History 3" class="w-full h-120 object-cover" src="{{ asset('assets/images/sub-image-3.png') }}"/>
            <img alt="History 4" class="w-full h-120 object-cover" src="{{ asset('assets/images/sub-image-4.png') }}"/>
            <div class="col-span-2">
                <img alt="History 5" class="w-full h-80 object-cover" src="{{ asset('assets/images/sub-image-3.png') }}"/>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white text-center px-6 md:px-12">
        <div class="container mx-auto mb-12">
            <h2 class="text-6xl md:text-8xl font-oswald font-black text-indigo-950 uppercase mb-4 tracking-tight">OUR PARTICIPANTS</h2>
            <p class="text-lg md:text-2xl text-indigo-900 font-medium max-w-4xl mx-auto leading-relaxed">
                We sincerely appreciate your participation in MEXPO. Your ideas, energy, and commitment helped shape an unforgettable experience.
            </p>
        </div>
        <div id="marquee-container" class="overflow-hidden bg-white whitespace-nowrap py-4 cursor-grab select-none">
            <div id="marquee-track" class="flex w-max animate-marquee bg-white">
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/unair.png" alt="Universitas Airlangga" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">Universitas Airlangga</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/its.png" alt="Institut Teknologi Sepuluh Nopember" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">Institut Teknologi Sepuluh Nopember</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/ipb.png" alt="Institut Pertanian Bogor" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">Institut Pertanian Bogor</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/ub.png" alt="Universitas Brawijaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">Universitas Brawijaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/unpam.png" alt="Universitas Pamulang" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">Universitas Pamulang</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/debritto.png" alt="SMA Kolese De Britto" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMA Kolese De Britto</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1gresik.png" alt="SMAN 1 Gresik" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Gresik</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/muh5jakarta.png" alt="SMAS Muhammadiyah 5 Jakarta" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAS Muhammadiyah 5 Jakarta</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1sidoarjo.png" alt="SMAN 1 Sidoarjo" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Sidoarjo</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/mansidoarjo.png" alt="MAN Sidoarjo" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">MAN Sidoarjo</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1banjar.png" alt="SMAN 1 Banjarnegara" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Banjarnegara</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/thursina.png" alt="Thursina IIBS" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">Thursina IIBS</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman4sidoarjo.png" alt="SMAN 4 Sidoarjo" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 4 Sidoarjo</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman17sby.png" alt="SMAN 17 Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 17 Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1gedangan.png" alt="SMAN 1 Gedangan" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Gedangan</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1manyar.png" alt="SMAN 1 Manyar" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Manyar</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman2lamongan.png" alt="SMAN 2 Lamongan" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 2 Lamongan</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1taman.png" alt="SMAN 1 Taman Sidoarjo" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Taman Sidoarjo</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/man2kediri.png" alt="MAN 2 Kota Kediri" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">MAN 2 Kota Kediri</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman2sby.png" alt="SMAN 2 Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 2 Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/khadijahsby.png" alt="SMA Khadijah Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMA Khadijah Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/smkn1lamongan.png" alt="SMKN 1 Lamongan" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMKN 1 Lamongan</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman4sby.png" alt="SMAN 4 Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 4 Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman11sby.png" alt="SMAN 11 Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 11 Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman21sby.png" alt="SMAN 21 Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 21 Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman19sby.png" alt="SMAN 19 Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 19 Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/hangtuah2.png" alt="SMA Hang Tuah 2 Sidoarjo" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMA Hang Tuah 2 Sidoarjo</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/petra4.png" alt="SMAK Petra 4" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAK Petra 4</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman1wonoayu.png" alt="SMAN 1 Wonoayu" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 1 Wonoayu</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/labschoolunesa1.png" alt="SMA Labschool UNESA 1" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMA Labschool UNESA 1</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/amanatul.png" alt="MAU Amanatul Ummah Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">MAU Amanatul Ummah Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/ipiems.png" alt="SMA IPIEMS Surabaya" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMA IPIEMS Surabaya</p>
                </div>
                <div class="inline-block mx-6 text-center">
                    <img src="https://manajemenexpo15.com/images/partisipan/sman6serang.png" alt="SMAN 6 Kota Serang" class="md:w-24 w-20 md:h-24 h-20 object-contain mx-auto pointer-events-none">
                    <p class="text-sm mt-2 px-4 py-2 bg-gray-500 backdrop-blur-sm rounded text-white">SMAN 6 Kota Serang</p>
                </div>
            </div>
        </div>
    </section>
@endsection