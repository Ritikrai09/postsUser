@extends('auth.app')

@section('content1')
<div class='flex flex-col justify-center'> 
     @if(session()->has('success'))
               <div class='text-center p-1 alert alert-success'>
               <button type='button' class='text-white close' data-dismiss='alert'>❌</button>
                   <ul>
                       <li>{{ session()->get('success')}}</li>
                   </ul>
               </div>
            @endif
        <div class="w-100 text-center bg-white p-6 rounded-lg mt-3">
        Dashboard
    </div>
</div>
@endsection