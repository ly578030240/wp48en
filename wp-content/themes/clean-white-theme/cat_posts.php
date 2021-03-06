<?php 

class My_Widget extends WP_Widget {

	function My_Widget()
	{
		$widget_ops = array('description' => '侧边栏的图文模块，可以选择调用一个你建立好的分类，以图文模式显示');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget(false,$name='侧边图文分类模块',$widget_ops,$control_ops);  

                //parent::直接使用父类中的方法
                //$name 这个小工具的名称,
                //$widget_ops 可以给小工具进行描述等等。
                //$control_ops 可以对小工具进行简单的样式定义等等。
	}

	function form($instance) { // 给小工具(widget) 添加表单内容
		 $title = esc_attr($instance['title']);
		 $w_cat = esc_attr($instance['w_cat']);
		 $nnmber = esc_attr($instance['nnmber']);
	?>
	
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_attr_e('标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<label  for="<?php echo $this->get_field_id('w_cat'); ?>">侧边栏分类模块（图文）:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat'); ?>" name="<?php echo $this->get_field_name('w_cat'); ?>" >
              <option value=''>请选择</option>
<?php 
		 $categorys = get_categories();
		$sigk_cat2= $w_cat;
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $sigk_cat2 == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>

<p><label for="<?php echo $this->get_field_id('nnmber'); ?>"><?php esc_attr_e('显示数量:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('nnmber'); ?>" name="<?php echo $this->get_field_name('nnmber'); ?>" type="text" value="<?php echo $nnmber; ?>" /></label></p>




	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
        $title = apply_filters('widget_title', empty($instance['title']) ? __('分类自定义') : $instance['title']);
		$w_cat = apply_filters('widget_title', empty($instance['w_cat']) ? __('') : $instance['w_cat']);
		$nnmber = apply_filters('widget_title', empty($instance['nnmber']) ? __('1') : $instance['nnmber']);
        ?>
       <div id="cat" class="widget">
       <h2> <?php echo $title; ?></h2>
          <?php
$cat=$w_cat; //获取分类别名为 wordpress 的分类数据
$nnm = $nnmber;
?>
       
       
             <?php $posts = get_posts( "category=$cat&numberposts=$nnm" ); ?>
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

   <li>
   <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
       <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
       <?php else : ?>
        <?php endif; ?>  
        <a class="new_tu_img" href="<?php the_permalink() ?>"  > <span> <?php the_post_thumbnail('customized-post-thumb'); ?> </span> </a> 
         
        <div class="shuom"> 
        <h1><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?></a></h1>
       </div> 
         </li>

    <?php endforeach; ?>
    
    <?php else : ?>
    <?php endif; ?>
       </div>
        <?php
	}
}
register_widget('My_Widget');
?>