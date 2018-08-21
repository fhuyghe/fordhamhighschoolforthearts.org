@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    This is the home page. Or I thought.

    <div class="tile is-ancestor is-vertical">
      <div class="tile">
        <div class="tile is-parent">
            <article class="tile is-child notification is-success">
              <div class="content">
                <p class="title">Create new ways of looking at and living in the world.</p>
                <div class="content">
                  <!-- Content -->
                </div>
              </div>
            </article>
          </div>
          <div class="tile is-vertical is-4">
                      <article class="tile is-child notification is-primary">
                          <p>Fordham Arts offers a strong instructional program in instrumental music, vocal music, dance, drama,visual arts and technical theater.</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                          <p>“ I loved meeting new writers every day at the book camp and I loved how interested the kids were in both camps. This experience will help me in further internships working with kids.” </p>
                        </article>
          </div>
        </div>
        <div class="tile">
        <div class="tile is-4 is-parent">
          <div class="tile is-child box">
            <p>We provide Career in Technical Education (CTE) programs and Work Based Learning Opportunities where eligible juniors and seniors can apply for paid, professional internships with arts and cultural organizations.  </p>
            <a class="button">Learn More</a>
          </div>
          </div>
          <div class="tile is-parent">
              <div class="tile is-child box">
                  <p>Upcoming Event: Into the Woods Musical</p>
                </div>
            </div>
    </div>
          <div class="tile">
              <div class="tile is-4 is-parent">
                <div class="tile is-child box">
                  Visual Arts
                </div>
                </div>
                <div class="tile is-4 is-parent">
                    <div class="tile is-child box">
                        Drama
                      </div>
                  </div>
                  <div class="tile is-4 is-parent">
                      <div class="tile is-child box">
                          Dance
                        </div>
                    </div>
          </div>
          <div class="tile">
              <div class="tile is-4 is-parent">
                <div class="tile is-child box">
                  Vocal
                </div>
                </div>
                <div class="tile is-4 is-parent">
                    <div class="tile is-child box">
                        Technical Theater
                      </div>
                  </div>
                  <div class="tile is-4 is-parent">
                      <div class="tile is-child box">
                          Music Production & Engineering/ Instrumental Music
                        </div>
                    </div>
          </div>
    </div>

    @include('partials.content-page')
  @endwhile
@endsection
