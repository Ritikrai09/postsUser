@extends('auth.app')

  @section('content1')

  <div class='flex justify-center'>       
      <div class="w-8/12">
        <div class='p-6 mt-2'>
            <h1 class='text-2xl font-medium mb-1'> {{ $user->name }} </h1>
            <p>Posted {{$posts->count() }} {{ Str::plural('post', $posts->count()) }} and recieved
            {{ $user->recievedLikes->count() }} likes  </p>
         </div>
         <div class="w-8/12 bg-white p-6 rounded-lg mt-6">
          @if($posts->count())
           @foreach($posts as $post)
              <x-post :post='$post'/>
            @endforeach
               {{ $posts->links() }}
          @else
            <h4> {{ $user->name }}  does not have posts yet</h4>
          @endif  
     </div>
  </div>
@endsection