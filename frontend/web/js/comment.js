/**
 * Created by user on 24.10.2017.
 */
jQuery(document).on('click', '#comments .comment-reply', function () {
    var link = jQuery(this);
    var form = jQuery('#reply-block');
    var comment = link.closest('.comment-item');
    jQuery('#commentform-parentid').val(comment.data('id'));
    form.detach().appendTo(comment.find('.reply-block:first'));
    return false;
});