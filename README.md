# Pasos para usar este proyecto Laravel
1. Instalar dependencias con composer: `composer install`.
2. Copiar el contenido de `.env.example`, crear y pegar al archivo `.env`.
3. Generar la `APP_KEY` de la aplicación: `php artisan key:generate`.
4. Instalar dependencia con NPM: `npm install`.

### Crear base de datos
1. Crear una base de datos para migrar la database de Laravel.
### Migraciones
1. `php artisan migrate`.
### Levantar el servidor
1. `php artisan serve --no-reload`