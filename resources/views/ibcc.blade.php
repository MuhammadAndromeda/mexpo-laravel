@extends('layout.main')
@section('content')
    <section class="relative min-h-screen bg-ibcc flex items-center pt-20 px-8 lg:px-24 overflow-hidden" data-purpose="hero-section" id="hero">
        <!-- Background elements -->
        <div class="container mx-auto gap-4 flex flex-col-reverse lg:flex-row justify-center lg:justify-between items-center relative z-10">
            <div data-purpose="hero-content">
                <h1 class="font-oswald text-white text-5xl text-center lg:text-left lg:text-8xl font-bold leading-tight uppercase tracking-tighter">
                    WELCOME TO<br/>
                    IBCC 2026
                </h1>
                <p class="text-base lg:text-2xl text-center lg:text-left mt-2 lg:mt-4 tracking-wider text-gray-100">16th Management Expo</p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 mt-4 lg:mt-12">
                    <button class="px-12 py-3 bg-white text-blue-900 font-semibold rounded-md hover:bg-gray-200 transition cursor-pointer">More about us?</button>
                    <button class="px-12 py-3 border border-white text-white font-semibold rounded-md hover:bg-white/10 transition cursor-pointer">More about us?</button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative flex justify-center md:justify-end" data-purpose="hero-images">
                <div class="relative w-max h-full overflow-hidden">
                    <img alt="Main Temple" class="w-auto h-50 md:h-120 object-cover" src="{{ asset('assets/images/gambar-ibcc.png') }}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-auto bg-white text-black" data-purpose="intro-section">
        <div class="w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-0 items-start">
            <div class="w-full lg:w-150 grid grid-cols-1" data-purpose="intro-images">
                <img alt="Street View" class="w-full h-120" src="{{ asset('assets/images/sub-ibcc-1.png') }}"/>
                <div class="w-full grid grid-cols-2">
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-ibcc-2.png') }}"/>
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-ibcc-3.png') }}"/>
                </div>
            </div>

            <div class="w-full lg:w-150 h-full py-8 px-8 lg:px-0 flex flex-col justify-center items-start" data-purpose="intro-text">
                <h2 class="font-oswald text-5xl lg:text-6xl font-bold uppercase leading-none mb-8 text-ibcc-primary">
                    GET TO KNOW IBCC<br/>2026 COMPETITION
                </h2>
                <div class="space-y-6 text-grey-800 leading-relaxed text-lg text-justify font-medium">
                    <p>
                        The International Business Case Competition (IBCC) is an annual academic event initiated <br/>
                        by the Student Association of the Bachelor of Management Program at Airlangga University, <br/>
                        and serves as a strategic pillar as one of the most prestigious sub-events in the Management
                        Expo (MEXPO) series.
                        <br/>
                        <br/>
                        By 2026, the IBCC will transform into an integrated ecosystem bridging the realms of <br/>
                        education, interdisciplinary collaboration, and applied innovation. This competition <br/>
                        converges students' creative ideas with the volatility and complexity of real-world challenges <br/>
                        in the industrial sector. Through this platform, the capabilities of future corporate leaders are <br/>
                        evaluated not only based on the sharpness of their analytical strategic formulation but also on <br/>
                        their competence in articulating the company's core values and mission to the public in an <br/>
                        authentic, accountable, and sustainability-based manner. <br/>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-auto bg-backdrop" data-purpose="intro-section">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-center gap-4 items-center">
            <div class="w-full h-full py-8 px-8 lg:px-12 flex flex-col justify-center items-start" data-purpose="intro-text">
                <h2 class="font-oswald text-5xl lg:text-6xl font-bold uppercase leading-none mb-8 text-white">
                    IBCC's<br/>grand theme
                </h2>
                <div class="space-y-6 mb-8 lg:mb-12 text-white leading-relaxed text-base lg:text-2xl text-left font-medium">
                    <p>
                        2026’s IBCC theme, “Customer Acquisition Strategy in Saturated Digital Marketplaces,”
                        highlights the importance of innovative strategies for acquiring and retaining customers in
                        increasingly competitive and saturated digital markets. With so many companies offering
                        similar products and services, businesses must understand customer needs, leverage data
                        effectively, and create relevant and valuable experiences.
                    </p>
                </div>
                <div class="w-full py-4 border-2 border-blue-900 rounded-lg bg-blue-900 text-white text-center text-base font-medium">
                    <a href="#" download="#">Download Book</a>
                </div>
            </div>
            
            <div class="w-full grid grid-cols-1" data-purpose="intro-images">
                <div class="w-full grid grid-cols-2">
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-ibcc-4.png') }}"/>
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-ibcc-5.png') }}"/>
                </div>
                <div class="w-full grid grid-cols-2">
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-ibcc-6.png') }}"/>
                    <img alt="Architecture" class="w-full h-full" src="{{ asset('assets/images/sub-ibcc-7.png') }}"/>
                </div>
                <img alt="Street View" class="w-full h-120" src="{{ asset('assets/images/sub-ibcc-8.png') }}"/>
            </div>
        </div>
    </section>

    <section class="bg-backdrop py-10 lg:py-20 px-8 lg:px-12 relative overflow-hidden gap-12 flex flex-col">
        <header class="container mx-auto flex flex-col md:flex-row justify-between items-start">
            <div class="text-indigo-400 gap-2 flex justify-center items-center">
                <svg class="h-12 w-12 text-ibcc-primary" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l2.4 7.4h7.6l-6.1 4.5 2.3 7.1-6.2-4.5-6.2 4.5 2.3-7.1-6.1-4.5h7.6z"></path></svg>
                <p class="text-white text-xl text-left font-oswald font-bold uppercase">visit the website</p>
            </div>
            <h2 class="text-white text-5xl lg:text-6xl font-oswald font-black uppercase max-w-2xl leading-tight">
                GET TO KNOW IBCC 2026 COMPETITION TIMELINE.
            </h2>
            <div class="w-full lg:w-auto h-auto md:h-38 flex justify-center items-end">
                <button class="w-full lg:w-max mt-8 md:mt-0 border-2 border-white text-white px-10 py-3 rounded-sm font-bold flex justify-center items-center gap-4 hover:bg-white hover:text-black transition cursor-pointer">
                    GET MORE <span>→</span>
                </button>
            </div>
        </header>

        <!-- Timeline Flowchart -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 gap-x-8 px-4" data-purpose="timeline-grid">
            <!-- Column 1 -->
            <div class="space-y-6">
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg relative gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">July 23 - 29, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pendaftaran: Early Bird</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">July 25, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Pre Event 1</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">August 1 - 8, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Registrasi Batch 1</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">August 14 - 21, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Registrasi Batch 2</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">August 27 - 31, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Open Registrasi Batch 3</p>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="space-y-6">
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">October 24, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Company Visit</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">October 14, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Mentoring Session</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">Sep 10 - Oct 21 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Preliminary ROund (PR)</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">September 5, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Webinar</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">September 3 - 7, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Extended Registration</p>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="space-y-6">
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">November 2 - 9, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Semifinal Round</p>
                </div>
                <div class="bg-gradient-indigo py-4 rounded text-center shadow-lg gap-1 flex flex-col">
                    <p class="text-base uppercase font-bold text-white tracking-wider">November 21 - 22, 2026</p>
                    <p class="font-medium text-white text-sm tracking-wider">Final and Awarding</p>
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
                    <h2 class="font-oswald text-6xl lg:text-7xl text-center lg:text-left font-bold uppercase text-ibcc-primary leading-none">OUR SUB <br>EVENT 2026.</h2>
                </div>
            </div>
            <div class="w-full bg-gradient-indigo rounded-xl p-6 lg:p-12 text-white flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <img alt="IMSC Poster" class="w-full h-auto border-4 border-white shadow-2xl" src="{{ asset('assets/images/poster-ibcc.png') }}"/>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <h3 class="font-oswald text-4xl lg:text-6xl font-bold uppercase leading-none">ABOUT IBCC COMPETITION 2026</h3>
                    <p class="text-base lg:text-xl">Management Expo is An Annual Event held by students from the department of Management Universitas Airlangga.</p>
                    <p class="text-base lg:text-xl font-bold">24 Juni 2026 &amp; Aula Seopoyo 09:05 - Selesai</p>
                    <a class="inline-block w-full text-center py-4 bg-white text-ibcc-primary font-bold text-2xl rounded-md hover:bg-white transition" href="#">Register</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brandDark py-10 lg:py-24 px-8 lg:px-14" data-purpose="rules-section">
        <div class="container mx-auto flex flex-col">
            <!-- Syarat Administrasi -->
            <div class="mt-10 lg:mt-26" data-purpose="admin-requirements">
                <div class="bg-white text-ibcc-primary px-8 py-2 lg:py-4 font-oswald font-bold text-2xl lg:text-4xl rounded-t-lg mx-auto table">GENERAL RULES & REGISTRATION GUIDE</div>
                <div class="border-4 border-white rounded-md lg:rounded-2xl bg-gradient-indigo p-8 lg:p-20 text-sm">
                    <ol class="text-base lg:text-lg pl-5 space-y-2 text-white tracking-wide">
                        <li type="A" class="capitalize font-bold">
                            General Rules
                            <ul>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Participants must be currently enrolled in a D3/D4/S1 program or equivalent at a university anywhere in the world.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Each team must consist of 2 - 3 students and may include members from different faculties or academic programs in the same university (participants must present their student ID cards).
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Each participant may only be registered on one team.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Each university may submit more than one team.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Participants must upload the IBCC 2026 twibbon and poster to their Instagram feed, as well as post the poster on their Instagram Story.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    All participants must comply with all rules and regulations established by the organizing committee.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    The decisions of the judging panel and the organizing committee are final, binding, and non-negotiable.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    The organizing committee reserves the right to make changes to the applicable rules. If there are any changes, the team captain will be notified via the registered email address.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    All participants must attend the series of side events determined by the organizing committee.
                                </li>
                            </ul>
                        </li>
                        <li type="A" class="capitalize font-bold">
                            Registration Guide
                            <ul>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Registration opens on July 23, 2026, and closes on September 7, 2026.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Registration is conducted online via the competition’s official website.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    The registration fee must be paid in advance according to the applicable batch.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    One team member is responsible for completing the registration form correctly and uploading all required documents.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    The registration period runs from July 23, 2026, at 10:00 AM WIB until September 7, 2026, at 11:59 PM WIB.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Each participant must upload the IBCC 2026 twibbon on the first slide and the IBCC 2026 poster on the second slide of their Instagram feed.
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Each participant must follow the official IBCC 2026 Instagram account and share the IBCC 2026 poster via Instagram Story by tagging the official account (NBCC) and mentioning at least 2–3 friends’ Instagram accounts.
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
            
            <div class="mt-10 lg:mt-26" data-purpose="admin-requirements">
                <div class="bg-white text-ibcc-primary px-8 py-2 lg:py-4 font-oswald font-bold text-2xl lg:text-4xl rounded-t-lg mx-auto table">PAPER FORMAT</div>
                <div class="border-4 border-white rounded-md lg:rounded-2xl bg-gradient-indigo p-8 lg:p-20 text-sm">
                    <p class="mb-2 text-2xl text-left text-white font-bold">The paper should be submitted with the following specifications:</p>
                    <ol class="list-decimal text-base lg:text-lg pl-5 space-y-2 text-white tracking-wide">
                        <li class="capitalize font-bold">
                            paper size: A4
                        </li>
                        <li class="capitalize font-bold">
                            Cover should include team member's names and team leader's contact.
                        </li>
                        <li class="capitalize font-bold">
                            Font type & size:
                            <ul>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Headings: Times New Roman, 14pt, Bold
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Body: Times New Roman, 12pt
                                </li>
                            </ul>
                        </li>
                        <li class="capitalize font-bold">
                            Layout
                            <ul>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Alignment: Justified
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Line spacing: 1,5
                                </li>
                            </ul>
                        </li>
                        <li class="capitalize font-bold">
                            Margin
                            <ul>
                                <li class="list-inside list-disc capitalize font-medium">
                                    left: 4 cm
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    right: 3 cm
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    top: 3 cm
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    bottom: 3 cm
                                </li>
                            </ul>
                        </li>
                        <li class="capitalize font-bold">
                            file
                            <ul>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Format: PDF
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Maximum size allowed: 10MB
                                </li>
                                <li class="list-inside list-disc capitalize font-medium">
                                    Maximum page: 20 pages of content, excluding cover, table of contents, attachments, and bibliography.
                                </li>
                            </ul>
                        </li>
                        <li class="capitalize font-bold">
                            Academic Writing Style: American Psychological Association (APA) 7th edition.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-screen bg-white gap-8 lg:gap-16 flex flex-col justify-center items-center">
        <h1 class="text-ibcc-primary text-center text-4xl lg:text-6xl font-black font-oswald uppercase">more information</h1>
        <div class="w-full px-6 lg:px-30 gap-6 lg:gap-12 flex flex-col lg:flex-row justify-center items-start">
            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-indigo text-white text-center text-lg lg:text-2xl font-medium uppercase">regitration:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-indigo flex justify-start">
                    <ul class="w-full text-white text-sm lg:text-lg list-disc font-medium">
                        <li>Link:</li>
                        <li><a href="https://bit.ly/RegistrationUASTEC2025" class="underline">https://bit.ly/RegistrationUASTEC2025</a> (menyusul)</li>
                        <li>QR: (menyusul)</li>
                    </ul>
                </div>
            </div>

            <div class="w-full">
                <div class="px-6 lg:px-20">
                    <div class="w-full py-3 lg:py-5 rounded-t-lg bg-gradient-indigo text-white text-center text-lg lg:text-2xl font-medium uppercase">booklet:</div>
                </div>
                <div class="w-full py-4 lg:py-6 px-8 lg:px-12 rounded-lg bg-gradient-indigo gap-4 flex flex-col justify-center items-center">
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