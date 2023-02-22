<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql=
'
CREATE TABLE DM(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    username CHAR(30) NOT NULL,
    UNIQUE(username),
    PASSWORD CHAR(38) NOT NULL,
    PRIMARY KEY(id)
)
';
$conn->query($sql);

// select query
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . "-" . $user->password;
    echo "<br>";
}
echo '<br><br>Help for the database sharing problem:  <a href="https://stackoverflow.com/questions/39175194/docker-compose-persistent-data-mysql" target="_blank">https://stackoverflow.com/questions/39175194/docker-compose-persistent-data-mysql</a>'
?>