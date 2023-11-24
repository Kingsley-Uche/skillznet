<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogModel;

class FrontendController extends Controller
{
    //
    public function index(){

        $slider_data = BlogModel::latest('id')->take(4)->get();

        $page = request()->input('page',4);
        $perPage = 3;
        $offset =($page - 1)*$perPage;
        $data =BlogModel::select('id','title','featured_image','excerpt')
                         ->offset($offset)
                        ->paginate($perPage);


                                ;


$slider_data= $slider_data->toArray();


        return view('layouts.frontend.layouts.front_welcome',['data'=>$data, 'slider'=>$slider_data]);


    }


    public function get_single($id){

        $data =BlogModel::join('users', 'blog_models.author_id','=','users.id')
                            ->select('title','featured_image','slug', 'post_content', 'first_name','last_name')
                              ->where('blog_models.id', '=', $id)->first();

                            return view('layouts.frontend.layouts.blog_view',['data'=>$data]);

    }
}
