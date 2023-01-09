
<x-app-layout>
    <div class="z-0 grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 xl:grid-cols-4 p-10 gap-6">

        @foreach ($templates as $template)
                {{-- CARD --}}
         <div class="border border-gray-200 grid grid-cols-1  mt-3 h-4/6" id="template_list">
            <div class="flex  flex-col"> {{--  Flex --}
                 {{-- Card Title--}}
                  {{-- End Card Title--}}
                 <div class="h-full w-full relative ">
                     {{-- Botones de Creación y preview --}}
                     <div class="  absolute rounded-b-2xl  backdrop-blur-sm bg-black/50 h-full w-full opacity-0 hover:opacity-100 hover:ease-all hover:duration-300 ">
                         <div class="grid grid-cols-1 gap-1 justify-items-center" style="padding-top: 45%" >

                           {{-- <input type="submit" class="m-2 w-3/5  items-center p-3 text-md text-center font-bold text-white bg-fuchsia-500 hover:bg-fuchsia-400 rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Empezar a crear" onclick="CrearSitio('{{$cont+1}}')" >  --}}

                           <div class="flex items-center justify-center h-full">
                            <button class="py-2 px-4 bg-fuchsia-500 text-white rounded hover:bg-fuchsia-700" onclick="toggleModal( '{{$template->template_id}}' , '{{$template->desktop_thumbnail_url}}', '{{$template->template_name}}')">Empezar a Crear</button>
                          </div>

                           {{-- <a target="_blank" class="m-2 w-3/5  items-center p-3 text-md text-center font-bold text-white bg-fuchsia-500 hover:bg-fuchsia-400 rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  href="crears/{{$template->template_id}}/{{Auth::user()->email}}">Empezar a Crear</a>  --}}

                            <a class="w-3/5 m-2  items-center p-3 text-md text-center text-white rounded-lg hover:underline-offset-8 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:underline" target="_blank" href="{{$template->preview_url}}">Vista Previa</a>
                            {{-- <input type="text" name="{{$template->template_name}}"  id="template{{$cont}}" value="template{{$cont}}"> --}}
                         </div>
                     </div>
                      {{-- END Botones de Creación y preview --}}

                     {{-- background Image Div--}}
                     <div class=" bg-cover bg-center  h-full w-full opacity-1 bg-white" >
                         <img class="rounded-t-3xl " src="{{$template->desktop_thumbnail_url}}" alt="Imagen-Fondo" border="0">
                     </div>
                     {{-- END background Image Div--}}

                 </div>
                 <div class="rounded-b-2xl bg-white w-full text-center  py-2">
                    <p class="text-sm capitalize">{{$template->template_name}}</p>
                 </div>
              </div>{{-- End Flex --}}
         </div>
          {{--  END CARD --}}
        @endforeach


    </div>

    {{-- <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-900 opacity-75" />
          </div>
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
          <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <label> Nombre del sitio</label>
              <form action="{{route('crear')}}" method="POST">
                @csrf
                 <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" name="nombre" id="nombresite" />
                @error('nombre')
                  <br>
                  <small>{{$message}}</small>
                  <br>
                @enderror
                 <input type="hidden" class="w-full bg-gray-100 p-2 mt-2 mb-3" name="template_id" id="templateid"/>
                 <input type="hidden" class="w-full bg-gray-100 p-2 mt-2 mb-3" name="user" id="emailuser" value="{{Auth::user()->email}}" />
                 <button type="button" class="m-2 items-center p-3 text-md text-center font-bold bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancelar</button>
                 <input type="submit" id="CrearSitio" class="m-2  items-center p-3 text-md text-center font-bold text-white bg-fuchsia-500 hover:bg-fuchsia-400 rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Crear mi Sitio" >
              </form>
            </div>
          </div>
        </div>
      </div> --}}


      {{-- MODAL SITIO WEB --}}
      <div  class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden"id="modal">   {{-- PADRE--}}
        <div class="flex items-center justify-center min-height-200vh pt-5 px-4 pb-20 text-center sm:block sm:p-0 " > {{-- HIJO --}}
            {{-- CLASE QUE OSCURECE LA PANTALLA AL REDEDOR DEL MODAL --}}
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75" />
            </div>

            {{-- CENTRA EL MODAL AL CENTRO DE LA PANTALLA  --}}
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

            {{-- CONTENEDOR PADRE DIV CONTENIDO MODAL  --}}
            <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full md:max-w-2xl" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
               {{-- CONTENEDOR HIJO DIV CONTENIDO MODAL  --}}
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 ">
                    {{-- HEADER MODAL  --}}
                        <div class="flex items-start justify-between p-4  rounded-t dark:border-gray-600">
                            <button type="button" onclick="toggleModal()" class="absolute top-5 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                    {{--END HEADER MODAL  --}}

                    {{-- MODAL BODY --}}

                    <form action="{{route('crear')}}" method="POST" id="form_modal">
                        @csrf
                        <div class="pl-4 pb-5 w-full  flex ">

                                <div class="w-full lg:w-1/2 ">
                                    <div class=" w-full flex ">
                                        <img class="rounded-t-3xl w-3/4 m-auto" src="imagen1.jpg" id="imagen_modal" alt="Imagen-Fondo" border="0">
                                    </div>
                                    <div class="w-full flex">
                                        <b class="m-auto"> <p class=" text-sm" id="namemodal"></p> </b>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/2 h-full  grid grid-rows-4">
                                    <div class=" w-full text-center mt-5">
                                        <b>CREA TU SITIO WEB</b>
                                    </div>

                                        <div class=" w-full text-center mt-5">
                                            <div class="relative">
                                                <input required type="text" id="nombrar_sitio_modal" name="nombre" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                <label for="nombrar_sitio_modal" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nombre de Sitio Web</label>
                                            </div>
                                            <p id="validacion_ok" class="mt-2 text-xs text-green-600 dark:text-green-400 text-left Oculto"><span class="font-medium" id="okname"> </span> es un nombre válido.</p>
                                            <p id="validacion_not" class="mt-2 text-xs text-red-600 dark:text-red-400 text-left  Oculto"><span class="font-medium" id="notname"> </span> no es un nombre válido.</p>
                                        </div>
                                        <div class=" w-full text-center mt-3   ">
                                            <button type="sumbit" class="mt-2 px-4 py-2 rounded bg-rose-500 hover:bg-rose-400 text-white font-semibold text-center block w-full focus:outline-none focus:ring focus:ring-offset-2 focus:ring-rose-500 focus:ring-opacity-80 cursor-pointer hover:bg-rose-600 "> Empezar a Crear</button>
                                        </div>
                                        <input type="hidden" class="w-full bg-gray-100 p-2 mt-2 " name="template_id" id="templateid"/>
                                        <input type="hidden" class="w-full bg-gray-100 p-2 mt-2 " name="user" id="emailuser" value="{{Auth::user()->email}}" />
                                </div>
                        </div>
                    </form>
                    {{-- END MODAL BODY --}}
                </div>
                {{-- END CONTENEDOR HIJO DIV CONTENIDO MODAL  --}}
            </div>
            {{-- END CONTENEDOR PADRE DIV CONTENIDO MODAL  --}}

        </div> {{-- END HIJO--}}
      </div> {{-- END PADRE--}}
      {{-- END MODAL SITIO WEB --}}


      {{-- NUEVO MODAL PRUEBA --}}




  <script>
   function toggleModal(id, img, nombre)
   {
        document.getElementById('modal').classList.toggle('hidden')
        document.getElementById("templateid").value = id;
        document.getElementById("imagen_modal").src = img;
        let nombresite = document.getElementById("namemodal").innerHTML = nombre.toUpperCase();
        //alert('img');
    }





  </script>
</x-app-layout>
