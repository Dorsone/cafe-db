<?php

namespace App\Constants;

class SettingsConstant
{
    const SETTINGS_VALUE = [
        self::NAME,
        self::PERCENT,
        self::PRINTERLANG,
        self::WAITERSALARY,
        self::PRINTER_INTERFACE,
        self::PASS,
        self::BANKET,
        self::BANKET_PERCENT,
        self::PRINTER_WIDTH,
        self::PRINTER,
        self::DISCOUNT,
    ];

    const NAME = ['value' => 's:9:"KIF Foods";', 'name' => 'name'];
    const PERCENT = ['value' => 's:1:"5";', 'name' => 'percent'];
    const PRINTERLANG = ['value' => 's:3:"eng";', 'name' => 'printerLang'];
    const WAITERSALARY = ['value' => 's:1:"4";', 'name' => 'waiterSalary'];
    const PRINTER_INTERFACE = ['value' => 's:8:"ethernet";', 'name' => 'printer_interface'];
    const PASS = ['value' => 's:4:"pass";', 'name' => 'pass'];
    const BANKET = ['value' => 's:1:"0";', 'name' => 'banket'];
    const BANKET_PERCENT = ['value' => 's:2:"17";', 'name' => 'banket_percent'];
    const PRINTER_WIDTH = ['value' => 's:2:"80";', 'name' => 'printer_width'];
    const PRINTER = ['value' => 's:13:"192.168.0.201";', 'name' => 'printer'];
    const DISCOUNT = ['value' => 's:3:"sum";', 'name' => 'discount'];

}
