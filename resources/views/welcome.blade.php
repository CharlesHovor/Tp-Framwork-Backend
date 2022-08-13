@extends("base")
@section('title', 'Acceuil')
@section("content")
<nav>
    <a href="{{route('welcome')}}">Accueil Laravel</a>
    <a href="{{route('event.create')}}">Ajouter un Evenement</a>
    <a href="{{route('event.store')}}">Affiche les Evenements</a>
</nav>
    <h2>Bienvenu sur le site d'enrégistrement d'Evenements</h2>

    @stop
