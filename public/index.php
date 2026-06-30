<?php
// Load configuration settings
require_once '../app/config/config.php';

// Core Framework Classes Autoloader
require_once '../app/core/App.php';
require_once '../app/core/Controller.php';

// Initialize the routing system
$init = new App();