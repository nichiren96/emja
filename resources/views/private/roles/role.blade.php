@extends('layouts.master')

@section('pageTitle', 'Emploi Mahajanga - Ajouter un rôle')

@section('customCss')
    <style>

        .navbar {
            background-color: rgb(62, 97, 153);
        }

        body {
            padding-top: 70px;
        }

        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Ajouter rôle</h2>
                <form action="{{ isset($role->id) ? route('update_role', ['role' => $role->id]) :  route('store_role')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="label">Libellé</label>
                        <input type="text" class="form-control" id="label" name="label" value="{{ $role->label or '' }}" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                               value="{{ $role->description or '' }}" />
                    </div>

                    <button type="submit" name="action" value="save"
                            class="btn btn-primary">{{ isset($role->id) ? 'Modifier' : 'Publier' }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection

