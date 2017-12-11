# laravel-users
CRUD de usuários para o Laravel 5+

## Instalação

Em config > auth.php mude o provider User para model do modulo

``
'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => Blit\Users\Models\User::class,
    ],

    // 'users' => [
    //     'driver' => 'database',
    //     'table' => 'users',
    // ],
]
```


