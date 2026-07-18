@extends('layout.main')
@section('content')
    <section class="relative min-h-screen bg-imsc flex items-center pt-20 px-8 lg:px-24 overflow-hidden" data-purpose="hero-section" id="hero">
        <!-- Background elements -->
        <div class="container mx-auto gap-4 flex flex-col-reverse lg:flex-row justify-center lg:justify-between items-center relative z-10">
            <div data-purpose="hero-content">
                <h1 class="font-oswald text-white text-5xl text-center lg:text-left lg:text-8xl font-bold leading-tight uppercase tracking-tighter">
                    WELCOME TO<br/>
                    IMSC 2026
                </h1>
                <p class="text-base lg:text-2xl text-center lg:text-left mt-2 lg:mt-4 tracking-wider text-gray-100">16th Management Expo</p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 mt-4 lg:mt-12">
                    <button class="px-12 py-3 bg-white text-imsc-primary font-semibold rounded-md hover:bg-gray-200 transition cursor-pointer">More about us?</button>
                    <button class="px-12 py-3 border border-white text-white font-semibold rounded-md hover:bg-white/10 transition cursor-pointer">More about us?</button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative flex justify-center md:justify-end" data-purpose="hero-images">
                <div class="relative w-max h-full overflow-hidden">
                    <img alt="Main Temple" class="w-auto h-50 md:h-120 object-cover" src="{{ asset('assets/images/gambar-imsc.png') }}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-auto bg-white text-black" data-purpose="intro-section">
        <div class="w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-0 items-start">
            <div class="w-full lg:w-150 grid grid-cols-1" data-purpose="intro-images">
                <img alt="Street View" class="w-full h-120" src="{{ asset('assets/images/sub-imsc-1.png') }}"/>
                <div class="w-full grid grid-cols-2">
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-imsc-2.png') }}"/>
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-imsc-3.png') }}"/>
                </div>
            </div>

            <div class="w-full lg:w-150 h-full py-8 px-8 lg:px-0 flex flex-col justify-center items-start" data-purpose="intro-text">
                <h2 class="font-oswald text-5xl lg:text-6xl font-bold uppercase leading-none mb-8 text-imsc-primary">
                    GET TO KNOW IMSC<br/>2026 COMPETITION
                </h2>
                <div class="space-y-6 text-gray-800 leading-relaxed text-base">
                    <p>
                        International Management Startup Challenge (IMSC) 2026 adalah kompetisi startup dan business plan internasional bagi mahasiswa (D3, D4, dan S1) dari Universitas Airlangga untuk menciptakan solusi inovatif bagi tantangan nyata. Melalui rangkaian kegiatan mulai dari webinar hingga Demo Day, kompetisi ini menantang peserta untuk menghasilkan ide berdampak dan berkelanjutan, sekaligus mempersiapkan generasi inovator masa depan.
                    </p>
                </div>
                <div class="w-full lg:w-1/2 mt-12 space-y-4 gap-8 flex flex-col">
                    <div class="w-full gap-2 flex flex-col">
                        <h3 class="font-oswald text-3xl font-bold text-imsc-primary uppercase">Theme</h3>
                        <p class="italic text-gray-700 text-base lg:text-xl font-bold">“Impact-Driven Innovation: Real-World Impact at Scale”</p>
                    </div>
                    <div class="w-full gap-2 flex flex-col">
                        <h3 class="font-oswald text-3xl font-bold text-imsc-primary uppercase">Tagline</h3>
                        <p class="text-gray-700 text-base lg:text-xl font-bold">Innovate with Purpose. Create Impact. Shape the Future.</p>
                    </div>
                    <div class="w-full py-4 border-2 border-imsc-primary rounded-lg bg-imsc-primary text-white text-center text-base font-medium">
                        <a href="#" download="#">Download Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-backdrop py-10 lg:py-20 px-8 lg:px-12 relative overflow-hidden gap-12 flex flex-col">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-start">
            <div class="text-indigo-400 gap-2 flex justify-center items-center">
                <svg class="h-12 w-12 text-imsc-primary" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l2.4 7.4h7.6l-6.1 4.5 2.3 7.1-6.2-4.5-6.2 4.5 2.3-7.1-6.1-4.5h7.6z"></path></svg>
                <p class="text-white text-xl text-left font-oswald font-bold uppercase">visit the website</p>
            </div>
            <h2 class="text-white text-5xl lg:text-6xl font-oswald font-black uppercase max-w-2xl leading-tight">
                GET TO KNOW IMSC 2026 COMPETITION TIMELINE.
            </h2>
            <div class="w-full lg:w-auto h-auto md:h-38 flex justify-center items-end">
                <button class="w-full lg:w-max mt-8 md:mt-0 border-2 border-white text-white px-10 py-3 rounded-sm font-bold flex justify-center items-center gap-4 hover:bg-white hover:text-black transition cursor-pointer">
                    GET MORE <span>→</span>
                </button>
            </div>
        </div>

        <!-- Timeline Flowchart -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 gap-x-8 px-4" data-purpose="timeline-grid">
            <!-- Column 1 -->
            <div class="space-y-6">
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg relative gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">1 - 14 July 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pendaftaran: Early Bird</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">18 July 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pre Event 1</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">15 July - 5 Agustus 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Registrasi Batch 1</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">13 Agustus - 3 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Registrasi Batch 2</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">8 - 14 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">BMC Assessment</p>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="space-y-6">
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">13 - 23 October 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Business Proposal Assessment</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">21 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Business Proposal Collection</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">19 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Participant Webinar</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">16 - 18 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Registrasi Proposal Stage</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">15 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Semi-Final Announcement</p>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="space-y-6">
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">24 October 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Final Announcement</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">27 - 30 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Registrasi Final</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">2 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Final Technical Meering</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">7 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider uppercase">Mentoring (Online)</p>
                </div>
                <div class="bg-gradient-pink py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">21 - 22 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider uppercase">Final & Awarding</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white text-black py-10 lg:py-24 px-8 lg:px-24" data-purpose="sub-event">
        <div class="container mx-auto flex flex-col items-center">
            <div class="w-full gap-3 flex flex-col-reverse lg:flex-row justify-between mb-8 lg:mb-16">
                <div class="w-full lg:w-1/3">
                    <p class="text-lg lg:text-2xl text-center lg:text-left font-medium leading-tight">Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.</p>
                </div>
                <div class="text-right">
                    <h2 class="font-oswald text-6xl lg:text-7xl text-center lg:text-left font-bold uppercase text-imsc-primary leading-none">OUR SUB <br>EVENT 2026.</h2>
                </div>
            </div>
            <div class="w-full bg-imsc-primary rounded-xl p-6 lg:p-12 text-white flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <img alt="IMSC Poster" class="w-full h-auto border-4 border-white shadow-2xl" src="{{ asset('assets/images/poster-imsc.png') }}"/>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <h3 class="font-oswald text-4xl lg:text-6xl font-bold uppercase leading-none">ABOUT IMSC COMPETITION 2026</h3>
                    <p class="text-base lg:text-xl">Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.</p>
                    <p class="text-base lg:text-xl font-bold">24 Juni 2026 &amp; Aula Seopoyo 09:05 - Selesai</p>
                    <a class="inline-block w-full text-center py-4 bg-white text-imsc-primary font-bold text-2xl rounded-md hover:bg-gray-100 transition" href="#">Register</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brandDark py-10 lg:py-24 px-8 lg:px-14" data-purpose="rules-section">
        <div class="container mx-auto flex flex-col">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-6">
                <!-- Syarat & Ketentuan -->
                <div data-purpose="terms-and-conditions">
                    <div class="bg-white text-imsc-primary px-6 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">TERMS &amp; CONDITIONS</div>
                    <div class="h-max lg:h-full border-4 border-white bg-gradient-pink p-8 text-sm">
                        <ol class="list-decimal text-base pl-5 space-y-3 text-gray-200 tracking-wide font-medium">
                            <li>International Management Startup Challenge (IMSC) 2026 diselenggarakan secara online pada tahap Seleksi Internasional dan Semifinal, serta offline pada tahap Grand Final/Demo Day di Ciputra World Surabaya.</li>
                            <li>Kompetisi terbuka bagi mahasiswa aktif jenjang D3, D4, dan S1 dari seluruh negara.</li>
                            <li>Setiap tim wajib terdiri dari 3 (tiga) anggota, dengan satu anggota ditunjuk sebagai ketua tim.</li>
                            <li>Peserta hanya diperbolehkan terdaftar dalam satu tim selama kompetisi berlangsung.</li>
                            <li>Anggota tim dapat berasal dari program studi yang berbeda.</li>
                            <li>Nama tim dibebaskan, namun tidak diperkenankan mengandung unsur SARA, pornografi, ujaran kebencian, maupun kata-kata yang tidak pantas.</li>
                            <li>Ide startup yang diajukan harus merupakan karya orisinal dan tidak melanggar hak cipta atau kekayaan intelektual pihak lain.</li>
                            <li>Setiap tim hanya diperbolehkan mengirimkan satu ide bisnis startup.</li>
                            <li>Ide yang diajukan harus sesuai dengan tema utama “Impact-Driven Innovation: Real-World Impact at Scale” dan salah satu subtema yang telah ditentukan.</li>
                            <li>Seluruh dokumen yang dikumpulkan harus mengikuti format dan ketentuan yang ditetapkan panitia.</li>
                            <li>Keputusan dewan juri bersifat final dan tidak dapat diganggu gugat.</li>
                            <li>Panitia berhak mendiskualifikasi peserta yang terbukti melakukan plagiarisme, manipulasi data, atau pelanggaran terhadap ketentuan kompetisi.</li>
                        </ol>
                    </div>
                </div>
                <!-- Prosedur Pendaftaran -->
                <div data-purpose="registration-procedure">
                    <div class="bg-white text-imsc-primary px-6 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">FORM PENDAFTARAN IMSC</div>
                    <div class="h-max lg:h-full border-4 border-white bg-gradient-pink p-8 text-xs lg:text-sm">
                        <ol class="list-decimal text-lg pl-5 space-y-2 text-gray-100 tracking-wide">
                            <li class="capitalize font-bold">
                                Informasi Tim
                                <ul>
                                    <li class="list-inside list-disc capitalize font-medium">nama tim</li>
                                </ul>
                            </li>
                            <li class="capitalize font-bold">
                                data ketua Tim
                                <ul>
                                    <li class="list-inside list-disc capitalize font-medium">nama lengkap</li>
                                    <li class="list-inside list-disc capitalize font-medium">alamat email</li>
                                    <li class="list-inside list-disc capitalize font-medium">nomor WhatsApp</li>
                                    <li class="list-inside list-disc capitalize font-medium">Upload kartu tanda mahasiswa (KTM)</li>
                                </ul>
                            </li>
                            <li class="capitalize font-bold">
                                darimana anda mengetahui Informasi IMSC?
                                <ul>
                                    <li class="list-inside list-disc capitalize font-medium">Instagram</li>
                                    <li class="list-inside list-disc capitalize font-medium">tiktok</li>
                                    <li class="list-inside list-disc capitalize font-medium">teman</li>
                                    <li class="list-inside list-disc capitalize font-medium">keluarga</li>
                                    <li class="list-inside list-disc capitalize font-medium">lainnya (sebutkan)</li>
                                </ul>
                            </li>
                            <li class="capitalize font-bold">
                                data anggota Tim 1
                                <ul>
                                    <li class="list-inside list-disc capitalize font-medium">nama lengkap</li>
                                    <li class="list-inside list-disc capitalize font-medium">alamat email</li>
                                    <li class="list-inside list-disc capitalize font-medium">nomor WhatsApp</li>
                                    <li class="list-inside list-disc capitalize font-medium">Upload kartu tanda mahasiswa (KTM)</li>
                                </ul>
                            </li>
                            <li class="capitalize font-bold">
                                data anggota Tim 2
                                <ul>
                                    <li class="list-inside list-disc capitalize font-medium">nama lengkap</li>
                                    <li class="list-inside list-disc capitalize font-medium">alamat email</li>
                                    <li class="list-inside list-disc capitalize font-medium">nomor WhatsApp</li>
                                    <li class="list-inside list-disc capitalize font-medium">Upload kartu tanda mahasiswa (KTM)</li>
                                </ul>
                            </li>
                            <li class="capitalize font-bold">
                                bukti Upload twibbon
                            </li>
                            <li class="capitalize font-bold">
                                upload bukti pembayaran biaya pendaftaran
                            </li>
                            <li class="capitalize font-bold">
                                upload business model canvas (BMC)
                            </li>
                            <li class="capitalize font-bold">
                                Upload surat peryataan surat orisinalitas
                            </li>
                        </ol>
                        <p class="text-lg pl-5 my-6 text-gray-100 tracking-wide">
                            Pernyataan peserta <br>
                            Saya menyatakan bahwa seluruh informasi yang diberikan adalah benar dan dapat<br>
                            dipertanggungjawabkan.<br>
                            Saya telah membaca, memahami, dan menyetujui seluruh Terms & Conditions<br>
                            International Management Startup Challenge (IMSC) 2026<br>
                            Saya menyatakan bahwa ide bisnis yang diajukan merupakan karya orisinal tim dan<br>
                            tidak melanggar hak kekayaan intelektual pihak lain.<br>
                        </p>
                        <ul class="text-lg pl-5 text-gray-100 tracking-wide">
                            <li class="capitalize font-bold">
                                contact person
                                <ul>
                                    <li class="list-inside list-disc capitalize font-medium">Ayu: <span class="font-bold"><a href="https://wa.me/6287774107664">087774107664</a></span></li>
                                    <li class="list-inside list-disc capitalize font-medium">Azkiya: <span class="font-bold"><a href="https://wa.me/6287851221073">087851221073</a></span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Syarat Administrasi -->
            <div class="mt-10 lg:mt-26" data-purpose="admin-requirements">
                <div class="bg-white text-imsc-primary px-8 py-2 lg:py-4 font-oswald font-bold text-2xl lg:text-4xl rounded-t-lg mx-auto table">FORM PENDAFTARAN IMSC</div>
                <div class="border-4 border-white bg-gradient-pink p-8 lg:p-12 text-sm">
                    <ol class="list-decimal text-base pl-5 space-y-2 text-gray-100 tracking-wide">
                        <li class="capitalize font-bold">
                            Peserta dianggap resmi terdaftar setelah melengkapi seluruh persyaratan administrasi dan melakukan pembayaran biaya registrasi sesuai batch yang dipilih.
                        </li>
                        <li class="capitalize font-bold">
                            Setiap peserta wajib mengunggah Kartu Tanda Mahasiswa (KTM) atau dokumen resmi lain yang membuktikan status sebagai mahasiswa aktif.
                        </li>
                        <li class="capitalize font-bold">
                            Pendaftaran dilakukan secara online melalui website resmi IMSC 2026.
                        </li>
                        <li class="capitalize font-bold">
                            Pada tahap Seleksi Internasional, peserta wajib mengumpulkan dokumen ide bisnis yang memuat deskripsi usaha dan Business Model Canvas (BMC) dalam format PDF.
                        </li>
                        <li class="capitalize font-bold">
                            Tim yang lolos ke tahap Semifinal wajib melakukan registrasi ulang dan mengumpulkan proposal startup sesuai ketentuan panitia.
                        </li>
                        <li class="capitalize font-bold">
                            Tim yang lolos ke Grand Final wajib mengikuti seluruh rangkaian Demo Day yang diselenggarakan secara offline di Ciputra World Surabaya.
                        </li>
                        <li class="capitalize font-bold">
                            Segala bentuk ketidakhadiran peserta dalam tahapan kompetisi menjadi tanggung jawab masing-masing tim.
                        </li>
                        <li class="capitalize font-bold">
                            Biaya registrasi yang telah dibayarkan tidak dapat dikembalikan (non-refundable) dalam kondisi apa pun.
                        </li>
                        <li class="capitalize font-bold">
                            Pergantian anggota tim setelah pendaftaran ditutup hanya dapat dilakukan atas persetujuan panitia.
                        </li>
                        <li class="capitalize font-bold">
                            Peserta wajib mengikuti informasi dan pengumuman resmi yang disampaikan melalui website dan media sosial IMSC 2026.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-screen bg-white gap-8 lg:gap-16 flex flex-col justify-center items-center">
        <h1 class="text-imsc-primary text-center text-4xl lg:text-6xl font-black font-oswald uppercase">more information</h1>
        <div class="w-full px-6 lg:px-30 gap-6 lg:gap-12 flex flex-col lg:flex-row justify-center items-start">
            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-pink text-white text-center text-lg lg:text-2xl font-medium uppercase">regitration:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-pink flex justify-start">
                    <ul class="w-full text-white text-sm lg:text-lg list-disc font-medium">
                        <li>Link:</li>
                        <li><a href="https://bit.ly/RegistrationUASTEC2025" class="underline">https://bit.ly/RegistrationUASTEC2025</a> (menyusul)</li>
                        <li>QR: (menyusul)</li>
                    </ul>
                </div>
            </div>

            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-pink text-white text-center text-lg lg:text-2xl font-medium uppercase">booklet:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-pink gap-4 flex flex-col justify-center items-center">
                    <p class="w-full text-white text-justify text-sm lg:text-lg font-medium">
                        Untuk informasi lebih lengkap mengenai Universitas Airlangga Stock Exchange Competition 2025, silakan unduh booklet kami:
                    </p>

                    <a href="#" download="#" class="py-3 px-18 border-2 border-white rounded-lg hover:scale-105 text-white text-center text-sm lg:text-base font-medium transition-all duration-300">
                        Download Book
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection