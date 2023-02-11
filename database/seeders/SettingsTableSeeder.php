<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();
          $date = [
              ['key' => 'Name_site'                       ,   'vlaue' =>'Hostly'],
              ['key' => 'Hostly_title'                    ,   'vlaue' =>'HS'],
              ['key' => 'phone'                           ,   'vlaue' =>'011428568'],
              ['key' => 'address'                         ,  'vlaue' =>'cairo'],
              ['key' => 'Hoslty_email'                    ,   'vlaue' =>'info@Hostly.com'],
              ['key' => 'logo'                            ,   'vlaue' =>'1.jpg'],
              ['key' => 'Our_Services'                    ,   'vlaue' =>'Our Services'],
              ['key' => 'Our_Services_datils'             ,   'vlaue' =>' Our Services datils'],
              ['key' => 'Cloud_Host'                      ,   'vlaue' =>'Cloud Hosting'],
              ['key' => 'Cloud_Host_datils'               ,   'vlaue' =>'Cloud_Host_dat'],
              ['key' => 'Cloud_Host_image'                ,   'vlaue' =>'1.jpg'],
              ['key' => 'Our_costumers'                   ,   'vlaue' =>' Our costumers'],
              ['key' => 'Our_costumers_datils'            ,   'vlaue' =>'Our costumers datils'],
              ['key' => 'Our_Domain'            ,   'vlaue' =>'OOur Domain'],
              ['key' => 'Our_Domain_datils'            ,   'vlaue' =>'Our Ou Domain datils'],
              ['key' => 'Enjoy_Feature'            ,   'vlaue' =>'Enjoy Feature'],
              ['key' => 'Enjoy_Feature_datils'            ,   'vlaue' =>'Enjoy_Feature_datils'],
              ['key' => 'Frequently_Asked'            ,   'vlaue' =>'Frequently Asked'],
              ['key' => 'Frequently_Asked_datils'            ,   'vlaue' =>'Frequently Asked datils'],

          ]  ;
          DB::table('settings')->insert($date);

    }
}
