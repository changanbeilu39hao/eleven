<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        $followers = $users->slice(1);
        $followers_ids = $followers->pluck('id')->toArray();

        // 关注除了 1 以外的所有用户
        $user->follow($followers_ids);

        // 除了 1 以外的所有用户都来关注 1
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
