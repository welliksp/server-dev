# server-dev

Criei um container em python sendo o servidor. Mapeei esse container para acessar um diretório na máquina host


comando para criar o container.

docker container run -ti -v $(pwd):/app -p 8080:8000 --name python-server server-dev
