<?php
function mytheme_footer_options($wp_customize){
		$wp_customize->add_section('mytheme_footer_options', array(
        'title'    => __('网站底部设置', 'mytheme'),
        'description' => '设置您的网站底部的样式和内容</br>  <a href="http://www.canuxcheng.com" target="_blank">Canux Company.</a>  </br>',
        'priority' => 80,
    ));



  $wp_customize->add_setting('mytheme_fengexian', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_fengexian_Control($wp_customize, 'mytheme_fengexian', array(
         'label'      => __('分隔线', 'mytheme_searchkey'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_fengexian',

      )));



  $wp_customize->add_setting('mytheme_footer_box2_pic', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_box2_pic', array(
        'label'    => __('模块1logo上传', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_box2_pic',
		'description' => '上传底部第一个模块logo图片',
     )
    ));


   $wp_customize->add_setting('mytheme_footer_box2_text', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'mytheme_footer_box2_text', array(
         'label'      => __('模块1文字信息', 'mytheme_footer_box2_text'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_footer_box2_text',
   'description' => '填写<br>可以空行',
      )));




  $wp_customize->add_setting('mytheme_fengexian2', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_fengexian_Control($wp_customize, 'mytheme_fengexian2', array(
         'label'      => __('分隔线', 'mytheme_searchkey'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_fengexian2',

      )));




/*
$wp_customize->add_setting('mytheme_footer_box3_title', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_footer_box3_title', array(
        'label'      => __('从社交媒体上关注我们', 'mytheme_footer_box3_title'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_footer_box3_title',
		 'description' => '选项不填写则整个模块不会显示',
    ));
 */



/*
$wp_customize->add_setting('mytheme_footer_box3_title2', array(
        'default'        => 'follow us From at social media',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_footer_box3_title2', array(
        'label'      => __(' ', 'mytheme_footer_box3_title2'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_footer_box3_title2',
		 'description' => '选项不填写则整个模块不会显示',
    ));



$wp_customize->add_setting('mytheme_footer_box3_link', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_footer_box3_link', array(
        'label'      => __('底部第2个模块的链接', 'mytheme_footer_box3_link'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_footer_box3_link',
		 'description' => '填写链接',
    ));
*/



  $wp_customize->add_setting('mytheme_footer_box3_pic', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_box3_pic', array(
        'label'    => __('模块2图片上传', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_box3_pic',
		'description' => '上传一个正方形的图片，最合适的尺寸是120*120',
     )
    ));

/*
   $wp_customize->add_setting('mytheme_footer_box3_text', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'mytheme_footer_box3_text', array(
         'label'      => __('模块2文字信息', 'mytheme_footer_box3_text'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_footer_box3_text',
   'description' => '填写<br>可以空行,社交媒体的设置请转向外观--主题选项设置',
      )));
*/



/*
$wp_customize->add_setting('mytheme_footer_box4_link', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_footer_box4_link', array(
        'label'      => __('底部第2个模块的链接', 'mytheme_footer_box4_link'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_footer_box4_link',
		 'description' => '填写链接',
    ));
 */



  $wp_customize->add_setting('mytheme_footer_box4_pic', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_box4_pic', array(
        'label'    => __('模块3图片上传', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_box4_pic',
		'description' => '上传一个正方形的图片，最合适的尺寸是120*120',
     )
    ));




