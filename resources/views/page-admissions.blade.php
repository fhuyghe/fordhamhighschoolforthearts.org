@php
/**
 * Template Name: Admission
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="columns is-multiline admissions">
          <div class="column is-12">
            @include('partials.page-header')
          </div>
        <div class="column is-12 infobox">
            <h1>{!! App::title() !!}</h1>
            {!! $intro_text !!}

          </div>
        <div class="column is-8">
            @include('partials.content-page')
        </div>
        <div class="sidebar column is-4">
            @include('partials.sidebar-admissions')
        </div>
    </div>
  @endwhile
@endsection
