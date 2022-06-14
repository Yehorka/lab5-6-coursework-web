<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dish;
use App\Models\Client;
use App\Models\Chef;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('sneakers')->insert(
            [
            'id' => 1,
            'name' => 'Air Jordan 1 Retro OG',
            'price' => 7889,
            'description' => 'Кросівки AIR JORDAN 1 RETRO HIGH OG - це функціональна модель взуття, призначена для аматорських та професійних баскетбольних тренувань. Зроблені тільки з якісних матеріалів, є зносостійкими та зручними в експлуатації.
            Зовні взуття виконане зі шкіри, є перфорація в області носка для бездоганної вентиляції ваших ніг;
            Усередині мяка текстильна підкладка, устілка, що дихає;
            Підошва з піноматеріалу, прихований балон для амортизації за технологією Air. Гумова підмітка з чіпким візерунком протектора для покращення зчеплення.'
        ]);
        DB::table('sneakers')->insert(
            [
            'id' => 2,
            'name' => 'Air Jordan 3',
            'price' => 5889,
            'description' => 'Кросівки AIR JORDAN 3 - це функціональна модель взуття, призначена для аматорських та професійних баскетбольних тренувань. Зроблені тільки з якісних матеріалів, є зносостійкими та зручними в експлуатації.
            Зовні взуття виконане зі шкіри, є перфорація в області носка для бездоганної вентиляції ваших ніг;
            Усередині мяка текстильна підкладка, устілка, що дихає;
            Підошва з піноматеріалу, прихований балон для амортизації за технологією Air. Гумова підмітка з чіпким візерунком протектора для покращення зчеплення.'
        ]);
        DB::table('sneakers')->insert(
            [
            'id' => 3,
            'name' => 'Air Jordan 10',
            'price' => 10789,
            'description' => 'Кросівки AIR JORDAN 10 - це функціональна модель взуття, призначена для аматорських та професійних баскетбольних тренувань. Зроблені тільки з якісних матеріалів, є зносостійкими та зручними в експлуатації.
            Зовні взуття виконане зі шкіри, є перфорація в області носка для бездоганної вентиляції ваших ніг;
            Усередині мяка текстильна підкладка, устілка, що дихає;
            Підошва з піноматеріалу, прихований балон для амортизації за технологією Air. Гумова підмітка з чіпким візерунком протектора для покращення зчеплення.'
        ]);

        $client = Client::create([
            'name' => 'Yehor',
            'surname' => 'Suhulov'
        ]);

        $client = Client::create([
            'name' => 'Vadym',
            'surname' => 'Suhulov'
        ]);
        
        $dish = Dish::create([
            'name' => 'Carbonara',
            'client' => 1
        ]);

        $dish = Dish::create([
            'name' => 'Pizza',
            'client' => 1
        ]);

        $dish = Dish::create([
            'name' => 'Hamburger',
            'client' => 1
        ]);

        $dish = Dish::create([
            'name' => 'Hamburger',
            'client' => 2
        ]);

        $chef = Chef::create([
            'name' => 'Gordon',
            'surname' => 'Ramsay'
        ]);

        $chef = Chef::create([
            'name' => 'Joshua',
            'surname' => 'Weissmann'
        ]);

        DB::table('chef_dish')->insert([
            'chef_id' => '1',
            'dish_id' => '1'
        ]);
        DB::table('chef_dish')->insert([
            'chef_id' => '1',
            'dish_id' => '2'
        ]);
        DB::table('chef_dish')->insert([
            'chef_id' => '1',
            'dish_id' => '3'
        ]);
        DB::table('chef_dish')->insert([
            'chef_id' => '2',
            'dish_id' => '3'
        ]);
        DB::table('chef_dish')->insert([
            'chef_id' => '2',
            'dish_id' => '4'
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
