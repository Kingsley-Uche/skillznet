@extends('layouts.dash_app')

@section('content')


<style>
    #preview-container{
        max-width:10vw;
        margin: 20px 0%

    }

    #preview-image{
        max-width:20%;
        height: auto;
    }
</style>

<div class='row' bg-dark>
    <script src="{{asset('js/tinymce/js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <div class='col-md-2'></div>

    <!-- post html starts here-->
    <div class="col-md-8 bg-white rounded">
        @if(session('message'))
        <div class="alert-success">
        {{session('message')}}
        </div>
        @endif
        <div class="text-black">
            <h3 class= 'text-black'>Create a post</h3>


            @if ($errors->any())
            <div class="alert alert-danger">


                <ul>

                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>

            @endif

            <form action="{{Route('posts/add')}}" method ='post' enctype="multipart/form-data">
                @csrf



            <!-- Place the first <script> tag in your HTML's <head> -->
{{-- <script src="https://cdn.tiny.cloud/1/g6iwe2r77l2saqkr1znyvfrzrmxo5269kdswp87hl1gjl9hh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}



<!-- Place the following <script> and <textarea> tags your HTML's <body> -->

    <div class="form-group">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <label for="title">Enter Title</label><input type="text" class="form-control" placeholder="Enter Title" name='title' id='title' value='{{old('title')}}'>

    </div>

    <div class="form-group">
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

        <label for="Slug">Enter Slug</label><input type="text" class="form-control" placeholder="Enter a captivating Summary" id='slug' name='slug' value='{{old('slug')}}'>
    </div>
    <div class="form-group">

        @error('excerpt')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

        <label for="Excerpt">Enter an Excerpt</label><textarea class="form-control" placeholder="Enter a short captivating Introduction" name='excerpt' id='excerpt' col=2>{{old('excerpt')}}</textarea>
    </div>



    <div class="custom-file">
        @error('featured_image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

        <label for="featured_image" class='custom-file-label' >Featured Image  <Span class='text-danger'>* less than 2mb</Span></label><input type='file' class="custom-file-input" placeholder="Enter a short captivating Introduction" name='featured_image' id='ImageInput' accept="image/*" required>
        <div class="preview-container">
            <img src="" alt="" id="preview-image">
        </div>
    </div>
    <div class="container-fluid mt-3">
        @error('post_content')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

                <textarea name='post_content' class='form-control' placeholder="Enter your content here" id='content_text'> {{old('post_content')}}</textarea>
</div>
<div class="form-group">
    <div class="pull-right"> <button class='btn btn-primary btn sm'>Save</button></div>



</div>




            </form>


        </div>
    </div>
    <!-- post html ends here-->

</div>



<script>
    tinymce.init({
      selector: '#content_text',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>


<script>
    document.getElementById('ImageInput').addEventListener('change',
    function(){
    displayImage(this);


    });

    function displayImage(input){


        var file=input.files[0];

         if(file){
            var reader = new FileReader();
         reader.onload = function(e){
            console.log(e.target.result);
               document.getElementById('preview-image').setAttribute('src', e.target.result);
               document.getElementById('preview-image').setAttribute('alt', 'Image preview');
        };
          reader.readAsDataURL(file);
     }
    }
</script>
@endsection
