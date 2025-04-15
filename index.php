<?php include('includes/header.php'); ?>

<main class="p-0">
        <!-- Slider Section -->
        <section class="relative w-full overflow-hidden" x-data="{ current: 0, images: ['assets/img/uei-slider1.jpg', 'assets/img/uei-slider2.jpg', 'assets/img/uei-slider3.jpg'], interval: null }" x-init="interval = setInterval(() => current = (current + 1) % images.length, 5000)" style="height: 600px;">
            <template x-for="(img, index) in images" :key="index">
                <div x-show="current === index" class="absolute inset-0 transition-opacity duration-1000" x-transition:enter="ease-out duration-1000" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <img :src="img" alt="Slider" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                </div>
            </template>
            <div class="absolute z-10 w-full h-full flex flex-col justify-center items-center text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-orange-500 via-yellow-400 to-cyan-400 bg-clip-text text-transparent">UNIVERSITÉ D'ÉTÉ INTERNATIONALE - PARIS</h1>
                <p class="text-xl md:text-2xl mb-8">Un programme d’excellence pour former les leaders haïtiens de demain.</p>
                <div class="flex flex-col md:flex-row gap-4">
                    <a href="#" class="bg-[#001F3F] text-white px-6 py-3 rounded hover:bg-orange-500 transition text-lg">Découvrir le programme</a>
                    <a href="#" class="bg-white text-[#001F3F] border border-[#001F3F] px-6 py-3 rounded hover:bg-orange-500 hover:text-white transition text-lg">Pré-Inscription</a>
                </div>
            </div>
        </section>

        <section class="bg-white w-full py-6 px-4 border-b border-blue-700/30 mt-10">
  <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-center gap-8">

    <!-- Bloc gauche : Logo UEI + texte -->
    <div class="flex flex-col items-center">
  <img src="assets/img/logo-uei.png" alt="Logo UEI" class="h-24 w-auto">
  <span class="text-gray-700 text-sm mt-1"><span class="font-bold">PARIS</span> &bull; Juillet 2025</span>
</div>

    <!-- Séparateur vertical -->
    <div class="hidden md:block w-px h-12 bg-blue-700/30"></div>

    <!-- Bloc droit : Texte violet + logos partenaires -->
    <div class="flex flex-col items-center md:items-start">
      <p class="text-purple-700 font-semibold text-sm mb-2 text-center md:text-left uppercase">
        L’Université d’Été Internationale est supportée par :
      </p>
      <div class="flex items-center gap-6">
  <img src="assets/img/bacoz.png" alt="Partenaire 1" class="h-14 md:h-20 w-auto">
  <img src="assets/img/cci.jpg" alt="Partenaire 2" class="h-14 md:h-20 w-auto">
  <img src="assets/img/cci-no.jpg" alt="Partenaire 3" class="h-14 md:h-20 w-auto">
</div>
  </div>
</section>


<section class="bg-cover bg-no-repeat bg-center md:bg-right bg-fixed border-b border-blue-700/30 py-20 px-4" style="background-image: url('assets/img/abt-bg.jpg');">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">

    <!-- Image section -->
    <div class="relative w-full md:w-2/5 flex justify-center">

      <!-- Image avec bord arrondi -->
      <img src="assets/img/uei-about.png" alt="Étudiante UEI"
     class="relative z-10 rounded-[50px] w-[450px] h-auto object-cover transition-all duration-500 ease-in-out hover:scale-105">

    </div>

    <!-- Texte -->
    <div class="w-full md:w-3/5 text-center md:text-left md:pr-6">
      <h2 class="text-3xl md:text-6xl font-bold text-blue-700 mb-4">Qui sommes-nous ?</h2>
      <p class="text-base md:text-2xl text-blue-800 leading-relaxed">
        <span class="font-bold text-fuchsia-700">L'Université d'Été Internationale (UEI)</span>
        est une initiative organisée par Campus International, visant à offrir une expérience éducative immersive à un
        groupe sélectionné de jeunes étudiants universitaires haïtiens. L’édition 2025 se tiendra en France et mettra
        l’accent sur le développement durable, l’éthique publique et la coopération internationale.
      </p>

      <a href="#" class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-full text-sm shadow transition duration-300">
        en savoir plus...
      </a>
    </div>

  </div>
