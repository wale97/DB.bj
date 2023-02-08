@extends('layouts.content')

@section('content')

@if(Session::get('success'))
<div class="alert alert-success"></div>
  {{Session::get('success')}}
@endif

@if(Session::get('fail'))
<div class="alert alert-danger"></div>
  {{Session::get('fail')}}~
@endif

@if ($message = Session::get('successMessage'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif


<form method="post" action="{{route('contact.envoi')}}">

    @csrf

    <div class="container text-center m-4">
        <div class="row">
            <h1 class="contactus m-4">Contactez-nous</h1>
          <div class="col-3">
          </div>
          <div class="col-6">
            <div class="form-group row">
                <label for="inputnom" class="col-sm-2 col-form-label m-4">Nom</label>
                <div class="col">
                    <input name="nom"type="text" class="form-control m-4" id="inputnom" placeholder="Nom" required>
                </div>
            </div>
            @error('nom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputmail" class="col-sm-2 col-form-label m-4">Email</label>
                <div class="col">
                    <input name="email" type="email" class="form-control m-4" id="inputmail" placeholder="Email" required>
                </div>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputtel" class="col-sm-2 col-form-label m-4">Telehone</label>
                <div class="col">
                    <input name="telephone"type="number" class="form-control m-4" id="inputtel" placeholder="Telephone" required>
                </div>
            </div>
            @error('tel')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputsujet" class="col-sm-2 col-form-label m-4">Sujet</label>
                <div class="col">
                    <input name="sujet" type="text" class="form-control m-4" id="inputsujet" placeholder="Sujet" required>
                </div>
            </div>
            @error('sujet')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputmessage" class="col-sm-2 col-form-label m-4">Message</label>
                <div class="col">
                    <textarea name="message" class="form-control m-4" id="inputmessage" placeholder="Message" required rows="5"></textarea>                    
                </div>
            </div>
            @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="col m-4 justify-content-center">
                <button name="envoyer" type="submit" class="btn btn-danger text-center">Envoyer</button>
            </div>
        </div>
          <div class="col-3"></div>
        </div>
      </div>
  </form>
@endsection