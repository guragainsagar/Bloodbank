@extends("frontend.Layouts.main")
@section("main.container")


<div class="container">

<h1><strong class="display-4 font-italic">{{ $blog->title }}</strong></h1>
  
    <img src="{{url("frontend/assets/images/image.jpg")}}" alt="{{ $blog->photo->title }}" width="500">
    <p>{{ $blog->content }}</p>
</div>
@endsection