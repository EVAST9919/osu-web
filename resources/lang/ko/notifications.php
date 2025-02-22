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
    'all_read' => '모든 알림을 읽었어요!',
    'mark_all_read' => '모두 지우기',

    'item' => [
        'beatmapset' => [
            '_' => '비트맵',

            'beatmapset_discussion' => [
                '_' => '비트맵 토론',
                'beatmapset_discussion_lock' => '비트맵 ":title"의 토론이 잠겼습니다.',
                'beatmapset_discussion_lock_compact' => '토론이 잠겼습니다',
                'beatmapset_discussion_post_new' => ':username님이 ":title"의 비트맵 토론에 새로운 메시지를 게시했습니다.',
                'beatmapset_discussion_post_new_compact' => ':username 님의 새로운 게시글',
                'beatmapset_discussion_unlock' => '비트맵 ":title"의 토론이 잠금 해제되었습니다.',
                'beatmapset_discussion_unlock_compact' => '토론이 잠금 해제되었습니다',
            ],

            'beatmapset_state' => [
                '_' => '비트맵 상태 변경',
                'beatmapset_disqualify' => '비트맵 ":title" 이(가) :username님에 의해 disqualified 처리되었습니다.',
                'beatmapset_disqualify_compact' => '비트맵이 disqualified 처리 되었습니다',
                'beatmapset_love' => '비트맵 ":title" 이(가) :username님에 의해 Loved 상태로 진급되었습니다.',
                'beatmapset_love_compact' => '',
                'beatmapset_nominate' => '비트맵 ":title" 이(가) :username님에 의해 지명되었습니다.',
                'beatmapset_nominate_compact' => '',
                'beatmapset_qualify' => '비트맵 ":title" 이(가) 충분한 지명을 받았으므로 랭크맵 대기열에 등록되었습니다.',
                'beatmapset_qualify_compact' => '비트맵이 랭크맵 대기열에 등록되었습니다.',
                'beatmapset_rank' => '비트맵 ":title" 이(가) ranked 상태가 되었습니다.',
                'beatmapset_rank_compact' => '비트맵이 ranked 상태가 되었습니다.',
                'beatmapset_reset_nominations' => ':username님의 이슈 게시로 인해 비트맵 ":title"의 지명이 초기화되었습니다. ',
                'beatmapset_reset_nominations_compact' => '지명이 초기화되었습니다.',
            ],

            'comment' => [
                '_' => '새 댓글',

                'comment_new' => '',
                'comment_new_compact' => '',
            ],
        ],

        'channel' => [
            '_' => '채팅',

            'channel' => [
                '_' => '새 메시지',
                'pm' => [
                    'channel_message' => ':username 님이 ":title" 라고 하셨습니다',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => ':username 님으로 부터',
                ],
            ],
        ],

        'build' => [
            '_' => '변경 사항',

            'comment' => [
                '_' => '새 댓글',

                'comment_new' => ':username 님이 ":title" 에 ":content" 를 다셨습니다.',
                'comment_new_compact' => '',
            ],
        ],

        'news_post' => [
            '_' => '소식',

            'comment' => [
                '_' => '새 댓글',

                'comment_new' => '',
                'comment_new_compact' => '',
            ],
        ],

        'forum_topic' => [
            '_' => '포럼 주제',

            'forum_topic_reply' => [
                '_' => '새로운 포럼 답글',
                'forum_topic_reply' => ':username님이 포럼 주제 ":title"에 답글을 달았습니다.',
                'forum_topic_reply_compact' => ':username 님이 답글을 달았습니다.',
            ],
        ],

        'legacy_pm' => [
            '_' => '이전 포럼 PM',

            'legacy_pm' => [
                '_' => '',
                'legacy_pm' => ':count_delimited개의 미확인 메시지.',
            ],
        ],

        'user_achievement' => [
            '_' => '메달',

            'user_achievement_unlock' => [
                '_' => '새 메달',
                'user_achievement_unlock' => '":title" 해제!',
            ],
        ],
    ],
];
