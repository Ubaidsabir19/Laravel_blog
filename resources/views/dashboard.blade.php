<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" >
    @if(session()->has('status'))
                    {{session('status')}}
                    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white bg-gray-900">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class= "bg-gray-200">
                            <tr>
                                <th scope = "col" class = "px-6 py-3 text-left text-xs font-medium text-gray-100">Name</th>
                                <th scope = "col" class = "px-6 py-3 text-left text-xs font-medium text-gray-100">Title</th>
                                <th scope = "col" class = "px-6 py-3 text-left text-xs font-medium text-gray-100">Body</th>
                                <th scope = "col" class = "px-6 py-3 text-left text-xs font-medium text-gray-100">Actions</th>
                            </tr>
                        </thead>
                    <tbody class="bg-neutral-600 text-white divide-y divide-gray-500">
                    @foreach($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{$post->user->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$post->title}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$post->body}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"><a href = "{{url('/post/edit', $post->id)}}" class="bg-white text-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-sm py-1 px-2 rounded">Edit</a></br></br><a href = "{{url('/post/delete', $post->id)}}" class="bg-white text-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-sm py-1 px-2 rounded">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
