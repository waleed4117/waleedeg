<?php
$sql = 'SELECT * FROM users ORDER BY RAND()LIMIT 24';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);