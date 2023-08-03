<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="images\favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
                        class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold"
                        onClick="location.href = './pages/about'">About</button>
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
        <div class="relative bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-lg shadow p-6 text-white">
            <i class="absolute top-2 right-2 text-black-100 text-lg fas fa-lock"></i>
            <div>
                <h3 class="text-lg font-semibold mb-4">Card 1</h3>
                <p class="text-gray-100">Content for card 1 goes here.</p>
            </div>
            <div class="mt-4">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 rounded">Action</button>
            </div>
        </div>
</body>

</html>