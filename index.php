<?php
   # Verificar si el formulario fue enviado con datos válidos, y aparte mandar un link para volver al inicio

   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['surname'])) { #Verifica el formulario ✅
      
      #htmlspecialchars — Convierte caracteres especiales en entidades HTML
      $user = htmlspecialchars($_POST['name']); 
      $surname = htmlspecialchars($_POST['surname']);
      
      echo "<h2>Bienvenido, $user $surname</h2>"; #Mensaje ✅
      echo " <a href='index.html'> Volver al inicio </a> "; #Volver al inicio ✅
   }
?>
