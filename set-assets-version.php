<?php
 
if ( ! function_exists( 'dxset_assets_version' ) ) :
function dxset_assets_version() {
    
    // Iterate through all assets and store the most recent date of modifying
    $dir = new DirectoryIterator( get_template_directory() . '/assets/dist/' );
    $version_date = 0;
    foreach ($dir as $asset_dir) {
        if( $asset_dir->isDot() ) {
            foreach( $asset_dir as $file ) { 
                if ( !$file->isDot() ) { 
                    $file_timestamp = strtotime( date( "YmdHis", filemtime( $file->getPathname() ) ) );
                    if( $file_timestamp > $version_date ) {
                        $version_date = $file_timestamp;
                    }
                }
            }
        }
    }
    unset( $file );
    
    // This is the version we will check against ( and maybe use )
    $version_date = date( "YmdHis", $version_date );

    // Regex searching through the theme-version.php
    $rgx_pattern = "/define\( 'DX_ASSETS_VERSION', '*(.*?)' \);/";
    $ver_file = file_get_contents( get_template_directory() . '/inc/theme-version.php' );

    if( preg_match( $rgx_pattern, $ver_file, $matches ) ) {
        $stored_date_ver = explode( '-', $matches[1] );
        // This checks the stored date vs the most recent asset modification date
        if( strtotime( $stored_date_ver[0] ) < strtotime( $version_date ) ) {
            $stored_date_ver[0] = $version_date;
            $stored_date_ver[1]++;
            // And if the version should be changed the bellow code makes the correct format and re-writes theme-version.php
            $new_ver_str = "define( 'DX_ASSETS_VERSION', '" . $stored_date_ver[0]  . '-' . $stored_date_ver[1] . "' );";
            if( $out_file = preg_replace( $rgx_pattern, $new_ver_str, $ver_file) ) {
                if( is_writable( get_template_directory() . '/inc/theme-version.php' ) ) { 
                    $file_write_rv = file_put_contents(  get_template_directory() . '/inc/theme-version.php', $out_file );
                } else {
                    if( defined( 'WP_DEBUG' ) ) {
                        die( "/inc/theme-version.php is not writable, couldn't update version" );
                    }
                }
            }
        }

    } else {
        if( defined( 'WP_DEBUG' ) ) {
            die(  "Couldn't find expression match in /inc/theme-version.php" );
        }
    }

}
endif;
