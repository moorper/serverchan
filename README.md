# ServerChan

一个关于【Server酱】的包

关于【Server酱】[http://sc.ftqq.com/3.version](http://sc.ftqq.com/3.version)

## 安装
`composer require moorper/serverchan`

## 使用
```php
use Moorper\ServerChan;

$client = new Client('sckey');
$client->send('text','desp');
```

## 在 laravel 中使用

1. 新建 provider 文件
`php artisan make:provider ServerChanProvider`

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Moorper\ServerChan\Client;

class ServerChanProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
    }

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton('ServerChan', function () {
            return new Client('SCU24500T3ef124dd328fe4fc372925e708aa21a35acb04e70a274');
        });
    }
}
```

2. 新建 facade 文件

```php
<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ServerChan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ServerChan';
    }
}

```

3. 修改 `config/app.php` 文件

`'providers' => [App\Providers\ServerChanProvider::class]`  
`'aliases' => ['ServerChan' => App\Facades\ServerChan::class]`