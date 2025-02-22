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
            'error' => 'Viestin tallentaminen epäonnistui',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Äänen päivitys ei onnistunut',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'salli kudosu',
        'delete' => 'poista',
        'deleted' => 'Poistanut :editor :delete_time.',
        'deny_kudosu' => 'hylkää kudosu',
        'edit' => 'muokkaa',
        'edited' => 'Viimeksi muokannut :editor :update_time.',
        'kudosu_denied' => 'Evätty saamasta kudosua.',
        'message_placeholder_deleted_beatmap' => 'Tämä vaikeustaso on poistettu, joten siitä ei voi enää keskustella.',
        'message_placeholder_locked' => 'Keskustelu tällä beatmapille on poistettu käytöstä.',
        'message_type_select' => 'Valitse kommentin tyyppi',
        'reply_notice' => 'Vastaa painamalla enter-näppäintä.',
        'reply_placeholder' => 'Kirjoita vastauksesi tähän',
        'require-login' => 'Kirjaudu sisään lähettääksesi viestejä tai vastauksia',
        'resolved' => 'Ratkaistu',
        'restore' => 'palauta',
        'show_deleted' => 'Näytä poistetut',
        'title' => 'Keskustelut',

        'collapse' => [
            'all-collapse' => 'Sulje kaikki',
            'all-expand' => 'Avaa kaikki',
        ],

        'empty' => [
            'empty' => 'Keskustelut puuttuu!',
            'hidden' => 'Yksikään keskusteluista ei täsmää hakuehtoihisi.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Lukitse keskustelu',
                'unlock' => 'Avaa keskustelu',
            ],

            'prompt' => [
                'lock' => 'Syy lukitsemiseen',
                'unlock' => '',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Tämä viesti menee beatmapin yleiseen keskusteluun. Modataksesi tätä beatmappia, aloita viestisi aikaleimalla (esim. 00:12:345).',
            'in_timeline' => 'Modataksesi useampia aikaleimoja, lähetä useampi viesti (yksi viesti per aikaleima).',
        ],

        'message_placeholder' => [
            'general' => 'Kirjoita tähän lähettääksesi viestin Yleiseen (:version)',
            'generalAll' => 'Kirjoita tähän lähettääksesi viestin Yleiseen (Kaikki vaikeustasot)',
            'timeline' => 'Kirjoita tähän lähettääksesi viestin Aikajanalle (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Hylkää',
            'hype' => 'Hurraus!',
            'mapper_note' => 'Huomautus',
            'nomination_reset' => 'Nollaa Suositus',
            'praise' => 'Kehu',
            'problem' => 'Ongelma',
            'suggestion' => 'Ehdotus',
        ],

        'mode' => [
            'events' => 'Historia',
            'general' => 'Yleinen :scope',
            'timeline' => 'Aikajana',
            'scopes' => [
                'general' => 'Tämä vaikeustaso',
                'generalAll' => 'Kaikki vaikeustasot',
            ],
        ],

        'new' => [
            'pin' => 'Kiinnitä',
            'timestamp' => 'Aikaleima',
            'timestamp_missing' => 'Paina ctrl-c editointitilassa ja liitä viestiisi lisätäksesi aikaleiman!',
            'title' => 'Uusi keskustelu',
            'unpin' => '',
        ],

        'show' => [
            'title' => ':title, luonut :mapper',
        ],

        'sort' => [
            'created_at' => 'Luomisaika',
            'timeline' => 'Aikajana',
            'updated_at' => 'Viimeisin päivitys',
        ],

        'stats' => [
            'deleted' => 'Poistettu',
            'mapper_notes' => 'Huomautukset',
            'mine' => 'Omat',
            'pending' => 'Vireillä',
            'praises' => 'Kehut',
            'resolved' => 'Ratkaistu',
            'total' => 'Kaikki',
        ],

        'status-messages' => [
            'approved' => 'Tämä beatmappi hyväksyttiiin :date!',
            'graveyard' => "Tätä beatmappia ei ole päivitetty sitten :date ja sen tekijä on todennäköisesti hylännyt sen...",
            'loved' => 'Tämä beatmap lisättiin Rakastettuihin :date!',
            'ranked' => 'Tämä beatmap hyväksyttiin :date!',
            'wip' => 'Huomaa: Tämän beatmapin tekijä on merkannut sen keskeneräiseksi.',
        ],

        'votes' => [
            'up' => '',
            'down' => '',
        ],
    ],

    'hype' => [
        'button' => 'Hurraa Beatmappia!',
        'button_done' => 'Hurrasit Jo!',
        'confirm' => "Oletko varma? Tämä toiminto käyttää yhden jäljelläolevista hurrauspisteistä eikä se ole peruutettavissa. Hurrauksia jäljellä :n.",
        'explanation' => 'Hurraa tätä beatmappia tuodaksesi sille näkyvyyttä suositusta- ja hyväksymistä varten!',
        'explanation_guest' => 'Kirjaudu sisään ja hurraa tätä beatmappia tuodaksesi sille näkyvyyttä suositusta- ja hyväksymistä varten!',
        'new_time' => "Saat uuden hurrauksen :new_time.",
        'remaining' => 'Sinulla on :remaining hurrausta jäljellä.',
        'required_text' => 'Hurraukset: :current/:required',
        'section_title' => 'Hurrausjuna',
        'title' => 'Hurraukset',
    ],

    'feedback' => [
        'button' => 'Jätä Palautetta',
    ],

    'nominations' => [
        'delete' => 'Poista',
        'delete_own_confirm' => 'Oletko varma? Tämä beatmap poistetaan ja sinut uudelleenohjataan takaisin profiiliisi.',
        'delete_other_confirm' => 'Oletko varma? Tämä beatmap poistetaan ja sinut uudelleenohjataan käyttäjän profiiliin.',
        'disqualification_prompt' => 'Hylkäyksen syy?',
        'disqualified_at' => 'Hylättiin :time_ago sitten (:reason).',
        'disqualified_no_reason' => 'ei määriteltyä syytä',
        'disqualify' => 'Hylkää',
        'incorrect_state' => 'Virhe toiminnon suorittamisessa, kokeile päivittää sivu.',
        'love' => 'Rakasta',
        'love_confirm' => 'Rakasta tätä beatmappia?',
        'nominate' => 'Suosittele',
        'nominate_confirm' => 'Suosittele tätä beatmappia?',
        'nominated_by' => 'suositellut :users',
        'qualified' => 'Arvioidaan hyväksyttävän :date, mikäli ongelmia ei löydy.',
        'qualified_soon' => 'Arvioidaan hyväksyttävän pian, mikäli ongelmia ei löydy.',
        'required_text' => 'Suositukset: :current/:required',
        'reset_message_deleted' => 'poistettu',
        'title' => 'Suositusten Tila',
        'unresolved_issues' => 'Vanhat ongelmat on ratkaistava ensin.',

        'reset_at' => [
            'nomination_reset' => 'Suositteluprosessi nollaantui :time_ago sitten käyttäjän :user uuden ongelman vuoksi :discussion (:message).',
            'disqualify' => 'Hyväksyminen peruuntui :time_ago sitten käyttäjän :user uuden ongelman vuoksi :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Oletko varma? Uuden ongelman lähettäminen kumoaa suositusprosessin.',
            'disqualify' => 'Oletko varma? Tämä poistaa beatmapin esihyväksytyistä ja kumoaa suositusprosessin.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'anna hakusana...',
            'login_required' => 'Kirjaudu sisään hakeaksesi.',
            'options' => 'Enemmän Hakuasetuksia',
            'supporter_filter' => 'Tunnisteella :filters rajaaminen vaatii aktiivisen osu!supporter-tagin',
            'not-found' => 'ei tuloksia',
            'not-found-quote' => '... mitään ei löytynyt.',
            'filters' => [
                'general' => 'Yleinen',
                'mode' => 'Pelitila',
                'status' => 'Luokat',
                'genre' => 'Tyylilaji',
                'language' => 'Kieli',
                'extra' => 'extra',
                'rank' => 'Luokitus',
                'played' => 'Pelatut',
            ],
            'sorting' => [
                'title' => 'Nimi',
                'artist' => 'Esittäjä',
                'difficulty' => 'Vaikeustaso',
                'favourites' => 'Suosikit',
                'updated' => 'Päivitetty',
                'ranked' => 'Hyväksytty',
                'rating' => 'Luokitus',
                'plays' => 'Pelikerrat',
                'relevance' => 'Osuvuus',
                'nominations' => 'Äänestykset',
            ],
            'supporter_filter_quote' => [
                '_' => 'Rajataksesi tunnisteella :filters sinulla on oltava aktiivinen :link',
                'link_text' => 'osu!supporter-tagi',
            ],
        ],
    ],
    'general' => [
        'recommended' => 'Suositeltu vaikeustaso',
        'converts' => 'Sisällytä muunnetut beatmapit',
    ],
    'mode' => [
        'any' => 'Kaikki',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Kaikki',
        'approved' => 'Vahvistettu',
        'favourites' => '',
        'graveyard' => 'Hautausmaa',
        'leaderboard' => '',
        'loved' => 'Rakastettu',
        'mine' => '',
        'pending' => 'Vireillä & WIP',
        'qualified' => 'Esihyväksytty',
        'ranked' => '',
    ],
    'genre' => [
        'any' => 'Kaikki',
        'unspecified' => 'Määrittelemätön',
        'video-game' => 'Videopeli',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Muu',
        'novelty' => 'Epätavallinen',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Elektroninen',
    ],
    'mods' => [
        '4K' => '',
        '5K' => '',
        '6K' => '',
        '7K' => '',
        '8K' => '',
        '9K' => '',
        'AP' => '',
        'DT' => '',
        'EZ' => '',
        'FI' => '',
        'FL' => '',
        'HD' => '',
        'HR' => '',
        'HT' => '',
        'NC' => '',
        'NF' => '',
        'NM' => '',
        'PF' => '',
        'Relax' => '',
        'SD' => '',
        'SO' => '',
        'TD' => '',
    ],
    'language' => [
        'any' => '',
        'english' => 'englanti',
        'chinese' => 'kiina',
        'french' => 'ranska',
        'german' => 'saksa',
        'italian' => 'italia',
        'japanese' => 'japani',
        'korean' => 'korea',
        'spanish' => 'espanja',
        'swedish' => 'ruotsi',
        'instrumental' => 'Instrumentaalinen',
        'other' => 'Muu',
    ],
    'played' => [
        'any' => 'Kaikki',
        'played' => 'Pelatut',
        'unplayed' => 'Pelaamaton',
    ],
    'extra' => [
        'video' => 'Videollinen',
        'storyboard' => 'Sisältää visuaalisen taustaesityksen',
    ],
    'rank' => [
        'any' => 'Kaikki',
        'XH' => 'Hopea SS',
        'X' => '',
        'SH' => 'Hopea S',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Pelikerrat :count',
        'favourites' => 'Suosikit :count',
    ],
];
