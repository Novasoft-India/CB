<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>

	</div><!-- #main -->

	<?php 
    /** 
     * catchbox_after_main hook
     */
    do_action( 'catchbox_after_main' ); 
    ?>      

	<footer id="colophon" role="contentinfo">
		<?php
        /** 
         * catchbox_before_footer_menu hook
         */
        do_action( 'catchbox_before_footer_sidebar' );
	
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with three columns of widgets.
		 */
		get_sidebar( 'footer' );
				
		/** 
		 * catchbox_before_footer_menu hook
		 */
		do_action( 'catchbox_after_footer_sidebar' );
		
		/** 
		 * catchbox_before_footer_menu hook
		 */
		do_action( 'catchbox_before_footer_menu' ); 		
		
		if ( has_nav_menu( 'footer', 'catchbox' ) ) {
			// Check is footer menu is enable or not
			$options = catchbox_get_theme_options();
			if ( !empty ($options ['enable_menus'] ) ) :
				$menuclass = "mobile-enable";
			else :
				$menuclass = "mobile-disable";
			endif;
			?>
			<nav id="access-footer" class="<?php echo $menuclass; ?>" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Footer menu', 'catchbox' ); ?></h3>
				<?php wp_nav_menu( array( 'theme_location'  => 'footer', 'container_class' => 'menu-footer-container', 'depth' => 1 ) );  ?>
			</nav>
       	<?php 
		} 
		
		/** 
		 * catchbox_before_footer_menu hook
		 */
		do_action( 'catchbox_after_footer_menu' ); ?>
        
        <div id="site-generator" class="clearfix">
        
          <div class="final_bottom_box">
<div class="bottom_scroll"><marquee direction="left" loop="50" width="100%" scrollamount="2">::"The Ministry of Micro, Small and Medium Enterprises vide Office Order No.A-42011/1/2014-Estt. Dated 27th June,2014 has given the additional charge of Chairman,Coir Board to Shri Surendra Nath Tripathi IAS, Joint Secretary, Ministry of M S M E, Udyog Bhavan, New Delhi. He has assumed the charge w.e.f.27.06.2014(F.N)::  ::"Coir Darsan 2014" The Diamond Jubilee Celebrations of Coir Board is to conclude with a valedictory function at Central Coir Research Institute Complex, Kalavoor, Alleppey during 25th to 27th May 2014. Dr.APJ Abdul Kalam the Chief Guest in the Valedictory function and Shri Oommen Chandy had inaugurated the International Coir Museum.::  ::The TOLL FREE NUMBER 18004259091 will be active from 9.30AM to 5.30PM on all working days ::  </marquee></div>

<div class="bottom_btn_btn">

<a href="/?page_id=1263">RTI</a>    &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=1265">Grievances</a>     &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=129">Notification</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Anouncement</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=259">Statistics</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"></a><a href="/?page_id=207">Reports </a>   &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Forms</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=32">Acts&amp;Rules </a>   &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=152">Articles </a>  &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=160">Career </a>  &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=158">Publications</a>   &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=209">Circulars</a>   &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=135">Buying   &nbsp;&nbsp;&nbsp;&nbsp; </a><a href="#">Agents    &nbsp;&nbsp;&nbsp;&nbsp;</a><a href="#"></a><a href="/?page_id=74">Machinery</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Manufactures</a>   &nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Trade Circulars </a>   &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=183">Trade Events </a>
                                                                                               &nbsp;&nbsp;&nbsp;&nbsp; <a href="/?page_id=141">Machinery Suppliers</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=51">Citizen Charter</a>   &nbsp;&nbsp;&nbsp;&nbsp; <a href="/export-directory/">Exporters Directory </a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=179">Coir News</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=3575">FAQ</a>    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?page_id=211">Invitations</a>

</div>
<div class="footer">© 2014 Coirboard. All Rights Reserved Designed &amp; Developed by NOVASOFT</div>
</div>
            
        </div> <!-- #site-generator -->
        
	</footer><!-- #colophon -->
    
</div><!-- #page -->

<?php 
/** 
 * catchbox_after hook
 */
do_action( 'catchbox_after' );
?>

<?php wp_footer(); ?>

</body>
</html>