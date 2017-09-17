<?php get_header(); ?>

  
  
 <!--ijaoover-->

<div class="maim">
   <div class="main2">
           <div class="sadnn">
             <div class="news_in">
          <div id="s3" class="scrollDiv">
            <ul>
               <?php
$cat=get_option('mytheme_t_news'); //获取分类别名为 wordpress 的分类数据; //获取分类别名为 wordpress 的分类数据

?>
             
                   <?php $posts = get_posts( "category=$cat&numberposts=12" ); ?>
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
 <li>
                 <a href="<?php the_permalink() ?>"><h1><b>NEWS:</b><?php echo mb_strimwidth(strip_tags($post->post_title), 0,80,"... :"); ?>:</h1>
                 <p><?php echo mb_strimwidth(strip_tags($post->post_content), 0,35,"..."); ?>
             </p>
             </a>
             </li>

    <?php endforeach; ?>
    
    <?php else : ?>
             <li>
                 <a href="<?php  bloginfo('url');?>/sample/"><h1><b>NEWS:</b>上下滚动的新闻展示组件</h1>
               <p>这里我们制作了一个可以上下滚动的新闻展示组件，这里可以展示更多的新闻，以及新闻的内容，以便吸引用户阅读... </p>
             </a>
             </li>
             
                  <li>
                 <a href="<?php  bloginfo('url');?>/sample/"><h1><b>NEWS:</b>上下滚动的新闻展示组件</h1>
              <p>这里我们制作了一个可以上下滚动的新闻展示组件，这里可以展示更多的新闻，以及新闻的内容，以便吸引用户阅读...</p>
             </a>
             
             </li>
             
             
                 <li>
                 <a href="<?php  bloginfo('url');?>/sample/"><h1><b>NEWS:</b>上下滚动的新闻展示组件</h1>
               <p>这里我们制作了一个可以上下滚动的新闻展示组件，这里可以展示更多的新闻，以及新闻的内容，以便吸引用户阅读...</p>
             </a>
             </li>
           <?php endif; ?>  
   
             </ul>
</div>
<span id="btn2">[下一条>>]</span> 	
 </div>
   
   <div class="seach_header">
   
    <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <div>
        <label for="s" class="screen-reader-text">Search for:</label>
        <input type="text" onfocus="if (value =='从这里搜索，按enter开始'){value =''}" onblur="if (value ==''){value='从这里搜索，按enter开始'}" id="s" name="s" value="从这里搜索，按enter开始" />
        
      
    </div>
</form>
    
    </div>
   
   
   </div>
   
   
       <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant.js"></script>
       
       
   <div class="jiao">
   
   <DIV id=imgPlay>
<UL class=imgs id=actor>
<?php if (get_option('mytheme_about_img6')!=""): ?>
  <LI><a href="<?php echo get_option('mytheme_about_url6'); ?>"> <img src="<?php echo get_option('mytheme_about_img6'); ?>" alt="<?php echo get_option('mytheme_about_tit6'); ?>" /> </a></LI>  
 <?php else : ?>    
 <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif" /></LI>
 <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao1_05.gif"  /></LI>
 <LI> <img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif"  /></LI>
 <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao1_05.gif"  /></LI>
  <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif"  /></LI>
  <?php endif; ?>
  
 <?php if (get_option('mytheme_about_img7')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url7'); ?>"><img src="<?php echo get_option('mytheme_about_img7'); ?>" alt="<?php echo get_option('mytheme_about_tit7'); ?>" /></a></LI>  
 <?php else : ?>  
<?php endif; ?>
 
  <?php if (get_option('mytheme_about_img8')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url8'); ?>"><img src="<?php echo get_option('mytheme_about_img8'); ?>" alt="<?php echo get_option('mytheme_about_tit8'); ?>" /></a></LI>  
 <?php else : ?>  
 
 <?php endif; ?>
 
  <?php if (get_option('mytheme_about_img9')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url9'); ?>"><img src="<?php echo get_option('mytheme_about_img9'); ?>" alt="<?php echo get_option('mytheme_about_tit9'); ?>" /></a></LI>  
 <?php else : ?>  

 <?php endif; ?>
 
  <?php if (get_option('mytheme_about_img0')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url0'); ?>"><img src="<?php echo get_option('mytheme_about_img0'); ?>" alt="<?php echo get_option('mytheme_about_tit0'); ?>" /></a></LI>  
 <?php else : ?>  

 <?php endif; ?>

</UL>


<DIV class=prev><img src="<?php bloginfo('template_url'); ?>/images/prev.png" /></DIV>
<DIV class=next><img src="<?php bloginfo('template_url'); ?>/images/next.png" /></DIV></DIV>
   
   
   </div>
   
   
   <?php if (get_option('mytheme_about_tit1')!=""): ?>
     <div class="guanyu">
   <h1>----------  <?php echo get_option('mytheme_about_tit1'); ?>   -----------</h1>
   <p><?php echo get_option('mytheme_about_text1'); ?></p>
   
   
    <?php else : ?>

   <div class="guanyu">
   <h1>----------  极致简洁的wordpress主题  -----------</h1>
   <p>干净，简洁，无需过多的繁杂，高性能的后台设计，您可以自由的设置网站的各种图片和文字，便捷的小工具栏目，使您可以在后台随意更改
侧边栏的功能模块，这段文字您也可以非常方便的在后台更改，用非常简洁的语言书写上您公司的优势，特色，以及业务。</p>
   <?php endif; ?>  
   <a href="   <?php 
                     
                      global $wpdb;
                      $page_id = get_option('mytheme_t_news4');
                      echo get_page_link( $page_id );?>"> <img src="<?php bloginfo('template_url'); ?>/images/btn_12.gif" /></a>  
   
   <a href="   <?php 
$cat=get_option('mytheme_t_news3'); //获取分类别名为 wordpress 的分类数据


                      echo get_category_link( $cat );?>"><img src="<?php bloginfo('template_url'); ?>/images/btn_14.gif" /></a>
   
   </div>
       

<div class="cp_index">
       <?php
$cat=get_option('mytheme_t_news3'); //获取分类别名为 wordpress 的分类数据

?>
<div class="cp_index_bt"><h1>Latest projects  最新的产品</h1> <a  href=" <?php  echo get_category_link( $cat );?>"> </a></div>
                      
                      
            <ul class="new_tu">
       
 
             
                   <?php $posts = get_posts( "category=$cat&numberposts=8" ); ?>
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

   <li>
   <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
       <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
       <?php else : ?>
        <?php endif; ?>  
        <a class="new_tu_img" href="<?php the_permalink() ?>"  > <span> <?php the_post_thumbnail('customized-post-thumb'); ?> </span> </a> 
         
        <div class="shuom"> <h1><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?></a></h1>
     <a href="<?php the_permalink() ?>">    <p><?php echo mb_strimwidth(strip_tags($post->post_content),24,40,"... :"); ?></p></a> </div> 
         </li>

    <?php endforeach; ?>
    
    <?php else : ?>
       
       
       
        <li>
        <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif" /></span> </a>  
       <div class="shuom"><h1><a href="">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
             <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_26.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a></a>
       
       </div> 
         </li>
         
                <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_27.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
         
                <li>
        
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
       <div class="shuom"><h1><a href="<?php  bloginfo('url');?>/sample/">产品标题</a></h1>
       <a href="<?php  bloginfo('url');?>/sample/"><p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p></a>
       
       </div> 
         </li>
         
         
      
         
       
         
     
      
         
       
        <?php endif; ?>  
      </ul>            
                      

</div>






           
     


</div></div>







<?php get_footer(); ?>
