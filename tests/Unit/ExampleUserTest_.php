<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_registration_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSee('Registration Form', 'Register');
    }

    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Login');
    }

    public function test_it_stores_new_users()
    {
        $response = $this->post('/register', [
            'name' => 'Dzaky Syahrizal',
            'username' => 'syahrizal',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/login');
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Doe',
            'username' => 'john',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $user2 = User::make([
            'name' => 'Dzaky Syahrizal',
            'username' => 'dzaky',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'Dzaky Syahrizal'
        ]);
    }

    public function test_if_seeders_works()
    {
        // $this->seed(); //* Seed all seeders in the Seeders folder
        //* php artisan db:seed

        $this->assertTrue(true);
    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if ($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }
}
