<?php
// Initialize Genesis
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Sassy Genesis Theme' );
define( 'CHILD_THEME_URL', 'http://www.thewebprincess.com/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

// Genesis
include_once( CHILD_DIR . '/includes/genesis.php' );				// Customizations to Genesis-specific functions


// Structure (corresponds to Genesis's lib/structure)
include_once( CHILD_DIR . '/includes/structure/footer.php' );
include_once( CHILD_DIR . '/includes/structure/header.php' );

// Shame
include_once( CHILD_DIR . '/includes/shame.php' );					// For new code snippets that haven't been sorted and commented yet