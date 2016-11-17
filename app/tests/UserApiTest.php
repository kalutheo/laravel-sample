<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserApiTest extends TestCase
{

    use DatabaseMigrations;


    /**
     * Test users listing
     *
     * @return void
     */
    public function testTokenNotProvided()
    {
        $this->get('/api/v1/users', [])
            ->seeJson([
                'error' => 'token_not_provided',
            ]);
    }

    public function testSeesListing()
    {

        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();
        $this
                  ->actingAs($user)
                  ->get('/api/v1/users')
                  ->seeJson([$user->toArray()]);

    }
}
