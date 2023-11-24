@extends('layouts.frontend.layouts.front_app')
@section('content')






<div class="client_section layout_padding bg-white">
    <div class='fa-pull-left'><a href="{{route('blog')}}" class='btn btn-primary' ><i  class="fa fa-chevron-left text-small"> </i> Back to News </a></div>
    <div class="container bg-white rounded">
      <h1 class="client_taital">{{$data->title}}</h1>
      <div class="client_section2 layout_padding">
        <div class="row">
          <div class="col-sm-4">
            <div class="client_image"><img src="{{asset($data->featured_image)}}" class='img-fluid img-thumbnail'></div>
          </div>
          <div class="col-sm-8">
            <div class="miller_text">Author:<span class="text-bold">{{ucfirst($data->first_name).' '.ucfirst($data->last_name)}}</span></div>
            <div class="ipsum_text">{!! $data->post_content !!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
