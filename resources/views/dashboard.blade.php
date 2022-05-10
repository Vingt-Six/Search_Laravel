<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form action="{{ route('dashboard') }}">
        <div class='flex items-center justify-center mt-10'>
            <div class="flex items-center max-w-md mx-auto bg-white rounded-lg " x-data="{ search: '' }">
                <div class="w-full">
                    <input type="search"
                        class="w-full px-4 py-1 text-gray-800 border-transparent focus:border-transparent focus:ring-0"
                        placeholder="search" x-model="search" name="q" value="{{ request()->q ?? '' }}">
                </div>
                <div>
                    <button type="submit"
                        class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-500 to-indigo-800">
        <tr class="text-left border-b-2 border-indigo-300">
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Email</th>
        </tr>
    @foreach ($users as $user)
            <tr class="border-b border-indigo-400">
                <td class="px-4 py-3">{{ $user->name }}</td>
                <td class="px-4 py-3">{{ $user->email }}</td>
            </tr>
            @endforeach
        </table>
</x-app-layout>
