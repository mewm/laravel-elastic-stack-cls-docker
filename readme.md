# Elastick Stack (ELK) logging with Laravel

This repo contains the code for the live demo presentation I did for the Copenhagen Laravel Meetup http://www.meetup.com/Copenhagen-Laravel-Meetup/events/231241447/

Contains a docker-compose declaration that boots up both laravel services and the Elastic Stack (5).

Preparing Laravel for logstash happens in `app/Providers/AppServiceProvider.php`

After `docker-compose up`:

* Content API: http://localhost:8080
* Image API: http://localhost:8081
* Kibana: http://localhost:5601

Slides and video coming soon!