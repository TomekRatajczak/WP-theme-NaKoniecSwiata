<?php 

    add_action('init', 'nakoniecswiata_init_posttypes');
    
    function nakoniecswiata_init_posttypes(){
        
        
        /* Register Offers Post Type */
        $offers_args = array(
            'labels' => array(
                'name' => 'Oferta',
                'singular_name' => 'Oferta',
                'all_items' => 'Wszystkie kierunki',
                'add_new' => 'Dodaj nowy kierunek',
                'add_new_item' => 'Dodaj nowy kierunek',
                'edit_item' => 'Edytuj kierunek',
                'new_item' => 'Nowy kierunek',
                'view_item' => 'Zobacz kierunek',
                'search_items' => 'Szukaj w kierunkach',
                'not_found' =>  'Nie znaleziono żadnych kierunków',
                'not_found_in_trash' => 'Nie znaleziono żadnych kierunków w koszu', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true,
            'menu_icon'   => 'dashicons-palmtree',            
        );
        
        register_post_type('offers', $offers_args);
        
    }
    
    add_action('init', 'nakoniecswiata_init_taxonomies');
    
    /* Register Direction Taxonomy */
    
    function nakoniecswiata_init_taxonomies(){
        register_taxonomy(
            'directions',
            array('offers'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Kierunki',
                    'singular_name' => 'Kierunki',
                    'search_items' =>  'Wyszukaj lokalizacje',
                    'popular_items' => 'Najpopularniejsze lokalizacje',
                    'all_items' => 'Wszystkie lokalizacje',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj lokalizacje', 
                    'update_item' => 'Aktualizuj lokalizacje',
                    'add_new_item' => 'Dodaj nową lokalizacje',
                    'new_item_name' => 'Nazwa nowej lokalizacji',
                    'separate_items_with_commas' => 'Oddziel lokalizacje przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń lokalizacje',
                    'choose_from_most_used' => 'Wybierz spośród najczęścież używanych lokalizacji',
                    'menu_name' => 'Kierunki',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'directions' )
        ));
    }