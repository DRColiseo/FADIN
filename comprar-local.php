<?php include 'header.php'; ?>

 <link rel="stylesheet" href="CSS/comprar.css">


<main class="seccion-pago">
    <h1>FADIN "Local"</h1>
    <p class="descripcion">Licencia de por vida. Interfaz de cobro ultra rápida y funcionamiento 100% offline.</p>
    
    <div class="caja-precios">
        <div class="precio-item">
            <h3>Pago Inicial (Único)</h3>
            <div class="monto">$2,500 <span>MXN</span></div>
            <p style="color: #666; font-size: 0.9em; margin-top: 10px;">Instalación y configuración del sistema.</p>
        </div>
        
        <div class="separador"></div>
        
        <div class="precio-item">
            <h3>Suscripción Mensual</h3>
            <div class="monto cero">$500 <span>MXN/mes</span></div>
            <p style="color: #666; font-size: 0.9em; margin-top: 10px;">Sin costos de servidor ni rentas ocultas.</p>
        </div>
    </div>
    
    <a href="procesar_pago.php?plan=abarrotes" class="btn-finalizar">Proceder al Pago</a>
</main>

<?php include 'footer.php'; ?>