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
            'is_hype' => 'Δεν μπορείτε να αναιρέσετε το hype.',
            'has_reply' => 'Δεν μπορείτε να διαγράψετε τη συζήτηση με απαντήσεις',
        ],
        'nominate' => [
            'exhausted' => 'Έχετε φτάσει στο όριο των nomination για σήμερα, παρακαλώ προσπαθήστε ξανά αύριο.',
            'full_bn_required' => 'Πρέπει να είστε ένας πλήρης nominator για να επικυρώσετε αυτό το nomination.',
            'full_bn_required_hybrid' => 'Πρέπει να είστε ένας πλήρης nominator για να κάνετε nominate beatmap sets με περισσότερα από ένα game mode.',
            'incorrect_state' => 'Σφάλμα κατά την εκτέλεση αυτής της ενέργειας, δοκιμάστε να ανανεώσετε τη σελίδα.',
            'owner' => "Δεν μπορείτε να κάνετε nominate το δικό σας beatmap.",
        ],
        'resolve' => [
            'not_owner' => 'Μόνο οι δημιουργοί του thread και του beatmap μπορούν να επιλύσουν τη συζήτηση.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Μόνο ο ιδιοκτήτης ή κάποιος nominator/μέλος του QAT γκρουπ του beatmap μπορεί να δημοσιεύσει σημειώσεις τύπου mapper.',
        ],

        'vote' => [
            'limit_exceeded' => 'Παρακαλώ περιμένετε λίγο πριν ψηφίσετε ξανά',
            'owner' => "Δεν μπορείτε να ψηφίσετε τη δική σας συζήτηση.",
            'wrong_beatmapset_state' => 'Μπορείτε να ψηφίσετε μόνο σε συζήτηση των pending beatmap.',
        ],
    ],

    'beatmap_discussion_post' => [
        'edit' => [
            'system_generated' => 'Οι δημοσιεύσεις που έχουν δημιουργηθεί αυτόματα δεν μπορούν να επεξεργαστούν.',
            'not_owner' => 'Μόνο ο δημιουργός της δημοσίευσης μπορεί να την επεξεργαστεί.',
        ],
        'store' => [
            'beatmapset_locked' => 'Αυτό το beatmap είναι κλειδωμένο προς συζήτηση.',
        ],
    ],

    'chat' => [
        'blocked' => 'Αδυναμία αποστολής σε χρήστη που σας έχει ή έχετε αποκλείσει.',
        'friends_only' => 'Ο χρήστης αποκλείει μηνύματα απο άτομα εκτός της λίστας φίλων του.',
        'moderated' => 'Το κανάλι βρίσκεται υπό παρακολούθηση.',
        'no_access' => 'Δεν έχετε πρόσβαση σε αυτό το κανάλι.',
        'restricted' => 'Δεν μπορείτε να στείλετε μηνύματα ενώ είστε σιγασμένος, περιορισμένος ή απαγορευμένος.',
    ],

    'comment' => [
        'update' => [
            'deleted' => "Δεν μπορείτε να επεξεργαστείτε διαγραμμένη δημοσίευση.",
        ],
    ],

    'contest' => [
        'voting_over' => 'Δε μπορείτε να αλλάξετε την ψήφο σας αφού η περίοδος ψηφοφορίας γι\' αυτόν τον διαγωνισμό έχει τελειώσει.',
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Δεν έχει άδεια να εποπτεύσετε αυτό το φόρουμ.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Μόνο η τελευταία δημοσίευση μπορεί να διαγραφεί.',
                'locked' => 'Δεν μπορεί να διαγραφεί δημοσίευση κλειδωμένου θέματος.',
                'no_forum_access' => 'Απαιτείται πρόσβαση για το συγκεκριμένο φόρουμ.',
                'not_owner' => 'Μόνο ο δημιουργός της δημοσίευσης μπορεί να τη διαγράψει.',
            ],

            'edit' => [
                'deleted' => 'Δεν μπορείτε να επεξεργαστείτε διαγραμμένη δημοσίευση.',
                'locked' => 'Αυτή η δημοσίευση δεν μπορεί να επεξεργαστεί λόγω κλειδώματος.',
                'no_forum_access' => 'Απαιτείται πρόσβαση για το συγκεκριμένο φόρουμ.',
                'not_owner' => 'Μόνο ο δημιουργός της δημοσίευσης μπορεί να την επεξεργαστεί.',
                'topic_locked' => 'Δεν μπορείτε να επεξεργαστείτε post κλειδωμένου θέματος.',
            ],

            'store' => [
                'play_more' => 'Παρακαλώ παίξτε το παιχνίδι πριν δημοσιεύσετε στα φόρουμ! Αν έχετε πρόβλημα στο παιχνίδι, παρακαλώ γράψτε στο φόρουμ Βοήθεια και Υποστήριξη.',
                'too_many_help_posts' => "Πρέπει να παίξετε περισσότερο για να έχετε τη δυνατότητα να κάνετε περισσότερες αναρτήσεις. Αν εξακολουθείτε να αντιμετωπίζετε προβλήματα με το παιχνίδι, στείλτε μας email στο support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Παρακαλώ επεξεργαστείτε τη τελευταία σας δημοσίευση, αντί να αναρτήσετε ξανά.',
                'locked' => 'Δεν μπορείτε να απαντήσετε σε κλειδωμένο thread.',
                'no_forum_access' => 'Απαιτείται πρόσβαση για το συγκεκριμένο φόρουμ.',
                'no_permission' => 'Δεν έχετε την άδεια να απαντήσετε.',

                'user' => [
                    'require_login' => 'Παρακαλώ συνδεθείτε για να απαντήσετε.',
                    'restricted' => "Δε μπορείτε να απαντήσετε όταν είστε restricted.",
                    'silenced' => "Δε μπορείτε να απαντήσετε όταν είστε silenced.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Απαιτείται πρόσβαση για το συγκεκριμένο φόρουμ.',
                'no_permission' => 'Δεν έχετε την άδεια να δημιουργήσετε νέο θέμα.',
                'forum_closed' => 'Το φόρουμ είναι κλειστό και δε μπορείτε να δημοσιεύσετε σε αυτό.',
            ],

            'vote' => [
                'no_forum_access' => 'Απαιτείται πρόσβαση για το συγκεκριμένο φόρουμ.',
                'over' => 'Η ψηφοφορία έχει τερματιστεί και δε μπορείτε πλέον να ψηφίσετε.',
                'play_more' => 'Χρειάζεται να παίξετε παραπάνω πριν ψηφίσετε σε αυτό το forum.',
                'voted' => 'Δεν επιτρέπεται η αλλαγή ψήφου.',

                'user' => [
                    'require_login' => 'Παρακαλώ συνδεθείτε για να ψηφίσετε.',
                    'restricted' => "Δε μπορείτε να ψηφίσετε όταν είστε restricted.",
                    'silenced' => "Δε μπορείτε να ψηφίσετε όταν είστε silenced.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Απαιτείται πρόσβαση για το συγκεκριμένο φόρουμ.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Καθορίσατε μη έγκυρο εξώφυλλο.',
                'not_owner' => 'Μόνο ο ιδιοκτήτης μπορεί να επεξεργαστεί το εξώφυλλο.',
            ],
            'store' => [
                'forum_not_allowed' => '',
            ],
        ],

        'view' => [
            'admin_only' => 'Μόνο οι διαχειριστές μπορούν να δούν αυτό το φόρουμ.',
        ],
    ],

    'require_login' => 'Παρακαλώ συνδεθείτε για να συνεχίσετε.',

    'unauthorized' => 'Απαγορεύεται η πρόσβαση.',

    'silenced' => "Δε μπορείτε να το κάνετε αυτό όσο είστε silenced.",

    'restricted' => "Δε μπορείτε να το κάνετε αυτό όσο είστε restricted.",

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Το userpage είναι κλειδωμένο.',
                'not_owner' => 'Μπορείτε να επεξεργαστείτε μόνο το δικό σας userpage.',
                'require_supporter_tag' => 'απαιτείται osu!supporter tag.',
            ],
        ],
    ],
];
