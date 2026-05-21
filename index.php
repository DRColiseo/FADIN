<?php include 'header.php'; ?>

<link rel="stylesheet" href="CSS/styleFadin.css">

<main class="contenedor-principal">
    
   <section class="seccion-carrusel">
        
        <div class="slide activo">
            <img src="Image/promocialFadin_4.jpeg" alt="Antes y después de FADIN">
        </div>
        <div class="slide">
            <img src="Image/promocialFadin_2.jpeg" alt="Protege tus ganancias">
        </div>
        <div class="slide">
            <img src="Image/promocialFadin_3.jpeg" alt="Cuentas claras">
        </div>
        
        <div class="controles">
            <button class="btn-carrusel" onclick="cambiarSlide(-1)">&#10094;</button>
            <button class="btn-carrusel" onclick="cambiarSlide(1)">&#10095;</button>
        </div>
        
    </section>

    <aside class="seccion-publicidad">
        <img src="Image/promocialFadin.jpeg" alt="Publicidad FADIN">
    </aside>

</main>

<script>
    let indiceActual = 0;
    const slides = document.querySelectorAll('.slide');
    let temporizador; 

    function cambiarSlide(direccion) {
        slides[indiceActual].classList.remove('activo');
        indiceActual = (indiceActual + direccion + slides.length) % slides.length;
        slides[indiceActual].classList.add('activo');
        reiniciarTemporizador();
    }

    function iniciarTemporizador() {
        temporizador = setInterval(() => {
            cambiarSlide(1); 
        }, 5000); 
    }

    function reiniciarTemporizador() {
        clearInterval(temporizador);
        iniciarTemporizador();
    }

    iniciarTemporizador();
</script>

<?php include 'footer.php'; ?>