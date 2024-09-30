<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <br>
    <br>
    <br>

    <div class="card-body table-responsive p-0">	
        <div class="col-sm-6 text-right">
            <a href="{{route('task.create')}}" class="btn btn-primary">New Category</a>
        </div>							
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                   
                    <th>Name</th>
                  
                
                    <th width="100">Status</th>
                    <th width="100">Action</th>
                      <th width="100">addcomment</th>
                </tr>
            </thead>
            <tbody>
                
      
        @foreach ($tasks as $task)
        <tr>
            <td> {{$task->title}}</td>
            
            <td>
           
          
            @if ($task->status==1)
            <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>    
            @else
            <svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            @endif
              
                
        

         
         
        </td>
        <td>
            <a href="{{route('task.edit',$task->id)}}">
                <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                </svg>
            </a>
            <form action="{{route('task.destroy',$task->id)}}" method="post">
                @csrf
                @method('DELETE')
            <button class="text-danger w-4 h-4 mr-1" type="submit">
                <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                  </svg>
            </button>
           
        </form>
        </td>
     <td>
        <a class="btn btn-primary" href="{{route('task.comment',$task->id)}}" role="button">comment</a>
     </td>
           </tr> 
        @endforeach
      

        
           
                
            </tbody>
        </table>										
    </div>
</x-app-layout>
