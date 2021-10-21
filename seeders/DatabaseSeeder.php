<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Category;
use App\models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        


        // User::create([
        //     'name'=> 'Dimas Nanda Herlambang',
        //     'email' => 'herlambang923@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=> 'Febryanti Ratnasari',
        //     'email' => 'febri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' =>'Judul Pertama',
        //     'slug' => 'judul pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi cumque rem fugit eveniet architecto. Beatae ratione minus nobis ipsam dolorum eum aperiam ex? Nesciunt possimus, provident sit, consectetur ea accusantium molestias corporis necessitatibus magni dolores, blanditiis exercitationem delectus hic culpa. Vel incidunt nesciunt voluptates nam porro, deleniti eius quas, praesentium iusto odio labore, quaerat delectus! Explicabo temporibus reiciendis distinctio, expedita, aut itaque voluptatum, numquam dolor doloribus quidem ut doloremque! Magnam, totam debitis! Eveniet nihil similique quia accusantium alias ab.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi cumque rem fugit eveniet architecto. Beatae ratione minus nobis ipsam dolorum eum aperiam ex? Nesciunt possimus, provident sit, consectetur ea accusantium molestias corporis necessitatibus magni dolores, blanditiis exercitationem delectus hic culpa. Vel incidunt nesciunt voluptates nam porro, deleniti eius quas, praesentium iusto odio labore, quaerat delectus! Explicabo temporibus reiciendis distinctio, expedita, aut itaque voluptatum, numquam dolor doloribus quidem ut doloremque! Magnam, totam debitis! Eveniet nihil similique quia accusantium alias ab.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' =>'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi cumque rem fugit eveniet architecto. Beatae ratione minus nobis ipsam dolorum eum aperiam ex? Nesciunt possimus, provident sit, consectetur ea accusantium molestias corporis necessitatibus magni dolores, blanditiis exercitationem delectus hic culpa. Vel incidunt nesciunt voluptates nam porro, deleniti eius quas, praesentium iusto odio labore, quaerat delectus! Explicabo temporibus reiciendis distinctio, expedita, aut itaque voluptatum, numquam dolor doloribus quidem ut doloremque! Magnam, totam debitis! Eveniet nihil similique quia accusantium alias ab.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);  
        
        // Post::create([
        //     'title' =>'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis expedita fuga qui nulla, fugiat amet obcaecati molestias mollitia suscipit dolor facilis sit ipsa aliquid laborum eos ipsam officia ea quasi cumque rem fugit eveniet architecto. Beatae ratione minus nobis ipsam dolorum eum aperiam ex? Nesciunt possimus, provident sit, consectetur ea accusantium molestias corporis necessitatibus magni dolores, blanditiis exercitationem delectus hic culpa. Vel incidunt nesciunt voluptates nam porro, deleniti eius quas, praesentium iusto odio labore, quaerat delectus! Explicabo temporibus reiciendis distinctio, expedita, aut itaque voluptatum, numquam dolor doloribus quidem ut doloremque! Magnam, totam debitis! Eveniet nihil similique quia accusantium alias ab.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}