<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_user_registration()
    {
        $data = [
            'name' => 'Cody Worthen',
            'username' => 'cworthen777',
            'email' => 'cworthen777@hotmail.com',
            'password' => 'password'
        ];
        
        $this->postJson('register', $data)
             ->assertStatus(302);
    }
    
}
