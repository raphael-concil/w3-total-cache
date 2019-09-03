<?php
namespace W3TC;

if ( !defined( 'W3TC' ) )
	die();

?>
<div id="w3tc-upgrade">
	<div class="w3tc-overlay-logo"></div>
	<div class="w3tc_overlay_upgrade_header">
		<div>
			<div class="w3tc_overlay_upgrade_left_h">
				W3 Total Cache Pro unlocks more performance options for any website!
			</div>
			<div class="w3tc_overlay_upgrade_right_h">
				only $99 <span class="w3tc_overlay_upgrade_right_text">/year</span>
			</div>
		</div>
		<div class="w3tc_overlay_upgrade_description">
			<div class="w3tc_overlay_upgrade_content_l">
				<img src="<?php echo plugins_url( 'pub/img/overlay/w3-meteor.png', W3TC_FILE ) ?>"
					width="238" height="178" />
			</div>
			<div class="w3tc_overlay_upgrade_content_r">
				<ul>
					<li>
						<strong>Full Site Delivery (FSD)</strong><br>
						Provide the best user experience possible by enhancing by hosting HTML pages and RSS feeds with (supported) <acronym title="Content Delivery Network">CDN</acronym>'s high speed global networks.</li>
					<li>
						<strong>Extensions Support</strong><br>
						Add accelerated mobile pages (<acronym title="Accelerated Mobile Pages">AMP</acronym>) support. Improve the performance of your Genesis, WPML-powered site, and much more.</li>
					<li>
						<strong><acronym title="Representational State Transfer">REST</acronym> <acronym title="Application Programming Interface">API</acronym> Caching</strong><br>
						Save resources or add scale and performance to the WordPress <acronym title="Application Programming Interface">API</acronym> with W3TC Pro.</li>
					<li><strong>Fragment Caching</strong><br>
						Unlocking the fragment caching module delivers enhanced performance for plugins and themes that use the WordPress Transient <acronym title="Application Programming Interface">API</acronym>. StudioPress' Genesis Framework is up to 60% faster with W3TC Pro.</li>
				</ul>
			</div>
		</div>
		<div style="clear: both"></div>
	</div>
	<div class="w3tc_overlay_content"></div>
	<div class="w3tc_overlay_footer">
		<?php if ( \W3TC\Util_Environment::is_https() ): ?>
			<input id="w3tc-purchase" type="button"
				class="btn w3tc-size image btn-default palette-turquoise secure"
				value="<?php _e( 'Subscribe to Go Faster Now', 'w3-total-cache' ) ?> " />
		<?php else: ?>
			<a id="w3tc-purchase-link" href="<?php echo \W3TC\Licensing_Core::purchase_url() ?>"
				target="_blank"
				class="btn w3tc-size image btn-default palette-turquoise secure">
				<?php _e( 'Subscribe to Go Faster Now', 'w3-total-cache' ) ?>
			</a>
		<?php endif ?>

	</div>
	<div style="clear: both"></div>
</div>
