# laravel-users
CRUD de usuários para o Laravel 5+

Quando se inicia um projeto no Laravel, executa-se o comando make:auth para criar a a autenticação, porém não existe um crud com views completas.
Este pacote faz isso. Um crud padrão para manipular usuários no laravel, básico.

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
]

```

## Rota

Uma vez implantado, está disponível a rota

- /users
