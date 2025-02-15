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
        \App\Models\User::factory(3)->create();

        // \App\Models\User::create([
        //     'name' => 'Anisa Nurjanah',
        //     'email' => 'anisanurjanah2705@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        // \App\Models\User::create([
        //     'name' => 'Neilr',
        //     'email' => 'neilr4419@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        \App\Models\Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        \App\Models\Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        \App\Models\Post::factory(20)->create();

        // \App\Models\Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda, dolore, harum non dignissimos illum totam dolorem exercitationem quam cupiditate, reprehenderit culpa eum officiis maiores praesentium beatae. Soluta labore commodi, expedita error fuga tempora laboriosam quos harum voluptas dolor reiciendis molestias numquam enim aliquid non provident culpa vero quasi iusto consequuntur obcaecati magnam asperiores in. Omnis, ad tenetur. Nihil, nam placeat! Aut recusandae perspiciatis iure tempore consequuntur est repellendus vel, cumque delectus, laboriosam architecto.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda, dolore, harum non dignissimos illum totam dolorem exercitationem quam cupiditate, reprehenderit culpa eum officiis maiores praesentium beatae. Soluta labore commodi, expedita error fuga tempora laboriosam quos harum voluptas dolor reiciendis molestias numquam enim aliquid non provident culpa vero quasi iusto consequuntur obcaecati magnam asperiores in. Omnis, ad tenetur. Nihil, nam placeat! Aut recusandae perspiciatis iure tempore consequuntur est repellendus vel, cumque delectus, laboriosam architecto.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda, dolore, harum non dignissimos illum totam dolorem exercitationem quam cupiditate, reprehenderit culpa eum officiis maiores praesentium beatae. Soluta labore commodi, expedita error fuga tempora laboriosam quos harum voluptas dolor reiciendis molestias numquam enim aliquid non provident culpa vero quasi iusto consequuntur obcaecati magnam asperiores in. Omnis, ad tenetur. Nihil, nam placeat! Aut recusandae perspiciatis iure tempore consequuntur est repellendus vel, cumque delectus, laboriosam architecto.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad id aliquid provident assumenda, dolore, harum non dignissimos illum totam dolorem exercitationem quam cupiditate, reprehenderit culpa eum officiis maiores praesentium beatae. Soluta labore commodi, expedita error fuga tempora laboriosam quos harum voluptas dolor reiciendis molestias numquam enim aliquid non provident culpa vero quasi iusto consequuntur obcaecati magnam asperiores in. Omnis, ad tenetur. Nihil, nam placeat! Aut recusandae perspiciatis iure tempore consequuntur est repellendus vel, cumque delectus, laboriosam architecto.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
