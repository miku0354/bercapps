<?php
putenv('ODBCINI=/etc/odbc.ini');
// putenv('LD_LIBRARY_PATH=/usr/dlc113/odbc/lib:/usr/dlc113/lib');
// putenv('DLC=/usr/dlc113');
// putenv('PATH=/usr/dlc113:/usr/dlc113/bin:' . getenv('PATH'));

print_r(PDO::getAvailableDrivers());

$start = microtime(true);
try {
    $pdo = new PDO('odbc:Hodbptb', 'admin', 'admodbpta');
    echo "Connected in " . (microtime(true) - $start) . " seconds\n";
    var_dump($pdo);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}