@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="columns is-multiline">
        <div class="column is-12">
          @include('partials.page-header')
        </div>
        <div class="column is-8">
            @include('partials.content-page')
        </div>
        <div class="sidebar column is-4">
            @include('partials.sidebar')
        </div>
        <div id="tribe-events-pg-template">
          <?php tribe_events_before_html(); ?>
          <?php tribe_get_view(); ?>
          <?php tribe_events_after_html(); ?>
        </div>
    </div>
  @endwhile
@endsection
