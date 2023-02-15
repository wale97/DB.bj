<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Destination-Benin')}}</title>
   <!-- <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/sitestyle.css')}}">
</head>
<body class="bg-light">
      <div class="container mb-4">
          @include('partials.header')
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @if(count($news)>0)
                @foreach ($news as $new)
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src={{asset('storage/'.$new->image)}} class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <a href={{route('voir-news', ['id'=>$new->id])}} class="btn btn-danger text-center">Voir</a>
                    <p>{{$new->resume}}</p>
                  </div>
                </div>
                @endforeach
                @endif
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="group-card container mt-4 bg-light">
              <div class="card mb-4 text-center" style="width: 18rem;margin:3px;"">
                <img class="card-img-top" src={{asset('images/1.jfif')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Histoire</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
              </div>
              <div class="card mb-4 text-center" style="width: 18rem;margin:3px;"">
                <img class="card-img-top" src={{asset('images/3.jfif')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-truncate">Divertissements</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
              </div>
              <div class="card mb-4 text-center" style="width: 18rem;margin:3px";">
                <img class="card-img-top" src={{asset('images/4.jfif')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Culture</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
              </div>
              <div class="card mb-4 text-center" style="width: 18rem;margin:3px";">
                <img class="card-img-top" src={{asset('images/4.jfif')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Culture</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Lire la suite</a>
                </div>
              </div>
        </div>
      </div>
      @include('partials.groupcard2')
      <div class="container bg-light text-center mb-4 mt-4">
        <h3 class="publications text-center mb-4 mt-4">Nos Publications</h3>
        <div class="group-card container mt-4 bg-light">
          @if(count($articles)>0)
          @foreach($articles as $article)
            <div class="card mb-4 mt-4 text-center" style="width: 18rem;margin:3px;">
              <img class="card-img-top" src={{asset('storage/'.$article->image)}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->resume}}</p>
                  <a href="#" class="btn btn-danger">Lire la suite</a>
             </div>
        </div>
          @endforeach
          @else
          @endif
      </div>
      <a href={{route('voir')}} class="btn btn-danger text-center">Tous les articles</a>
      @include('partials.footer')
    </div>
</body>
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>