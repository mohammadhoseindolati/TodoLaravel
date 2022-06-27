<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname' => 'Mohammadhossein',
                'lastname' => 'Dolati'
            ] ,
            [
                'firstname' => 'Hossein' ,
                'lastname' => 'Mohammadi'
            ] ,
            [
                'firstname' => 'Amirhossein',
                'lastname' => 'Dolati'
            ] ,
            [
                'firstname' => 'Mahdi',
                'lastname' => 'Rafati'
            ] ,
        ] ;
        foreach($users as $user)
        {
            Todo::query()->insert([
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname']
            ]);
        }
    }
}
