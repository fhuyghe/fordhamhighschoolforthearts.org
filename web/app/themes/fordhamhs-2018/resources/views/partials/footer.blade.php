<footer class="footer">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="columns is-6">
    <div class="column is-3">
      <b><?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_address' ) ); ?></b>
      <p>
        <b>Phone:</b> <?php echo carbon_get_theme_option( 'crb_phone' ); ?><br>
        <b>Fax:</b> <?php echo carbon_get_theme_option( 'crb_fax' ); ?>
      </p>
    </div>
    <div class="column is-3">
      <?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_footer_col2' ) ); ?>
  </div>
  <div class="column is-2">
    <a class="button" href="/contact">Contact Us</a> 
</div>
<div class="column is-4 clearfix"> 
    @php echo do_shortcode('[wpgmza id="1"]') @endphp
</div>
  </div>
    <div class="copyrights"><?php echo carbon_get_theme_option( 'crb_footer_copyright' ); ?></div>
  </div>
</footer> 