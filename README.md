<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


Se crearon los archivos controllers/SIteController.php donde se encuentra el punto de ingreso de la aplicacion

Se usa la funcion publiec actionSave() para almacenar los datos enviados via POST

wne Web/js/save_Data.js se encuentra el script para realizar el POST

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


EJECUCION
------------

La aplicacion se ejecuta en la carpta web del proyecto ejemplo
~~~
http://localhost/basic/web/
~~~

CONFIGURACIOM
-------------

### Database

Editar `config/db.php`

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=jose_vargas',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
Ejecute el query jose_vargas.sql que se encuentra en la raiz para poblar la base de datos.

