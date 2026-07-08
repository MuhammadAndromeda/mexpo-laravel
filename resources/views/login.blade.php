<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Management Expo #16</title>
    <link rel="icon" href="../src/assets/images/logo-mexpo.png" type="logo" style="width: auto; height: 1vh;">
    @vite('resources/css/app.css')

    <!-- Font Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet"/>

    <!-- Font Baru -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="overflow-hidden">

    <main class="w-full h-max overflow-x-hidden">
        <section class="w-full h-screen bg-white p-0 lg:p-4 flex justify-center items-center overflow-hidden">
            <div class="w-full h-full gap-4 flex justify-between items-center">
                <aside class="w-1/2 h-full px-8 pt-8 pb-16 bg-login-gradient rounded-3xl flex flex-col justify-between items-start absolute lg:relative invisible lg:visible -translate-x-full lg:translate-x-0">
                    <div class="w-full flex justify-start items-center">
                        <img src="{{ asset('assets/images/logo-mexpo.png') }}" alt="Logo Mexpo" class="w-18 h-auto">
                    </div>

                    <div class="w-full text-white text-left gap-2 flex flex-col-reverse justify-center items-start">
                        <h1 class="text-5xl font-medium">Get access your personal hub for clarity and productivity</h1>
                        <p class="text-2xl font-light">You can easily</p>
                    </div>
                </aside>

                <div class="w-full lg:w-1/2 h-screen lg:h-full px-8 lg:px-20 gap-4 lg:gap-6 flex flex-col justify-center items-start">
                    <header class="w-full gap-2 flex flex-col justify-center items-center">
                        <div class="w-full flex justify-center lg:justify-start items-center">
                            <img src="{{ asset('assets/images/icon-mexpo.png') }}" alt="Icon Mexpo" class="w-15 h-auto">
                        </div>

                        <div class="w-full text-indigo-950 gap-3 flex flex-col justify-center items-start">
                            <h1 class="text-3xl text-center lg:text-left font-black capitalize">Login to your account</h1>
                            <p class="text-sm lg:text-base text-center lg:text-left font-medium capitalize">access your task, notes and project anytime, anywhere - and keep everything flowing in one place</p>
                        </div>
                    </header>

                    <div class="w-full gap-8 flex flex-col justify-center items-center">
                        <form method="get" class="w-full gap-3 lg:gap-6 flex flex-col justify-center items-center">
                            <div class="w-full gap-2 flex flex-col justify-center items-start">
                                <label class="w-full text-indigo-950 text-base text-left font-bold capitalize">email address</label>
                                <input type="text" class="w-full py-3 px-5 border-2 border-gray-600 rounded-lg focus:border-cyan-600 text-zinc-900 text-sm" placeholder="Enter your email address">
                            </div>
                            <div class="w-full gap-2 flex flex-col justify-center items-start">
                                <label class="w-full text-indigo-950 text-base text-left font-bold capitalize">password</label>
                                <input type="text" class="w-full py-3 px-5 border-2 border-gray-600 rounded-lg focus:border-cyan-600 text-zinc-900 text-sm" placeholder="Enter your password">
                            </div>

                            <button type="submit" class="w-full py-3 mt-2 lg:mt-0 rounded-lg border-2 border-blue-700 bg-blue-700 shadow-lg shadow-blue-900/60 hover:bg-transparent text-white hover:text-blue-700 text-center text-base font-medium capitalize cursor-pointer transition-all duration-300">login</button>
                        </form>

                        <div class="w-full gap-6 flex flex-col justify-center items-center">
                            <div class="w-full px-8  relative flex items-center justify-center 
                                before:h-0.75 before:content-[''] before:w-full before:flex-1 before:bg-gray-300 
                                after:h-0.75 after:content-[''] after:w-full after:flex-1 after:bg-gray-300"    
                            >
                                <span class="px-4 text-base text-gray-500">or continue with</span>
                            </div>

                            <div class="w-full gap-8 flex justify-between items-center">
                                <button type="button" class="w-full py-3 border-2 border-black rounded-xl flex justify-center items-center">
                                    <i class=" text-2xl fa-brands fa-google"></i>
                                </button>
                                <button type="button" class="w-full py-3 border-2 border-black rounded-xl flex justify-center items-center">
                                    <i class=" text-2xl fa-brands fa-instagram"></i>
                                </button>
                                <button type="button" class="w-full py-3 border-2 border-black rounded-xl flex justify-center items-center">
                                    <i class=" text-2xl fa-brands fa-facebook"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script type="module" src="../js/component.js"></script>
    <script src="../js/animation.js"></script>
  </body>
</html>
