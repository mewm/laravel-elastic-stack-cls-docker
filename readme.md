# Centralised logging system using Laravel with Elastic Stack. Wired up with docker-compose

This repository contains the code I did in the live demo at the Copenhagen Laravel Meetup http://www.meetup.com/Copenhagen-Laravel-Meetup/events/231241447/ hosted at Tattoodo

Contains a docker-compose declaration that boots up both laravel services and the Elastic Stack (5).

The Laravel services is pretty much bare bone out of the box. Only configuration done was changing the logging format in Monolog to logstash. That happens in `app/Providers/AppServiceProvider.php`

After `docker-compose up`:

* Content API: http://localhost:8080
* Image API: http://localhost:8081
* Kibana: http://localhost:5601

The session was recorded and will be uploaded soon.

# Slides

![Slide 0](slides/slide0.jpeg "Slide 0")
![Slide 1](slides/slide1.jpeg "Slide 1")
![Slide 2](slides/slide2.jpeg "Slide 2")
![Slide 3](slides/slide3.jpeg "Slide 3")
![Slide 4](slides/slide4.jpeg "Slide 4")
![Slide 5](slides/slide5.jpeg "Slide 5")
![Slide 6](slides/slide6.jpeg "Slide 6")
