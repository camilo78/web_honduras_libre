<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Support\Facades\App;
use Modules\Blog\Repositories\CategoryRepository;
use Modules\Blog\Repositories\PostRepository;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\PostTranslation;
use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\BasePublicController;

class PublicController extends BasePublicController
{
    /**
     * @var PostRepository
     */
    private $post;

    public function __construct(PostRepository $post, CategoryRepository $category)
    {
        parent::__construct();
        $this->post = $post;
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $categories = $this->category->all();
        $posts = $this->post->paginate(5);
        return view('blog.index', compact('posts','categories'));
    }

    public function show($slug)
    {
        $categories = $this->category->all();
        $post = $this->post->findBySlug($slug);

        return view('blog.show', compact('post','categories'));
    }
    public function category($slug)
    {
        $categories = $this->category->all();
        $category_id = $this->category->all()->where('slug', '=', $slug)->first()->id;
        $category = $this->category->all()->where('slug', '=', $slug)->first()->name;
        //$posts = $this->post->allTranslatedIn(App::getLocale())->where('category_id', '=', $category_id);
        $posts = Post::where('category_id', '=', $category_id)->paginate(5);
        //dd($posts);

        return view('blog.category', compact('posts','categories','category'));
    }
    public function search(Request $request)
       {

          if($request->ajax()){

            $output="";
            $_posts = PostTranslation::where('title','LIKE','%'.$request->search."%")->where('locale', '=', locale())->take(2)->get();

            if($_posts){

               foreach ($_posts as  $_post) {

                $output.='<td><a href="posts/'. $_post->slug .'">'.$_post->title.'</a></td>'.

                '</tr>';

               }
               return $output;

            }

          }

       }
}
