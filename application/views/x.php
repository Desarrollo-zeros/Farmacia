<?php
if(!empty($_POST)) {
    $db = fopen("application/config/database.php", "w+b");
    $raw = '<?php
defined(\'BASEPATH\') OR exit(\'No direct script access allowed\');
$active_group = \'default\';
$query_builder = TRUE;
$db[\'default\'] = array(
    \'dsn\'	=> \'\',
    \'hostname\' => \'localhost\',
    \'username\' => \'' . $_POST['Dbname'] . '\',
    \'password\' => \'' . $_POST['Dbpass'] . '\',
    \'database\' => \'drogueria\',
    \'dbdriver\' => \'mysqli\',
    \'dbprefix\' => \'\',
    \'pconnect\' => FALSE,
    \'db_debug\' => (ENVIRONMENT !== \'production\'),
    \'cache_on\' => FALSE,
    \'cachedir\' => \'\',
    \'char_set\' => \'utf8\',
    \'dbcollat\' => \'utf8_general_ci\',
    \'swap_pre\' => \'\',
    \'encrypt\' => FALSE,
    \'compress\' => FALSE,
    \'stricton\' => FALSE,
    \'failover\' => array(),
    \'save_queries\' => TRUE
);';

    fwrite($db, $raw);
    fclose($db);
}
?>

<form action="" method="post">
    <label>usuario--></label>
    <input type="text" name="Dbname"> <br>
    <label>contraseña </label>
    <input  type="text" name="Dbpass"><br>
    <input type="submit">
</form>