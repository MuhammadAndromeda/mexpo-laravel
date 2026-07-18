@extends('layout.main')
@section('content')
    <section class="relative min-h-screen bg-uastec flex items-center pt-20 px-8 lg:px-24 overflow-hidden" data-purpose="hero-section" id="hero">
        <!-- Background elements -->
        <div class="container mx-auto gap-4 flex flex-col-reverse lg:flex-row justify-center lg:justify-between items-center relative z-10">
            <div data-purpose="hero-content">
                <h1 class="font-oswald text-white text-5xl text-center lg:text-left lg:text-8xl font-bold leading-tight uppercase tracking-tighter">
                    WELCOME TO<br/>
                    UASTEC 2026
                </h1>
                <p class="text-base lg:text-2xl text-center lg:text-left mt-2 lg:mt-4 tracking-wider text-gray-100">16th Management Expo</p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 mt-4 lg:mt-12">
                    <button class="px-12 py-3 bg-white text-uastec-primary font-semibold rounded-md hover:bg-gray-200 transition cursor-pointer">More about us?</button>
                    <button class="px-12 py-3 border border-white text-white font-semibold rounded-md hover:bg-white/10 transition cursor-pointer">More about us?</button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative flex justify-center md:justify-end" data-purpose="hero-images">
                <div class="relative w-max h-full overflow-hidden">
                    <img alt="Main Temple" class="w-auto h-50 md:h-120 object-cover" src="{{ asset('assets/images/gambar-uastec.png') }}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-auto bg-white text-black" data-purpose="intro-section">
        <div class="w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-0 items-start">
            <div class="w-full lg:w-150 grid grid-cols-1" data-purpose="intro-images">
                <img alt="Street View" class="w-full h-120" src="{{ asset('assets/images/sub-image-5.png') }}"/>
                <div class="w-full grid grid-cols-2">
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-image-1.png') }}"/>
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-image-6.png') }}"/>
                </div>
            </div>

            <div class="w-full lg:w-150 h-full py-8 px-8 lg:px-0 flex flex-col justify-center items-start" data-purpose="intro-text">
                <h2 class="font-oswald text-5xl lg:text-6xl font-bold uppercase leading-none mb-8 text-brandRed">
                    GET TO KNOW UASTEC<br/>2026 COMPETITION
                </h2>
                <div class="space-y-6 text-gray-800 leading-relaxed text-sm lg:text-base">
                    <p>
                        Universitas Airlangga Stock Exchange Competition (UASTEC) merupakan sub-event Management Expo yang diselenggarakan oleh HIMA S1 Manajemen Fakultas Ekonomi dan Bisnis Universitas Airlangga. Pada tahun 2026, UASTEC menghadirkan kategori STOCKSTRATEGY, kompetisi bagi pelajar SMA/SMK/sederajat dari seluruh Indonesia untuk mengasah kemampuan analisis pasar modal, saham, dan investasi.
                    </p>
                    <p>
                        Melalui kompetisi ini, peserta diharapkan mampu meningkatkan literasi pasar modal, berpikir analogis, serta menyusun keputusan investasi yang bijak dan strategis dari pasar modal Indonesia yang tengah berada di tengah volatilitas ekonomi global.
                    </p>
                </div>
                <div class="mt-12 space-y-4">
                    <div>
                        <h3 class="font-oswald text-2xl font-bold text-brandRed uppercase">Theme</h3>
                        <p class="italic text-gray-700">"Building Smart Investment Decisions for Young Investors in a Dynamic Market Era"</p>
                    </div>
                    <div>
                        <h3 class="font-oswald text-2xl font-bold text-brandRed uppercase">Tagline</h3>
                        <p class="text-gray-700 font-medium">Learn the Market, Lead the Future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-backdrop py-10 lg:py-20 px-8 lg:px-12 relative overflow-hidden gap-12 flex flex-col">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-start">
            <div class="text-indigo-400 gap-2 flex justify-center items-center">
                <svg class="h-12 w-12 text-brandRed" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l2.4 7.4h7.6l-6.1 4.5 2.3 7.1-6.2-4.5-6.2 4.5 2.3-7.1-6.1-4.5h7.6z"></path></svg>
                <p class="text-white text-xl text-left font-oswald font-bold uppercase">visit the website</p>
            </div>
            <h2 class="text-white text-5xl lg:text-6xl font-oswald font-black uppercase max-w-2xl leading-tight">
                GET TO KNOW UASTEC 2026 COMPETITION TIMELINE.
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
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg relative gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">26 Juli - 7 Agustus 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pendaftaran: Early Bird</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">10 Agustus - 11 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pendaftaran: Reguler</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">26 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider italic">Equity Research Paper Tutorial Class</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">30 September 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">TM Babak Eliminasi</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">3 Oktober 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Babak Eliminasi</p>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="space-y-6">
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">7 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Simulasi Kelas</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">5 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">TM Simulasi Kelas (Semifinalist Only)</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">17 - 31 Oktober 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pengumpulan Video dan Paper Babak Semifinal</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">11 Oktober 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">TM Babak Semifinal</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">7 Oktober 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pengumuman Babak Eliminasi</p>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="space-y-6">
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">9 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pengumuman Babak Semifinal</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">14 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">TM Final</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">21 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Final Day</p>
                </div>
                <div class="bg-gradient-red py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">22 November 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider uppercase">Awarding Day</p>
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
                    <h2 class="font-oswald text-6xl lg:text-7xl text-center lg:text-left font-bold uppercase text-brandRed leading-none">OUR SUB <br>EVENT 2026.</h2>
                </div>
            </div>
            <div class="w-full bg-brandRed rounded-xl p-6 lg:p-12 text-white flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <img alt="UASTEC Poster" class="w-full h-auto border-4 border-white shadow-2xl" src="{{ asset('assets/images/poster-uastec.png') }}"/>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <h3 class="font-oswald text-4xl lg:text-6xl font-bold uppercase leading-none">ABOUT UASTEC COMPETITION 2026</h3>
                    <p class="text-base lg:text-xl">Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.</p>
                    <p class="text-base lg:text-xl font-bold">24 Juni 2026 &amp; Aula Seopoyo 09:05 - Selesai</p>
                    <a class="inline-block w-full text-center py-4 bg-white text-brandRed font-bold text-2xl rounded-md hover:bg-gray-100 transition" href="#">Register</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brandDark py-10 lg:py-24 px-8 lg:px-14" data-purpose="rules-section">
        <div class="container mx-auto flex flex-col">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-6">
                <!-- Syarat & Ketentuan -->
                <div data-purpose="terms-and-conditions">
                    <div class="bg-white text-brandRed px-6 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">SYARAT &amp; KETENTUAN</div>
                    <div class="h-max lg:h-full red-border-box bg-brandRed p-8 text-sm">
                        <h4 class="text-xl text-gray-100 font-bold mb-4">Peserta merupakan siswa SMA/SMK sederajat.</h4>
                        <ol class="list-decimal text-base pl-5 space-y-3 text-gray-200 tracking-wide font-medium">
                            <li>Satu tim terdiri dari tiga siswa dari sekolah yang sama dan tidak ada batasan perwakilan tim dari sekolah yang sama.</li>
                            <li>Peserta melakukan pendaftaran dengan mengisi dan mengirimkan formulir pendaftaran yang telah disediakan oleh panitia.</li>
                            <li>Apabila terdapat anggota tim yang berhalangan mengikuti kompetisi, maka tim tetap dapat melanjutkan perlombaan dengan anggota yang tersisa. Segala konsekuensi terhadap penilaian ditentukan oleh dewan juri.</li>
                            <li>Anggota tim tidak dapat digantikan apabila berhalangan hadir.</li>
                            <li>Peserta wajib mengikuti seluruh rangkaian acara dan mematuhi seluruh ketentuan yang berlaku.</li>
                            <li>Apabila ditemukan kecurangan oleh panitia selama kompetisi berlangsung, maka peserta akan dinyatakan diskualifikasi.</li>
                            <li>Keputusan juri bersifat final dan tidak dapat diganggu gugat</li>
                        </ol>
                    </div>
                </div>
                <!-- Prosedur Pendaftaran -->
                <div data-purpose="registration-procedure">
                    <div class="bg-white text-brandRed px-6 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">PROSEDUR PENDAFTARAN</div>
                    <div class="h-max lg:h-full red-border-box bg-brandRed p-8 text-xs lg:text-sm">
                        <ol class="list-decimal text-base pl-5 space-y-2 text-gray-200 tracking-wide font-medium">
                            <li>Pendaftaran akan dibuka pada 26 Juli-7 Agustus 2026 untuk Early Bird, dan 10 Agustus-11 September 2026 untuk Reguler.</li>
                            <li>Pendaftaran dilakukan secara online melalui website <a href="https://manajemenexpo.com/" class="underline">"manajemenexpo.com"</a></li>
                            <li>Biaya pendaftaran batch early bird 90k (dari tanggal 26 juli-7 Agustus 2026) dan batch reguler 110k (dari tanggal 10 Agustus-11 September 2026).</li>
                            <li>Peserta terdiri dari maksimal 3 orang dengan salah satu anggota (ketua tim) saja yang melakukan pengisian formulir pendaftaran dengan benar dan mengunggah seluruh dokumen yang dipersyaratkan.</li>
                            <li>Periode pendaftaran dimulai pada 26 Juli 2026 pukul 10.00 WIB dan berakhir pada 11 September 2026 pukul 23.59 WIB.</li>
                            <li>Setiap peserta wajib follow akun Instagram UASTEC 2026 (@mexpo.uastec2026)</li>
                            <li>Setiap peserta wajib membagikan poster UASTEC 2026 di Instagram Story mereka, menandai akun Instagram UASTEC 2026 (@mexpo.uastec2026), serta minimal 3 akun Instagram teman-temannya.</li>
                            <li>Pembayaran cabang UASTEC hanya di rekening : BRI - 058001048651506 a.n Najmi Qushoyyi Zufar</li>
                            <li>Tim yang telah submit pendaftaran harap mengunjungi website 1x24 jam untuk melihat status pendaftaran, jika pendaftaran sudah di approve maka peserta akan mendapatkan link grup WA peserta pada detail pendaftaran</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Syarat Administrasi -->
            <div class="mt-10 lg:mt-26" data-purpose="admin-requirements">
                <div class="bg-white text-brandRed px-8 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">SYARAT ADMINISTRASI :</div>
                <div class="red-border-box bg-brandRed p-8 lg:p-12 text-sm">
                    <div class="text-gray-200 grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div class="w-full h-full flex flex-col justify-center items-start">
                            <h4 class="font-oswald text-2xl font-bold mb-6">Daftar Akun :</h4>
                            <ul class="list-disc pl-5 space-y-2 text-xl font-bold">
                                <li>Nama tim</li>
                                <li>Email Ketua Tim</li>
                                <li>Password</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-oswald text-2xl font-bold mb-6">Registrasi:</h4>
                            <ul class="list-disc pl-5 text-base">
                                <li>Nama tim</li>
                                <li>Nama peserta 1 (ketua)</li>
                                <li>Nama peserta 2</li>
                                <li>Nama peserta 3</li>
                                <li>Kartu pelajar peserta (format PDF: "Nama Tim_Kartu Pelajar/Surat Keterangan Aktif Siswa")</li>
                                <li>Email ketua tim</li>
                                <li>Asal sekolah</li>
                                <li>Nomor WhatsApp aktif ketua tim</li>
                                <li>Lampiran bukti pembayaran (format PDF: "Nama Tim_Bukti Pembayaran")</li>
                            </ul>
                            <div class="mt-8 space-y-4 text-sm italic">
                                <p>• Wajib mengikuti akun Instagram UASTEC 2026 (@mexpo.uastec2026) dan melampirkan bukti follow (format PDF: "Nama Tim_Bukti Follow Instagram UASTEC")</p>
                                <p>• Setiap peserta wajib membagikan poster UASTEC 2026 di Instagram Story, tag akun Instagram UASTEC 2026 (@mexpo.uastec2026), serta minimal 3 akun Instagram teman, dengan melampirkan bukti share (format PDF: "Nama Tim_Bukti Poster UASTEC")</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-screen bg-white gap-8 lg:gap-16 flex flex-col justify-center items-center">
        <h1 class="text-brandRed text-center text-4xl lg:text-6xl font-black font-oswald uppercase">more information</h1>
        <div class="w-full px-6 lg:px-30 gap-6 lg:gap-12 flex flex-col lg:flex-row justify-center items-start">
            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-red text-white text-center text-lg lg:text-2xl font-medium uppercase">regitration:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-red flex justify-start">
                    <ul class="w-full text-white text-sm lg:text-lg list-disc font-medium">
                        <li>Link:</li>
                        <li><a href="https://bit.ly/RegistrationUASTEC2025" class="underline">https://bit.ly/RegistrationUASTEC2025</a> (menyusul)</li>
                        <li>QR: (menyusul)</li>
                    </ul>
                </div>
            </div>

            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-red text-white text-center text-lg lg:text-2xl font-medium uppercase">booklet:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-red gap-4 flex flex-col justify-center items-center">
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