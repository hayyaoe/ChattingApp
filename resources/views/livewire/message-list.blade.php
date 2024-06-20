<div class="w-full h-full">
    <div class="h-8 opacity-0"></div>
    @for($i = 0; $i< 15; $i++)
    <div class="flex flex-row justify-start mx-8 my-4">
        <img src="{{ asset('images/profile2.png') }}" class="w-10 h-10 object-cover rounded-full bg-slate-100">
        <div class="p-2 rounded-xl bg-gray-200 dark:bg-gray-700 mx-2">
            <div>
                <h1 class="text-blue-500 ">Username</h1>
                <p class="text-slate-800 text-md dark:text-slate-300">Ini text bubble</p>
                <p class="text-slate-500 text-sm w-full text-right"> 14:23</p>
            </div>
        </div>
    </div>
    @endfor
    <div class="h-2 opacity-0"></div>
</div>
