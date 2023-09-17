<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $initQuery = "
        INSERT INTO user_information(ui_user_type, ui_user_number, ui_first_name, ui_last_name, ui_email, ui_password, ui_mobile_number, ui_occupation, ui_date_of_birth, ui_gender, ui_city, ui_postal_code, ui_email_status, ui_verified_at) VALUES
        (1, 'FREEFOLKS-ADMIN', 'Freefolks', 'Admin', 'freefolksfc@gmail.com', 'Password', '000', 5, '1995-07-01', 'M', 1, 1, true, NOW());
        ";

        DB::statement($initQuery);
    }
}
