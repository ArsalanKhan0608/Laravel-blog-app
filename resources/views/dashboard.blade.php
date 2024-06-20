<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Blog Posts Section -->
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Recent Blog Posts</h3>
                    <ul>
                        <li class="mb-4">
                            <h4 class="text-xl font-bold">Blog Post Title 1</h4>
                            <p class="text-gray-700 dark:text-gray-300">This is a summary of the first blog post...</p>
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </li>
                        <li class="mb-4">
                            <h4 class="text-xl font-bold">Blog Post Title 2</h4>
                            <p class="text-gray-700 dark:text-gray-300">This is a summary of the second blog post...</p>
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </li>
                        <li class="mb-4">
                            <h4 class="text-xl font-bold">Blog Post Title 3</h4>
                            <p class="text-gray-700 dark:text-gray-300">This is a summary of the third blog post...</p>
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Add New Blog Post Button -->
            <div class="mt-8">
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Blog Post</a>
            </div>
        </div>
    </div>
</x-app-layout>
