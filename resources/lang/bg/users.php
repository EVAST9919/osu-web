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
    'deleted' => '[изтрит потребител]',

    'beatmapset_activities' => [
        'title' => "История на редактираните карти на :user",
        'title_compact' => 'Modding',

        'discussions' => [
            'title_recent' => 'Наскоро започнати дискусии',
        ],

        'events' => [
            'title_recent' => 'Последни събития',
        ],

        'posts' => [
            'title_recent' => 'Скорошни публикации',
        ],

        'votes_received' => [
            'title_most' => 'Най-харесваните от (последните 3 месеца)',
        ],

        'votes_made' => [
            'title_most' => 'Най-харесваните (последните 3 месеца)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Вие блокирахте този потребител.',
        'blocked_count' => 'блокирани потребители (:count)',
        'hide_profile' => 'Скрий профила',
        'not_blocked' => 'Този потребител не е блокиран.',
        'show_profile' => 'Покажи профила',
        'too_many' => 'Достигнат е лимита за блокиране.',
        'button' => [
            'block' => 'Блокирай',
            'unblock' => 'Отблокирай',
        ],
    ],

    'card' => [
        'loading' => 'Зареждане...',
        'send_message' => 'изпрати съобщението',
    ],

    'login' => [
        '_' => 'Вход',
        'locked_ip' => 'Вашият IP адрес е блокиран. Моля изчакайте няколко минути.',
        'username' => 'Потребителско име',
        'password' => 'Парола',
        'button' => 'Вход',
        'button_posting' => 'Влизане...',
        'remember' => 'Запомни ме на този компютър',
        'title' => 'Моля влезте в профила си, за да продължите',
        'failed' => 'Неправилен опит за влизане',
        'register' => "Нямате osu! акаунт? Направете си един",
        'forgot' => 'Забравихте си паролата?',
        'beta' => [
            'main' => 'Ранният достъп е ограничен само за привилегировани потребители.',
            'small' => '(osu!supporter ще има достъп скоро)',
        ],

        'here' => 'тук', // this is substituted in when generating a link above. change it to suit the language.
    ],

    'posts' => [
        'title' => 'публикациите на :username',
    ],

    'signup' => [
        '_' => 'Регистрация',
    ],
    'anonymous' => [
        'login_link' => 'щракнете, за да влезете',
        'login_text' => 'вход',
        'username' => 'Гост',
        'error' => 'Трябва да сте влезли в акаунта си, за да направите това.',
    ],
    'logout_confirm' => 'Сигурни ли сте, че искате да излезете от профила си? :(',
    'report' => [
        'button_text' => 'докладвай',
        'comments' => 'Допълнителни коментари',
        'placeholder' => 'Моля предоставете всякаква информация, която смятате, че ще бъде полезна.',
        'reason' => 'Причина',
        'thanks' => 'Благодаря ви, че докладвахте този профил!',
        'title' => 'Искате да докладвате :username?',

        'actions' => [
            'send' => 'Изпращане на доклад',
            'cancel' => 'Отмени',
        ],

        'options' => [
            'cheating' => 'Нечестна игра / Измама',
            'insults' => 'Обижда ме / други',
            'spam' => 'Спам',
            'unwanted_content' => 'Изпраща неприлично съдържание',
            'nonsense' => 'Безсмислици',
            'other' => 'Друго (посочете по-долу)',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Вашият профил е с ограничен статут!',
        'message' => 'Докато сте с ограничен статут, вие няма да можете да общувате с други играчи и изпълненията Ви ще бъдат видими само за вас. Това често е резултат от системата ни за автоматично засичане на измамници и статутът ще бъде премахнат до 24 часа. В противен случай сте добре дошли да обжалвате този статут като се свържете с <a href="mailto:accounts@ppy.sh"> поддръжка</a>.',
    ],
    'show' => [
        'age' => 'на :age години',
        'change_avatar' => 'променете аватара си!',
        'first_members' => 'Тук от началото',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Потребител от :date',
        'lastvisit' => 'Последно видян :date',
        'lastvisit_online' => 'В момента онлайн',
        'missingtext' => 'Вероятно сте допуснали правописна грешка! (или потребителят е бил баннат)',
        'origin_country' => 'От :country',
        'page_description' => 'osu! - Всичко, което би желал да знаеш за :username!',
        'previous_usernames' => 'някога известен като',
        'plays_with' => 'Играе с :devices',
        'title' => "профила на :username",

        'edit' => [
            'cover' => [
                'button' => 'Промяна на профилната корица',
                'defaults_info' => 'Повече опции за корици ще бъдат налични в бъдеще',
                'upload' => [
                    'broken_file' => 'Неуспешна обработка на изображението. Проверете каченото изображение и опитайте отново.',
                    'button' => 'Качи изображение',
                    'dropzone' => 'Пуснете файла тук, за да го качите',
                    'dropzone_info' => 'Можете също да пуснете вашето изображение тук за качване',
                    'restriction_info' => "Качване налично за <a href='".route('store.products.show', 'supporter-tag')."само за ' target='_blank'>osu!supporter</a>",
                    'size_info' => 'Размерът на корицата трябва да е 2800x620 пиксела',
                    'too_large' => 'Каченият файл е прекалено голям.',
                    'unsupported_format' => 'Неподдържан формат.',
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'стандартният режим на игра',
                'set' => 'задаване на :mode като стандартен режим на игра',
            ],
        ],

        'extra' => [
            'followers' => ':count_delimited последовател|:count_delimited последователи',
            'unranked' => 'Няма скорошни данни',

            'achievements' => [
                'achieved-on' => 'Постигнато на :date',
                'locked' => 'Заключенo',
                'title' => 'Постижения',
            ],
            'beatmaps' => [
                'by_artist' => 'от :artist',
                'none' => 'Няма... все още.',
                'title' => 'Бийтмапове',

                'favourite' => [
                    'title' => 'Любими бийтмапове',
                ],
                'graveyard' => [
                    'title' => 'Изоставени бийтмапове',
                ],
                'loved' => [
                    'title' => 'Обичани бийтмапове',
                ],
                'ranked_and_approved' => [
                    'title' => 'Класирани и одобрени бийтмапове',
                ],
                'unranked' => [
                    'title' => 'Предстоящи класиране бийтмапове',
                ],
            ],
            'historical' => [
                'empty' => 'Няма записани изпълнения. :(',
                'title' => 'Хронология',

                'monthly_playcounts' => [
                    'title' => 'Историята на игра',
                    'count_label' => 'Игри',
                ],
                'most_played' => [
                    'count' => 'пъти изиграно',
                    'title' => 'Най-играните бийтмапове',
                ],
                'recent_plays' => [
                    'accuracy' => 'прецизност: :percentage',
                    'title' => 'Скорошна активност (24 часа)',
                ],
                'replays_watched_counts' => [
                    'title' => 'История на гледани повторения',
                    'count_label' => 'Гледани повторения',
                ],
            ],
            'kudosu' => [
                'available' => 'Неизползвано Kudosu',
                'available_info' => "Kudosu може да се обменено за kudosu звезди, които ще ти помогнат на бийтмапа ти да получи повече внимание. Това е броят на kudosu, което все още не си обменил.",
                'recent_entries' => 'Скорошна Kudosu история',
                'title' => 'Kudosu!',
                'total' => 'Общо получено Kudosu',
                'total_info' => 'Въз основа на това колко този потребител е помогнал с редактирането на бийтмапове. Вижте <a href="'.osu_url('user.kudosu').'"> тази страница</a> за повече информация.',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "Този потребител все още няма kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Получено :amount от погрешно анулиране на kudosu на съобщение от :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Отхвърлено :amount от съобщение от :post',
                        ],

                        'delete' => [
                            'reset' => 'Изгубено :amount от изтриване на съобщение от :post',
                        ],

                        'restore' => [
                            'give' => 'Получено :amount от възобновяване на съобщение от :post',
                        ],

                        'vote' => [
                            'give' => 'Получено :amount от получените гласове на съобщение от :post',
                            'reset' => 'Загубено :amount от загубените гласове на съобщение от :post',
                        ],

                        'recalculate' => [
                            'give' => 'Получено :amount от прекалкулиране на гласовете на съобщение от :post',
                            'reset' => 'Загубено :amount от прекалкулиране на гласовете на съобщение от :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Получено :amount от :giver за публикацията :post',
                        'reset' => 'Нулиране на Kudosu от :giver за публикацията :post',
                        'revoke' => 'Отхвърлено Kudosu от :giver за публикацията :post',
                    ],
                ],
            ],
            'me' => [
                'title' => 'за мен!',
            ],
            'medals' => [
                'empty' => "Този потребител все още няма никакви! Т - Т",
                'recent' => 'Най-новите',
                'title' => 'Медали',
            ],
            'recent_activity' => [
                'title' => 'Скорошна активност',
            ],
            'top_ranks' => [
                'download_replay' => 'Изтегли повторението',
                'empty' => 'Все още няма страхотни изпълнения. :(',
                'not_ranked' => 'Само класираните бийтмапове дават pp точки.',
                'pp_weight' => 'с тежест :percentage',
                'title' => 'Класации',

                'best' => [
                    'title' => 'Най-добри резултати',
                ],
                'first' => [
                    'title' => 'Класации на първо място',
                ],
            ],
            'account_standing' => [
                'title' => 'Състояние на акаунта',
                'bad_standing' => "Акаунта на <strong>:username</strong> не е в добро състояние :(",
                'remaining_silence' => '<strong>:username</strong> ще бъде в състояние да говори отново след :duration.',

                'recent_infringements' => [
                    'title' => 'Скорошни нарушения',
                    'date' => 'дата',
                    'action' => 'действие',
                    'length' => 'продължителност',
                    'length_permanent' => 'Завинаги',
                    'description' => 'описание',
                    'actor' => 'от :username',

                    'actions' => [
                        'restriction' => 'Бан',
                        'silence' => 'Заглушен',
                        'note' => 'Бележка',
                    ],
                ],
            ],
        ],

        'header_title' => [
            '_' => 'Играч :info',
            'info' => 'Информация',
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Интереси',
            'lastfm' => 'Last.fm',
            'location' => 'Текущо местоположение',
            'occupation' => 'Занимание/Работа',
            'skype' => '',
            'twitter' => '',
            'website' => 'Уеб сайт',
        ],
        'not_found' => [
            'reason_1' => 'Този потребител вероятно си е променил името.',
            'reason_2' => 'Акаунтът вероятно е недостъпен по причини за сигурност или злоупотреба.',
            'reason_3' => 'Вероятно сте допуснали правописна грешка!',
            'reason_header' => 'Има няколко вероятни причини за това:',
            'title' => 'Не бе открит такъв потребител! Т - Т',
        ],
        'page' => [
            'button' => 'Редакция на профила',
            'description' => '<strong>за мен!</strong> е една персонализирана част от профилната ви страница.',
            'edit_big' => 'Редактирай ме!',
            'placeholder' => 'Въведи съдържанието на страницата тук',
            'restriction_info' => "Трябва да сте <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!supporter</a>, за да отключите тази функция.",
        ],
        'post_count' => [
            '_' => 'Приноси :link',
            'count' => ':count съобщение в форума|:count съобщения в форума',
        ],
        'rank' => [
            'country' => 'Класация на държавата за :mode',
            'country_simple' => 'Класиране в страната',
            'global' => 'Световна класация за :mode',
            'global_simple' => 'Глобално класиране',
        ],
        'stats' => [
            'hit_accuracy' => 'Прецизност на ударите',
            'level' => 'Ниво :level',
            'level_progress' => 'Прогрес до следващото ниво',
            'maximum_combo' => 'Максимално комбо',
            'medals' => 'Медали',
            'play_count' => 'Брой игри',
            'play_time' => 'Общо играно време',
            'ranked_score' => 'Общ класиран резултат',
            'replays_watched_by_others' => 'Брой гледания от повторения',
            'score_ranks' => 'Класации по брой точки',
            'total_hits' => 'Общ брой попадения',
            'total_score' => 'Общ брой точки',
        ],
    ],

    'status' => [
        'all' => 'Всички',
        'online' => 'Онлайн',
        'offline' => 'Офлайн',
    ],
    'store' => [
        'saved' => 'Потребител създаден',
    ],
    'verify' => [
        'title' => 'Потвърждение на акаунта',
    ],
];
