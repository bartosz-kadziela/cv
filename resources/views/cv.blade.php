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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body class="bg-[url('/images/background.svg')]" style="font-family:Poppins">
        <div class="flex flex-col w-full max-w-2xl mx-auto drop-shadow-xl">
            <header class="relative" style="height:170px; background-color:rgb(173,33,57)">
                <img src="/images/Cv_photo.jpg" alt="CV avatar photo" tabindex="0" class="focus:animate-bounce transition-colors duration-300 cursor-pointer absolute inset-0 rounded-full border-8 border-white hover:border-black m-2" style="height: 210px">
                <div class="pl-60 pr-4 pt-7 text-white flex flex-col">
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
                </div>
            </header>
            <main class="bg-white flex flex-row" style="height: 2000px">
                <div class="flex flex-col mt-14 mx-7 w-1/4">
                    <h1 class="text-lg font-bold">
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
                    <div class="pt-2.5 font-normal border-b" style="font-size:10px">
                        <a href="https://en.wikipedia.org/wiki/%C5%81%C3%B3d%C5%BA" class="hover:underline flex inline-flex focus:animate-bounce" target="_blank">
                            <img src="/images/locationpin.svg" alt="Locationpin icon" class="h-4 mr-0.5">
                            <p>
                                Lodz, Poland
                            </p>
                        </a>
                        <a href="https://en.wikipedia.org/wiki/May_26" class="hover:underline flex inline-flex focus:animate-bounce" target="_blank">
                            <img src="/images/calendar.svg" alt="Calendar icon" class="h-4 ml-2 mr-1 focus:animate-bounce">
                            <p>
                                26/05/1992
                            </p>
                        </a>
                    </div>
                    <h1 class="pt-2 text-lg font-bold">
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
                    <h1 class="pt-2 text-lg font-bold">
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
                </div>
                <div class="flex flex-col mt-14">
                    <h1 class="text-lg font-bold">
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
                            <div class="bg-black" style="width:1px; height: 108px">
                            </div>
                        </div>
                        <div class="flex flex-col">
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
                </div>
            </main>
            <footer class="bg-red-700" style="height: 59px; font-size:9px; background-color:rgb(173,33,57)">
                <p class="pt-2 px-7 text-justify font-light text-white leading-tight">
                    I agree to the processing of personal data provided in this document for realising the recruitment process pursuant to the Personal Data Protection Act of 10 May 2018 (Journal of Laws 2018, item 1000) and in agreement with Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation).
                </p>
            </footer>
        </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>
</html>
