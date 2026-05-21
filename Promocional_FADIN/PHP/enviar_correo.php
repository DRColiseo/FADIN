<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $asunto = htmlspecialchars(trim($_POST['asunto']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    $destinatario = "ulises.hernandez1339@alumnos.udg.mx";
    $asunto_correo = "Nuevo mensaje de FADIN: " . $asunto;
    
    $cuerpo = "Has recibido un nuevo mensaje desde la web de FADIN.\n\n";
    $cuerpo .= "Nombre del cliente: " . $nombre . "\n";
    $cuerpo .= "Asunto: " . $asunto . "\n";
    $cuerpo .= "Mensaje:\n" . $mensaje . "\n";

    $headers = "From: webmaster@fadin.com\r\n"; 
    $headers .= "Reply-To: no-reply@fadin.com\r\n";

    if (mail($destinatario, $asunto_correo, $cuerpo, $headers)) {
        echo "<script>
                alert('¡Tu mensaje ha sido enviado exitosamente!');
                window.location.href = 'Acerca_de.php'; // Cambia esto por la página donde esté tu formulario
              </script>";
    } else {
        echo "<script>
                alert('Hubo un error al enviar el mensaje. Inténtalo más tarde.');
                window.history.back();
              </script>";
    }
} else {
    header("Location: index.php");
}
?>