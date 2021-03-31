<?php

return [
    // frontend URL
    'url' => env('SPA_URL', 'http://localhost:8080'),
    // path to my frontend page with query param queryURL(temporarySignedRoute URL)
    'email_verify_url' => env('FRONTEND_EMAIL_VERIFY_URL', '/verify-email?queryURL='),
];
