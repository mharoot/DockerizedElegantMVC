docker container stop $(docker container ls -q)
docker container rm $(docker container ls -q)
docker container prune -y
docker rmi -f $(docker images -q)
docker volume rm $(docker volume ls -q)
docker-compose up