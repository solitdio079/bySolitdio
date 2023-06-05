<?php
include_once "users.class.php";

class Usersview extends Users
{
    public function takeAllUsers()
    {
        $result = $this->getAllUsers();
        return $result;
    }

    public function takeUserById($id)
    {
        $result = $this->getUserById($id);
        return $result;
    }
    public function takeUserByEmail($email)
    {
        $result = $this->getUserByEmail($email);
        return $result;
    }
    /**
     * pwdReset Methods
     */

    public function takepwdResetSelector($pwdResetSelector, $currentDate)
    {
        $result = $this->getpwdResetSelector($pwdResetSelector, $currentDate);
        return $result;
    }
}
