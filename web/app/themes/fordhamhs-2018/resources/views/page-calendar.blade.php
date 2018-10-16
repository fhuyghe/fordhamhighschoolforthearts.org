@php
/**
 * Template Name: Calendar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
@endphp

@extends('layouts.app')

@section('content')
    <div class="columns is-multiline">
        <div class="column is-8">
          <div class="page-content">
            <h1>Calendar of Events</h1>

            <h6>There are currently no upcoming events.</h6>
          </div>

        </div>

        <div class="sidebar column is-4">
            @php dynamic_sidebar('sidebar-calendar') @endphp
        </div>

    </div>
@endsection
