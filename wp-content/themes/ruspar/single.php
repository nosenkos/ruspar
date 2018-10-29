<?php get_header(); ?>

<!-- ************************ Blog materials ************************ -->       
    <div class="blocks">

				<div class="title">
                    <h3 id="actions"><?php the_title(); ?><h3>
                </div>
		
		
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
			<div class="title-article">
					<h1 itemprop="name"><?php the_title(); ?></h1>
			</div> 
				<div class="img-article">
					<?php 
						if ( function_exists( 'add_theme_support' ) )
						the_post_thumbnail( array(694,9999), array('itemprop' => 'image') ); 
					?>
				</div>
                      
					<br clear="left">
				<div class="entry">
						<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?> 
			   
    </div>
	
	
	
            <!--Акции -->
            <div class="blocks">
                <div class="title">
                    <h3 id="actions">Акции</h3>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event.jpg" alt="Корпоративные праздники">
                    </div>
                    <div class="otel-title">
                        Скидка 20% для именинников!
                    </div>
                </div>

                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event3.jpg" alt="Организация юбилеев">
                    </div>
                    <div class="otel-title">
                        Скидка 5-10% в будние до 19-00
                    </div>
                </div>
                
                <div class="uslugi">
                    <div class="slider sliderotel">
                        <img src="http://ruspar.pl.ua/wp-content/themes/ruspar/images/event/event2.jpg" alt="Организация свадеб">
                    </div>
                    <div class="otel-title">
                        Постоянным клиентам скидка 5-15%
                    </div>
                </div>
                
            </div>
            <!--Конец Акции -->	

 <?php get_footer(); ?>