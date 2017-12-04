<?php
$footer_b=get_option('mytheme_footer_b');
if($footer_b){ $footer_bs='style="background:url('.$footer_b.')"';}
$footer_d=get_option('mytheme_footer_d');
if($footer_d){ $footer_ds='style="background:url('.$footer_d.')"';}
$word_t2=get_option('mytheme_word_t2');
$canuxtheme= get_option('mytheme_canuxtheme');
$icp_b=get_option('mytheme_icp_b');
$gongan_b=get_option('mytheme_gongan_b');
$gongan_b_link=get_option('mytheme_gongan_b_link');
 ?>

<div class="footer"<?php echo $footer_bs;?>>



<div class="footer_in">



<div id="footer_in_box" class="footer_in_box demor footer_about">
  <?php if(get_option('mytheme_footer_box2_pic')){$footer_box2_pic=get_option('mytheme_footer_box2_pic');}else{$footer_box2_pic=get_bloginfo('template_url').'/images/tail_canux.jpg';};?>

  <a target="_blank" href="<?php echo get_option('mytheme_footer_box2_link') ?>" class="about_pic">
    <img src="<?php echo $footer_box2_pic;?>"  <?php echo 'alt="'.get_option('mytheme_footer_box2_title').'"'; ?>/>
  </a>

  <p class="about_text"><?php if(get_option('mytheme_footer_box2_text')){echo get_option('mytheme_footer_box2_text');}else{echo 'Canux Company.';} ?>
  </p>
</div>


<div id="footer_in_box" class="footer_in_box footer_contact">
  <b>
    <font><?php if(get_option('mytheme_footer_box3_title')){ echo get_option('mytheme_footer_box3_title2');}else{echo'从社交媒体上关注我们';} ?>
    </font>
  </b>
  <?php if(get_option('mytheme_footer_box3_pic')){$footer_box3_pic=get_option('mytheme_footer_box3_pic');}else{$footer_box3_pic=get_bloginfo('template_url').'/images/wechat_canux.jpg';};?>
  <a target="_blank" href="<?php echo get_option('mytheme_footer_box3_link'); ?>" class="about_pic">
    <img src="<?php echo $footer_box3_pic;?>"  alt="<?php echo get_option('mytheme_footer_box3_title') ?>"/>
  </a>

<!-- add qq qrcode -->
  <?php if(get_option('mytheme_footer_box4_pic')){$footer_box4_pic=get_option('mytheme_footer_box4_pic');}else{$footer_box4_pic=get_bloginfo('template_url').'/images/qq_canux.jpg';};?>
  <a target="_blank" href="<?php echo get_option('mytheme_footer_box4_link'); ?>" class="about_pic">
    <img src="<?php echo $footer_box4_pic;?>"  alt="<?php echo get_option('mytheme_footer_box4_title') ?>"/>
  </a>

</div>



<div id="footer_in_box" class="footer_in_box footer_linkss">
  <b>
    <font><?php if(get_option('mytheme_footer_box1_title')){echo get_option('mytheme_footer_box1_title2');}else{echo '联系我们';}; ?>
    </font>
  </b>
  <?php
  if(get_option('mytheme_footer_box1_text')){
      $contact_text= split("\n",get_option('mytheme_footer_box1_text'));
      for($i=0;$i<count($contact_text);$i++) {
          echo'<p class="contact_text_p">'.$contact_text[$i].'</p>';
      }
  }else{echo '<p class="contact_text_p">联系电话: +86-13681984515 </p><p class="contact_text_p">联系邮箱：canuxcheng@gmail.com</p><p class="contact_text_p"> 联系地址：上海市</p>';}
  ?>
</div>



<div id="footer_bottom_link" class="footer_in">
  <?php ob_start(); wp_nav_menu(array( 'theme_location'  => "footer-menu" ,'menu_class'=> 'footer_bottom_link','container' => false  ) ); ?>
  <p class="f_bq"> <?php  if($word_t2!=""){echo $word_t2;}else{echo '版权所有';}  ?> &copy;
    <?php echo date("Y"); echo " "; bloginfo('name');
    if($icp_b !=="") {echo ' |   <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">'.$icp_b.'</a>'; };
    if($gongan_b !=="") {echo ' |   <a class="gonganwangb" rel="nofollow" target="_blank" href="'.$gongan_b_link.'">'.$gongan_b.'</a>'; };
    ?>
  </p>
</div>


</div>


<div class="footer_bottom" <?php echo $footer_ds;?>>


</div>


</div>


<?php   get_template_part( 'kefu' );  wp_footer(); ?>

</html>
