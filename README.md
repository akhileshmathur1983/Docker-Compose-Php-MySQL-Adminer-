Docker Compose: PHP, MySQL, & Adminer

A lightweight, production-ready Docker Compose template for setting up a full-stack PHP development environment. This setup includes a PHP web server, a MySQL database, and Adminer for easy database management.
🚀 Features
PHP Web Server: Pre-configured environment for PHP/Hack development.
MySQL 8.0: Persistent relational database storage.
Adminer: A lightweight, single-file database management tool (accessible via browser).
Isolated Networking: All services communicate over a private Docker network.
Volume Persistence: Database data remains intact even if containers are stopped or removed.
🛠️ Tech Stack
PHP / Hack
MySQL
Adminer
Docker & Docker Compose
📋 Prerequisites
Before you begin, ensure you have the following installed on your machine:
Docker Desktop
Docker Compose
🏁 Getting Started
1. Clone the Repository

Bash


git clone https://github.com/akhileshmathur1983/Docker-Compose-Php-MySQL-Adminer-.git
cd Docker-Compose-Php-MySQL-Adminer-


2. Spin Up the Containers
Run the following command to build and start the services in detached mode:

Bash


docker-compose up -d


3. Access the Services
Once the build is complete, you can access the services at:

Service
URL / Access
PHP Application
http://localhost:8080
Adminer (DB UI)
http://localhost:8081
MySQL Host
mysql (inside the docker network)

🗄️ Database Management (Adminer)
To log into your database via Adminer:
Navigate to http://localhost:8081.
System: MySQL
Server: mysql (This is the service name defined in docker-compose.yaml)
Username: root (or as configured in your .env / yaml)
Password: (Your configured password)
📂 Project Structure

Plaintext


.
├── mysql/              # MySQL configuration and initialization scripts
├── php-web-server/     # Dockerfile and source code for the PHP server
├── docker-compose.yaml # Docker services orchestration file
└── README.md           # Project documentation


🛑 Stopping the Services
To stop and remove the containers while keeping your data safe:

Bash


docker-compose down


To remove the containers and the database volumes (warning: this deletes your data):

Bash


docker-compose down -v


🤝 Contributing
Feel free to fork this project, open issues, or submit pull requests to improve the configuration!
