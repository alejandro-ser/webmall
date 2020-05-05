## Múltiple vendedor Ecommerce Laravel 7

Repositorio de respaldo para el tutorial **[Multi Seller Ecommerce](https://www.youtube.com/playlist?list=PLzz9vf6075V2xMDgFzAE_j2tug2Vwx9u-)** del canal de youtube de __[WebDevMatics](https://www.youtube.com/channel/UCjpCwTGrMRuTi4FcrCYbkSQ)__

## Instalar y configurar el proyecto

- __Requisitos:__  
    PHP >= 7.2.5  
    [Composer](https://getcomposer.org)

- Clonar repositorio e ingresar al directorio principal  
`cd webmall`
- Crear una base de datos en MySQL
- Copiar ó renombrar el archivo __*.env.example*__ a __*.env*__  
`cp .env.example .env`  
- Agregar la conexión a la base de de datos en **_.env_**:  
_DB_CONNECTION=mysql_  
_DB_HOST=127.0.0.1_  
_DB_PORT=3306_  
_DB_DATABASE=_**_Tu_base_de_datos_va_aquí_**  
_DB_USERNAME=_**_Tus_credenciales_van_aquí_**  
_DB_PASSWORD=_**_Tus_credenciales_van_aquí_**
- Ejecutar los comandos:  
`composer install` (instalar dependencias de Laravel)  
`php artisan migrate` (crear tablas en la base de datos)  
`php artisan db:seed` (generar registros base del administrador)  
`npm install && npm run dev` (compilar los scripts JS y estilos CSS)  
`php artisan serve` (iniciar proyecto en servidor local)
- Ingresar a la url **_http://127.0.0.1:8000_** para ver la tienda
- Ingresar a la url **_http://127.0.0.1:8000/admin_** para ver el administrador

### Credenciales

- **Usuario cliente:**  
    email: _customer@correo.dev_  
    password: _12345678_

- **Usuario vendedor:**  
    email: _seller@correo.dev_  
    password: _12345678_

- **Usuario administrador:**  
    email: _admin@correo.dev_  
    password: _12345678_

## Configuraciones adicionales para probar la tienda

### Probar notificaciones por correo [**[Mailtrap](https://mailtrap.io)**]

- Generar credenciales de SMTP en Mailtrap y agregarlas al archivo .ENV usando las siguientes lineas:  
_MAIL_MAILER=smtp_  
_MAIL_HOST=smtp.mailtrap.io_  
_MAIL_PORT=2525_  
_MAIL_USERNAME=_**_Tus_credenciales_van_aquí_**  
_MAIL_PASSWORD=_**_Tus_credenciales_van_aquí_**  
_MAIL_ENCRYPTION=null_  
_MAIL_FROM_ADDRESS=webmall@webmall.dev_  
_MAIL_FROM_NAME=Webmall_

### Probar compras a traves de **__Paypal__** [**[API Paypal](https://developer.paypal.com)**]

- Generar llaves de la API de Paypal y agregarlas al archivo .ENV usando las siguientes lineas:  
_#PayPal Setting & API Credentials - sandbox_  
_PAYPAL_SANDBOX_API_USERNAME=_**_Tus_llaves_van_aquí_**  
_PAYPAL_SANDBOX_API_PASSWORD=_**_Tus_llaves_van_aquí_**  
_PAYPAL_SANDBOX_API_SECRET=_**_Tus_llaves_van_aquí_**  
_PAYPAL_SANDBOX_API_CERTIFICATE=_

## Paquetes usados

- [**[laravel-paypal](https://github.com/srmklive/laravel-paypal)**] Pagos a traves de Paypal

- [**[voyager](https://voyager-docs.devdojo.com/getting-started/installation)**] Panel de administración

- [**[iseed](https://github.com/orangehill/iseed)**] Generar backup inverso para las seeds de la base de datos

## Imagenes demo

### Tienda
![Admin](/public/img/webmall-customer.png)
### Carro
![Admin](/public/img/webmall-cart.png)
### Vendedor
![Admin](/public/img/webmall-seller.png)
### Admistrador
![Admin](/public/img/webmall-admin.png)

## Licencia

[Licencia MIT](https://github.com/alejandro-ser/webmall/blob/master/LICENSE)