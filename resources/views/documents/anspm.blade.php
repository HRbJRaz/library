<ul role="list" class="divide-y divide-gray-100">
   @foreach ($documents as $document)
   @if($document->type == 'ANSPM')
      <a href="{{asset($document->url)}}#toolbar=0">
         <li class="flex justify-between gap-x-6 py-5">
               <div class="flex min-w-0 gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset($document->coverpage)}}" alt="">
                  <div class="min-w-0 flex-auto">
                  <p class="text-sm font-semibold leading-6 text-gray-900">{{$document->number}}</p>
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$document->name}}</p>
                  </div>
               </div>
               <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  </p>
                  <p class="text-sm leading-6 text-gray-900">Issue/Rev : 0{{$document->issue}}/0{{$document->revision}}</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">{{$document->effective_date->format('d/m/y')}}</time></p>
               </div>
         </li>
      </a>
      @endif
   @endforeach
</ul>