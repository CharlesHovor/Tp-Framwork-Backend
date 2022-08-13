@extends("base")
@section('title', 'liste des produit')
@section("content")
<nav>
    <a href="{{route('welcome')}}">Accueil Laravel</a>
    <a href="{{route('event.create')}}">Ajouter un Evenement</a>
    <a href="{{route('event.store')}}">Affiche les Evenements</a>
</nav>

<table>
    <thead>
        <th>ID</th>
        <th>Nom de l'Evènement</th>
        <th>Date de demarrage</th>
        <th>Date de fin</th>
        <th>Description</th>
    </thead>
    <tbody>
    @foreach($events as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->nom}}</td>
            <td>{{$prod->date_demarrage}}</td>
            <td>{{$prod->date_fin}}</td>
            <td>{{$prod->description}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop