<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Category;

/**
 * Class CategoriesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CategoriesController extends Controller
{

    /**
     * 获取分类列表数据
     * @Author   beanTang                 t13764767060@gmail.com
     * @DateTime 2018-11-20T15:52:59+0800
     */
    public function getList () {
        
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
}
