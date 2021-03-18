<?php 
/**
 * Get images from Filebird folders and display them using fancybox js library
 * 
 */


 /**
  * Receive folder name from ACF field and return all images with the same folder name
  */
function display_images_from_folder($folder_name) {
    
    // GET all folders data
    $folders = getApiData('all');
    $folder_id = 0;

    // Select folder which match $folder_name
    foreach ($folders as $folder) {
        if ($folder['text'] == $folder_name) {
            $folder_id = $folder['id'];
        }
    }

    // GET all images id in folder
    $img_ids = getApiData('folder', $folder_id);
    $images_html = '';

    // Build HTML output
    foreach ($img_ids as $id) {
       $images_html .=
        '<a href="'. wp_get_attachment_image_src($id, 'large')[0] . '" data-fancybox="gallery" data-caption="Caption for single image">
	        <img src="' . wp_get_attachment_image_src($id)[0] . '" alt="" />
        </a>';
    }

    return $images_html;
}

/**
 * Get data from Filebird API
 * 
 *  API - documentation https://ninjateam.gitbook.io/filebird/api
 */
function getApiData($call_type, $id = 0) {

    // Define request url
    if ( $call_type == 'all' ) {
        $request_url = get_home_url() . '/wp-json/filebird/public/v1/folders';
    } else if ( $call_type == 'folder') {
        $request_url = get_home_url() . '/wp-json/filebird/public/v1/attachment-id/?folder_id=' . $id;
    } else {
        return;
    }

    // GET request to API
    $response = wp_remote_retrieve_body( wp_safe_remote_get( 
        $request_url, 
        array(
            'headers'     => array(
                'Content-Type' => 'application/json; charset=utf-8',
                'Authorization' => 'Bearer ' . API_KEY_FILEBIRD,
            ),
        ),
    ));

    $response = json_decode($response, true);
    
    // Return data based on $call_type parameter
    if ( $call_type == 'all' ) {
        return  $response['data']['folders'];
    } else if ( $call_type == 'folder') {
        return array_reverse($response['data']['attachment_ids']);
    }
}
