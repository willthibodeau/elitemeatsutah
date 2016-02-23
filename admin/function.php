<?php

function add_admin($email, $password) {
    global $db;
   $password = sha1($email . $password);
    $query = 'INSERT INTO administrators (emailAddress, password)
              VALUES (:email, :password)';

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_admin_login($email, $password) {
    global $db;
    $password = sha1($email . $password);
    $query = 'SELECT users_userID FROM users
              WHERE users_emailAddress = :email AND users_password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

?>