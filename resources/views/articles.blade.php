@extends('layouts.content')

@section('content')
<!--<Style>
  body{display: flex;justify-content: center;}
</Style>-->
<h1 class="m-4 text-center">Decouverte</h1>
@if (count($articles)>0)
<div class="articles">

@foreach($articles as $article)
 <div class="card mb-3 text-center" style="width:380px;height:450px;overflow:hidden;">
    <img src='{{asset('storage/'.$article->image)}}' class="card-img-top" alt="..." style="width:100%;height:250px;">
    <div class="card-body">
      <h5 class="card-title"><a href={{route('voir-article', ['id'=>$article->id])}}>{{$article->title}}</a></h5>
      <p class="card-text">{{$article->resume}}</p>
      <p class="card-text"><small class="text-muted">{{$article->author}}</small></p>
      <p class="card-text"><small class="text-muted">{{$article->updated_at}}</small></p>
    </div>
 </div>
@endforeach

</div>
<div class="links container mt-4 mb-4">
<div class=" row mt-4 mb-4" style="color:red;">
  {{$articles->links()}}
</div>
</div>


@else
@endif
@endsection