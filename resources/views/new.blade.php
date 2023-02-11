@extends('layouts.content')

@section('content')
    <div class="container mb-4 mt-4 card-art">
     <div class="mb-4"> 
          <h4 class="text-center mt-4 mb-4">{!! $new->title!!}</h4> 
     </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card">
                        <img src={{asset('storage/'.$new->image)}} alt="">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{!! $new->resume !!}</li>
                    </ul>                   
                    <div class="card-body">
                        {!! $new->content !!}
                    </div>                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{!! $new->author !!}</li>
                        <li class="list-group-item">{!! $new->created_at !!}</li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
@endsection

