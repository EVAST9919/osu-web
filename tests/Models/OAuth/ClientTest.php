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
use App\Models\OAuth\Client;
use App\Models\User;
use Laravel\Passport\ClientRepository;

class ClientTest extends TestCase
{
    protected $repository;

    public function setUp()
    {
        parent::setUp();

        $this->owner = factory(User::class)->create();
        $this->repository = new ClientRepository();
        $this->client = $this->createClient($this->owner);
    }

    public function testScopesFromTokensAreAggregated()
    {
        $user = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user->getKey(),
        ]);

        $this->client->tokens()->create([
            'id' => '2',
            'revoked' => false,
            'scopes' => ['friends.read'],
            'user_id' => $user->getKey(),
        ]);

        $clients = Client::forUser($user);
        $this->assertCount(1, $clients);
        $this->assertSame(['friends.read', 'identify'], $clients[0]->scopes);
    }

    public function testScopesFromDifferentClientsAreNotAggregated()
    {
        $user = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user->getKey(),
        ]);

        $otherClient = $this->createClient($this->owner);
        $otherClient->tokens()->create([
            'id' => '2',
            'revoked' => false,
            'scopes' => ['friends.read'],
            'user_id' => $user->getKey(),
        ]);

        $clients = Client::forUser($user);
        $this->assertSame(['identify'], $clients->find($this->client->getKey())->scopes);
        $this->assertSame(['friends.read'], $clients->find($otherClient->getKey())->scopes);
    }

    public function testScopesFromRevokedTokensAreNotAggregated()
    {
        $user = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user->getKey(),
        ]);

        $this->client->tokens()->create([
            'id' => '2',
            'revoked' => true,
            'scopes' => ['friends.read'],
            'user_id' => $user->getKey(),
        ]);

        $clients = Client::forUser($user);
        $this->assertCount(1, $clients);
        $this->assertSame(['identify'], $clients[0]->scopes);
    }

    public function testClientWithOnlyRevokedTokensDoesNotShow()
    {
        $user = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => true,
            'scopes' => ['identify'],
            'user_id' => $user->getKey(),
        ]);

        $clients = Client::forUser($user);
        $this->assertEmpty($clients);
    }

    public function testRevokingClientRemovesItFromTheList()
    {
        $user = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user->getKey(),
        ]);

        $this->assertCount(1, Client::forUser($user));
        $this->client->revokeForUser($user);
        $this->assertCount(0, Client::forUser($user));
    }

    public function testDoesNotAggregateScopesFromOtherUsers()
    {
        $user1 = factory(User::class)->create();
        $user2 = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user1->getKey(),
        ]);

        $this->client->tokens()->create([
            'id' => '2',
            'revoked' => false,
            'scopes' => ['friends.read'],
            'user_id' => $user2->getKey(),
        ]);

        $clients = Client::forUser($user1);
        $this->assertCount(1, $clients);
        $this->assertSame(['identify'], $clients[0]->scopes);
    }

    public function testDoesNotRevokeOtherUserTokens()
    {
        $user1 = factory(User::class)->create();
        $user2 = factory(User::class)->create();
        $this->client->tokens()->create([
            'id' => '1',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user1->getKey(),
        ]);

        $this->client->tokens()->create([
            'id' => '2',
            'revoked' => false,
            'scopes' => ['identify'],
            'user_id' => $user2->getKey(),
        ]);

        $this->assertCount(1, Client::forUser($user1));
        $this->assertCount(1, Client::forUser($user2));
        $this->client->revokeForUser($user1);
        $this->assertCount(0, Client::forUser($user1));
        $this->assertCount(1, Client::forUser($user2));
    }

    private function createClient(User $owner) : Client
    {
        $passportClient = $this->repository->create($owner->getKey(), 'test', url('/auth/callback'));

        return Client::findOrFail($passportClient->getKey());
    }
}
