<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey-400  ">
                <div class="p-6 bg-grey-600 border-b border-black">
                    <form method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-black-600" for="title">Title<span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" style = "width:500px;">
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-black-600">Body<span class="text-red-500">*</span></label></br>
                            <textarea name="body"  class="border-2 border-gray-300" style = "width:500px;">

                            </textarea>
                        </div>
</br>
                        <div class="flex p-1">
                            <button type="submit" class="py-2 bg-gray-300 text-black rounded" value = "POST">Save Blog</button>
                        </div>
                    </form>
                    @if(session()->has('status'))
                    {{session('status')}}
                    @endif
                </div>
            </div>
        </div>
    </div>

   
</x-app-layout>
