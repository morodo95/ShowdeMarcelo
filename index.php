<?php get_header(); ?>
<!-- Header 1 -->
<div class="container">
    <ul>
        <li><img src="<?php bloginfo('template_url')?>/img/logo.png" alt=""></li>
        <li> <a href=""><img src="<?php bloginfo('template_url')?>/img/social.png"  usemap="#workmap" id="social" alt=""></a></li>
        <div class="secciones">
            <li><a href=""><h2>Noticias</h2></a></li>
            <li><a href=""><h2>Television</h2></a></li>
            <li><a href=""><h2>Notas</h2></a></li>
        </div>
        <li class="search-box">
            <input type="text" class="search-txt" name="" placeholder="Buscar" >
            <a href="" class="search-btn">
                <i class="fas fa-search"></i>
            </a>
            
        </li>
    </ul>

    <map name="workmap">
        <area shape="circle" coords="34,44,270,350" alt="Facebook" href="https://www.youtube.com/channel/UCER-xPydbqlrlYRSxxTWhbw">
        <area shape="circle" coords="290,172,333,250" alt="Youtube" href="phone.htm">
        <area shape="circle" coords="337,300,44" alt="Twitter" href="coffee.htm">
    </map>
</div>
<!-- Fin Header 1 -->
<!--  Header 2 -->

<div class="lista-secciones">
    
        <ul>
            <li><a href="">Latinocracia</a>   </li>
            <li><a href="">Ultimos Programas</a></li>
            <li><a href="">Notas</a></li>
            <li><a href="">Show Especiales</a></li>
        </ul>
</div>

<!-- Fin Header 2 -->

<!-- Contenido 1 -->
<div class="contenedor">
      <div class="nombreseccion">
        <h1>Latinocracia</h1>
      </div>
    <div class="part2">
        <?php query_posts('posts_per_page=1&cat=191') ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="video-seccion1">
                
                <?php the_content(); ?>
            </div>
            <br>
            <div class="fecha">
                <span> <i class="far fa-clock"></i> <?php echo get_the_date(); ?></span>
                <span> <i class="far fa-user"></i>  <?php the_author();?></span>
            </div>
            <?php endwhile; ?>

        
    </div>
</div>
<!-- Fin Contenido 1 -->

<!-- Contenido 2 -->
<div class="contenedor">
      <div class="nombreseccion">
        <h1>Ultimos Programas</h1>
      </div>
    <div class="seccion2_1">
            <div class="video-seccion2_1">
                <ul>
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category' => 191 );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <?php the_content(); ?>
                        
                     </li>

                <?php endforeach; 
                   wp_reset_postdata();?> 
                </ul>
            </div>
            
    </div>
    <div class="seccion2_2">
            <div class="video-seccion2_2">
                <ul>
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 3, 'offset'=> 3, 'category' => 191 );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <?php the_content(); ?>
                        
                     </li>
                     
                <?php endforeach; 
                   wp_reset_postdata();?> 
                </ul>
            </div>
    </div>
   
</div>
<!-- Fin Contenido 2 -->

<!-- Contenido 3 -->

<div class="contenedor">
<?php query_posts('posts_per_page=3&cat=29') ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="seccion_notas">
               <ul>
                   <li>
                   <?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?>   
                   <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <div class="fecha">
                <span> <i class="far fa-clock"></i> <?php echo get_the_date(); ?></span>
                <span> <i class="far fa-user"></i>  <?php the_author();?></span>
            </div>
                   </li>
               </ul>
            </div>   
            <?php endwhile; ?>
</div>

<!-- Fin Contenido 3 -->



<?php get_footer(); ?>