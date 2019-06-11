<?php
if (!defined('ABSPATH')) {
    exit();
}
?>
<style>
    p.wpd-desc, .wc_available_variable {
        font-size: 13px;
        color: #666666;
        width: 80%;
        padding: 0px;
        margin: 0px;
        line-height: 18px;
    }
</style>
<div>
    <h2 style="padding:5px 10px 10px 10px; margin:0px;"><?php _e('Email Template Phrases', 'wpdiscuz'); ?></h2>
    <table class="wp-list-table widefat plugins"  style="margin-top:10px; border:none;">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <h4><?php _e('Subscription type: Post comments', 'wpdiscuz'); ?></h4>
                    <label for="wc_email_subject"><?php _e('Post comment notification subject', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                    </div>
                </th>
                <td colspan="3"><input type="text" value="<?php echo $this->optionsSerialized->phrases['wc_email_subject']; ?>" name="wc_email_subject" id="wc_email_subject" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="wc_email_message"><?php _e('Post comment notification content', 'wpdiscuz'); ?></label>                    
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">                                                
                        <div class="wc_available_variable">[SITE_URL]</div>
                        <div class="wc_available_variable">[POST_URL]</div>
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                        <div class="wc_available_variable">[SUBSCRIBER_NAME]</div>
                        <p class="wpd-desc"><?php _e('Shortcode above will work for registered users only', 'wpdiscuz'); ?>
                        <div class="wc_available_variable">[COMMENT_URL]</div>
                        <div class="wc_available_variable">[COMMENT_AUTHOR]</div>
                        <div class="wc_available_variable">[COMMENT_CONTENT]</div>
                        <div class="wc_available_variable">[UNSUBSCRIBE_URL]</div>
                    </div>
                    </p>
                </th>
                <td colspan="3"><?php wp_editor($this->optionsSerialized->phrases['wc_email_message'], "wc_email_message", array('textarea_rows' => 7, 'teeny' => true)); ?></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <h4><?php _e('Subscription type: All my comments', 'wpdiscuz'); ?></h4>
                    <label for="wc_all_comment_new_reply_subject"><?php _e('New reply notification subject', 'wpdiscuz'); ?></label>                    
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                    </div>
                </th>
                <td colspan="3"><input type="text" value="<?php echo $this->optionsSerialized->phrases['wc_all_comment_new_reply_subject']; ?>" name="wc_all_comment_new_reply_subject" id="wc_all_comment_new_reply_subject" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="wc_all_comment_new_reply_message"><?php _e('New Reply notification content', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">                                                
                        <div class="wc_available_variable">[SITE_URL]</div>
                        <div class="wc_available_variable">[POST_URL]</div>
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                        <div class="wc_available_variable">[SUBSCRIBER_NAME]</div>
                        <p class="wpd-desc"><?php _e('Shortcode above will work for registered users only', 'wpdiscuz'); ?>
                        <div class="wc_available_variable">[COMMENT_URL]</div>
                        <div class="wc_available_variable">[COMMENT_AUTHOR]</div>
                        <div class="wc_available_variable">[COMMENT_CONTENT]</div>
                        <div class="wc_available_variable">[UNSUBSCRIBE_URL]</div>
                    </div>
                    </p>
                </th>
                <td colspan="3"><?php wp_editor($this->optionsSerialized->phrases['wc_all_comment_new_reply_message'], "wc_all_comment_new_reply_message", array('textarea_rows' => 7, 'teeny' => true)); ?></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <h4><?php _e('Subscription type: Single comment', 'wpdiscuz'); ?></h4>
                    <label for="wc_new_reply_email_subject"><?php _e('New reply notification subject', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                    </div>
                </th>
                <td colspan="3"><input type="text" value="<?php echo $this->optionsSerialized->phrases['wc_new_reply_email_subject']; ?>" name="wc_new_reply_email_subject" id="wc_new_reply_email_subject" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="wc_new_reply_email_message"><?php _e('New Reply notification content', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">                                                
                        <div class="wc_available_variable">[SITE_URL]</div>
                        <div class="wc_available_variable">[POST_URL]</div>
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                        <div class="wc_available_variable">[SUBSCRIBER_NAME]</div>
                        <div class="wc_available_variable">[COMMENT_URL]</div>
                        <div class="wc_available_variable">[COMMENT_AUTHOR]</div>
                        <div class="wc_available_variable">[COMMENT_CONTENT]</div>
                        <div class="wc_available_variable">[UNSUBSCRIBE_URL]</div>
                    </div>
                    </p>
                </th>
                <td colspan="3"><?php wp_editor($this->optionsSerialized->phrases['wc_new_reply_email_message'], "wc_new_reply_email_message", array('textarea_rows' => 7, 'teeny' => true)); ?></td>
            </tr>            
            <tr valign="top">
                <th scope="row">
                    <label for="wc_confirm_email_subject"><?php _e('Subscription confirmation email subject', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                    </div>
                </th>
                <td colspan="3"><input type="text" name="wc_confirm_email_subject" id="wc_confirm_email_subject" value="<?php echo $this->optionsSerialized->phrases['wc_confirm_email_subject']; ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="wc_confirm_email_message"><?php _e('Subscription confirmation email content', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">                                                
                        <div class="wc_available_variable">[SITE_URL]</div>
                        <div class="wc_available_variable">[POST_URL]</div>
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                        <div class="wc_available_variable">[CONFIRM_URL]</div>
                        <div class="wc_available_variable">[CANCEL_URL]</div>
                    </div>
                    </p>
                </th>
                <td colspan="3"><?php wp_editor($this->optionsSerialized->phrases['wc_confirm_email_message'], "wc_confirm_email_message", array('textarea_rows' => 7, 'teeny' => true)); ?></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="wc_comment_approved_email_subject"><?php _e('Comment approved subject', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc"><?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                    </div>
                </th>
                <td colspan="3"><input type="text" name="wc_comment_approved_email_subject" id="wc_comment_approved_email_subject" value="<?php echo $this->optionsSerialized->phrases['wc_comment_approved_email_subject']; ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="wc_comment_approved_email_message"><?php _e('Comment approved message', 'wpdiscuz'); ?></label>
                    <p class="wpd-desc">
                        <?php _e('Available shortcodes', 'wpdiscuz'); ?>:
                    <div class="wc_available_variables">                                                
                        <div class="wc_available_variable">[SITE_URL]</div>
                        <div class="wc_available_variable">[POST_URL]</div>
                        <div class="wc_available_variable">[BLOG_TITLE]</div>
                        <div class="wc_available_variable">[POST_TITLE]</div>
                        <div class="wc_available_variable">[COMMENT_URL]</div>
                        <div class="wc_available_variable">[COMMENT_AUTHOR]</div>
                        <div class="wc_available_variable">[COMMENT_CONTENT]</div>
                    </div>
                    </p>
                </th>
                <td colspan="3"><?php wp_editor($this->optionsSerialized->phrases['wc_comment_approved_email_message'], "wc_comment_approved_email_message", array('textarea_rows' => 7, 'teeny' => true)); ?></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="wc_unsubscribe"><?php _e('Unsubscribe', 'wpdiscuz'); ?></label></th>
                <td colspan="3"><input type="text" name="wc_unsubscribe" id="wc_unsubscribe" value="<?php echo $this->optionsSerialized->phrases['wc_unsubscribe']; ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="wc_ignore_subscription"><?php _e('Ignore subscription', 'wpdiscuz'); ?></label></th>
                <td colspan="3"><input type="text" name="wc_ignore_subscription" id="wc_ignore_subscription" value="<?php echo $this->optionsSerialized->phrases['wc_ignore_subscription']; ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="wc_confirm_email"><?php _e('Confirm your subscription', 'wpdiscuz'); ?></label></th>
                <td colspan="3"><input type="text" name="wc_confirm_email" id="wc_confirm_email" value="<?php echo $this->optionsSerialized->phrases['wc_confirm_email']; ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="wc_comfirm_success_message"><?php _e('You\'ve successfully confirmed your subscription.', 'wpdiscuz'); ?></label></th>
                <td colspan="3"><textarea name="wc_comfirm_success_message" id="wc_comfirm_success_message"><?php echo $this->optionsSerialized->phrases['wc_comfirm_success_message']; ?></textarea></td>
            </tr>
        </tbody>
    </table>
</div>