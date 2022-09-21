<x-app-layout>
    <div class="">

        <div x-data="{ openTab: 1,
                activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                inactiveClasses: 'text-blue-500 hover:text-blue-800' }" class="p-6">
            <!-- Content goes here -->
            <ul class="flex border-b justify-center">
                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                    <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                        class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                        href="#">Mensual</a>
                </li>
                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                    <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                        class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="#">Anual</a>
                </li>

            </ul>
            <div class="w-full pt-4">
                <div x-show="openTab === 1">
                    <div class="container flex flex-wrap pt-4 pb-10 m-auto mt-6 md:mt-15 lg:px-12 xl:px-16">
                        <div class="w-full px-0 lg:px-4">
                          <h2 class="px-12 text-3xl font-bold text-center md:text-2xl text-blue-700">
                            Elige tu plan
                          </h2>

                          <div class="flex flex-wrap items-center justify-between py-4 pt-0 mt-5">
                            <div class="w-full p-4 md:w-1/2 lg:w-1/3 plan-card">
                              <label class="flex flex-col rounded-lg shadow-lg group relative hover:shadow-2xl">
                                <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                  <h3 class="mx-auto text-3xl font-semibold text-center  text-blue-500 mb-5">
                                    Sitio Web
                                  </h3>
                                  <p class="text-5xl font-bold text-center  text-blue-500">
                                    $25.<span class="text-3xl">95</span><span class="text-base ml-2">Mensual</span>
                                    <ul class="mt-10">
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Constructor Web Social
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Hosting AWS (Amazon)
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Config. de dominio propio
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Dominio .COM Gratis 1 año *
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Certificado SSL
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Sitio multilenguaje
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Optimización SEO
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Soporte Online 24x7x365
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Tienda Online
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            0% comisión por venta
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Más de 40 formas de pago
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Gestión de Envíos
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            App de gestión de tienda
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vender como suscripción
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vende en mercados: Amazon, eBay
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Descuentos por volumen
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Integración de Square POS
                                        </li>
                                    </ul>
                                  </p>

                                </div>
                                <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500">
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="text" value="{{Auth::user()->email}}" name="emailuser">
                                        <button class="w-full p-3 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                                            Escoger Plan
                                        </button>
                                    </form>

                                </div>
                              </label>
                            </div>

                            <div class="w-full p-4 md:w-1/2 lg:w-1/3 plan-card">
                                <label class="flex flex-col rounded-lg shadow-lg group relative hover:shadow-2xl">
                                  <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                    <h3 class="mx-auto text-3xl font-semibold text-center  text-blue-500 mb-5">
                                      Tienda Básica
                                    </h3>
                                    <p class="text-5xl font-bold text-center  text-blue-500">
                                      $25.<span class="text-3xl">95</span><span class="text-base ml-2">Mensual</span>
                                      <ul class="mt-10">
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Constructor Web Social
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Hosting AWS (Amazon)
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Config. de dominio propio
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Dominio .COM Gratis 1 año *
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Certificado SSL
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Sitio multilenguaje
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Optimización SEO
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Soporte Online 24x7x365
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Tienda Online
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              0% comisión por venta
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Más de 40 formas de pago
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Gestión de Envíos
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              App de gestión de tienda
                                          </li>
                                          <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vender como suscripción
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vende en mercados: Amazon, eBay
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Descuentos por volumen
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Integración de Square POS
                                        </li>
                                      </ul>
                                    </p>

                                  </div>
                                  <div
                                    class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500"
                                  >

                                  <form action="" method="POST">
                                    @csrf
                                    <input type="text" value="{{Auth::user()->email}}" name="emailuser">
                                    <button class="w-full p-3 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                                        Escoger Plan
                                    </button>
                                </form>
                                  </div>
                                </label>
                              </div>


                              <div class="w-full p-4 md:w-1/2 lg:w-1/3 plan-card">
                                <label class="flex flex-col rounded-lg shadow-lg group relative hover:shadow-2xl">
                                  <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                    <h3 class="mx-auto text-3xl font-semibold text-center  text-blue-500 mb-5">
                                      Tienda Completa
                                    </h3>
                                    <p class="text-5xl font-bold text-center  text-blue-500">
                                      $25.<span class="text-3xl">95</span><span class="text-base ml-2">Mensual</span>
                                      <ul class="mt-10">
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Constructor Web Social
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Hosting AWS (Amazon)
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Config. de dominio propio
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Dominio .COM Gratis 1 año *
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Certificado SSL
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Sitio multilenguaje
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Optimización SEO
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Soporte Online 24x7x365
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Tienda Online
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              0% comisión por venta
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Más de 40 formas de pago
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Gestión de Envíos
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              App de gestión de tienda
                                          </li>
                                          <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Vender como suscripción
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Vende en mercados: Amazon, eBay
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Descuentos por volumen
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Integración de Square POS
                                        </li>
                                      </ul>
                                    </p>

                                  </div>
                                  <div
                                    class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500"
                                  >

                                  <form action="" method="POST">
                                    @csrf
                                    <input type="text" value="{{Auth::user()->email}}" name="emailuser">
                                    <button class="w-full p-3 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                                        Escoger Plan
                                    </button>
                                </form>
                                  </div>
                                </label>
                              </div>



                          </div>
                        </div>
                      </div>
                </div>
                <div x-show="openTab === 2">
                    <div class="container flex flex-wrap pt-4 pb-10 m-auto mt-6 md:mt-15 lg:px-12 xl:px-16">
                        <div class="w-full px-0 lg:px-4">
                          <h2 class="px-12 text-3xl font-bold text-center md:text-2xl text-blue-700">
                            Elige tu plan
                          </h2>

                          <div class="flex flex-wrap items-center justify-between py-4 pt-0 mt-5">
                            <div class="w-full p-4 md:w-1/2 lg:w-1/3 plan-card">
                              <label class="flex flex-col rounded-lg shadow-lg group relative hover:shadow-2xl">
                                <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                  <h3 class="mx-auto text-3xl font-semibold text-center  text-blue-500 mb-5">
                                    Sitio Web
                                  </h3>
                                  <p class="text-5xl font-bold text-center  text-blue-500">
                                    $25.<span class="text-3xl">95</span><span class="text-base ml-2">Anual</span>
                                    <ul class="mt-10">
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Constructor Web Social
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Hosting AWS (Amazon)
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Config. de dominio propio
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Dominio .COM Gratis 1 año *
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Certificado SSL
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Sitio multilenguaje
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Optimización SEO
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Soporte Online 24x7x365
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Tienda Online
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            0% comisión por venta
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Más de 40 formas de pago
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Gestión de Envíos
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            App de gestión de tienda
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vender como suscripción
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vende en mercados: Amazon, eBay
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Descuentos por volumen
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Integración de Square POS
                                        </li>
                                    </ul>
                                  </p>

                                </div>
                                <div
                                  class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500"
                                >

                                <form action="" method="POST">
                                    @csrf
                                    <button class="w-full p-3 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                                        Escoger Plan
                                    </button>
                                </form>
                                </div>
                              </label>
                            </div>

                            <div class="w-full p-4 md:w-1/2 lg:w-1/3 plan-card">
                                <label class="flex flex-col rounded-lg shadow-lg group relative hover:shadow-2xl">
                                  <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                    <h3 class="mx-auto text-3xl font-semibold text-center  text-blue-500 mb-5">
                                      Tienda Básica
                                    </h3>
                                    <p class="text-5xl font-bold text-center  text-blue-500">
                                      $25.<span class="text-3xl">95</span><span class="text-base ml-2">Anual</span>
                                      <ul class="mt-10">
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Constructor Web Social
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Hosting AWS (Amazon)
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Config. de dominio propio
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Dominio .COM Gratis 1 año *
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Certificado SSL
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Sitio multilenguaje
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Optimización SEO
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Soporte Online 24x7x365
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Tienda Online
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              0% comisión por venta
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Más de 40 formas de pago
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Gestión de Envíos
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              App de gestión de tienda
                                          </li>
                                          <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vender como suscripción
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Vende en mercados: Amazon, eBay
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Descuentos por volumen
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-x-circle mr-2 text-red-600"></i>
                                            Integración de Square POS
                                        </li>
                                      </ul>
                                    </p>

                                  </div>
                                  <div
                                    class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500"
                                  >

                                  <form action="" method="POST">
                                    @csrf
                                    <button class="w-full p-3 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                                        Escoger Plan
                                    </button>
                                </form>
                                  </div>
                                </label>
                              </div>


                              <div class="w-full p-4 md:w-1/2 lg:w-1/3 plan-card">
                                <label class="flex flex-col rounded-lg shadow-lg group relative hover:shadow-2xl">
                                  <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                    <h3 class="mx-auto text-3xl font-semibold text-center  text-blue-500 mb-5">
                                      Tienda Completa
                                    </h3>
                                    <p class="text-5xl font-bold text-center  text-blue-500">
                                      $25.<span class="text-3xl">95</span><span class="text-base ml-2">Anual</span>
                                      <ul class="mt-10">
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Constructor Web Social
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Hosting AWS (Amazon)
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Config. de dominio propio
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Dominio .COM Gratis 1 año *
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Certificado SSL
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Sitio multilenguaje
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Optimización SEO
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Soporte Online 24x7x365
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Tienda Online
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              0% comisión por venta
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Más de 40 formas de pago
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              Gestión de Envíos
                                          </li>
                                          <li class="flex my-3">
                                              <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                              App de gestión de tienda
                                          </li>
                                          <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Vender como suscripción
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Vende en mercados: Amazon, eBay
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Descuentos por volumen
                                        </li>
                                        <li class="flex my-3">
                                            <i class="bi bi-check2-circle mr-2 text-violet-700"></i>
                                            Integración de Square POS
                                        </li>
                                      </ul>
                                    </p>

                                  </div>
                                  <div
                                    class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500"
                                  >

                                  <form action="" method="POST">
                                    @csrf
                                    <button class="w-full p-3 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                                        Escoger Plan
                                    </button>
                                </form>
                                  </div>
                                </label>
                              </div>



                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>