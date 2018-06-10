docker container stop $(docker ps -q)
docker container rm $(docker container ls -q)
docker container prune -f
docker rmi -f $(docker images -a -q)
docker volume rm -f $(docker volume ls -q)
docker-compose up --scale php=4