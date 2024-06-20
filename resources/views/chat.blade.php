@extends('layouts.livewire-layout')

@section('main')
<!-- <div class="grid grid-cols-3 grid-flow-row"> -->
<div class="flex h-full">
    <div class="w-96 scroll-smooth overflow-y-scroll h-full border-r border-gray-600 bg-gray-100 dark:bg-gray-800">
        <div class="flex flex-row w-full bg-gray-200/30 dark:bg-gray-700/30 items-center justify-between pt-2">
            <a href="{{ route('profile.edit') }}" class="mx-4 text-slate-800 dark:text-slate-100 font-bold p-2 text-2xl active:text-slate-600 active:dark:text-slate-300">Profile</a>
            <a href="{{ route('contacts') }}" class="mx-4 text-slate-800 dark:text-slate-100 font-bold p-2 text-2xl active:text-slate-600 active:dark:text-slate-300">Contacts</a>
        </div>
        <livewire:search-user />
        @for( $i = 0; $i < 20; $i++)
            <livewire:user-chat />
        @endfor
    </div>
    <div class="scroll-smooth bg-gray-800 h-full flex-grow">
        <livewire:chat-box />
    </div>
</div>
@endsection