/*
$wp_customize->add_setting('mytheme_Socialmedia1', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_Socialmedia1', array(
        'label'    => __('社交媒体图标1', 'mytheme_Socialmedia1'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_Socialmedia1',
		'description' => '尺寸30x30',
     )
    ));


  $wp_customize->add_setting('mytheme_Socialmedia_link1', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_Socialmedia_link1', array(
        'label'      => __('社交媒体图标链接1', 'mytheme_Socialmedia_link1'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_Socialmedia_link1',
		 'description' => '填写链接',
    ));




	$wp_customize->add_setting('mytheme_Socialmedia2', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_Socialmedia2', array(
        'label'    => __('社交媒体图标2', 'mytheme_Socialmedia2'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_Socialmedia2',
		'description' => '尺寸30x30',
     )
    ));


  $wp_customize->add_setting('mytheme_Socialmedia_link2', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_Socialmedia_link2', array(
        'label'      => __('社交媒体图标链接2', 'mytheme_Socialmedia_link2'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_Socialmedia_link2',
		 'description' => '填写链接',
    ));



  $wp_customize->add_setting('mytheme_Socialmedia3', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_Socialmedia3', array(
        'label'    => __('社交媒体图标3', 'mytheme_Socialmedia3'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_Socialmedia3',
		'description' => '尺寸30x30',
     )
    ));


  $wp_customize->add_setting('mytheme_Socialmedia_link3', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_Socialmedia_link3', array(
        'label'      => __('社交媒体图标链接3', 'mytheme_Socialmedia_link3'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_Socialmedia_link3',
		 'description' => '填写链接',
    ));




$wp_customize->add_setting('mytheme_Socialmedia4', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_Socialmedia4', array(
        'label'    => __('社交媒体图标4', 'mytheme_Socialmedia4'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_Socialmedia4',
		'description' => '尺寸30x30',
     )
    ));


  $wp_customize->add_setting('mytheme_Socialmedia_link4', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_Socialmedia_link4', array(
        'label'      => __('社交媒体图标链接4', 'mytheme_Socialmedia_link4'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_Socialmedia_link4',
		 'description' => '填写链接',
    ));
*/





  $wp_customize->add_setting('mytheme_fengexian2', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_fengexian_Control($wp_customize, 'mytheme_fengexian2', array(
         'label'      => __('分隔线', 'mytheme_searchkey'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_fengexian2',

      )));



$wp_customize->add_setting('mytheme_footer_box1_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_footer_box1_title', array(
        'label'      => __('联系我们', 'mytheme_footer_box1_title'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_footer_box1_title',
		 'description' => '选项不填写则整个模块不会显示（这个模块调用的是”底部单层菜单“，请在上面的菜单选项选好菜单如果没有对应的请去外观--菜单中建立好一个菜单再选择）',
    ));

/*
$wp_customize->add_setting('mytheme_footer_box1_title2', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mytheme_footer_box1_title2', array(
        'label'      => __('contact us', 'mytheme_footer_box1_title2'),
        'section'    => 'mytheme_footer_options',
        'settings'   => 'mytheme_footer_box1_title2',

    ));
*/

 $wp_customize->add_setting('mytheme_footer_box1_text', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'mytheme_footer_box1_text', array(
         'label'      => __('联系信息', 'mytheme_footer_box1_text'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_footer_box1_text',
   'description' => '一行一个信息，每一行都会自带一个小图标',
      )));



  $wp_customize->add_setting('mytheme_fengexian2', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_fengexian_Control($wp_customize, 'mytheme_fengexian2', array(
         'label'      => __('分隔线', 'mytheme_searchkey'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_fengexian2',

      )));


/*
 $wp_customize->add_setting('mytheme_footer_sm_text', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'mytheme_footer_sm_text', array(
         'label'      => __('底部声明文字', 'mytheme_footer_box1_text'),
         'section'    => 'mytheme_footer_options',
         'settings'   => 'mytheme_footer_sm_text',

      )));
 */





  $wp_customize->add_setting('mytheme_footer_b', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_b', array(
        'label'    => __('底部（上）背景图片上传，尺寸高度221px的图片横向重复', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_b',
     )
    ));



	  $wp_customize->add_setting('mytheme_footer_d', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_footer_d', array(
        'label'    => __('底部（下）背景图片上传，尺寸高度73px的图片横向重复', 'mytheme_footer_b'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_d',
     )
    ));




 $wp_customize->add_setting('mytheme_footer_white', array(
	    'default'        => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_footer_white', array(
        'label'    => __('底部所有白色字体', 'extraordinaryvision'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_white',
    )));



/*
$wp_customize->add_setting('mytheme_footer_grel', array(
	    'default'        => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_footer_grel', array(
        'label'    => __('底部声明白色字体', 'extraordinaryvision'),
        'section'  => 'mytheme_footer_options',
        'settings' => 'mytheme_footer_grel',
    )));
 */



};
add_action('customize_register', 'mytheme_footer_options');
?>
