all: up

# создать папку и все внутренние папки, если они ещё не существуют и запустить docker-compose
up: 
		@mkdir -p /home/${USER}/data/db     
		@mkdir -p /home/${USER}/data/wp
		@docker compose -f srsc/docker-compose.yml up -d

#останавливает все сервисы, связанные с данной конфигурацией и удаляет все контейнеры 
# и внутренние сети, связанные с этими сервисами. 
# Флаг -v удаляет также тома(созданные спецификацией docker-compose)
# Флаг -f означает, что мы указываем конкретный файл
down:
		@docker compose -f srsc/docker-compose.yml down -v

stop:
		@docker compose -f srsc/docker-compose.yml stop

fclean:
		down
		docker rm $(docker ps -aq)
		docker rmi $(docker images -aq)
		docker system prune --volumes --all
		sudo rm -rf /home/${USER}/data/db
		sudo rm -rf /home/${USER}/data/wp

re:
		docker compose -f srsc/docker-compose.yml build
		@docker compose -f srsc/docker-compose.yml up -d

.PHONY: all fclean re stop down up 
