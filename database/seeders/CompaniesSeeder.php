<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
             ['name' => 'Company1', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company2', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company3', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company4', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company5', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company21', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company5', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company6', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company7', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company8', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company9', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company10', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company11', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company12', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company13', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company14', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company15', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company16', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company17', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company18', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company19', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
             ['name' => 'Company20', 'email' => 'admin@admin.com', 'logo' => 'image/path/logo.png','website'=>"www.example.com"],
        ];
        
        foreach ($companies as $company) {
            DB::table('companies')->insert($company);
            // companies::query()->create($company);
        }
    }
}
