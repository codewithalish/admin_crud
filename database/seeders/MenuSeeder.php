<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Menu::create([
           'title'=>'مدیریت منو',
           'slug'=>'menu',
           'icon'=>'fas fa-fw fa-cog'
       ]);

        Menu::create([
            'title'=>'مدیریت کاربران',
            'slug'=>'users',
            'icon'=>'fas fa-fw fa-cog'
        ]);

        Menu::create([
            'title'=>'مدیریت محصولات',
            'slug'=>'products',
            'icon'=>'fas fa-fw fa-cog'
        ]);

        Menu::create([
            'title'=>'مدیریت مطالب',
            'slug'=>'posts',
            'icon'=>'fas fa-fw fa-cog'
        ]);
    }
}
