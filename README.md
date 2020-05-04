<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="300"></p>

## Múltiple vendedor Ecommerce Laravel 7

Repositorio de respaldo para el tutorial **[Multi Seller Ecommerce](https://www.youtube.com/playlist?list=PLzz9vf6075V2xMDgFzAE_j2tug2Vwx9u-)** del canal de youtube de __[WebDevMatics](https://www.youtube.com/channel/UCjpCwTGrMRuTi4FcrCYbkSQ)__

### Instalar y configurar el proyecto

- Ejecutar el comando **_composer install_** para instalar las dependecnias PHP de Laravel
- Crear una base de datos en MySQL
- Copiar o renombrar el archivo **_.env.example_** a **_.env_** y agregar la conexión a la base de de datos
- Ejecutar el comando **_php artisan migrate_** para crear las tablas en la base de deatos
- Ejecutar el comando **_php artisan db:seed_** para generar los registros base del administrador
- Ejecutar el comando **_npm install && npm run dev_** para compilar los scripts JS y estilos CSS
- Ejecutar el comando **_php artisan serve_** para abrir el proyecto en el servidor local
- Ingresar a la url **_http://127.0.0.1:8000_** para ver la tienda
- Ingresar a la url **_http://127.0.0.1:8000/admin_** para ver el administrador de de la tienda

### Credenciales

- Usuario cliente:  
    email: _customer@correo.dev_  
    password: _12345678_

- Usuario administrador:  
    password: _admin@correo.dev_  
    password: _12345678_

## Configuraciones adicionales para probar la tienda

### Probar compras a traves de **__Paypal__** [**[API Paypal](https://developer.paypal.com)**]

- Generar llaves de la API de Paypal y agregarlas al archivo .ENV usando las siguientes lineas:  
#PayPal Setting & API Credentials - sandbox  
PAYPAL_SANDBOX_API_USERNAME=**_Tus_llaves_van_aqui_**  
PAYPAL_SANDBOX_API_PASSWORD=**_Tus_llaves_van_aqui_**  
PAYPAL_SANDBOX_API_SECRET=**_Tus_llaves_van_aqui_**  
PAYPAL_SANDBOX_API_CERTIFICATE=  

### Probar notificación de pagos [**[Mailtrap](https://mailtrap.io)**]

- Generar credenciales de SMTP en Mailtrap y agregarlas al archivo .ENV usando las siguientes lineas:  
MAIL_MAILER=smtp  
MAIL_HOST=smtp.mailtrap.io  
MAIL_PORT=2525  
MAIL_USERNAME=**_Tus_credenciales_van_aqui_**  
MAIL_PASSWORD=**_Tus_credenciales_van_aqui_**  
MAIL_ENCRYPTION=null  
MAIL_FROM_ADDRESS=webmall@webmall.dev  
MAIL_FROM_NAME="${APP_NAME}"  

## Paquetes usados

- **[laravel-paypal](https://github.com/srmklive/laravel-paypal)** Pagos a traves de Paypal

- **[voyager](https://voyager-docs.devdojo.com/getting-started/installation)** Panel de administración

- **[iseed](https://github.com/orangehill/iseed)** Generar backup inverso para las seeds de la base de datos

## [Documentación Laravel 7](https://laravel.com/docs)
