<?php
/*添加主题选项*/
add_action('admin_menu', 'mytheme_page');
 
function mytheme_page (){
 
	if ( count($_POST) > 0 && isset($_POST['mytheme_settings']) ){
 
		$options = array (
		'keywords',
		'description',
		'analytics',
		
		'about_title',
		'about_cititle',
		
		'news_title',
		'news_cititle',
		
		'case_title',
		'case_cititle',
		
		'lx_title',
		'lx_cititle',
		
		'xianshi',

		'xiangce_bimg',
		'xiangce_img',
		'xiangce_url',
		'xiangce_tit',
		'xiangce_text',
		
		'about_img1',
		'about_url1',
		'about_tit1',
		'about_text1',
		
		'about_img2',
		'about_url2',
		'about_tit2',
		'about_text2',
		
		'about_img3',
		'about_url3',
		'about_tit3',
		'about_text3',
		
		'about_img4',
		'about_url4',
		'about_tit4',
		'about_text4',
		
		'about_img5',
		'about_url5',
		'about_tit5',
		'about_text5',
		
		'about_img6',
		'about_url6',
		'about_tit6',
		
		'about_img7',
		'about_url7',
		'about_tit7',
		
		'about_img8',
		'about_url8',
		'about_tit8',
		
		'about_img9',
		'about_url9',
		'about_tit9',
		
		'about_img0',
		'about_url0',
		'about_tit0',
		
		'beian',
		'dizhi',
		'tell',
		'fax',
		'mail',
		'qq',
		't_news',
		't_news2',
		't_news3',
		't_news4',
	
		
		'ditu_tit',
		'ditu_cont',
		'ditu_zuob',
	
		'ditu_zuob3',
		
		'logo',
	
		
		
		);
 
		foreach ( $options as $opt ){
 
			delete_option ( 'mytheme_'.$opt, $_POST[$opt] );
 
			add_option ( 'mytheme_'.$opt, $_POST[$opt] );	
 
		}
 
	}
 
	add_theme_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'mytheme_settings');
 
}


    //加载upload.js文件   
          
            //加载上传图片的js(wp自带)   
            wp_enqueue_script('thickbox');   
            //加载css(wp自带)   
            wp_enqueue_style('thickbox');  
           
