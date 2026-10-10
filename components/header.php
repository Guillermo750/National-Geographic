<!-- MENÚ -->
<body class="m-0 bg-white">
    <!-- BARRA SUPERIOR -->
    <div class="h-11 bg-black">
        <div class="mx-auto h-full max-w-[1028px] flex items-center">
            <!-- Noticias -->
            <div class="flex items-center gap-4 whitespace-nowrap scrollbar-hide px-4 lg:px-0 text-[14px]
                text-white">
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Colmillo narval</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Nobel de la Paz</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Wilhelm Röntgen</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Fotos NASA</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Romanos tormentas</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Corsario Moctezuma</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Borgia</a>
                <a href="#" class="hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">Peste España</a>

                <!-- Login -->
                <a href="#" class="ml-auto flex shrink-0 items-center gap-2 text-natgeo text-[rgb(254,206,0)] transition">
                   <!-- Icono usuario -->
                    <i class="fa-regular fa-circle-user text-2xl"></i>
                    <span>INICIAR SESIÓN</span>
                </a>
            </div>
        </div>
    </div>

    <!-- HEADER PRINCIPAL -->
    <header class="relative z-50 w-full border-t-[3px] border-[rgb(254,206,0)] bg-white">
        <div class="mx-auto flex h-16 w-full max-w-[1028px] items-center px-4 sm:px-5 lg:px-0 gap-3">
            <!-- HAMBURGUESA -->
            <button id="mobileMenuButton" type="button" aria-label="Abrir menú" 
            class="flex h-8 w-7 shrink-0 items-center justify-center lg:mr-4">
                <i class="fa-solid fa-bars text-3xl" style="color: rgb(0, 0, 0);"></i>
            </button>

            <!-- LOGO -->
            <a href="/pages/animales.php" class="block w-28 shrink-0 sm:w-30 lg:w-35"><img src="/logo/logo-white.webp" 
                alt="National Geographic España" class="block h-auto w-full"></a>
            
            <!-- NAVEGACIÓN DESKTOP -->
            <nav id="desktopNavigation" class="ml-7 hidden h-full flex-1 items-center justify-between lg:flex gap-8">
                <!-- CIENCIA -->
                <div class="relative h-full flex items-center">
                    <a href="javascript:void(0)" data-dropdown="ciencia" class="dropdown-button flex items-center gap-1 text-[17px] font-normal
                        cursor-pointer">CIENCIA<i class="fa-solid fa-angle-down text-[rgb(164,164,164)] text-[13px]"></i>
                    </a>
                    <!-- Submenú Ciencia -->
                    <div id="dropdown-ciencia" class="dropdown-menu invisible absolute left-0 top-17.5 z-50 w-57.5 translate-y-2 opacity-0
                        border-t-[3px] bg-white">
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            La tabla periódica</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Planetas del sistema solar</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Marte, el planeta rojo</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Ver todo sobre ciencia</a>
                    </div>
                </div>

                <!-- ANIMALES -->
                <div class="relative h-full flex items-center">
                    <a href="javascript:void(0)" data-dropdown="animales" class="dropdown-button flex items-center gap-1 text-[17px] font-normal
                        cursor-pointer">ANIMALES<i class="fa-solid fa-angle-down text-[rgb(164,164,164)] text-[13px]"></i></a>
                    <!-- Submenú Animales -->
                    <div id="dropdown-animales" class="dropdown-menu invisible absolute left-0 top-17.5 z-50 w-57.5 translate-y-2 opacity-0
                        border-t-[3px] bg-white">
                        <a href="#" class="block px-5 py-3 text-s hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Animales en peligro de extinción</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Mamíferos</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Felinos</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Guía de animales</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Ver todo sobre animales</a>
                    </div>
                </div>

                <!-- MEDIO AMBIENTE -->
                <div class="relative h-full flex items-center">
                    <a href="javascript:void(0)" data-dropdown="medioambiente" class="dropdown-button flex items-center gap-1 text-[17px] font-normal
                        cursor-pointer">MEDIO AMBIENTE<i class="fa-solid fa-angle-down text-[rgb(164,164,164)] text-[13px]"></i></a>
                    <!-- Submenú medioambiente -->
                    <div id="dropdown-medioambiente" class="dropdown-menu invisible absolute left-0 top-17.5 z-50 w-57.5 translate-y-2 opacity-0
                        border-t-[3px] bg-white">
                        <a href="#" class="block px-5 py-3 text-s hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Iniciativas para cambiar el mundo</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Cambio climático</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Everest</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            El problema del plástico</a>
                        <a href="#" class="block px-5 py-3 text-sm hover:underline hover:decoration-zinc-400 hover:underline-offset-4">
                            Ver todo sobre el medio ambiente</a>
                    </div>
                </div>
                <div class="flex gap-6 text-[17px] font-normal tracking-wider uppercase">
                    <a href="#" class="relative pl-4 before:absolute before:left-0 before:top-1/2 before:h-2 before:w-2 before:-translate-y-1/2
                        before:bg-[rgb(254,206,0)] hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">HISTORIA</a>
                    <a href="#" class="relative pl-4 before:absolute before:left-0 before:top-1/2 before:h-2 before:w-2 before:-translate-y-1/2
                        before:bg-[rgb(254,206,0)] hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">VIAJES</a>
                </div>

                <!-- SUSCRÍBETE-->
                <a href="#" class="ml-auto flex h-9 shrink-0 items-center justify-center px-5 text-[15px] font-medium 
                bg-[rgb(254,206,0)] text-black hover:bg-black hover:text-[rgb(254,206,0)] transition
                sm:px-5  lg:ml-5 lg:h-10 lg:px-5">SUSCRÍBETE</a>
            </nav>
        </div>

        <!-- MENÚ MÓVIL -->
        <div id="mobileMenu" class="hidden border-t bg-white lg:hidden">
            <nav class="flex flex-col">
                <!-- Ciencia -->
                <button type="button" data-mobile-dropdown="ciencia-mobile" class="flex items-center justify-between border-b px-5 py-4
                    text-left text-[16px]">CIENCIA<i class="fa-solid fa-angle-down text-[rgb(164,164,164)] text-[13px]"></i></a></button>
                <div id="ciencia-mobile" class="hidden bg-white">
                    <a href="#" class="block px-5 py-3 text-sm">La tabla periódica</a>
                    <a href="#" class="block px-5 py-3 text-sm">Planetas del sistema solar</a>
                    <a href="#" class="block px-5 py-3 text-sm">Marte, el planeta rojo</a>
                    <a href="#" class="block px-5 py-3 text-sm">Ver todo sobre ciencia</a>
                </div>

                <!-- Animales -->
                <button type="button" data-mobile-dropdown="animales-mobile" class="flex items-center justify-between px-5 py-4 text-left 
                    text-[16px]">ANIMALES<i class="fa-solid fa-angle-down text-[rgb(164,164,164)] text-[13px]"></i></a></button>
                <div id="animales-mobile" class="hidden bg-white">
                    <a href="#" class="block px-5 py-3 text-s">Animales en peligro de extinción</a>
                    <a href="#" class="block px-5 py-3 text-sm">Mamíferos</a>
                    <a href="#" class="block px-5 py-3 text-sm">Felinos</a>
                    <a href="#" class="block px-5 py-3 text-sm">Guía de animales</a>
                    <a href="#" class="block px-5 py-3 text-sm">Ver todo sobre animales</a>
                </div>

                <!-- Medio ambiente -->
                <button  type="button" data-mobile-dropdown="medioambiente-mobile" class="flex items-center justify-between px-5 py-4 text-left 
                    text-[16px]">MEDIO AMBIENTE<i class="fa-solid fa-angle-down text-[rgb(164,164,164)] text-[13px]"></i></a></button>
                <div id="medioambiente-mobile" class="hidden bg-white">
                    <a href="#" class="block px-5 py-3 text-s">Iniciativas para cambiar el mundo</a>
                    <a href="#" class="block px-5 py-3 text-sm">Cambio climático</a>
                    <a href="#" class="block px-5 py-3 text-sm">Everest</a>
                    <a href="#" class="block px-5 py-3 text-sm">El problema del plástico</a>
                    <a href="#" class="block px-5 py-3 text-sm">Ver todo sobre el medio ambiente</a>
                </div>

                <!-- Historia -->
                <a href="#" class="border-b border-gray-200 px-5 py-4 text-[16px]">HISTORIA</a>
                <!-- Viajes -->
                <a href="#" class="border-b border-gray-200 px-5 py-4 text-[16px]">VIAJES</a>
            </nav>
        </div>
    </header>