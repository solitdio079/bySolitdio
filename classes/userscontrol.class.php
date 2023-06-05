<?php
include_once "users.class.php";

class Userscontrol extends Users
{
    public function createUser($username, $pwd, $email)
    {
        $this->setUser($username, $pwd, $email);
    }

    public function changeUserName($newUserName, $id)
    {
        $this->updateUserName($newUserName, $id);
    }
    public function changePwd($newPwd, $id)
    {
        $this->updatePwd($newPwd, $id);
    }
    public function changeEmail($newEmail, $id)
    {
        $this->updatePwd($newEmail, $id);
    }
    public function changeImg($newImg, $id)
    {
        $this->updateImg($newImg, $id);
    }
    public function removeUser($id)
    {
        $this->deleteUser($id);
    }

    //
    // Methods For pwdReset Table
    //

    public function removepwdReset($email)
    {
        $this->deletepwdReset($email);
    }

    public function createpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires)
    {
        $this->setpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires);
    }
}
