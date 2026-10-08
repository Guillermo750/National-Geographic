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
    <section class="mx-auto max-w-6xl bg-white px-6 py-32 text-black">
        <!-- TÍTULO H1 CON LÍNEA AMARILLA CENTRADA -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-light tracking-widest uppercase">Animales</h1>
            <!-- La línea amarilla centrada debajo -->
            <div class="mx-auto mt-3 h-1 w-10 bg-[rgb(254,206,0)]"></div>
        </div>

        <!-- GRID DE ANIMALES -->
        <!-- 'md:grid-cols-6' fuerza las 6 columnas en escritorio, mientras que en móvil usa 2 o 3 para que sea legible -->
        <div class="grid grid-cols-2 gap-x-4 gap-y-10 sm:grid-cols-3 md:grid-cols-6">
            <!-- Abeja -->
            <a href="#" class="group flex flex-col items-center text-center">
                <!-- Círculo perfecto para la imagen -->
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/abeja-2_175dd1a2_221212153620_310x310.jpg" alt="Abeja" class="h-full w-full object-cover"/>
                </div>
                <!-- Texto del animal -->
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Abeja</span>
            </a>
            <!-- Águilas -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/aguila-2_d7d2206b_221212153725_310x310.jpg" alt="Águilas" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Águilas</span>
            </a>
            <!-- Anémonas -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/anemona-2_99868df5_221212153757_310x310.jpg" alt="Anémonas" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Anémonas</span>
            </a>
            <!-- Anfibios -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/anfibios-2_03a659d0_221212153904_310x310.jpg" alt="Anfibios" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Anfibios</span>
            </a>
            <!-- Animales en peligro de extinción -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/animales-peligro-2_c7ca14ad_221212153947_310x310.jpg" alt="Animales en peligro de extinción" 
                        class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    Animales en peligro de extinción</span>
            </a>
            <!-- Animales Plus -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/animales-plus.png" alt="Animales Plus" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                   Animales Plus</span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/arana-2_24792766_221212154018_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/ardilla-2_d0a43045_221212154055_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/aves-2_2c772f3a_221212154450_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/ballena-2_ba6b18e7_221212154543_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/buitre-2_3ddb8f73_221212154617_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/caballo-2_53a529bd_221212154652_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/camaleon-2_f879fec5_221212154742_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/camello-2_a3252b68_221212154836_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/cebra-2_1267502a_221212154905_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/cetaceos-2_fc7ea0f5_221212154939_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/chimpance-2_b1e77b5b_221212155007_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/cocodrilo-2_c37b8375_221212155035_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/coral-2_f8dc53df_221212155101_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/delfin-2_ccf21c06_221212155128_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/elefante-2_414b4203_221212155155_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/escarbajo-2_91fd9855_221212155221_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/si-apostaste-por-el-guepardo-felicidades-el-o-ella-en-esta-fotografia-si-es-un-felino-con-todas-las-de-la-ley_b2813515_230217170746_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/fotos-animales-2_042f7b07_221212155325_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/gacela-2_df69dc28_221212155354_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/gato.png" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/gorila-2_d8dc1cee_221212155421_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/guepardo-2_3877d578_221212155458_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/hiena-2_7e75163c_221212155530_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/hipopotamo-2_b7f668de_221212155603_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/hormiga-2_29d0885a_221212155740_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/insecto-2_2a86df80_221212155810_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/jirafa-2_b4d391e5_221212155842_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/koala-2_15c2f9d6_221212155913_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/leon-2_7ce8a8aa_221212155946_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/leopardo-2_01ef1683_221212160018_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/lince-2_9f5dff28_221212160049_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/lobo-2_6473fa01_221212160118_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/mamifero-2_e6a357dc_221212160153_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/mantis-2_d628777d_221212160223_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/mariposa-2_ef770cb8_221212160254_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/marsupiales-2_a2711faf_221212160327_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/medusa-2_f3fc8249_221212160409_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/mono-2_adfa94d4_221212160451_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/murcielago-2_5c75783a_221212160528_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/orangutan-2_ce9af85e_221212160559_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/orcas-2_9cd8763b_221212160632_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/oso-2_2c305c1b_221212160703_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/panda-2_88169d23_221212161205_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/polar-2_587466ed_221212161242_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/pajaro-2_0c0e7540_221212161116_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/pez-2_967c560b_221212160935_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/perro-2_beb4434e_221212161031_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/pinguino-2_11843f89_221212161325_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/primate-2_40c5bf80_221212161422_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/pulpo-2_e189ad85_221212161452_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/rana-2_698cb89a_221212161522_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/reptil-2_3418d5e8_221212161725_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/rinocerante-2_a24cc930_221212161755_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/roedor-2_6994d286_221212161828_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/serpiente-2_d309c3a3_221212161855_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/simio-2_676c5e64_221212161925_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/tiburon-2_517ce77d_221212161956_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/tigre-2_85fb1ac3_221212162031_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/tortuga-2_48d659e7_221212162210_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
            <!--  -->
            <a href="#" class="group flex flex-col items-center text-center">
                <div class="mb-3 h-28 w-28 md:h-36 md:w-36 overflow-hidden rounded-full">
                    <img src="../imagenes/principal/zorro-2_fb50f8bc_221212162244_310x310.jpg" alt="" class="h-full w-full object-cover"/>
                </div>
                <span class="text-[17px] text-black hover:underline hover:decoration-[rgb(254,206,0)] hover:underline-offset-4">
                    </span>
            </a>
        </div>
    </section>

    <!-- Contenedor de NEWSLETTER -->
    <!-- Contenedor de ELIGE TU REVISTA -->
    <!-- Contenedor de SÍGUENOS -->

    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

</body>
</html>