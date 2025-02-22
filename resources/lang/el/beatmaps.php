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
            'error' => 'Αποτυχία αποθήκευσης δημοσίευσης',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Αποτυχία ενημέρωσης ψήφων',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'επίτρεψε kudosu',
        'delete' => 'διαγραφή',
        'deleted' => 'Διαγράφηκε από :editor :delete_time.',
        'deny_kudosu' => 'αρνήσου kudosu',
        'edit' => 'επεξεργασία',
        'edited' => 'Τελευταία επεξεργασία από: :editor :update_time.',
        'kudosu_denied' => 'Αδύνατη η απόκτηση kudosu.',
        'message_placeholder_deleted_beatmap' => 'Η δυσκολία αυτή έχει διαγραφεί για αυτό δεν συζητιέται πλέον.',
        'message_placeholder_locked' => 'Η συζήτηση για αυτό το beatmap έχει απενεργοποιηθεί.',
        'message_type_select' => 'Επιλέξτε Τύπο Σχολίου',
        'reply_notice' => 'Πατήστε enter για να απαντήσετε.',
        'reply_placeholder' => 'Πληκτρολογήστε την απάντησή σας εδώ',
        'require-login' => 'Παρακαλώ συνδεθείτε για να δημοσιεύσετε ή να απαντήσετε',
        'resolved' => 'Επιλύθηκε',
        'restore' => 'επαναφορά',
        'show_deleted' => 'Εμφάνιση διαγραμμένου',
        'title' => 'Συζητήσεις',

        'collapse' => [
            'all-collapse' => 'Σύμπτηξη όλων',
            'all-expand' => 'Ανάπτυξη όλων',
        ],

        'empty' => [
            'empty' => 'Καμία συζήτηση ακόμα!',
            'hidden' => 'Καμία συζήτηση δεν ταιριάζει με το φίλτρο.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Κλείδωμα συζήτησης',
                'unlock' => 'Ξεκλείδωμα συζήτησης',
            ],

            'prompt' => [
                'lock' => 'Λόγος κλειδώματος',
                'unlock' => 'Είστε σίγουρος ότι θέλετε να το ξεκλειδώσετε;',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Αυτή η δημοσίευση θα πάει στη γενική συζήτηση beatmap. Για να κάνετε μία πρόταση για αυτό το beatmap, ξεκινήστε το μήνυμά σας με μία χρονική σήμανση (π.χ. 00:12:345).',
            'in_timeline' => 'Για να κάνετε πολλαπλές προτάσεις ταυτόχρονα, δημοσιεύστε πολλές φορές (μία δημοσίευση ανά χρονική σήμανση).',
        ],

        'message_placeholder' => [
            'general' => 'Πληκτρολογήστε εδώ για να δημοσιεύσετε στο General (:version)',
            'generalAll' => 'Πληκτρολογήστε εδώ για να δημοσιεύσετε στο General (όλες τις δυσκολίες)',
            'timeline' => 'Πληκτρολογήστε εδώ για να δημοσιεύσετε στο Χρονολόγιο (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Ορισμός ως ακατάλληλου',
            'hype' => 'Πάμε ρε!',
            'mapper_note' => 'Σημείωση',
            'nomination_reset' => 'Αλλαγή Υποψηφιότητας',
            'praise' => 'Έπαινος',
            'problem' => 'Πρόβλημα',
            'suggestion' => 'Πρόταση',
        ],

        'mode' => [
            'events' => 'Ιστορικό',
            'general' => 'Γενικά :scope',
            'timeline' => 'Χρονολόγιο',
            'scopes' => [
                'general' => 'Αυτή η δυσκολία',
                'generalAll' => 'Όλες οι δυσκολίες',
            ],
        ],

        'new' => [
            'pin' => 'Καρφίτσωμα',
            'timestamp' => 'Χρονική σήμανση',
            'timestamp_missing' => 'Ctrl + C στη λειτουργία τροποποίησης και επικολλήστε στο μήνυμα σας για να προσθέσετε μία χρονική σήμανση!',
            'title' => 'Νέα Συζήτηση',
            'unpin' => 'Ξεκαρφίτσωμα',
        ],

        'show' => [
            'title' => ':title δημιουργήθηκε από :mapper',
        ],

        'sort' => [
            'created_at' => 'Ημερομηνία δημιουργίας',
            'timeline' => 'Χρονολόγιο',
            'updated_at' => 'Τελευταία ενημέρωση',
        ],

        'stats' => [
            'deleted' => 'Διαγράφηκε',
            'mapper_notes' => 'Σημειώσεις',
            'mine' => 'Δικό μου',
            'pending' => 'Pending',
            'praises' => 'Έπαινοι',
            'resolved' => 'Επιλύθηκε',
            'total' => 'Όλα',
        ],

        'status-messages' => [
            'approved' => 'Αυτό το beatmap έγινε approved στις :date!',
            'graveyard' => "Αυτό το beatmap δεν έχει ενημερωθεί από τις :date και έχει πιθανότατα εγκαταλειφθεί από το δημιουργό του...",
            'loved' => 'Αυτό το beatmap προστέθηκε στα loved στις :date!',
            'ranked' => 'Αυτό το beatmap έγινε ranked στις :date!',
            'wip' => 'Σημείωση: Αυτό το beatmap χαρακτηρίζεται ως έργο-σε-εξέλιξη από τον δημιουργό.',
        ],

        'votes' => [
            'up' => 'Κάντε upvote αυτήν τη συζήτηση',
            'down' => 'Κάντε downvote αυτήν τη συζήτηση',
        ],
    ],

    'hype' => [
        'button' => 'Hype Beatmap!',
        'button_done' => 'Ήδη Hyped!',
        'confirm' => "Είστε σίγουροι; Αυτό θα χρησιμοποιήσει ένα από τα υπολειπόμενα :n hype σας και δεν μπορεί να αναιρεθεί.",
        'explanation' => 'Δώστε hype σε αυτό το beatmap για να το κάνετε περισσότερο ορατό για την υποψηφιότητα και την κατάταξη!',
        'explanation_guest' => 'Συνδεθείτε και δώστε hype σε αυτό το beatmap για να το κάνετε περισσότερο ορατό για την υποψηφιότητα και την κατάταξη!',
        'new_time' => "Θα πάρετε άλλο hype :new_time.",
        'remaining' => 'Έχετε :remaining ακόμα hype.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Hype Τρένο',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Αφήστε Σχόλια',
    ],

    'nominations' => [
        'delete' => 'Διαγραφή',
        'delete_own_confirm' => 'Είστε σίγουρος; Το beatmap θα διαγραφεί και θα ανακατευθυνθείτε πίσω στο προφίλ σας.',
        'delete_other_confirm' => 'Είστε σίγουρος; Το beatmap θα διαγραφεί και θα ανακατευθυνθείτε πίσω στο προφίλ του χρήστη.',
        'disqualification_prompt' => 'Λόγος αποκλεισμού;',
        'disqualified_at' => 'Disqualified :time_ago (:reason).',
        'disqualified_no_reason' => 'δεν έχει καθοριστεί κάποιος λόγος',
        'disqualify' => 'Απόκλεισε',
        'incorrect_state' => 'Σφάλμα κατά την εκτέλεση αυτής της ενέργειας, δοκιμάστε να ανανεώσετε τη σελίδα.',
        'love' => 'Love',
        'love_confirm' => 'Αγαπάτε αυτό το beatmap;',
        'nominate' => 'Nominate',
        'nominate_confirm' => 'Κάντε nominate αυτό το beatmap;',
        'nominated_by' => 'nominated από :users',
        'qualified' => 'Εκτιμάται ότι θα γίνει ranked στις :date, εάν δεν βρεθεί κάποιο πρόβλημα.',
        'qualified_soon' => 'Εκτιμάται ότι θα γίνει ranked σύντομα, εάν δεν βρεθεί κάποιο πρόβλημα.',
        'required_text' => 'Υποψηφιότητες :current/:required',
        'reset_message_deleted' => 'διαγράφηκε',
        'title' => 'Κατάσταση Υποψηφιότητας',
        'unresolved_issues' => 'Εξακολουθούν να υπάρχουν άλυτα ζητήματα που πρέπει να αντιμετωπιστούν πρώτα.',

        'reset_at' => [
            'nomination_reset' => 'Επαναφορά διεργασίας υποψηφιότητας :time_ago από :user με νέο πρόβλημα :discussion (:message).',
            'disqualify' => 'Disqualified :time_ago από :user με νέο πρόβλημα :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Είστε σίγουροι; Η δημοσίευση ενός νέου προβλήματος θα επανεκκινήσει την διαδικασία υποψηφιότητας.',
            'disqualify' => 'Είστε σίγουρος; Αυτό θα αφαιρέσει το beatmap απο τα προκριματικά και θα επαναφέρει την διαδικασία πιστοποίησης.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'πληκτρολογήστε λέξεις-κλειδιά...',
            'login_required' => 'Συνδεθείτε για να αναζητήσετε.',
            'options' => 'Περισσότερες Επιλογές Αναζήτησης',
            'supporter_filter' => 'Το φιλτράρισμα βάσει :filters απαιτεί ένα ενεργό osu!supporter tag',
            'not-found' => 'κανένα αποτέλεσμα',
            'not-found-quote' => '... όχι, τίποτα δεν βρέθηκε.',
            'filters' => [
                'general' => 'Γενικά',
                'mode' => 'Mode',
                'status' => 'Κατηγορίες',
                'genre' => 'Είδος',
                'language' => 'Γλώσσα',
                'extra' => 'επιπλέον',
                'rank' => 'Κατάκτηση Κατάταξης',
                'played' => 'Που έχετε παίξει',
            ],
            'sorting' => [
                'title' => 'Τίτλος',
                'artist' => 'Καλλιτέχνης',
                'difficulty' => 'Δυσκολία',
                'favourites' => 'Αγαπημένα',
                'updated' => 'Ενημερώθηκε',
                'ranked' => 'Ranked',
                'rating' => 'Βαθμολογία',
                'plays' => 'Προσπάθειες',
                'relevance' => 'Συνάφεια',
                'nominations' => 'Nominations',
            ],
            'supporter_filter_quote' => [
                '_' => 'Το φιλτράρισμα κατά :filters απαιτεί ένα ενεργό :link',
                'link_text' => 'osu!supporter tag',
            ],
        ],
    ],
    'general' => [
        'recommended' => 'Προτεινόμενη δυσκολία',
        'converts' => 'Συμπεριλάμβανε beatmaps που έχουν μετατραπεί',
    ],
    'mode' => [
        'any' => 'Οποιοδήποτε',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Οποιοδήποτε',
        'approved' => 'Approved',
        'favourites' => '',
        'graveyard' => 'Νεκροταφείο',
        'leaderboard' => '',
        'loved' => 'Loved',
        'mine' => '',
        'pending' => 'Pending & WIP',
        'qualified' => 'Qualified',
        'ranked' => '',
    ],
    'genre' => [
        'any' => 'Οποιοδήποτε',
        'unspecified' => 'Δεν έχει καθοριστεί',
        'video-game' => 'Βιντεοπαιχνίδι',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Άλλο',
        'novelty' => 'Σύγχρονο',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Ηλεκτρονική Μουσική',
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
        'english' => 'Αγγλικά',
        'chinese' => 'Κινέζικα',
        'french' => 'Γαλλικά',
        'german' => 'Γερμανικά',
        'italian' => 'Ιταλικά',
        'japanese' => 'Ιαπωνικά',
        'korean' => 'Κορεάτικα',
        'spanish' => 'Ισπανικά',
        'swedish' => 'Σουηδικά',
        'instrumental' => 'Ορχηστρικό',
        'other' => 'Άλλο',
    ],
    'played' => [
        'any' => 'Οποιοδήποτε',
        'played' => 'Που έχετε παίξει',
        'unplayed' => 'Που δεν έχετε παίξει',
    ],
    'extra' => [
        'video' => 'Έχει βίντεο',
        'storyboard' => 'Έχει Storyboard',
    ],
    'rank' => [
        'any' => 'Οποιοδήποτε',
        'XH' => 'Ασημένιο SS',
        'X' => '',
        'SH' => 'Ασημένιο S',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Φορές που παίχτηκε: :count',
        'favourites' => 'Αγαπημένα: :count',
    ],
];
