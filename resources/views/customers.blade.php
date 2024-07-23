<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amazon Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Token CSRF -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <meta name="base-url" content="{{ url('/') }}">
</head>
<body>
    <div class="logo-container-superior">
        <div class="logo-container"></div>
    </div>
    <div class="container">
        <h3>Crear cuenta</h3>
        <form id="registrationForm">
            <label for="name">Tu nombre:</label>
            <input type="text" id="name" name="name" required>
            <div class="separator"></div>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <div class="separator"></div>
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Debe tener al menos 6 caracteres" id="password" name="password" required style="font-size: 12px;">
            <p id="password-hint" style="font-size: 0.6em;">La contraseña debe contener al menos seis caracteres.</p>
            <div class="separator"></div>
            <label for="confirmPassword">Vuelve a escribir la contraseña:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <div class="separator"></div>
            <button type="submit" class="btn">Crear tu cuenta de Amazon</button>
        </form>
        <p class="terms-link">Al crear una cuenta, aceptas las <a href="#">Condiciones de Uso</a> y el <a href="#">Aviso de Privacidad</a> de Amazon.</p>
        <p class="terms-link">¿Ya tienes una cuenta? <a href="#">Iniciar sesión</a>.</p>
    </div>    
    <script src="{{ asset('js/registro.js') }}"></script> <!-- Archivo JavaScript -->
</body>
</html>
