<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testUserCanSignUpAndLogin(): void
    {
        $client = static::createClient();
        $client->request('GET', '/sign-up');

        // assert user can sign up
        $client->submitForm('Create an account', [
            'register_form[email]' => 'test@test.com',
            'register_form[password]' => 'test',
        ]);
        $this->assertResponseRedirects('/dashboard');

        // assert user can logout
        $client->request('GET', '/logout');

        // assert user can login
        $client->request('GET', '/login');
        $client->submitForm('Sign in', [
            '_username' => 'test@test.com',
            '_password' => 'test',
        ]);
        $client->followRedirect();
        $this->assertResponseIsSuccessful();

        $this->assertStringContainsString('Welcome in your dashboard', $client->getResponse()->getContent());
    }
}