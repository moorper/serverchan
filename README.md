# ServerChan

一个关于【Server酱】的包

关于【Server酱】(http://sc.ftqq.com/3.version)[http://sc.ftqq.com/3.version]

## 安装
`composer require moorper/serverchan`

## 使用
```php
use Moorper\ServerChan;

$client = new Client('sckey');
$client->send('text','desp');
```