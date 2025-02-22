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
    'pinned_topics' => 'Gepinde Onderwerpen',
    'slogan' => "het is gevaarlijk om alleen te spelen.",
    'subforums' => 'Subforums',
    'title' => 'osu! forums',

    'covers' => [
        'create' => [
            '_' => 'Stel omslagafbeelding in',
            'button' => 'Afbeelding uploaden',
            'info' => 'Omslag grootte moet :dimensions zijn. Je kunt ook een afbeelding hier loslaten om hem te uploaden.',
        ],

        'destroy' => [
            '_' => 'Verwijder omslag afbeelding',
            'confirm' => 'Weet je zeker dat je de omslag afbeelding wilt verwijderen?',
        ],
    ],

    'email' => [
        'new_reply' => '[osu!] Nieuwe reactie voor topic ":title"',
    ],

    'forums' => [
        'topics' => [
            'empty' => 'Geen topics!',
        ],
    ],

    'mark_as_read' => [
        'forum' => 'Markeer forum als gelezen',
        'forums' => 'Markeer forums als gelezen',
        'busy' => 'Markeren als gelezen...',
    ],

    'poll' => [
        'edit_warning' => 'Een poll bewerken zal de huidige resultaten verwijderen!',

        'actions' => [
            'edit' => 'Bewerk poll',
        ],
    ],

    'post' => [
        'confirm_destroy' => 'Will je deze post echt verwijderen?',
        'confirm_restore' => 'Will je deze post echt terugzetten?',
        'edited' => 'Laatst bewerkt door :user op :when. :count keer bewerkt in totaal.',
        'posted_at' => 'gepost op :when',

        'actions' => [
            'destroy' => 'Verwijder bericht',
            'restore' => 'Herstel bericht',
            'edit' => 'Bewerk bericht',
        ],

        'info' => [
            'post_count' => ':count_delimited bericht|:count_delimited berichten',
            'topic_starter' => '',
        ],
    ],

    'search' => [
        'go_to_post' => 'Ga naar bericht',
        'post_number_input' => 'geef bericht nummer',
        'total_posts' => ':posts_count berichten totaal',
    ],

    'topic' => [
        'deleted' => 'verwijder topic',
        'go_to_latest' => 'bekijk nieuwste post',
        'latest_post' => ':when door :user',
        'latest_reply_by' => 'laatste bericht door :user',
        'new_topic' => 'Nieuw onderwerp',
        'new_topic_login' => 'Log in om een nieuw onderwerp maken',
        'post_reply' => 'Post',
        'reply_box_placeholder' => 'Typ hier om te antwoorden',
        'reply_title_prefix' => 'Re',
        'started_by' => 'door :user',
        'started_by_verbose' => 'gestart door :user',

        'create' => [
            'preview' => 'Voorbeeld',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Schrijf',
            'submit' => 'Post',

            'necropost' => [
                'default' => 'Dit onderwerp is al een tijdje inactief. Maak alleen een post hier als je een specifieke reden daarvoor hebt.',

                'new_topic' => [
                    '_' => "Dit onderwerp is al een tijdje inactief. Als je geen specifieke reden om hier te posten hebt, :create in plaats daarvan.",
                    'create' => 'maak een onderwerp aan',
                ],
            ],

            'placeholder' => [
                'body' => 'Typ post inhoud hier',
                'title' => 'Klik hier om een titel in te stellen',
            ],
        ],

        'jump' => [
            'enter' => 'klik hier om een specifiek postnummer op te geven',
            'first' => 'ga naar eerste post',
            'last' => 'ga naar laatste post',
            'next' => 'sla 10 posts over',
            'previous' => 'ga 10 posts terug',
        ],

        'post_edit' => [
            'cancel' => 'Annuleren',
            'post' => 'Opslaan',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title' => 'Forum Abonnementen',
            'title_compact' => 'forum abonnementen',
            'title_main' => 'Forum <strong>Abonnementen</strong>',

            'box' => [
                'total' => 'Geabonneerde topics',
                'unread' => 'Topics met nieuwe berichten',
            ],

            'info' => [
                'total' => 'Je bent geabonneerd op :total topics.',
                'unread' => 'Je hebt :unread ongelezen berichten in geabonneerde berichten.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Uitschrijven van topic?',
                'title' => 'Uitschrijven',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Onderwerpen',

        'actions' => [
            'login_reply' => 'Log in om te antwoorden',
            'reply' => 'Beantwoorden',
            'reply_with_quote' => 'Citeer post voor antwoord',
            'search' => 'Zoek',
        ],

        'create' => [
            'create_poll' => 'Peiling Aanmaken',

            'preview' => 'Plaats voorbeeld',

            'create_poll_button' => [
                'add' => 'Maak een Peiling aan',
                'remove' => 'Annuleer aanmaken van peiling',
            ],

            'poll' => [
                'hide_results' => 'Verberg de resultaten van de poll.',
                'hide_results_info' => 'Deze zullen pas worden getoond na de sluiting van de poll.',
                'length' => 'Maak peiling voor',
                'length_days_suffix' => 'dagen',
                'length_info' => 'Laat leeg voor een peiling die nooit eindigt',
                'max_options' => 'Opties per gebruiker',
                'max_options_info' => 'Dit is het aantal opties dat iedere gebruiker mag selecteren bij de stemming.',
                'options' => 'Opties',
                'options_info' => 'Plaats elke optie op een nieuwe lijn. Je mag maximaal 10 opties ingeven.',
                'title' => 'Vraag',
                'vote_change' => 'Sta opnieuw stemmen toe.',
                'vote_change_info' => 'Indien ingeschakeld, kunnen gebruikers hun stem wijzigen.',
            ],
        ],

        'edit_title' => [
            'start' => 'Bewerk titel',
        ],

        'index' => [
            'feature_votes' => 'ster prioriteit',
            'replies' => 'keer beantwoordt',
            'views' => 'keer bekeken',
        ],

        'issue_tag_added' => [
            'to_0' => 'Verwijder "toegevoegd" tag',
            'to_0_done' => 'Verwijderde "toegevoegd" tag',
            'to_1' => 'Voeg "toegevoegd" tag toe',
            'to_1_done' => 'Voegde "toegevoegd" tag toe',
        ],

        'issue_tag_assigned' => [
            'to_0' => 'Verwijder "toegewezen" tag',
            'to_0_done' => 'Verwijderde "toegewezen" tag',
            'to_1' => 'Voeg "toegewezen" tag toe',
            'to_1_done' => 'Voegde "toegewezen" tag toe',
        ],

        'issue_tag_confirmed' => [
            'to_0' => 'Verwijder "bevestigd" tag',
            'to_0_done' => 'Verwijderde "bevestigd" tag',
            'to_1' => 'Voeg "bevestigd" tag toe',
            'to_1_done' => 'Voegde "bevestigd" tag toe',
        ],

        'issue_tag_duplicate' => [
            'to_0' => 'Verwijder "duplicaat" tag',
            'to_0_done' => 'Verwijderde "duplicaat" tag',
            'to_1' => 'Voeg "duplicaat" tag toe',
            'to_1_done' => 'Voegde "duplicaat" tag toe',
        ],

        'issue_tag_invalid' => [
            'to_0' => 'Verwijder "invalide" tag',
            'to_0_done' => 'Verwijderde "invalide" tag',
            'to_1' => 'Voeg "invalide" tag toe',
            'to_1_done' => 'Voegde "invalide" tag toe',
        ],

        'issue_tag_resolved' => [
            'to_0' => 'Verwijder "opgelost" tag',
            'to_0_done' => 'Verwijderde "opgelost" tag',
            'to_1' => 'Voeg "opgelost" tag toe',
            'to_1_done' => 'Voegde "opgelost" tag toe',
        ],

        'lock' => [
            'is_locked' => 'Dit onderwerp is gesloten en kan niet meer op beantwoord worden',
            'to_0' => 'Ontgrendel topic',
            'to_0_done' => 'Topic is ontgrendeld',
            'to_1' => 'Vergrendel topic',
            'to_1_done' => 'Topic is vergrendeld',
        ],

        'moderate_move' => [
            'title' => 'Verplaats naar een ander forum',
        ],

        'moderate_pin' => [
            'to_0' => 'Onpin topic',
            'to_0_done' => 'Topic niet meer gepint',
            'to_1' => 'Pin topic',
            'to_1_done' => 'Topic is gepint',
            'to_2' => 'Pin topic en markeer als melding',
            'to_2_done' => 'Topic is gepint en gemarkeerd als melding',
        ],

        'show' => [
            'deleted-posts' => 'Verwijderde posts',
            'total_posts' => 'Alle posts',

            'feature_vote' => [
                'current' => 'Prioriteit: +:count',
                'do' => 'Promoot dit verzoek',

                'info' => [
                    '_' => 'Dit is een :feature_request. Feature requests kunnen omhoog worden gestemd door :supporters.',
                    'feature_request' => 'feature request',
                    'supporters' => 'supporters',
                ],

                'user' => [
                    'count' => '{0} geen stemmen|{1} :count stem|[2,*] :count stemmen',
                    'current' => 'Je hebt :votes stemmen over.',
                    'not_enough' => "Je hebt geen stemmen meer over",
                ],
            ],

            'poll' => [
                'vote' => 'Stem',

                'detail' => [
                    'end_time' => 'Stemmen eindigt op :time',
                    'ended' => 'Stemming eindigde op :time',
                    'results_hidden' => 'Als de pollen zijn gesloten dan zullen resultaten worden getoond.',
                    'total' => 'Totale stemmen: count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => 'Heeft geen bladwijzer',
            'to_watching' => 'Voeg bladwijzer toe',
            'to_watching_mail' => 'Voeg bladwijzer met notificaties toe',
            'tooltip_mail_disable' => 'Melding is ingeschakeld. Klik om uit te schakelen',
            'tooltip_mail_enable' => 'Melding is uitgeschakeld. Klik om in te schakelen',
        ],
    ],
];
