<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cheese factory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
        <div class="my-6 p-6 bg-white border-b border-gray-200">
            <form action="{{route('cheese.store')}}" method="post">
                @csrf
                <input type="text" name="name" placeholder="name" class="w-full" autocomplete="off"></input>
                <x-textarea name="text" rows="10" placeholder="start typing here...." class="w-full mt-6"></x-textarea>
                <button class="mt-6"> Save Cheese</button>
        </div>
      

        </div>
    </div>
</x-app-layout>
