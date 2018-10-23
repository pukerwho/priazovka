<h1>Мои настройки</h1>

<form method="post" action="options.php">
	
    <?php settings_fields( 'my-settings-group' ); ?>
    <?php do_settings_sections( 'my-settings-group' ); ?>

    <table class="form-table">
        <tr valign="top">
        <th scope="row">Ссылка на Facebook</th>
        <td><input type="text" name="facebook_link" value="<?php echo esc_attr( get_option('facebook_link') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Ссылка на Twitter</th>
        <td><input type="text" name="twitter_link" value="<?php echo esc_attr( get_option('twitter_link') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Ссылка на Google+</th>
        <td><input type="text" name="google_link" value="<?php echo esc_attr( get_option('google_link') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Ссылка на Pinterest</th>
        <td><input type="text" name="pinterest_link" value="<?php echo esc_attr( get_option('pinterest_link') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>