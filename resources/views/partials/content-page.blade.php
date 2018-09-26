<div class="page-content">
    @php foreach((get_the_category()) as $category) { echo '<h6>' . $category->cat_name . '</h6>'; }  @endphp
    <h1>{!! App::title() !!}</h1>
    @php the_content() @endphp
</div>
