<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            Bartosz Kądziela - CV
        </title>
    </head>
    <body class="bg-slate-100">
        <div class="flex flex-col w-full max-w-2xl mx-auto">
            <header class="relative bg-red-700" style="height: 180px">
                <img src="/images/Cv_photo.jpg" alt="CV avatar photo" class="absolute inset-0 rounded-full border-8 border-white m-2" style="height: 220px">
                <div class="pl-64 pr-4 pt-10 text-white flex flex-col">
                    <p class="tracking-wide text-4xl tracking-widest font-medium">
                        BARTOSZ KĄDZIELA
                    </p>
                    <div class="mt-4 flex flex-col">
                        <div class="flex flex-row gap-2" style="font-size:9.3px">
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/phone.svg" alt="Phone icon" class="h-4">
                                <span class="drop-shadow-xl">
                                    +48 506 106 848
                                </span>
                            </div>
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/email.svg" alt="Email icon" class="h-4">
                                <span class="drop-shadow-xl">
                                    bartosz.kadziela@o2.pl
                                </span>
                            </div>
                            <div class="flex flex-row gap-1 hover:animate-pulse">
                                <img src="/images/linkedin.svg" alt="Linkedin icon" class="h-4">
                                <a href="https://www.linkedin.com/in/bartosz-kadziela/" class="hover:underline drop-shadow-xl">
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
                <div class="flex flex-col mt-14">
                    <h1>
                        About Me
                    </h1>
                    <p>
                        About Me Body
                    <p>
                </div>
                <div class="flex flex-col mt-14">
                    <h1>
                        Work Experience
                    </h1>
                    <div class="flex flex-row">
                        <div class="flex flex-col">
                            Line with bulletpoints divs
                        </div>
                        <div class="flex flex-col">
                            Work Experience Body
                        </div>
                    </div>
                </div>
            </main>
            <footer class="bg-red-700" style="height: 59px">
            </footer>
        </div>
    </body>
</html>
