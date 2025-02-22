{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master', [
    'bodyAdditionalClasses' => 't-forum-'.$forum->categorySlug(),
    'search' => [
        'params' => [
            'forum_id' => $forum->forum_id,
        ],
        'url' => route('forum.forums.search'),
    ],
    'titlePrepend' => $forum->forum_name,
    'pageDescription' => $forum->toMetaDescription(),
])

@section('content')
    <div class="osu-layout__row osu-layout__row--page-compact">
        <div class="page-header-nav">
            @include('forum._header_breadcrumb')
        </div>
        <div
            class="forum-category-header
                u-forum--bg
                forum-category-header--forum
                js-forum-cover--header"
            style="{{ isset($cover['fileUrl']) === true ? "background-image: url('{$cover['fileUrl']}');" : '' }}"
        >
            <div class="forum-category-header__loading js-forum-cover--loading">
                @include('objects._spinner')
            </div>

            <div class="forum-category-header__titles">
                <h1 class="forum-category-header__title forum-category-header__title--forum">
                    <a class="link--white link--no-underline" href="{{ route("forum.forums.show", $forum->forum_id) }}">
                        {{ $forum->forum_name }}
                    </a>
                </h1>
            </div>

            @if (Auth::check() === true && Auth::user()->isAdmin() === true)
                <div class="forum-category-header__actions">
                    @include('forum._cover_editor')
                </div>
            @endif
        </div>
    </div>

    <div class="osu-page osu-page--forum-compact">
        @if ($forum->subforums()->exists())
            <div class="forum-topics forum-topics--subforums">
                <h2 class="forum-topics__title">{{ trans("forum.subforums") }}</h2>

                @include("forum.forums._forums", ["forums" => $forum->subforums])
            </div>
        @endif

        @if (count($pinnedTopics) > 0)
            @include('forum.forums._topics', [
                'title' => trans('forum.pinned_topics'),
                'topics' => $pinnedTopics,
            ])
        @endif
    </div>

    <div class="osu-page osu-page--forum-compact osu-page--has-anchor" id="topics">
        @include('forum.forums._topics_sort', compact('forum'))

        @if (count($topics) > 0 || $forum->isOpen())
            <div class="forum-topics-spacer">
                <div class="forum-topics-spacer__group forum-topics-spacer__group--left">
                    @include('forum.forums._new_topic', compact('forum'))
                </div>

                <div class="forum-topics-spacer__group forum-topics-spacer__group--right">
                    @include('forum.forums._mark_as_read', compact('forum'))
                </div>
            </div>

            @include('forum.forums._topics', [
                'title' => trans('forum.topics._'),
                'topics' => $topics,
            ])

            <div class="forum-topics-spacer forum-topics-spacer--pager">
                <div class="forum-topics-spacer__group forum-topics-spacer__group--left">
                    @include('forum.forums._new_topic', compact('forum'))
                </div>

                <div class="forum-topics-spacer__group forum-topics-spacer__group--pager">
                    @include('objects._pagination_v0', [
                        'object' => $topics
                            ->fragment('topics')
                            ->appends([
                                'sort' => Request::input('sort'),
                                'with_replies' => Request::input('with_replies'),
                            ]),
                        'modifiers' => ['light-bg']
                    ])
                </div>

                <div class="forum-topics-spacer__group forum-topics-spacer__group--right">
                    @include('forum.forums._mark_as_read', compact('forum'))
                </div>
            </div>
        @endif
    </div>
@endsection
