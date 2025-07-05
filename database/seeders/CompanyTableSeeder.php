<?php

namespace Database\Seeders;


use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Smartisan\Settings\Facades\Settings;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::group('company')->set([
            'company_name'         => 'Kanteen - QrCode Restaurant Menu Maker and Contactless Menu Ordering system',
            'company_email'        => 'kanteen@iti.ac.id',
            'company_phone'        => '+6288888888888888',
            'company_website'      => 'https://kanteen.xyz',
            'company_city'         => 'Tangerang Selatan',
            'company_state'        => 'Banten',
            'company_country_code' => 'ID',
            'company_zip_code'     => '12345',
            'company_address'      => 'Jl. Raya Kanteen No. 123, Tangerang Selatan, Banten, Indonesia',
        ]);

        $envService = new EnvEditor();
        $envService->addData([
            'APP_NAME' => "Kanteen - QrCode Restaurant Menu Maker and Contactless Menu Ordering system"
        ]);
        Artisan::call('optimize:clear');
    }
}
