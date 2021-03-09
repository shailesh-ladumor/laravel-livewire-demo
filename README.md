<h1 align="center"><img src="https://infyom.com/static/laravel-package-5e32d3de86b4b0cd781e376ea9744cc7.png" alt="Laravel Package Tutorial"></h1>

# [See here Video Tutorials](https://www.youtube.com/c/LaravelPackageTutorial)

## Setup instructions

First, make sure you have [git](http://git-scm.com/book/en/v2/Getting-Started-Installing-Git) and [node](http://nodejs.org/download/) installed.

Next, you'll need to download the repo if you haven't already:

Change directory to the root folder of the project and install dependencies:

	 cd laravel-livewire-demo
### Composer
Update composer dependencies

    composer install

### Config
Create environment settings

     cp .env.example.env
     vi .env
     php artisan key:generate

### Database
Migrate database

     php artisan migrate

### Laravel mix

Assets are managed via laravel mix. To compile js && css assets, run

    npm install && npm run dev

To keep a laravel mix session running while working, run

    npm run watch

### Final steps

Run development server.

    php artisan serve
