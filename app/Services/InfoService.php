<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Info;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InfoService {

    /**
     * Create the base users for test 3.
     * @return User
     */
    public function insertBaseInfos() {
        if (Info::all()->count() < 1) {
            DB::insert("INSERT INTO infos (cpf, genero, ano_nascimento) VALUES
                ('16798125050', 'M', '1976'),
                ('59875804045', 'M', '1960'),
                ('04707649025', 'F', '1988'),
                ('21142450040', 'M', '1954'),
                ('83257946074', 'F', '1970'),
                ('07583509025', 'M', '1972')"
            );
        }
    }
}
