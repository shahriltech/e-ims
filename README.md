e-Inventory System
============================

**NOTES:**

- Refer to the README before start your system.
- Delete all table in e-ims database then import dump sql file table into e-ims database. All dumpfile mysql can get at db folder.

CHANGELOG 15/06/2016
-------------------

- Add send email to vendor after make the order or admin make the order.
- Add kartik-mpdf
- Add new features for access control filter
- Fixed bugs purchase by admin
- Fixed bugs for count total order by staff
- Fixed bugs for UI invoice

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



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Download from an Archive File

Extract the archive file downloaded from [https://github.com/shahriltech/e-ims.git) to
a directory and rename master(name folder) to `e-ims` that is directly under the Web root.

You can then access the application through the following URL:

~~~
http://localhost/e-ims/web/index.php
~~~

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=e-ims',
    'username' => 'root',
    'password' => '', //if default should be no password.
    'charset' => 'utf8',
];
```



