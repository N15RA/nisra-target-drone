<!-- This code is a quick test of php-sqli-apache link -->
<?php
    $user = 'nisra';
    $password = 'n15Ra_TaRG1t_D0main';
    $database = 'nisra_target';
    $table = 'check_list';

    // connect to database
    $db = mysqli_connect("localhost", "$user", "$password", "$database");
    // check if database connect successfully
    if (!$db) {
        die("Error to connect mysql," . mysqli_connect_error());
    }

    $query = "SELECT * FROM $table";
    $result = mysqli_query($db, $query);
    $row_nums = mysqli_num_rows($result);

    for ($i = 0; $i < $row_nums; $i++) {
        $row = mysqli_fetch_assoc($result);
        echo "<li>" . $row['content'] . "</li>";
    }
?>