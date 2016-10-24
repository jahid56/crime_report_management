<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RobberiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('robberies')->insert(
            array(
                array('first_name' => 'Alabama', 'last_name' => 'AL','street_address_home' => 'Binodpur Rajshahi','city' => 'Rajshahi',
                    'zip_code' => '6206','phone_number' => '01670259077','email' => 'someone@email.com','gender' => 'male','day' => '23',
                    'month' => '05', 'year' => '1990','street_address_incident' => 'kajla','city_incident'=>'rajshahi','zip_code_incident'=>'6206',
                    'incident_start'=>'04/04/2016 9:37 AM','incident_end'=>'04/22/2016 9:38 AM','witness'=>'No','type'=>'ATM/Debit Card',
                    'brand'=>'','model'=>'','color'=>'Brown','serial_no'=>'1245454545','how_many'=>'01','description'=>'hhghghdgfhdgfhgdsdsdsfgfghghghgfhghjkhkgff',
                    'narrative'=>'gdsgdsgdhsgdhsdghsshdghsgdhsgdhsgdhsgdhgshdgshdgshdghsdghsgdhsghdgshdgshdgshdgshgdhs')
            ));
    }
}
