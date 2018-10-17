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
        <div class="column is-4 centered">
            <div class="wrap">
                <h1>{!! App::title() !!}</h1>
                <div class="group">
                    <div><i class="fal fa-map-marker-alt"></i></div>
                    <div>
                        <?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_address' ) ); ?>
                    </div> 
                </div>
                <div class="group">
                    <div><i class="fal fa-phone"></i></div>
                    <div>
                        <?php echo carbon_get_theme_option( 'crb_phone' ); ?> 
                    </div>
                </div>
                <div class="group">
                    <div><i class="fal fa-fax"></i></div>
                    <div>
                        <?php echo carbon_get_theme_option( 'crb_fax' ); ?> 
                    </div>
                </div>
                <div class="group">
                    <div><i class="fal fa-envelope"></i></div>
                    <div>Email</div>
                </div>
            </div>
        </div>
        <div id="formContainer" class="column is-8 centered">
            <div class="wrap">
                <h2>Send us a Message</h2>
                @php echo do_shortcode('[wpforms id="121" title="false" description="false"]') @endphp
            </div>
        </div>
    </div>
  @endwhile
@endsection
