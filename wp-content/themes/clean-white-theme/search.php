<?php get_header(); ?>

<?php get_header(); ?>

<div class="about_bt">
  <div class="about_bt2">
    <div class="about_bt3">
      <h1> Search Results</h1>
       <p>以下是您搜索的结果...</p>
    </div>
  </div>

</div>



<div class="maim_pages">
   <div class="main2"> 
    <ul class="all_nav2">
        <li><a href="#">首页</a>></li>
        <li><a href="#">搜索结果</a></li>
     </ul>
    <div class="leftmain">
    <div class="news_show">
  
    
    <ul>
       	<?php if (have_posts()) : ?>

		


		<?php while (have_posts()) : the_post(); ?>

		<li>
             <a class="bt" href="<?php the_permalink() ?>"> <h1><?php the_title(); ?> </h1></a>
             <a class="time"><?php the_time('m-d-y') ?></a>
         
         </li>
				


		<?php endwhile; ?>



	<?php else : ?>

		<h1>非常抱歉，没有找到您想要的结果</h1>

	<?php endif; ?>



         
    </ul>
            
             
   
   </div>
    
    </div>

    
    
    <div class="rightmain">
    <?php include_once("sidebar.php"); ?>
    </div>
   
   
   
   </div>
</div>




<?php get_footer(); ?>


<?php get_footer(); ?>
