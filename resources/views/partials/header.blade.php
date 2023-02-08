
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href={{route('home')}}>Destination Benin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}" style="margin-left: 20px;">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('voir')}} style="margin-left: 20px;">Découvrir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('biblio')}}" style="margin-left: 20px;">Bibliothèque</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('contacter')}} style="margin-left: 20px;">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('disclaimer')}} style="margin-left: 20px;margin-right:20px;">Disclaimer</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="ban"><h1 class="banniere"></h1></div>
  <div class="navi">
    <nav class="nav bg-light w-100 justify-content-center">
      <a class="nav-link" href={{route('visiter')}} style="color:red;font-size:12px;">Visiter</a>
      <a class="nav-link" href={{route('sortir')}} style="color:red;font-size:12px;">Sortir</a>
      <a class="nav-link" href={{route('restau')}} style="color:red;font-size:12px;">Restaurants</a>
      <a class="nav-link" href={{route('streetfood')}} style="color:red;font-size:12px;">Streetfood</a>
      <a class="nav-link" href={{route('dormir')}} style="color:red;font-size:12px;">Où Dormir</a>
      <a class="nav-link" href={{route('pleinair')}} style="color:red;font-size:12px;">Plein Air</a>
      <a class="nav-link" href={{route('ctnbynight')}} style="color:red;font-size:12px;">CTN by Night</a>

    </nav>
  </div>
