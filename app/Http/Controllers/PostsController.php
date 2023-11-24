<?php

namespace App\Http\Controllers;

use App\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create (){
        return view('blogs.create');


    }

    public function add(request $request){

        // $data =$request->input;
        // $data['featured_image']=$request->file('featured_image');

       $validator= $this->rules( $request);

       if($validator->passes()){

//passes validation

$data=$request->input();


$data['post_content']=strip_tags($data['post_content']);

$data =$request->except('_token');
  $data['author_id']= intval(Auth::user()->id);
  $file=$request->file('featured_image');

  $data['featured_image']=$file->getClientOriginalExtension();


  $data['featured_image']= 'uploads/'.time().'.'.$data['featured_image'];
   $file->move(public_path('uploads'),$data['featured_image']);



  $data =BlogModel::create($data);
  return  redirect('posts/view')->with('message','Created Created Successfully ');


       }else{

        return redirect()->back()->withErrors($validator)->withInput();
       }





    }


    public function view()
    {

        $page = request()->input('page', 1);
        $perPage = 4;
        $offset =($page - 1)*$perPage;



        //Allow an author to view and edit only his or her own posts
        $data=BlogModel::where('author_id', '=',Auth::user()->id)
                        ->offset($offset)
                        ->paginate($perPage);



        return view('blogs.index',['data'=>$data]);

    }



    private function rules( $data){



if(isset($data['id'])){



  if($data->file('featured_image')){

    //validate the image


    $rules= [

        'title' => 'required|string|max:256',
        'slug' => 'required|string|max:50',
        'excerpt' => 'required|string|max:20',
        'post_content'=>'required|string|max:20000',
        'featured_image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',];




}else{

    $rules= [

        'title' => 'required|string|max:256',
        'slug' => 'required|string|max:50',
        'excerpt' => 'required|string|max:20',
        'post_content'=>'required|string|max:20000',];


}



    }else{

        //for create

        $rules= [

            'title' => 'required|string|max:256',
            'slug' => 'required|string|max:50',
            'excerpt' => 'required|string|max:20',
            'post_content'=>'required|string|max:20000',
            'featured_image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',];

}


return validator($data->all(),$rules);


}





    public function modify(Request $request){

        //Logic to carry out edit or delete of a specific post
        $inputs=$request->input();
        $clicked =$inputs['btn_clicked'];
        $comp =explode('_',$clicked);

        $id_clicked = $comp[0];
        $data=BlogModel::find($id_clicked);
     $activity =$comp[1];
         if(trim($activity)=='Edit'){


/* load edit page and pass the required data to its view

*/
            return view('blogs.edit_page', ['data'=>$data]);




         }else{

             /*it is delete then delete

            delete the featured image from the folder and then delete the post from the database


            */

            $image =$data->featured_image;
            if(file_exists($image)){
              @unlink($image);
              $data->delete($id_clicked);
            }else{
                $data->delete($id_clicked);
            }




             return  redirect('posts/view')->with('message','Post Deleted Successfully ');

         }

    }
    public function edit(request $request){


        $this->rules( $request);


        $data=$request->input();


$data['post_content']=strip_tags($data['post_content']);

$data =$request->except('_token');
  $data['author_id']= intval(Auth::user()->id);
  $file=$request->file('featured_image');




  if($file){
    $data['featured_image']=$file->getClientOriginalExtension();


    $data['featured_image']= 'uploads/'.time().'.'.$data['featured_image'];
     $file->move(public_path('uploads'),$data['featured_image']);

 }





   $handle=BlogModel::find($data['id']);
   $handle->update($data);

   return  redirect('posts/view')->with('message','Modified Successfully ');





        // $data =$request->except('_token');

        //   $file=$request->file('featured_image');





    }
}
