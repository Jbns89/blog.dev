<?php
    class UserTableSeeder extends Seeder
    {
        public function run()
        {
            //you dont want to delete the users in production
            DB::table('users')->delete();

            $user = new User();
            
            $user->email = 'admin@codeup.com';
            
            //hashing makes it so the password isnt in plain text
            //in your database
            $user->password = 'adminPass123!';
            
            $user->save();
            
            
            $user2 = new User();
            
            $user2->email = 'JILL@codeup.com';
            
            //hashing makes it so the password isnt in plain text
            //in your database
            $user2->password = 'adminpass123';
            
            $user2->save();
        }

    }
    
?>
