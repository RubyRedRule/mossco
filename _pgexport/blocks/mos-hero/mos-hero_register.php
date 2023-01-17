<?php

        PG_Blocks::register_block_type( array(
            'name' => 'mossco-pine/mos-hero',
            'title' => __( 'Top Hero Section', 'mossco_pine' ),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M22 10v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V10h20zm-1-7a1 1 0 0 1 1 1v4H2V4a1 1 0 0 1 1-1h18z"/></svg>',
            'category' => 'mossco_theme_blocks',
            'render_template' => 'blocks/mos-hero/mos-hero.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/mos-hero/mos-hero.js',
            'attributes' => array(
                'hero_bg_image' => array(
                    'type' => 'object',
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null)
                ),
                'hero_h1' => array(
                    'type' => 'text',
                    'default' => 'bar | kitchen | terrace'
                ),
                'hero_h2' => array(
                    'type' => 'text',
                    'default' => 'FOOD &amp; DRINK WITH STYLE'
                ),
                'button_hero_link' => array(
                    'type' => 'object',
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                ),
                'button_text' => array(
                    'type' => 'text',
                    'default' => 'View Menu'
                ),
                'button_bg' => array(
                    'type' => 'text',
                    'default' => ''
                )
            ),
            'example' => array(
'hero_bg_image' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '', 'alt' => null), 'hero_h1' => 'bar | kitchen | terrace', 'hero_h2' => 'FOOD &amp; DRINK WITH STYLE', 'button_hero_link' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => ''), 'button_text' => 'View Menu', 'button_bg' => ''
            ),
            'dynamic' => true,
            'version' => '1.0.134'
        ) );
