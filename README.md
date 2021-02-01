## Laravel Public + Vue Private SPA

Basic setup Laravel 8 + Fortify + Tailwind + Vue 2

The idea is to have basic public facing website handled by Laravel, so it's going to be quick and doesn't need to setup server rendering for Vue.

## Features

- All essentials auth pages included
- Email confirmation sequence
- Private web app SPA Vue JS

### Notes

Private route URL is `/app`, defined in:

  - `app\Providers\RouteServiceProvider.php`
  - `resources\js\router.js`
  - `routes\web.php`

### How To Run Project

1. Copy `env.example` and rename to `.env`
2. Fill in database and email
3. Install all dependencies `composer install` and `npm install`
4. Run `php artisan migrate`
5. Run `php artisan serve` and in another terminal `npm run watch`

### How To Disable Email Confirmation

1. `routes\web.php`: Remove all routes under Email Verification, and remove middleware verified
2. `config\fortify.php`: Remove `Features::emailVerification()`
3. `app\Models\User.php`: Remove `implements MustVerifyEmail`
