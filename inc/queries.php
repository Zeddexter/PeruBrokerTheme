<?php /***   SECCION DE NOSOTROS   ***/ ?>
<?php
function broker_lista_titulos_secciones(){ ?>
        <?php 
            $args = array(
                    'post_type' => 'broker_seccion',
                    'posts_per_page' => -1,   //-1 te trae todos
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
            $contador =0;
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            $contador +=1;
            ?>
            
            <li class="swiper-slide">
                <a href="#item<?php echo $contador;?>" >
                <?php the_title(); ?>
                </a>   
            </li>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
}
?>

<?php 
function broker_lista_contenido_secciones(){ ?>
    <?php 
            $args = array(
                    'post_type' => 'broker_seccion',
                    'posts_per_page' => -1,   //-1 te trae todos
                     'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
            $contador =0;
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            $contador +=1;
            ?>
            <div id="item<?php echo $contador;?>" class="item ocultar">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-xl-9">
                                        <?php the_content();?>  
                                     </div>
                                     <div class="col">
                                            <figure>
                                                <?php the_post_thumbnail('full'); ?>
                                            </figure>
                                        </div>
                                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
    }
?>

<?php
function mostrar_staff(){ ?>
        <?php 
            $args = array(
                    'post_type' => 'broker_Staff',
                    'posts_per_page' => -1,   //-1 te trae todos
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
            
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
           
            ?>
            
            <div class="item-staff swiper-slide">
                <figure class="img-staff">
                    <?php the_post_thumbnail('full'); ?>
                </figure>
                <p><?php the_field('nombre') ?></p>
                <span><?php the_field('puesto') ?></span>
            </div>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
}
?>

<?php /***   SECCION DE SERVICIOS   ***/ ?>


<?php 
function mostrar_servicios(){ ?>
    <?php 
            $args = array(
                    'post_type' => 'broker_servicios',
                    'posts_per_page' => -1,   //-1 te trae todos
                     'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
           
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            
            ?>
            <div class="row" data-aos="zoom-in-left" data-aos-duration="1000">
                <div class="col-sm-12">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content();?>  </p>
                            
                    <figure class="productos">       
                    <img src="<?php the_field('imagen_1'); ?>" alt="">
                    <img src="<?php the_field('imagen_2'); ?>" alt="">
                    <img src="<?php the_field('imagen_3'); ?>" alt="">
                        
                    </figure>    
                </div>
            </div>     
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
    }
?>


<?php 
function mostrar_clientes(){ ?>
    <?php 
            $args = array(
                    'post_type' => 'broker_clientes',
                    'posts_per_page' => -1,   //-1 te trae todos
                     'orderby' => 'meta_value_num',
                    'order' => 'ASC'
            );
           
            $clases = new WP_Query($args);
            while ($clases->have_posts() ): $clases -> the_post();
            
            ?>
            
            <div class="item-clientes swiper-slide">
                <figure class="img-staff">
                    <?php the_post_thumbnail('full'); ?>
                </figure>
                
                <p><?php the_title(); ?></p>
            </div>
        <?php endwhile; wp_reset_postdata(); ?> 
<?php
    }    
?>
<?php
function wp_get_menu_array($current_menu) {

$array_menu = wp_get_nav_menu_items($current_menu);
$menu = array();
foreach ($array_menu as $m) {

    if (empty($m->menu_item_parent)) {
        $menu[$m->ID] = array();
        $menu[$m->ID]['ID']      =   $m->ID;
        $menu[$m->ID]['title']       =   $m->title;
        $menu[$m->ID]['url']         =   $m->url;
        $menu[$m->ID]['classes']     =   $m->classes;
        $menu[$m->ID]['description']     =   $m->description;
        $menu[$m->ID]['children']    =   array();
    }
}
$submenu = array();
foreach ($array_menu as $m) {
    if ($m->menu_item_parent) {
        $submenu[$m->ID] = array();
        $submenu[$m->ID]['ID']       =   $m->ID;
        $submenu[$m->ID]['title']    =   $m->title;
        $submenu[$m->ID]['url']  =   $m->url;
        $submenu[$m->ID]['description']  =   $m->description; //Line added;
        $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
    }
}
return $menu;

} ?>
<?php function mostrar_lista_reportes(){ 
   $contador_cat = 0;
   $cat_val  = 0;
   $contador_subcat = 0;
  
   ?>
<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

<?php
$args = array(
    //'show_option_none' => __( 'Select category' ),
    'child_of' => 0,//$current_term->term_id,
    'name' => 'slct',
    'value_field'=>'term_id',
    'parent' =>0,
    'exclude' => 1,
    //'value_field'=>'term_id',
    'selected'           => isset($_GET['slct'])?$_GET['slct']:9 ,
    'id' =>9,
    'hierarchical'       => 0,
    'echo'             => 0,
);

?>

<?php $select  = wp_dropdown_categories( $args ); ?>
<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

<?php echo '<h2>'.$select.'</h2>'; ?>


<noscript>
    <input type="submit" value="view" />
</noscript>

</form>

<div class="table-responsive estadistica">
                        <table class="table">
                            <thead>
                                <th>Frecuencia</th>
                                <th>Archivo</th>
                            </thead>
    <?php
    $wcatTerms = get_terms('category', array('hide_empty' => 1, 'parent' =>0,'exclude'=>1,'term_taxonomy_id'=>isset($_GET['slct'])?$_GET['slct']:9 )); 
   foreach($wcatTerms as $wcatTerm) : ?>
   <?php
                                                            // Get all the products of each specific category
                                                            $product_args = array(
                                                                'post_type'     => 'estadistica',
                                                                'orderby'      => 'id',
                                                                'order'         => 'ASC',
                                                                'post_status'   => 'publish',
                                                                'category_name' => $wcatTerm->slug //$category->slug //passing the slug of the current category
                                                            );

                                                            $product_list = new WP_Query ( $product_args );

                                                        ?>
    <?php while ( $product_list -> have_posts() ) : $product_list -> the_post(); ?>
                                                       
                                                           
                                                        <td><?php the_title(); ?></td>
                                                        <?php
                                                            if ( is_user_logged_in() ) {

                                                                $pdf_link = wp_get_attachment_url( get_post_meta( get_the_ID(), 'adj_estadistica', true ) );

                                                                if ( $pdf_link ) {
                                                                    ?>
                                                                    <td><a href = "<?php echo $pdf_link ?>" >Descargar</a></td></tr><?php
                                                                } else {
                                                                    ?><td>Sorry, no link available. Please contact the webmaser.</td><?php
                                                                }
                                                            }
                                                            ?>   
                                                        <p><?php echo $product_list ->category_name?> </p>
                                                        <?php endwhile; wp_reset_query(); ?>
  <?php endforeach;
   ?>

     <div class="table-responsive fishing-report">
                        <table class="table">
                            <thead>
                                <th>Temporada</th>
                                <th>Regiones</th>
                                <th>Frecuencia</th>
                                <th>Archivo</th>
                            </thead>
	
<?php 
if(isset($_GET['slct'])){
$selected_val = $_GET['slct'];  // Storing Selected Value In Variable
//echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
//echo "Valor: ".$selected_val;

$wcatTerms = get_terms('category', array('hide_empty' => 1, 'parent' =>0,'exclude'=>1,'term_taxonomy_id'=>isset($_GET['slct'])?$_GET['slct']:9 )); 
   foreach($wcatTerms as $wcatTerm) : 
   ?>
      
      
         <?php
            $wsubargs = array(
               'hierarchical' => 1,
               'show_option_none' => '',
               'hide_empty' => 1,
               'parent' =>  $wcatTerm->term_id,
               'taxonomy' => 'category'
            );
            $wsubcats = get_categories($wsubargs);
            foreach ($wsubcats as $wsc):
                $contador_cat++;
            ?>
            <tr>
                        <?php
                            $wsubsubargs = array(
                            'hierarchical' => 1,
                            'show_option_none' => '',
                            'hide_empty' => 1,
                            'parent' => $wsc->term_id,
                            'taxonomy' => 'category'
                            );
                            $wsubsubcats = get_categories($wsubsubargs);
                            foreach ($wsubsubcats as $wssubc):
                                ?>
                                 <?
                                 $contador_subcat++;
                                ?>
                                    <?php
                                                            // Get all the products of each specific category
                                                            $product_args = array(
                                                                'post_type'     => 'reportedepesca',
                                                                'orderby'      => 'id',
                                                                'order'         => 'ASC',
                                                                'post_status'   => 'publish',
                                                                'category_name' => $wssubc->slug //$category->slug //passing the slug of the current category
                                                            );

                                                            $product_list = new WP_Query ( $product_args );

                                                        ?>
                                  
                                                        <?php while ( $product_list -> have_posts() ) : $product_list -> the_post(); ?>
                                                        <td  >
                                                        <?php echo $wsc->name;?>
                                                        </td> 
                                                        <td><?php echo $wssubc->name;?></td>       
                                                        <td><?php the_title(); ?></td>
                                                        <?php
                                                            if ( is_user_logged_in() ) {

                                                                $pdf_link = wp_get_attachment_url( get_post_meta( get_the_ID(), 'adj_reporte_pesca', true ) );

                                                                if ( $pdf_link ) {
                                                                    ?>
                                                                    <td><a href = "<?php echo $pdf_link ?>" >Descargar</a></td></tr><?php
                                                                } else {
                                                                    ?><td>Sorry, no link available. Please contact the webmaser.</td><?php
                                                                }
                                                            }
                                                            ?>   
                                                        <p><?php echo $product_list ->category_name?> </p>
                                                        <?php endwhile; wp_reset_query(); ?>
                                                 
                                <?php
                            endforeach;
                            ?>
                             
            <?php
            endforeach;
            ?>  
<?php 
   endforeach; 
   
   ?>
  </tr>
     </table>
                </div>
<?php   
$contador_cat = 0;
$cat_val  = 0;
$contador_subcat = 0;

?>
  <div class="table-responsive fishing-report">
                     <table class="table">
                         <thead>
                             <th>Temporada</th>
                             <th>Regiones</th>
                             <th>Frecuencia</th>
                             <th>Archivo</th>
                         </thead>
<?php 
if(isset($_GET['slct'])){
$selected_val = $_GET['slct'];  // Storing Selected Value In Variable
//echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
//echo "Valor: ".$selected_val;

$wcatTerms = get_terms('category', array('hide_empty' => 1, 'parent' =>0,'exclude'=>1,'term_taxonomy_id'=>isset($_GET['slct'])?$_GET['slct']:9 )); 
foreach($wcatTerms as $wcatTerm) : 
?>
   
   
      <?php
         $wsubargs = array(
            'hierarchical' => 1,
            'show_option_none' => '',
            'hide_empty' => 1,
            'parent' =>  $wcatTerm->term_id,
            'taxonomy' => 'category'
         );
         $wsubcats = get_categories($wsubargs);
         foreach ($wsubcats as $wsc):
             $contador_cat++;
         ?>
         <tr>
                     <?php
                         $wsubsubargs = array(
                         'hierarchical' => 1,
                         'show_option_none' => '',
                         'hide_empty' => 1,
                         'parent' => $wsc->term_id,
                         'taxonomy' => 'category'
                         );
                         $wsubsubcats = get_categories($wsubsubargs);
                         foreach ($wsubsubcats as $wssubc):
                             ?>
                              <?
                              $contador_subcat++;
                             ?>
                                 <?php
                                                         // Get all the products of each specific category
                                                         $product_args = array(
                                                             'post_type'     => 'adj_reportes',
                                                             'orderby'      => 'id',
                                                             'order'         => 'ASC',
                                                             'post_status'   => 'publish',
                                                             'category_name' => $wssubc->slug //$category->slug //passing the slug of the current category
                                                         );

                                                         $product_list = new WP_Query ( $product_args );

                                                     ?>
                               
                                                     <?php while ( $product_list -> have_posts() ) : $product_list -> the_post(); ?>
                                                     <td  >
                                                     <?php echo $wsc->name;?>
                                                     </td> 
                                                     <td><?php echo $wssubc->name;?></td>       
                                                     <td><?php the_title(); ?></td>
                                                     <?php
                                                         if ( is_user_logged_in() ) {

                                                             $pdf_link = wp_get_attachment_url( get_post_meta( get_the_ID(), 'adj_reportes', true ) );

                                                             if ( $pdf_link ) {
                                                                 ?>
                                                                 <td><a href = "<?php echo $pdf_link ?>" >Descargar</a></td></tr><?php
                                                             } else {
                                                                 ?><td>Sorry, no link available. Please contact the webmaser.</td><?php
                                                             }
                                                         }
                                                         ?>   
                                                     <p><?php echo $product_list ->category_name?> </p>
                                                     <?php endwhile; wp_reset_query(); ?>
                                              
                             <?php
                         endforeach;
                         ?>
                          
         <?php
         endforeach;
         ?>  
<?php 
endforeach; 

?>
</tr>
  </table>
             </div>
             <?php
 }
?>