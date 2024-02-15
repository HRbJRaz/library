<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="soi-tab" data-tabs-target="#soi" type="button" role="tab" aria-controls="soi" aria-selected="false">Supplementary</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="roi-tab" data-tabs-target="#roi" type="button" role="tab" aria-controls="roi" aria-selected="false">Regional</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="uoi-tab" data-tabs-target="#uoi" type="button" role="tab" aria-controls="uoi" aria-selected="false">Unit</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="soi" role="tabpanel" aria-labelledby="soi-tab">
                    @include('instructions.supp-table')
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="roi" role="tabpanel" aria-labelledby="roi-tab">
                    @include('instructions.region-table')
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="uoi" role="tabpanel" aria-labelledby="uoi-tab">  
                    @include('instructions.unit-table')
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
