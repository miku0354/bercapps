<?php

putenv('DLC=/usr/dlc113');
putenv('ODBCINI=/etc/odbc.ini');
putenv('ODBCINSTINI=/etc/odbcinst.ini');
putenv('LD_LIBRARY_PATH=/usr/dlc113/odbc/lib:/usr/dlc113/lib');

print_r(PDO::getAvailableDrivers());

echo "ODBCINI=" . getenv('ODBCINI') . PHP_EOL;
echo "ODBCINSTINI=" . getenv('ODBCINSTINI') . PHP_EOL;

try {
	$pdo = new PDO('odbc:Hodbptb', 'admin', 'admodbpta');
    echo "CONNECTED SUCCESS\n";
} catch (PDOException $e) {
    echo $e->getMessage();
}
