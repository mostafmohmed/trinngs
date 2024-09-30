<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('assetes/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('assetes/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('assetes/plugins/summernote/summernote-bs4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assetes/plugins/dropzone/dropzone.css')}}">
		{{-- <link rel="stylesheet" href="{{asset('assetes/plugins/select2/css/select2.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('assetes/css/custom.css')}}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
frt
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
               function deleteservises(id){
  var url='{{route("task.destroy","ID")}}';
  var nweurl=url.replace("ID",id);
  if(confirm('are you sure you want to delete')){
    $.ajax({
        url:nweurl,
        type:'delete',
        data:{},
dataType:'json',
        headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
        success:function(response){

            if (response['status']) {
              console.log('khkhk');
              
                
            }
        }
    })
  }
        }
        </script>
    </body>
</html>
