<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="300"></p>

## Multi Seller Ecommerce Laravel 7

Repositorio de respaldo para el tutorial **[Multi Seller Ecommerce](https://www.youtube.com/playlist?list=PLzz9vf6075V2xMDgFzAE_j2tug2Vwx9u-)** del canal de youtube de __[WebDevMatics](https://www.youtube.com/channel/UCjpCwTGrMRuTi4FcrCYbkSQ)__

### Instalar y configurar el proyecto

- Ejecutar el comando **_composer install_** para instalar las dependecnias PHP de Laravel
- Crear una base de datos en MySQL
- Copiar o renombrar el archivo **_.env.example_** a **_.env_** y agregar la conexión a la base de de datos
- Ejecutar el comando **_php artisan migrate_** para crear las tablas en la base de deatos
- Ejecutar el comando **_npm install && npm run dev_** para compilar los scripts JS y estilos CSS
- Ejecutar el comando **_php artisan serve_** para abrir el proyecto en el servidor local
- Ingresar a la url **_http://127.0.0.1:8000_** para ver la tienda
- Ingresar a la url **_http://127.0.0.1:8000/admin_** para ver el administrador de de la tienda

### Paquetes usados

- [laravel-paypal](https://github.com/srmklive/laravel-paypal)
    __composer require srmklive/paypal:~1.0__

- [voyager](https://voyager-docs.devdojo.com/getting-started/installation)
    __composer require tcg/voyager__

- [iseed](https://github.com/orangehill/iseed)
    __composer require orangehill/iseed__

[Documentación Laravel 7](https://laravel.com/docs)
