<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/adrenth
 * @since      1.0.0
 *
 * @package    Hydro_Raindrop
 * @subpackage Hydro_Raindrop/admin/partials
 */
?>

<?php
if ( ! current_user_can( 'manage_options' ) ) {
	wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
?>

<div class="wrap">

	<h1>Hydro Raindrop MFA Settings</h1>

	<p>Register a developer account at <a href="https://www.hydrogenplatform.com/developers" target="_blank">https://www.hydrogenplatform.com/developers</a>.</p>

	<form method="post" action="options.php">

		<?php settings_fields( 'hydro_api' ); ?>
		<?php do_settings_sections( 'hydro_api' ); ?>

		<table class="form-table">
			<tr valign="top">
				<th scope="row">Application ID</th>
				<td>
					<input type="text"
							class="regular-text code"
							name="application_id"
							value="<?php echo esc_attr( get_option( 'application_id' ) ); ?>"
							autocomplete="off"/>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Client ID</th>
				<td>
					<input type="text"
							class="regular-text code"
							name="client_id"
							value="<?php echo esc_attr( get_option( 'client_id' ) ); ?>"
							autocomplete="off"/>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Client Secret</th>
				<td>
					<input type="text"
							class="regular-text code"
							name="client_secret"
							value="<?php echo esc_attr( get_option( 'client_secret' ) ); ?>"
							autocomplete="off"/>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Environment</th>
				<td>
					<select name="environment" class="selection">
						<option value="production"<?php if ( get_option( 'environment' ) === 'production' ): ?> selected<?php endif; ?>>
							Production
						</option>
						<option value="sandbox"<?php if ( get_option( 'environment' ) === 'sandbox' ): ?> selected<?php endif; ?>>
							Sandbox
						</option>
					</select>
				</td>
			</tr>
		</table>

		<?php submit_button(); ?>
	</form>
</div>
