<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Database\Seeder;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20',//persentage(vat)
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            
        ];
        //this array $config_payment for insert data
        ConfigPayment::insert($config_payment);
    }
}
