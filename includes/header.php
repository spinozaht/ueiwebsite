<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UEI | Université d'Été Internationale</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.5/cdn.min.js" defer></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
  <!-- CSS Plugins -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"
    />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <link rel="stylesheet" href="./assets/css/main.css" />
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .text-gradient {
      background: linear-gradient(to right, #ff8c00, #ff6600);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

  </style>
</head>
<body class="bg-white text-[#1E2A78]">

    <header class="shadow-md">
        <nav class="p-4 max-w-7xl mx-auto flex items-center justify-between flex-wrap">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <img src="assets/img/logo-uei.svg" alt="UEI Logo" class="h-20">
            </div>

            <!-- Burger menu -->
            <div class="block md:hidden">
                <button id="menu-btn" class="flex items-center px-3 py-2 border rounded text-[#001F3F] border-[#001F3F] hover:text-orange-500 hover:border-orange-500">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <!-- Menu links -->
            <div id="menu" class="w-full md:flex md:items-center md:w-auto hidden">
                <ul class="pt-4 md:pt-0 md:flex md:space-x-6 text-[#001F3F] font-medium">
                    <li><a href="#" class="block px-2 py-1 hover:text-orange-500 transition">Home</a></li>
                    <li><a href="#" class="block px-2 py-1 hover:text-orange-500 transition">Qui sommes-nous</a></li>
                    <li><a href="#" class="block px-2 py-1 hover:text-orange-500 transition">Objectif</a></li>
                    <li><a href="#" class="block px-2 py-1 hover:text-orange-500 transition">Thématiques</a></li>
                    <li>
                        <a href="#" class="inline-block mt-2 md:mt-0 bg-[#001F3F] text-white px-4 py-2 rounded hover:bg-orange-500 transition">
                            Pré-Inscription
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
