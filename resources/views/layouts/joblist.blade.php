
@foreach($adverts as $advert)
    <div class="row">
        <div class="col-lg-12">
    <div class="job-listing wtabs">
        <div class="job-title-sec">
            <div class="c-logo"> <img src="img/adverts/{{ $advert->image }}" alt="" /> </div>
            <h3><a href="{{ route('one_job', ['id' => $advert->id]) }}" title="">{{ $advert->title }}</a></h3>

            @foreach($advert->categories as $category)
                <span>

                    {{ $category->label }}

                </span>
            @endforeach
        </div>
        <div class="job-style-bx">
            <span class="job-is ft fill"><a href="{{ route('one_job', ['id' => $advert->id]) }}">Détails</a></span>
        </div>
    </div><!-- Job -->
        </div>
    </div>
@endforeach