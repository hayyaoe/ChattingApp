<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h1 class="text-xl font-bold text-slate-200 drak:text-slate-800">Add Contact</h1>
        <div class="max-w-xl">
            <div class="flex flex-col">
                <div class="flex flex-row mt-4">
                    <input type="text" class="bg-gray-100 dark:bg-gray-800 placeholder:dark:text-slate-500 placeholder:text-slate-600 border-gray-600 text-slate-800 dark:text-slate-100 placeholder:font-thin flex-grow rounded-lg text-lg" wire:model="search" placeholder="Search username"/>
                    <button class="bg-gray-500/40 dark:bg-gray-400/40 rounded-lg h-12 w-12 border border-gray-600 text-2xl active:bg-gray-600/50 active:dark:bg-gray-500/50 ml-4 mr-4" wire:click="searchUsers">🔎</button>
                </div>
                <div class="bg-gray-300/30 dark:bg-gray-800/30">
                    <div wire:loading wire:target="search" class="loading text-slate-800 dark:text-slate-200 mt-4 text-lg">
                        Searching... 🔎
                    </div>

                    @if(count($results) > 0)
                        @foreach($results as $user)
                            <div class="flex items-center gap-4 bg-gray-100 dark:bg-gray-800 p-4 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex-shrink-0 rounded-full border p-1">
                                    <img src="{{ asset($user->profile) }}" class="w-12 h-12 object-cover rounded-full bg-slate-100">
                                </div>
                                <div class="flex flex-col w-full text-left">
                                    <h1 class="font-semibold text-xl text-stone-900 dark:text-stone-100 truncate">{{ $user->name }}</h1>
                                    <h1 class="font-semibold text-md text-stone-900 dark:text-stone-100 truncate">{{ $user->username }}</h1>
                                </div>
                                <div class="flex flex-col items-center flex-shrink-0">
                                    <button
                                        class="text-semibold text-slate-800 dark:text-slate-200 text-lg p-2 bg-gray-500/40 dark:bg-gray-400/40 rounded-lg {{ $this->isContact($user->id) ? '' : 'hover:bg-gray-600/50 hover:dark:bg-gray-500/50' }}"
                                        wire:click="addContact({{ $user->id }})"
                                        {{ $this->isContact($user->id) ? 'disabled' : '' }}
                                    >
                                        {{ $this->isContact($user->id) ? 'In Contacts' : 'Add Contact' }}
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @if(strlen($search) > 0)
                            <p class="text-slate-800 dark:text-slate-200 mt-4 text-lg">No results found.</p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h1 class="text-xl font-bold text-slate-200 drak:text-slate-800">Contacts</h1>
        <div class="max-w-xl overflow-y-scroll">
            @if(count($contacts) > 0)
                @foreach($contacts as $contact)
                    <div class="flex items-center gap-4 bg-gray-100 dark:bg-gray-800 p-4 active:bg-gray-200 active:dark:bg-gray-700 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex-shrink-0 rounded-full border p-1">
                            <img src="{{ asset('images/profile2.png') }}" class="w-12 h-12 object-cover rounded-full bg-slate-100">
                        </div>
                        <div class="flex flex-col w-full text-left">
                            <h1 class="font-semibold text-xl text-stone-900 dark:text-stone-100 truncate">{{ $contact->contactInstance->name }}</h1>
                            <h1 class="font-semibold text-md text-stone-900 dark:text-stone-100 truncate">{{ $contact->contactInstance->username }}</h1>
                        </div>
                        <div class="flex flex-col items-center">
                            <button class="text-semibold text-slate-800 dark:text-slate-200 text-lg p-2 bg-gray-500/40 dark:bg-gray-400/40 rounded-lg hover:bg-gray-600/50 hover:dark:bg-gray-500/50">Chat</button>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-slate-800 dark:text-slate-200 mt-4 text-lg">Contacts Empty</p>
            @endif
        </div>
    </div>
</div>
