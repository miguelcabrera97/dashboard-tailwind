
<x-app-layout>
  
    

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
          <div>
            <h2 class="text-2xl font-semibold leading-tight">Invoices</h2>
          </div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div
              class="inline-block w-full shadow-md rounded-lg overflow-hidden"
            >
              <table class="w-full leading-normal">
                <thead>
                 @foreach ($sites as $site)   
                  
                </thead>
                <tbody>
                  <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{$site->nombre}}
                          </p>
                        </div>
                    </td>


                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$site->siteid}}
                        </p> 
                    </td>


                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$site->creado}}
                        </p>
                    </td>

                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative">{{$site->publish_status}}</span>
                      </span>
                    </td>

                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{$site->modification_date}}</p>
                        </span>
                    </td>
                    <td class="flex px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <a class="p-3 mr-5 flex items-center rounded-md px-4 duration-300 cursor-pointer  bg-violet-600 text-white " href="/editar/{{Auth::user()->email}}/{{$site->siteid}}">Editar</a>
                    <a class="p-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-red-600 text-white " href="/delete/{{$site->siteid}}/{{$site->id}}">Borrar Sitio</a>
                    </td>
                  </tr>
                 @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div></div>
</x-app-layout>