###
#    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
#
#    This file is part of osu!web. osu!web is distributed with the hope of
#    attracting more community contributions to the core ecosystem of osu!.
#
#    osu!web is free software: you can redistribute it and/or modify
#    it under the terms of the Affero GNU General Public License version 3
#    as published by the Free Software Foundation.
#
#    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
#    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
#    See the GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
###

import { UserEntry } from './user-entry'
import { UserArtEntry } from './user-art-entry'
import * as React from 'react'
import { div, table, tr, a, tbody, h4, thead, th } from 'react-dom-factories'
el = React.createElement

export class UserEntryList extends React.Component
  constructor: (props) ->
    super props

    @state =
      contest: props.contest
      entries: props.entries
      showDeleted: false

  updateEntry: (id, deleted) =>
    newEntries = _.clone(@state.entries)
    _.find(newEntries, {'id': id}).deleted = deleted

    @setState entries: newEntries

  delete: (_e, data) =>
    @updateEntry(data.entry, true)

  restore: (_e, data) =>
    @updateEntry(data.entry, false)

  componentDidMount: =>
    $.subscribe 'admin:contest:entries:destroy.contestUserEntryList', @delete
    $.subscribe 'admin:contest:entries:restore.contestUserEntryList', @restore

  componentWillUnmount: =>
    $.unsubscribe '.contestUserEntryList'

  toggleShowDeleted: (e) =>
    e.preventDefault()

    @setState
      showDeleted: !@state.showDeleted

  render: =>
    entries =
      if @state.showDeleted
        @state.entries
      else
        _.filter @state.entries, {'deleted': false}

    deletedEntries = _.filter @state.entries, {'deleted': true}

    div {},
      div className: 'row',
        div className: 'col-md-6',
          h4 {},
            "#{@state.entries.length} Entries"
            if !_.isEmpty(deletedEntries)
              ", #{deletedEntries.length} Deleted"

        div className: 'col-md-6 text-right',
          h4 {},
            a href: '#', onClick: @toggleShowDeleted,
              "#{if @state.showDeleted then 'hide' else 'show'} deleted"

      if @props.contest.type == 'art'
        div className: 'osu-table osu-table--with-handle',
          table className: 'osu-table__table',
            thead {},
              tr {},
                th className: 'osu-table__header admin-contest__table-column--username'
                th className: 'osu-table__header'
                th className: 'osu-table__header admin-contest__table-column--button'
            tbody {}, entries.map (entry) ->
              el UserArtEntry,
                key: entry.id
                entry: entry

      else
        div className: 'osu-table osu-table--with-handle',
          table className: 'osu-table__table',
            thead {},
              tr {},
                th className: 'osu-table__header admin-contest__table-column--username', 'Username'
                th className: 'osu-table__header', 'Filename'
                th className: 'osu-table__header admin-contest__table-column--filesize', 'Filesize'
                th className: 'osu-table__header admin-contest__table-column--button'

            tbody {}, entries.map (entry) ->
              el UserEntry,
                key: entry.id
                entry: entry
