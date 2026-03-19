<?php
session_start();
require_once '../model/Users.php';

class UserController
{

    // create an employee
    public function register()
    {
        if (!empty($_POST['name']) && !empty($_POST['position'])) {
            $employee = new Users($_POST['name'], $_POST['position']);

            if (!isset($_SESSION['employees'])) {
                $_SESSION['employees'] = [];
            }

            $_SESSION['employees'][] = [
                'name' => $employee->name,
                'position' => $employee->position
            ];
        }

        header('Location: ../view/index.html');
        exit();
    }

    // read all employees
    public function login() {}

    // update an employee
    public function update() {}
    // delete an employee
    public function delete() {}
}
