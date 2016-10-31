<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*for($i=0; $i<10; $i++){
        	DB::table('posts') ->insert([
        		'id' =>$i+1,
        		'title' =>str_random(rand(10,15)), //cadenas entre 10 y 15 letras
        		'text' =>"Me? i'm dishonest, and a dishonest man you can always trust to be dishonest. honestly. it's the honest ones you want to watch out for, because you can never predict when they're going to do something incredibly... stupid. what? no. we can't stop here. this is bat country. a drug person can learn to cope with things like seeing their dead grandmother crawling up their leg with a knife in her teeth. but no one should be asked to handle this trip. holy jesus. what are these goddamn animals? we had two bags of grass, seventy-five pellets of mescaline, five sheets of high-powered blotter acid, a saltshaker half-full of cocaine, and a whole galaxy of multi-colored uppers, downers, screamers, laughers... forget about it is, like, if you agree with someone, you know, like raquel welch is one great piece of ass. forget about it! but then, if you disagree, like a lincoln is better than a cadillac? forget about it! you know? but then, it's also like if something's the greatest thing in the world, like, minghia! those peppers! forget about it! we're not sheep! giddy-up... no, no this way... good horsey. do you like my meadow? try some of my grass! please have a blade, please do, it's so delectable and so darn good looking! well, then, i confess, it is my intention to commandeer one of these ships, pick up a crew in tortuga, raid, pillage, plunder and otherwise pilfer my weasely black guts out. we are very much alike, you and i, i and you... us.",
        		'user_id' =>1
        		]);
			DB::table('pictures') -> insert([
				'id'=>$i+1,
				'name' =>str_random(rand(10,15)),
				'description' =>"Me? i'm dishonest, and a dishonest man you can always trust to be dishonest.",
				'post_id' =>$i+1
				]);
        }
		*/

		factory(App\Post::class,10)->make()->each(function($p){
			$u=App\User::find(1);
			$u ->posts()->save($p);
		});
    }
}
