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
            'is_hype' => 'Não é possível desfazer o hype.',
            'has_reply' => 'Não é possível excluir uma discussão com respostas',
        ],
        'nominate' => [
            'exhausted' => 'Você atingiu o limite de nomeações diárias, tente novamente amanhã.',
            'full_bn_required' => 'Você precisa ser um nominator completo para realizar essa nomeação de qualificação.',
            'full_bn_required_hybrid' => 'Você precisa ser um nominator completo para nomear grupos de beatmaps com mais de um modo de jogo.',
            'incorrect_state' => 'Erro ao realizar esta ação, tente atualizar a página.',
            'owner' => "Não é possível nominar o próprio beatmap.",
        ],
        'resolve' => [
            'not_owner' => 'Somente o autor da discussão e o dono do beatmap podem resolver uma discussão.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Apenas o criador do beatmap ou nominator/membros QAT podem publicar notas do mapeador.',
        ],

        'vote' => [
            'limit_exceeded' => 'Por favor, espere um pouco antes de votar mais vezes',
            'owner' => "Não é possível votar na própria discussão.",
            'wrong_beatmapset_state' => 'Só é possível votar nas discussões de beatmaps pendentes.',
        ],
    ],

    'beatmap_discussion_post' => [
        'edit' => [
            'system_generated' => 'Publicações geradas automaticamente não podem ser editadas.',
            'not_owner' => 'Somente o autor pode editar a publicação.',
        ],
        'store' => [
            'beatmapset_locked' => 'Este beatmap está bloqueado para discussão.',
        ],
    ],

    'chat' => [
        'blocked' => 'Não se pode enviar uma mensagem para um usuário que foi bloqueado, ou te bloqueou.',
        'friends_only' => 'O usuário está bloqueando mensagens de pessoas fora de sua lista de amigos.',
        'moderated' => 'O canal atual está sendo moderado.',
        'no_access' => 'Você não tem acesso a esse canal.',
        'restricted' => 'Você não pode enviar mensagens enquanto silenciado, restrito ou banido.',
    ],

    'comment' => [
        'update' => [
            'deleted' => "Não é possível editar publicações deletadas.",
        ],
    ],

    'contest' => [
        'voting_over' => 'Não é possível alterar o voto após o fim do período de votação.',
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Sem permissão para moderar este fórum.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Somente a última publicação pode ser excluída.',
                'locked' => 'Não é possível excluir a publicação de um tópico trancado.',
                'no_forum_access' => 'O acesso ao fórum solicitado é necessário.',
                'not_owner' => 'Somente o autor pode excluir a publicação.',
            ],

            'edit' => [
                'deleted' => 'Não é possível editar uma publicação excluída.',
                'locked' => 'A edição desta publicação está bloqueada.',
                'no_forum_access' => 'O acesso ao fórum solicitado é necessário.',
                'not_owner' => 'Somente o autor da publicação pode editar a publicação.',
                'topic_locked' => 'Não é possível editar publicações de um tópico trancado.',
            ],

            'store' => [
                'play_more' => 'Por favor tente jogar antes de postar nos fóruns! Se você tiver algum problema com o jogo, por favor poste no fórum de Suporte e Ajuda.',
                'too_many_help_posts' => "Você precisa jogar mais antes que você possa criar postagens adicionais. Se você ainda estiver tendo problemas com o jogo, envie um email para support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Por favor, edite sua última publicação em vez de publicar novamente.',
                'locked' => 'Não é possível responder a uma discussão trancada.',
                'no_forum_access' => 'O acesso ao fórum solicitado é necessário.',
                'no_permission' => 'Sem permissão para responder.',

                'user' => [
                    'require_login' => 'Por favor, inicie a sessão para responder.',
                    'restricted' => "Não é possível responder enquanto restrito.",
                    'silenced' => "Não é possível responder enquanto silenciado.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'O acesso ao fórum solicitado é necessário.',
                'no_permission' => 'Sem permissão para criar um novo tópico.',
                'forum_closed' => 'O fórum está trancado e não pode ser publicado.',
            ],

            'vote' => [
                'no_forum_access' => 'O acesso ao fórum solicitado é necessário.',
                'over' => 'A votação está encerrada e não é mais possível votar.',
                'play_more' => 'Você precisa jogar mais antes de votar no fórum.',
                'voted' => 'Não é permitido alterar o voto.',

                'user' => [
                    'require_login' => 'Por favor, inicie a sessão para votar.',
                    'restricted' => "Não é possível votar enquanto restrito.",
                    'silenced' => "Não é possível votar enquanto silenciado.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'O acesso ao fórum solicitado é necessário.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Capa especificada inválida.',
                'not_owner' => 'Somente o dono pode editar a capa.',
            ],
            'store' => [
                'forum_not_allowed' => 'Este fórum não aceita capas de tópicos.',
            ],
        ],

        'view' => [
            'admin_only' => 'Apenas administradores podem visualizar este fórum.',
        ],
    ],

    'require_login' => 'Por favor, inicie a sessão para continuar.',

    'unauthorized' => 'Acesso negado.',

    'silenced' => "Não é possível fazer isso enquanto silenciado.",

    'restricted' => "Não é possível fazer isso enquanto restrito.",

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'A página do usuário está trancada.',
                'not_owner' => 'Só é possível editar sua própria página de usuário.',
                'require_supporter_tag' => 'É necessário possuir uma osu!supporter tag.',
            ],
        ],
    ],
];
