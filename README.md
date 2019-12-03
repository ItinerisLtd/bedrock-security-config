# What does this plugin do?
It will set the following headers to your site:
```php
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: no-referrer-when-downgrade');
header('X-Frame-Options: SAMEORIGIN');
header('Strict-Transport-Security: max-age=31536000; preload');
```

# Installation
Run `composer require itinerisltd/bedrock-security-config` in the Bedrock directory.

# Usage
Perform the above steps - that's it!
