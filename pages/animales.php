<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para poner icono al html -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <!-- Link para poner llamar a las clases Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- LLamar al js -->
    <!-- <script defer src="../js/app.js"></script> -->
    <title>National Geographic España</title>
</head>
<body class="overflow-x-hidden w-full bg-black">
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/header.php"; ?>

    <!-- Contenedor de las diferentes especies (Fondo blanco que resalta sobre tu body negro) -->
    <section class="mx-auto max-w-6xl bg-white px-6 py-28 text-black">
        <!-- TÍTULO H1 CON LÍNEA AMARILLA CENTRADA -->
        <div class="flex flex-col items-center space-y-4 mb-12">
            <h1 class="text-4xl tracking-widest uppercase">Animales</h1>
            <!-- La línea amarilla centrada debajo -->
            <div class="mx-auto mt-3 h-1 w-10 bg-[rgb(254,206,0)]"></div>
        </div>

        <!-- GRID DE ANIMALES -->
        <!-- 'md:grid-cols-6' fuerza las 6 columnas en escritorio, mientras que en móvil usa 2 o 3 para que sea legible -->
        <div class="grid grid-cols-2 gap-x-4 gap-y-10 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
            <!-- Abeja -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <!-- Círculo perfecto para la imagen -->
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/abeja-2_175dd1a2_221212153620_310x310.jpg" alt="Abeja" class="h-full w-full object-cover"/>
                </div>
                <!-- Texto del animal -->
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Abeja</span>
            </a>
            <!-- Águilas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/aguila-2_d7d2206b_221212153725_310x310.jpg" alt="Águilas" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Águilas</span>
            </a>
            <!-- Anémonas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/anemona-2_99868df5_221212153757_310x310.jpg" alt="Anémonas" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Anémonas</span>
            </a>
            <!-- Anfibios -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/anfibios-2_03a659d0_221212153904_310x310.jpg" alt="Anfibios" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Anfibios</span>
            </a>
            <!-- Animales en peligro de extinción -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/animales-peligro-2_c7ca14ad_221212153947_310x310.jpg" alt="Animales en peligro de extinción" 
                        class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Animales en peligro de extinción</span>
            </a>
            <!-- Animales Plus -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/animales-plus.png" alt="Animales Plus" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Animales Plus</span>
            </a>
            <!-- Arañas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/arana-2_24792766_221212154018_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                  Arañas</span>
            </a>
            <!-- Ardilla -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/ardilla-2_d0a43045_221212154055_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Ardilla</span>
            </a>
            <!-- Aves -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/aves-2_2c772f3a_221212154450_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Aves</span>
            </a>
            <!-- Ballenas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/ballena-2_ba6b18e7_221212154543_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Ballenas</span>
            </a>
            <!-- Buitre -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/buitre-2_3ddb8f73_221212154617_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Buitre</span>
            </a>
            <!-- Caballos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/caballo-2_53a529bd_221212154652_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Caballos </span>
            </a>
            <!-- Camaleones -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/camaleon-2_f879fec5_221212154742_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Camaleones </span>
            </a>
            <!-- Camello -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/camello-2_a3252b68_221212154836_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Camello</span>
            </a>
            <!--Cebras -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/cebra-2_1267502a_221212154905_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Cebras</span>
            </a>
            <!-- Cetáceos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/cetaceos-2_fc7ea0f5_221212154939_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Cetáceos </span>
            </a>
            <!-- Chimpancés -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/chimpance-2_b1e77b5b_221212155007_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Chimpancés</span>
            </a>
            <!-- Cocodrilo -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/cocodrilo-2_c37b8375_221212155035_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Cocodrilo</span>
            </a>
            <!-- Coral -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/coral-2_f8dc53df_221212155101_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Coral</span>
            </a>
            <!-- Delfines -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/delfin-2_ccf21c06_221212155128_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Delfines </span>
            </a>
            <!-- Elefantes -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/elefante-2_414b4203_221212155155_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Elefantes</span>
            </a>
            <!-- Escarabajos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/escarbajo-2_91fd9855_221212155221_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Escarabajos</span>
            </a>
            <!-- Felinos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/si-apostaste-por-el-guepardo-felicidades-el-o-ella-en-esta-fotografia-si-es-un-felino-con-todas-las-de-la-ley_b2813515_230217170746_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Felinos</span>
            </a>
            <!-- Fotos de animales -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/fotos-animales-2_042f7b07_221212155325_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Fotos de animales</span>
            </a>
            <!-- Gacelas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/gacela-2_df69dc28_221212155354_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Gacelas</span>
            </a>
            <!-- Gato -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/gato.png" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Gato</span>
            </a>
            <!-- Gorilas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/gorila-2_d8dc1cee_221212155421_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Gorilas </span>
            </a>
            <!-- Guepardos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/guepardo-2_3877d578_221212155458_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Guepardos</span>
            </a>
            <!-- Hienas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/hiena-2_7e75163c_221212155530_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Hienas</span>
            </a>
            <!-- Hipopótamo -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/hipopotamo-2_b7f668de_221212155603_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Hipopótamo</span>
            </a>
            <!-- Hormigas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/hormiga-2_29d0885a_221212155740_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Hormigas</span>
            </a>
            <!-- Insectos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/insecto-2_2a86df80_221212155810_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Insectos</span>
            </a>
            <!-- Jirafa -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/jirafa-2_b4d391e5_221212155842_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Jirafa</span>
            </a>
            <!-- Koala -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/koala-2_15c2f9d6_221212155913_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Koala </span>
            </a>
            <!-- Leones -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/leon-2_7ce8a8aa_221212155946_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Leones</span>
            </a>
            <!-- Leopardos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/leopardo-2_01ef1683_221212160018_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Leopardos </span>
            </a>
            <!-- Lince -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/lince-2_9f5dff28_221212160049_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Lince</span>
            </a>
            <!-- Lobos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/lobo-2_6473fa01_221212160118_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Lobos</span>
            </a>
            <!-- Mamíferos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/mamifero-2_e6a357dc_221212160153_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Mamíferos</span>
            </a>
            <!-- Mantis religiosa -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/mantis-2_d628777d_221212160223_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Mantis religiosa</span>
            </a>
            <!-- Mariposas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/mariposa-2_ef770cb8_221212160254_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Mariposas</span>
            </a>
            <!-- Marsupiales -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/marsupiales-2_a2711faf_221212160327_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Marsupiales</span>
            </a>
            <!-- Medusas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/medusa-2_f3fc8249_221212160409_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Medusas</span>
            </a>
            <!-- Monos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/mono-2_adfa94d4_221212160451_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Monos</span>
            </a>
            <!-- Murciélagos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/murcielago-2_5c75783a_221212160528_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Murciélagos</span>
            </a>
            <!-- Orangután -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/orangutan-2_ce9af85e_221212160559_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Orangután</span>
            </a>
            <!-- Orcas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/orcas-2_9cd8763b_221212160632_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Orcas </span>
            </a>
            <!-- Osos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/oso-2_2c305c1b_221212160703_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Osos</span>
            </a>
            <!-- Osos Panda -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/panda-2_88169d23_221212161205_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Osos Panda</span>
            </a>
            <!-- Osos polares -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/polar-2_587466ed_221212161242_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Osos polares</span>
            </a>
            <!-- Pájaros -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/pajaro-2_0c0e7540_221212161116_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Pájaros</span>
            </a>
            <!-- Peces -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/pez-2_967c560b_221212160935_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Peces</span>
            </a>
            <!-- Perros -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/perro-2_beb4434e_221212161031_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Perros </span>
            </a>
            <!-- Pingüinos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/pinguino-2_11843f89_221212161325_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Pingüinos</span>
            </a>
            <!-- Primates -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/primate-2_40c5bf80_221212161422_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Primates</span>
            </a>
            <!-- Pulpos -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/pulpo-2_e189ad85_221212161452_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Pulpos</span>
            </a>
            <!-- Ranas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/rana-2_698cb89a_221212161522_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Ranas</span>
            </a>
            <!-- Reptil -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/reptil-2_3418d5e8_221212161725_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Reptil</span>
            </a>
            <!-- Rinocerontes -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/rinocerante-2_a24cc930_221212161755_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Rinocerontes</span>
            </a>
            <!-- Roedores -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/roedor-2_6994d286_221212161828_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Roedores</span>
            </a>
            <!-- Serpientes -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/serpiente-2_d309c3a3_221212161855_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Serpientes</span>
            </a>
            <!-- Simios -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/simio-2_676c5e64_221212161925_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Simios </span>
            </a>
            <!-- Tiburones -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/tiburon-2_517ce77d_221212161956_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Tiburones </span>
            </a>
            <!-- Tigre -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/tigre-2_85fb1ac3_221212162031_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Tigre</span>
            </a>
            <!-- Tortugas -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/tortuga-2_48d659e7_221212162210_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Tortugas </span>
            </a>
            <!-- Zorro -->
            <a href="#" class="group flex flex-col items-center text-center min-w-0">
                <div class="mb-3 h-28 w-28 max-w-full overflow-hidden rounded-full sm:h-32 sm:w-32 xl:h-36 xl:w-36">
                    <img src="../imagenes/principal/zorro-2_fb50f8bc_221212162244_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Zorro</span>
            </a>
        </div>
    </section>

    <!-- Contenedor de NEWSLETTER -->
    <section class="mx-auto max-w-6xl bg-[rgb(254,206,0)] px-6 py-28 text-black">
        <div class="flex flex-col items-center space-y-4">
            <h2 class="text-4xl font-medium tracking-widest uppercase">NEWSLETTER</h2>
            <p class="text-[17px] text-center">Apúntate a la newsletter para explorar y descubrir todo sobre nuestro <br>planeta, 
                naturaleza y ciencia.</p>
            <a href="" class="text-[17px] underline">Ver ejemplo</a>
            <section class="w-full max-w-[555px] px-2 py-1 font-sans text-black">
                <form class="space-y-4">
                    <!-- Email -->
                    <div class="flex items-center gap-3">
                        <label for="email" class="shrink-0 text-[16px]">Correo electrónico</label>
                        <input id="email" name="email" type="email" placeholder="tumail@tumail.com" class="h-10 min-w-0 flex-1 border 
                         border-gray-300 bg-white px-3 text-[16px] text-gray-900 placeholder:text-gray-300 outline-none"/>
                    </div>
                    <!-- Consentimientos -->
                    <div class="space-y-3">
                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" name="newsletter" class="mt-0.5 h-4 w-4 shrink-0 appearance-none rounded-xs bg-white 
                                ring-1 ring-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1
                                "/>
                            <span class="text-[12px] leading-[1.2]">Deseo recibir el newsletter de National Geographic aceptando la
                                <a href="#" class="underline">Política de privacidad</a> de la Comunidad RBA y National Geographic Partners, 
                                    LLC, sociedad ubicada en USA.
                            </span>
                        </label>
                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" name="commercial-communications" class="mt-0.5 h-4 w-4 shrink-0 appearance-none rounded-xs
                                bg-white ring-1 ring-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1
                                "/>
                            <span class="text-[12px] leading-[1.2]">Deseo recibir comunicaciones comerciales sobre productos y/o servicios
                                ofrecidos por la Comunidad RBA. <a href="#" class="underline">Ver la Política de Privacidad</a>
                            </span>
                        </label>
                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" name="data-transfer" class="mt-0.5 h-4 w-4 shrink-0 appearance-none rounded-xs bg-white 
                                ring-1 ring-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1
                                "/>
                            <span class="text-[12px] leading-[1.2]">Autorizo la comunicación de mis datos por parte de la Comunidad RBA a
                                National Geographic Partners, LLC, sociedad ubicada en EUA, para el envío de sus propias comunicaciones 
                                comerciales. <a href="#" class="underline">Ver la Política de Privacidad</a>
                            </span>
                        </label>
                    </div>
                    <!-- Botón -->
                    <div class="flex justify-center pt-1">
                        <a href="#" class="ml-auto flex h-9 shrink-0 items-center justify-center px-5 text-[15px] font-medium bg-white 
                            text-black hover:bg-black hover:text-white transition sm:px-5 lg:ml-5 lg:h-10 lg:px-5">APÚNTATE GRATIS</a>
                    </div>
                </form>
            </section>
            <a href="" class="text-[17px] underline">Descubre nuestras newsletter</a>
        </div>
    </section>

    <!-- Contenedor de ELIGE TU REVISTA -->
    <section class="mx-auto w-full max-w-6xl bg-[rgb(244,244,244)] text-black px-4 py-16 sm:px-6 sm:py-20 lg:py-28">
        <!-- TÍTULO H2 CON LÍNEA AMARILLA CENTRADA -->
        <div class="flex flex-col items-center space-y-4 mb-12">
            <h1 class="text-3xl tracking-widest uppercase">ELIGE TU REVISTA</h1>
            <!-- La línea amarilla centrada debajo -->
            <div class="mx-auto mt-3 h-1 w-10 bg-[rgb(254,206,0)]"></div>
        </div>
        <!-- GRID DE REVISTA -->
        <div class="mx-auto grid w-full max-w-225 grid-cols-1 gap-3 sm:max-w-150 md:max-w-225 md:grid-cols-3">
            <!-- Tarjeta 1 -->
            <div class="flex min-w-0 flex-row items-center gap-3 p-3 md:flex-col md:items-center md:p-2">
                <img src="/imagenes/principal/ngme594_8bd82beb_500x665.jpg" alt="Revista Pompeya" 
                    class="h-auto w-28 shrink-0 object-cover md:w-[170px] lg:w-[190px] xl:w-[200px]">
                <div class="flex min-w-0 flex-1 flex-col items-start gap-3 md:w-full md:items-center md:text-center">
                    <h3 class="font-extrabold text-xl text-black leading-tight">Alimenta tu curiosidad</h3>
                    <p class="text-17 text-[rgb(61,61,61)]">por solo 1€/mes</p>
                    <a href="#" class="inline-flex h-9 w-fit max-w-full shrink-0 items-center justify-center whitespace-nowrap 
                        text-[15px] font-medium bg-[rgb(254,206,0)] text-black hover:bg-black hover:text-[rgb(254,206,0)] transition
                        lg:h-10 lg:px-4 px-3">SUSCRÍBETE
                    </a>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="flex min-w-0 flex-row items-center gap-3 p-3 md:flex-col md:items-center md:p-2">
                <img src="/imagenes/principal/ngmv319_31b5347e_500x665.jpg" alt="Revista Pompeya" 
                    class="h-auto w-28 shrink-0 object-cover md:w-[170px] lg:w-[190px] xl:w-[200px]">
                <div class="flex flex-col space-y-3 w-full md:items-center">
                    <h3 class="font-extrabold text-xl text-black leading-tight">Explora nuevos destinos</h3>
                    <p class="text-17 text-[rgb(61,61,61)]">por solo 1€/mes</p>
                    <a href="#" class="inline-flex h-9 w-fit max-w-full shrink-0 items-center justify-center whitespace-nowrap
                        text-[15px] font-medium bg-[rgb(254,206,0)] text-black hover:bg-black hover:text-[rgb(254,206,0)] transition
                        lg:h-10 lg:px-4 px-3">SUSCRÍBETE
                    </a>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="flex min-w-0 flex-row items-center gap-3 p-3 md:flex-col md:items-center md:p-2">
                <img src="/imagenes/principal/hngm274_2bbf685f_500x665.jpg" alt="Revista Pompeya" 
                    class="h-auto w-28 shrink-0 object-cover md:w-[170px] lg:w-[190px] xl:w-[200px]">
                <div class="flex flex-col space-y-3 w-full md:items-center">
                    <h3 class="font-extrabold text-xl text-black leading-tight">Da un paso más en historia</h3>
                    <p class="text-17 text-[rgb(61,61,61)]">por solo 1€/mes</p>
                    <a href="#" class="inline-flex h-9 w-fit max-w-full shrink-0 items-center justify-center whitespace-nowrap 
                        text-[15px] font-medium bg-[rgb(254,206,0)] text-black hover:bg-black hover:text-[rgb(254,206,0)] transition
                        lg:h-10 lg:px-4 px-3">SUSCRÍBETE
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor de ENLACES POR CATEGORÍAS -->
    <section class="mx-auto w-full max-w-6xl bg-white px-6 pt-10 pb-6 text-black sm:px-10 lg:px-12">
        <!-- GRID DE CATEGORÍAS -->
        <div class="grid grid-cols-2 gap-x-5 gap-y-8 lg:grid-cols-4 lg:gap-x-8">
            <!-- ELEMENTOS QUÍMICOS -->
            <div class="min-w-0">
                <h3 class="mb-4 bg-[rgb(247,246,246)] px-4 py-3 text-[14px] font-normal uppercase sm:text-[16px]">
                    ELEMENTOS QUÍMICOS
                </h3>
                <ul class="space-y-4 pl-4 text-[15px] sm:text-[16px]">
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Oxígeno</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Azufre</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Nitrógeno</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Hierro</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Hidrógeno</a>
                    </li>
                </ul>
            </div>
            <!-- PLANETAS -->
            <div class="min-w-0">
                <h3 class="mb-4 bg-[rgb(247,246,246)] px-4 py-3 text-[14px] font-normal uppercase sm:text-[16px]">
                    PLANETAS
                </h3>
                <ul class="space-y-4 pl-4 text-[15px] sm:text-[16px]">
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Mercurio</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">La Tierra</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Saturno</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Venus</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Sistema solar</a>
                    </li>
                </ul>
            </div>
            <!-- ANIMALES -->
            <div class="min-w-0">
                <h3 class="mb-4 bg-[rgb(247,246,246)] px-4 py-3 text-[14px] font-normal uppercase sm:text-[16px]">
                    ANIMALES
                </h3>
                <ul class="space-y-4 pl-4 text-[15px] sm:text-[16px]">
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Perros</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Mariposas</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Leones</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Serpientes</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Monos</a>
                    </li>
                </ul>
            </div>
            <!-- NOMBRES PROPIOS -->
            <div class="min-w-0">
                <h3 class="mb-4 bg-[rgb(247,246,246)] px-4 py-3 text-[14px] font-normal uppercase sm:text-[16px]">
                    NOMBRES PROPIOS
                </h3>
                <ul class="space-y-4 pl-4 text-[15px] sm:text-[16px]">
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">León XIV</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Chernóbil</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Isaac Newton</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Oveja Dolly</a>
                    </li>
                    <li>
                        <a href="#" class="decoration-[rgb(254,206,0)] underline underline-offset-4 hover:no-underline">Lynn Margulis</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contenedor de SÍGUENOS -->
    <section class="mx-auto w-full max-w-6xl bg-white px-4 pt-4 pb-12 text-black sm:px-6">
        <!-- TÍTULO -->
        <div class="mb-8 flex flex-col items-center gap-3">
            <h2 class="text-3xl font-normal uppercase tracking-wide sm:text-4xl">
                SÍGUENOS
            </h2>
            <!-- LÍNEA AMARILLA -->
            <div class="h-1 w-12 bg-[rgb(254,206,0)]"></div>
        </div>
        <!-- REDES SOCIALES -->
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4">
            <!-- FACEBOOK -->
            <a href="#" aria-label="Facebook" class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-400 bg-white
                text-black shadow-md transition hover:bg-[rgb(254,206,0)] sm:h-14 sm:w-14"><i class="fa-brands fa-facebook-f text-xl 
                sm:text-2xl"></i></a>
            <!-- X -->
            <a href="#" aria-label="X" class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-400 bg-white 
                text-black shadow-md transition hover:bg-[rgb(254,206,0)] sm:h-14 sm:w-14"><i class="fa-brands fa-twitter text-xl 
                sm:text-2xl"></i></a>
            <!-- INSTAGRAM -->
            <a href="#" aria-label="Instagram" class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-400 bg-white 
                text-black shadow-md transition hover:bg-[rgb(254,206,0)] sm:h-14 sm:w-14"><i class="fa-brands fa-instagram text-xl 
                sm:text-2xl"></i></a>
            <!-- TIKTOK -->
            <a href="#" aria-label="TikTok" class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-400 bg-white 
                text-black shadow-md transition hover:bg-[rgb(254,206,0)] sm:h-14 sm:w-14"><i class="fa-brands fa-tiktok text-xl sm:text-2xl">
                </i></a>
            <!-- YOUTUBE -->
            <a href="#" aria-label="YouTube" class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-400 bg-white 
                text-black shadow-md transition hover:bg-[rgb(254,206,0)] sm:h-14 sm:w-14"><i class="fa-brands fa-youtube text-xl sm:text-2xl">
                </i></a>
            <!-- PINTEREST -->
            <a href="#" aria-label="Pinterest" class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-400 
                bg-white text-black shadow-md transition hover:bg-[rgb(254,206,0)] sm:h-14 sm:w-14"><i class="fa-brands fa-pinterest-p 
                text-xl sm:text-2xl"></i></a>
        </div>
    </section>

    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/footer.php"; ?>

</body>
</html>