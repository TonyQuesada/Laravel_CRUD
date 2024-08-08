<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <form method="POST" action="{{ route('students.update', $student->id) }}" class="max-w-sm mx-auto">
                    @CSRF
                    @method('PUT')

                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="name" name="name" id="name" value="{{ old('name', $student->name) }}"  class="bg-gray-50 border border-gray-300 text-gray-900">
                    </div>
                        
                    <div class="mb-5">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="age" name="age" id="age" value="{{ old('age', $student->age) }}" class="bg-gray-50 border border-gray-300 text-gray-900">
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 py-2 px-4 rounded mr-2">Update</button>
                    <a href="{{ route('students.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 py-2 px-4 rounded">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
