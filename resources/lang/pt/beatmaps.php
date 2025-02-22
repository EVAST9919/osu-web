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
            'error' => 'Falha ao guardar a publicação',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Falha ao atualizar voto',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'permitir kudosu',
        'delete' => 'eliminar',
        'deleted' => 'Eliminado por :editor :delete_time.',
        'deny_kudosu' => 'recusar kudosu',
        'edit' => 'editar',
        'edited' => 'Editado pela última vez por :editor :update_time.',
        'kudosu_denied' => 'Recusado de obter kudosu.',
        'message_placeholder_deleted_beatmap' => 'Esta dificuldade foi eliminada por isso poderá não ser mais discutida.',
        'message_placeholder_locked' => 'A discussão para este beatmap foi desativada.',
        'message_type_select' => 'Selecionar Tipo de Comentário',
        'reply_notice' => 'Prime ENTER para responder.',
        'reply_placeholder' => 'Escreve a tua resposta aqui',
        'require-login' => 'Por favor inicia sessão para publicar ou responder',
        'resolved' => 'Resolvida',
        'restore' => 'restaurar',
        'show_deleted' => 'Exibir eliminados',
        'title' => 'Discussões',

        'collapse' => [
            'all-collapse' => 'Colapsar tudo',
            'all-expand' => 'Expandir tudo',
        ],

        'empty' => [
            'empty' => 'Ainda sem discussões!',
            'hidden' => 'Nenhuma discussão corresponde ao filtro selecionado.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Bloquear discussão',
                'unlock' => 'Desbloquear discussão',
            ],

            'prompt' => [
                'lock' => 'Razão para o bloqueio',
                'unlock' => 'Tens a certeza que queres desbloquear?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Esta publicação irá para a discussão geral do beatmapset. Para modificar este beatmap, começa a mensagem com uma hora (ex: 00:12:345).',
            'in_timeline' => 'Para modificar múltiplas marcas de tempo, publica várias vezes (uma publicação por marca de tempo).',
        ],

        'message_placeholder' => [
            'general' => 'Escreve aqui para publicar em Geral (:version)',
            'generalAll' => 'Escreve aqui para publicar em Geral (Todas as dificuldades)',
            'timeline' => 'Escreve aqui para publicar na Cronologia (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Desqualificar',
            'hype' => 'Hype!',
            'mapper_note' => 'Nota',
            'nomination_reset' => 'Reiniciar Nomeação',
            'praise' => 'Glorificar',
            'problem' => 'Problema',
            'suggestion' => 'Sugestão',
        ],

        'mode' => [
            'events' => 'Historial',
            'general' => 'Geral :scope',
            'timeline' => 'Cronologia',
            'scopes' => [
                'general' => 'Esta dificuldade',
                'generalAll' => 'Todas as dificuldades',
            ],
        ],

        'new' => [
            'pin' => 'Afixar',
            'timestamp' => 'Marca de tempo',
            'timestamp_missing' => 'faz ctrl-c no modo de edição e cola na tua mensagem para adicionares uma marca de tempo!',
            'title' => 'Nova Discussão',
            'unpin' => 'Desafixar',
        ],

        'show' => [
            'title' => ':title mapeado por :mapper',
        ],

        'sort' => [
            'created_at' => 'Data de criação',
            'timeline' => 'Cronologia',
            'updated_at' => 'Última atualização',
        ],

        'stats' => [
            'deleted' => 'Eliminadas',
            'mapper_notes' => 'Notas',
            'mine' => 'Minhas',
            'pending' => 'Pendentes',
            'praises' => 'Elogios',
            'resolved' => 'Resolvidas',
            'total' => 'Todas',
        ],

        'status-messages' => [
            'approved' => 'Este beatmap foi aprovado a :date!',
            'graveyard' => "Este beatmap não tem sido atualizado desde :date e muito provavelmente foi abandonado pelo criador...",
            'loved' => 'Este beatmap foi adicionado a adorado em :date!',
            'ranked' => 'Este beatmap foi classificado em :date!',
            'wip' => 'Nota: Este beatmap está marcado como um trabalho em progresso pelo criador.',
        ],

        'votes' => [
            'up' => 'Dar positivo a esta discussão',
            'down' => 'Dar negativo a esta discussão',
        ],
    ],

    'hype' => [
        'button' => 'Hypear Beatmap!',
        'button_done' => 'Já foi Hypeado!',
        'confirm' => "Tens a certeza? Isto usará um dos teus :n hypes restantes e não pode ser desfeito.",
        'explanation' => 'Dá hype neste beatmap para torná-lo mais visível para a nomeação e classificação!',
        'explanation_guest' => 'Regista-te e dá hype neste beatmap para torná-lo mais visível para a nomeação e classificação!',
        'new_time' => "Vais ter outro hype :new_time.",
        'remaining' => 'Tens :remaining hypes restantes.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Comboio do Hype',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Deixar Feedback',
    ],

    'nominations' => [
        'delete' => 'Apagar',
        'delete_own_confirm' => 'Tens a certeza? O beatmap será apagado e serás redirecionado de volta para o teu perfil.',
        'delete_other_confirm' => 'Tens a certeza? O beatmap será apagado e serás redirecionado de volta para o perfil de utilizador.',
        'disqualification_prompt' => 'Razão pela desqualificação?',
        'disqualified_at' => 'Desqualificado :time_ago (:reason).',
        'disqualified_no_reason' => 'nenhuma razão especificada',
        'disqualify' => 'Desqualificar',
        'incorrect_state' => 'Erro ao desempenhar essa ação, tenta recarregar a página.',
        'love' => 'Adorar',
        'love_confirm' => 'Adoras este beatmap?',
        'nominate' => 'Nomear',
        'nominate_confirm' => 'Nomear este beatmap?',
        'nominated_by' => 'nomeado por :users',
        'qualified' => 'Estimado para ser classificado em :date, se não forem encontrados problemas.',
        'qualified_soon' => 'Estimado para ser classificado em breve, se não forem encontrados problemas.',
        'required_text' => 'Nomeações: :current/:required',
        'reset_message_deleted' => 'apagado',
        'title' => 'Estado da Nomeação',
        'unresolved_issues' => 'Existem problemas ainda não resolvidos que devem ser abordados primeiro.',

        'reset_at' => [
            'nomination_reset' => 'Processo de nomeação redefinido :time_ago por :user com um novo problema :discussion (:message).',
            'disqualify' => 'Desclassificado :time_ago por :user com um novo problema :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Tens a certeza? Publicar um novo problema irá reiniciar o processo de nomeação.',
            'disqualify' => 'Tens a certeza? Isto irá remover o beatmap de qualificar-se e reiniciará o processo de nomeação.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'digita em palavras-chave...',
            'login_required' => 'Inicia sessão para pesquisar.',
            'options' => 'Mais Opções de Pesquisa',
            'supporter_filter' => 'Filtrar por :filters requer uma etiqueta de osu!supporter',
            'not-found' => 'sem resultados',
            'not-found-quote' => '... não, nada encontrado.',
            'filters' => [
                'general' => 'Geral',
                'mode' => 'Modo',
                'status' => 'Categorias',
                'genre' => 'Género',
                'language' => 'Idioma',
                'extra' => 'extra',
                'rank' => 'Classificação Alcançada',
                'played' => 'Jogado',
            ],
            'sorting' => [
                'title' => 'Título',
                'artist' => 'Artista',
                'difficulty' => 'Dificuldade',
                'favourites' => 'Favoritos',
                'updated' => 'Atualizado',
                'ranked' => 'Classificado',
                'rating' => 'Avaliação',
                'plays' => 'Partidas',
                'relevance' => 'Relevância',
                'nominations' => 'Nomeações',
            ],
            'supporter_filter_quote' => [
                '_' => 'Filtrar por :filters requer um :link ativo',
                'link_text' => 'etiqueta de osu!supporter',
            ],
        ],
    ],
    'general' => [
        'recommended' => 'Dificuldade recomendada',
        'converts' => 'Incluir beatmaps convertidos',
    ],
    'mode' => [
        'any' => 'Qualquer',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Qualquer',
        'approved' => 'Aprovados',
        'favourites' => '',
        'graveyard' => 'Cemitério',
        'leaderboard' => '',
        'loved' => 'Adorados',
        'mine' => '',
        'pending' => 'Pendente & WIP',
        'qualified' => 'Qualificados',
        'ranked' => '',
    ],
    'genre' => [
        'any' => 'Qualquer',
        'unspecified' => 'Não especificado',
        'video-game' => 'Vídeojogo',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Outro',
        'novelty' => 'Inovação',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Eletrónica',
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
        'english' => 'Inglês',
        'chinese' => 'Chinês',
        'french' => 'Francês',
        'german' => 'Alemão',
        'italian' => 'Italiano',
        'japanese' => 'Japonês',
        'korean' => 'Coreano',
        'spanish' => 'Espanhol',
        'swedish' => 'Sueco',
        'instrumental' => 'Instrumental',
        'other' => 'Outro',
    ],
    'played' => [
        'any' => 'Qualquer',
        'played' => 'Jogado',
        'unplayed' => 'Não Jogado',
    ],
    'extra' => [
        'video' => 'Possui Vídeo',
        'storyboard' => 'Possui Storyboard',
    ],
    'rank' => [
        'any' => 'Qualquer',
        'XH' => 'SS Prata',
        'X' => '',
        'SH' => 'S Prata',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Partidas jogadas: :count',
        'favourites' => 'Favoritos: :count',
    ],
];
