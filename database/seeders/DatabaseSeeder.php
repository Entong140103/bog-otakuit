<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Post::factory()->create([
            'judul' => 'Naruto',
            'category_id' => 2,
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia aliquid architecto corrupti ad in alias facere explicabo quaerat blanditiis facilis harum iste at natus cum autem atque neque, quos sit sed. Tenetur eum obcaecati laborum. Voluptate officiis magni voluptatibus distinctio quidem qui tempora autem, reprehenderit eveniet veritatis quos minima sed quam nemo amet a, non iure! Est necessitatibus totam voluptatem dolorum, possimus quibusdam fugiat autem veritatis illo veniam voluptate suscipit doloribus cumque sunt quam fuga voluptates neque temporibus obcaecati? Excepturi quibusdam expedita mollitia odio dolor molestiae? Alias, mollitia saepe possimus magni ipsum nemo iusto placeat culpa? Maiores libero amet tempore nostrum cupiditate atque voluptatem esse corporis earum harum cum aspernatur modi non repudiandae, culpa dolor eligendi eveniet officia iusto optio quibusdam inventore! Maiores dolor enim debitis, facilis sapiente officia ipsam ex beatae ipsa reiciendis eaque culpa repellat harum odit perspiciatis at hic labore adipisci quo velit? Facere magni minima labore optio error, voluptate delectus, blanditiis impedit ex deserunt soluta laboriosam. Modi alias dolores recusandae consequatur. Tempora veritatis iste fugiat placeat reiciendis explicabo fugit aut facere, ipsa est voluptate quaerat similique reprehenderit blanditiis repellat ut, eos accusamus at rem nemo hic, sint minima? Laudantium atque dolorem velit mollitia fugiat aut ratione!'

        ]);
         \App\Models\Post::factory()->create([
                'judul' => 'PC',
                'category_id' => 1,
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia aliquid architecto corrupti ad in alias facere explicabo quaerat blanditiis facilis harum iste at natus cum autem atque neque, quos sit sed. Tenetur eum obcaecati laborum. Voluptate officiis magni voluptatibus distinctio quidem qui tempora autem, reprehenderit eveniet veritatis quos minima sed quam nemo amet a, non iure! Est necessitatibus totam voluptatem dolorum, possimus quibusdam fugiat autem veritatis illo veniam voluptate suscipit doloribus cumque sunt quam fuga voluptates neque temporibus obcaecati? Excepturi quibusdam expedita mollitia odio dolor molestiae? Alias, mollitia saepe possimus magni ipsum nemo iusto placeat culpa? Maiores libero amet tempore nostrum cupiditate atque voluptatem esse corporis earum harum cum aspernatur modi non repudiandae, culpa dolor eligendi eveniet officia iusto optio quibusdam inventore! Maiores dolor enim debitis, facilis sapiente officia ipsam ex beatae ipsa reiciendis eaque culpa repellat harum odit perspiciatis at hic labore adipisci quo velit? Facere magni minima labore optio error, voluptate delectus, blanditiis impedit ex deserunt soluta laboriosam. Modi alias dolores recusandae consequatur. Tempora veritatis iste fugiat placeat reiciendis explicabo fugit aut facere, ipsa est voluptate quaerat similique reprehenderit blanditiis repellat ut, eos accusamus at rem nemo hic, sint minima? Laudantium atque dolorem velit mollitia fugiat aut ratione!'

            ]);
        \App\Models\Post::factory()->create([
                'judul' => 'Nittendo',
                'category_id' => 3,
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia aliquid architecto corrupti ad in alias facere explicabo quaerat blanditiis facilis harum iste at natus cum autem atque neque, quos sit sed. Tenetur eum obcaecati laborum. Voluptate officiis magni voluptatibus distinctio quidem qui tempora autem, reprehenderit eveniet veritatis quos minima sed quam nemo amet a, non iure! Est necessitatibus totam voluptatem dolorum, possimus quibusdam fugiat autem veritatis illo veniam voluptate suscipit doloribus cumque sunt quam fuga voluptates neque temporibus obcaecati? Excepturi quibusdam expedita mollitia odio dolor molestiae? Alias, mollitia saepe possimus magni ipsum nemo iusto placeat culpa? Maiores libero amet tempore nostrum cupiditate atque voluptatem esse corporis earum harum cum aspernatur modi non repudiandae, culpa dolor eligendi eveniet officia iusto optio quibusdam inventore! Maiores dolor enim debitis, facilis sapiente officia ipsam ex beatae ipsa reiciendis eaque culpa repellat harum odit perspiciatis at hic labore adipisci quo velit? Facere magni minima labore optio error, voluptate delectus, blanditiis impedit ex deserunt soluta laboriosam. Modi alias dolores recusandae consequatur. Tempora veritatis iste fugiat placeat reiciendis explicabo fugit aut facere, ipsa est voluptate quaerat similique reprehenderit blanditiis repellat ut, eos accusamus at rem nemo hic, sint minima? Laudantium atque dolorem velit mollitia fugiat aut ratione!'

            ]);

        \App\Models\Category::factory()->create([
            'nama' => 'IT'
        ]);
        \App\Models\Category::factory()->create([
            'nama' => 'Anime'
        ]);
        \App\Models\Category::factory()->create([
            'nama' => 'Game'
        ]);
    }
}
