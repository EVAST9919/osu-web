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
    'all_read' => 'Alle meldingen gelezen!',
    'mark_all_read' => 'Alles wissen',

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmap',

            'beatmapset_discussion' => [
                '_' => 'Beatmap discussies',
                'beatmapset_discussion_lock' => 'Beatmap ":title" is vergrendeld voor discussie.',
                'beatmapset_discussion_lock_compact' => '',
                'beatmapset_discussion_post_new' => ':username plaatste een nieuw bericht in ":title" beatmap discussie.',
                'beatmapset_discussion_post_new_compact' => '',
                'beatmapset_discussion_unlock' => 'Beatmap ":title" is ontgrendeld voor discussie.',
                'beatmapset_discussion_unlock_compact' => '',
            ],

            'beatmapset_state' => [
                '_' => 'Beatmap status gewijzigd',
                'beatmapset_disqualify' => 'Beatmap ":title" is gediskwalificeerd door :username.',
                'beatmapset_disqualify_compact' => '',
                'beatmapset_love' => 'Beatmap ":title" is gepromoveerd tot loved door :username.',
                'beatmapset_love_compact' => '',
                'beatmapset_nominate' => 'Beatmap ":title" is genomineerd door :username.',
                'beatmapset_nominate_compact' => '',
                'beatmapset_qualify' => 'Beatmap ":title" heeft genoeg nominaties en is dus in de rij gezet voor de ranked sectie.',
                'beatmapset_qualify_compact' => '',
                'beatmapset_rank' => '',
                'beatmapset_rank_compact' => '',
                'beatmapset_reset_nominations' => 'Probleem geplaatst door :username reset nominatie van beatmap ":title" ',
                'beatmapset_reset_nominations_compact' => '',
            ],

            'comment' => [
                '_' => '',

                'comment_new' => '',
                'comment_new_compact' => '',
            ],
        ],

        'channel' => [
            '_' => '',

            'channel' => [
                '_' => '',
                'pm' => [
                    'channel_message' => '',
                    'channel_message_compact' => '',
                    'channel_message_group' => '',
                ],
            ],
        ],

        'build' => [
            '_' => '',

            'comment' => [
                '_' => '',

                'comment_new' => '',
                'comment_new_compact' => '',
            ],
        ],

        'news_post' => [
            '_' => '',

            'comment' => [
                '_' => '',

                'comment_new' => '',
                'comment_new_compact' => '',
            ],
        ],

        'forum_topic' => [
            '_' => 'Forum onderwerp',

            'forum_topic_reply' => [
                '_' => 'Nieuw forum antwoord',
                'forum_topic_reply' => ':username antwoordde op forumonderwerp ":title".',
                'forum_topic_reply_compact' => '',
            ],
        ],

        'legacy_pm' => [
            '_' => 'Ouder Forum PM',

            'legacy_pm' => [
                '_' => '',
                'legacy_pm' => ':count_delimited ongelezen bericht.|:count_delimited berichten.',
            ],
        ],

        'user_achievement' => [
            '_' => '',

            'user_achievement_unlock' => [
                '_' => '',
                'user_achievement_unlock' => '',
            ],
        ],
    ],
];
