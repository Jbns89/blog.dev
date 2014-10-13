<?php
    class PostsTableSeeder extends Seeder
    {
        public function run()
        {
            //you dont want to delete the users in production
            DB::table('posts')->delete();

            $post = new Post();
            
            $post->user_id = 1;
            
            $post->title = 'I love it when you call me big blogga';
            
            $post->content = 'Throw your hands in the air, if youre a true playa';
            
            $post->save();
            
            
            $post2 = new Post();
            
            $post2->user_id = 2;
            
            $post2->title = 'B.L.O.G';
            
            $post2->content = 'I dont know what yall heard about me, but you cant get a dolla outta me';
            
            $post2->save();
        }

    }
    
?>
