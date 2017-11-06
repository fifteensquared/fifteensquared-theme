<?php

    class My_Banana_Widget extends WP_Widget {

        public function __construct() {
            $widget_ops = array( 
                'classname' => 'my_banana_widget',
                'description' => 'A simple banana widget',
            );
            parent::__construct( 'my_banana_widget', 'Banana Widget', $widget_ops );
        }

        public function widget( $args, $instance ) {
            //echo '<h1>bananas</h1>';
            ?>
                <li><h1>Bananas<h1></li>
            <?php 
        }
    }

    class Widget_Andreas09_Search extends WP_Widget {
    
        public function __construct() {
            parent::__construct( 'widget_andreas09_search', 'Andreas Search', array('description' => 'Search') );
        }
    
        public function widget( $args, $instance ) {
            ?>
                <li><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
            <?php
        }
    }

    class Widget_Andreas09_Subscribe extends WP_Widget {
        
        public function __construct() {
            parent::__construct( 'widget_andreas09_subscribe', 'RSS Subscribe', array('description' => 'RSS Subscribe') );
        }
    
        public function widget( $args, $instance ) {
            ?>
            <li><h2><?php _e('Subscribe','andreas09'); ?></h2>
                <ul>
                    <li class="feed"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','andreas09'); ?></a></li>
                    <li class="feed"><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','andreas09'); ?></a></li>
                </ul>
            </li>
            <?php
        }
    }
    
    class Widget_Andreas09_Meta extends WP_Widget {
        
        public function __construct() {
            parent::__construct( 'widget_andreas09_meta', 'Meta', array('description' => 'Login and Admin links') );
        }
    
        public function widget( $args, $instance ) {
            ?>
            <li><h2><?php _e('Meta','andreas09'); ?></h2>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </li>
            <?php
        }
    }

    class Widget_Andreas09_Recent_Posts extends WP_Widget {
        
        public function __construct() {
            parent::__construct( 'widget_andreas09_recent_posts', 'Recent Posts', array('description' => 'display a list of recent posts') );
        }
    
        public function widget( $args, $instance ) {
            ?>
            <li id="recent-posts"><h2><?php _e('Recent Posts','andreas09'); ?></h2>
                <ul>
                    <?php wp_get_archives('type=postbypost&limit=25'); ?>
                </ul>
            </li>
            <?php
        }
    }

?>