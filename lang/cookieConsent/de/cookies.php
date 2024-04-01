<?php
return [
    'title' => 'Wir nutzen Cookies',
    'intro' => 'Diese Website verwendet Cookies, um die Benutzerfreundlichkeit zu verbessern.',
    'link' => 'Werfen Sie einen Blick auf unser <a href=":url">Cookies Policy</a> für mehr Information.',

    'essentials' => 'Nur notwendige',
    'all' => 'Alles akzeptieren',
    'customize' => 'Anpassen',
    'manage' => 'Cookies anpassen',
    'details' => [
        'more' => 'Mehr Details',
        'less' => 'Weniger Details',
    ],
    'save' => 'Einstellungen speichern',

    'categories' => [
        'essentials' => [
            'title' => 'Notwendige Cookies',
            'description' => 'Es gibt einige Cookies, die wir einsetzen müssen, damit bestimmte Webseiten funktionieren. Aus diesem Grund benötigen sie nicht Ihre Zustimmung.',
        ],
        'analytics' => [
            'title' => 'Analytics Cookies',
            'description' => 'Wir verwenden diese Cookies für interne Forschungszwecke, um herauszufinden, wie wir den Service für alle unsere Nutzer verbessern können. Diese Cookies bewerten, wie Sie mit unserer Website interagieren.',
        ],
        'optional' => [
            'title' => 'Optionale Cookies',
            'description' => 'Diese Cookies ermöglichen Funktionen, die Ihre Benutzererfahrung verbessern könnten, aber ihr Fehlen wird Ihre Fähigkeit, auf unserer Website zu surfen, nicht beeinträchtigen.',
        ],
        'ad_storage' => [
            'title' => 'Anzeigen-Speicherung',
            'description' => 'Diese Cookies werden verwendet, um Informationen über Ihre Anzeigeaktivitäten zu speichern, um relevantere Anzeigen bereitzustellen.',
        ],
        'ad_personalization' => [
            'title' => 'Anzeigen-Personalisierung',
            'description' => 'Diese Cookies werden verwendet, um Anzeigen basierend auf Ihren Interessen zu personalisieren und Ihnen eine individualisierte Werbeerfahrung zu bieten.',
        ],
        'ad_user_data' => [
            'title' => 'Anzeigen-Benutzerdaten',
            'description' => 'Diese Cookies sammeln Daten über Ihr Verhalten und Ihre Interessen, um die Anzeigenauslieferung und -effektivität zu verbessern.',
        ],
    ],

    'defaults' => [
        'consent' => 'Wird verwendet, um die Cookie-Einstellungen des Benutzers zu speichern.',
        'session' => 'Dient zur Identifizierung der Browsing-Sitzung des Nutzers.',
        'csrf' => 'Wird verwendet, um sowohl den Nutzer als auch unsere Website gegen Cross-Site Request Forgery-Angriffe zu schützen.',
        '_ga' => 'Haupt-Cookie, das von Google Analytics verwendet wird und es dem Dienst ermöglicht, einen Besucher von einem anderen zu unterscheiden.',
        '_ga_ID' => 'Wird von Google Analytics verwendet, um den Sitzungsstatus zu erhalten.',
        '_gid' => 'Wird von Google Analytics verwendet, um den Benutzer zu identifizieren.',
        '_gat' => 'Wird von Google Analytics verwendet, um die Abfragerate zu drosseln.',
    ],
];
