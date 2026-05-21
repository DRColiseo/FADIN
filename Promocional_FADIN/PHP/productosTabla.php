<?php include 'header.php'; ?>
 
<link rel="stylesheet" href="../CSS/tablaProductos.css">


<main class="contenedor-productos">
    <h2>Elige la versión ideal para tu negocio</h2>
    <p class="subtitulo">Compara nuestras opciones y descubre qué sistema FADIN se adapta mejor a tus necesidades.</p>
    <div class="tabla-responsiva">
        <table class="tabla-comparativa">
            <thead>
                <tr>
                    <th>Características</th>
                    <th><a href="comprar-local.php" class="enlace-titulo">FADIN Local</a></th>
                    <th><a href="comprar-web.php" class="enlace-titulo">FADIN Web / Multi-Local</a></th>
                    <th><a href="comprar-abarrotes.php" class="enlace-titulo">FADIN "Abarrotes"</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Funcionamiento 100% sin internet</td>
                    <td class="icono-si">✓</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-si">✓</td>
                </tr>
                <tr>
                    <td>Base de datos en la nube (Sincronización)</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-si">✓</td>
                    <td class="icono-no">✗</td>
                </tr>
                <tr>
                    <td>Dashboard Web (Revisa ventas en tu celular)</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-si">✓</td>
                    <td class="icono-no">✗</td>
                </tr>
                <tr>
                    <td>Gestión de múltiples sucursales a la vez</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-si">✓</td>
                    <td class="icono-no">✗</td>
                </tr>
                <tr>
                    <td>Seguridad Biométrica incluida (Huella/Rostro)</td>
                    <td class="icono-si">✓</td>
                    <td class="icono-si">✓</td>
                    <td><span class="texto-opcional">Opcional</span></td>
                </tr>
                <tr>
                    <td>Interfaz de cobro ultra rápida (Códigos de barra)</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-si">✓</td>
                </tr>
                <tr>
                    <td>Libre de pagos mensuales por servidor (Hosting)</td>
                    <td class="icono-si">✓</td>
                    <td class="icono-no">✗</td>
                    <td class="icono-si">✓</td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><a href="comprar-local.php" class="btn-comprar">Comprar</a></td>
                    <td><a href="comprar-web.php" class="btn-comprar">Comprar</a></td>
                    <td><a href="comprar-abarrotes.php" class="btn-comprar">Comprar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>


<?php include 'footer.php'; ?>