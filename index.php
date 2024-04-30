<?php echo("Hello World"); 
$server = 'sqlbd-lab5.database.windows.net';
$dbName = 'sqldb-lab5';
$uid = 'sqladmin';
$pwd = 'Omopla1@';

$conn = new PDO("sqlsrv:server=$server; database = $dbName", $uid, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

try {
    $tableName = 'dbo.Users';
    $query = "SELECT * FROM $tableName";
    $stmt = $conn->query($query);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    
    unset($stmt);
    unset($conn);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
