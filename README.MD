Thinkphp5 Auth Manger Library.
=======

## Usage

First, u need configure some information:

### Create DataBase Table:
~~~
Run Sql:

CREATE TABLE IF NOT EXISTS users (
    `id` int(11) unsigned not null PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(32) not null,
    `password` varchar(64) not null
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

Or Create a migrations file and add copy the code to up methods:

$table = $this->table('users');
$table->addColumn('username', 'string', ['limit' => 32])
    ->addColumn('password', 'string', ['limit' => 64])
    ->save();

~~~


### Configure information
1.Create the auth.php file in the `application/extra` directory,as follows:
~~~
<?php
return [
    'model'    => 'app\\model\\user',
    /** User password is use Hash Encrypt */
    'is_hash'  => true,
    /** be used to safe encrypt if open is_hash */
    'safe_key' => 'asdasklk123', 
];
~~~


### Methods List
~~~
<?php
use Qsnh\think\auth\Auth;

/** Check user if login */
Auth::check();

/** login on app by user id */
Auth::loginByUserId($id);

/** login on app by user model */
Auth::login(think\Model $user);

/** login on app by   */
Auth::attemp(array $credential, $remember = false);

/** Get logged-in user */
Auth::user();

/** get logged-in user id */
Auth::id();

~~~