</section>

<section
  id="call-action"
  class="section-area !bg-primary !text-primary-color"
>
  <div class="container">
    <div class="scroll-revealed text-center max-w-[550px] mx-auto">
      <h2 class="mb-8 text-inherit">
        Façonnons ensemble l'avenir d'Haïti
      </h2>
      <p class="text-base md:text-lg">
        L'UEI 2025 offre une opportunité unique de devenir un acteur du changement.
        Développez vos compétences en développement durable, éthique publique et
        coopération internationale, et contribuez à construire un avenir meilleur
        pour Haïti.
      </p>
      <a
        href="javascript:void(0)"
        class="inline-block px-5 py-3 rounded-md mt-11 bg-green-400 text-white hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white"
        role="button"
        >Inscrivez-vous maintenant</a
      >
    </div>
  </div>
</section>


<section id="about" class="section-area">
  <div class="container">
    <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
      <div class="w-full">
        <figure class="scroll-revealed max-w-[480px] mx-auto">
          <img src="./assets/img/uei-know-more.png" alt="About image" class="rounded-xl" />
        </figure>
      </div>

      <div class="w-full">
        <div class="scroll-revealed">
          <h6 class="mb-2 block text-3xl md:text-6xl font-semibold text-primary">
          Découvrez Campus International & UEI 2025
          </h6>
        </div>

        <div class="tabs scroll-revealed">
          <nav class="tabs-nav flex flex-wrap gap-4 my-8" role="tablist" aria-label="À propos de nous">
            <button type="button" class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color" data-web-toggle="tabs" data-web-target="tabs-panel-campus" id="tabs-list-campus" role="tab" aria-controls="tabs-panel-campus">
              Campus International
            </button>

            <button type="button" class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color" data-web-toggle="tabs" data-web-target="tabs-panel-mission" id="tabs-list-mission" role="tab" aria-controls="tabs-panel-mission">
              Notre Mission et Vision
            </button>

            <button type="button" class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color" data-web-toggle="tabs" data-web-target="tabs-panel-programme" id="tabs-list-programme" role="tab" aria-controls="tabs-panel-programme">
              Découvrez le Programme et ses Objectifs
            </button>
          </nav>

          <div class="tabs-content mt-4" id="tabs-panel-campus" tabindex="-1" role="tabpanel" aria-labelledby="tabs-list-campus">
            <p>
              Campus International est une plateforme éducative innovante dédiée à la
              formation de jeunes talents haïtiens dans des domaines clés du
              développement durable, de l'éthique publique, de la coopération
              internationale, de l'entrepreneuriat social et des droits de
              l'homme. Nous nous positionnons comme un acteur central
              dans l'amélioration de l'accès à une éducation de qualité, la
              promotion du leadership responsable, ainsi que l'internationalisation
              des expériences éducatives.
            </p>
            <a href="javascript:void(0)" class="know-more-button inline-block px-5 py-3 rounded-md mt-4 bg-purple-500 text-white hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white" role="button">En savoir plus</a>

          </div>

          <div class="tabs-content mt-4" id="tabs-panel-mission" tabindex="-1" role="tabpanel" aria-labelledby="tabs-list-mission">
            <p>
              Notre mission est de bâtir un avenir meilleur, non seulement pour
              Haïti, mais aussi pour l'ensemble des jeunes issus de contextes en
              développement, en les dotant des outils nécessaires pour devenir des
              leaders éclairés et des agents de changement dans leurs communautés
              respectives.
            </p>
            <p>
              Notre vision est de faire émerger une nouvelle génération de jeunes
              leaders capables de contribuer efficacement à la construction de
              sociétés durables, inclusives, démocratiques et prospères, en
              mettant l'accent sur l'éthique et la coopération internationale.

            </p>
             <a href="javascript:void(0)" class="know-more-button inline-block px-5 py-3 rounded-md mt-4 bg-purple-500 text-white hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white" role="button">En savoir plus</a>
          </div>

          <div class="tabs-content mt-4" id="tabs-panel-programme" tabindex="-1" role="tabpanel" aria-labelledby="tabs-list-programme">
            <p>
              L'UEI 2025 ambitionne d'offrir aux jeunes universitaires haïtiens
              un cadre stimulant pour approfondir leurs connaissances et développer
              leur réseau international. Elle vise également à favoriser
              le dialogue et les coopérations académiques entre les Institutions
              d'Enseignement haïtiennes et d'autres institutions internationales.

            </p>
            <p>
              Le programme a aussi pour but de sensibiliser les participants aux
              enjeux contemporains en lien avec le développement durable, l'éthique
              publique, et la coopération internationale, et d'encourager la
              participation des étudiants à des initiatives internationales et
              promouvoir la mobilité académique.
            </p>
             <a href="javascript:void(0)" class="know-more-button inline-block px-5 py-3 rounded-md mt-4 bg-purple-500 text-white hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white" role="button">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Thématiques Section -->
