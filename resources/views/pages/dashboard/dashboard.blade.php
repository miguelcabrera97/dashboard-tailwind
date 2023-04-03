<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-2 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <div class="pt-3">
            <x-dashboard.welcome-banner />
        </div>


        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-1">

            <!-- Left: Avatars -->
            {{-- <x-dashboard.dashboard-avatars /> --}}

            <!-- Right: Actions -->
            {{-- <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn bg-indigo-500 hover:bg-indigo-400 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Add View</span>
                </button>

            </div> --}}

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">

            <!-- Line chart (Acme Plus) -->
            {{-- <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" /> --}}

                {{-- OPCIÓN MI PERFIL  --}}
                <a href="{{ route('profile.show') }}">
                    <div class=" grid grid-cols-3 gap-2 relative hover:scale-110 transition duration-200 bg-white p-5 h-36 rounded-3xl shadow-sm   ">
                            <div class="col-span-1  flex justify-center items-center ">
                                <img src="{{ asset('images/micuenta.webp') }}" alt="Mi cuenta" class="w-20  mx-auto ">
                            </div>
                            <div class="col-span-2  grid grid-rows-2  ">
                                <div class=" font-bold text-lg color-slate-900 flex items-end  ">Mi cuenta</div>
                                <div class="text-md color-slate-900 flex items-start">Edita y revisa tu información.</div>
                            </div>
                    </div>
                </a>
                  {{-- TERMINA OPCIÓN MI PERFIL  --}}

                <a href="{{route('plantillas')}}">
                    <div class=" grid grid-cols-3 gap-2 relative hover:scale-110 transition duration-200 bg-white p-5 h-36  rounded-3xl shadow-sm   ">
                        <div class="col-span-1  flex justify-center items-center ">
                            <img src="{{ asset('images/newsite.webp') }}" alt="Mi cuenta" class="w-20  mx-auto ">
                        </div>
                        <div class="col-span-2  grid grid-rows-2  ">
                            <div class=" font-bold text-lg color-slate-900 flex items-end  ">Crear nuevo sitio</div>
                            <div class="text-md color-slate-900 flex items-start">Elige el diseño y edita tu web.</div>
                        </div>
                </div>
                </a>


                <a href="{{route('sites')}}">
                    <div class=" grid grid-cols-3 gap-2 relative hover:scale-110 transition duration-200 bg-white p-5 h-36  rounded-3xl shadow-sm   ">
                        <div class="col-span-1  flex justify-center items-center ">
                            <img src="{{ asset('images/sites.webp') }}" alt="Mi cuenta" class="w-20  mx-auto ">
                        </div>
                        <div class="col-span-2  grid grid-rows-2  ">
                            <div class=" font-bold text-lg color-slate-900 flex items-end  ">Mis sitios web</div>
                            <div class="text-md color-slate-900 flex items-start">Edita y gestiona tus proyectos.</div>
                        </div>
                     </div>
                </a>




            <a href="{{route('facturacion')}}">
                <div class=" grid grid-cols-3 gap-2 relative hover:scale-110 transition duration-200 bg-white p-5 h-36  rounded-3xl shadow-sm   ">
                    <div class="col-span-1  flex justify-center items-center ">
                        <img src="{{ asset('images/invoice.webp') }}" alt="Mi cuenta" class="w-20  mx-auto ">
                    </div>
                    <div class="col-span-2  grid grid-rows-2  ">
                        <div class=" font-bold text-lg color-slate-900 flex items-end  ">Facturación</div>
                        <div class="text-md color-slate-900 flex items-start">Realizar pagos y verifica tu historial.</div>
                    </div>
                 </div>
            </a>




            <a href="https://support.multiscreensite.com/hc/es-419" target="_blank">
                <div class=" grid grid-cols-3 gap-2 relative hover:scale-110 transition duration-200 bg-white p-5 h-36  rounded-3xl shadow-sm   ">
                    <div class="col-span-1  flex justify-center items-center ">
                        <img src="{{ asset('images/helpcenter.webp') }}" alt="Mi cuenta" class="w-20  mx-auto ">
                    </div>
                    <div class="col-span-2  grid grid-rows-2  ">
                        <div class=" font-bold text-lg color-slate-900 flex items-end  ">Centro de ayuda</div>
                        <div class="text-md color-slate-900 flex items-start">Consulta guías del editor.</div>
                    </div>
                 </div>
            </a>



           <a href="{{route('soporte')}}" >
            <div class=" grid grid-cols-3 gap-2 relative hover:scale-110 transition duration-200 bg-white p-5 h-36  rounded-3xl shadow-sm   ">
                <div class="col-span-1  flex justify-center items-center ">
                    <img src="{{ asset('images/icono8.webp') }}" alt="Mi cuenta" class="w-20  mx-auto ">
                </div>
                <div class="col-span-2  grid grid-rows-2  ">
                    <div class=" font-bold text-lg color-slate-900 flex items-end  ">Soporte especializado</div>
                    <div class="text-md color-slate-900 flex items-start">Contacta a nuestro equipo.</div>
                </div>
             </div>
           </a>

            <!-- Line chart (Acme Advanced) -->
             {{-- <x-dashboard.dashboard-card-02/>
             <x-dashboard.dashboard-card-03/>
             <x-dashboard.dashboard-card-04/>
             <x-dashboard.dashboard-card-05/>
             <x-dashboard.dashboard-card-06/>
             <x-dashboard.dashboard-card-11/> --}}

            <!-- Line chart (Acme Professional) -->
            {{-- <x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" /> --}}

            <!-- Bar chart (Direct vs Indirect) -->
            {{-- <x-dashboard.dashboard-card-04 /> --}}

            <!-- Line chart (Real Time Value) -->
            {{-- <x-dashboard.dashboard-card-05 /> --}}

            <!-- Doughnut chart (Top Countries) -->
            {{-- <x-dashboard.dashboard-card-06 /> --}}

            <!-- Table (Top Channels) -->
            {{-- <x-dashboard.dashboard-card-07 /> --}}

            <!-- Line chart (Sales Over Time)  -->
            {{-- <x-dashboard.dashboard-card-08 /> --}}

            <!-- Stacked bar chart (Sales VS Refunds) -->
            {{-- <x-dashboard.dashboard-card-09 /> --}}

            <!-- Card (Customers)  -->
            {{-- <x-dashboard.dashboard-card-10 /> --}}

            <!-- Card (Reasons for Refunds)   -->
            {{-- <x-dashboard.dashboard-card-11 />              --}}

            <!-- Card (Recent Activity) -->
            {{-- <x-dashboard.dashboard-card-12 /> --}}

            <!-- Card (Income/Expenses) -->
            {{-- <x-dashboard.dashboard-card-13 /> --}}

        </div>

    </div>
</x-app-layout>
