<div class="w-full h-full bg-gray-100 dark:bg-gray-800 flex flex-col">
    <!-- Header -->
    <div class="w-full h-20 bg-gray-200/30 dark:bg-gray-700/30 border-b border-gray-600 flex flex-row items-center flex-shrink-0">
        <div class="flex-shrink-0 rounded-full border ml-8 mr-4 p-1">
            <img src="{{ asset('images/profile2.png') }}" class="w-12 h-12 object-cover rounded-full bg-slate-100">
        </div>
        <div class="flex flex-col">
            <h1 class="text-stone-800 dark:text-stone-100 font-semibold">
                Username
            </h1>
            <h2 class="text-sm text-stone-800 dark:text-stone-100 font-thin">
                Active
            </h2>
        </div>
    </div>
    <!-- Main Content -->
    <div class="flex-grow overflow-y-scroll">
        <livewire:message-list />
    </div>
    <!-- Footer -->
    <div class="bg-gray-200/30 dark:bg-gray-700/30 h-32 w-full bottom-0 border-t border-gray-600 pt-4 flex-shrink-0">
        <livewire:message-box />
    </div>
</div>
