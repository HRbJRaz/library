

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Doc Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Effective Date
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($instructions as $instruction)
            @if($instruction->type == 'SOI')
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     {{ $instruction->number}}
                  </th>
                  <td class="px-6 py-4">
                     <a href="{{ asset($instruction->url)}}">
                        {{ $instruction->title}}
                     </a>
                  </td>
                  <td class="px-6 py-4">
                     {{ $instruction->effective_date}}
                  </td>
               </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
