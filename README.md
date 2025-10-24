<<<<<<< HEAD
composer install
copy .env.example .env
php artisan key:generate
configurar DB
php artisan migrate
php artisan serve
=======
# Yisus-Murillo-Laboratorio-N-2
trabajo en laravel con backend en voyager humilde pero para usted mi inge
>>>>>>> 3eaabe31f374d368f4821da60afb31ad1f71db68
# Laboratorio Final – Backend (Laravel)

## Estado del proyecto
| Ítem                         | Descripción                                   | Estado |
|-----------------------------|-----------------------------------------------|:-----:|
| Migraciones                 | `productos`, `categorias`                     | ✅    |
| Seeders                     | datos base                                    | ✅    |
| Modelos + relaciones        | `Producto` ↔ `Categoria`                      | ✅    |
| API REST Productos          | `index, store, show, update, destroy`         | ✅    |
| CORS                        | Permitir `http://localhost:4200` y `8081`     | ✅    |

## Arranque rápido
```bash
cp .env.example .env

composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve --host=127.0.0.1 --port=8000