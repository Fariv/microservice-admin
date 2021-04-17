## Project name - Microservices with Laravel (admin)

## Backend framework - Laravel 8.35.1

## How to use:

You may sign up in [Amqp](https://customer.cloudamqp.com/instance) for RabbitMQ service.


Please, then, modify following variable

    QUEUE_CONNECTION=rabbitmq

After that, please, add following env variables and correct values in `.env` file


    RABBITMQ_HOST
    
    RABBITMQ_PORT
    
    RABBITMQ_USER
    
    RABBITMQ_PASSWORD
    
    RABBITMQ_VHOST


Modify following env variables according to the name you wanted it to be inside the docker container

    DB_DATABASE

    DB_USERNAME

    DB_PASSWORD
