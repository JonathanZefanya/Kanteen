<?php

namespace Database\Seeders;

use Dipokhalder\EnvEditor\EnvEditor;
use App\Enums\Status;
use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create([
            'name'      => 'Kanteen (main)',
            'email'     => 'kanteen@gmail.com',
            'phone'     => '+628888888888',
            'latitude'  => -6.2921371,
            'longitude' => 106.7181532,
            'city'      => 'Tangerang Selatan',
            'state'     => 'Banten',
            'zip_code'  => '12345',
            'address'   => 'Jl. Raya Kanteen No. 123, Tangerang Selatan, Banten, Indonesia',
            'status'    => Status::ACTIVE,
        ]);

        $envService = new EnvEditor();
        if ($envService->getValue('DEMO')) {
            Branch::create([
                'name'      => 'Kanteen (main)',
                'email'     => 'kanteen@gmail.com',
                'phone'     => '+628888888888',
                'latitude'  => -6.2921371,
                'longitude' => 106.7181532,
                'city'      => 'Tangerang Selatan',
                'state'     => 'Banten',
                'zip_code'  => '12345',
                'address'   => 'Jl. Raya Kanteen No. 123, Tangerang Selatan, Banten, Indonesia',
                'status'    => Status::ACTIVE,
            ]);
        }
    }
}
