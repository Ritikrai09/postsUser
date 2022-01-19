@extends('auth.app')

@section('content1')
<div class='flex justify-center'> 
        <div class="w-2/6 bg-white p-6 rounded-lg mt-3">
        <form action="{{ route('register') }}" method='post'>
            @csrf
            <div class='mb-4'>
                <label for="name" class='sr-only'>Name</label>
                <input type="text" name='name' id='name' placeholder='your name' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-2' value='{{ old('name') }}'>

                @error('name')
                <div class='text-red-500 mt-2 text-sm'>
                {{ $message }}
                </div>
                @enderror
            </div>
            <div class='mb-4'>  
                <label for="username" class='sr-only'>Username</label>
                <input type="text" name='username' id='username' placeholder='username' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='{{ old('username') }}'>
                @error('username')
                    <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                     </div>
                @enderror
            </div>
            <div class='mb-4'>
                <label for="email" class='sr-only'>Email</label>
                <input type="text" name='email' id='email' placeholder='your email' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='{{ old('email') }}'>
                @error('email')
                <div class='text-red-500 mt-2 text-sm'>
                {{ $message }}
                </div>
                @enderror
            </div>
            <div class='mb-4'>
                <label for="password" class='sr-only'>Password</label>
                <input type="password" name='password' id='password' placeholder='your password' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value=''>
                @error('password')
                <div class='text-red-500 mt-2 text-sm'>
                {{ $message }}
                </div>
                @enderror
            </div>
           
            <div class='mb-4'>
                <label for="name" class='sr-only'>Confirm Password</label>
                <input type="password" name='password_confirmation' id='password_confirmation' placeholder='Repeat password' 
                class='bg-gray-100 border-2 w-full p-4  h-5 rounded-lg mb-3' value=''>
                @error('password_confirmation')
                <div class='text-red-500 mt-2 text-sm'>
                {{ $message }}
                </div>
                @enderror
            </div>
                <div class='mb-4'>
                     <button type="submit" class='w-full bg-blue-500 text-white text-center font-medium px-4 py-3 rounded-lg'>Register</button>
                </div>
            </div>   
        </form>  
    </div>
</div>
@endsection