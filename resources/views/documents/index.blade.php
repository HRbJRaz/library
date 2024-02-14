<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="anspm-tab" data-tabs-target="#anspm" type="button" role="tab" aria-controls="anspm" aria-selected="false">ANSPM</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ansim-tab" data-tabs-target="#ansim" type="button" role="tab" aria-controls="ansim" aria-selected="false">ANSIM</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ansuh-tab" data-tabs-target="#ansuh" type="button" role="tab" aria-controls="ansuh" aria-selected="false">ANSUH</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="forms-tab" data-tabs-target="#forms" type="button" role="tab" aria-controls="forms" aria-selected="false">Forms</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="anspm" role="tabpanel" aria-labelledby="anspm-tab">
                        @include('documents.anspm')
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ansim" role="tabpanel" aria-labelledby="ansim-tab">
                        @include('documents.ansim')
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ansuh" role="tabpanel" aria-labelledby="ansuh-tab">
                        @include('documents.ansuh')
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="forms" role="tabpanel" aria-labelledby="forms-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
