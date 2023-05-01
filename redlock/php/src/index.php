<?php

$host = 'hades';

$user = 'MYSQL_USER';

$pass = 'MYSQL_PASSWORD';

$mydatabase = 'poseidon';

$conn = new mysqli($host, $user, $pass, $mydatabase);


$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo " <br>";
    echo "ID:&nbsp ". $user->ID;
    echo " <br>";
    echo " Nama:&nbsp ". $user->Nama;
    echo " Jabatan:&nbsp " .$user->Jabatan;
    echo " <br>";
    echo " Alamat:&nbsp ". $user->Alamat;
    
    
}

?>