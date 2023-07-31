<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="images\favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to bottom left, #87cefa, #a020f0);
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
            /* Remove horizontal scrollbar */
        }

        ::-webkit-scrollbar {
            width: 12px;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #336699;
            border-radius: 10px;
        }

        .progress-bar-container {
            width: 100%;
            background-color: #83a2d6;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-bar {
            height: 20px;
            width: 0;
            border-radius: 5px;
            transition: width 0.5s ease;
            background-image: linear-gradient(to right, #36588f, #597bb3);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const progressBar = document.getElementById('progress');
            let scrollProgress = 0;

            window.addEventListener('scroll', () => {
                const maxHeight = document.documentElement.scrollHeight - window.innerHeight;
                const scrolled = window.scrollY;
                scrollProgress = (scrolled / maxHeight) * 100;
                progressBar.style.width = `${scrollProgress}%`;
            });
        });
    </script>
</head>

<body class="bg-gradient-to-tl from-blue-300 to-purple-500 h-screen">
    <div class="nav bg-blue-700 h-20 rounded-b-3xl">
        <nav>
            <ul class="relative h-32 w-screen">
                <li class="absolute top-1 left-12 ">LOGOOOO </li>
                <li class="absolute right-[6cm] top-4">
                    <button
                        class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold">Credits</button>
                </li>
                <li class="absolute right-12 top-4">
                    <button
                        class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold">About</button>
                </li>
            </ul>
        </nav>
    </div>
    <div class="progress-bar-container">
        <div class="progress-bar" id="progress"></div>
    </div>

    <div class="content mt-10 ml-[1.9cm]">
        <div class="outside flex items-center justify-between relative h-32 mr-5">
            <div>
                <p class="text-white font-bold text-2xl">Available Databases :</p>
            </div>
            <div class="flex items-center ml-6">
                <button onclick="goToCreate()"
                    class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold ml-[14cm]">Create
                    New</button>
            </div>
            <div class="searchbox flex items-center ml-6">
                <input type="text"
                    class="searchInput py-2 px-4 border border-gray-300 rounded-tl-lg rounded-bl-lg h-10 flex-grow focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="Search By name">
                <button class="h-10 bg-yellow-300 px-4 rounded-r-lg flex items-center" onClick="search()">
                    <img src="images/arrow.png" alt="Search" class="h-5 w-5" id="searchButton">
                </button>
            </div>
        </div>
        <!-- Custom horizontal scrollbar for the "inside" div -->
        <div class="scroll-container w-[30.8cm] overflow-x-auto mt-5">
            <div class="inside flex space-y-3 bg-white p-4 rounded-xl overflow-x-auto">
                <div
                    class="card flex-shrink-0 relative max-w-sm p-6 border bg-cyan-900 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
                    <!-- The icon image -->
                    <div class="absolute top-2 right-2">
                        <img src="images/Locked.png" alt="Icon" class="w-5 h-5">
                    </div>
                    <div class="infoheading space-y-[1.7cm]">
                        <a href="#">
                            <h5 class="mb-4 text-4xl font-bold tracking-tight text-gray-300 dark:text-white mt-3">
                                Employee List</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-xl">The Employee List of Abc
                            Corporation (Confidential)</p>
                    </div>
                    <div class="button mt-[1.5cm]">
                        <a href="#"
                            class="inline-flex items-center px-4 py-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xl">
                            View Database
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="card flex-shrink-0 relative max-w-sm p-6 border bg-cyan-900 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
                    <!-- The icon image -->
                    <div class="absolute top-2 right-2">
                        <img src="images/Locked.png" alt="Icon" class="w-5 h-5">
                    </div>
                    <div class="infoheading space-y-[1.7cm]">
                        <a href="#">
                            <h5 class="mb-4 text-4xl font-bold tracking-tight text-gray-300 dark:text-white mt-3">
                                Employee List</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-xl">The Employee List of Abc
                            Corporation (Confidential)</p>
                    </div>
                    <div class="button mt-[1.5cm]">
                        <a href="#"
                            class="inline-flex items-center px-4 py-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xl">
                            View Database
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="card flex-shrink-0 relative max-w-sm p-6 border bg-cyan-900 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
                    <!-- The icon image -->
                    <div class="absolute top-2 right-2">
                        <img src="images/Locked.png" alt="Icon" class="w-5 h-5">
                    </div>
                    <div class="infoheading space-y-[1.7cm]">
                        <a href="#">
                            <h5 class="mb-4 text-4xl font-bold tracking-tight text-gray-300 dark:text-white mt-3">
                                Employee List</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-xl">The Employee List of Abc
                            Corporation (Confidential)</p>
                    </div>
                    <div class="button mt-[1.5cm]">
                        <a href="#"
                            class="inline-flex items-center px-4 py-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xl">
                            View Database
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="card flex-shrink-0 relative max-w-sm p-6 border bg-cyan-900 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
                    <!-- The icon image -->
                    <div class="absolute top-2 right-2">
                        <img src="images/Locked.png" alt="Icon" class="w-5 h-5">
                    </div>
                    <div class="infoheading space-y-[1.7cm]">
                        <a href="#">
                            <h5 class="mb-4 text-4xl font-bold tracking-tight text-gray-300 dark:text-white mt-3">
                                Employee List</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-xl">The Employee List of Abc
                            Corporation (Confidential)</p>
                    </div>
                    <div class="button mt-[1.5cm]">
                        <a href="#"
                            class="inline-flex items-center px-4 py-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xl">
                            View Database
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="card flex-shrink-0 relative max-w-sm p-6 border bg-cyan-900 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
                    <!-- The icon image -->
                    <div class="absolute top-2 right-2">
                        <img src="images/Locked.png" alt="Icon" class="w-5 h-5">
                    </div>
                    <div class="infoheading space-y-[1.7cm]">
                        <a href="#">
                            <h5 class="mb-4 text-4xl font-bold tracking-tight text-gray-300 dark:text-white mt-3">
                                Employee List</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-xl">The Employee List of Abc
                            Corporation (Confidential)</p>
                    </div>
                    <div class="button mt-[1.5cm]">
                        <a href="#"
                            class="inline-flex items-center px-4 py-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xl">
                            View Database
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col" bis_skin_checked="1">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="images/Locked.png" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">XYZ</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                2020 Tailblocks —
                <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer"
                    target="_blank">@knyttneve</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5
                        13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
<script src="./index.js"></script>
</body>

</html>