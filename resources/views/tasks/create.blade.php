<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<br>
<br>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">					
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>create</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="categories.html" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form action="{{route('task.store')}}"   method="POST" id="Categoryform" name="Categoryform">
                    @csrf
                <div class="card">
                    <div class="card-body">								
                        <div class="col">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="title"   value="" id="name" class="form-control" placeholder="Name">	
                                
                                </div>
                                
                                
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">descrption</label>
                                    <input type="text" name="desc"   value="" id="name" class="form-control" placeholder="Name">	
                                
                                </div>
                                
                                
                            </div>
                          
                           
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status"></label>
                                    <select name="status" id="status" class="form-control">
                                        <option   {{  ($task->status==1?'selected':'')}}  value="1">Active</option>
                                        <option     {{  ($task->status==0?'selected':'')}}    value="0">block</option>
                                    </select>
                                       
                                </div>
                            </div>									 --}}
                        </div>
                        
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status"></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option   value="0">block</option>
                                    </select>
                                       
                                </div>
                            </div>	
                        
                    </div>							
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary">back</button>
                    <button type="submit" class="btn btn-primary">submit</button>
                    <a href="brands.html" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </div>
            </form>

            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>

   
</x-app-layout>
