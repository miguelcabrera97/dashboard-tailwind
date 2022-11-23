<x-app-layout>

    <div class="max-w-screen-md mx-auto p-5">
        {{-- TITULO DE SOPORTE --}}
            <div class="text-center mb-10">
                 <p class="mt-4  text-sm leading-7 text-gray-500 font-regular uppercase">
                    Centro de
                 </p>
                 <p class="text-3xl sm:text-4xl   font-extrabold tracking-tight text-gray-900">
                    Soporte <span class="text-indigo-600">Conectaply</span>
                 </p>

            </div>

        <form class="w-full">
        <div class="flex flex-wrap -mx-3 mb-6">


          {{-- USUARIO EMAIL --}}
          <div class="w-full md:w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Correo Electrónico
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="{{Auth::user()->email}}" disabled>
          </div>
        </div>


        <div class="flex flex-wrap -mx-3 mb-6">
            {{-- SITIO WEB INPUT --}}
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="mt3">
                    <div class="relative">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pais">
                            Sitio Web
                        </label>
                        <select  name="pais"  required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{-- <option value="México">México</option> --}}
                          <option value="0"> Ningún Sitio </option>
                           @foreach ($sitelist as $sitename)
                             <option value="{{$sitename->siteid}}"> ({{$sitename->siteid}})  {{$sitename->nombre}} </option>
                           @endforeach
                          </select>

                      </div>
                   </div>

            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="mt3">
                    <div class="relative">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pais">
                           Motivo de Consulta
                        </label>
                        <select  name="pais"  required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                          <option value="1">Falla Técnica </option>
                          <option value="2">Tienda Ecommerce</option>
                          <option value="3">otro</option>
                        </select>

                      </div>
                   </div>

            </div>

        </div>




          <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Describe que está pasando
            </label>
            <textarea rows="10" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

            </textarea>
          </div>
          <div class="flex justify-between w-full px-3">

            <button class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
             Enviar Consulta
            </button>
          </div>

        </div>

      </form>
      </div>




</x-app-layout>
