// hide update metabox from publish post

function hide_metabox_update(){
        $my_post_type = 'article';
        global $post;
        if($post->post_type == $my_post_type){
            if ( get_post_status ( $ID ) == 'publish' &&  !current_user_can('manage_options') ) {
               remove_meta_box( 'submitdiv', 'article', 'side' );
            }           
        }
}
add_action('admin_head-post.php', 'hide_metabox_update');
add_action('admin_head-post-new.php', 'hide_metabox_update');
