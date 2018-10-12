@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="columns">
      <div class="column is-8">
        <div class="search-content">
          <h1>Search Results</h1>
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif

      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-search')
      @endwhile
    </div>
  </div>

  <div class="sidebar column is-4">
    @include('partials.sidebar')
  </div>
</div>

  {!! get_the_posts_navigation() !!}
@endsection
