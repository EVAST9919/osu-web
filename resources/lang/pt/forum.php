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
    'pinned_topics' => 'Tópicos Afixados',
    'slogan' => "é perigoso brincar sozinho.",
    'subforums' => 'Sub-fóruns',
    'title' => 'Fóruns osu!',

    'covers' => [
        'create' => [
            '_' => 'Colocar imagem de capa',
            'button' => 'Carregar imagem',
            'info' => 'O tamanho cobrido deveria ser :dimensions. Também podes largar aqui uma imagem para carregar.',
        ],

        'destroy' => [
            '_' => 'Remover imagem de capa',
            'confirm' => 'Tens a certeza de que pretendes remover a imagem de capa?',
        ],
    ],

    'email' => [
        'new_reply' => '[osu!] Nova resposta para o tópico ":title"',
    ],

    'forums' => [
        'topics' => [
            'empty' => 'Sem tópicos!',
        ],
    ],

    'mark_as_read' => [
        'forum' => 'Marcar o fórum como visto',
        'forums' => 'Marcar os fóruns como vistos',
        'busy' => 'A marcar como visto...',
    ],

    'poll' => [
        'edit_warning' => 'Editar uma sondagem irá remover os resultados atuais!',

        'actions' => [
            'edit' => 'Editar sondagem',
        ],
    ],

    'post' => [
        'confirm_destroy' => 'Queres mesmo apagar a publicação?',
        'confirm_restore' => 'Queres mesmo restaurar a publicação?',
        'edited' => 'Editado pela última vez por :user :when, editado :count vezes no total.',
        'posted_at' => 'publicado :when',

        'actions' => [
            'destroy' => 'Eliminar publicação',
            'restore' => 'Restaurar publicação',
            'edit' => 'Editar publicação',
        ],

        'info' => [
            'post_count' => ':count_delimited publicação|:count_delimited publicações',
            'topic_starter' => 'Criador do Tópico',
        ],
    ],

    'search' => [
        'go_to_post' => 'Ir para a publicação',
        'post_number_input' => 'insere o número da publicação',
        'total_posts' => ':posts_count publicações no total',
    ],

    'topic' => [
        'deleted' => 'tópico eliminado',
        'go_to_latest' => 'ver ultima publicação',
        'latest_post' => ':when por :user',
        'latest_reply_by' => 'última resposta por :user',
        'new_topic' => 'Novo tópico',
        'new_topic_login' => 'Inicia sessão para publicar um novo tópico',
        'post_reply' => 'Publicar',
        'reply_box_placeholder' => 'Escreve aqui para responder',
        'reply_title_prefix' => 'Re',
        'started_by' => 'por :user',
        'started_by_verbose' => 'começado por :user',

        'create' => [
            'preview' => 'Amostra',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Escrever',
            'submit' => 'Publicar',

            'necropost' => [
                'default' => 'Este tópico tem estado inativo há já algum tempo. Publica aqui só se tiveres uma razão específica para o fazer.',

                'new_topic' => [
                    '_' => "Este tópico tem estado inativo há já algum tempo. Se não tiveres uma razão específica para publicar aqui, por favor :create como alternativa.",
                    'create' => 'criar um novo tópico',
                ],
            ],

            'placeholder' => [
                'body' => 'Escreve o conteúdo da publicação aqui',
                'title' => 'Clica aqui para definir o título',
            ],
        ],

        'jump' => [
            'enter' => 'clica para inserir o número específico da publicação',
            'first' => 'ir para a primeira publicação',
            'last' => 'ir para a última publicação',
            'next' => 'saltar as próximas 10 publicações',
            'previous' => 'retroceder 10 publicações',
        ],

        'post_edit' => [
            'cancel' => 'Cancelar',
            'post' => 'Guardar',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title' => 'Subscrições do Fórum',
            'title_compact' => 'subscrições do fórum',
            'title_main' => '<strong>Subscrições</strong> do Fórum',

            'box' => [
                'total' => 'Tópicos subscritos',
                'unread' => 'Tópicos com novas respostas',
            ],

            'info' => [
                'total' => 'Subscreveste a :total tópicos.',
                'unread' => 'Tu tens :unread respostas não lidas a tópicos subscritos.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Anular a subscrição do tópico?',
                'title' => 'Anular subscrição',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Tópicos',

        'actions' => [
            'login_reply' => 'Inicia sessão para Responder',
            'reply' => 'Resposta',
            'reply_with_quote' => 'Publicação de citação para resposta',
            'search' => 'Procurar',
        ],

        'create' => [
            'create_poll' => 'Criação de Sondagem',

            'preview' => 'Publicar Amostra',

            'create_poll_button' => [
                'add' => 'Criar uma sondagem',
                'remove' => 'Cancelar a criação duma sondagem',
            ],

            'poll' => [
                'hide_results' => 'Ocultar os resultados da sondagem.',
                'hide_results_info' => 'Eles serão mostrados só quando a sondagem concluir.',
                'length' => 'Manter a sondagem por',
                'length_days_suffix' => 'dias',
                'length_info' => 'Deixa em branco para uma sondagem interminável',
                'max_options' => 'Opções por utilizador',
                'max_options_info' => 'Este é o número de opções que cada utilizador poderá selecionar ao votar.',
                'options' => 'Opções',
                'options_info' => 'Coloca cada conjunto de opções numa nova linha. Poderás inserir até 10 opções.',
                'title' => 'Pergunta',
                'vote_change' => 'Permitir re-votação.',
                'vote_change_info' => 'Se ativada, os utilizadores são capazes de alterar o seu voto.',
            ],
        ],

        'edit_title' => [
            'start' => 'Editar título',
        ],

        'index' => [
            'feature_votes' => 'prioridade estrela',
            'replies' => 'respostas',
            'views' => 'visualizações',
        ],

        'issue_tag_added' => [
            'to_0' => 'Remover a etiqueta "adicionado"',
            'to_0_done' => 'Removida a etiqueta "adicionado"',
            'to_1' => 'Adicionar a etiqueta "adicionado"',
            'to_1_done' => 'Adicionada a etiqueta "adicionado"',
        ],

        'issue_tag_assigned' => [
            'to_0' => 'Remover a etiqueta "atribuído"',
            'to_0_done' => 'Removida a etiqueta "atribuído"',
            'to_1' => 'Adicionar a etiqueta "atribuído"',
            'to_1_done' => 'Adicionada a etiqueta "atribuído"',
        ],

        'issue_tag_confirmed' => [
            'to_0' => 'Remover a etiqueta "confirmado"',
            'to_0_done' => 'Removida a etiqueta "confirmado"',
            'to_1' => 'Adicionar a etiqueta "confirmado"',
            'to_1_done' => 'Adicionada a etiqueta "confirmado"',
        ],

        'issue_tag_duplicate' => [
            'to_0' => 'Remover a etiqueta "duplicado"',
            'to_0_done' => 'Removida a etiqueta "duplicado"',
            'to_1' => 'Adicionar a etiqueta "duplicado"',
            'to_1_done' => 'Adicionada a etiqueta "duplicado"',
        ],

        'issue_tag_invalid' => [
            'to_0' => 'Remover a etiqueta "inválido"',
            'to_0_done' => 'Removida a etiqueta "inválido"',
            'to_1' => 'Adicionar a etiqueta "inválido"',
            'to_1_done' => 'Adicionada a etiqueta "inválido"',
        ],

        'issue_tag_resolved' => [
            'to_0' => 'Remover a etiqueta "resolvido"',
            'to_0_done' => 'Removida a etiqueta "resolvido"',
            'to_1' => 'Adicionar a etiqueta "resolvido"',
            'to_1_done' => 'Adicionada a etiqueta "resolvido"',
        ],

        'lock' => [
            'is_locked' => 'Este tópico está fechado e não pode ser respondido',
            'to_0' => 'Desbloquear tópico',
            'to_0_done' => 'O tópico foi desbloqueado',
            'to_1' => 'Fechar tópico',
            'to_1_done' => 'O tópico foi fechado',
        ],

        'moderate_move' => [
            'title' => 'Mover para outro fórum',
        ],

        'moderate_pin' => [
            'to_0' => 'Despegar tópico',
            'to_0_done' => 'O tópico foi despegado',
            'to_1' => 'Afixar tópico',
            'to_1_done' => 'O tópico foi afixado',
            'to_2' => 'Afixar tópico e marcar como uma declaração pública',
            'to_2_done' => 'O tópico foi afixado e marcado como uma declaração pública',
        ],

        'show' => [
            'deleted-posts' => 'Publicações Eliminadas',
            'total_posts' => 'Publicações Totais',

            'feature_vote' => [
                'current' => 'Prioridade Atual: +:count',
                'do' => 'Promover este pedido',

                'info' => [
                    '_' => 'Isto é um :feature_request. Pedidos de características e funcionalidades podem ser votados por :supporters.',
                    'feature_request' => 'solicitação de características/funcionalidades',
                    'supporters' => 'apoiantes',
                ],

                'user' => [
                    'count' => '{0} sem voto|{1} :count voto|[2,*] :count votos',
                    'current' => 'Tu tens :votes restantes.',
                    'not_enough' => "Não tens mais nenhuns votos restantes",
                ],
            ],

            'poll' => [
                'vote' => 'Votar',

                'detail' => [
                    'end_time' => 'A sondagem irá terminar em :time',
                    'ended' => 'A sondagem terminou a :time',
                    'results_hidden' => 'Os resultados serão mostrados após a sondagem terminar.',
                    'total' => 'Votos totais :count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => 'Não marcado',
            'to_watching' => 'Marcador',
            'to_watching_mail' => 'Marcador com notificação',
            'tooltip_mail_disable' => 'A notificação está ativada. Clica para desativares',
            'tooltip_mail_enable' => 'A notificação está desativada. Clica para ativares',
        ],
    ],
];
