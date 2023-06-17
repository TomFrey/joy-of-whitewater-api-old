
API mit Laravel


## Applikation starten
- Mamp starten unter:  Projekte/JoyOfWhitewater/joy-of-whitewater-api/api/public


## Routes
- http://localhost:8888/api/v1/books
- http://localhost:8888/api/v1/courses
- http://localhost:8888/api/v1/courses/1 (Kurs mit id 1)


- statusId = 4 

http://localhost:8888/api/v1/courses?statusId[eq]=4
- statusId != 4

http://localhost:8888/api/v1/courses?statusId[ne]=4

- name = Kajak Level 5

http://localhost:8888/api/v1/courses?name[eq]=Kajak%20Level%205

- POST (Neuen Kurs erstellen)
- http://localhost:8888/api/v1/courses

- http://localhost:8888/api/v1/status
- http://localhost:8888/api/v1/status?name[eq]=green


## Fake Daten erstellen:
php artisan migrate:fresh --seed


## Neue Resource erstellen:
php artisan make:resource VERSION/NAME-DER-RESOURCE


