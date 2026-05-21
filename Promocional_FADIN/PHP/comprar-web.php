<?php include 'header.php'; ?>

 <link rel="stylesheet" href="../CSS/comprar.css">


<main class="seccion-pago">
    <h1>FADIN Web / Multi-Local</h1>
    <p class="descripcion">Sincronización en la nube, gestión de múltiples sucursales y dashboard web en tiempo real.</p>
    
    <div class="caja-precios">
        <div class="precio-item">
            <h3>Pago Inicial</h3>
            <div class="monto">$4,500 <span>MXN</span></div>
            <p style="color: #666; font-size: 0.9em; margin-top: 10px;">Licencia base y conexión de la primera sucursal.</p>
        </div>
        
        <div class="separador"></div>
        
        <div class="precio-item">
            <h3>Suscripción Mensual</h3>
            <div class="monto" style="color: #d32f2f;">$499 <span>MXN/mes</span></div>
            <p style="color: #666; font-size: 0.9em; margin-top: 10px;">Mantenimiento de servidor en la nube y sincronización.</p>
        </div>
    </div>
    
    <div style="background-color: #fff3e0; padding: 15px; border-radius: 8px; margin-bottom: 25px; color: #e65100; font-size: 0.9em;">
        <strong>Nota:</strong> Al proceder, hoy solo pagarás el <strong>Pago Inicial ($4,500 MXN)</strong>. La suscripción mensual comenzará a cobrarse en 30 días.
    </div>

    <a href="procesar_pago.php?plan=web" class="btn-finalizar">Proceder al Pago</a>
</main>

<?php include 'footer.php'; ?>