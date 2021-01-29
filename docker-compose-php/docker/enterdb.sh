#bash
containerId=$(sudo docker container list | grep 'docker_database')
echo 'DB Container ID: '${containerId::12}'.'
sudo docker exec -it ${containerId::12} mysql -umyuser -p
