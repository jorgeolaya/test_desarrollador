````markdown
# Prueba Técnica para el Cargo de Desarrollador

Este repositorio contiene una prueba técnica para el cargo de desarrollador. A continuación, encontrarás las instrucciones necesarias para clonar el repositorio, instalar dependencias, configurar el entorno y ejecutar el servidor de desarrollo.

## Contenido

-   [Descripción del Proyecto](#descripción-del-proyecto)
-   [Cómo Clonar el Repositorio](#cómo-clonar-el-repositorio)
-   [Cómo Instalar las Dependencias del Proyecto](#cómo-instalar-las-dependencias-del-proyecto)
-   [Cómo Configurar el Entorno](#cómo-configurar-el-entorno)
-   [Cómo Ejecutar el Servidor de Desarrollo de Laravel](#cómo-ejecutar-el-servidor-de-desarrollo-de-laravel)
-   [Créditos](#créditos)

## Descripción del Proyecto

Este proyecto es una aplicación web desarrollada en Laravel. La aplicación incluye una funcionalidad básica de registro de usuarios y es una base sobre la cual se puede construir una aplicación más completa.

## Cómo Clonar el Repositorio

Para clonar el repositorio en tu máquina local, abre una terminal y ejecuta el siguiente comando:

```bash
git clone https://github.com/jorgeolaya/test_desarrollador.git
```
````

Esto creará una copia local del repositorio en tu directorio actual.

## Cómo Instalar las Dependencias del Proyecto

Una vez clonado el repositorio, navega al directorio del proyecto y ejecuta los siguientes comandos para instalar las dependencias:

1. **Instalar dependencias de PHP usando Composer**:

    ```bash
    cd test_desarrollador
    composer install
    ```

2. **Instalar dependencias de JavaScript usando npm**:

    ```bash
    npm install
    ```

## Cómo Configurar el Entorno

El proyecto utiliza un archivo `.env` para gestionar la configuración del entorno. Debes crear un archivo `.env` en la raíz del proyecto y configurar las variables de entorno necesarias. Puedes copiar el archivo de ejemplo `.env.example` y renombrarlo a `.env`:

```bash
cp .env.example .env
```

Luego, edita el archivo `.env` para configurar los detalles de la base de datos y otras configuraciones específicas del entorno. Asegúrate de definir al menos las siguientes variables:

```plaintext
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:YOUR_APP_KEY
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_base_de_datos
DB_USERNAME=usuario_de_la_base_de_datos
DB_PASSWORD=contraseña_de_la_base_de_datos
```

## Cómo Ejecutar el Servidor de Desarrollo de Laravel

Para iniciar el servidor de desarrollo de Laravel, asegúrate de estar en el directorio del proyecto y ejecuta el siguiente comando:

```bash
php artisan serve
```

Esto iniciará un servidor de desarrollo en `http://localhost:8000`. Puedes abrir esta URL en tu navegador para ver la aplicación en funcionamiento.

## Créditos

Desarrollado por [Jorge Olaya](mailto:jorgeeolayap@gmail.com). Agradezco tu tiempo para revisar esta prueba técnica. Si tienes alguna pregunta o necesitas más información, no dudes en contactarme.

---

¡Gracias por revisar el proyecto!

```

### Cómo Usar Este Archivo `README.md`

1. **Copia y pega el contenido** en un archivo llamado `README.md` en la raíz de tu repositorio.
2. **Asegúrate de** ajustar cualquier detalle específico, como las configuraciones de entorno o el nombre del proyecto, si es necesario.
3. **Guarda los cambios** y realiza un commit con el archivo actualizado.

Este archivo `README.md` proporciona una guía completa para cualquier persona que quiera clonar, instalar y ejecutar el proyecto.
```
