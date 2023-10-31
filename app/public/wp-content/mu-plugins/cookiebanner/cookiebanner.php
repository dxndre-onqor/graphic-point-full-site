<?php

/**
 * For each activate consent type a banner is created
 * If A/B testing is enabled, each banner is rendered per consenttype as well.
 */

?>

<!-- Header - Including Logo, Title, Close Icon -->

<div class="cmplz-cookiebanner cmplz-hidden banner-{id} {consent_type} cmplz-{position} cmplz-categories-type-{use_categories}" aria-modal="true" data-nosnippet="true" role="dialog" aria-live="polite" aria-labelledby="cmplz-header-{id}-{consent_type}" aria-describedby="cmplz-message-{id}-{consent_type}">
	<div class="cmplz-header">
		<div class="cmplz-logo">{logo}</div>
		<div class="cmplz-title" id="cmplz-header-{id}-{consent_type}">{header}</div>
		<a class="cmplz-close" tabindex="0" role="button">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
		</a>
	</div>

<!-- Divider between Header and Body -->

<div class="cmplz-divider cmplz-divider-header"></div>