<section class="bg-blue-50 py-16 px-4 border-b border-blue-700/30">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Nos Thématiques</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-50 shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <img src="assets/img/uei-dd.svg" class="w-16 h-16 mx-auto mb-4" alt="Eco Icon">
          <h3 class="font-semibold text-xl mb-2">Développement Durable</h3>
          <p>Formation sur la protection de l'environnement, les ressources naturelles et l'agriculture écologique.</p>
        </div>
        <div class="bg-gray-50 shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <img src="assets/img/uei-ep.svg" class="w-16 h-16 mx-auto mb-4" alt="Ethique Icon">
          <h3 class="font-semibold text-xl mb-2">Éthique Publique</h3>
          <p>Apprendre à promouvoir la bonne gouvernance, la transparence et la responsabilité publique.</p>
        </div>
        <div class="bg-gray-50 shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <img src="assets/img/uei-ci.svg" class="w-16 h-16 mx-auto mb-4" alt="Cooperation Icon">
          <h3 class="font-semibold text-xl mb-2">Coopération Internationale</h3>
          <p>Renforcer les compétences en diplomatie, gestion de projets et relations internationales.</p>
        </div>
      </div>
    </div>
  </section>

  
  


 <!-- FAQ section -->
 <section id="faq" class="section-area relative">
 <div class="container">
  <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
    <h6 class="mb-2 block text-lg font-semibold text-primary">FAQ</h6>
    <h2 class="mb-6">
      Questions Fréquentes
    </h2>
    <p>
      Trouvez les réponses aux questions les plus courantes sur l'UEI 2025.
    </p>
  </div>

  <div class="grid gap-x-8 gap-y-12 grid-cols-1 lg:grid-cols-2">
    <div class="scroll-revealed flex">
      <div
        class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
      >
        <i class="lni lni-question-circle"></i>
      </div>
      <div class="w-full">
        <h3
          class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
        >
          Qu'est-ce que l'Université d'Été Internationale (UEI) 2025 ?
        </h3>
        <p class="text-body-light-11 dark:text-body-dark-11">
          L'UEI 2025 est une initiative organisée par Campus International,
          offrant une expérience éducative immersive à de jeunes étudiants
          universitaires haïtiens en France. Elle met l'accent sur le
          développement durable, l'éthique publique et la coopération
          internationale.
        </p>
      </div>
    </div>

    <div class="scroll-revealed flex">
      <div
        class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
      >
        <i class="lni lni-question-circle"></i>
      </div>
      <div class="w-full">
        <h3
          class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
        >
          Pourquoi le développement durable est-il important pour Haïti ?
        </h3>
        <p class="text-body-light-11 dark:text-body-dark-11">
          Le développement durable est crucial pour Haïti en raison des défis
          économiques et environnementaux considérables, des catastrophes
          naturelles fréquentes et des menaces sur les ressources naturelles.
        </p>
      </div>
    </div>

    <div class="scroll-revealed flex">
      <div
        class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
      >
        <i class="lni lni-question-circle"></i>
      </div>
      <div class="w-full">
        <h3
          class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
        >
          Quels sont les thèmes clés de l'UEI 2025 ?
        </h3>
        <p class="text-body-light-11 dark:text-body-dark-11">
          Les thèmes clés de l'UEI 2025 sont le développement durable,
          l'éthique publique et la coopération internationale.
        </p>
      </div>
    </div>

    <div class="scroll-revealed flex">
      <div
        class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
      >
        <i class="lni lni-question-circle"></i>
      </div>
      <div class="w-full">
        <h3
          class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
        >
          Où et quand se déroulera l'UEI 2025 ?
        </h3>
        <p class="text-body-light-11 dark:text-body-dark-11">
          L'UEI 2025 se déroulera en France en juillet 2025.
        </p>
      </div>
    </div>

    <div class="scroll-revealed flex">
      <div
        class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
      >
        <i class="lni lni-question-circle"></i>
      </div>
      <div class="w-full">
        <h3
          class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
        >
        Qui peut postuler ?

        </h3>
        <p class="text-body-light-11 dark:text-body-dark-11">
        Tout étudiant haïtien inscrit dans un établissement d'enseignement supérieur.
        </p>
      </div>
    </div>
  </div>
