<?php

use App\Address;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
//     \App\User::create([
//         'name'=>'Angelina',
//         'email'=>'angel@gmail.com',
//     ]);
//     \App\User::create([
//         'name'=>'Shoili',
//         'email'=>'sl@gmail.com',
//     ]);
//     \App\User::create([
//         'name'=>'Umme',
//         'email'=>'u@gmail.com',
//     ]);
//     \App\User::create([
//         'name'=>'Salma',
//         'email'=>'s@gmail.com',
//     ]);
//     .................................................................
//     \App\Address::create([
//         'user_id'=>1,
//         'country'=>'Bangladesh',
//         'city'=>'Dhaka',
//     ]);
//     \App\Address::create([
//         'user_id'=>2,
//         'country'=>'India',
//         'city'=>'Delhi',
//     ]);
//     \App\Address::create([
//         'user_id'=>3,
//         'country'=>'India',
//         'city'=>'Gujrat',
//     ]);
//     \App\Address::create([
//         'user_id'=>4,
//         'country'=>'China',
//         'city'=>'Tokiyo',
//     ]);
//     \App\Address::create([
//         'user_id'=>5,
//         'country'=>'Bangladesh',
//         'city'=>'Gazipur',
//     ]);
//     ................................................................
//     gets all user including address
//     $user = \App\User::with('address')->get();
//     dd($user);
//     gets all address including user
//     $address = \App\Address::with('user')->get();
//     dd($address);
//     ................................................................
//     we can associate address with user, as address belongs to user
//     we can use association with only child class like address
//     this method will set the foreign_key_constraints
//     $u=\App\User::create(['name'=>'John', 'email'=>'john@example.com']);
//     we can not create address model without user_id. thats why we created a object of Address class
//     $a =new \App\Address(['country'=>'Japan', 'city'=>'Tokiyo']);
//     $a->user()->associate($u);
//     $a->save();
//     dd($u);
//     ................................................................
//     post table making 
//     \App\post::create(['title'=>'Shining star','user_id'=>1]);
//     \App\post::create(['title'=>'Shining Cat','user_id'=>2]);
//     \App\post::create(['title'=>'Shining Dog','user_id'=>1]);
//     \App\post::create(['title'=>'Shining Mete','user_id'=>2]);
//     \App\post::create(['title'=>'Shining Shahanaz','user_id'=>3]);
//     \App\post::create(['title'=>'Shining Rani','user_id'=>1]);
//     \App\post::create(['title'=>'Shining Shifa','user_id'=>3]);
//     ................................................................
//     $user = \App\User::with('posts')->get();
//     dd($user);
//     ................................................................
//     $user = \App\User::with('posts','address')->get();
//     dd($user);
//     ................................................................
//     add some tag values
//     \App\Tag::create(['tagName'=>'Laravel']);
//     \App\Tag::create(['tagName'=>'React']);
//     \App\Tag::create(['tagName'=>'Node']);
//     \App\Tag::create(['tagName'=>'Linode']);
//     \App\Tag::create(['tagName'=>'Gangstar']);
//     ................................................................
//     $post = \App\Post::first();
//     $tag = \App\Tag::first();
//     $post->tags()->attach([1=>[
//         'status' =>'mula',
//     ]]);
//      ................................................................
//     $post = \App\Post::first();
//     $post->tags()->detach();

//     ...............................................................
//     detach+attach = sync();
//     $post = \App\Post::first();
//     $post->tags()->attach([1=>['status' =>'active'],2=>['status' =>'idle'],3=>['status' =>'active']]);
//     $post->tags()->detach();
//     ...............................................................
//     $post = \App\Post::first();
//     $post->tags()->sync([3=>['status' =>'active'],2=>['status' =>'idle'],4=>['status' =>'active']]);
//     ...............................................................
//     after removing status from post_tag table
//     $post = \App\Post::first();
//     $post->tags()->detach();
//     $post->tags()->attach([1,2,3,4,5]);
// ...............................................................
//     $user = User::with('addresses','posts')->get();
//         dd($user[0]->addresses->country);

//         $address = Address::with('user')->get();
//         dd($address[0]->user->name);
// ...............................................................
//         $user = User::create([
//             'name'=>'shoili',
//             'email'=>'sr@gmail.com',
//             'password'=>'123456',
//         ]);
//         $address =new Address([
//             'country'=>'Bangladesh',
//             'city'=>'Dhaka',
//         ]);
//         $address->user()->associate($user);
//         $address->save();
//         ...............................................................
//         $users = User::with('posts')->has('posts',">",4)->get();
//         $users = User::whereHas('posts',function($query){
//             $query->where('name','like','%Mellie%');
//         })->get();
//         dd($users);
//       ...............................................................

//         $post = \App\Post::first();
//         $tag = \App\Tag::first();
//         $post->tags()->attach($tag);
//         $post->tags()->attach([4,5]);
//         $post = \App\Post::with('tags')->get();
//         dd($post);
//         $post = \App\Post::with('tags')->first();
//         dd($post);
//         $post->tags()->detach();
//         $post->tags()->attach([1,2,3,4,5]);
//         Sync
//         $post->tags()->sync([3]);
//         dd($post);
//         $post = \App\Post::first();
//         dd($post);
//         $post = \App\Post::with('tags')->first();
//         $post->tags()->attach([4=>[
//             'status' =>'active',
//         ],5=>[
//             'status' => 'achieved',
//         ]]);
//         echo ($post->tags->first()->pivot->created_at);
//         return view('Welcome',['date'=>$d]);
});
