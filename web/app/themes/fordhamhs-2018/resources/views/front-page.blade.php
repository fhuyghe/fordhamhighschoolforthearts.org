@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <div class="tile is-ancestor is-vertical">
      <div class="tile">
        <div class="tile is-parent">
            <div id="banner" class="tile is-child dark" style="background-image:url({{ $top_image['url'] }})">
              <div class="content"> 
                <p class="title"><?php echo carbon_get_the_post_meta( 'intro' ); ?></p>
                <div class="content">
                  <!-- Content -->
                </div>
              </div>
            </div>
          </div>
          <div class="tile is-vertical is-parent is-4">
                      <div id="intro" class="tile is-child has-vertically-aligned-content">
                        <div class="content">
                          <p><?php echo carbon_get_the_post_meta( 'audition' ); ?></p>
                          <a class="button is-outlined is-inverted" href="/audition">Audition</a>
                        </div>
                      </div>
                        <div id="testimonial" class="tile is-child has-vertically-aligned-content">
                            <div class="content">
                              <p><?php echo carbon_get_the_post_meta( 'quote' ); ?></p>
                              <h4><?php echo carbon_get_the_post_meta( 'author' ); ?></h4>
                              <h6><?php echo carbon_get_the_post_meta( 'title' ); ?></h6>
                            </div>
                        </div>
          </div>
        </div>
        <div class="tile">
        <div class="tile is-4 is-parent">
          <div id="cte" class="tile is-child has-vertically-aligned-content">
            <div class="content">
              <p>We provide Career in Technical Education (CTE) programs and Work Based Learning Opportunities where eligible juniors and seniors can apply for paid, professional internships with arts and cultural organizations.  </p>
              <a class="button is-outlined is-inverted" href="about">Learn More</a>
            </div>
          </div>
          </div>
          <div class="tile is-parent">
              <div class="tile is-child">
                  <p>Upcoming Event: Into the Woods Musical</p>
                </div>
            </div>
    </div>
          <div class="artmajors">
<!-- 
              @while($art_pages->have_posts()) @php($art_pages->the_post())
            --><div class="artmajor" style="background-image: url('{!! get_the_post_thumbnail_url(get_the_ID(),'full'); !!}')">
                <a href="{!! the_permalink() !!}" class="wrap">
                    <h2>{!! get_the_title() !!}</h2>
                </a>
              </div><!-- 
              @endwhile
              @php(wp_reset_postdata())
-->
          </div>
    </div>
  @endwhile
@endsection
