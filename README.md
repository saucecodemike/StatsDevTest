# StatsDevTest
###Developer test for stats new zealand

##Setup Instructions

*Clone Down the repo

*CD into the freshly cloned repo

*Run a composer install

*Make sure you are in the root of the project and run "docker-compose up -d --build" , this will build the docker images.

*The images are running on port 81, just to avoid conflicts.

http://localhost:81/

These will be for the .env (we should really commit these, just trying to make setup easier)

# DB credentials
SS_DATABASE_CLASS="MySQLDatabase"
SS_DATABASE_SERVER="mysql"
SS_DATABASE_USERNAME="root"
SS_DATABASE_PASSWORD="tiger"
SS_DATABASE_NAME="png"

SS_DEFAULT_ADMIN_USERNAME="admin"
SS_DEFAULT_ADMIN_PASSWORD="password"

*After composer has run create a file called .env and copy the contents of the .env.example


*Notes about docker:

*To make this faster for the reviewers to setup, i have left the docker-compose.yml pre-configured.

*To Run a build from the command line

*docker exec project1 php ./vendor/silverstripe/framework/cli-script.php dev/build

####
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
