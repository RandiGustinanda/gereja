<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestDb extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        if (!$db->connect_error) {
            echo 'Database connection success!';
        } else {
            echo 'Database connection failed!';
        }
    }
}
?>