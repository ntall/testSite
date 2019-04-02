
<?php
// set error reporting on to help with debugging
error_reporting(E_ALL);
ini_set('display_errors','1');

// you may need to change these for your own environment
define('DBCONNECTION', "supply yours here");
define('DBUSER', 'supply yours here');
define('DBPASS', 'supply yours here');

// auto load all classes so we don't have to explicitly include them
spl_autoload_register(function ($class) {
    $file = 'lib/' . $class . '.class.php';
    if (file_exists($file)) 
      include $file;
});

// connect to the database
$connection = DatabaseHelper::createConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));

// we can then pass this connection variable to other classes that need it

?>
