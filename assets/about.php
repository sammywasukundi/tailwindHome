<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="myStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="text-gray-700 font-mono">
<div class="grid md:grid-cols-3">
        <div class="md:col-span-1 md:flex justify-end">
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-5 border-b border-gray-200">
                        <a href="#" class="text-yellow-700 hover:text-red-600">NinjaFood</a>
                    </h1>
                    <div class="px4 cursor-pointer md:hidden " id="burger">
                        <svg class="w-6 mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li  class="text-gray-600 font-bold border-r-4 border-white">
                        <a href="index.php" class="px-4 flex justify-end">
                            <span>Home</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="border-r-4 border-yellow-500">
                        <a href="about.php" class="px-4 flex justify-end mt-2">
                            <span>About</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>               
                        </a>
                    </li>
                    <li class="border-r-4 border-white">
                        <a href="contact.php" class="px-4 flex justify-end mt-2">
                            <span>Contact</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>

                    </li>
                    <li class="border-r-4 border-white">
                        <a href="Merecipes.php" class="px-4 flex justify-end mt-2">
                            <span>My recipes</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.25l6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185zM9.75 9h.008v.008H9.75V9zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm4.125 4.5h.008v.008h-.008V13.5zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>                              
                        </a>

                    </li>
                    <li class="border-r-4 border-white">
                        <a href="owner.php" class="px-4 flex justify-end mt-2">
                            <span>Owner</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                                                           
                        </a>

                    </li>
                    <li  class="border-r-4 border-white">
                        <a href="#" class="px-4 flex justify-end mt-2">
                            <span>Logout</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                              
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="px-16 py-10 bg-gray-100 md:col-span-2">
            <div class="flex md:justify-center sm:justify-center">
                    <header>
                        <h2 class="text-gray-800 text-6xl font-semibold mt-5">Who are we?</h2>
                    </header>
            </div>
            <div class="grid md:grid-cols-3">
                <div class="md:col-span-1 mt-10">
                    <p class="m-4">
                        <h3 class="font-bold">I'm Sammy Wasukundi samBro <br> Sudent of Uniluk L2 Computer sciences</h3>
                        Please contact us using these contact details including facebook, gmail, twitter and more.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus, rem! Deserunt delectus aspernatur veniam placeat.
                            Soluta assumenda voluptates,
                            contact details
                    </p>
                    <div class="flex justify-center px-4 mt-10">
                        <ul class="font-bold">
                            <li>
                                <span>+243999576452</span>
                            </li>
                            <li>
                                <span>brosammy1et2@gmail.com</span>
                            </li>
                            <li>
                                <span>@Mrsammy2002</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <img src="img/others/s.png" alt="chiny.me" class="w-2">
                </div>
            </div>
        </main>
    </div>

    <script src="index.js"></script>
</body>
</html>