<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Anisa Nurjanah",
        "email" => "anisanurjanah2705@gmail.com",
        "image" => "image.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "How to Win Friends",
            "slug" => "how-to-win-friends",
            "author" => "Dale",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste mollitia, tempore natus nisi aut vel fugiat ab consequuntur dolore architecto illum exercitationem dicta, reiciendis sunt quidem cumque odio quam blanditiis?"
        ],
        [
            "title" => "Alpha Girls",
            "slug" => "alpha-girls",
            "author" => "Henry",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam architecto, provident a atque voluptatem quos, facere soluta doloribus, dignissimos error dicta quasi. Odio excepturi quibusdam, cupiditate perspiciatis sequi eaque mollitia assumenda commodi autem. Iste dolorem veniam cumque suscipit tempora sint eius quae voluptates et deleniti velit voluptatibus iusto repellendus, quis dolor illum accusamus eveniet incidunt aliquam quasi quaerat cum dolorum natus ipsum. At similique temporibus velit dicta architecto voluptas saepe est cum et ea fugit reprehenderit quae ab id iure repellat, aliquam, quos delectus magnam animi quis? Aut voluptatem commodi assumenda molestiae quas libero ex maxime, recusandae dolorum iusto rem."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});


Route::get('/posts/{slug}', function($slug) {
    $blog_post = [
        [
            "title" => "How to Win Friends",
            "slug" => "how-to-win-friends",
            "author" => "Dale",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste mollitia, tempore natus nisi aut vel fugiat ab consequuntur dolore architecto illum exercitationem dicta, reiciendis sunt quidem cumque odio quam blanditiis?"
        ],
        [
            "title" => "Alpha Girls",
            "slug" => "alpha-girls",
            "author" => "Henry",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam architecto, provident a atque voluptatem quos, facere soluta doloribus, dignissimos error dicta quasi. Odio excepturi quibusdam, cupiditate perspiciatis sequi eaque mollitia assumenda commodi autem. Iste dolorem veniam cumque suscipit tempora sint eius quae voluptates et deleniti velit voluptatibus iusto repellendus, quis dolor illum accusamus eveniet incidunt aliquam quasi quaerat cum dolorum natus ipsum. At similique temporibus velit dicta architecto voluptas saepe est cum et ea fugit reprehenderit quae ab id iure repellat, aliquam, quos delectus magnam animi quis? Aut voluptatem commodi assumenda molestiae quas libero ex maxime, recusandae dolorum iusto rem."
        ],
    ];

    $new_post = [];
    foreach($blog_post as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
