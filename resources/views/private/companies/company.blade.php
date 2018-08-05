@extends('layouts.master')

@section('pageTitle', 'Emploi Mahajanga - Ajouter votre entreprise')

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
                <h2>Ajouter votre entreprise</h2>
                <form action="{{ isset($company->id) ? route('update_company', ['company' => $company->id]) :  route('store_company')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Nom de l'entreprise</label>
                        <input type="text" class="form-control" id="name" placeholder="obligatoire"
                               name="name" value="{{ $company->name or '' }}" required />
                    </div>
                    <div class="form-group">
                        <label for="image">Logo (facultatif)</label>
                        <input type="file" class="form-control" id="image" name="logo"   />
                        <input type="hidden" name="current_logo" value="{{ $company->logo or '' }}" />
                    </div>
                    <div class="form-group">
                        <label for="slogan">Slogan</label>
                        <input type="text" class="form-control" id="slogan" placeholder="facultatif"
                               name="slogan" value="{{ $company->slogan or '' }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description (obligatoire)</label>
                        <textarea class="form-control" id="description"
                                  name="description" required>{{ $company->description or '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="address">Adresse</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $company->address or '' }}" required />
                    </div>


                    <div class="form-group">
                        <label for="postal_code">Code Postal</label>
                        <input type="text" class="form-control" id="postal_code"
                               name="postal_code" value="{{ $company->postal_code or '401' }}" />
                    </div>


                    <div class="form-group">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ $company->city or 'Mahajanga' }}" />
                    </div>

                    <button type="submit" name="action" value="save" class="btn btn-primary">{{ isset($company->id) ? 'Modifier' : 'Publier' }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('customScript')

    <script>

        function selectCategory(select)
        {
            var option = select.options[select.selectedIndex];
            var ul = select.parentNode.getElementsByTagName('ul')[0];

            var choices = ul.getElementsByTagName('input');
            for (var i = 0; i < choices.length; i++)
                if (choices[i].value == option.value)
                    return;

            var li = document.createElement('li');
            var input = document.createElement('input');
            var text = document.createTextNode(option.firstChild.data);
            var del = document.createElement('img');

            del.setAttribute('src', "{{ asset('img/cross_bright.png') }}");

            input.type = 'hidden';
            input.name = 'categories[]';
            input.value = option.value;

            li.appendChild(input);
            li.appendChild(text);
            li.appendChild(del);
            li.setAttribute('onclick', 'this.parentNode.removeChild(this);');
            li.setAttribute('class', 'list-inline-item');

            ul.appendChild(li);
        }
    </script>
@endsection

