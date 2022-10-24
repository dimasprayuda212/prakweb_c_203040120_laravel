<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
        "name" => "Dimas Prayuda",
        "email" => "dimassprayuda212@gmail.com",
        "image" => "dimas.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dimas Prayuda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias delectus dolore reprehenderit labore ipsum repudiandae, inventore cum soluta autem sunt consequatur accusamus sint, perferendis maiores nulla natus distinctio quae beatae est iure, mollitia dolor deserunt eum? Assumenda dicta, sequi excepturi incidunt, enim eos possimus aperiam quod cumque debitis quae, quidem minus vitae sed ad? Consequuntur ratione veritatis rem laborum nisi exercitationem, repudiandae cum quo eveniet quod sed eaque natus iste, recusandae perferendis voluptas voluptatibus eius quibusdam suscipit nemo accusantium asperiores?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fressa Bayu",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsa incidunt accusantium excepturi obcaecati vitae ab, qui natus nostrum sunt cupiditate. Deserunt eos officia impedit consequuntur quas. Dignissimos molestiae accusamus optio officia incidunt expedita possimus aliquam inventore aut doloribus temporibus aperiam quasi alias quod, minima repudiandae reiciendis consectetur veniam in harum rerum iusto maiores. Labore commodi magni assumenda odio tenetur earum quo nostrum aliquid perferendis porro, quasi laudantium esse eveniet amet ut adipisci quidem magnam nesciunt ab blanditiis, aperiam aliquam beatae! Modi exercitationem quasi a tempore beatae, sapiente ad nostrum qui neque? Ut dolorum, ad ea cum deserunt et pariatur!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dimas Prayuda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias delectus dolore reprehenderit labore ipsum repudiandae, inventore cum soluta autem sunt consequatur accusamus sint, perferendis maiores nulla natus distinctio quae beatae est iure, mollitia dolor deserunt eum? Assumenda dicta, sequi excepturi incidunt, enim eos possimus aperiam quod cumque debitis quae, quidem minus vitae sed ad? Consequuntur ratione veritatis rem laborum nisi exercitationem, repudiandae cum quo eveniet quod sed eaque natus iste, recusandae perferendis voluptas voluptatibus eius quibusdam suscipit nemo accusantium asperiores?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fressa Bayu",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsa incidunt accusantium excepturi obcaecati vitae ab, qui natus nostrum sunt cupiditate. Deserunt eos officia impedit consequuntur quas. Dignissimos molestiae accusamus optio officia incidunt expedita possimus aliquam inventore aut doloribus temporibus aperiam quasi alias quod, minima repudiandae reiciendis consectetur veniam in harum rerum iusto maiores. Labore commodi magni assumenda odio tenetur earum quo nostrum aliquid perferendis porro, quasi laudantium esse eveniet amet ut adipisci quidem magnam nesciunt ab blanditiis, aperiam aliquam beatae! Modi exercitationem quasi a tempore beatae, sapiente ad nostrum qui neque? Ut dolorum, ad ea cum deserunt et pariatur!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
