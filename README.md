<p align="center">
<a href="https://laravel.com" target="_blank">
Concurso QR
</a></p>

## Concurso QR

- Generacion de Códigos QR por medio de un seeder.
- Cada QR se puede modificar individualmente.
- Los QR ganadores redirigen a una landing page donde figura el valor del premio y el petrocinador.
- Los Qr de tráfico redirigen al sitio web de cada patrocinador.
- Implementa una base de datos propia para almacenar los QR y usuarios administradores.

## Instalación
### Código fuente
    git clone https://github.com/teffysr/concursoqr.git

### Dependencias
    composer install 
####
    npm install && npm run dev

### Base de datos (Creación de tablas)
    php artisan migrate

### Carga de datos (correr solo una vez)
    php artisan db:seed

### Prueba de aplicación
    php artisan serve

### Cargar usuario administrador

    http://127.0.0.1:8000/register
