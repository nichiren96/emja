@extends('layouts.master')

@section('pageTitle', 'Milakandra - Vos annonces')

@section('customCss')
    <style>

        .navbar {
            background-color: rgb(62, 97, 153);
        }

        body {
            padding-top: 70px;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session('success'))
                    <div class="alert alert-success">
                        {{ Session('success') }}
                    </div>
                @endif
                <h2>Vos annonces</h2>

                <div>
                    <a href="{{ route('create_advert') }}" class="btn btn-success"> Ajouter annonce </a>
                </div>
                    <br/>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Contenu</th>
                        <th scope="col">Crée le</th>
                        <th scope="col">Visible</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($adverts as $advert)
                        <tr>
                            <td>{{ $advert->title }}</td>
                            <td>{{ str_limit($advert->description, $limit = 20, $end = '...') }}</td>
                            <td>{{  date('d / m / Y', strtotime($advert->published_on)) }}</td>
                            <td>{{ ($advert->published == true) ? 'Oui' : 'Non' }}</td>
                            <td> <a href="{{ route('update_advert', ['advert' => $advert->id]) }}">Modifier</a></td>
                            <td> <a href="{{ route('delete_advert', ['advert' => $advert->id]) }}">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