</div>

        <div>
          <span class="absolute left-5 top-5 -z-[1]">
            <svg
              class="w-20 h-auto fill-teal-500"
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="1280.000000pt"
              height="1280.000000pt"
              viewBox="0 0 1280.000000 1280.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                stroke="none"
              >
                <path
                  d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
              </g>
            </svg>
          </span>
          <span class="absolute right-5 bottom-5 -z-[1]">
            <svg
              class="w-20 h-auto fill-indigo-500"
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="1280.000000pt"
              height="1280.000000pt"
              viewBox="0 0 1280.000000 1280.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                stroke="none"
              >
                <path
                  d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
              </g>
            </svg>
          </span>
        </div>
      </section>
      

      <section class="py-8 bg-gray-100 border-t border-blue">
  <div class="container mx-auto">
    <h2 class="text-2xl font-bold text-center mb-6">Nos Partenaires</h2>
    <div class="flex justify-center items-center flex-wrap">
      <div class="w-48 h-24 m-4 flex items-center justify-center bg-white rounded-lg shadow-md">
        <img src="assets/img/ci.jpg" alt="Partner CI" class="max-h-16 max-w-full object-contain" />
      </div>
      <div class="w-48 h-24 m-4 flex items-center justify-center bg-white rounded-lg shadow-md">
        <img src="assets/img/bacoz.png" alt="Partner BacoZ" class="max-h-16 max-w-full object-contain" />
      </div>
      <div class="w-48 h-24 m-4 flex items-center justify-center bg-white rounded-lg shadow-md">
        <img src="assets/img/cci.jpg" alt="Partner CCI" class="max-h-16 max-w-full object-contain" />
      </div>
      <div class="w-48 h-24 m-4 flex items-center justify-center bg-white rounded-lg shadow-md">
        <img src="assets/img/cci-no.jpg" alt="Partner CCI-NO" class="max-h-16 max-w-full object-contain" />
      </div>
    </div>
  </div>
</section>

     

  

      <footer class="bg-primary-dark-2 text-white">
  <div class="container py-20 lg:py-[100px]">
    <div class="row">
      <div class="col-12 order-first lg:col-4">
        <div class="w-full">
          <div class="flex items-center flex-shrink-0">
            <img src="assets/img/logo-uei.svg" alt="UEI Logo" class="h-20" />
          </div>

          <p class="mb-8 text-body-dark-11">
            L'Université d'Été Internationale (UEI) est une initiative de Campus
            International qui offre une expérience éducative immersive en
            France.
          </p>

          <div class="-mx-3 flex items-center">
            <a
              href="javascript:void(0)"
              class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none"
            >
              <i class="lni lni-facebook-fill"></i>
            </a>

            <a
              href="javascript:void(0)"
              class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none"
            >
              <i class="lni lni-twitter-original"></i>
            </a>

            <a
              href="javascript:void(0)"
              class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none"
            >
              <i class="lni lni-instagram-original"></i>
            </a>

            <a
              href="javascript:void(0)"
              class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none"
            >
              <i class="lni lni-linkedin-original"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-6 lg:col-2">
        <div class="w-full">
          <h4 class="mb-9 text-lg font-semibold text-inherit">Programmes</h4>
          <ul>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Développement Durable</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Éthique Publique</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Coopération Internationale</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Entrepreneuriat Social</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Droits de l'Homme</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-6 lg:col-2">
        <div class="w-full">
          <h4 class="mb-9 text-lg font-semibold text-inherit">
            À Propos de Nous
          </h4>
          <ul>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Qui Sommes-Nous</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Notre Mission</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Notre Vision</a
              >
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                >Nos Partenariats</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 -order-3 lg:col-4 lg:order-1">
        <div class="w-full">
          <h4 class="mb-9 text-lg font-semibold text-inherit">
            Inscrivez-vous
          </h4>

          <p class="text-body-dark-11">
            Abonnez-vous à notre newsletter pour les dernières mises à jour
          </p>

          <form action="#" method="POST" target="_blank" class="mt-8 flex">
            <input
              type="email"
              name="email"
              class="inline-block flex-grow px-5 py-3 rounded-md rounded-e-none border border-solid border-alpha-dark text-inherit text-base focus:border-primary"
              placeholder="Adresse e-mail"
              required
            />

            <button
              type="submit"
              class="inline-block py-3 w-[50px] rounded-md rounded-s-none text-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10"
            >
              <i class="lni lni-envelope"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full border-t border-solid border-alpha-dark"></div>
  <div class="container py-8">
    <div class="flex flex-wrap">
      <div class="w-full md:w-1/2">
        <div class="my-1">
          <div class="flex flex-wrap justify-center gap-x-3 md:justify-start">
            <a
              href="javascript:void(0)"
              class="text-body-dark-11 hover:text-body-dark-12"
              >Politique de Confidentialité</a
            >
            <a
              href="javascript:void(0)"
              class="text-body-dark-11 hover:text-body-dark-12"
              >Mentions Légales</a
            >
            <a
              href="javascript:void(0)"
              class="text-body-dark-11 hover:text-body-dark-12"
              >Conditions d'Utilisation</a
            >
          </div>
        </div>
      </div>

      <div class="w-full md:w-1/2">
        <div class="my-1 flex justify-center md:justify-end">
          <p class="text-body-dark-11">
            &#169; 2024 Campus International. Tous droits réservés.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>



</main>



    <script>

      // Tabs
const tabs = document.querySelectorAll(".tabs");

tabs.forEach((tab) => {
  const links = tab.querySelectorAll(".tabs-nav .tabs-link"),
    contents = tab.querySelectorAll(".tabs-content");

  if (!contents) {
    return;
  }

  window.addEventListener("load", function () {
    for (let i = 0; i < contents.length; i++) {
      contents[i].classList.add("hide");
    }

    for (let i = 0; i < links.length; i++) {
      links[i].classList.remove("active");
      links[i].ariaSelected = false;
    }

    links[0].classList.add("active");
    links[0].ariaSelected = true;

    const dataTarget = links[0].dataset.webTarget,
      targetElement = this.document.getElementById(dataTarget);

    targetElement.classList.remove("hide");
  });

  links.forEach((link) => {
    const dataTarget = link.dataset.webTarget,
      targetElement = document.getElementById(dataTarget);

    if (targetElement) {
      link.addEventListener("click", function () {
        for (let i = 0; i < contents.length; i++) {
          contents[i].classList.add("hide");
        }

        for (let i = 0; i < links.length; i++) {
          links[i].classList.remove("active");
          links[i].ariaSelected = false;
        }

        link.classList.add("active");
        link.ariaSelected = true;
        targetElement.classList.remove("hide");
      });
    } else {
      link.disabled = true;
    }
  });
});
        // Script pour le menu responsive
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
