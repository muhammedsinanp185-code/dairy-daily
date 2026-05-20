<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Diary Entry
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

            <form method="POST" action="{{ route('diary.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1">Title</label>
                    <input type="text"
                           name="title"
                           class="w-full border rounded p-2"
                           placeholder="Entry title">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Mood</label>
                    <input type="text"
                           name="mood"
                           class="w-full border rounded p-2"
                           placeholder="Happy, Sad, Excited...">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Date</label>
                    <input type="date"
                           name="entry_date"
                           class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Diary Content</label>
                    <textarea name="content"
                              rows="6"
                              class="w-full border rounded p-2"
                              placeholder="Write your thoughts..."></textarea>
                </div>

                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded">
                    Save Entry
                </button>

            </form>

        </div>
    </div>
</x-app-layout>