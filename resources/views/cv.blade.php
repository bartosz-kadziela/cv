<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            Bartosz Kądziela - CV
        </title>
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body style="font-family:Poppins; background-image:url('/images/background.svg')">
        <button class="flex flex-row items-center animate-bounce" data-aos="fade-up-left" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1150" id="scrollToBottomBtn">
            <img src="/images/arrow_down.svg" alt="Arrow down icon" class="h-8">
        </button>
        <div data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="800">
            <div class="flex flex-col w-full max-w-2xl mx-auto drop-shadow-xl">
                <header class="relative" style="height:170px; background-color:rgb(173,33,57)">
                    <img src="/images/Cv_photo.jpg" alt="CV avatar photo" data-aos="fade-down-right" data-aos-easing="ease-in-sine" data-aos-duration="1150" tabindex="0" class="focus:animate-bounce transition-colors duration-300 cursor-pointer absolute inset-0 rounded-full border-8 border-white hover:border-black m-2" style="height: 210px">
                    <div data-aos="fade-down-left" data-aos-easing="ease-in-sine" data-aos-duration="1150" class="pl-60 pr-4 pt-7 text-white flex flex-col">
                        <p class="tracking-wide tracking-widest font-semibold" style="font-size:37px">
                            BARTOSZ KĄDZIELA
                        </p>
                        <div class="mt-2 flex flex-col font-sans" style="font-size:10px">
                            <div class="flex flex-row gap-2">
                                <a href="tel:+48506106848" class="flex flex-row gap-1 hover:underline hover:animate-pulse">
                                    <img src="/images/phone.svg" alt="Phone icon" class="h-4">
                                    <p>
                                        +48 506 106 848
                                    </p>
                                </a>
                                <a href="mailto:bartosz.kadziela@o2.pl" class="flex flex-row gap-1 hover:underline hover:animate-pulse">
                                    <img src="/images/email.svg" alt="Email icon" class="h-4">
                                    <p>
                                        bartosz.kadziela@o2.pl
                                    </p>
                                </a>
                                <a href="https://linkedin.com/in/bartosz-kadziela" class="flex flex-row gap-1 hover:underline hover:animate-pulse" target="_blank">
                                    <img src="/images/linkedin.svg" alt="Linkedin icon" class="h-4">
                                    <p>
                                        linkedin.com/in/bartosz-kadziela
                                    </p>
                                </a>
                            </div>
                            <div class="mt-2 flex flex-row gap-2">
                                <a href="https://github.com/bartosz-kadziela" class="flex flex-row gap-1 hover:underline hover:animate-pulse" target="_blank">
                                    <img src="/images/github.svg" alt="Github icon" class="h-4">
                                    <p>
                                        github.com/bartosz-kadziela
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="relative" style="padding-left: 306px">
                            <span class="absolute flex items-center justify-center h-2 w-2" style="left: 304px; top:-1px">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-80"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                            </span>
                            <button type="button" class="collapsible rounded-lg border-2 text-xs px-2" style="font-size:10px">
                                Download CV
                            </button>
                            <div class="content" style="font-size:10px">
                                <div class="flex flex-col font-semibold">
                                    <a href="pdf/CV_EN _Bartosz_Kadziela_2024.pdf" download="CV_EN _Bartosz_Kadziela_2024.pdf" class="hover:underline hover:animate-pulse" target="_blank">
                                        <button class="flex flex-row justify-center pb-0.5">
                                            <img src="/images/download.svg" alt="Download EN CV" class="h-4 pr-2">
                                            English
                                        </button>
                                    </a>
                                    <a href="pdf/CV_PL_Bartosz_Kadziela_2024.pdf" download="CV_PL_Bartosz_Kadziela_2024.pdf" class="hover:underline hover:animate-pulse" target="_blank">
                                        <button class="flex flex-row justify-center pb-0.5">
                                            <img src="/images/download.svg" alt="Download PL CV" class="h-4 pr-2">
                                            Polish
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="bg-white flex flex-row" style="height: 1500px">
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800" class="flex flex-col mt-14 mx-7" style="width: 30%">
                        <h1 class="text-xl font-semibold">
                            About Me
                        </h1>
                        <p class="pt-2 font-light text-wrap text-justify tracking-wide" style="font-size:10px">
                            Former ServiceNow Business Analyst at
                            Takeda SCE and Product Master Data
                            Specialist at Fujitsu. Currently, I am
                            learning web development, while
                            simultaneously working on personal
                            projects to further enhance myself in
                            these areas.
                        <p>
                        <div class="pt-4 font-normal flex flex-row" style="font-size:10px">
                            <a href="https://en.wikipedia.org/wiki/%C5%81%C3%B3d%C5%BA" class="hover:underline flex inline-flex focus:animate-bounce" target="_blank">
                                <img src="/images/locationpin.svg" alt="Locationpin icon" class="h-4 mr-1">
                                <div>
                                    Lodz, Poland
                                </div>
                            </a>
                            <a href="https://en.wikipedia.org/wiki/May_26" class="hover:underline flex inline-flex focus:animate-bounce" target="_blank">
                                <img src="/images/calendar.svg" alt="Calendar icon" class="h-4 mr-1 ml-2 focus:animate-bounce">
                                <div>
                                    26/05/1992
                                </div>
                            </a>
                        </div>
                        <h1 class="pt-5 mt-5 border-t-2 text-xl font-semibold">
                            Skills
                        </h1>
                        <ul class="ml-3 pt-2 font-light tracking-wide list-disc leading-5" style="font-size:10px">
                            <li>Business Analysis</li>
                            <li>ServiceNow</li>
                            <li>SAP PP/MM</li>
                            <li>ITIL practices</li>
                            <li>Master Data</li>
                            <li>Microsoft Office</li>
                            <li>Red Box Call Recording</li>
                        </ul>
                        <h1 class="pt-5 mt-5 border-t-2 text-xl font-semibold">
                            Languages
                        </h1>
                        <div class="pt-2 flex flex-row tracking-wide leading-5" style="font-size:10px">
                            <div class="flex flex-col font-extrabold">
                                <span>Polish</span>
                                <span>English</span>
                                <span>French</span>
                            </div>
                            <div class="ml-4 flex flex-col">
                                <p>Native / C2</p>
                                <p>Advanced / C1</p>
                                <p>Basic / A2</p>
                            </div>
                        </div>
                        <h1 class="pt-5 mt-5 border-t-2 text-xl font-semibold">
                            Programming
                        </h1>
                        <ul class="ml-3 pt-2 font-light tracking-wide list-disc leading-5" style="font-size:10px">
                            <li>HTML</li>
                            <li>CSS & Tailwind CSS</li>
                            <li>PHP (beginner level)</li>
                            <li>Javascript (beginner level)</li>
                            <li>Laravel (beginner level)</li>
                        </ul>
                        <h1 class="pt-5 mt-5 border-t-2 text-xl font-semibold">
                            Awards
                        </h1>
                        <div class="pt-2 flex flex-col font-light tracking-wide" style="font-size:10px">
                            <p class="pb-2">02/2020 | Fujitsu Technology Solutions Sp. z o.o.</p>
                            <p class="pb-3 font-bold">Fujitsu Recognition Award for Implementations in Data Configuration</p>
                            <p class="pb-2">01/2020 | Fujitsu Technology Solutions Sp. z o.o.</p>
                            <p class="pb-3 font-bold">Fujitsu Recognition Award for Coordinating S&R in a Team</p>
                            <p class="pb-2">07/2017 | Fujitsu Technology Solutions Sp. z o.o.</p>
                            <p class="pb-3 font-bold">Fujitsu Centrica Finest Award for Best Performance</p>
                        </div>
                        <h1 class="pt-5 mt-5 border-t-2 text-xl font-semibold">
                            Pro Bono Work
                        </h1>
                        <div class="pt-2 flex flex-col tracking-wide" style="font-size:10px">
                            <p class="pb-2 font-light">09/2016 - Now</p>
                            <p class="pb-3 font-bold">English teacher for A1-B2 level</p>
                        </div>
                        <h1 class="pt-5 mt-5 border-t-2 text-xl font-semibold">
                            Interests
                        </h1>
                        <ul class="ml-3 pt-2 font-light tracking-wide list-disc leading-5" style="font-size:10px">
                            <li>Foreign languages</li>
                            <li>English literature</li>
                            <li>Chess</li>
                            <li>Travelling</li>
                            <li>Court tennis</li>
                            <li>Calisthenics</li>
                            <li>Swimming</li>
                        </ul>
                    </div>
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800" class="flex flex-col mt-14">
                        <h1 class="text-xl font-semibold">
                            Work Experience
                        </h1>
                        <div class="flex flex-row">
                            <div class="flex flex-col pr-4 pt-3 items-center">
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 153px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 108px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 122px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full" style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 73px">
                                </div>
                            </div>
                            <div class="flex flex-col border-b-2" style="padding-bottom: 15px">
                                <p class="pt-2 tracking-wide text-sm">
                                    11/2021 - 03/2024 | Takeda S.C.E
                                </p>
                                <h1 class="font-bold pb-1">
                                    Business Analyst (Service Now)
                                </h1>
                                <ul class="list-none mr-6 font-light tracking-wide" style="font-size:10px">
                                    <li>- Collecting User Requirements - meetings with stakeholders</li>
                                    <li>- Managing User Stories in Service Now Visual Task Board (Agile)</li>
                                    <li>- Preparing Solution design mock-ups for ServiceNow enhancements</li>
                                    <li>- Creating Acceptance Criteria for the development team</li>
                                    <li>- Testing ServiceNow enhancements in Dev/QA/Test environments</li>
                                    <li>- Creating ServiceNow Reports, Dashboards and Knowledge Articles</li>
                                    <li class="mb-1">- Holding Peer Review sessions for more complex enhancements</li>
                                </ul>
                                <p class="pt-2 tracking-wide text-sm">
                                    08/2019 - 10/2021 | Fujitsu Technology Solutions
                                </p>
                                <h1 class="font-bold pb-1">
                                    Technical Operations Specialist (Master Data)
                                </h1>
                                <ul class="list-none mr-6 font-light tracking-wide" style="font-size:10px">
                                    <li>- Implementing and configuring Primergy servers in SAP PP/MM</li>
                                    <li>- Maintaining data throughout the whole Product Life Cycle</li>
                                    <li>- Coordinating data transfer across SharePoint, JPDM, SAP</li>
                                    <li class="mb-1">- Cooperating with Product Management Team from Germany & Japan </li>
                                </ul>
                                <p class="pt-2 tracking-wide text-sm">
                                    12/2017 - 08/2019 | Fujitsu Technology Solutions
                                </p>
                                <h1 class="font-bold pb-1">
                                    Service Process Controller
                                </h1>
                                <ul class="list-none mr-6 font-light tracking-wide" style="font-size:10px">
                                    <li>- Managing and maintaining Service Desk processes</li>
                                    <li>- Reviewing Call Quality and managing incidents</li>
                                    <li>- Managing escalations for UK customer</li>
                                    <li>- Reporting SLA & KPI</li>
                                    <li class="mb-1">- Coordinating Lean Management</li>
                                </ul>
                                <p class="pt-2 tracking-wide text-sm">
                                    11/2016 - 12/2017 | Fujitsu Technology Solutions
                                </p>
                                <h1 class="font-bold pb-1">
                                    Service Desk Agent
                                </h1>
                                <ul class="list-none mr-6 font-light tracking-wide" style="font-size:10px">
                                    <li>- Providing technical support for clients based in UK & US - ServiceNow</li>
                                    <li>- Supporting clients via call, email, and ServiceNow web chat </li>
                                    <li>- Building and utilizing ServiceNow Knowledge Articles</li>
                                </ul>
                            </div>
                        </div>
                        <h1 class="pt-5 text-xl font-semibold">
                            Education
                        </h1>
                        <div class="flex flex-row">
                            <div class="flex flex-col pr-4 pt-3 items-center">
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 28px">
                                </div>
                            </div>
                            <div class="flex flex-col border-b-2" style="padding-bottom: 15px">
                                <p class="pt-2 tracking-wide text-sm">
                                    10/2014 - 07/2016 | University of Lodz
                                </p>
                                <h1 class="font-bold pb-1">
                                    Master - Logistics - Supply Chain Management
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    09/2015 - 05/2016 | University of the West of Scotland
                                </p>
                                <h1 class="font-bold pb-1">
                                    Master - Management - International Mgmt
                                </h1>
                            </div>
                        </div>
                        <h1 class="pt-5 text-xl font-semibold">
                            Trainings & Certifications
                        </h1>
                        <div class="flex flex-row">
                            <div class="flex flex-col pr-4 pt-3 items-center">
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 68px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 68px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                                <button class="hover:bg-black focus:animate-pulse cursor-pointer focus:ring focus:ring-slate-500 border-2 border-black h-3 w-3 rounded-full"style="border-width:1,5px">
                                </button>
                                <div class="bg-black" style="width:1px; height: 44px">
                                </div>
                            </div>
                            <div class="flex flex-col mr-7" style="padding-bottom: 15px">
                                <p class="pt-2 tracking-wide text-sm">
                                    05/2023 | Takeda S.C.E
                                </p>
                                <h1 class="font-bold pb-1">
                                    Service Now Reports & Dashboards
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    08/2022 | Takeda S.C.E
                                </p>
                                <h1 class="font-bold pb-1">
                                    Agile Foundations
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    11/2021 | Takeda S.C.E
                                </p>
                                <h1 class="font-bold pb-1">
                                    Visual Task Board (Agile)
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    09/2020 | Fujitsu Technology Solutions Sp. z o.o.
                                </p>
                                <h1 class="font-bold pb-1">
                                    Cyclic Knowledge transfer trainings for Primergy Products
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    11/2018 | Fujitsu Technology Solutions Sp. z o.o.
                                </p>
                                <h1 class="font-bold pb-1">
                                    Effective Time Management Workshop
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    12/2017 | Fujitsu Technology Solutions Sp. z o.o.
                                </p>
                                <h1 class="font-bold pb-1">
                                    Information Technology Infrastructure Library Workshop
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    09/2017 | Fujitsu Technology Solutions Sp. z o.o.
                                </p>
                                <h1 class="font-bold pb-1">
                                    Sense and Respond for Activists Workshop
                                </h1>
                                <p class="pt-2 tracking-wide text-sm">
                                    07/2015 | University of Cambridge
                                </p>
                                <h1 class="font-bold pb-1">
                                    Certificate in Advanced English C1
                                </h1>
                            </div>
                        </div>
                    </div>
                </main>
                <footer style="height: 59px; font-size:9px; background-color:rgb(173,33,57)">
                    <p class="pt-2 px-7 text-justify font-light text-white leading-tight">
                        I agree to the processing of personal data provided in this document for realising the recruitment process pursuant to the Personal Data Protection Act of 10 May 2018 (Journal of Laws 2018, item 1000) and in agreement with Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation).
                    </p>
                </footer>
            </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        </div>
    </body>
</html>
