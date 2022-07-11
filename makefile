#!/usr/bin/make
ifneq (,$(wildcard .env))
else
$(shell cp .env.example .env)
endif

include .env
compose=docker-compose -f docker-compose.yml

up:
	docker-compose up -d --build --force-recreate

down:
	docker-compose down

install:
	docker-compose up -d --build --force-recreate
	$(compose) exec php-fpm sh install.sh
