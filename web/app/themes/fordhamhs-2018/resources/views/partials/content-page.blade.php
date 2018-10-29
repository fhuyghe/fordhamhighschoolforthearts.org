<div class="page-content">
    @php foreach((get_the_category()) as $category) { echo '<h6>' . $category->cat_name . '</h6>'; }  @endphp
    <h1>{!! App::title() !!}</h1>
    @php the_content() @endphp
    @php 
    if( have_rows('content_blocks') ):
        // loop through the rows of data
        while ( have_rows('content_blocks') ) : the_row();

        if( get_row_layout() == 'text' ):
            echo '<section class="text">';
            the_sub_field('text');
            echo '</section>';

        elseif( get_row_layout() == 'single_image' ): 
            echo '<section class="image">';
            echo '<img src="' . get_sub_field('image') . '" />';
            echo '</section>';

        elseif( get_row_layout() == 'video' ): 
            echo '<section class="video">';
            the_sub_field('video');
            echo '</section>';

        elseif( get_row_layout() == 'image_gallery' ): 
            if( have_rows('images') ):
            echo '<section class="gallery">';
            // loop through the rows of data
            while ( have_rows('images') ) : the_row(); 
            @endphp

                <div class="slide">
                    @php  
                    echo '<img src="' . get_sub_field('image') . '" />'; 
                    $caption = get_sub_field('caption');
                    if ($caption):
                        echo '<p class="caption">' . $caption . '</p>';
                    endif;
                    @endphp
                </div>
                
            @php
                endwhile;
                echo '</section>';
                endif;
            @endphp

        @php endif; endwhile; endif; @endphp
</div>
