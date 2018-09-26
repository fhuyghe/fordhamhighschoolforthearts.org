<footer class="footer">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="columns">
    <div class="column">
      <?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_footer_col1' ) ); ?>
    </div>
    <div class="column">
      <?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_footer_col2' ) ); ?>
  </div>
  <div class="column">
    <a class="button" href="/contact">Contact Us</a>
</div>
<div class="column">
  Map
</div>
  </div>
  <div class="copyrights"><?php echo carbon_get_theme_option( 'crb_footer_copyright' ); ?></div>
  </div>
</footer>