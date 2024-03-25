<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            Bartosz Kądziela - CV
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="bg-slate-100">
        <div class="flex flex-col w-full max-w-2xl mx-auto">
            <header class="relative bg-red-700" style="height: 180px">
                <img src="/images/Cv_photo.jpg" alt="CV avatar photo" class="absolute inset-0 rounded-full border-8 border-white m-2" style="height: 220px">
                <div class="pl-64 pr-4 pt-10 text-white flex flex-col">
                    <p class="tracking-wide text-4xl tracking-widest font-semibold" style="font-family:Poppins">
                        BARTOSZ KĄDZIELA
                    </p>
                    <div class="mt-4 flex flex-col">
                        <div class="flex flex-row gap-2" style="font-size:9.3px">
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/phone.svg" alt="Phone icon" class="h-4">
                                <a href="tel:+48506106848" class="hover:underline drop-shadow-xl">
                                    +48 506 106 848
                                </a>
                            </div>
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/email.svg" alt="Email icon" class="h-4">
                                <a href="mailto:bartosz.kadziela@o2.pl" class="hover:underline drop-shadow-xl">
                                    bartosz.kadziela@o2.pl
                                </a>
                            </div>
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/linkedin.svg" alt="Linkedin icon" class="h-4">
                                <a href="https://linkedin.com/in/bartosz-kadziela" class="hover:underline drop-shadow-xl">
                                    linkedin.com/in/bartosz-kadziela
                                </a>
                            </div>
                        </div>
                        <div class="mt-2 flex flex-row gap-2" style="font-size:9.3px">
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/github.svg" alt="Github icon" class="h-4">
                                <a href="https://github.com/bartosz-kadziela" class="hover:underline drop-shadow-xl">
                                    github.com/bartosz-kadziela
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="bg-white flex flex-row" style="height: 560px">
                <div class="flex flex-col mt-14 mx-12">
                    <h1 class="text-lg font-bold" style="font-family:Poppins">
                        About Me
                    </h1>
                    <p class="pt-1" style="font-family:Poppins">
                        About Me Body
                    <p>
                </div>
                <div class="flex flex-col mt-14" style="font-family:Poppins">
                    <h1 class="text-lg font-bold" style="font-family:Poppins">
                        Work Experience
                    </h1>
                    <div class="flex flex-row">
                        <div class="flex flex-col pr-4 pt-2 items-center">
                            <div class="border-2 border-black h-4 w-4 rounded-full"style="border-width:1,5px">
                            </div>
                            <div class="bg-black h-96" style="width:1px">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class= "pt-1" style="font-family:Poppins">
                                11/2021 - 03/2024 | Takeda S.C.E
                            </p>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="bg-red-700" style="height: 59px">
            </footer>
        </div>
    </body>
</html>
