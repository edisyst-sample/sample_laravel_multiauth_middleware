## Multi login system using middleware | How to use user and admin login system | Laravel ui auth
https://www.youtube.com/watch?v=1T2BlKF_LPM


```
composer create-project laravel/laravel:^8.0 example-app
cd example-app
composer require laraveldaily/larastarters --dev
php artisan larastarters:install
npm install && npm run dev
```

Ho scelto Bootstrap UI, tema AdminLTE

## Bootstrap
Per far funzionare il dropdown del menu utente ho dovuto aggiungere tutti i JS di Bootstrap

Alla tabella users aggiungo
`$table->boolean('is_admin')->default(0);`

## Middleware IsAdmin
`php artisan make:middleware IsAdmin`

    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->is_admin == 1) {
            return $next($request);
        }

        return  redirect('home')->with('error', 'Non hai accesso come admin!');
    }

In HomeController aggiungo

    public function adminHome()
    {
        return view('admin.home');
    }

