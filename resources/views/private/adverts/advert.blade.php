@extends('layouts.master')

@section('pageTitle', 'Milakandra - Ajouter votre annonce')

@section('customCss')
    <style>

        .navbar {
            background-color: rgb(62, 97, 153);
        }

        body {
            padding-top: 70px;
        }

        ul {
            margin: 0.3em 0;
            padding: 0;
        }

        ul li {
            background: #def;
            margin: 1px;
            cursor: pointer;
            color: #46a;
            font-weight: bold;
            border: solid 1px #cde;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Ajouter votre annonce</h2>
                <form action="{{ isset($advert->id) ? route('update_advert', ['advert' => $advert->id]) :  route('store_advert')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <select class="form-control" id="category" onchange="selectCategory(this)">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->label }}</option>
                            @endforeach
                        </select>
                        <br/>
                        <ul>
                            @if (isset($advert->id))
                                @foreach($advert->categories as $category)
                                    <li class="list-inline-item" onclick="this.parentNode.removeChild(this)">
                                        <input type="hidden" name="categories[]" value="{{ $category->id }}"/>
                                        {{ $category->label }}
                                        <img src="{{ asset('img/cross_bright.png') }}"/>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $advert->title or '' }}" />
                    </div>
                    <div class="form-group">
                        <label for="image">Image associée à l'annonce (facultatif)</label>
                        <input type="file" class="form-control" id="image" name="image"   />
                        <input type="hidden" name="current_image" value="{{ $advert->image or '' }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $advert->description or '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="urgent" class="">Urgent</label>
                        <input type="checkbox" class="" id="urgent" name="urgent" @if (isset($advert->urgent) && $advert->urgent == true)  checked="{{ $advert->urgent }}" @endif/>
                    </div>


                    <button type="submit" name="action" value="save" class="btn btn-primary">{{ isset($advert->id) ? 'Modifier' : 'Publier' }}</button>
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

