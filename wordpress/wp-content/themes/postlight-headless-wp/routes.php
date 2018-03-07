<?php /* Template Name: Routes */

global $wp_rewrite;
echo '<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
';
echo '<div class="container" style="margin-top: 40px"><pre><code>';
    print_r($wp_rewrite->rules);
echo '</code></pre></div>';