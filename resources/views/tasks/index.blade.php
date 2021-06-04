<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido ') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Descripcion
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Acciones
              </th>
                           
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($tasks as $task)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{$task->description}}
                </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="{{route('tasks.show', $task->id)}}" class="text-blue-600 hover-blue-900 mb-2">ver</a>
                <a href="{{route('tasks.edit', $task->id)}}" class="text-indigo-600 hover-indigo-900 mb-2">editar</a>
                <form action="inline-block" action="{{route('tasks.destroy', $task->id)}}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2">
                </form>

              </td>
            </tr>

            <!-- More people... -->
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>
