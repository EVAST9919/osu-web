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
    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'Không thể hủy bỏ hype.',
            'has_reply' => 'Không thể xóa cuộc thảo luận có trả lời trong đó',
        ],
        'nominate' => [
            'exhausted' => 'Bạn đã đạt giới hạn số lần đề cử của hôm nay, hãy thử lại vào ngày mai.',
            'full_bn_required' => 'Bạn phải là người đề cử beatmap để thực hiện hành động này.',
            'full_bn_required_hybrid' => 'Bạn phải là người đề cử beatmap để đề cử các set beatmap có nhiều hơn một chế độ chơi.',
            'incorrect_state' => 'Có lỗi khi thực hiện, hãy thử tải lại trang.',
            'owner' => "Bạn không thể đề cử beatmap của bạn.",
        ],
        'resolve' => [
            'not_owner' => 'Chỉ có người mở thread và chủ beatmap mới có thể đánh dấu cuộc thảo luận là đã được giải quyết.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Chỉ chủ beatmap hoặc người đề cử beatmap/thành viên của NAT mới có thể đăng ghi chú.',
        ],

        'vote' => [
            'limit_exceeded' => 'Vui lòng đợi một lúc trước khi bình chọn thêm',
            'owner' => "Không thể bình chọn cuộc thảo luận của bạn.",
            'wrong_beatmapset_state' => 'Chỉ có thể bình chọn cuộc thảo luận của beatmap ở trạng thái pending.',
        ],
    ],

    'beatmap_discussion_post' => [
        'edit' => [
            'system_generated' => 'Không thể chỉnh sửa bài đăng được tạo tự động.',
            'not_owner' => 'Bài đăng chỉ có thể được chỉnh sửa bởi người đăng.',
        ],
        'store' => [
            'beatmapset_locked' => 'Thảo luận bị khóa cho beatmap này.',
        ],
    ],

    'chat' => [
        'blocked' => 'Không thể nhắn tin cho người dùng đã chặn bạn hoặc nếu bạn đã chặn người đó.',
        'friends_only' => 'Người dùng này đang chặn tin nhắn từ những người không trong danh sách bạn của họ.',
        'moderated' => 'Kênh hiện đang được kiểm duyệt.',
        'no_access' => 'Bạn không có quyền truy cập vào kênh này.',
        'restricted' => 'Bạn không thể gửi tin nhắn trong khi bị silenced, bị hạn chế hoặc bị cấm (ban).',
    ],

    'comment' => [
        'update' => [
            'deleted' => "Không thể chỉnh sửa bài đăng đã bị xóa.",
        ],
    ],

    'contest' => [
        'voting_over' => 'Bạn không thể đổi phiếu bầu sau khi giai đoạn bầu chọn của cuộc thi này kết thúc.',
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Bạn không có quyền chỉnh sửa forum này.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Chỉ có thể xóa bài đăng cuối cùng.',
                'locked' => 'Không thể xóa bài đăng của một topic bị khóa.',
                'no_forum_access' => 'Yêu cầu quyền truy cập vào forum mong muốn.',
                'not_owner' => 'Chỉ người đăng mới có thể xóa bài đăng.',
            ],

            'edit' => [
                'deleted' => 'Không thể chỉnh sửa bài đăng đã bị xóa.',
                'locked' => 'Bài đăng đã bị khóa chỉnh sửa.',
                'no_forum_access' => 'Yêu cầu quyền truy cập vào forum mong muốn.',
                'not_owner' => 'Chỉ có người đăng mới có thể chỉnh sửa bài đăng.',
                'topic_locked' => 'Không thể chỉnh sửa bài đăng của một chủ đề bị khóa.',
            ],

            'store' => [
                'play_more' => 'Vui lòng thử chơi game này trước khi đăng bài lên diễn đàn! Nếu bạn gặp vấn đề khi chơi, Vui lòng đăng bài lên diễn đàn Trợ Giúp và Hỗ Trợ (Help and Support).',
                'too_many_help_posts' => "Bạn cần phải chơi game này nhiều hơn trước khi bạn tạo thêm bài đăng. Nếu bạn vẫn còn gặp vấn đề khi chơi game, hãy gửi email tới địa chỉ support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Vui lòng chỉnh sửa bài đăng cuối cùng của bạn thay vì đăng thêm lần nữa.',
                'locked' => 'Không thể trả lời một thread bị khóa.',
                'no_forum_access' => 'Yêu cầu quyền truy cập vào forum mong muốn.',
                'no_permission' => 'Không có quyền trả lời.',

                'user' => [
                    'require_login' => 'Vui lòng đăng nhập để trả lời.',
                    'restricted' => "Không thể trả lời trong khi bị hạn chế.",
                    'silenced' => "Không thể trả lời trong khi bị im lặng.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Yêu cầu quyền truy cập vào forum mong muốn.',
                'no_permission' => 'Không có quyền tạo topic mới.',
                'forum_closed' => 'Forum này đã bị đóng và không thể đăng thêm bài.',
            ],

            'vote' => [
                'no_forum_access' => 'Yêu cầu quyền truy cập vào forum mong muốn.',
                'over' => 'Đã kết thúc bỏ phiếu và không thể bình chọn nữa.',
                'play_more' => 'Bạn cần chơi nhiều hơn trước khi bỏ phiếu trên diễn đàn.',
                'voted' => 'Không cho phép đổi phiếu bầu.',

                'user' => [
                    'require_login' => 'Vui lòng đăng nhập để bình chọn.',
                    'restricted' => "Không thể bình chọn trong khi bị hạn chế",
                    'silenced' => "Không thể bình chọn khi im lặng",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Yêu cầu quyền truy cập vào forum mong muốn.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Ảnh bìa đã chỉ định không hợp lệ.',
                'not_owner' => 'Chỉ có người đăng mới có thể chỉnh sửa ảnh bìa.',
            ],
            'store' => [
                'forum_not_allowed' => 'Forum này không chấp thuận topic cover.',
            ],
        ],

        'view' => [
            'admin_only' => 'Chỉ có admin mới có thể xem diễn đàn này.',
        ],
    ],

    'require_login' => 'Vui lòng đăng nhập để tiếp tục.',

    'unauthorized' => 'Truy cập bị từ chối.',

    'silenced' => "Không thể làm việc đó trong khi bị cấm nói.",

    'restricted' => "Không thể làm việc đó trong khi bị hạn chế.",

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Trang người dùng này đã bị khóa.',
                'not_owner' => 'Chỉ có thể chỉnh sửa trang người dùng của bạn.',
                'require_supporter_tag' => 'phải có osu!supporter.',
            ],
        ],
    ],
];
