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
    'deleted' => '[slettet bruger]',

    'beatmapset_activities' => [
        'title' => ":user's Modding Historie",
        'title_compact' => 'Modding',

        'discussions' => [
            'title_recent' => 'Senest startede diskussioner',
        ],

        'events' => [
            'title_recent' => 'Seneste begivenheder',
        ],

        'posts' => [
            'title_recent' => 'Seneste opslag',
        ],

        'votes_received' => [
            'title_most' => '>Mest stemt på af (over de sidste 3 måneder)',
        ],

        'votes_made' => [
            'title_most' => '>Mest stemt på (over de sidste 3 måneder)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Du har blokeret denne bruger.',
        'blocked_count' => 'blokerede brugere (:count)',
        'hide_profile' => 'Skjul profil',
        'not_blocked' => 'Denne bruger er ikke blokeret.',
        'show_profile' => 'Vis profil',
        'too_many' => 'Blokeringsgrænsen er nået.',
        'button' => [
            'block' => 'Bloker',
            'unblock' => 'Fjern blokering',
        ],
    ],

    'card' => [
        'loading' => 'Loader...',
        'send_message' => 'send besked',
    ],

    'login' => [
        '_' => 'Log ind',
        'locked_ip' => 'din IP-adresse er låst. Vent venligst et par minutter.',
        'username' => 'Brugernavn',
        'password' => 'Adgangskode',
        'button' => 'Log Ind',
        'button_posting' => 'Logger ind...',
        'remember' => 'Husk denne computer',
        'title' => 'Log venligst ind for at fortsætte',
        'failed' => 'Ugyldigt login',
        'register' => "Har du ikke en osu! konto? Opret en ny én!",
        'forgot' => 'Glemt din adgangskode?',
        'beta' => [
            'main' => 'Adgang til betaversionen er i øjeblikket restrikteret til priveligerede brugere.',
            'small' => '(osu!supportere ville kunne komme ind snart)',
        ],

        'here' => 'her', // this is substituted in when generating a link above. change it to suit the language.
    ],

    'posts' => [
        'title' => ':username\'s opslag',
    ],

    'signup' => [
        '_' => 'Registrer',
    ],
    'anonymous' => [
        'login_link' => 'klik for at logge ind',
        'login_text' => 'log ind',
        'username' => 'Gæst',
        'error' => 'Du skal være logget ind for at gøre dette.',
    ],
    'logout_confirm' => 'Er du sikker på, at du vil logge ud? :(',
    'report' => [
        'button_text' => 'Anmeld',
        'comments' => 'Yderligere Kommentarer',
        'placeholder' => 'Vær venlig at tilføje alle informationer du tror vil kunne være nyttige.',
        'reason' => 'Begrundelse',
        'thanks' => 'Tak for din anmeldelse!',
        'title' => 'Anmeld :username?',

        'actions' => [
            'send' => 'Send anmeldelse',
            'cancel' => 'Annuller',
        ],

        'options' => [
            'cheating' => 'Uærligt spil / Snyd',
            'insults' => 'Fornærmede mig / andre',
            'spam' => 'Spamming',
            'unwanted_content' => 'Sender links med upassende indhold',
            'nonsense' => 'Nonsens',
            'other' => 'Andet (Skriv under)',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Du konto er blevet begrænset!',
        'message' => 'Når du er begrænset, kan du ikke interagere med andre spillere, og dine scores vil kun være synlige for dig. Dette er som regel en automatisk proces, og begrænsningen vil blive fjernet indenfor 24 timer. Hvis du ønsker at appellere din begrænsning, <a href="mailto:accounts@ppy.sh">kontakt supporten</a>.',
    ],
    'show' => [
        'age' => ':age år gammel',
        'change_avatar' => 'ændre din avatar!',
        'first_members' => 'Var her fra starten',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Deltog på :date',
        'lastvisit' => 'Sidst set :date',
        'lastvisit_online' => '',
        'missingtext' => 'Du har formentlig lavet en stavefejl! (eller også er brugeren blevet bannet)',
        'origin_country' => 'Fra :country',
        'page_description' => 'osu! - Alt hvad du har brug for at vide om :username!',
        'previous_usernames' => 'tidligere kendt som',
        'plays_with' => 'Spiller med :devices',
        'title' => ":username ´s profil",

        'edit' => [
            'cover' => [
                'button' => 'Skift coverbillede',
                'defaults_info' => 'Flere muligheder for coverbillede kommer snart',
                'upload' => [
                    'broken_file' => 'Kunne ikke uploade billedet. Prøv igen.',
                    'button' => 'Upload billede',
                    'dropzone' => 'Smid her for at uploade',
                    'dropzone_info' => 'Du kan også smide dit billede her for at uploade',
                    'restriction_info' => "Upload er kun tilgængelig for <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!supporters</a>",
                    'size_info' => 'Coverbilledet burde være 2800x620',
                    'too_large' => 'Den uploadede fil er for stor.',
                    'unsupported_format' => 'Ikke-understøttet format.',
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'standardspiltilstand',
                'set' => 'sæt :mode som standard spiltilstand',
            ],
        ],

        'extra' => [
            'followers' => '1 følger|:count følgere',
            'unranked' => 'Ingen seneste spil',

            'achievements' => [
                'achieved-on' => 'Opnået den :date',
                'locked' => 'Låst',
                'title' => 'Præstationer',
            ],
            'beatmaps' => [
                'by_artist' => 'af :artist',
                'none' => 'Ingen... endnu.',
                'title' => 'Beatmaps',

                'favourite' => [
                    'title' => 'Favorit Beatmaps',
                ],
                'graveyard' => [
                    'title' => 'Beatmaps på kirkegården',
                ],
                'loved' => [
                    'title' => 'Elskede beatmaps',
                ],
                'ranked_and_approved' => [
                    'title' => 'Ranked & Godkendte Beatmaps',
                ],
                'unranked' => [
                    'title' => 'Afventende Beatmaps',
                ],
            ],
            'historical' => [
                'empty' => 'Ingen præstationsrekorder endnu. :(',
                'title' => 'Historisk',

                'monthly_playcounts' => [
                    'title' => 'Spille Historik',
                    'count_label' => 'Plays',
                ],
                'most_played' => [
                    'count' => 'gange spillet',
                    'title' => 'Mest Spillede Beatmaps',
                ],
                'recent_plays' => [
                    'accuracy' => 'præcision: :percentage',
                    'title' => 'Seneste spil (24 timer)',
                ],
                'replays_watched_counts' => [
                    'title' => 'Replays Set Historik',
                    'count_label' => 'Replays Set',
                ],
            ],
            'kudosu' => [
                'available' => 'Kudosu Tilgængelig',
                'available_info' => "Kudosu kan blive omdannet til kudosu-stjerner, som giver dine beatmaps mere opmærksomhed. Dette er antallet af kudosu, som du ikke har brugt endnu.",
                'recent_entries' => 'Seneste Kudosu Historie',
                'title' => 'Kudosu!',
                'total' => 'Samlet Kudosu Optjent',
                'total_info' => 'Baseret på hvor stort et bidrag brugeren har givet til beatmaps. Se <a href="'.osu_url('user.kudosu').'">denne side</a> for mere information.',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "Denne bruger har ikke modtaget nogen kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Modtog :amount fra kudosu benægtelsesophævelse af modding opslaget :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Benægtet :amount fra modding opslaget :post',
                        ],

                        'delete' => [
                            'reset' => 'Mistede :amount fra sletning af modding opslag :post',
                        ],

                        'restore' => [
                            'give' => 'Modtog :amount fra modding opslag genetablering af :post',
                        ],

                        'vote' => [
                            'give' => 'Modtog :amount fra at få stemmer på modding opslaget :post',
                            'reset' => 'Mistede :amount fra at miste stemmer på modding opslaget :post',
                        ],

                        'recalculate' => [
                            'give' => 'Modtog :amount fra genberegning af stemmer i modding opslaget :post',
                            'reset' => 'Mistede :amount fra genberegning af stemmer i modding opslaget :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Modtog :amount fra :giver for opslaget :post',
                        'reset' => 'Kudosu nulstillet af :giver for opslaget :post',
                        'revoke' => 'Benægtet kudosu af :giver for opslaget :post',
                    ],
                ],
            ],
            'me' => [
                'title' => 'me!',
            ],
            'medals' => [
                'empty' => "Denne bruger har ikke fået nogle endnu. ;_;",
                'recent' => 'Seneste',
                'title' => 'Medaljer',
            ],
            'recent_activity' => [
                'title' => 'Seneste',
            ],
            'top_ranks' => [
                'download_replay' => 'Download Replay',
                'empty' => 'Ingen fede præstationsrekorder endnu. :(',
                'not_ranked' => 'Kun rangerede beatmaps giver pp.',
                'pp_weight' => 'vejede: :percentage',
                'title' => 'Ranks',

                'best' => [
                    'title' => 'Bedste Præstationer',
                ],
                'first' => [
                    'title' => 'Førstepladser',
                ],
            ],
            'account_standing' => [
                'title' => 'Account Status',
                'bad_standing' => "<strong>:username's</strong> account er ikke i en god position :(",
                'remaining_silence' => '<strong>:username</strong> kan tale igen om :duration.',

                'recent_infringements' => [
                    'title' => 'Seneste Overtrædelser',
                    'date' => 'dato',
                    'action' => 'handling',
                    'length' => 'længde',
                    'length_permanent' => 'Permanent',
                    'description' => 'beskrivelse',
                    'actor' => 'af :username',

                    'actions' => [
                        'restriction' => 'Ban',
                        'silence' => 'Mute',
                        'note' => 'Noter',
                    ],
                ],
            ],
        ],

        'header_title' => [
            '_' => 'Spiller :info',
            'info' => 'Info',
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Interesser',
            'lastfm' => 'Last.fm',
            'location' => 'Nuværende Position',
            'occupation' => 'Stilling',
            'skype' => 'Skype',
            'twitter' => 'Twitter',
            'website' => 'Hjemmeside',
        ],
        'not_found' => [
            'reason_1' => 'De kan have ændret deres brugernavn.',
            'reason_2' => 'Kontoen kan være midlertidigt utilgængelig pga. sikkerhedsproblemer eller misbrug.',
            'reason_3' => 'Du har muligvis lavet en stavefejl!',
            'reason_header' => 'Der er et par mulige årsager til dette:',
            'title' => 'Bruger ikke fundet! ;_;',
        ],
        'page' => [
            'button' => 'Rediger profil',
            'description' => '<strong>me!</strong> er et brugerdefinerbart felt på din profilside.',
            'edit_big' => 'Ændr mig!',
            'placeholder' => 'Skriv indhold her',
            'restriction_info' => "Du skal være <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!supporter</a> for at bruge denne funktion.",
        ],
        'post_count' => [
            '_' => 'Bidraget :link',
            'count' => ':count forum indlæg|:count fourm indlæg',
        ],
        'rank' => [
            'country' => 'Landerangering for :mode',
            'country_simple' => 'Landerangering',
            'global' => 'Global rangering for :mode',
            'global_simple' => 'Global Rangering',
        ],
        'stats' => [
            'hit_accuracy' => 'Hit Præcision',
            'level' => 'Level :level',
            'level_progress' => 'Progression til næste level',
            'maximum_combo' => 'Højeste Combo',
            'medals' => 'Medaljer',
            'play_count' => 'Antal Spilforsøg',
            'play_time' => 'Spille tid i alt',
            'ranked_score' => 'Ranked Score',
            'replays_watched_by_others' => 'Replays Set af Andre',
            'score_ranks' => 'Score Ranks',
            'total_hits' => 'Hits i Alt',
            'total_score' => 'Samlet Score',
        ],
    ],

    'status' => [
        'all' => '',
        'online' => 'Online',
        'offline' => 'Offline',
    ],
    'store' => [
        'saved' => 'Bruger Oprettet',
    ],
    'verify' => [
        'title' => 'Kontobekræftelse',
    ],
];
