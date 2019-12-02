<?php

/**
 * Plugin Name:     Itineris Bedrock Security Configuration
 * Plugin URI:      https://github.com/ItinerisLtd/bedrock-security-config/
 * Description:     Sets default security configurations
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     bedrock-security-config
 */

declare(strict_types=1);

namespace Itineris\BedrockSecurityConfig;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: no-referrer-when-downgrade');
header('X-Frame-Options: SAMEORIGIN');
header('Strict-Transport-Security: max-age=31536000; preload');
