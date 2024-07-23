<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>README para Aplicación Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 4px;
            border-radius: 4px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }
        .btn:hover {background-color: #3e8e41}
        .btn:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>
<body>
    <h1>Aplicación Laravel</h1>
    <p>Esta es una aplicación Laravel simple que demuestra el registro y autenticación de usuarios. Siga las instrucciones a continuación para clonar, configurar y ejecutar la aplicación en su máquina local.</p>

    <h2>Tabla de Contenidos</h2>
    <ul>
        <li><a href="#clone">Clonar el Repositorio</a></li>
        <li><a href="#setup">Configurar la Aplicación</a></li>
        <li><a href="#database">Configurar la Base de Datos</a></li>
        <li><a href="#migrations">Ejecutar Migraciones</a></li>
        <li><a href="#serve">Servir la Aplicación</a></li>
        <li><a href="#usage">Uso</a></li>
        <li><a href="#credits">Créditos</a></li>
    </ul>

    <h2 id="clone">Clonar el Repositorio</h2>
    <p>Primero, clona el repositorio en tu máquina local usando el siguiente comando:</p>
    <pre><code>git clone git@github.com:jorgeolaya/test_desarrollador.git</code></pre>

    <h2 id="setup">Configurar la Aplicación</h2>
    <p>Navega al directorio del proyecto e instala las dependencias:</p>
    <pre><code>cd test_desarrollador

composer install</code></pre>

    <p>Copia el archivo <code>.env.example</code> a <code>.env</code> y genera una clave de aplicación:</p>
    <pre><code>cp .env.example .env

php artisan key:generate</code></pre>

    <h2 id="database">Configurar la Base de Datos</h2>
    <p>Abre el archivo <code>.env</code> y configura los ajustes de conexión de tu base de datos. Por ejemplo:</p>
    <pre><code>DB_CONNECTION=mysql

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=usuario_de_tu_base_de_datos
DB_PASSWORD=contraseña_de_tu_base_de_datos</code></pre>

    <h2 id="migrations">Ejecutar Migraciones</h2>
    <p>Ejecuta las migraciones de la base de datos para crear las tablas necesarias:</p>
    <pre><code>php artisan migrate</code></pre>

    <h2 id="serve">Servir la Aplicación</h2>
    <p>Finalmente, sirve la aplicación usando el servidor PHP incorporado:</p>
    <pre><code>php artisan serve</code></pre>

    <p>La aplicación estará disponible en <a href="http://localhost:8000">http://localhost:8000</a>.</p>

    <h2 id="usage">Uso</h2>
    <p>Para probar la funcionalidad de registro, navega a <code>/register</code> y completa el formulario de registro. La aplicación validará la entrada y almacenará el nuevo usuario en la base de datos.</p>

    <p>Aquí tienes un ejemplo de cómo enviar el formulario de registro usando JavaScript:</p>
    <pre><code>document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('/register', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Usuario registrado con éxito!');
        } else {
            alert('Error al registrar el usuario.');
        }
    })
    .catch(error => console.error('Error:', error));

});</code></pre>

    <p>Para cualquier otra pregunta o problema, por favor consulta la <a href="https://laravel.com/docs">documentación de Laravel</a>.</p>

    <h2 id="credits">Créditos</h2>
    <p>Desarrollado por Jorge Olaya.</p>

    <p><a class="btn" href="https://github.com/jorgeolaya/test_desarrollador">Ver en GitHub</a></p>

</body>
</html>
