@php
/**
 * Template Name: Login
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="centered">
        <div class="loginWrap"> 
            <h1>Login</h1>
            @php wp_login_form() @endphp
        </div>
    </div>
  @endwhile
@endsection


