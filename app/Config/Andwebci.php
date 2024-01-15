<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Andwebci extends BaseConfig
{
    public $version = "1.0.10122023";
    public $admin_logo = '/assets/andweb/img/logo.png';
    public $admin_theme = 'Andwebci\Views\back';
    public $front_theme = 'signature';
    public $active_core_modules = ["admins", "admin_menus", "agencies"];
}