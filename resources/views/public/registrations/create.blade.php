@extends('layouts.master')

@section('pageTitle', 'Milakandra - Créer votre compte')

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
                @if (count($errors))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <h2>Créer votre compte</h2>
                <form action="{{ route('post_register') }}" method="post">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="role">Je suis </label>
                        <select name="role_id" class="form-control" required>
                            <option selected></option>
                            <option value="3">à la recherche d'un emploi</option>
                            <option value="2">un recruteur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Noms</label>
                        <input type="text" class="form-control" id="lastname" value="{{ old('lastname') }}" name="lastname" required/>
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénoms</label>
                        <input type="text" class="form-control" id="firstname" value="{{ old('firstname') }}" name="firstname" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required/>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer mot de passe</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required/>
                    </div>


                    <button type="submit" class="btn btn-primary">Go</button>
                </form>
            </div>
        </div>
    </div>

@endsection
