<?php

namespace App\Livewire\Dash\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class Index extends Component
{
    use Actions;

    public $roles;


    public function mount()
    {

        $this->roles= Role::with('permissions')->get();
    }


    public function save()
    {

        // use a simple syntax: success | error | warning | info
        $this->notification()->success(
            $title = 'Profile saved',
            $description = 'Your profile was successfully saved'
        );
        $this->notification()->error(
            $title = 'Error !!!',
            $description = 'Your profile was not saved'
        );

        // or use a full syntax
        $this->notification([
            'title'       => 'Profile saved!',
            'description' => 'Your profile was successfully saved',
            'icon'        => 'success'
        ]);
        $this->notification()->send([
            'title'       => 'Profile saved!',
            'description' => 'Your profile was successfully saved',
            'icon'        => 'success'
        ]);
    }

    public function render()
    {

        return view('livewire.dash.admin.roles.index', ['header' => 'Roles'])
            ->layout('layouts.app', ['title' => 'Roles']);
    }
}
