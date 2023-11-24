 <!-- banner section start -->




 <div class="banner_section layout_padding">
    <div class="container rounded" id='ffsd'>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

<?php

// $total =count($data);
// $last_three = array_slice($data, $total-3 );
// $remaining = array_slice($data, 0, $total-3);



    ?>

            @foreach ($slider as $post)


            <div class="carousel-item @if ($loop->index==0)
{{'active'}}
            @endif">
                <div class="row">
                  <div class="col-md-6">
                    <h1 class="Shows_text">Latest News</h1>
                    <h5 class="your_text">{{ $post['title'] }}</h5>
                    <p class="there_text">{{ $post['excerpt'] }} ...</p>

                    <div class="read_bt"><a href="{{Route('get/page', ['id'=>$post['id']])}}">Read More</a></div>
                  </div>
                  <div class="col-md-6">
                    <div class="images_1 img-fluid"><img src="{{asset($post['featured_image'])}}"></div>
                  </div>
                </div>
              </div>






 @endforeach






        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa-arrow-left" ><img src="{{asset("frontend/images/left-arrow.png")}}"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa-angle-right"><img src="{{asset('frontend/images/right-arrow.png')}}"></i>
        </a>
      </div>





        <div class="banner_section_2">
          <div class="row">

@foreach ($data as $post=>$item)


<div class="col-lg-4 col-sm-12">
    <div class="box_main">
      <div class=''><img src="{{asset($item->featured_image)}}" alt="" class='img-fluid card-img' style='max-height:20vh'></div>
      <h4 class="broadband_text">{{$item->title}}</h4>

      <p class="many_text">{{substr($item->excerpt, 0,50).'...'}}</p>
      <div class=""><a href="{{Route('get/page', ['id'=>$item->id])}}" class='btn btn-primary hi'>Read More</a></div>

    </div>

  </div>




@endforeach







          </div>
          <div class='pull-right'>


            {{$data->links()}}

        </div>
        </div>

    </div>
  </div>
  <!-- banner section end -->
