<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        @for($counts=1; $counts<=9; $counts++)
    <!--Card 1-->
    <div class="rounded overflow-hidden shadow-lg">
    <img class="w-full" src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-center">Mountain</div>
        <p class="text-gray-700 text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="px-6 pt-4 pb-2 text-center">
        <span class="inline-block bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-white-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-white-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-white-700 mr-2 mb-2">#winter</span>
      </div>
    </div>
    @endfor


</div>
</x-app-layout>
