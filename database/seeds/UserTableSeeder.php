<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
	        	'name'      => 'Administrador',
	        	'last_name' => 'DCORS',
	        	'ci'        => '12345678',
	        	'piso'      => '4',
	        	'email'     => 'admin@gmail.com',
	        	'password'  => bcrypt('12345678'),
	        	'type'      => 'admin',
	        	'active'    => 1,
	        	'created_at'=> new DateTime,
	        	'updated_at'=> new DateTime
        	],
        	[
	        	'name'      => 'eliel',
	        	'last_name' => '008',
	        	'ci'        => '20489947',
	        	'piso'      => '4',
	        	'email'     => 'eliel@gmail.com',
	        	'password'  => bcrypt('12345678'),
	        	'type'      => 'user',
	        	'active'    => 1,
	        	'created_at'=> new DateTime,
	        	'updated_at'=> new DateTime
        	],
        	[
	        	'name'      => 'vocero',
	        	'last_name' => 'DCORS',
	        	'ci'        => '99222333',
	        	'piso'      => '2',
	        	'email'     => 'vocero@gmail.com',
	        	'password'  => bcrypt('12345678'),
	        	'type'      => 'vocero',
	        	'active'    => 1,
	        	'created_at'=> new DateTime,
	        	'updated_at'=> new DateTime
        	],
        );

        User::insert($data);
    }
}
