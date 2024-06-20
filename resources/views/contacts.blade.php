<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="text-xl font-bold text-slate-200 drak:text-slate-800">Add Contact</h1>
                <div class="max-w-xl">
                    <livewire:add-contact />
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="text-xl font-bold text-slate-200 drak:text-slate-800">Contacts</h1>
                <div class="max-w-xl overflow-y-scroll">
                    @for($i = 0; $i < 20; $i++)
                        <div class="flex items-center gap-4 bg-gray-100 dark:bg-gray-800 p-4 active:bg-gray-200 active:dark:bg-gray-700 border-b border-gray-200 dark:border-gray-700">
                            <div class="flex-shrink-0 rounded-full border p-1">
                                <img src="{{ asset('images/profile2.png') }}" class="w-12 h-12 object-cover rounded-full bg-slate-100">
                            </div>
                            <div class="flex flex-col w-full text-left">
                                <h1 class="font-semibold text-xl text-stone-900 dark:text-stone-100 truncate">Username</h1>
                            </div>
                            <div class="flex flex-col items-center">
                                <button class="text-semibold text-slate-800 dark:text-slate-200 text-lg p-2 bg-gray-500/40 dark:bg-gray-400/40 rounded-lg hover:bg-gray-600/50 hover:dark:bg-gray-500/50">Chat</button>
                            </div>
                        </div>

                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
