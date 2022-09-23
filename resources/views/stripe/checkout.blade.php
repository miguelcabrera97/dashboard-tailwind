<x-app-layout>

    @php
        $anualmxn = 10;
        $mensualmxn = 12;
        $moneda = 'MXN';

        $informativomensual = 'mxn';
        $informativoanual  = 'dashboard';
    @endphp

      <main class="max-w-6xl mx-auto pt-10 pb-36 px-8" x-data="{annual: false}">

         <div class="max-w-md mx-auto mb-10 text-center">
            <h1 class="text-4xl font-semibold mb-6 lg:text-5xl"><span class="text-indigo-600">Selecciona tu </span> Plan</h1>
          </div>

          <div class="flex  items-center place-content-center w-full mb-5">
              <div class="flex mr-3 ">
                  <span class="text-gray-500"> Mensual </span>
              </div>

              <div class="flex space-y-2 text-center">
                  <button
                    class="transition ease-in-out duration-300 w-12 bg-gray-200 rounded-full focus:outline-none"
                    :class="{ 'bg-purple-400': annual }"
                    x-on:click="annual = !annual"
                  >
                    <div
                      class="transition ease-in-out duration-300 rounded-full h-6 w-6 bg-white shadow"
                      :class="{ 'transform translate-x-full ': annual }"
                    ></div>
                  </button>
                </div>

                <div class="flex ml-3">
                  <span class="text-gray-500">  Anual  <span class="text-green-500">(-20%)</span> </span>
              </div>



          </div>

      <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">

          {{-- CARD UNO --}}
            <div class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
              <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"  alt="" class="rounded-3xl w-20 h-20" />
                <div class="ml-5">
                  <span class="block text-2xl font-semibold">Sitio Web Básico</span>

                    <p class="mt-3">
                        <span>
                            <span class="font-medium text-gray-800 text-2xl ">$&thinsp;</span>
                            <span class="text-6xl font-bold"  x-text="annual ? '{{$anualmxn}}' : '{{$mensualmxn}}'"> {{$mensualmxn}} </span>
                            <span class="text-sm"> {{$moneda}}</span>
                        </span>
                    </p>
                    <p>
                         <span class="text-gray-500">/ Mes <span x-cloak x-show="annual">(billed annually)</span></span>
                    </p>
                </div>


              </div>

              <ul class="mb-7 font-medium text-gray-500">
                <li class="flex text-lg mb-2">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                  <span class="ml-3 text-sm">Constructor de Sitios <span class="text-black">Conectaply</span></span>
                </li>
                <li class="flex text-lg mb-2">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                  <span class="ml-3 text-sm">Hosting en <span class="text-black">AWS (Amazon Web Sevices)</span></span>
                </li>
                <li class="flex text-lg mb-2">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                  <span class="ml-3 text-sm">Certificado SSL <span class="text-black">Gratis</span></span>
                </li>
                <li class="flex text-lg mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm">Sitio <span class="text-black">Multilenguaje</span></span>
                </li>
                <li class="flex text-lg mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                </li>
                <li class="flex text-lg mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                </li>
                <li class="flex text-lg mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm"> Vende en   <span class="text-black">Amazon, Ebay</span></span>
                </li>

                <li class="flex text-lg mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm"> Más de   <span class="text-black">40</span> Formas de Pago</span>
                </li>

                <li class="flex text-lg mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <span class="ml-3 text-sm"> Descuentos por <span class="text-black">volumen</span></span>
                </li>

              </ul>



               <span x-cloak x-show="!annual">
                <form action="{{route('mxn')}}" method="GET" >
                    <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                    <button href="#/" class="w-full flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                        Elegir Mensual
                        <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                    </button>
                </form>
                </span>

                <span x-cloak x-show="annual">
                    <form action="{{route('dashboard')}}" method="GET" >
                        <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                        <button href="#/" class="w-full flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                            Elegir Anual
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </button>
                    </form>
                </span>



            </div>
          {{-- TERMINA  CARD UNO --}}


          {{-- CARD DOS  --}}
            <div class="w-full flex-1 p-8 order-1 shadow-xl rounded-3xl bg-gray-900 text-gray-400 sm:w-96 lg:w-full lg:order-2 lg:mt-0">
              <div class="mb-8 pb-8 flex items-center border-b border-gray-600">
                <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg"  alt="" class="rounded-3xl w-20 h-20" />
                <div class="ml-5">
                  <span class="block text-2xl font-semibold text-white">Tienda Básica</span>


                    <p class="mt-3">
                        <span>
                            <span class="font-medium text-white text-2xl ">$&thinsp;</span>
                            <span class="text-6xl font-bold text-white"  x-text="annual ? '{{$anualmxn}}' : '{{$mensualmxn}}'"> {{$mensualmxn}} </span>
                            <span class="text-sm text-white"> {{$moneda}}</span>
                        </span>
                    </p>
                    <p>
                        <span class="text-gray-500">/ Mes <span x-cloak x-show="annual">(billed annually)</span></span>
                    </p>

                </div>
              </div>
              <ul class="mb-7 font-medium ">
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Constructor de Sitios <span class="text-white">Conectaply</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Hosting en <span class="text-white">AWS (Amazon Web Sevices)</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Certificado SSL <span class="text-white">Gratis</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Sitio <span class="text-white">Multilenguaje</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-white">Ecommerce</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-white">Ecommerce</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Vende en   <span class="text-white">Amazon, Ebay</span></span>
                  </li>

                  <li class="flex text-lg mb-2">
                      <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Más de   <span class="text-white">40</span> Formas de Pago</span>
                  </li>

                  <li class="flex text-lg mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <span class="ml-3 text-sm"> Descuentos por <span class="text-white">volumen</span></span>
                  </li>

                </ul>
                <span x-cloak x-show="!annual">
                    <form action="{{route('mxn')}}" method="GET" >
                        <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                        <button href="#/" class="w-full flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                            Elegir Mensual
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </button>
                    </form>
                    </span>

                    <span x-cloak x-show="annual">
                        <form action="{{route('dashboard')}}" method="GET" >
                            <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                            <button href="#/" class="w-full flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                                Elegir Anual
                                <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                            </button>
                        </form>
                    </span>
            </div>
            {{-- TERMINA CARD DOS  --}}


            <div class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
              <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg"  alt="" class="rounded-3xl w-20 h-20" />
                <div class="ml-5">
                  <span class="block text-2xl font-semibold">Enterprise</span>
                    <p class="mt-3">
                        <span>
                            <span class="font-medium text-gray-800 text-2xl ">$&thinsp;</span>
                            <span class="text-6xl font-bold"  x-text="annual ? '{{$anualmxn}}' : '{{$mensualmxn}}'"> {{$mensualmxn}} </span>
                            <span class="text-sm"> {{$moneda}}</span>
                        </span>
                    </p>
                    <p>
                        <span class="text-gray-500">/ Mes <span x-cloak x-show="annual">(billed annually)</span></span>
                    </p>
                </div>
              </div>
              <ul class="mb-7 font-medium ">
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Constructor de Sitios <span class="text-black">Conectaply</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Hosting en <span class="text-black">AWS (Amazon Web Sevices)</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Certificado SSL <span class="text-black">Gratis</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                  <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">Sitio <span class="text-black">Multilenguaje</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm">App de Gestion de  <span class="text-black">Ecommerce</span></span>
                  </li>
                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Vende en   <span class="text-black">Amazon, Ebay</span></span>
                  </li>

                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Más de   <span class="text-black">40</span> Formas de Pago</span>
                  </li>

                  <li class="flex text-lg mb-2">
                    <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                    <span class="ml-3 text-sm"> Descuentos por <span class="text-black">volumen</span></span>
                  </li>

                </ul>
                <span x-cloak x-show="!annual">
                    <form action="{{route('mxn')}}" method="GET" >
                        <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                        <button href="#/" class="w-full flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                            Elegir Mensual
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </button>
                    </form>
                    </span>

                    <span x-cloak x-show="annual">
                        <form action="{{route('dashboard')}}" method="GET" >
                            <input type="hidden" value="{{Auth::user()->email}}" name="emailuser">

                            <button href="#/" class="w-full flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:bg-blue-600 hover:rounded-2xl ">
                                Elegir Anual
                                <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                            </button>
                        </form>
                    </span>
            </div>

      </div>





      </main>
</x-app-layout>
