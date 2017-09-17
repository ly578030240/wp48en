<?php
/**
  Category Template:产品目录栏目模版
 **/
 get_header(); ?>

<div class="maim_pages">

   <div class="main3" style="background: url(<?php bloginfo('template_url'); ?>/images/case_bj.png);  box-shadow: 0 0 5px  #CCC;"> 

    <ul class="all_nav2">
          <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
$cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据


                      echo get_category_link( $cat );?>">产品展示</a>&nbsp;><a><?php wp_title(''); ?></a></li>
     </ul>
     <div class="chicun2">
  <?php if (get_option('mytheme_lx_cititle')!=""): ?>
   <img src="<?php echo get_option('mytheme_lx_cititle'); ?>" />
    <?php else : ?>   
   <img src="<?php bloginfo('template_url'); ?>/images/pages/case-img.png" />
     <?php endif; ?>
     </div>
   <ul class="new_tu" style="width:900px;">
       
         
             
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

   <li>
   <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
       <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
       <?php else : ?>
        <?php endif; ?>  
        <a class="new_tu_img" href="<?php the_permalink() ?>" > <span> <?php the_post_thumbnail('customized-post-thumb'); ?> </span> </a>  
        <div class="shuom"> <h1><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?></a></h1>
          <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),  0,40,"..."); ?></p>
         </li>

    <?php endforeach; ?>
    
    <?php else : ?>
       
       
       
        <li>
        <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
                <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
         
                <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
                <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
         
                <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
      
         
       
         
     
      
         
       
        <?php endif; ?>  
      </ul>                     <div class="pager">   <?php par_pagenavi(); ?>  </div>

    

   
   
   </div>
    <img class="shadow_2" src="<?php bloginfo('template_url'); ?>/images/pages/shadouw.png" />
</div>




<?php get_footer(); ?>
