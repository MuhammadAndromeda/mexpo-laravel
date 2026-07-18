@extends('layout.main')
@section('content')
    <section class="relative min-h-screen bg-mo flex items-center pt-20 px-8 lg:px-24 overflow-hidden" data-purpose="hero-section" id="hero">
        <!-- Background elements -->
        <div class="container mx-auto gap-4 flex flex-col-reverse lg:flex-row justify-center lg:justify-between items-center relative z-10">
            <div data-purpose="hero-content">
                <h1 class="font-oswald text-white text-5xl text-center lg:text-left lg:text-8xl font-bold leading-tight uppercase tracking-tighter">
                    WELCOME TO<br/>
                    MO 2026
                </h1>
                <p class="text-base lg:text-2xl text-center lg:text-left mt-2 lg:mt-4 tracking-wider text-gray-100">16th Management Expo</p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 mt-4 lg:mt-12">
                    <button class="px-12 py-3 bg-white text-mo-primary font-semibold rounded-md hover:bg-gray-200 transition cursor-pointer">More about us?</button>
                    <button class="px-12 py-3 border border-white text-white font-semibold rounded-md hover:bg-white/10 transition cursor-pointer">More about us?</button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative flex justify-center md:justify-end" data-purpose="hero-images">
                <div class="relative w-max h-full overflow-hidden">
                    <img alt="Main Temple" class="w-auto h-50 md:h-120 object-cover" src="{{ asset('assets/images/gambar-mo.png') }}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-auto bg-white text-black" data-purpose="intro-section">
        <div class="w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-0 items-start">
            <div class="w-full lg:w-150 grid grid-cols-1" data-purpose="intro-images">
                <img alt="Street View" class="w-full h-120" src="{{ asset('assets/images/sub-mo-1.png') }}"/>
                <div class="w-full grid grid-cols-2">
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-mo-2.png') }}"/>
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-mo-3.png') }}"/>
                </div>
            </div>

            <div class="w-full lg:w-150 h-full py-8 px-8 lg:px-0 flex flex-col justify-center items-start" data-purpose="intro-text">
                <h2 class="font-oswald text-5xl lg:text-6xl font-bold uppercase leading-none mb-8 text-mo-primary">
                    GET TO KNOW MO<br/>2026 COMPETITION
                </h2>
                <div class="space-y-6 text-grey-800 leading-relaxed text-lg font-medium">
                    <p>
                        Management Olympiad merupakan salah satu sub acara dari rangkaian Management Expo yang diselenggarakan oleh Himpunan Mahasiswa S1 Manajemen Universitas Airlangga. Management Olympiad merupakan olimpiade tingkat nasional yang menjadi wadah bagi siswa/i SMA/SMK sederajat untuk dapat mengembangkan pemahaman dan meningkatkan kemampuan problem solving dalam bidang ilmu manajemen.
                    </p>
                </div>
                <div class="w-full lg:w-1/2 mt-12 space-y-4 gap-8 flex flex-col">
                    <div class="w-full gap-2 flex flex-col">
                        <h3 class="font-oswald text-3xl font-bold text-mo-primary uppercase">Theme</h3>
                        <p class="italic text-gray-700 text-base lg:text-xl font-bold">“Strategic Business Leadership and Sustainability”</p>
                    </div>
                    <div class="w-full gap-2 flex flex-col">
                        <h3 class="font-oswald text-3xl font-bold text-mo-primary uppercase">Tagline</h3>
                        <p class="text-gray-700 text-base lg:text-xl font-bold">Innovate with Purpose. Create Impact. Shape the Future.</p>
                    </div>
                    <div class="w-full py-4 border-2 border-mo-primary rounded-lg bg-mo-primary text-white text-center text-base font-medium">
                        <a href="#" download="#">Download Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-backdrop py-10 lg:py-20 px-8 lg:px-12 relative overflow-hidden gap-12 flex flex-col">
        <header class="container mx-auto flex flex-col md:flex-row justify-between items-start">
            <div class="text-indigo-400 gap-2 flex justify-center items-center">
                <svg class="h-12 w-12 text-mo-primary" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l2.4 7.4h7.6l-6.1 4.5 2.3 7.1-6.2-4.5-6.2 4.5 2.3-7.1-6.1-4.5h7.6z"></path></svg>
                <p class="text-white text-xl text-left font-oswald font-bold uppercase">visit the website</p>
            </div>
            <h2 class="text-white text-5xl lg:text-6xl font-oswald font-black uppercase max-w-2xl leading-tight">
                GET TO KNOW MO 2026 COMPETITION TIMELINE.
            </h2>
            <div class="w-full lg:w-auto h-auto md:h-38 flex justify-center items-end">
                <button class="w-full lg:w-max mt-8 md:mt-0 border-2 border-white text-white px-10 py-3 rounded-sm font-bold flex justify-center items-center gap-4 hover:bg-white hover:text-black transition cursor-pointer">
                    GET MORE <span>→</span>
                </button>
            </div>
        </header>

        <!-- BEGIN: TimelineTable -->
        <div class="w-full overflow-x-hidden">
            <table class="w-full h-auto border-2 border-white shadow-lg shadow-black/60">
                <thead class="w-full h-auto border-2 border-gray-100">
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <th class="w-max py-5 h-auto border-2 border-white bg-gradient-orange uppercase tracking-wide text-center text-3xl text-white font-oswald font-bold">keterangan</th>
                        <th class="w-max py-5 h-auto border-2 border-white bg-gradient-orange uppercase tracking-wide text-center text-3xl text-white font-oswald font-bold">keterangan</th>
                        <th class="w-max py-5 h-auto border-2 border-white bg-gradient-orange uppercase tracking-wide text-center text-3xl text-white font-oswald font-bold">keterangan</th>
                    </tr>
                </thead>
                <tbody class="w-full h-auto border-2 border-gray-100">
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td rowspan="3" class="w-max py-4 h-auto border-2 border-white bg-gradient-orange capitalize text-center text-lg text-white font-bold">Registration</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Batch 1 (Early Bird)</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">13 Juli - 19 Juli 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Batch 2</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">22 Juli - 31 Agustus 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Batch 2</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">22 Juli - 31 Agustus 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white bg-gradient-orange capitalize text-center text-xl text-white font-bold">Pre Event</td>
                        <td class="w-max py-4 h-auto border-2 border-white bg-gradient-orange capitalize text-center text-xl text-white font-bold">Webinar</td>
                        <td class="w-max py-4 h-auto border-2 border-white bg-gradient-orange capitalize text-center text-xl text-white font-bold">5 September 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td rowspan="4" class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">main event</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Preliminary Round</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">11 Oktober 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Infografis</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">19 - 24 Oktober 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Semifinal</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">21 November 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Final</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">22 November 2026</td>
                    </tr>
                    <tr class="w-full h-auto border-2 border-gray-100">
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Awarding</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">Awarding Mexpo</td>
                        <td class="w-max py-4 h-auto border-2 border-white capitalize text-center text-lg text-white font-medium">22 November 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: TimelineTable -->
    </section>

    <section class="bg-white text-black py-10 lg:py-24 px-8 lg:px-24" data-purpose="sub-event">
        <div class="container mx-auto flex flex-col items-center">
            <div class="w-full gap-3 flex flex-col-reverse lg:flex-row justify-between mb-8 lg:mb-16">
                <div class="w-full lg:w-1/3">
                    <p class="text-lg lg:text-2xl text-center lg:text-left font-medium leading-tight">Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.</p>
                </div>
                <div class="text-right">
                    <h2 class="font-oswald text-6xl lg:text-7xl text-center lg:text-left font-bold uppercase text-mo-primary leading-none">OUR SUB <br>EVENT 2026.</h2>
                </div>
            </div>
            <div class="w-full bg-mo-primary rounded-xl p-6 lg:p-12 text-white flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <img alt="IMSC Poster" class="w-full h-auto border-4 border-white shadow-2xl" src="{{ asset('assets/images/poster-mo.png') }}"/>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <h3 class="font-oswald text-4xl lg:text-6xl font-bold uppercase leading-none">ABOUT MO COMPETITION 2026</h3>
                    <p class="text-base lg:text-xl">Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.</p>
                    <p class="text-base lg:text-xl font-bold">24 Juni 2026 &amp; Aula Seopoyo 09:05 - Selesai</p>
                    <a class="inline-block w-full text-center py-4 bg-white text-mo-primary font-bold text-2xl rounded-md hover:bg-white transition" href="#">Register</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brandDark py-10 lg:py-24 px-8 lg:px-14" data-purpose="rules-section">
        <div class="container mx-auto flex flex-col">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-6">
                <!-- Syarat & Ketentuan -->
                <div data-purpose="terms-and-conditions">
                    <div class="bg-white text-mo-primary px-6 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">TERMS &amp; CONDITIONS</div>
                    <div class="h-max lg:h-full border-4 border-white bg-gradient-orange p-8 text-sm">
                        <ol class="list-decimal text-base pl-5 space-y-3 text-white tracking-wide font-medium">
                            <li>Peserta merupakan pelajar SMA/SMK sederajat dan masih aktif bersekolah, yang diverifikasi dengan kepemilikan kartu pelajar.</li>
                            <li>Satu tim terdiri dari tiga (3) orang siswa/i yang terdiri dari satu ketua tim dan berasal dari sekolah yang sama.</li>
                            <li>Pendaftaran hanya dilakukan oleh ketua tim.</li>
                            <li>Setiap peserta hanya diperbolehkan terdaftar dalam satu tim.</li>
                            <li>Peserta wajib mengikuti seluruh rangkaian lomba Management Olympiad 2025 sampai selesai.</li>
                            <li>Peserta wajib menaati segala peraturan dan menjalani seluruh prosedur, termasuk proses administrasi berdasarkan biaya yang telah ditentukan oleh panitia Management Olympiad 2026.</li>
                            <li>Pengisian formulir registrasi melalui website www.manajemenexpo15.com (link menyusul)</li>
                        </ol>
                    </div>
                </div>
                <!-- Prosedur Pendaftaran -->
                <div data-purpose="registration-procedure">
                    <div class="bg-white text-mo-primary px-6 py-2 font-oswald font-bold text-2xl rounded-t-lg mx-auto table">ISI FORM</div>
                    <div class="h-max lg:h-full border-4 border-white bg-gradient-orange p-8 text-xs lg:text-sm">
                        <ol class="list-decimal text-lg pl-5 space-y-2 text-white tracking-wide">
                            <li class="capitalize font-bold">
                                nama tim
                            </li>
                            <li class="capitalize font-bold">
                                nama peserta 1/ketu1
                            </li>
                            <li class="capitalize font-bold">
                                kartu tanda pelajar peserta 1/ketua
                            </li>
                            <li class="capitalize font-bold">
                                nama peserta 2
                            </li>
                            <li class="capitalize font-bold">
                                kartu tanda pelajar peserta 2
                            </li>
                            <li class="capitalize font-bold">
                                nama peserta 3
                            </li>
                            <li class="capitalize font-bold">
                                kartu tanda pelajar peserta 3
                            </li>
                            <li class="capitalize font-bold">
                                email
                            </li>
                            <li class="capitalize font-bold">
                                nama sekolah
                            </li>
                            <li class="capitalize font-bold">
                                nomor WhatsApp aktif
                            </li>
                            <li class="capitalize font-bold">
                                bukti share poster
                            </li>
                            <li class="capitalize font-bold">
                                bukti upload twibbon
                            </li>
                            <li class="capitalize font-bold">
                                Bukti Transfer Biaya Pendaftaran
                                <br/><span class="font-medium">103948657349 Bank Jago a.n Leonardo Dehandito Hernanto</span>
                            </li>
                            <li class="capitalize font-bold">
                                kode referal
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Syarat Administrasi -->
            <div class="mt-10 lg:mt-26" data-purpose="admin-requirements">
                <div class="bg-white text-mo-primary px-8 py-2 lg:py-4 font-oswald font-bold text-2xl lg:text-4xl rounded-t-lg mx-auto table">REGISTRATION PROCEDURE</div>
                <div class="border-4 border-white bg-gradient-orange p-8 lg:p-20 text-sm">
                    <ol class="list-decimal text-base lg:text-lg pl-5 space-y-2 text-white tracking-wide">
                        <li class="capitalize font-bold">
                            Ketua tim diwajibkan untuk membuat akun pada website www.manajemenexpo.com (link menyusul)
                        </li>
                        <li class="capitalize font-bold">
                            Peserta lomba wajib mengunggah / meng-upload twibbon melalui akun Instagram pribadi masing-masing peserta. Template, caption, dan ketentuan upload Twibbon dapat diunduh melalui link berikut
                        </li>
                        <li class="capitalize font-bold">
                            Seluruh peserta wajib mengunggah poster yang ada di Add Yours Story Instagram @mexpo.mo2026 dan menandai (tag) minimal 3 teman.
                        </li>
                        <li class="capitalize font-bold">
                            Tim yang telah melengkapi seluruh persyaratan dan ketentuan pendaftaran akan mendapatkan konfirmasi melalui email ketua tim
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-screen bg-white gap-8 lg:gap-16 flex flex-col justify-center items-center">
        <h1 class="text-mo-primary text-center text-4xl lg:text-6xl font-black font-oswald uppercase">more information</h1>
        <div class="w-full px-6 lg:px-30 gap-6 lg:gap-12 flex flex-col lg:flex-row justify-center items-start">
            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-orange text-white text-center text-lg lg:text-2xl font-medium uppercase">regitration:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-orange flex justify-start">
                    <ul class="w-full text-white text-sm lg:text-lg list-disc font-medium">
                        <li>Link:</li>
                        <li><a href="https://bit.ly/RegistrationUASTEC2025" class="underline">https://bit.ly/RegistrationUASTEC2025</a> (menyusul)</li>
                        <li>QR: (menyusul)</li>
                    </ul>
                </div>
            </div>

            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-orange text-white text-center text-lg lg:text-2xl font-medium uppercase">booklet:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-orange gap-4 flex flex-col justify-center items-center">
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