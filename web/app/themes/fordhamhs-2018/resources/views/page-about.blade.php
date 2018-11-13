@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="columns is-multiline">
        <div class="column is-12">
          @include('partials.page-header')
        </div>
        <div class="column is-12 missionStatement">
          <div class="wrap">
          <h2>Mission Statement</h2>
          {!! $variables->missionStatement !!}
          </div>
        </div>
        <div class="column is-8">
            <div class="page-content">
              <div class="wrap">
                <h1>{!! App::title() !!}</h1>
                @php the_content() @endphp
              </div>
            </div>
        </div>
        <div class="sidebar column is-4">
            <div class="image" style="background-image: url('{{ $variables->rightImage }}')"></div>
            <div class="testimonial">
                <p>"{{ $variables->quote }}"</p>
                <h4>— {{ $variables->author }}</h4>
                <h6>{{ $variables->authorTitle }}</h6>
            </div>
        </div>
        <div class="column is-12 bottomBanner" style="background-image: url('{{ $variables->bottomImage }}')"></div>
        <div class="column is-12 staff">
          <div class="page-content">
            <h2>Staff</h2>
            <div class="wrap">
              @php if( have_rows('staff') ): while ( have_rows('staff') ) : the_row(); @endphp
              <div class="staffGroup">
                <h6>@php the_sub_field('title'); @endphp</h6>
                <p>@php the_sub_field('list'); @endphp</p>
              </div>

          @php endwhile; endif; @endphp
            </div>
          </div>
        </div>
    </div>
  @endwhile
@endsection
