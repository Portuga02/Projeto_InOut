<?php

// o model ele vai apontar para uma tabela dentro do banco de dados
require_once(realpath(MODEL_PATH . '/Model.php'));

class Usermodel extends Model {

    protected static $tablename = 'users';
    protected static $columns = [
        'id',
        'name',
        'pasword',
        'email',
        'start_date',
        'end_data',
        'is_admin',
    ];

}
