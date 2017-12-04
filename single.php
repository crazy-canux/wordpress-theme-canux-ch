<?php get_header();
  $id =get_the_ID();
  $bbs_mo =get_option('mytheme_bbs_mo');
  if($bbs_mo&&get_post_meta($id,"bbs_shoppingbox", true) ){get_template_part('single-full') ;}else{
  get_template_part( 'page_single/top' );
  $word_t51=get_option('mytheme_word_t51');$word_t52=get_option('mytheme_word_t52');
?>

<?php $left_right =get_option('mytheme_left_right');
  if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
?>

<div id="content" class="singlep">



<div class="right_mian"  <?php if($left_right){echo 'style="float: left;"';}?> >

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<div class="enter <?php echo get_option('mytheme_enter_p');  ?>"> <?php the_content(); ?>

<?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>


</div>





<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>




</div>

</div>
<?php }get_footer();?>
