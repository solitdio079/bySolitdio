<?php
include_once "dbh.class.php";

class Users extends Dbh
{
    protected function setUser($username, $pwd, $email)
    {
        $sql = "INSERT INTO `users`(`username`, `pwd`, `email`) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $pwd, $email]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function getAllUsers()
    {
        $sql = "SELECT * FROM `users` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getUserById($id)
    {
        $sql = "SELECT * FROM `users` WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getUserByEmail($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function updateUserName($newUserName, $id)
    {
        $sql = "UPDATE `users` SET `username`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newUserName, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateEmail($newEmail, $id)
    {
        $sql = "UPDATE `users` SET `email`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newEmail, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updatePwd($newPwd, $id)
    {
        $sql = "UPDATE `users` SET `pwd`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPwd, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateImg($newImg, $id)
    {
        $sql = "UPDATE `users` SET `img`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newImg, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function deleteUser($id)
    {
        $sql = "DELETE FROM `users` WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
    }

    //
    // Methods For pwdReset Table
    //

    protected function deletepwdReset($email)
    {
        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function setpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires)
    {
        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector,pwdResetValidator, pwdResetExpires) VALUES (?,?,?,?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function getpwdResetSelector($pwdResetSelector, $currentDate)
    {
        $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector = ? AND pwdResetExpires >=$currentDate;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$pwdResetSelector]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();

        return $result;
    }
}
