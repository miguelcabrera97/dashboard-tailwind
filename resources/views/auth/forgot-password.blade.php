<x-authentication-layout>
    <a href="{{ route('login') }}">
        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-arrow-left mb-5 text-sky-600 w-10 hover:w-12 " viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>


    <h1 class="text-3xl text-gray-700 font-bold ">{{ __('Recuperar contraseña') }}</h1>
    <p class="mb-10 text-sm mt-4 ml-4"> Introduzca su dirección de correo para restablecer su contraseña.</p>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="w-full  px-3">
            <label class="block  text-gray-600 text-sm  mb-2 font-medium"  for="email" value="{{ __('Correo electrónico') }}">
                Correo electrónico
            </label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus class="appearance-none block w-full bg-[#e5edf7] text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="">
        </div>

        <div class="space-y-4">
            <button type="submit" class="w-full block bg-[#0675FF] hover:bg-blue-400 focus:bg-indigo-400 text-white  rounded-lg  px-4 py-3 mt-6">Reestablecer </button>

        </div>


    </form>
    <x-jet-validation-errors class="mt-4" />
</x-authentication-layout>
