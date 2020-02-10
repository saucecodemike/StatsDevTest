# StatsDevTest
###Developer test for stats new zealand

##Setup Instructions

*Clone Down the repo

*CD into the freshly cloned repo

*Run a composer install



*Notes about docker:

*To make this faster for the reviewers to setup, i have left the docker-compose.yml pre-configured.

*To Run a build from the command line

*docker exec project1 php ./vendor/silverstripe/framework/cli-script.php dev/build

####
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
