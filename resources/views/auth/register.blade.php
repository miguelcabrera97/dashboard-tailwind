<x-authentication-layout>
    <h1 class="text-3xl text-gray-800 font-bold mb-6 text-center">{{ __('Crear mi cuenta') }} </h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="space-y-4 ">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                    <label class="block  text-gray-700 text-xs font-medium mb-2" for="name">
                        Nombre
                    </label>
                    <input required  id="name" name="name" class=" font-mediumappearance-none block w-full bg-[#E5EDF7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="">
                </div>
                 <div class="w-full md:w-1/2 px-3">
                    <label class=" font-medium block  text-gray-700 text-xs  mb-2" for="last_name">
                        Apellido
                    </label>
                    <input required  id="last_name" name="last_name" class="appearance-none block w-full bg-[#E5EDF7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="">
                </div>
          </div>
        </div>


        <div class="space-y-4 ">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full  px-3">
                    <label class="block font-medium text-gray-700 text-xs  mb-2" for="email">
                        Correo Electrónico
                    </label>
                    <input required name="email"  id="email" class="appearance-none block w-full bg-[#E5EDF7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=" ">
                </div>
              </div>
        </div>

        <div class="space-y-4">
            <div class="mt-4">
                <div class="relative">
                    <label class="block  text-gray-700 text-xs font-medium  mb-2" for="pais">
                        Seleccionar tu país
                    </label>
                    <select  name="pais"  required class="block appearance-none w-full bg-[#E5EDF7] border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @foreach ($paislist as $pais)
                        <option value="{{$pais->id}}">  {{$pais->nombre}} </option>
                        @endforeach
                    </select>

                  </div>
               </div>
        </div>



        <div class="space-y-4">
            <div class="flex flex-wrap -mx-3 mb-6 mt-5">
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block  text-gray-700 text-xs font-medium mb-2" for="password">
                                        Password
                                    </label>
                                    <input required autocomplete="new-password" id="password" name="password" class="appearance-none block w-full bg-[#E5EDF7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="password" placeholder="">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block  text-gray-700 text-xs font-medium mb-2" for="password_confirmation">
                                        Confirma Password
                                    </label>
                                    <input  required autocomplete="new-password" id="password_confirmation" name="password_confirmation"  class="appearance-none block w-full bg-[#E5EDF7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="password" placeholder="">
                                </div>
                            </div>

        </div>

        <div class="space-y-4">
            <button type="submit" class="w-full block bg-[#0675FF] hover:bg-blue-400 focus:bg-indigo-400 text-white  rounded-lg
                                   px-4 py-3 mt-6">Registrarme </button>

        </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-6">
                    <label class="flex items-start">
                        <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                        <span class="text-sm ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm underline hover:no-underline">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm underline hover:no-underline">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </span>
                    </label>
                </div>
            @endif
    </form>
    <x-jet-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 ">
        <div class="text-sm">
            {{ __('¿Tienes una cuenta?') }} <a class=" font-medium text-[#0675FF] hover:text-blue-600" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
        </div>
    </div>
</x-authentication-layout>
