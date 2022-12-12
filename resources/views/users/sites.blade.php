
<x-app-layout>



  <div class="container px-4 mx-auto sm:px-8">
        <div class="py-8">
          <div>
            <h2 class="text-3xl font-semibold leading-tight text-center">Mis Sitios</h2>
          </div>
          <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div
              class="inline-block w-full overflow-hidden rounded-lg shadow-md"
            >
              <table class="w-full leading-normal">
                <thead>
                  <tr>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Nombre
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      id
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Fecha de Creacion
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Estado
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Ultima Modificacion
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Acciones
                    </th>
                  </tr>

                </thead>
                <tbody>
                 @foreach ($sites as $site)
                  <tr>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{$site->nombre}}
                          </p>
                        </div>
                    </td>


                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$site->siteid}}
                        </p>
                    </td>


                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$site->creado}}
                        </p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                      <span
                        class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 rounded-full opacity-50"
                        ></span>
                        <span class="relative">{{$site->publish_status}}</span>
                      </span>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{$site->modification_date}}</p>
                        </span>
                    </td>
                    <td class="flex justify-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                      <form class="mr-5" action="/datos" method="post">
                        @csrf
                        <input type="hidden" value="{{$site->nombre}}" name="nombre">
                        <input type="hidden" value="{{$site->siteid}}" name="siteid">
                        <button class="flex items-center p-3 px-4 text-white duration-300 bg-green-600 rounded-md cursor-pointer " type="submit">Publicar</button>
                      </form>
                      <a class="flex items-center p-3 px-4 mr-5 text-white duration-300 rounded-md cursor-pointer bg-violet-600 " href="/editar/{{Auth::user()->email}}/{{$site->siteid}}">Editar</a>

                      <a class="flex items-center p-3 px-4 mr-5 text-white duration-300 bg-red-600 rounded-md cursor-pointer" href="/delete/{{$site->siteid}}/{{$site->id}}">Borrar Sitio</a>

                      <form action="{{route('despublicar')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$site->siteid}}" name="siteid">
                        <button class="flex items-center p-3 px-4 text-white duration-300 bg-yellow-600 rounded-md cursor-pointer ">Despublicar</button>
                      </form>

                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
</x-app-layout>
