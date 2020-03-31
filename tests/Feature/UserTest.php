<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    // use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Запрос на регистрацию пользователя
     */
    public function testRegister()
    {

        $response = $this->json('POST', '/api/register', [
            'contractor' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'firstname' => 'Игорь',
            'lastname' => 'Солнцев',
            'middlename' => 'Андреевич',
            'post' => 'Директор',
            'phone' => '+79608554545',
            'email' => 'leliaoff@ya.ru',
            'confirmed_politics' => true,
            'confirmed_personal_data' => true,
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'contractor' => 'ООО "Солнышко"',
                'inn' => '301001001',
                'firstname' => 'Игорь',
                'lastname' => 'Солнцев',
                'middlename' => 'Андреевич',
                'post' => 'Директор',
                'phone' => '+79608554545',
                'email' => 'leliaoff@ya.ru',
                'confirmed_politics' => true,
                'confirmed_personal_data' => true,
            ]);
    }

    /**
     * Регистрация пользователя
     */
    public function testCreateUser()
    {

        $response = $this->json('POST', '/api/user', [
            'contractor_name' => 'ООО "Солнышко"',
            'contractor_inn' => '301001001',
            'contractor_rx_id' => 1,
            'post_name' => 'Директор',
            'name' => 'igor',
            'password' => '11111',
            'firstname' => 'Игорь',
            'lastname' => 'Солнцев',
            'middlename' => 'Андреевич',
            'phone' => '+79608554545',
            'email' => 'leliaoff@ya.ru',
            'confirmed_politics' => true,
            'confirmed_personal_data' => true,
            'rx_id' => 1,
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id', 'contractor_id', 'firstname', 'lastname', 'middlename',
                'post_id', 'phone', 'email', 'confirmed_politics', 'confirmed_personal_data', 'rx_id'
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'igor',
            'firstname' => 'Игорь',
            'lastname' => 'Солнцев',
            'middlename' => 'Андреевич',
            'phone' => '+79608554545',
            'email' => 'leliaoff@ya.ru',
            'confirmed_politics' => 1,
            'confirmed_personal_data' => 1,
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('contractors', [
            'name' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Директор',
        ]);

    }

//    /***
//     * Аутентификация пользователя
//     */
//    public function testLoginUser()
//    {
//
//        $response = $this->json('POST', '/api/login', [
//            'name' => 'igor',
//            'password' => '11111',
//        ]);
//
//        $response
//            ->assertStatus(200)
//            ->assertJsonStructure([
//                'id', 'name', 'email', 'role'
//            ]);
//
//    }

    /**
     * Изменение данных пользователя
     */
    public function testUpdateUser()
    {

        $id = DB::table('users')->where('name', 'igor')->value('id');

        $response = $this->json('PUT', "/api/user/$id", [
            'contractor_name' => 'ООО "Солнышко"',
            'contractor_inn' => '301001001',
            'contractor_rx_id' => 1,
            'post_name' => 'Директор',
            'firstname' => 'Игорь',
            'lastname' => 'Солнцев',
            'middlename' => 'Андреевич',
            'phone' => '+79608554550',
            'email' => 'leliaoff@ya.ru',
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id', 'contractor_id', 'firstname', 'lastname', 'middlename',
                'post_id', 'phone', 'email', 'confirmed_politics', 'confirmed_personal_data', 'rx_id'
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'igor',
            'firstname' => 'Игорь',
            'lastname' => 'Солнцев',
            'middlename' => 'Андреевич',
            'phone' => '+79608554550',
            'email' => 'leliaoff@ya.ru',
            'confirmed_politics' => 1,
            'confirmed_personal_data' => 1,
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('contractors', [
            'name' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Директор',
        ]);

    }

    /**
     * Удаление пользователя
     */
    public function testDeleteUser()
    {

        $id = DB::table('users')->where('name', 'igor')->value('id');

        $response = $this->json('DELETE', "/api/user/$id");

        $response
            ->assertStatus(200)
            ->assertJsonStructure([ 'id' ]);

        $this->assertDatabaseHas('contractors', [
            'name' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Директор',
        ]);

    }

    /**
     * Регистрация второго пользователя
     */
    public function testCreateSecondUser()
    {

        $response = $this->json('POST', '/api/user', [
            'contractor_name' => 'ООО "Солнышко"',
            'contractor_inn' => '301001001',
            'contractor_rx_id' => 1,
            'post_name' => 'Секретарь',
            'name' => 'elena',
            'password' => '11111',
            'firstname' => 'Елена',
            'lastname' => 'Алексеева',
            'middlename' => 'Владимировна',
            'phone' => '+79608554580',
            'email' => 'elena@ya.ru',
            'confirmed_politics' => true,
            'confirmed_personal_data' => true,
            'rx_id' => 2,
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id', 'contractor_id', 'firstname', 'lastname', 'middlename',
                'post_id', 'phone', 'email', 'confirmed_politics', 'confirmed_personal_data', 'rx_id'
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'elena',
            'firstname' => 'Елена',
            'lastname' => 'Алексеева',
            'middlename' => 'Владимировна',
            'phone' => '+79608554580',
            'email' => 'elena@ya.ru',
            'confirmed_politics' => 1,
            'confirmed_personal_data' => 1,
            'rx_id' => 2,
        ]);

        $this->assertDatabaseHas('contractors', [
            'name' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Секретарь',
        ]);

    }

    /**
     * Изменение данных пользователя по RX ID
     */
    public function testUpdateUserByRxId()
    {

        $response = $this->json('PUT', "/api/user/rx/2", [
            'contractor_name' => 'ООО "Солнышко"',
            'contractor_inn' => '301001001',
            'contractor_rx_id' => 1,
            'post_name' => 'Главный Секретарь',
            'firstname' => 'Елена',
            'lastname' => 'Алексеева',
            'middlename' => 'Владимировна',
            'phone' => '+79608554580',
            'email' => 'elena@ya.ru',
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id', 'contractor_id', 'firstname', 'lastname', 'middlename',
                'post_id', 'phone', 'email', 'confirmed_politics', 'confirmed_personal_data', 'rx_id'
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'elena',
            'firstname' => 'Елена',
            'lastname' => 'Алексеева',
            'middlename' => 'Владимировна',
            'phone' => '+79608554580',
            'email' => 'elena@ya.ru',
            'confirmed_politics' => 1,
            'confirmed_personal_data' => 1,
            'rx_id' => 2,
        ]);

        $this->assertDatabaseHas('contractors', [
            'name' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'rx_id' => 1,
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Директор',
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Секретарь',
        ]);

        $this->assertDatabaseHas('posts', [
            'name' => 'Главный Секретарь',
        ]);

    }

    /**
     * Удаление пользователя по RX ID
     */
    public function testDeleteUserByRxId()
    {

        $response = $this->json('DELETE', "/api/user/rx/2");

        $response
            ->assertStatus(200)
            ->assertJsonStructure([ 'rx_id' ]);

    }

    /**
     * Запрос на регистрацию пользователя
     */
    public function testForgotPassword()
    {

        $response = $this->json('POST', '/api/forgot_password', [
            'contractor' => 'ООО "Солнышко"',
            'inn' => '301001001',
            'firstname' => 'Игорь',
            'lastname' => 'Солнцев',
            'middlename' => 'Андреевич',
            'post' => 'Директор',
            'phone' => '+79608554545',
            'email' => 'leliaoff@ya.ru',
            'confirmed_politics' => true,
            'confirmed_personal_data' => true,
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'contractor' => 'ООО "Солнышко"',
                'inn' => '301001001',
                'firstname' => 'Игорь',
                'lastname' => 'Солнцев',
                'middlename' => 'Андреевич',
                'post' => 'Директор',
                'phone' => '+79608554545',
                'email' => 'leliaoff@ya.ru',
                'confirmed_politics' => true,
                'confirmed_personal_data' => true,
            ]);
    }


}
