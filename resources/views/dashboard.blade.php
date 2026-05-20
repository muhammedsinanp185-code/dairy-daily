<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Daily Diary
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h1 class="text-3xl font-bold mb-6">
                    Welcome to Your Diary 📖
                </h1>

                <a href="/diary/create"
                   class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow">
                    + Add Entry
                </a>

            </div>

        </div>
    </div>
</x-app-layout>