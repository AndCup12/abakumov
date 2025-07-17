


<?php
/**
 * Display WordPress pages in hierarchical tree structure
 */
function display_wp_pages_hierarchically() {
    // Get all top-level pages
    $top_level_pages = get_pages(array(
        'parent' => 0,
        'sort_column' => 'menu_order'
    ));

    if ($top_level_pages) {
        echo '<ul class="page-tree">';

        foreach ($top_level_pages as $page) {
            display_page_with_children($page);
        }

        echo '</ul>';
    }
}

/**
 * Recursive function to display page with its children
 */
function display_page_with_children($page) {
    ?>
    <li class="page-item">
        <a href="<?php echo get_permalink($page->ID); ?>">
            <?php echo esc_html($page->post_title); ?>
        </a>

        <?php
        // Check if this page has children
        $children = get_pages(array(
            'parent' => $page->ID,
            'sort_column' => 'menu_order'
        ));

        if ($children) {
            echo '<ul class="children">';
            foreach ($children as $child) {
                display_page_with_children($child);
            }
            echo '</ul>';
        }
        ?>
    </li>
    <?php
}

// Call the function to display the page hierarchy
display_wp_pages_hierarchically();
?>


