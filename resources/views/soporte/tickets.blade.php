<x-app-layout>
  
    <div class="mb-10 text-center">
        <p class="mt-4 text-sm leading-7 text-gray-500 uppercase font-regular">
           Centro de
        </p>
        <p class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
           Mis <span class="text-indigo-600">solicitudes</span>
        </p>


        <div class="w-full h-screen bg-gray-100">
            <div class="mx-auto max-w-9xl sm:px-6 lg:px-8">
              <div class="flex flex-col">

                <div class="flex flex-wrap justify-between flex-grow py-4 -mb-2">
                  <div class="flex items-center py-2">
                    <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500" id="inline-searcg" type="text" placeholder="Search">
                  </div>
                  <div class="flex items-center py-2">
                    <a href="{{ route('soporte') }}"
                       class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
                        Crear Nueva Consulta
                    </a>
                  </div>
                </div>
                <div class="py-2 -my-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block w-full overflow-x-auto align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                      <!-- HEAD start -->
                      <thead>
                        <tr class="text-base leading-4 tracking-wider text-gray-900 bg-white border-b border-gray-200">
                          
                          
                        </tr>
                        <tr class="text-xs leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          <th></th>
                          <th class="px-6 py-3 font-medium text-left">
                              No. Ticket
                          </th>
                          <th class="px-6 py-3 font-medium text-left">
                            Author
                          </th>
                          <th class="px-6 py-3 font-medium text-left">
                            Sitio
                          </th>
                          <th class="px-6 py-3 font-medium text-left">
                            Status
                          </th>
                          <th class="px-6 py-3 font-medium text-left">
                            Creado
                          </th>
                          <th class="px-6 py-3 font-medium text-left">
                          </th>
                        </tr>
                      </thead>
                      <!-- HEAD end -->
                      <!-- BODY start -->
                      <tbody class="bg-white">
                        @foreach ($ticketss as $ticket)
                           <tr>
                            
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <input class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" type="checkbox" />
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              {{$ticket->idTicket}}
                            </div>
                          </td>
                          <td class="px-20 py-4 whitespace-no-wrap border-b border-gray-200">

                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-100">
                                {{$ticket->NombreUser}}
                              </div>
                              <div class="ml-4">
                                <div class="text-sm font-medium leading-5 text-gray-900">
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              {{$ticket->NombreSitio}}
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                              published
                            </span>
                          </td>
                          <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            {{$ticket->created_at}}
                          </td>
                          <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                            <a href="#"
                               class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline" >
                              Show
                            </a>
                          </td>
                        </tr> 
                        @endforeach
                        

                        

                        
                      </tbody>
                      <!-- BODY end -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>






   </div>
</x-app-layout>
