<?php

namespace Database\Seeders;

use App\Constants\SettingsConstant;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::query()->insert([
            [
                'setting_name' => SettingsConstant::NAME['name'],
                'setting_value' => SettingsConstant::NAME['value']
            ],
            [
                'setting_name' => SettingsConstant::PERCENT['name'],
                'setting_value' => SettingsConstant::PERCENT['value']
            ]
            ,
            [
                'setting_name' => SettingsConstant::PRINTERLANG['name'],
                'setting_value' => SettingsConstant::PRINTERLANG['value']
            ],
            [
                'setting_name' => SettingsConstant::WAITERSALARY['name'],
                'setting_value' => SettingsConstant::WAITERSALARY['value']
            ],
            [
                'setting_name' => SettingsConstant::PRINTER_INTERFACE['name'],
                'setting_value' => SettingsConstant::PRINTER_INTERFACE['value']
            ],
            [
                'setting_name' => SettingsConstant::PASS['name'],
                'setting_value' => SettingsConstant::PASS['value']
            ],
            [
                'setting_name' => SettingsConstant::BANKET['name'],
                'setting_value' => SettingsConstant::BANKET['value']
            ],
            [
                'setting_name' => SettingsConstant::BANKET_PERCENT['name'],
                'setting_value' => SettingsConstant::BANKET_PERCENT['value']
            ],
            [
                'setting_name' => SettingsConstant::PRINTER_WIDTH['name'],
                'setting_value' => SettingsConstant::PRINTER_WIDTH['value']
            ],
            [
                'setting_name' => SettingsConstant::PRINTER['name'],
                'setting_value' => SettingsConstant::PRINTER['value']
            ],
            [
                'setting_name' => SettingsConstant::DISCOUNT['name'],
                'setting_value' => SettingsConstant::DISCOUNT['value']
            ],
        ]);
    }
}
