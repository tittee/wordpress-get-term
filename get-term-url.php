<?php

// Get term by id (''term_id'') in Categories taxonomy.
$term_slug = get_query_var( 'TERM_SLUG' ); // EX : team_categoty, product_category, etc.
$term_taxonomy = get_query_var( 'taxonomy' );
$current_term = get_term_by( 'slug', $term_slug, $term_taxonomy );
echo $current_term;
