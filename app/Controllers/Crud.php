<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Crud extends Controller
{
    public function index()
    {
        echo view("welcome_message");
    }
}