<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-2 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

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
                <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Add View</span>
                </button>

            </div> --}}

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-9">

            <!-- Line chart (Acme Plus) -->
            {{-- <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" /> --}}

                <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm text-center  inline-block align-middle">

                    <div class=" grid grid-rows-1 text-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 h-1/2 text-center">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                          </svg>


                    </div>

                </div>


                <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">02</div>
                <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">03</div>
                <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">04</div>
                <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">05</div>
                <div class="relative hover:scale-110 transition duration-200 bg-blue-200 p-6 h-60 rounded-lg shadow-sm">06</div>

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
