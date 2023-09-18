<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Repositories\PhotoRepository;
use App\Repositories\UserRepository;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormComponent extends Component
{
    use WithFileUploads;

    public UserForm $userForm;
    public $rulesAccepted = false;

    #[Rule(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    public function mount()
    {
        $this->userForm->country_code = '+375';
        $this->userForm->marital_status = 'Холост/не замужем';
    }

    public function render()
    {
        return view('livewire.form-component');
    }

    public function submit(UserRepository $userRepository, PhotoRepository $photoRepository)
    {
        $this->validate();
        $userRepository->store($this->userForm);


        foreach ($this->photos as $photo) {
            $path = $photo->store('photos');
            $photoId = substr($path, 7);
            $photoRepository->store($photoId);
        }

        $user = $userRepository->show();

        return redirect()->route('user.show',  ['user' => $user])->with('success', 'Пользователь успешно сохранен.');
    }

    public function preventFormSubmit()
    {
        return;
    }
}
