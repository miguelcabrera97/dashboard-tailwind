<x-authentication-layout>
    <h1 class="text-3xl text-gray-800 font-bold mb-6 text-center">{{ __('Iniciar sesión') }} </h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4 ">

                <div class="w-full  px-3">
                    <label class="block  text-gray-600 text-sm  mb-2 font-medium" for="grid-last-name" for="email" value="{{ __('Correo Electrónico:') }}">
                       Correo Electrónico:
                    </label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus  class="appearance-none block w-full bg-[#e5edf7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="">
                </div>



                <div class="w-full  px-3">
                    <label class="block  text-gray-600 text-sm  mb-2 font-medium"  for="password" value="{{ __('Password') }}">
                       Contraseña:
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"   class="appearance-none block w-full bg-[#e5edf7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="">
                </div>

        </div>

        <div class="space-y-4 ">
            <div class="mt-4 px-3">
                <x-jet-button class="w-full p-3" >
                    {{ __('Iniciar sesión') }}
                </x-jet-button>
            </div>
        </div>


        <div class="space-y-4 ">
            <div class="mt-4 px-3">
                @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline " href="{{ route('password.request') }}">
                        {{ __('Olvidé mi contraseña') }}
                    </a>
                </div>
                 @endif
            </div>
        </div>

    </form>
    <x-jet-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            {{ __('¿No tienes cuenta?') }}
            <a class="font-medium text-[#0675FF] hover:text-indigo-600  font-bold"  href="{{ route('register') }}">
                {{ __('Crear una') }}
            </a>
        </div>
        <!-- Warning -->

    </div>
</x-authentication-layout>
