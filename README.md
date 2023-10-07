# Instrucciones de Instalación: API

-   Instalar Laragon y crear una base de datos dentro del gestor de sesiones (en _Database_).

-   En la _Terminal_ de Laragon, cambiar de directorio a la carpeta root de Laragon
    `cd C:\laragon\www`

-   Clonar el proyecto pruebaTecnica en el directorio

    `git clone https://github.com/micuarc/pruebaTecnica.git `

-   Ir al repositorio recien clonado
    `cd /pruebaTecnica`

-   Instalar los paquetes del proyecto
    `composer install`

-   Copiar `.env.example` y renombrarlo a `.env`, cambiando manualmente los atributos:

```
DB_DATABASE=nombre_BD_laragon
DB_USERNAME=username_BD_laragon
DB_PASSWORD=pw_BD_laragon
```

-   En la Terminal de Laragon ejecutamos los siguientes comandos, los cuales generaran APP_KEY y limpiaran el cache de configuraciones anteriores.

```
php artisan key:generate
php artisan config:clear
```

-   Migramos las tablas del proyecto a la base de datos que elegimos localmente con el comando

`php artisan migrate`

-   Posteriormente, insertamos los datos de muestreo:

`php artisan db:seed`

-   De haber algun inconveniente con el seeder, reinicie con:

`php artisan migrate:fresh --seed`

-   Crear una conexion con un gestor de base de datos (en este caso DBeaver), con los mismos datos que modifico anteriormente.
