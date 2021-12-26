@props(['post' => $post])

<div class='mb-4'>

      <a href="{{ route('users.posts', $post->user) }}" class='font-bold'>{{$post->user->name }}</a> 
              
                <span class='text-gray-500 text-sm'>
                      Date {{$post->created_at->diffForHumans()}}
                 </span>
             
                 <p class='font-grey-300 mb-2'>{{ $post->body}}</a> 
               
             <div class='flex items-center'>
 
             @auth 
            
             @if($post->ownedBy(auth()->user()))
              <div> 
                 <form action="{{ route('posts.destroy', $post) }}" method='post'>
                   @csrf
                    <div class='mr-2'> 
                    @method('DELETE')   
                    <button type='submit' class='text-blue-400'>Delete</button>
                   </div>
               </form>
             </div>
             @endif
             @if(!$post->likedBy(auth()->user()))
               <form action="{{ route('posts.likes', $post) }}" method='post'>
                  @csrf
                    <div class='mr-1'> 
                      <button type='submit' class='text-blue-400'>like</button>
                   </div>
               </form>
                @else
                <form action="{{ route('posts.likes', $post) }}" method='post'>
                   @csrf
                    <div class='mr-2'> 
                    @method('DELETE')   
                    <button type='submit' class='text-blue-400'>unlike</button>
                   </div>
               </form>
              @endif
           @endauth
                 <span>{{ $post->likes->count() }}  {{ Str::plural('like', $post->likes->count() )}}</span>
               </div>
             </div> 