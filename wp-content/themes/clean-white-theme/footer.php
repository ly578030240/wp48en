		<div id="footer">
             
             <div class="footer_main">
           
                      <div class="f_m">  
                          <div class="f_xian">
                           <div class="f_bq">
                               <div class="contact_wen2">
          <p><b>电话：</b><?php echo get_option('mytheme_tell'); ?> &nbsp; &nbsp; &nbsp;  <b>传真：</b><?php echo get_option('mytheme_fax'); ?>
         
          <b>电子邮件：</b><?php echo get_option('mytheme_mail'); ?>  &nbsp; &nbsp; &nbsp;  <b>QQ：</b><?php echo get_option('mytheme_qq'); ?> &nbsp; &nbsp; &nbsp; 
         
         <b>联系地址：</b><?php echo get_option('mytheme_dizhi'); ?></p>
          <p  class="f_bq"> <a href="http://www.themepark.com.cn" target="_blank" class="banquan">技术支持：WEB主题公园</a></p>
          
          </div>
                           
                           
                           
                               <p>版权所有copy@<?php echo date("Y"); echo " "; bloginfo('name'); ?>&nbsp; &nbsp; 
                               <?php if (get_option('mytheme_beian')!=""): ?>
                              <?php echo get_option('mytheme_beian'); ?>
                              <?php else : ?>
                                湘ICP备11016964号   </p>
                              <?php endif; ?>      
                              <?php echo stripslashes(get_option('mytheme_analytics')); ?>
                            </div>
                            
   <div class="f_links">
                            
                               <li><h1>友情链接:</h1></li>
                                <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'link')); ?>
                    
                            </div>
                            </div>
                            
                       </div>
 
        
        
        
			
	



	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>