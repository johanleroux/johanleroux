read -rp $'Server details? {user}@{ip} ' server

docker-compose -f dc-build.yml -H unix:///var/run/docker.sock build
docker-compose -f dc-build.yml -H unix:///var/run/docker.sock push
docker-compose -f dc-prod.yml -H ssh://"$server" pull
docker-compose -f dc-prod.yml -H ssh://"$server" -p johanleroux up -d
echo "Image has been deployed!"
