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
    <link rel="stylesheet" href="style.css">
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
          <button class="h-10 w-32 rounded-2xl bg-yellow-300 hover:rounded-full hover:border-4 border-blue-300 font-semibold">Create New</button>
        </div>
        </div>
        <div class="inside">

        </div>
    </div>
    <!--the cards -->
    <div class="flex gap-10 container" >
    <div class="relative max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
    <!-- The icon image -->
    <div class="absolute top-2 right-2">
      <img src="images/locked.png" alt="Icon" class="w-5 h-5">
    </div>
  
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Employee List</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Employee List of Abc Corporation (Confidential)</p>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      View Database
      <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg>
    </a>
  </div>
  <div class="relative max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
    <!-- The icon image -->
    <div class="absolute top-2 right-2">
      <img src="images/locked.png" alt="Icon" class="w-5 h-5">
    </div>
  
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Employee List</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Employee List of Abc Corporation (Confidential)</p>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      View Database
      <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg>
    </a>
  </div>
  <div class="relative max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-border hover:border-red-500">
    <!-- The icon image -->
    <div class="absolute top-2 right-2">
      <img src="images/locked.png" alt="Icon" class="w-5 h-5">
    </div>
  
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Employee List</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Employee List of Abc Corporation (Confidential)</p>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      View Database
      <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg>
    </a>
  </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
