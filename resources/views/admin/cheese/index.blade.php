<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cheese factory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{route('admin.cheese.create')}}" class="btn-links btn-lg mb-2" >+ add New Cheese</a>
        @forelse ($cheeses as $cheese)
        <div class="my-6 p-6 bg-white border-b border-gray-200">
            <a href="{{route('admin.cheese.show', $cheese)}}">

                <h2 class="text-2xl"><strong> Cheese name:</strong> 
                    {{$cheese->name}}
                </h2>
                <h3 class=" text-1xl"><strong> Cheese description:</strong>   {{($cheese->description)}}</h3>
                <h3 class=" text-1xl"><strong> Cheese type:</strong>   {{($cheese->type)}}</h3>
                <h3 class=" text-1xl"><strong> Customer name:</strong>{{($cheese->Customer->name)}}</h3>
               
             
            <span class="block mt-4 text-sm opacity-70">  {{$cheese->updated_at->diffForHumans()}}</span>
        </a>
        </div>
      @empty 
      <p>no cheeses yet.</p>
        @endforelse
        {{-- {{$cheeses->links()}} --}}

        </div>
    </div>
</x-app-layout>
