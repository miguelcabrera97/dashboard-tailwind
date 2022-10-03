<x-app-layout>

    @php
        $anualmxn = 10;
        $mensualmxn = 12;
        $moneda = 'MXN';

        $informativomensual = 'mxn';
        $informativoanual  = 'dashboard';
    @endphp

<main class="max-w-6xl px-8 pt-10 mx-auto pb-36" x-data="{ annual: false }">

         <div class="max-w-md mx-auto mb-10 text-center">
            <h1 class="mb-6 text-4xl font-semibold lg:text-5xl"><span class="text-indigo-600">Selecciona tu </span> Plan</h1>
          </div>

          <div class="flex items-center w-full mb-5 place-content-center">
              <div class="flex mr-3 ">
                  <span class="text-gray-500"> Mensual </span>
              </div>

              <div class="flex space-y-2 text-center">
                  <button
                    class="w-12 transition duration-300 ease-in-out bg-gray-200 rounded-full focus:outline-none"
                    :class="{ 'bg-purple-400': annual }"
                    x-on:click="annual = !annual"
                  >
                    <div
                      class="w-6 h-6 transition duration-300 ease-in-out bg-white rounded-full shadow"
                      :class="{ 'transform translate-x-full ': annual }"
                    ></div>
                  </button>
                </div>

                <div class="flex ml-3">
                  <span class="text-gray-500">  Anual  <span class="text-green-500">(-20%)</span> </span>
              </div>



          </div>

      <div class="flex flex-col items-center justify-between lg:flex-row lg:items-start">

          {{-- CARD UNO --}}
            <div class="flex-1 order-2 w-full p-8 mt-8 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
              <div class="flex items-center border-b border-gray-300 mb-7 pb-7">
                <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"  alt="" class="w-20 h-20 rounded-3xl" />
                <div class="ml-5">
                  <span class="block text-2xl font-semibold">Sitio Web Básico</span>

                    <p class="mt-3">
                        <span>
                            <span class="text-2xl font-medium text-gray-800 ">$&thinsp;</span>
                            <span class="text-6xl font-bold"  x-text="annual ? '{{$anualmxn}}' : '{{$mensualmxn}}'"> {{$mensualmxn}} </span>
                            <span class="text-sm"> {{$moneda}}</span>
                        </span>
                    </p>
                    <p>
                         <span class="text-gray-500">/ Mes <span x-cloak x-show="annual">(billed annually)</span></span>
                    </p>
                </div>


              </div>

              <ul class="font-medium text-gray-500 mb-7">
                <li class="flex mb-2 text-lg">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                  <span class="ml-3 text-sm">Constructor de Sitios <span class="text-black">Conectaply</span></span>
                </li>
                <li class="flex mb-2 text-lg">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                  <span class="ml-3 text-sm">Hosting en <span class="text-black">AWS (Amazon Web Sevices)</span></span>
                </li>
                <li class="flex mb-2 text-lg">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                  <span class="ml-3 text-sm">Certificado SSL <span class="text-black">Gratis</span></span>
                </li>
                <li class="flex mb-2 text-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm">Sitio <span class="text-black">Multilenguaje</span></span>
                </li>
                <li class="flex mb-2 text-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                </li>
                <li class="flex mb-2 text-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                </li>
                <li class="flex mb-2 text-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm"> Vende en   <span class="text-black">Amazon, Ebay</span></span>
                </li>

                <li class="flex mb-2 text-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm"> Más de   <span class="text-black">40</span> Formas de Pago</span>
                </li>

                <li class="flex mb-2 text-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm"> Descuentos por <span class="text-black">volumen</span></span>
                </li>

              </ul>



               <span x-cloak x-show="!annual">
                <form action="{{route('check')}}" method="GET" >
                    <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">
                    <input type="hidden" value="{{$nombre}}" name="name">
                    <button href="#/" class="flex items-center justify-center w-full px-4 py-5 text-xl text-center text-white transition duration-300 ease-in-out transform bg-indigo-600 rounded-xl hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                        Elegir Mensual
                        <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                    </button>
                </form>
                </span>

                <span x-cloak x-show="annual">
                    <form action="{{route('dashboard')}}" method="GET" >
                        <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                        <button href="#/" class="flex items-center justify-center w-full px-4 py-5 text-xl text-center text-white transition duration-300 ease-in-out transform bg-indigo-600 rounded-xl hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                            Elegir Anual
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </button>
                    </form>
                </span>



            </div>
          {{-- TERMINA  CARD UNO --}}


          {{-- CARD DOS  --}}
            <div class="flex-1 order-1 w-full p-8 text-gray-400 bg-gray-900 shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-2 lg:mt-0">
              <div class="flex items-center pb-8 mb-8 border-b border-gray-600">
                <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg"  alt="" class="w-20 h-20 rounded-3xl" />
                <div class="ml-5">
                  <span class="block text-2xl font-semibold text-white">Tienda Básica</span>


                    <p class="mt-3">
                        <span>
                            <span class="text-2xl font-medium text-white ">$&thinsp;</span>
                            <span class="text-6xl font-bold text-white"  x-text="annual ? '{{$anualmxn}}' : '{{$mensualmxn}}'"> {{$mensualmxn}} </span>
                            <span class="text-sm text-white"> {{$moneda}}</span>
                        </span>
                    </p>
                    <p>
                        <span class="text-gray-500">/ Mes <span x-cloak x-show="annual">(billed annually)</span></span>
                    </p>

                </div>
              </div>
              <ul class="font-medium mb-7 ">
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Constructor de Sitios <span class="text-white">Conectaply</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Hosting en <span class="text-white">AWS (Amazon Web Sevices)</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Certificado SSL <span class="text-white">Gratis</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Sitio <span class="text-white">Multilenguaje</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-white">Ecommerce</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-white">Ecommerce</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Vende en   <span class="text-white">Amazon, Ebay</span></span>
                  </li>

                  <li class="flex mb-2 text-lg">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Más de   <span class="text-white">40</span> Formas de Pago</span>
                  </li>

                  <li class="flex mb-2 text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <span class="ml-3 text-sm"> Descuentos por <span class="text-white">volumen</span></span>
                  </li>

                </ul>
                <span x-cloak x-show="!annual">
                    <form action="{{route('mxn')}}" method="GET" >
                        <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                        <button href="#/" class="flex items-center justify-center w-full px-4 py-5 text-xl text-center text-white transition duration-300 ease-in-out transform bg-indigo-600 rounded-xl hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                            Elegir Mensual
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </button>
                    </form>
                    </span>

                    <span x-cloak x-show="annual">
                        <form action="{{route('dashboard')}}" method="GET" >
                            <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                            <button href="#/" class="flex items-center justify-center w-full px-4 py-5 text-xl text-center text-white transition duration-300 ease-in-out transform bg-indigo-600 rounded-xl hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                                Elegir Anual
                                <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                            </button>
                        </form>
                    </span>
            </div>
            {{-- TERMINA CARD DOS  --}}


            <div class="flex-1 order-3 w-full p-8 mt-8 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
              <div class="flex items-center border-b border-gray-300 mb-7 pb-7">
                <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg"  alt="" class="w-20 h-20 rounded-3xl" />
                <div class="ml-5">
                  <span class="block text-2xl font-semibold">Enterprise</span>
                    <p class="mt-3">
                        <span>
                            <span class="text-2xl font-medium text-gray-800 ">$&thinsp;</span>
                            <span class="text-6xl font-bold"  x-text="annual ? '{{$anualmxn}}' : '{{$mensualmxn}}'"> {{$mensualmxn}} </span>
                            <span class="text-sm"> {{$moneda}}</span>
                        </span>
                    </p>
                    <p>
                        <span class="text-gray-500">/ Mes <span x-cloak x-show="annual">(billed annually)</span></span>
                    </p>
                </div>
              </div>
              <ul class="font-medium mb-7 ">
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Constructor de Sitios <span class="text-black">Conectaply</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Hosting en <span class="text-black">AWS (Amazon Web Sevices)</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Certificado SSL <span class="text-black">Gratis</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Sitio <span class="text-black">Multilenguaje</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                  </li>
                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Vende en   <span class="text-black">Amazon, Ebay</span></span>
                  </li>

                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Más de   <span class="text-black">40</span> Formas de Pago</span>
                  </li>

                  <li class="flex mb-2 text-lg">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Descuentos por <span class="text-black">volumen</span></span>
                  </li>

                </ul>
                <span x-cloak x-show="!annual">
                    <form action="{{route('mxn')}}" method="GET" >
                        <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                        <button href="#/" class="flex items-center justify-center w-full px-4 py-5 text-xl text-center text-white transition duration-300 ease-in-out transform bg-indigo-600 rounded-xl hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                            Elegir Mensual
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </button>
                    </form>
                    </span>

                    <span x-cloak x-show="annual">
                        <form action="{{route('dashboard')}}" method="GET" >
                            <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                            <button href="#/" class="flex items-center justify-center w-full px-4 py-5 text-xl text-center text-white transition duration-300 ease-in-out transform bg-indigo-600 rounded-xl hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                                Elegir Anual
                                <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                            </button>
                        </form>
                    </span>
            </div>

      </div>





      </main>
</x-app-layout>
