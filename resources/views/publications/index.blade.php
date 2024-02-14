<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="od-tab" data-tabs-target="#od" type="button" role="tab" aria-controls="od" aria-selected="false">OD</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="soi-tab" data-tabs-target="#soi" type="button" role="tab" aria-controls="soi" aria-selected="false">SOI</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="roi-tab" data-tabs-target="#roi" type="button" role="tab" aria-controls="roi" aria-selected="false">ROI</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="uoi-tab" data-tabs-target="#uoi" type="button" role="tab" aria-controls="uoi" aria-selected="false">UOI</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="sb-tab" data-tabs-target="#sb" type="button" role="tab" aria-controls="sb" aria-selected="false">SB</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="sn-tab" data-tabs-target="#sn" type="button" role="tab" aria-controls="sn" aria-selected="false">SN</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="bulletin-tab" data-tabs-target="#bulletin" type="button" role="tab" aria-controls="bulletin" aria-selected="false">Bulletins</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="od" role="tabpanel" aria-labelledby="od-tab">
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="soi" role="tabpanel" aria-labelledby="soi-tab">
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="roi" role="tabpanel" aria-labelledby="roi-tab">
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="uoi" role="tabpanel" aria-labelledby="uoi-tab">
                        {!! $dataTable->table(['class' => 'w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400']) !!}    
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="sb" role="tabpanel" aria-labelledby="sb-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Safety Bulletin tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="sn" role="tabpanel" aria-labelledby="sn-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Safety Notice tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 " id="bulletin" role="tabpanel" aria-labelledby="bulletin-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Bulletin tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@push('page_css')
<link rel="stylesheet" src="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" src="
https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

@endpush
@push('page_scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
<script src="https://cdn.tailwindcss.com/3.4.1"></script>

{!! $dataTable->scripts() !!}
@endpush

</x-app-layout>
