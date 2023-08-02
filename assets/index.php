<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/style.css">
</head>
<body class="text-gray-700 font-mono" onload="album()">
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
                    <li  class="text-gray-600 font-bold border-r-4 border-yellow-500">
                        <a href="#" class="px-4 flex justify-end">
                            <span>Home</span>
                            <svg class="w-5 ml-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="border-r-4 border-white">
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
        </div><!-- end navbar -->
        <main class="px-16 py-10 bg-gray-100 md:col-span-2">
            <div class="flex md:justify-center sm:justify-center">
                <a href="login_page/login.html" class="text-yellow-700 btn border-yellow-600 md:border-2 hover:bg-yellow-600 hover:text-white transition ease-in duration-500">Log in</a>
                <a href="signup_page/singup.html" class="text-yellow-700 ml-2 btn border-yellow-600 md:border-2 hover:bg-yellow-600 hover:text-white transition ease-in duration-500">Sign up</a>
            </div>
            <header>
                <h2 class="text-gray-800 text-6xl font-semibold">Recipes</h2>
                <h3 class="text-3xl font-semibold">For ninjas</h3>
            </header>
            <div>
                <h4 class="font-bold mt-10 pb-4 border-b border-gray-700">Latest Recipes</h4>
                <div class="grid lg:grid-cols-1 gap-6">
                    <div class="mt-10 card hover:shadow-lg transition ease-in duration-300 border-x-slate-100">
                        <img src="img/img_cuisine.jpg" alt="description" id="idImage" class="w-1 h-28 sm:h-36 object-center">
                    </div>
                </div>
                <div class="mt-8 grid lg:grid-cols-3 gap-10">
                    <div class="card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 border-x-slate-300">
                        <!-- cards -->
                        <img src="img/img_cuisine.jpg" alt="cuisine" class="w-full h-40 sm:h-48 lg:h-56 object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 bean chilli stews</span>
                            <span class="block text-zink-500 text-sm mb-4">Recipe by mario</span>
                            <div class="flex m-4">                            
                                <button class=" btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                    <span>Add</span>  
                                    <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>                                 
                                </button>
                                <button class="btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                    <span>See</span> 
                                    <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>                                  
                                </button>
                            </div>
                        </div>
                        <div class="badge">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 border-x-slate-300">
                        <!-- cards -->
                        <img src="img/img_cuisine3.jpg" alt="cuisinier" class="w-full h-40 sm:h-48 lg:h-56 object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 bean cooker very nice</span>
                            <span class="block text-zink-500 text-sm">Recipe by mario</span>
                        </div>
                        <div class="flex m-4">                            
                            <button class=" btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>Add</span>  
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>                                 
                            </button>
                            <button class="btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>See</span> 
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>                                  
                            </button>
                        </div>
                        <div class="badge">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 border-x-slate-300">
                        <!-- cards -->
                        <img src="img/img_cuisine4.jpg" alt="cuisinier 3" class="w-full h-40 sm:h-48 lg:h-56 object-cover">
                        <div class="m-4">
                            <span class="font-bold">A cooker man</span>
                            <span class="block text-zink-500 text-sm">Recipe by mario</span>
                        </div>
                        <div class="flex m-4">                            
                            <button class=" btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>Add</span>  
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>                                 
                            </button>
                            <button class="btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>See</span> 
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>                                  
                            </button>
                        </div>
                        <div class="badge">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>

                </div>

                <div class="mt-8 grid lg:grid-cols-3 gap-10">
                    <div class="card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 border-x-slate-300">
                        <!-- cards -->
                        <img src="img/recipes/pizza_pockets_09013_16x9.jpg" alt="cuisine" class="w-full h-40 sm:h-48 lg:h-56 object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 bean chilli stews</span>
                            <span class="block text-zink-500 text-sm">Recipe by mario</span>
                        </div>
                        <div class="flex m-4">                            
                            <button class=" btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>Add</span>  
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>                                 
                            </button>
                            <button class="btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>See</span> 
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>                                  
                            </button>
                        </div>
                        <div class="badge">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 border-x-slate-300">
                        <!-- cards -->
                        <img src="img/recipes/Pepperoni-Pizza-Pockets-gog-1.jpg" alt="cuisinier" class="w-full h-40 sm:h-48 lg:h-56 object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 bean cooker very nice</span>
                            <span class="block text-zink-500 text-sm">Recipe by mario</span>
                        </div>
                        <div class="flex m-4">                            
                            <button class=" btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>Add</span>  
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>                                 
                            </button>
                            <button class="btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>See</span> 
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>                                  
                            </button>
                        </div>
                        <div class="badge">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <div class="card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 border-x-slate-300 mt-4">
                        <!-- cards -->
                        <img src="img/recipes/1615916524567.jpeg" alt="cuisinier 3" class="w-full h-40 sm:h-48 lg:h-56 object-cover">
                        <div class="m-4">
                            <span class="font-bold">A cooker man</span>
                            <span class="block text-zink-500 text-sm">Recipe by mario</span>
                        </div>
                        <div class="flex m-4">                            
                            <button class=" btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>Add</span>  
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>                                 
                            </button>
                            <button class="btn flex bg-yellow-700 rounded-xl text-yellow-500 py-2 hover:shadow-xl transform hover:scale-110 transition ease-in duration-500">
                                <span>See</span> 
                                <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>                                  
                            </button>
                        </div>
                        <div class="badge">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>

                </div>
                <h4 class="font-bold mt-10 pb-4 border-b border-gray-700">Most popular</h4>
                <div class="mt-8">
                    <!-- cards yeah-->
                </div>
                <div class="flex justify-center">
                    <div class=" btn bg-slate-300 text-black hover:shadow-inner transform hover:scale-110 hover:bg-slate-400 transition ease-in duration-500">Load more</div>
                </div>
            </div>
        </main>
    </div>
    <script src="index.js"></script>
</body>
</html>