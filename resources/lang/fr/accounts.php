<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'edit' => [
        'title' => 'Paramètres de <strong>Compte</strong>',
        'title_compact' => 'paramètres',
        'username' => 'nom d\'utilisateur',

        'avatar' => [
            'title' => 'Avatar',
        ],

        'email' => [
            'current' => 'email actuel',
            'new' => 'nouvel email',
            'new_confirmation' => 'confirmation de l\'email',
            'title' => 'Email',
        ],

        'password' => [
            'current' => 'mot de passe actuel',
            'new' => 'nouveau mot de passe',
            'new_confirmation' => 'confirmation du mot de passe',
            'title' => 'Mot de passe',
        ],

        'profile' => [
            'title' => 'Profil',

            'user' => [
                'user_from' => 'localisation actuelle',
                'user_interests' => 'centres d\'intérêt',
                'user_msnm' => 'skype',
                'user_occ' => 'occupation',
                'user_twitter' => 'twitter',
                'user_website' => 'site web',
                'user_discord' => 'discord',
            ],
        ],

        'signature' => [
            'title' => 'Signature',
            'update' => 'mettre à jour',
        ],
    ],

    'oauth' => [
        'title' => '',
        'authorized_clients' => '',
    ],

    'update_email' => [
        'email_subject' => 'Confirmation du changement d\'email d\'osu!',
        'update' => 'mettre à jour',
    ],

    'update_password' => [
        'email_subject' => 'Confirmation du changement de mot de passe d\'osu!',
        'update' => 'mettre à jour',
    ],

    'playstyles' => [
        'title' => 'Styles de jeu',
        'mouse' => 'souris',
        'keyboard' => 'clavier',
        'tablet' => 'tablette',
        'touch' => 'écran tactile',
    ],

    'privacy' => [
        'title' => 'Confidentialité',
        'friends_only' => 'Bloque les messages privés des personnes qui ne sont pas dans votre liste d’amis',
        'hide_online' => 'masquer votre présence en ligne',
    ],

    'notifications' => [
        'title' => 'Notifications',
        'topic_auto_subscribe' => 'activer automatiquement les notifications sur les nouveaux sujets de forum que vous créez',
    ],

    'security' => [
        'current_session' => 'actuel',
        'end_session' => 'Mettre fin à la session',
        'end_session_confirmation' => 'Ceci va immédiatement mettre fin à votre session sur cet appareil. Êtes-vous sûr ?',
        'last_active' => 'Dernière activité:',
        'title' => 'Sécurité',
        'web_sessions' => 'sessions web',
    ],
];
