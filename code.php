function notifyauthor($post_id) {
 
$post = get_post($post_id);
$author = get_userdata($post->post_author);
$subject = "Post Published: ".$post->post_title."";
 
$message = "
Hi ".$author->display_name.",

Your post, \"".$post->post_title."\" Your post has been added successfully. You check your post in your dashboard.
       
View post: ".get_permalink( $post_id )."
     
Thank You for support Badho Bharat"
      ;
wp_mail($author->user_email, $subject, $message);
}
add_action('publish_post', 'notifyauthor');
