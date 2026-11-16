Este repositorio contiene el desarrollo de una página web inspirada en la sección de animales de National Geographic. El objetivo principal del proyecto es replicar la estructura de contenido divulgativo y educativo, implementando una interfaz limpia y visualmente impactante que permita mostrar información sobre diversas especies. A través de este trabajo, se practica la maquetación de secciones de noticias y galerías de contenido, utilizando HTML, CSS y Tailwind CSS para lograr una disposición adaptable y profesional.

Para convertir el proyecto en PHP, las páginas tendrían la extensión '.php' y el ```index.php``` llevaría este código:

```<?php header('Location: ./pages/principal.php'); exit(); ?>```

NOTA: El código que tiene index.html se pasaría al archivo ```principal.php``` y estaría en la carpeta de pages

Y para el menú y el footer lo mismo ```header.php``` y ```footer.php``` que iría en la carpeta components en la raíz ddel proyecto y poniendo este código en todas las páginas:

```<?php include_once "../../components/header.php"; ?>```

```<?php include_once "../../components/footer.php"; ?>```
