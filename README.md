Correr con
./vendor/bin/sail up -d


# seeders iniciales
php artisan db:seed --class=ModalidadsTableSeeder
php artisan db:seed --class=ParentescosSeeder
php artisan db:seed --class=NivelAcademicoSeeder