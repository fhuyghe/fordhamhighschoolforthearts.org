<header class="banner">
    <div class="logo">
      <a class="brand" href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}">
        <img src="@asset('images/FordhamHS-Logo.png')" />
      </a>
    </div>
    <nav class="nav-primary column">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
</header>
