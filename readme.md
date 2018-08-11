# johanleroux.me

My personal website. Straight forward.

## Software Stack
 - Laravel
 - Vue
 - Algolia
 - Tailwindcss

## Installation
Fastest way to install and get requirements up and running is using [Laravel Homestead](https://laravel.com/docs/homestead).

Clone into Homestead directory.
```
git clone https://github.com/johanleroux/johanleroux.git
```

Set working directory to johanleroux

Copy over environment file and update details to your environment.
```
cp .env.example .env
```

Update dependencies
```
composer update
npm i
```

Develop assets
```
npm run dev
  - or -
npm run prod
```

Set Application Key
```
php artisan key:generate
```

## License
The MIT License (MIT). Please see [License File](license.md) for more information.