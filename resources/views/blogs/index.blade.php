@extends('layouts.dash_app')

@section('content')


<div class='container-fluid mt-5'>
    <div class='mt-3'></div>

    @if(session('message'))
    <div class="alert alert-success">
    {{session('message')}}
    </div>
    @endif




    <div class="row">
        <div class="col-md-10">

            <a href="{{Route('posts/add')}}" class='float-right m-1'><button class="link btn btn-primary">Add Post <i class='fa fa-plus text-white'></i></button></a>




<div class='table-responsive'>
    <table width='100%' class='table table-centered mb-0 rounded table-striped'>
        <thead class="thead-light">
            <tr>
    <th>S/N</th>
    <th>Title</th>
    <th>Slug</th>
    <th>Excerpt</th>
    <th>Content</th>
    <th>Featured Image</th>

    <th>Date Created</th>
    <th>Action</th>

</tr>

<thead>
    @foreach($data as $post)
   <?php  $first_item =$data->firstItem()?>
    <tr>
<td>{{$loop->index+$first_item}}</td>
<td>{{$post->title}}</td>
<td>{{$post->slug}}</td>
<td>{{$post->excerpt}}</td>
<td>{{substr($post->post_content, 0,20)."..."}}</td>
<td><img src="{{asset($post->featured_image)}}" alt="" width="50"></td>
<td>{{date('h:i:s a m/d/Y', strtotime($post->created_at))}}</td>
<td>
    <div class='d-flex'>
        <form action="{{route('posts/modify')}}" method="post" id='update'>
            @csrf
        <a href="#" ><button class=' btn btn-circle edit_post' value="{{$post->id}}" title="Edit" ><i class='fa fa-pen text-primary'></i></button></a>
        <input type="hidden" id='what_is_clicked' name='btn_clicked' class='I_dont_know'>

        <a href="#" ><button class="btn btn-circle edit_post" onclick="confirm('Are you sure?')"  value='{{$post->id}}' title="Delete" name='delete'><i class='fa fa-trash text-danger'></i></button></button></a>
    </form>



    </div>
</td>


    </tr>

    @endforeach

    <tr>


    </tr>
</table>
<div class='pull-right'>


    {{$data->links()}}</div>
    </div>


</div>

        </div>



    </div>

</div>


<script>
    const edit_btns = document.getElementsByClassName('edit_post');
    const form_update =document.getElementById('update');
    for(var i=0; i<edit_btns.length;i++){


        // alert(edit_btns[i].innerHTML);
     edit_btns[i].addEventListener('click', function(e){
        e.preventDefault();
            const btn_id =this.value;

            const btn_name =this.title;

            const input =document.querySelector('#what_is_clicked').value=btn_id+'_'+btn_name;


        form_update.submit();




        })


    }
</script>
@endsection
