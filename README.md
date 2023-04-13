<p align="center">Laravel ChatGPT Clone</p>
<br>

## Introduction
- Chat Gpt clone. The chatbot is built using the GPT-3.5 language model and is integrated with the Laravel and VueJS frameworks


## Tech Stack

<div align="center">
<img width="70" src="https://raw.githubusercontent.com/gilbarbara/logos/master/logos/laravel.svg"/>
<img width="70" src="https://github.com/devicons/devicon/blob/master/icons/vuejs/vuejs-original.svg"/>                 
<img width="70" src="https://github.com/devicons/devicon/blob/master/icons/tailwindcss/tailwindcss-plain.svg"/>                 
</div>


## Deployment
- Clone project
```
git clone https://github.com/PabloDamianRomero/laravel-chatgpt.git
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

- You must register at https://platform.openai.com/account/api-keys and create the Secret API KEY to copy it on your .env file (line 60 for reference)

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
