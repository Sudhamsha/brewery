BreweryDB API Application
========================

The "BreweryDB API Application" hits the Brewery DB API and get the random beer on load and searches for beers/breweries

Primary Technologies
------------

- Symfony
- Angular

Installation
------------

Git Clone the project
Go into the application folder and run below command

```bash
$ php app/console server:run

```

Angular Structure
-----

Angular app is in web/js/angular-app
They are divided into three folders: 
- config: This contains routing
- controllers: as name suggests, it contains controllers
- partials: the html partials

Symfony Structure
-----

- Main Source code is in /src folder
- Main Controller: /src/Controller/BreweryController.php
- Main Service: /src/Services/Http.php
- Routing: /app/config/routing.yml
- Services Config: /app/config/services.yml

Test Cases
-----

- Test File: /src/AppBundle/Tests/Controllers/BreweryControllerTest.php
- Cases: 
    - testSearchVariables: Test passing no type or text
    - testSearchRegex: Test passing special characters in text
- How to run: 
    
 ```bash
 $  bin/phpunit -c app
 
 ```
 
Next Steps
-----

- Implement MongoDB logging
- The data would be utilised to analyse/debug