<header class="banner">
  <div class="logo">
    <a class="brand" href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}">
      <img src="@asset('images/FordhamHS-Logo.png')" />
    </a>
  </div>
  <nav class="nav-primary desktop column">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
  <div class="hamburger"> 
    <i class="fas fa-bars"></i> 
  </div> 
</header>

<div class="search">@php get_search_form() @endphp </div>

<nav class="nav-primary mobile column">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
