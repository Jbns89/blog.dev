<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        
        //php artisan db:seed
        //you can also do php artisan migrate --seed
        //or you also do php artisan migrate:refresh --seed
        //in your vagrant box
    }

}
