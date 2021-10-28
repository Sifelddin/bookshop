<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                {{ $column }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                {{ $column1 }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Update
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Delete
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
             @foreach ($departements as $departement)
                 
             
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">                  
                    <div class="text-sm font-medium text-gray-900">
                        {{ $departement->dep_id }}
                    </div>                   
                </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">                  
                    <div class="text-sm font-medium text-gray-900">
                        {{ $departement->dep_name}}
                    </div>                   
                </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <a href="{{ route('departements.edit',$departement->dep_id) }}" class="px-2 inline-flex text-sm leading-5 rounded-lg text-blue-400 hover:text-indigo-900">
                    Edit
                </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500">
                    <form action="{{ route('departements.destroy',$departement->dep_id) }}" method="POST">
                        @csrf
                       @method('delete')
                       <button class="hover:text-indigo-900">Delete</button>
                       </form> 
                </td>
            </tr>
        @endforeach  
            <!-- More people... -->
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>