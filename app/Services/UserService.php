<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Info;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService {

    /**
     * Create the base users for test 3.
     * @return User
     */
    public function insertBaseUsers() {
        if (User::all()->count() < 1) {
            DB::insert("INSERT INTO users (cpf, name) VALUES
                ('16798125050', 'Luke Skywalker'),
                ('59875804045', 'Bruce Wayne'),
                ('04707649025', 'Diane Prince'),
                ('21142450040', 'Bruce Banner'),
                ('83257946074', 'Harley Quinn'),
                ('07583509025', 'Peter Parker')"
            );
        }
    }

    /**
     * Create the base users for test 3.
     * @return User
     */
    public function getUsersInfo() {
        return DB::select("SELECT
            users.name,
            infos.genero,
            infos.ano_nascimento
            FROM users
            INNER JOIN infos
            ON users.cpf = infos.cpf
        ");
    }
}
