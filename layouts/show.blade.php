@extends('auth.app')

@section('content1')
<div class='flex justify-center'> 
        <div class="w-2/6 bg-white p-6 rounded-lg mt-3">
        <x-post :post='$post'/>
    </div>
</div>
@endsection