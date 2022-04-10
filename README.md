## Multi login system using middleware | How to use user and admin login system | Laravel ui auth
https://www.youtube.com/watch?v=1T2BlKF_LPM

sample_laravel_multiauth_middleware

```
composer create-project laravel/laravel:^8.0 example-app
cd example-app
composer require laraveldaily/larastarters --dev
php artisan larastarters:install
npm install && npm run dev
```

Ho scelto Bootstrap UI, tema AdminLTE

Alla tabella users aggiungo
`$table->boolean('is_admin')->default(0);`



