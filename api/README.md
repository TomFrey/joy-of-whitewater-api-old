
API mit Laravel


## Applikation starten
- Mamp starten unter:  Projekte/JoyOfWhitewater/joy-of-whitewater-api/api/public


## Routes
- http://localhost:8888/api/v1/books
- http://localhost:8888/api/v1/courses
- http://localhost:8888/api/v1/courses/1 (Kurs mit id 1)
- http://localhost:8888/api/v1/status


## Fake Daten erstellen:
php artisan migrate:fresh --seed


## Neue Resource erstellen:
php artisan make:resource VERSION/NAME-DER-RESOURCE


