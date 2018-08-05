@extends('layouts.master')

@section('pageTitle', 'Emploi Mahajanga - Votre entreprise')

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
                <h2>Votre entreprise</h2>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ str_limit($company->description, $limit = 20, $end = '...') }}</td>
                            <td>{{ $company->address }}</td>
                            <td> <a href="{{ route('update_company', ['company' => $company->id]) }}">Modifier</a></td>
                            <td> <a href="{{ route('delete_company', ['company' => $company->id]) }}">Supprimer</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

