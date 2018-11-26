<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{

    /**
     * 获取分类列表数据
     * @Author   beanTang                 t13764767060@gmail.com
     * @DateTime 2018-11-20T15:52:59+0800
     */
    public function getCategories () {

        $res = Category::withCount('posts')->get();

        $data = $res->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'posts_count' => $item->posts_count
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * 获取文章列表
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getPosts (Request $request) {

        $res = Post::with(['category', 'authorId'])->get();

        $data = $res->map(function ($item) {
            return [
                'title' => $item->title,
                'excerpt' => $item->excerpt,
                'image' => \Storage::url($item->image),
                'body' => $item->body,
                'created_at' => $item->created_at->format('Y-m-d H:i:s'),
                'category' => [
                    'name' => $item->category->name
                ],
                'author' => $item->authorId->name,
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }
}
