<?php

function smtp_mailer_display_addons()
{
    echo '<div class="wrap">';
    echo '<h2>' .__('SMTP Mailer Add-ons', 'smtp-mailer') . '</h2>';
    
    $addons_data = array();

    $addon_1 = array(
        'name' => 'Reply-To',
        'thumbnail' => SMTP_MAILER_URL.'/addons/images/smtp-mailer-reply-to.png',
        'description' => 'Set a Reply-To address for all outgoing email messages',
        'page_url' => 'https://wphowto.net/how-to-add-a-reply-to-address-in-the-smtp-mailer-wordpress-plugin-6997',
    );
    array_push($addons_data, $addon_1);
    
    $addon_2 = array(
        'name' => 'Email Logger',
        'thumbnail' => SMTP_MAILER_URL.'/addons/images/smtp-mailer-email-logger.png',
        'description' => 'Log and view all email messages',
        'page_url' => 'https://wphowto.net/smtp-mailer-email-logger-7066',
    );
    array_push($addons_data, $addon_2);
    
    //Display the list
    foreach ($addons_data as $addon) {
        ?>
        <div class="smtp_mailer_addons_item_canvas">
        <div class="smtp_mailer_addons_item_thumb">
            <img src="<?php echo esc_url($addon['thumbnail']);?>" alt="<?php echo esc_attr($addon['name']);?>">
        </div>
        <div class="smtp_mailer_addons_item_body">
        <div class="smtp_mailer_addons_item_name">
            <a href="<?php echo esc_url($addon['page_url']);?>" target="_blank"><?php echo esc_html($addon['name']);?></a>
        </div>
        <div class="smtp_mailer_addons_item_description">
        <?php echo esc_html($addon['description']);?>
        </div>
        <div class="smtp_mailer_addons_item_details_link">
        <a href="<?php echo esc_url($addon['page_url']);?>" class="smtp_mailer_addons_view_details" target="_blank">View Details</a>
        </div>    
        </div>
        </div>
        <?php
    }
    echo '</div>';//end of wrap
}
