<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule('required', message: 'Обязательное поле.')]
    #[Rule('max:40', message: 'Максимальное количество сиволов 40.')]
    public $first_name = '';

    #[Rule('required', message: 'Обязательное поле.')]
    #[Rule('max:40', message: 'Максимальное количество сиволов 40.')]

    public $last_name;

    #[Rule('max:40', message: 'Максимальное количество сиволов 40.')]

    public $middle_name;

    #[Rule('required|date')]
    public $date_of_birth;

    #[Rule('required', message: 'Обязательное поле.')]
    #[Rule('email', message: 'Не соответсвует email.')]
    #[Rule('max:30', message: 'Максимальное количество сиволов 30.')]
    public $email;

    public $country_code;

    #[Rule('required')]
    #[Rule('digits:7', message: 'Количество сиволов должно быть 7.')]
    public $phone;

    public $marital_status;

    #[Rule('max:1000', message: 'Максимальное количество сиволов 1000.')]
    public $about;
}
