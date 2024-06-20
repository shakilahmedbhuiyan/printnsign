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


    public function delete(Role $role)
    {
        $this->authorize('delete', $role);
        // $role->permissions()->detach();
        // $role->delete();
        $this->dispatch('$refresh');

        $this->notification()->success(
            $title = 'Role ' . $role->name . ' Deleted',
            $description = 'Role deleted successfully'
        );
        
    }

    public function render()
    {

        return view('livewire.dash.admin.roles.index', ['header' => 'Roles'])
            ->layout('layouts.app', ['title' => 'Roles']);
    }
}
