<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imbue:opsz,wght@10..100,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="img/icon_circle.png">
    
    <title>Vilsol</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300;400;500;600;700&display=swap');
    .fonte{
        font-family: "Cormorant Unicase", serif;
        /* font-optical-sizing: auto; */
        font-weight: 700;
        font-style: normal;
    }
</style>

<body class="bg-[#212121] w-full ">
    <!-- HEADER -->
        <div class="bg-[#111111] py-2 flex justify-around content-between border-b border-purple-700 shadow-2xl">    
            <div class="flex h-14 align-middle relative items-center" >
                <img src="prime.png" class="w-14" alt=""><!-- <h1 class=" text-4xl  text-bold text-purple-100">PRIME</h1> --><!-- <img src="Prime.jpeg" alt=""> -->
            </div>
            <div class="font-bold text-md md:flex sm:hidden items-center hidden xl:flex gap-10">
                <li class="flex list-none hover:text-purple-200 text-white transition-all before:top-12 before:content[''] before:hover:w-16 before:transition-all before:absolute before:duration-500 before:w-0 before:h-0.5 before:r-0 before:b-0 before:bg-purple-500"><a href="">Home <i class="fa-solid fa-house"></i></a></li>
                <li class="flex list-none hover:text-purple-200 text-white transition-all before:top-12 before:content[''] before:hover:w-16 before:transition-all before:absolute before:duration-500 before:w-0 before:h-0.5 before:r-0 before:b-0 before:bg-purple-500"><a href="">Sobre</a></li>
                <li class="flex list-none hover:text-purple-200 text-white transition-all before:top-12 before:content[''] before:hover:w-16 before:transition-all before:absolute before:duration-500 before:w-0 before:h-0.5 before:r-0 before:b-0 before:bg-purple-500"><a href="">Planos</a></li>
                <!-- <li class="flex list-none hover:text-purple-200 text-white transition-all before:top-14 before:content[''] before:hover:w-9 before:transition-all before:absolute before:duration-500 before:w-0 before:h-0.5 before:r-0 before:b-0 before:bg-purple-500"><a href="">Baixe</a></li> -->
                <div class="bg-purple-300  hover:bg-transparent hover:border hover:border-purple-300 hover:text-purple-300 rounded-sm px-3 py-1 cursor-pointer">
                    <i class="fa-regular fa-user"></i>
                    <input  class="cursor-pointer" type="submit" value="Entrar">
                </div>
            </div>
            
            <button class="sm:duration-500 w-full inline-flex sm:inline-flex md:hidden xl:hidden mt-5 flex-col gap-1.5">
                <li class="before:w-6 before:h-0.5 before:bg-purple-100 flex before:content[''] before: list-none text-white"></li>
                <li class="before:w-6 before:h-0.5 before:bg-purple-100 flex before:content[''] before: list-none text-white"></li>
                <li class="before:w-6 before:h-0.5 before:bg-purple-100 flex before:content[''] before: list-none text-white"></li>
                
                <ul class="pb-8 hidden space-y-4 x-screen bg-[#252525] sm:flex absolute sm:justify-center sm:flex-col w-full -top-0 sm:absolute right-0 duration-150">
                    <div class="h-4"> 
                        <div class="top-2 w-6 h-0.5 rotate-45 absolute bg-white mt-2 mr-2 -top-0 right-0"></div>
                        <div class="top-2 w-6 h-0.5 -rotate-45 absolute bg-white mt-2 mr-2 -top-0 right-0"></div>
                    </div>
                    <li class="hover:bg-[#383838] text-white flex justify-center w-full py-4 ">Home</li>
                    <li class="hover:bg-[#383838] text-white flex justify-center w-full py-4 ">Sobre</li>
                    <li class="hover:bg-[#383838] text-white flex justify-center w-full py-4 ">Planos</li>
                </ul>
            </button>
        </div>

        <div class="w-full mt-48 flex align-middle h-full justify-center">
            <div class="w-2/5 p-12 text-white text-xl bg-[#272727] rounded-l-xl shadow-2xl">
                <h1 class="font-bold text-6xl  text-purple-500">Prime</h1>
                <div class="font-bold text-lg mt-3 pl-1" >
                    Investir com inteligência
                </div>
                <div class="font-bold text-lg pl-1">
                    crescer com confiança.
                </div>
                <div class="mt-10">
                    <h2 class="4/5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat optio nostrum aut qui exercitationem laborum possimus mod.
                    </h2>
                    <h3 class="mb-2 mt-12 text-3xl">Ainda não é <span class="text-purple-300">Prime?</span></h3>
                    <h4 class="text-md">Registre-se e conheça seu real potencial.</h4>
                    <a class="w-36 my-3 mt-10 flex text-center justify-center py-2 font-bold rounded-xl hover:bg-gradient-to-r hover:from-purple-900 hover:border hover:border-purple-800 hover:to-blue-900 bg-gradient-to-r from-purple-700 to-blue-700 shadow-2xl" href="">Registrar-se</a>
                </div>
            </div>
                <div class="flex items-center bg-[#272727] rounded-r-xl shadow-r-2xl shadow-t-2xl">
                    <img src="sammy.png" class=" items-center pr-3" alt="">
                </div>
        </div>
    </body>
</html>