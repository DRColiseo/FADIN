<?php include 'header.php'; ?>

<link rel="stylesheet" href="../CSS/acercaDe.css">

<main class="contenedor-contacto">
    <section class="columna-izq">
        <div class="info-equipo">
            <h2>Acerca de Nosotros / Contáctanos</h2>
            <p>Queremos saber de ti. Si tienes alguna duda, sugerencia o comentario sobre FADIN, escríbenos y te responderemos lo más pronto posible. Conoce al equipo detrás del proyecto:</p>
            
            <ul class="lista-equipo">
                        <li><b>Ulises Hernández</b><br>Líder del proyecto</li>
                        <li><b>Trabajador genrico</b><br>Líder Front-End</li>
                        <li><b>Edwin Ramos</b><br>Programador</li>
                        <li><b>Trabajador Generico</b><br>Diseñadora Principal</li>
                        <li><b>Miguel Madrigal</b><br>Diseñador UX/UI</li>
                    </ul>
        </div>

        <div class="caja-formulario">
            <h3>Envíanos un mensaje</h3>
            <form action="enviar_correo.php" method="POST" id="formulario">
                <div class="grupo-form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre completo">
                </div>
                <div class="grupo-form">
                    <label for="asunto">Asunto:</label>
                    <input type="text" id="asunto" name="asunto" required placeholder="Motivo de tu mensaje">
                </div>
                <div class="grupo-form">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" maxlength="200" required placeholder="Escribe aquí tu mensaje..."></textarea>
                </div>
                <input type="submit" value="Enviar Mensaje" class="btn-enviar">
            </form>
        </div>
    </section>

   <aside class="columna-der">
        <div class="imagen-destacada">
            <img src="../Image/porkicoin_expo_antad.svg" alt="Visítanos en Expo ANTAD">
        </div>
    </aside>
</main>

<?php include 'footer.php'; ?>