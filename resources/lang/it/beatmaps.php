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
    'discussion-posts' => [
        'store' => [
            'error' => 'Errore durante il salvataggio del post',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Errore durante l\'aggiornamento del voto',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'permetti kudosu',
        'delete' => 'elimina',
        'deleted' => 'Eliminato da :editor :delete_time.',
        'deny_kudosu' => 'nega kudosu',
        'edit' => 'modifica',
        'edited' => 'Ultima modifica di :editor :update_time',
        'kudosu_denied' => 'Negato dall\'ottenimento di kudosu.',
        'message_placeholder_deleted_beatmap' => 'La difficoltà è stata eliminata quindi non può più essere discussa.',
        'message_placeholder_locked' => 'La discussione per questa beatmap è stata disabilitata.',
        'message_type_select' => 'Seleziona il tipo di commento',
        'reply_notice' => 'Premi invio per rispondere.',
        'reply_placeholder' => 'Scrivi la tua risposta qui',
        'require-login' => 'Per favore effettua il login per postare o rispondere',
        'resolved' => 'Risolto',
        'restore' => 'ripristina',
        'show_deleted' => 'Mostra eliminati',
        'title' => 'Discussioni',

        'collapse' => [
            'all-collapse' => 'Comprimi tutto',
            'all-expand' => 'Espandi tutto',
        ],

        'empty' => [
            'empty' => 'Ancora nessuna discussione!',
            'hidden' => 'Nessuna discussione coincide con il filtro selezionato.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Blocca discussione',
                'unlock' => 'Sblocca discussione',
            ],

            'prompt' => [
                'lock' => 'Motivo del blocco',
                'unlock' => 'Sei sicuro di voler sbloccare?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Questo post andrà nella discussione generale della Beatmap. Per moddare questa Beatmap, inizia il tuo messaggio con un timestamp (es. 00:12:345).',
            'in_timeline' => 'Per moddare più timestamp, posta più volte (un post per timestamp).',
        ],

        'message_placeholder' => [
            'general' => 'Scrivi qui per postare in Generale (:version)',
            'generalAll' => 'Scrivi qui per postare in Generale (Tutte le difficoltà)',
            'timeline' => 'Scrivi qui per postare nella Cronologia (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Squalifica',
            'hype' => 'Hype!',
            'mapper_note' => 'Nota',
            'nomination_reset' => 'Resetta Nomina',
            'praise' => 'Elogio',
            'problem' => 'Problema',
            'suggestion' => 'Suggerimento',
        ],

        'mode' => [
            'events' => 'Cronologia',
            'general' => ':scope generale',
            'timeline' => 'Linea Temporale',
            'scopes' => [
                'general' => 'Questa difficoltà',
                'generalAll' => 'Tutte le difficoltà',
            ],
        ],

        'new' => [
            'pin' => 'Fissa',
            'timestamp' => 'Timestamp',
            'timestamp_missing' => 'fai ctrl-c nell\'editor e incolla il tuo messaggio per aggiungere un timestamp!',
            'title' => 'Nuova Discussione',
            'unpin' => 'Rimuovi discussione fissata',
        ],

        'show' => [
            'title' => 'Discussione Beatmap',
        ],

        'sort' => [
            'created_at' => 'Data della creazione',
            'timeline' => 'Linea temporale',
            'updated_at' => 'Ultimo aggiornamento',
        ],

        'stats' => [
            'deleted' => 'Eliminato',
            'mapper_notes' => 'Note',
            'mine' => 'Mio',
            'pending' => 'In Attesa',
            'praises' => 'Elogi',
            'resolved' => 'Risolti',
            'total' => 'Tutto',
        ],

        'status-messages' => [
            'approved' => 'Questa beatmap è stata approvata il :date!',
            'graveyard' => "Questa beatmap non è stata aggiornata dal :date ed è stata molto probabilmente abbandonata dal creatore...",
            'loved' => 'Questa beatmap è stata approvata il :date!',
            'ranked' => 'Questa beatmap è stata classificata il :date!',
            'wip' => 'Nota: Questa beatmap è contrassegnata come un work-in-progress dal creatore.',
        ],

        'votes' => [
            'up' => 'Upvota questa discussione',
            'down' => 'Downvota questa discussione',
        ],
    ],

    'hype' => [
        'button' => 'Beatmap hype!',
        'button_done' => 'Già Hyped!',
        'confirm' => "Sei sicuro? Questo utilizzerà uno dei tuoi rimanenti :n hype e non può essere annullata.",
        'explanation' => 'Hype questo beatmap per renderla più visibile per nomina e posizione in graduatoria!',
        'explanation_guest' => 'Effettua l\'accesso e hype questa beatmap per renderla più visibile per la nomina e classificazione!',
        'new_time' => "Riceverai un altro hype :new_time.",
        'remaining' => 'Hai ancora :remaining hype rimanenti.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Hype Train',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Lascia un feedback',
    ],

    'nominations' => [
        'delete' => 'Elimina',
        'delete_own_confirm' => 'Sei sicuro? La beatmap verrà eliminata e sarai reindirizzato al tuo profilo.',
        'delete_other_confirm' => 'Sei sicuro? La beatmap verrà eliminata e sarai reindirizzato al profilo del creatore.',
        'disqualification_prompt' => 'Ragioni della squalifica?',
        'disqualified_at' => 'squalificata :time_ago',
        'disqualified_no_reason' => 'nessuna motivazione specificata',
        'disqualify' => 'Squalifica',
        'incorrect_state' => 'Errore nel eseguire quell\'azione, prova a ricaricare la pagina.',
        'love' => 'Ama',
        'love_confirm' => 'Ama questa beatmap?',
        'nominate' => 'Nomina',
        'nominate_confirm' => 'Nominare questa beatmap?',
        'nominated_by' => 'nominato da :users',
        'qualified' => 'La classificazione è prevista per il :date, se non viene trovato alcun problema.',
        'qualified_soon' => 'Sarà rankata a breve, se non viene trovato alcun problema.',
        'required_text' => 'Nomine: :current/:required',
        'reset_message_deleted' => 'eliminato',
        'title' => 'Stato nomine',
        'unresolved_issues' => 'Ci sono ancora dei problemi irrisolti che devono essere indirizzati prima.',

        'reset_at' => [
            'nomination_reset' => 'Azzeramento processo di nomina :tempo_fa da :utente con nuovo problema :discussione (:messaggio).',
            'disqualify' => 'Squalificato :time_ago da :user con il nuovo problema :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Sei sicuro? Postando un nuovo problema si resetterà il processo di nomina.',
            'disqualify' => 'Sei sicuro? Questo rimuoverà la beatmap dalla qualificazione e resetterà il processo di nomina.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'scrivi le parole chiave...',
            'login_required' => 'Accedi per effettuare una ricerca.',
            'options' => 'Più Opzioni di Ricerca',
            'supporter_filter' => 'Filtrare per :filters necessita di un tag supporter attivo',
            'not-found' => 'nessun risultato',
            'not-found-quote' => '... no, non abbiamo trovato nulla.',
            'filters' => [
                'general' => 'Generale',
                'mode' => 'Modalità',
                'status' => 'Categorie',
                'genre' => 'Genere',
                'language' => 'Lingua',
                'extra' => 'extra',
                'rank' => 'Rank ottenuto',
                'played' => 'Giocato',
            ],
            'sorting' => [
                'title' => 'Titolo',
                'artist' => 'Artista',
                'difficulty' => 'Difficoltà',
                'favourites' => 'Preferiti',
                'updated' => 'Aggiornato',
                'ranked' => 'Classificata',
                'rating' => 'Valutazione',
                'plays' => 'Giocate',
                'relevance' => 'Pertinenza',
                'nominations' => 'Candidature',
            ],
            'supporter_filter_quote' => [
                '_' => 'Filtrare tramite :filters necessita di una :link attiva',
                'link_text' => 'tag supporter',
            ],
        ],
    ],
    'general' => [
        'recommended' => 'Difficoltà raccomandata',
        'converts' => 'Includi beatmap convertite',
    ],
    'mode' => [
        'any' => 'Qualsiasi',
        'osu' => 'osu!',
        'taiko' => 'osu!taiko',
        'fruits' => 'osu!catch',
        'mania' => 'osu!mania',
    ],
    'status' => [
        'any' => 'Tutto',
        'approved' => 'Approvate',
        'favourites' => '',
        'graveyard' => 'Cimitero',
        'leaderboard' => '',
        'loved' => 'Amate',
        'mine' => '',
        'pending' => 'In Attesa & In Lavorazione',
        'qualified' => 'Qualificate',
        'ranked' => '',
    ],
    'genre' => [
        'any' => 'Qualsiasi',
        'unspecified' => 'Non specificato',
        'video-game' => 'Videogiochi',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Altro',
        'novelty' => 'Novità',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Elettronica',
    ],
    'mods' => [
        '4K' => '4K',
        '5K' => '5K',
        '6K' => '6K',
        '7K' => '7K',
        '8K' => '8K',
        '9K' => '9K',
        'AP' => 'Auto Pilot',
        'DT' => 'Double Time',
        'EZ' => 'Easy Mode',
        'FI' => 'Fade In',
        'FL' => 'Flashlight',
        'HD' => 'Hidden',
        'HR' => 'Hard Rock',
        'HT' => 'Half Time',
        'NC' => 'Nightcore',
        'NF' => 'No Fail',
        'NM' => 'Senza Mod',
        'PF' => 'Perfect',
        'Relax' => 'Relax',
        'SD' => 'Sudden Death',
        'SO' => 'Spun Out',
        'TD' => '',
    ],
    'language' => [
        'any' => 'Qualsiasi',
        'english' => 'Inglese',
        'chinese' => 'Cinese',
        'french' => 'Francese',
        'german' => 'Tedesco',
        'italian' => 'Italiano',
        'japanese' => 'Giapponese',
        'korean' => 'Coreano',
        'spanish' => 'Spagnolo',
        'swedish' => 'Svedese',
        'instrumental' => 'Strumentale',
        'other' => 'Altro',
    ],
    'played' => [
        'any' => 'Qualsiasi',
        'played' => 'Giocato',
        'unplayed' => 'Non giocato',
    ],
    'extra' => [
        'video' => 'Ha Video',
        'storyboard' => 'Ha Storyboard',
    ],
    'rank' => [
        'any' => 'Qualsiasi',
        'XH' => 'SS Argentata',
        'X' => 'SS',
        'SH' => 'S Argentata',
        'S' => 'S',
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ],
    'panel' => [
        'playcount' => 'Partite giocate :count',
        'favourites' => 'Preferiti :count',
    ],
];
