@extends('layouts.master')

@section('pageTitle', 'Emploi Mahajanga - Catégories d\'emplois')

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
                <h2>Catégories</h2>

                <div>
                    <a href="{{ route('create_category') }}" class="btn btn-success"> Ajouter catégorie </a>
                </div>
                <br/>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Libellé</th>
                        <th scope="col">Description</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->label }}</td>
                            <td>{{ str_limit($category->description, $limit = 20, $end = '...') }}</td>
                            <td> <a href="{{ route('update_category', ['category' => $category->id]) }}">Modifier</a></td>
                            <td> <a href="{{ route('delete_category', ['category' => $category->id]) }}">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

