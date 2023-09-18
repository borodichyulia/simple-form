<form wire:submit="submit" onkeydown="return event.key != 'Enter';" class="col-md-6 @if ($rulesAccepted) was-validated @endif" id="myForm">
    <div class="mb-3">
        <label for="userForm.first_name" class="form-label">Имя</label>
        <input type="text" class="form-control" id="userForm.first_name" wire:model="userForm.first_name" required>
        <div class="invalid-feedback">
            Пожалуйста, введите имя.
        </div>
        @error('userForm.first_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="userForm.last_name" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="userForm.last_name" wire:model="userForm.last_name" required>
        <div class="invalid-feedback">
            Пожалуйста, введите фамилию.
        </div>
        @error('userForm.last_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="userForm.middle_name" class="form-label">Отчество</label>
        <input type="text" class="form-control" id="userForm.middle_name" wire:model="userForm.middle_name">
        @error('userForm.middle_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="userForm.date_of_birth" class="form-label">Дата рождения</label>
        <input type="date" class="form-control" id="userForm.date_of_birth" wire:model="userForm.date_of_birth" required>
        <div class="invalid-feedback">
            Пожалуйста, укажите дату рождения.
        </div>
        @error('userForm.date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="userForm.email" class="form-label">Email</label>
        <input type="email" class="form-control" id="userForm.email" wire:model="userForm.email" required>
        <div class="invalid-feedback">
            Пожалуйста, введите email.
        </div>
        @error('userForm.email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="userForm.country_code" class="form-label">Код страны</label>
        <select id="userForm.country_code" class="form-select" wire:model="userForm.country_code">
            <option value="+375">+375</option>
            <option value="+7">+7</option>
        </select>
        <label for="userForm.phone" class="form-label">Телефон</label>
        <input type="tel" id="userForm.phone" class="form-control" wire:model="userForm.phone" required>
        <div class="invalid-feedback">
            Пожалуйста, введите номер телефона.
        </div>
        @error('userForm.phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="userForm.marital_status" class="form-label">Семейное положение</label>
        <select id="userForm.marital_status" class="form-select" wire:model="userForm.marital_status">
            <option value="Холост/не замужем">Холост/не замужем</option>
            <option value="Женат/замужем">Женат/замужем</option>
            <option value="В разводе">В разводе</option>
            <option value="Вдовец/вдова">Вдовец/вдова</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="userForm.about" class="form-label">О себе</label>
        <textarea id="userForm.about" class="form-control" rows="5" wire:model="userForm.about" maxlength="1000"></textarea>
        @error('userForm.about') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <input type="file" wire:model="photos" max="5" id="photos" multiple>
        @error('photos.*') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <input type="checkbox" id="rulesAccepted" class="form-check-input" wire:click="$toggle('rulesAccepted')">
        <label for="rulesAccepted" class="form-check-label">Я ознакомился c правилами</label>
        @error('rulesAccepted') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" @if (!$rulesAccepted) disabled @endif>Отправить</button>
    </div>
</form>
