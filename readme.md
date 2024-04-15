# iLoveDogs!

Hello! I made this project and here's the short guide how to set it up!

## Install PHP 8.3.3
You can read PHP official documentation: https://www.php.net/manual/en/install.php

And if you're using MacOS, you can simply install it via HomeBrew:
```
$ brew install php
```
## Install Composer
Official site: https://getcomposer.org

HomeBrew formulae:
```
$ brew install composer
```
## Install PostgreSQL@14
Here: https://www.postgresql.org/download/

Or:
```
brew install postgresql@14
```
## Create PostgreSQL DataBase

You shold have these connection:
```
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=nfac
DB_USERNAME=nfac
DB_PASSWORD=1234
```
Here's how to do it on MacOS:
```
$ createdb nfac
$ p
sql nfac
CREATE USER nfac WITH PASSWORD '1234';
GRANT ALL PRIVILEGES ON DATABASE nfac TO nfac;
\q
```
## Almost ready!
Now copy .env.example file to .env:
```
cp .env.example .env
```
Generate project key:
```
php artisan key:generate
```
Then seed your DataBase:
```
php artisan migrate:fresh --seed
```
And serve the project:
```
php artisan serve
```
## Now a few words about project itself:
Home: Base home-page

About: A few words about myself

Contest: Contest between dogs to deside which one is cuter! Data goes to DataBase and you can see top-3 liked dog

MaxAI: Here I use OpenAI Api to make AI reply as if it was a dog! Funny feature

Bonus: It is a Tamagotchi game where you can take care of your pet

# NOTES

In this project I use OpenAI API key, but there is no need to make your own key, because I did all the stuff for you! Just follow instructions above and it should work correctly!

## Contacts

If you face with some problems, please hit me:
http://telegram.me/lilsupee