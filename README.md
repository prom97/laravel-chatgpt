<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"><img src="https://raw.githubusercontent.com/lencx/ChatGPT/main/public/logo.png" width="100" alt="ChatGPT Logo"></p>

<h1 align="center">Laravel ChatGPT Clone</h1>

## Introduction

- ChatGPT clone. The chatbot is built using the GPT-3.5 language model and is integrated with the Laravel and VueJS frameworks.

## Tech Stack

<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=laravel,vuejs,tailwind,mysql,vscode" />
  </a>
</p>

## Deployment

- Clone project

```
git clone https://github.com/prom97/laravel-chatgpt.git
```

- Install dependencies from composer.json and package.json (inside the project directory)

```
composer install
```

```
npm install
```

```
npm run dev
```

- Create a new database and config your .env file (line 11 for reference)
  - Default Database name: laravel-chatgpt
  - If the .env file does not exist:

 ```
 cp .env.example .env
 ```

- You must register at <https://platform.openai.com/account/api-keys> and create the Secret API KEY to copy it on your .env file (line 60 for reference)

 ```
 OPENAI_API_KEY=<your_api_key>
 ```

- Run migrations to set your db tables structure

```
php artisan migrate
```

- Serve it

```
php artisan serve
```

<br/>

- Register and acces to the dashboard

- If you have any 500 Server error, try CTRL+C and then

```
php artisan cache:clear
```

```
composer dump-autoload
```

```
php artisan key:generate
```
