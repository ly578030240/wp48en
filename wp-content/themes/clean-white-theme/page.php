<?php  
/* 
Template Name:aboutus
*/  
?> 


<?php get_header(); ?>
   <div class="about_bt">
    <div class="about_bt_ka">
      <div class="about_bt_left">
      <h1>ABOUT US</h1>
      <p>关于我们</p>
       </div>
       
       <div class="about_bt_right">
        <a href="<?php echo get_option('mytheme_news_title'); ?>"> <img src="<?php bloginfo('template_url'); ?>/images/pages/aboutus_03.png" /></a>  
   
   <a href="   <?php 
                    
                      global $wpdb;
                       $page_id = get_option('mytheme_t_news2');
                      echo get_page_link( $page_id );?>"><img src="<?php bloginfo('template_url'); ?>/images/pages/aboutus_05.gif" /></a>
   
       
       </div>
    
    </div>
  </div>
<div class="maim_pages">

   <div class="about_bt2">
    <div class="chicun">
   <?php if (get_option('mytheme_case_title')!=""): ?>
   <img src="<?php echo get_option('mytheme_case_title'); ?>" />
    <?php else : ?>   
 <img src="<?php bloginfo('template_url'); ?>/images/pages/about_tu_07.gif" />
   <?php endif; ?>
   </div>
  </div>
   <div class="main5"> 

    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
$cat=get_category_by_slug('company-news'); //获取分类别名为 wordpress 的分类数据


                      echo get_category_link( $cat );?>">关于我们</a> &nbsp;> &nbsp;<a><?php the_title(); ?></a></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
  
    
      <div class="about_wen2">

    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
     <?php the_content(); ?>
    
      
           <?php endwhile; ?> 
          
      



	<?php else : ?>
        

 <?php  endif; ?>   

         
     </div>
            

   </div>
    
    
    </div>
    
    
    
    <div class="rightmain2">
    <?php include_once("sidebar.php"); ?>
    </div>
   
   
   
   </div>
     <img class="shadow_2" src="<?php bloginfo('template_url'); ?>/images/pages/shadouw.png" />  
</div>




<?php get_footer(); ?>
