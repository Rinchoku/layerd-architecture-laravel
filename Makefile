setup:
	$(MAKE) web/composer CMD="install"
	$(MAKE) web/artisan CMD="key:generate"
	$(MAKE) web/artisan CMD="migrate"

build:
	docker compose down
	docker compose build
	docker compose up -d

up:
	docker compose up -d

down:
	docker compose down

web/bash:
	docker exec -it web bash

web/artisan:
	docker exec -it web php /var/www/html/artisan $(CMD)

web/composer:
	docker exec -it web composer $(CMD)

mysql/bash:
	docker exec -it mysql bash 
