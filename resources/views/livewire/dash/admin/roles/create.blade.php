<section>
    <x-slot name="header">
        {{__($header)}}
    </x-slot>
    <x-slot name="button">
        <a class="btn btn-primary" href="{{ route('admin.roles.index') }}" wire:navigate>
            <x-button-1 type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"/>
                </svg>
            </x-button-1>
        </a>
    </x-slot>

    <div class="my-3">
        <x-validation-errors></x-validation-errors>

        <form>
            <div class="flex flex-col justify-center space-x-2">
                <div class="mb-2 inline-flex justify-center">
                    <x-jet-input type="text" id="name" name="name" wire:model="name"
                                 class="w-2/3" placeholder="Role Name" required></x-jet-input>

                </div>

                <div class="mb-2">
                    <strong class="text-gray-800 dark:text-gray-300">Permission:</strong>
                    <div class="py-2 grid grid-col-4 md:grid-cols-3 sm:grid-cols-2 gap-4
                border-y border-dashed border-gray-400 dark:border-gray-600">
                        @foreach($permission as $p)
                            <x-label>
                                <x-checkbox name="permissions[]" wire:model="permissions"
                                            value="{{$p->id}}">
                                </x-checkbox>
                                {{ $p->name }}
                            </x-label>

                        @endforeach
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <x-button-1 type="button" wire:click.prevent="store">
                        {!! "Create Role" !!}
                    </x-button-1>
                </div>
            </div>
        </form>
    </div>

</section>
