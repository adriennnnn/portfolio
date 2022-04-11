<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>portdolio Adrien</title>
    <link rel="icon" href="./data/téléchargementPOrtfolio.png" type="image/x-icon">
</head>

<body class="bg-gradient-to-r from-cyan-200 to-purple-400">
    <!-- header v deux  -->
    <header id="home" class="" id="navbar">
        <ul class="flex flex-row-reverse m-5">
            <!-- <li class="mx-5 text-2xl hover: font-mono H__menu"><a href="./data/CV-ADRIEN6THOMAS.jpg" target="_blank">CV</a></li> -->
            <li class="mx-5 text-2xl hover: font-mono H__menu"><a href="#home">Home</a></li>
            <li class="mx-5 text-2xl hover: font-mono H__menu"><a href="#about">À Propos</a></li>
            <li class="mx-5 text-2xl hover: font-mono H__menu"><a href="#projects">Projets</a></li>

        </ul>
    </header>
    <a id="button"></a>
    <!-- premier partie en deux colonne -->
    <div class="grid grid-cols-6 gap-4 my-20 ">
        <div class="col-start-2 col-end-4 text-center ">
            <p class="home__greetings mb-4">Hello I'm</p>
            <h1 class="text-left m-1  font-semibold text-7xl HV ">Adrien<br>THOMAS</h1>
            <h2 class="text-left my-4 font-medium text-3xl">Dev. Back & Front-End</h2>
            <!-- <h2 class="text-left my-4 font-medium text-2xl">Contacte par e-mail ;</h2> -->
            <div class="grid grid-cols-2 ">
                <h2 class="E-mail" onclick="copyFunction()"> adrienthomas54@gmail.com</h2>
                <button type="button" data-copy-state="copy" onclick="copyFunction()"
                    class="flex items-center px-3 py-2 ml-16 mr-10 text-xs font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 copy-to-clipboard-button">
                    <svg class="w-4 h-4 mr-2 text-center" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg> <span class="copy-text item-center">Copier</span>
                </button>
            </div>

        </div>
        <div class="col-end-6 col-span-2 text-center">
            <figure class="home__figure">
                <img class="rounded-3" src="./data/adrien.jpg" alt="my figure pixel" />
            </figure>

        </div>
    </div>
    <br><br>
    <div class="grid grid-cols-6 gap-4 my-20" id="about">
        <div class="col-start-2 col-end-3 text-center">
            <img src="./data/framework2.png" alt="jsp">
        </div>
        <div class="col-start-3 col-end-6 text-center">
            <h1 class="text-left ml-10 mb-5 text-3xl font-medium text-gray-600">À propos de moi</h1>
            <p class="text-left text-gray-700 text-lg"> Bonjour, je m'appelle Adrien, développeur back/front-end basé en français.
                Et j'adore ♥️ construire des sites web et les personnaliser !
            </p>
            <h3 class="text-left ml-10 mb-5 mt-5 text-2xl font-medium text-gray-600">compétence</h3>

            <!-- alternative -->
            <div class="text-left">
                <h2 class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-lime-600">
                    skill html
                </h2>
            </div>
            <div class="m-2 w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="bg-sky-700 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width:80%"> 80%</div>
            </div>
            <div class="text-left">
                <h2
                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-lime-600    ">
                    skill css
                </h2>
            </div>
            <div class="m-2 w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="bg-sky-700 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 80%"> 80%</div>
            </div>
            <div class="text-left">
                <h2
                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-lime-600    ">
                    skill js
                </h2>
            </div>
            <div class="m-2 w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="bg-sky-700 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 25%"> 25%</div>
            </div>
            <div class="text-left">
                <h2
                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-lime-600    ">
                    skill php
                </h2>
            </div>
            <div class="m-2 w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="bg-sky-700 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 60%"> 60%</div>
            </div>
        </div>
    </div>
    <h1 class="text-center font-medium text-gray-600 text-3xl mt-10" id="projects">Quelques Projets</h1>
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 m-24 mt-5">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-lg overflow-hidden mb-10 shadow-2xl">
                        <img src="./data/instaclone.png" alt="image" class="w-full" />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                            <h3>
                                <a href="" class=" font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary
                             ">
                                    Créer un petit Instagram </a>
                            </h3>
                            <p class="text-justify text-body-color leading-relaxed mb-7">
                                J'ai essaiyer de reproduire un site similaire a instagram dans la forme. Mais avec un nombre de 
                                fonctionnalités restreintes, connexion et création du compte(si pseudo non existant), 
                                barre de recherche, publication de poste et un profil personnalisable
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                                Voir plus
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-lg overflow-hidden mb-10 shadow-2xl">
                        <img src="./data/memory-game.png" alt="image" class="w-full" />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                            <h3>
                                <a href="https://adriennnnn.github.io/memory/"
                                    class=" font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                                    Créer un jeu de mémoire
                                </a>
                            </h3>
                            <p class="text-justify text-body-color leading-relaxed mb-7">
                                creation d'un jeu de mémoire simple en POO JS, dans le but 
                                de m'initier à la Programmmation Orientée Object en JS. 
                            </p>
                            <a href="https://adriennnnn.github.io/memory/"
                                class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                                Voir plus
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-lg overflow-hidden mb-10 shadow-2xl">
                        <img src="./data/drumpad.png" alt="image"
                            class="w-full" />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                            <h3>
                                <a href="javascript:void(0)"
                                    class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                                    Créer un drum-pad simple
                                </a>
                            </h3>
                            <p class="text-justify text-body-color leading-relaxed mb-7">
                                Création d'un drumpad pour débuter mon apprentissage en JS. A l'aide d'écouteurs
                                d'événements liés à des boutons ou à des touches du clavier, ainsi que l'intégration 
                                de sons dans le code. 
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                                Voir plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- hors de la partie divisier en deux colone -->

    <div class="social-menu">
        <ul>
            <li><a href="https://github.com/adriennnnn/" target="blank"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAACcUlEQVRYR+2WT8gMYRzHv79hzBwcEOp1k4sau7XzEKXcFJJX1HsR5SBJiJSSmyTvwemlcJGTPzeRolzkwPbMztbOS9q3Vvay5d20KbPZmZ9Gs7VN3npmJmvVzGUu3+98P31/v2efJUz4QxPOhwIw74SKBosG8zaQ11/sYNHgUg0IIQ4y8y4ieiSlrAIIl9BSqVTaqOv6UQADx3FuRG/VZrPu4HIhxE0AZ+Kgl8w8T0TbAGxiZgPAAhFVmXkNER0CoAN4FQTBjOu638YNqJo3NkCybfsiEc2qkkU6Zr7f7XZPtVotX9WXacS2bZcBvCCiDapBse4ngCNSyieqvqyAl4nommpIQvdgcXHxpGqLqQEty1phGMYcEZ3ICPgOwH4p5VcVf2pAAMkTrJIzqnnr+/4Bz/O6KsYsgBBCXAVwRSXgD5q/O+Io0LbtPUT0NP5tS8t5Wkp5W9WUqUHLslaapnkLwDHVoFhX6/f7041G44uqLxNg9PFyubxe1/W7AKYVw7wgCI67rhtdi8pPKkAhRHRdnQ3DsFqr1d4AWFapVHZqmnYYwG4AmxPJHwG8B/C40+m8brfbP5TJYmEqwMgjhJhi5lkieiilfD78jhDiEoDrowDMfKfX651rNpv9tGBDfWrA+JDsIKILYRjOaZo2D2AKwD0A2xMgC4PBYF+9Xv80VkAA0V08Q0Tnmfk7EYXMvJWIVica/Axgr+M4H8YN+DsvOs2GYWwBsC6++koTBTiEEUKsBfAsOWJm/rcN/jeAADTLslaZpqmNjtj3/dDzvF6av/jJXc10irMufBZfAZiltVFP0WDRYN4G8vqLHczb4C/7mOIpIkOZIwAAAABJRU5ErkJggg=="></a>
            </li>
            <!-- <li><a href="https://www.instagram.com/adrthms/" target="blank"><svg xmlns="http://www.w3.org/2000/svg"
                        x="0px" y="0px" width="32" height="32" viewBox="0 0 32 32" style=" fill:#000000;">
                        <path
                            d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z">
                        </path>
                    </svg></a></li> -->
            <li><a href="https://www.linkedin.com/in/adrien-thomas-08845b229/" target="blank"><svg
                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 32 32"
                        style=" fill:#000000;">
                        <path
                            d="M 7.5 5 C 6.132813 5 5 6.132813 5 7.5 L 5 24.5 C 5 25.867188 6.132813 27 7.5 27 L 24.5 27 C 25.867188 27 27 25.867188 27 24.5 L 27 7.5 C 27 6.132813 25.867188 5 24.5 5 Z M 7.5 7 L 24.5 7 C 24.785156 7 25 7.214844 25 7.5 L 25 24.5 C 25 24.785156 24.785156 25 24.5 25 L 7.5 25 C 7.214844 25 7 24.785156 7 24.5 L 7 7.5 C 7 7.214844 7.214844 7 7.5 7 Z M 10.4375 8.71875 C 9.488281 8.71875 8.71875 9.488281 8.71875 10.4375 C 8.71875 11.386719 9.488281 12.15625 10.4375 12.15625 C 11.386719 12.15625 12.15625 11.386719 12.15625 10.4375 C 12.15625 9.488281 11.386719 8.71875 10.4375 8.71875 Z M 19.46875 13.28125 C 18.035156 13.28125 17.082031 14.066406 16.6875 14.8125 L 16.625 14.8125 L 16.625 13.5 L 13.8125 13.5 L 13.8125 23 L 16.75 23 L 16.75 18.3125 C 16.75 17.074219 16.996094 15.875 18.53125 15.875 C 20.042969 15.875 20.0625 17.273438 20.0625 18.375 L 20.0625 23 L 23 23 L 23 17.78125 C 23 15.226563 22.457031 13.28125 19.46875 13.28125 Z M 9 13.5 L 9 23 L 11.96875 23 L 11.96875 13.5 Z">
                        </path>
                    </svg></a></li>
            <li class="SM-cv"><a href="./data/CV-ADRIEN6THOMAS.jpg" target="blank">CV</li>
        </ul>
    </div>
    <footer class="">

    </footer>
    <script src="main.js"></script>
</body>

</html>
