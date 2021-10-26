<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body style="background: #000;" id="body" <?php echo body_class(); ?>>
<header class="header" id="header">
        <div class="container">
              <div class=" header__row row">
                  <div class="col-2 logo__wrapper">
                      <a href="<?php echo get_home_url(); ?>">
                            <svg width="50" height="14" viewBox="0 0 50 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.578 11.2C6.758 11.2 6.848 11.29 6.848 11.47V12.73C6.848 12.91 6.758 13 6.578 13H0.638C0.47 13 0.386 12.91 0.386 12.73V0.669999C0.386 0.489999 0.47 0.399999 0.638 0.399999H2.132C2.312 0.399999 2.402 0.489999 2.402 0.669999V11.2H6.578ZM18.8471 11.362C17.5991 12.61 16.0751 13.234 14.2751 13.234C12.4751 13.234 10.9451 12.61 9.68511 11.362C8.43711 10.102 7.81311 8.566 7.81311 6.754C7.81311 4.93 8.43711 3.394 9.68511 2.146C10.9451 0.886 12.4751 0.256 14.2751 0.256C16.0751 0.256 17.5991 0.886 18.8471 2.146C20.1071 3.394 20.7371 4.93 20.7371 6.754C20.7371 8.566 20.1071 10.102 18.8471 11.362ZM11.1071 9.976C11.9591 10.828 13.0151 11.254 14.2751 11.254C15.5351 11.254 16.5851 10.828 17.4251 9.976C18.2651 9.112 18.6851 8.038 18.6851 6.754C18.6851 5.458 18.2651 4.384 17.4251 3.532C16.5851 2.668 15.5351 2.236 14.2751 2.236C13.0151 2.236 11.9591 2.668 11.1071 3.532C10.2671 4.384 9.84711 5.458 9.84711 6.754C9.84711 8.038 10.2671 9.112 11.1071 9.976ZM29.2877 13.234C27.4397 13.234 25.8917 12.616 24.6437 11.38C23.4077 10.132 22.7897 8.59 22.7897 6.754C22.7897 4.918 23.4077 3.376 24.6437 2.128C25.8917 0.88 27.4277 0.256 29.2517 0.256C30.9677 0.256 32.4077 0.838 33.5717 2.002C33.7037 2.122 33.7097 2.254 33.5897 2.398L32.6717 3.388C32.5637 3.52 32.4497 3.526 32.3297 3.406C31.4177 2.626 30.3917 2.236 29.2517 2.236C27.9917 2.236 26.9357 2.668 26.0837 3.532C25.2437 4.384 24.8237 5.458 24.8237 6.754C24.8237 8.05 25.2497 9.124 26.1017 9.976C26.9537 10.828 28.0337 11.254 29.3417 11.254C30.4697 11.254 31.3817 10.942 32.0777 10.318C32.7737 9.682 33.1337 8.884 33.1577 7.924H29.4137C29.2457 7.924 29.1617 7.84 29.1617 7.672V6.376C29.1617 6.208 29.2457 6.124 29.4137 6.124H34.8137C34.9937 6.124 35.0837 6.214 35.0837 6.394V7.276C35.0837 8.98 34.5557 10.402 33.4997 11.542C32.4557 12.67 31.0517 13.234 29.2877 13.234ZM47.9916 11.362C46.7436 12.61 45.2196 13.234 43.4196 13.234C41.6196 13.234 40.0896 12.61 38.8296 11.362C37.5816 10.102 36.9576 8.566 36.9576 6.754C36.9576 4.93 37.5816 3.394 38.8296 2.146C40.0896 0.886 41.6196 0.256 43.4196 0.256C45.2196 0.256 46.7436 0.886 47.9916 2.146C49.2516 3.394 49.8816 4.93 49.8816 6.754C49.8816 8.566 49.2516 10.102 47.9916 11.362ZM40.2516 9.976C41.1036 10.828 42.1596 11.254 43.4196 11.254C44.6796 11.254 45.7296 10.828 46.5696 9.976C47.4096 9.112 47.8296 8.038 47.8296 6.754C47.8296 5.458 47.4096 4.384 46.5696 3.532C45.7296 2.668 44.6796 2.236 43.4196 2.236C42.1596 2.236 41.1036 2.668 40.2516 3.532C39.4116 4.384 38.9916 5.458 38.9916 6.754C38.9916 8.038 39.4116 9.112 40.2516 9.976Z" fill="white"/>
                            </svg>
                        </a>                  
                  </div>
                  <div class="col-lg-auto header__menuWrapper">
                      <div class="header__menuInner">
                               <?php wp_nav_menu( [
                                    'theme_location'  => 'Main Menu',
                                    'menu'            => 'Header-main',
                                    'container'       => '',
                                    'container_class' => 'row',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => '',
                                ] );?>
                            </ul>
                      </div>
                  </div>
              <svg class="menu-toggle col-auto" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.4444 7.3999H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 1H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 13.8H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <svg class="menu-toggle-active col-auto" width="16" height="16" viewBox="0 0 16 16" fill="#000" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 1L1 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
    </header>