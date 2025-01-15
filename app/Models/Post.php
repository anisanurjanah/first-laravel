<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
