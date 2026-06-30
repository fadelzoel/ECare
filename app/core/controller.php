<?php
class controller {
    // Load Model
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Load View (and pass data to it)
    public function view($view, $data = []) {
        if (file_exists('../views/' . $view . '.php')) {
            require_once '../views/' . $view . '.php';
        } else {
            die("View '$view' does not exist.");
        }
    }
}