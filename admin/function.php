<?php

function add_admin($first_name, $last_name, $email, $password) {
    global $db;
    $password = ($email . $password);
    $query = 'INSERT INTO users (users_firstName, users_lastName, users_emailAddress, users_password)
              VALUES (:first_name, :last_name, :email, :password)';

    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_admin_login($email, $password) {
    global $db;
    $password = sha1($email . $password);
    $query = 'SELECT users_userID FROM users
              WHERE users_emailAddress = :email AND users_password = :password AND users_userLevel = "a"';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function is_valid_member_login($email, $password) {
    global $db;
    $password = sha1($email . $password);
    $query = 'SELECT users_userID FROM users
              WHERE users_emailAddress = :email AND users_password = :password AND users_userLevel = "m"';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

?>