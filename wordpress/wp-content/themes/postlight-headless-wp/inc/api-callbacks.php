<?php
/**
 * Register callbacks to WP API
 */

/**
 * Respond to a REST API request to get post data.
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function rest_get_post( WP_REST_Request $request ) {
    return rest_get_content( $request, 'post', __FUNCTION__ );
}

function rest_get_page( WP_REST_Request $request ) {
    return rest_get_content( $request, 'page', __FUNCTION__ );
}

function rest_get_company( WP_REST_Request $request ) {
    return rest_get_content( $request, 'company', __FUNCTION__ );
}
