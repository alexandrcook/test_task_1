# Test task with filter (searching, sorting) functional with Laravel pagination and Vue Chart.js visualisation

You could build/run this project with Laravel sail

- docker run --rm -v $(pwd):/app composer install
- ./vendor/bin/sail up -d
- ./vendor/bin/sail php artisan migrate
- ./vendor/bin/sail php artisan db:seed
- ./vendor/bin/sail npm install
- ./vendor/bin/sail npm run dev
- open 'localhost' in browser
