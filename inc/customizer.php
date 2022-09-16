<?php
/**
 * markrahimi Theme Customizer
 *
 * @package markrahimi
 */
function markrahimi_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'markrahimi_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'markrahimi_customize_partial_blogdescription',
			)
		);
	}
	
	  $wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'markrahimi_customize_register' );

function markrahimi_customize_partial_blogname() {
	bloginfo( 'name' );
}
function markrahimi_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function markrahimi_customize_preview_js() {
	wp_enqueue_script( 'markrahimi-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'markrahimi_customize_preview_js' );


add_action( 'customize_register', 'bd_customizer' );
function bd_customizer( $wp_customize ) {

    //  =============================
    //  = main page setting
    //  =============================

	$wp_customize->add_panel( 'theme_setting', array(
		'title' => 'مدیریت قالب',
	) );
	
	
    //  =============================
    //  = service
    //  =============================
	
  $wp_customize->add_section( 'service', array(
    'title' => 'سرویس ها',
	 'panel'  => 'theme_setting',
  ) );
	

    //  =============================
    //  = service_title
    //  =============================
    //  
  $wp_customize->add_setting( 'service_title');
  $wp_customize->add_control(
	'service_title',
	array(
      'label'    => __( 'عنوان بخش سرویس', 'markrahimi' ),
      'section'  => 'service',
      'settings' => 'service_title'
    )
 );
	

    //  =============================
    //  = service_subtitle
    //  =============================
    //  
     $wp_customize->add_setting( 'service_subtitle');
	  $wp_customize->add_control(
		'service_subtitle',
		array(
		  'label'      => __( 'عنوان دوم بخش سرویس', 'markrahimi' ),
		  'section'  => 'service',
		  'settings' => 'service_subtitle',
		)
	 );
	
	
	
    //  =============================
    //  = service_description
    //  =============================
    //  
     $wp_customize->add_setting( 'service_description');
	 $wp_customize->add_control(
		'service_description',
		array(
		  'label'      => __( ' توضیحات بخش سرویس', 'markrahimi' ),
		  'section'  => 'service',
		  'settings' => 'service_description',
		  'type' =>   'textarea',
		)
	 );
	
		
    //  =============================
    //  = service_btn
    //  =============================
    //  
     $wp_customize->add_setting( 'service_btn');
	 $wp_customize->add_control(
		'service_btn',
		array(
		  'label'      => __( ' متن کلید بخش سرویس', 'markrahimi' ),
		  'section'  => 'service',
		  'settings' => 'service_btn',
		)
	 );
		
    //  =============================
    //  = service_more_link
    //  =============================
    //  
     $wp_customize->add_setting( 'service_more_link');
	 $wp_customize->add_control(
		'service_more_link',
		array(
		  'label'      => __( ' لینک کلید بخش سرویس', 'markrahimi' ),
		  'section'  => 'service',
		  'settings' => 'service_more_link',
		  'type' =>   'url',
		)
	 );
	
	
		
    //  =============================
    //  = portfolio
    //  =============================
	
  $wp_customize->add_section( 'portfolio', array(
    'title' => 'نمونه کار های صفحه اصلی',
	 'panel'  => 'theme_setting',
  ) );

	
	
		
	 //  =============================
    //  = portfolio home
    //  =============================
	
	$portfolio_list = array();
	$args = array('post_type' => 'portfolio','posts_per_page' => '20',);
	$all_portfolio = get_posts( $args ); 
	foreach($all_portfolio as $portfolio) {
		$portfolio_list[$portfolio->ID] = $portfolio->post_title;
	}

	$wp_customize->add_setting( 'portfolio1', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio1', array(
		'label'    => esc_html__( 'نمونه کار باکس اول', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
	$wp_customize->add_setting( 'portfolio2', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio2', array(
		'label'    => esc_html__( 'نمونه کار باکس دوم', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
	
	$wp_customize->add_setting( 'portfolio3', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio3', array(
		'label'    => esc_html__( 'نمونه کار باکس سوم', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
	
	$wp_customize->add_setting( 'portfolio4', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio4', array(
		'label'    => esc_html__( 'نمونه کار باکس چهارم', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
	
	$wp_customize->add_setting( 'portfolio5', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio5', array(
		'label'    => esc_html__( 'نمونه کار باکس پنجم', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
	
	
	$wp_customize->add_setting( 'portfolio6', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio6', array(
		'label'    => esc_html__( 'نمونه کار باکس ششم', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
	
	$wp_customize->add_setting( 'portfolio7', array(
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'portfolio7', array(
		'label'    => esc_html__( 'نمونه کار باکس هفتم', 'markrahimi' ),
		'type'     => 'select',
		'section'  => 'portfolio',
		'choices'  => $portfolio_list,
	));
	
	
		
	 //  =============================
    //  = blog
    //  =============================
	
  $wp_customize->add_section( 'blog', array(
    'title' => 'وبلاگ',
	 'panel'  => 'theme_setting',
  ) );
	

    //  =============================
    //  = blog_title
    //  =============================
    //  
  $wp_customize->add_setting( 'blog_title');
  $wp_customize->add_control(
	'blog_title',
	array(
      'label'    => __( 'عنوان بخش وبلاگ', 'markrahimi' ),
      'section'  => 'blog',
      'settings' => 'blog_title'
    )
 );
	

    //  =============================
    //  = blog_subtitle
    //  =============================
    //  
     $wp_customize->add_setting( 'blog_subtitle');
	  $wp_customize->add_control(
		'blog_subtitle',
		array(
		  'label'      => __( 'عنوان دوم بخش وبلاگ', 'markrahimi' ),
		  'section'  => 'blog',
		  'settings' => 'blog_subtitle',
		)
	 );
	
	
	
		
	 //  =============================
    //  = counter
    //  =============================
	
  $wp_customize->add_section( 'counter', array(
    'title' => 'شمارنده',
	 'panel'  => 'theme_setting',
  ) );
	

    //  =============================
    //  = counter_title1
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_title1');
  $wp_customize->add_control(
	'counter_title1',
	array(
      'label'    => __( 'عنوان باکس اول شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_title1'
    )
 );
	
    //  =============================
    //  = counter_icon1
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_icon1');
  $wp_customize->add_control(
	'counter_icon1',
	array(
      'label'    => __( 'آیکون باکس اول شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_icon1',
	  'description' => 'از آیکون های سایت fontawesome کلاس آیکون قرار داده شود',
    )
 );
		
    //  =============================
    //  = counter_count1
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_count1');
  $wp_customize->add_control(
	'counter_count1',
	array(
      'label'    => __( 'عدد باکس اول شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_count1',
    )
 );
	
    //  =============================
    //  = counter_title2
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_title2');
  $wp_customize->add_control(
	'counter_title2',
	array(
      'label'    => __( 'عنوان باکس دوم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_title2'
    )
 );
	
    //  =============================
    //  = counter_icon2
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_icon2');
  $wp_customize->add_control(
	'counter_icon2',
	array(
      'label'    => __( 'آیکون باکس دوم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_icon2',
	  'description' => 'از آیکون های سایت fontawesome کلاس آیکون قرار داده شود',
    )
 );
		
    //  =============================
    //  = counter_count2
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_count2');
  $wp_customize->add_control(
	'counter_count2',
	array(
      'label'    => __( 'عدد باکس دوم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_count2',
    )
 );
	
    //  =============================
    //  = counter_title3
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_title3');
  $wp_customize->add_control(
	'counter_title3',
	array(
      'label'    => __( 'عنوان باکس سوم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_title3'
    )
 );
	
    //  =============================
    //  = counter_icon3
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_icon3');
  $wp_customize->add_control(
	'counter_icon3',
	array(
      'label'    => __( 'آیکون باکس سوم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_icon3',
	  'description' => 'از آیکون های سایت fontawesome کلاس آیکون قرار داده شود',
    )
 );
	
	
    //  =============================
    //  = counter_count3
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_count3');
  $wp_customize->add_control(
	'counter_count3',
	array(
      'label'    => __( 'عدد باکس سوم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_count3',
    )
 );
	
	
		
    //  =============================
    //  = counter_title4
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_title4');
  $wp_customize->add_control(
	'counter_title4',
	array(
      'label'    => __( 'عنوان باکس چهارم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_title4'
    )
 );
	
    //  =============================
    //  = counter_icon4
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_icon4');
  $wp_customize->add_control(
	'counter_icon4',
	array(
      'label'    => __( 'آیکون باکس چهارم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_icon4',
	  'description' => 'از آیکون های سایت fontawesome کلاس آیکون قرار داده شود',
    )
 );
	
	
	
    //  =============================
    //  = counter_count4
    //  =============================
    //  
  $wp_customize->add_setting( 'counter_count4');
  $wp_customize->add_control(
	'counter_count4',
	array(
      'label'    => __( 'عدد باکس چهارم شمارنده', 'markrahimi' ),
      'section'  => 'counter',
      'settings' => 'counter_count4',
    )
 );
	
	
	
	
	 //  =============================
    //  = podcast
    //  =============================
	
  $wp_customize->add_section( 'podcast', array(
    'title' => 'پادکست',
	 'panel'  => 'theme_setting',
  ) );
		
	
	
	 //  =============================
    //  = podcast_logo
    //  =============================
  $wp_customize->add_setting( 'podcast_logo' );
  $wp_customize->add_control( new WP_Customize_Upload_Control(
    $wp_customize,
	'podcast_logo',
	array(
      'label'    => 'عکس بخش پادکست',
      'section'  => 'podcast',
      'settings' => 'podcast_logo'
    )
  ) );
	

    //  =============================
    //  = podcast_title
    //  =============================
    //  
  $wp_customize->add_setting( 'podcast_title');
  $wp_customize->add_control(
	'podcast_title',
	array(
      'label'    => __( 'عنوان بخش پادکست', 'markrahimi' ),
      'section'  => 'podcast',
      'settings' => 'podcast_title'
    )
 );
	

    //  =============================
    //  = podcast_subtitle
    //  =============================
    //  
     $wp_customize->add_setting( 'podcast_subtitle');
	  $wp_customize->add_control(
		'podcast_subtitle',
		array(
		  'label'      => __( 'عنوان دوم بخش پادکست', 'markrahimi' ),
		  'section'  => 'podcast',
		  'settings' => 'podcast_subtitle',
		)
	 );
	
	
	

    //  =============================
    //  = podcast_des
    //  =============================
    //  
     $wp_customize->add_setting( 'podcast_des');
	  $wp_customize->add_control(
		'podcast_des',
		array(
		  'label'      => __( 'توضیح بخش پادکست', 'markrahimi' ),
		  'section'  => 'podcast',
		  'settings' => 'podcast_des',
		)
	 );
	
	
	
	
    //  =============================
    //  = podcast_btn
    //  =============================
    //  
     $wp_customize->add_setting( 'podcast_btn');
	 $wp_customize->add_control(
		'podcast_btn',
		array(
		  'label'      => __( ' متن کلید بخش پادکست', 'markrahimi' ),
		  'section'  => 'podcast',
		  'settings' => 'podcast_btn',
		)
	 );
		
    //  =============================
    //  = podcast_more_link
    //  =============================
    //  
     $wp_customize->add_setting( 'podcast_more_link');
	 $wp_customize->add_control(
		'podcast_more_link',
		array(
		  'label'      => __( ' لینک کلید بخش پادکست', 'markrahimi' ),
		  'section'  => 'podcast',
		  'settings' => 'podcast_more_link',
		  'type' =>   'url',
		)
	 );
	
		

	//  =============================
	//  =   social
	//  =============================
	
  $wp_customize->add_section( 'social', array(
    'title' => 'شبکه های اجتماعی',
	 'panel'  => 'theme_setting',
  ) );
	

	//  =============================
	//  = phone
	//  =============================
	//  
  $wp_customize->add_setting( 'phone');
	  $wp_customize->add_control(
		'phone',
		array(
		  'label'    => __( 'شماره تماس', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'phone'
		)
	 );
	
	
	//  =============================
	//  = phone
	//  =============================
	//  
  $wp_customize->add_setting( 'mail');
	  $wp_customize->add_control(
		'mail',
		array(
		  'label'    => __( 'ایمیل', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'mail'
		)
	 );
	
	
	//  =============================
	//  = instagram
	//  =============================
	//  
  $wp_customize->add_setting( 'instagram');
	  $wp_customize->add_control(
		'instagram',
		array(
		  'label'    => __( 'اینستاگرام', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'instagram'
		)
	 );
	
	
	//  =============================
	//  = facebook
	//  =============================
	//  
  $wp_customize->add_setting( 'facebook');
	  $wp_customize->add_control(
		'facebook',
		array(
		  'label'    => __( 'فیسبوک', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'facebook'
		)
	 );
	
	
	//  =============================
	//  = twitter
	//  =============================
	//  
  $wp_customize->add_setting( 'twitter');
	  $wp_customize->add_control(
		'twitter',
		array(
		  'label'    => __( 'تویتر', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'twitter'
		)
	 );
	
	
	//  =============================
	//  = github
	//  =============================
	//  
  $wp_customize->add_setting( 'github');
	  $wp_customize->add_control(
		'github',
		array(
		  'label'    => __( 'گیت هاب', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'github'
		)
	 );
	
		
	//  =============================
	//  = telegram
	//  =============================
	//  
  $wp_customize->add_setting( 'telegram');
	  $wp_customize->add_control(
		'telegram',
		array(
		  'label'    => __( 'تلگرام', 'markrahimi' ),
		  'section'  => 'social',
		  'settings' => 'telegram'
		)
	 );
	
	
	
	
	
	//  =============================
	//  =   resume
	//  =============================
	
  $wp_customize->add_section( 'resume', array(
     'title' => 'رزومه',
	 'panel'  => 'theme_setting',
  ) );
	

	//  =============================
	//  = resume_link
	//  =============================
	//  
  $wp_customize->add_setting( 'resume_link');
	  $wp_customize->add_control(
		'resume_link',
		array(
		  'label'    => __( 'لینک رزومه', 'markrahimi' ),
		  'section'  => 'resume',
		  'settings' => 'resume_link',
		)
	 );
	

	
	
	
	//  =============================
	//  =   copyright
	//  =============================
	
  $wp_customize->add_section( 'copyright', array(
     'title' => 'متن کپی رایت',
	 'panel'  => 'theme_setting',
  ) );
	

	//  =============================
	//  = text_copyright
	//  =============================
	//  
  $wp_customize->add_setting( 'text_copyright');
	  $wp_customize->add_control(
		'text_copyright',
		array(
		  'label'    => __( 'متن کپی رایت', 'markrahimi' ),
		  'section'  => 'copyright',
		  'settings' => 'text_copyright'
		)
	 );
	
	
	
	
	//  =============================
	//  =   scripts
	//  =============================
	
  $wp_customize->add_section( 'scripts', array(
     'title' => 'اسکریپت اضافه',
	 'panel'  => 'theme_setting',
  ) );
	

	//  =============================
	//  = scripts_txt
	//  =============================
	//  
  $wp_customize->add_setting( 'scripts_txt');
	  $wp_customize->add_control(
		'scripts_txt',
		array(
		  'label'    => __( 'اسکریپت اضافه', 'markrahimi' ),
		  'section'  => 'scripts',
		  'settings' => 'scripts_txt',
		   'type' => 'textarea',
		)
	 );
	
	
	}

