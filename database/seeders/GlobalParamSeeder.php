<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalParamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $initQuery = "
        INSERT INTO mr_global_param(mgp_code_id, mgp_slug, mgp_name, mgp_description) VALUES
        (1, 'mr_game_info', 'Game Information Type', 'Peraturan'),
        (2, 'mr_game_info', 'Game Information Type', 'Ketentuan'),
        (3, 'mr_game_info', 'Game Information Type', 'Fasilitas'),
        (1, 'mr_occupation', 'Occupation', 'Pelajar'),
        (2, 'mr_occupation', 'Occupation', 'Mahasiswa'),
        (3, 'mr_occupation', 'Occupation', 'Karyawan'),
        (4, 'mr_occupation', 'Occupation', 'Belum Bekerja'),
        (5, 'mr_occupation', 'Occupation', 'Wirausaha'),
        (1, 'mr_position', 'Player Position', 'Goalkeeper'),
        (2, 'mr_position', 'Player Position', 'Center Back'),
        (3, 'mr_position', 'Player Position', 'Right Back'),
        (4, 'mr_position', 'Player Position', 'Left Back'),
        (5, 'mr_position', 'Player Position', 'Defensive Midfielder'),
        (6, 'mr_position', 'Player Position', 'Center Midfielder'),
        (7, 'mr_position', 'Player Position', 'Attacking Midfielder'),
        (8, 'mr_position', 'Player Position', 'Right Midfielder'),
        (9, 'mr_position', 'Player Position', 'Left Midfielder'),
        (10, 'mr_position', 'Player Position', 'Striker'),
        (1, 'mr_gender', 'Gender', 'Male'),
        (2, 'mr_gender', 'Gender', 'Female'),
        (1, 'mr_body_size', 'Body Size', 'XS'),
        (2, 'mr_body_size', 'Body Size', 'S'),
        (3, 'mr_body_size', 'Body Size', 'M'),
        (4, 'mr_body_size', 'Body Size', 'L'),
        (5, 'mr_body_size', 'Body Size', 'XL'),
        (6, 'mr_body_size', 'Body Size', 'XXL'),
        (7, 'mr_body_size', 'Body Size', 'XXXL'),
        (1, 'mr_user_type', 'User Type', 'Back Office'),
        (2, 'mr_user_type', 'User Type', 'Front Office');
        ";

        DB::statement($initQuery);
    }
}
