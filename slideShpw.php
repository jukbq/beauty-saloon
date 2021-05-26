<php
function get_dir_files( $dir, $recursive = true, $include_folders = false ){
	if( ! is_dir($dir) )
		return array();

	$files = array();

	$dir = rtrim( $dir, '/\\' ); // удалим слэш на конце

	foreach( glob( "$dir/{,.}[!.,!..]*", GLOB_BRACE ) as $file ){

		if( is_dir( $file ) ){
			if( $include_folders )
				$files[] = $file;
			if( $recursive )
				$files = array_merge( $files, call_user_func( __FUNCTION__, $file, $recursive, $include_folders ) );
		}
		else
			$files[] = $file;
	}

	return $files;
}

$files = get_dir_files('/assets/img/slide_showe');

?>