function mytheme_settings(){?>
 
<style>
   .box h1{ display:block; height:30px; width:800px; cursor:pointer; font-size:18px; line-height:27px; border:#7CBFC7 solid 1px;  color: #666;box-shadow: 0 0 2px  #7CBFC7;}.box h1:hover{ box-shadow: 0 0 5px  #7CBFC7;}
     .jiao{  float:left;} 
	 .jiao_div li a{ float:left; display:block; font-size:14px; width:500px; }  em{ width:500px; float:left;} strong{ display:block; float:left; width:500px; font-size:14px; margin:5px 0 5px 0;}
     .jiao_div{ width:600px; height: auto; margin:10px; border:#999 solid  1px; float:left; padding:10px;} .jiao_div li{  margint: 5px 0 10px 10px; list-style:none; width: auto; float:left;  border-bottom:dashed 1px #CCC; padding:5px; }  .jiao_e  li{display:none;}
	 .jiao_div h2{ cursor:pointer; font-size:14px;}
	  img{ max-height:600px; max-width:600px; float:left;}
	.wrap,textarea,em{font-family:'Century Gothic','Microsoft YaHei',Verdana;}
 
	fieldset{width:800px;border:1px solid #aaa;padding-bottom:20px;margin-top:20px;-webkit-box-shadow:rgba(0,0,0,.2) 0px 0px 5px;-moz-box-shadow:rgba(0,0,0,.2) 0px 0px 5px;box-shadow:rgba(0,0,0,.2) 0px 0px 5px; padding:10px;}
  .box .imgsd{ float:left; width:100%; padding-bottom:10px; border-bottom:#ccc dashed 1px; margin-bottom:5px;}
  .box .imgsda{ float:left; width:100%; padding-bottom:10px; border-bottom:#333 solid 1px;margin-bottom:15px;}
  
 .box .imgsda  label { color:#F00; font-weight:bold;}
	legend{ float:left; display:block; width:600px; height:auto; margin:10px 0 10px 0; border-bottom:dashed 1px #CCC; padding:5px;}
 
	textarea{font-size:11px;border:1px solid #aaa;background:none; float:left;
	}

	textarea:focus{-webkit-box-shadow:rgba(0,0,0,.2) 0px 0px 8px;-moz-box-shadow:rgba(0,0,0,.2) 0px 0px 8px;box-shadow:rgba(0,0,0,.2) 0px 0px 8px;outline:none;}
 
 	#wpfooter{ display:none}
</style>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/upload.js"></script>  
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.4.min.js"></script> 
     <script type="text/javascript">
// 收缩展开效果
$(document).ready(function(){

	$(".box h1").click(function(){
		$(this).next(".text").slideToggle("slow");
	})

	
});
$(document).ready(function(){

	$(".jiao_div h2").click(function(){
		$(this).nextAll("li").slideToggle("slow");
	})

	
});
</script>	
<div class="wrap">
  <?php   
	$ct = wp_get_theme();
$screenshot = $ct->get_screenshot();
$class = $screenshot ? 'has-screenshot' : '';

$customize_title = sprintf( __( 'Customize &#8220;%s&#8221;' ), $ct->display('Name') );

 ?>
<h2>主题选项</h2>
<p>主题名称：：<?php echo $ct->display('Name'); ?><br/>
主题版本：<?php echo $ct->display('Version'); ?><br/>
本主题由web主题公园倾力打造，感谢您使用web主题公园的主题，更多主题请访问：<a href="http://www.themepark.com.cn">http://www.themepark.com.cn</a><br/>
BUG提交，请进入web主题公园网站，在相关主题下留言即可，我们收到留言即将对bug进行评估并更新，感谢您的支持!<br />
优化后台"主题选项"的功能，现在可以在后台上传图片了，优化另外一些细节，希望你能喜欢。
<br />
主题更新信息请见详细描述页面：<a href="http://www.themepark.com.cn/cleanwhite-themes.html">干净简洁的白色wordpress主题</a><br/>
<br /><br />
更多教程和主题请访问我们的官网<a href="http://www.themepark.com.cn">WEB主题公园</a>，详细信息请见主题说明：<a href="http://www.themepark.com.cn/cleanwhite-themes.html">主题详细说明</a>
</p>


 <ul >
 <form method="post" action="">

 <li class="box"> <h1>首选项</h1>
 <div class="text" style="display:none">
 
	<fieldset>
 
	<legend><strong>LOGO的图片地址</strong></legend>
 
              
         
				
				<div class="up">
           <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        

 
 
				<em>请上传logo图片,图片格式为PNG（216像素 X45像素） logo主题为浅色最佳</em>
 

 
	<legend><strong>公司联系方式（显示在首页和联系我们页面）</strong></legend>
 
              
         <legend><strong>地址</strong></legend>
				<textarea name="dizhi" id="dizhi" rows="1" cols="70"><?php echo get_option('mytheme_dizhi'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
      
       <legend><strong>电话</strong></legend>
				<textarea name="tell" id="tell" rows="1" cols="70"><?php echo get_option('mytheme_tell'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
                
                       <legend><strong>传真</strong></legend>
				<textarea name="fax" id="fax" rows="1" cols="70"><?php echo get_option('mytheme_fax'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
		
		       <legend><strong>电子邮件</strong></legend>
				<textarea name="mail" id="mail" rows="1" cols="70"><?php echo get_option('mytheme_mail'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
                
                       <legend><strong>	qq</strong></legend>
				<textarea name="qq" id="qq" rows="1" cols="70"><?php echo get_option('mytheme_qq'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
         
				 <legend><strong>备案号</strong></legend>
				<textarea name="beian" id="beian" rows="1" cols="70"><?php echo get_option('mytheme_beian'); ?></textarea><br />
 
                  
				<em>示例：京 8888-888</em>
				


	</fieldset>
 <fieldset>

     	<fieldset>
 	<legend><strong>百度地图引用</strong></legend>
 <ul class="jiao_div">

  <li>
			<a>名称</a>	<textarea class="jiao" name="ditu_tit" id="ditu_tit" rows="1" cols="50"><?php echo get_option('mytheme_ditu_tit'); ?></textarea>
 </li>
 <li>
		<a>具体地址</a>	<textarea class="jiao" name="ditu_cont" id="ditu_cont" rows="1" cols="50"><?php echo get_option('mytheme_ditu_cont'); ?></textarea>
 </li>
  <li>
		<a>坐标X</a>	<textarea class="jiao" name="ditu_zuob" id="ditu_zuob" rows="1" cols="50"><?php echo get_option('mytheme_ditu_zuob'); ?></textarea>
        <a>坐标Y</a>	<textarea class="jiao" name="ditu_zuob3" id="ditu_zuob3" rows="1" cols="50"><?php echo get_option('mytheme_ditu_zuob3'); ?></textarea>
       
				
 </li>
 
   <li>
		
       
 </li>
 </ul>
              
			
         

 
				<em style="float:left; margin-top:60px;">默认为天安门地图，坐标获得方法：
                 <br /> 1.点击进入<A target="_blank" href="http://api.map.baidu.com/lbsapi/creatmap/index.html/">百度地图制作</A><br />2.点击侧边栏"定位中心点"，找到公司所在位置
               <br /> 3.点击"添加标注"，在地图上标注公司具体位置<br />
              <br />  4.回到定位中心点，如下图所示获取经纬度坐标，x、y对应填入对话框中保存即可:
              <br />  <img style="float:left; border:#F00 solid 2px;" src="<?php bloginfo('template_url'); ?>/images/shuoming.jpg" />
                

            
                </em>
 

	</fieldset>

	</fieldset>

    
  	

 


</div>
</li>
 
 
 
 <li class="box"> <h1>首页栏目调用</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>首页栏目调用选择</strong></legend>
 
<div class="imgsd">
 <img  src="<?php bloginfo('template_url'); ?>/images/screenshot.gif" />
 </div>
 <div class="imgsda">
			<label  for="t_news">新闻模块:</label>
             <select name="t_news" id="t_news">
	
		<?php 
		 $categorys = get_categories();
		 $t_news= get_option('mytheme_t_news');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
        <option value=''>请选择</option>
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $t_news == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
  <br />
				<em>请建立并在此处一个分类目录作为发送到首页焦点图的栏目，选择好之后，您需要发布一些文章，值得注意的是，您需要设置一张较大的特色图片，图片的尺寸是615*392，您也可以上传一张较大的图片，程序将为您裁剪</em>
                <br />
   <br />
     <br />
		</div>
		
 	<div class="imgsd">
 <img  src="<?php bloginfo('template_url'); ?>/images/screenshot3.gif" />
 </div>
 <div class="imgsda">
			<label  for="t_news3">产品模块:</label>
             <select name="t_news3" id="t_news3">
	
		<?php 
		 $categorys = get_categories();
		 $t_news3= get_option('mytheme_t_news3');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
        <option value=''>请选择</option>
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $t_news3 == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
  <br />
				<em>选择一个分类，这个分类将发送到产品栏目</em>
                <br />
   <br />
     <br />
		
	</div>
  	<div class="imgsd">
 <img  src="<?php bloginfo('template_url'); ?>/images/screenshot4.gif" />
 </div>
 <div class="imgsda">
			<label  for="t_news4">关于我们模块:</label>
             <select name="t_news4" id="t_news4">
	            <option value=''>请选择</option>
		<?php 
		 $pages = get_pages();
		 $t_news4= get_option('mytheme_t_news4');
		foreach( $pages AS $page ) { 
		 $page_id=$page->ID;
		  $page_name=$page->post_title;
		?>
      
			<option 
				value='<?php echo  $page_id; ?>'
				<?php
					if ( $t_news4 == $page_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $page_name; ?></option>
		<?php } ?>
	</select>
  <br />
				<em>选择一个分类，这个页面将发送到首页的按钮，注意 这里需要建立的是页面哦！</em>
                <br />
   <br />
     <br />
 
 </div>
 
 
  	<div class="imgsd">
 <img  src="<?php bloginfo('template_url'); ?>/images/screenshot2.gif" />
 </div>
 <div class="imgsda">
			<label  for="t_news2">联系我们模块:</label>
             <select name="t_news2" id="t_news2">
	            <option value=''>请选择</option>
		<?php 
		 $pages = get_pages();
		 $t_news4= get_option('mytheme_t_news2');
		foreach( $pages AS $page ) { 
		 $page_id=$page->ID;
		  $page_name=$page->post_title;
		?>
      
			<option 
				value='<?php echo  $page_id; ?>'
				<?php
					if ( $t_news4 == $page_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $page_name; ?></option>
		<?php } ?>
	</select>
  <br />
				<em>选择一个分类，将会把“联系我们”页面的链接发送到这个按钮上，注意 这里需要建立的是页面哦！</em>
                <br />
   <br />
     <br />
 
 </div>
	</fieldset>
 
 
 
 


 

</div>
</li>
 
 
 
  <li class="box"> <h1>焦点图组件选项</h1>
 <div class="text" style="display:none">

 	
	
 
 	<fieldset class="jiao_e">
 <legend><strong>焦点图选项</strong></legend>
  <ul class="jiao_div">
  <h2>焦点图1  <a>+点击开关</a></h2>
  <li>
  <p>效果预览：</p>
            <img src="<?php echo get_option('mytheme_about_img6'); ?>" /><br />
			<a>图片地址</a>	
            
           <div class="up">
           <input type="text" size="80"  name="about_img6" id="about_img6" value="<?php echo get_option('mytheme_about_img6'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
             <em>焦点图尺寸为：931*301</em>
 </li>
 <li>
		<a>链接</a>	<textarea class="jiao" name="about_url6" id="about_url6" rows="1" cols="46"><?php echo get_option('mytheme_about_url6'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
  <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit6" id="about_tit6" rows="1" cols="46"><?php echo get_option('mytheme_about_tit6'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
 <ul class="jiao_div">
  <h2>焦点图2 <a>+点击开关</a></h2>
  <li>
   <p>效果预览：</p>
             <img src="<?php echo get_option('mytheme_about_img7'); ?>" /><br />
			<a>图片地址</a>	
            <div class="up">
           <input type="text" size="80"  name="about_img7" id="about_img7" value="<?php echo get_option('mytheme_about_img7'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
             <em>焦点图尺寸为：931*301</em>
 </li>
 <li>
          
		<a>链接</a>	<textarea class="jiao" name="about_url7" id="about_url7" rows="1" cols="46"><?php echo get_option('mytheme_about_url7'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit7" id="about_tit7" rows="1" cols="46"><?php echo get_option('mytheme_about_tit7'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>

  <ul class="jiao_div">
  <h2>焦点图3 <a>+点击开关</a></h2>
  <li>  <p>效果预览：</p>
             <img src="<?php echo get_option('mytheme_about_img8'); ?>" /><br />
			<a>图片地址</a>	
            
            <div class="up">
           <input type="text" size="80"  name="about_img8" id="about_img8" value="<?php echo get_option('mytheme_about_img8'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
             <em>焦点图尺寸为：931*301</em>
 </li>
 <li> 
         
		<a>链接</a>	<textarea class="jiao" name="about_url8" id="about_url8" rows="1" cols="46"><?php echo get_option('mytheme_about_url8'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit8" id="about_tit8" rows="1" cols="46"><?php echo get_option('mytheme_about_tit8'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
 
   <ul class="jiao_div">
  <h2>焦点图4 <a>+点击开关</a></h2>
  <li>  <p>效果预览：</p>
              <img src="<?php echo get_option('mytheme_about_img9'); ?>" /><br />
			<a>图片地址</a>	
            
            <div class="up">
           <input type="text" size="80"  name="about_img9" id="about_img9" value="<?php echo get_option('mytheme_about_img9'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
             <em>焦点图尺寸为：931*301</em>
 </li>
 <li>
		<a>链接</a>	<textarea class="jiao" name="about_url9" id="about_url9" rows="1" cols="46"><?php echo get_option('mytheme_about_url9'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit9" id="about_tit9" rows="1" cols="46"><?php echo get_option('mytheme_about_tit9'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
    <ul class="jiao_div">
  <h2>焦点图5 <a>+点击开关</a></h2>
  <li>   <p>效果预览：</p>
             <img src="<?php echo get_option('mytheme_about_img0'); ?>" /><br />
			<a>图片地址</a>
            	 <div class="up">
           <input type="text" size="80"  name="about_img0" id="about_img0" value="<?php echo get_option('mytheme_about_img0'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
             <em>焦点图尺寸为：931*301</em>
 </li>
 <li>
		<a>链接</a>	<textarea class="jiao" name="about_url0" id="about_url0" rows="1" cols="46"><?php echo get_option('mytheme_about_url0'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit0" id="about_tit0" rows="1" cols="46"><?php echo get_option('mytheme_about_tit0'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
 </fieldset>
 
 


 
	
</div>
 
 
  

 
 
 
 
 
 
 <li class="box"> <h1>SEO以及统计选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>SEO 代码添加</strong></legend>
 

 
				<textarea name="keywords" id="keywords" rows="1" cols="70"><?php echo get_option('mytheme_keywords'); ?></textarea><br />
 
				<em>网站关键词（Meta Keywords），中间用半角逗号隔开,如：主题公园，网站模板，wordpress主题</em>
 
		
				<textarea name="description" id="description" rows="3" cols="70"><?php echo get_option('mytheme_description'); ?></textarea>
 
				<em>网站描述（Meta Description），针对搜索引擎设置的网页描述，如：主题公园是专注于高端网站主题，高端网站模板的设计和制作...</em>
 
	
 
	</fieldset>
 
 
 
	<fieldset>
 
	<legend><strong>统计代码添加</strong></legend>
 
		
 
				<textarea name="analytics" id="analytics" rows="5" cols="70"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
 

      	</fieldset>  
    
 


 
	

</div>
</li>
<li class="box"> <h1>关于我们的页面选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>

				
				

 <div style="margin-top:20px;">
 <div style="100%">
 <strong>首页焦点图下方的简介文字（你得在这写点儿什么，他们将显示在首页）</strong>
    
				
				
   
              </div>
<ul class="jiao_div">

 <div><legend><strong>首页焦点图下方简介文字</strong></legend>
 

 </div>

  

  <li>
		<a>标题</a>	<textarea class="jiao" name="about_tit1" id="about_tit1" rows="1" cols="50"><?php echo get_option('mytheme_about_tit1'); ?></textarea>
 </li>
  <li>
		<a>文字</a>	<textarea class="jiao" name="about_text1" id="about_text1" rows="6" cols="96"><?php echo get_option('mytheme_about_text1'); ?></textarea>
 </li>
 </ul>
 


  </div>
	</fieldset>
 
 
  
 

    
 


 


</div>
</li>
<li class="box"> <h1>其他选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>提供下载的资料</strong></legend>
 
              
           <div class="up">
           <input type="text" size="80"  name="news_title" id="news_title" value="<?php echo get_option('mytheme_news_title'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
				
 
				<em>下载的资料（上载 .zip .pdf .rar等文件</em>
 
		
			
         
				
				

	</fieldset>
    
    	<fieldset>
 
	<legend><strong>关于我们的图片</strong></legend>
 
              <p>预览：</p>
               <img src="<?php echo get_option('mytheme_case_title'); ?>" />
               
               
				 <div class="up">
           <input type="text" size="80"  name="case_title" id="case_title" value="<?php echo get_option('mytheme_case_title'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
                
                <br />
 
				<em>关于我们页面显示的图片 不填写则显示默认图像</em>
 
		
				
         
				
				

	</fieldset>
 
 
     	<fieldset>
 
	<legend><strong>新闻页面显示的图片</strong></legend>
 
               <p>预览：</p>
          <img src="<?php echo get_option('mytheme_lx_title'); ?>" />
          
				 <div class="up">
           <input type="text" size="80"  name="lx_title" id="lx_title" value="<?php echo get_option('mytheme_lx_title'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
				
				<em>新闻页面显示的图片 不填写则显示默认图像</em>
                
 
		<legend><strong>案例（产品）页面显示的图片</strong></legend>
         <p>预览：</p>
            <img src="<?php echo get_option('mytheme_lx_cititle'); ?>" />
				 <div class="up">
           <input type="text" size="80"  name="lx_cititle" id="lx_cititle" value="<?php echo get_option('mytheme_lx_cititle'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div>
                
              
 
			<em>案例（产品）页面显示的图片 不填写则显示默认图像</em>
         
				
				

	</fieldset>

    
 </li>

 	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 

</form>
</div>

 </ul>

</div>


 
<?php }
echo $after_widget;
/*添加主题选项over*/
?>