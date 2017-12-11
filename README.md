# laravel-users
CRUD de usuários para o Laravel 5+

## Instalação

### config > app.php

Adicione o provider

```
Blit\Users\Providers\UserServiceProvider::class,
```

### config > auth.php

Mude o provider User para model do modulo

```

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


