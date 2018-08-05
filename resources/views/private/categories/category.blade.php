@extends('layouts.master')

@section('pageTitle', 'Emploi Mahajanga - Ajouter catégorie d\'emplois')

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
                <h2>Ajouter catégorie</h2>
                <form action="{{ isset($category->id) ? route('update_category', ['category' => $category->id]) :  route('store_category')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="label">Libellé</label>
                        <input type="text" class="form-control" id="label" name="label" value="{{ $category->label or '' }}" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $category->description or '' }}" />
                    </div>



                    <button type="submit" name="action" value="save" class="btn btn-primary">{{ isset($category->id) ? 'Modifier' : 'Publier' }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection


