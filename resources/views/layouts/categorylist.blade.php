@foreach($categories as $category)
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="p-category">
            <i class="la la-line-chart"></i>
            <a href="categories_view.php" title="">
                <span>{{ $category->label }}</span>
            </a>
        </div>
    </div>
@endforeach