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
    <div class="columns">
        <div class="column is-4">
            <h1>{!! App::title() !!}</h1>
            <div class="group">
                <div><i class="fal fa-map-marker-alt"></i></div>
                <div>Address</div>
            </div>
            <div class="group">
                <div><i class="fal fa-phone"></i></div>
                <div>Phone</div>
            </div>
            <div class="group">
                <div><i class="fal fa-fax"></i></div>
                <div>Fax</div>
            </div>
            <div class="group">
                <div><i class="fal fa-envelope"></i></div>
                <div>Email</div>
            </div>
        </div>
        <div class="column is-8">
            <h2>Send us a Message</h2>
            @php echo do_shortcode('[wpforms id="121" title="false" description="false"]') @endphp
        </div>
    </div>
  @endwhile
@endsection
