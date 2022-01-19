@extends('auth.app')

@section('content1')
    <div class='flex justify-center'> 
        <div class="w-2/6 bg-white p-6 rounded-lg mt-3">
          <form action="{{ route('posts') }}" method='post'>
            @csrf
            @if(session()->has('fail'))
               <div class='alert alert-danger text-center'>
                   <ul>
                       <li>{{ session()->get('fail')}}</li>
                   </ul>
               </div>
            @endif
           <div class='mb-4'>
                <label for="name" class='sr-only'>Body</label>
                <textarea name='body' id='body' cols='40' rows='4' class='bg-gray-100 border-2 w-full p-4 rounded-lg mb-2'
                placeholder='write your comment here...'></textarea>
                  @error('body')
                    <div class='text-red-500 mt-2 text-sm'>
                       {{ $message }}
                   </div>
                @enderror
              </div>
            <div class='mb-4'>
              <button type="submit" class='w-small bg-blue-500 text-white text-center font-medium px-4 py-3 rounded-lg'>Post</button>
          </div>
       </form>

       @if($posts->count())
       
          @foreach($posts as $post)
            
            <x-post :post='$post'/>

           @endforeach
              {{$posts->links()}}
          @else
               
        <h4>No posts yet</h4>
      
             @endif
    </div>
</div>
@endsection