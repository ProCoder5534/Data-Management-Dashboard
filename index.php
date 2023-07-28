<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="images\favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <style>
        /* Custom CSS for the gradient background */
        body {
            background-image: linear-gradient(to bottom left, #87cefa, #a020f0);
        }
    </style>
</head>

<body class="bg-gradient-to-tl from-blue-300 to-purple-500 h-screen">
    <div class="nav bg-blue-700 h-20 rounded-b-3xl">
        <nav>
            <ul class="relative h-32 w-screen">
                <li class="absolute top-1 left-12 ">LOGOOOO </li>
                        <li class="absolute right-[6cm] top-4"><button
                        class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold">
                        Credits</button></li>
                <li class="absolute right-12 top-4"><button
                        class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold">
                        About</button></li>
            </ul>
        </nav>
    </div>
    <div class="content mt-10 ml-[2cm] ">
        <div class="outside flex relative h-32 w-[175vh]">
          <p class="text-white font-bold text-2xl ">Available Databases :</p>
          <button class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold absolute right-60">Create New</button>
          <div class="search h-[1cm] w-[6.15cm] bg-white absolute right-0 rounded-full cursor-text p-1 pl-4 pt-[0.20cm]"><p class="text-gray-300">Search for databases</p>
          <button class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold"><img src="./images/arrow.png" alt="" class="h-7 w-7"></button>
        </div>
        </div>
        <div class="inside">

        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
