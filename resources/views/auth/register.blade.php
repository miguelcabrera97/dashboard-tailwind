<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 font-bold mb-6 text-center">{{ __('CREAR MI CUENTA') }} </h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="space-y-4 ">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Nombre
                    </label>
                    <input required  id="name" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="John">
                </div>
                 <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                        Apellido
                    </label>
                    <input required  id="last_name" name="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Doe">
                </div>
          </div>
        </div>


        <div class="space-y-4 ">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full  px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        Correo Electrónico
                    </label>
                    <input required name="email"  id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=" correo@correo.com">
                </div>
              </div>
        </div>

        <div class="space-y-4">
            <div class="mt-4">
                <div class="relative">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pais">
                        Seleccionar tu país
                    </label>
                    <select  name="pais"  required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                      <option value="México">México</option>
                      </select>

                  </div>
               </div>
        </div>



        <div class="space-y-4">
            <div class="flex flex-wrap -mx-3 mb-6 mt-5">
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                                        Password
                                    </label>
                                    <input required autocomplete="new-password" id="password" name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="password" placeholder="*********">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                                        Confirma Password
                                    </label>
                                    <input  required autocomplete="new-password" id="password_confirmation" name="password_confirmation"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="password" placeholder="*********">
                                </div>
                            </div>

        </div>

        <div class="space-y-4">
            <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
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
    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
</x-authentication-layout>
