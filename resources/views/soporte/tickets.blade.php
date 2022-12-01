<x-app-layout>
    <div class="text-center mb-10">
        <p class="mt-4  text-sm leading-7 text-gray-500 font-regular uppercase">
           Centro de
        </p>
        <p class="text-3xl sm:text-4xl   font-extrabold tracking-tight text-gray-900">
           Mis <span class="text-indigo-600">solicitudes</span>
        </p>


        <div class="w-full h-screen bg-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="flex flex-col">

                <div class="-mb-2 py-4 flex flex-wrap flex-grow justify-between">
                  <div class="flex items-center py-2">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-searcg" type="text" placeholder="Search">
                  </div>
                  <div class="flex items-center py-2">
                    <a href="{{ route('soporte') }}"
                       class="inline-block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
                        Crear Nueva Consulta
                    </a>
                  </div>
                </div>
                <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                      <!-- HEAD start -->
                      <thead>
                        <tr class="border-b border-gray-200 bg-white leading-4 tracking-wider text-base text-gray-900">
                          <th class="px-6 py-5 text-left" colspan="6">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                          </th>
                          <th class="px-6 py-5 text-left">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                          </th>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs leading-4 text-gray-500 uppercase tracking-wider">
                          <th class="px-6 py-3 text-left font-medium">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                          </th>
                          <th class="px-6 py-3 text-left font-medium">
                            Name
                          </th>
                          <th class="px-6 py-3 text-left font-medium">
                            Author
                          </th>
                          <th class="px-6 py-3 text-left font-medium">
                            Slug
                          </th>
                          <th class="px-6 py-3 text-left font-medium">
                            Status
                          </th>
                          <th class="px-6 py-3 text-left font-medium">
                            Created
                          </th>
                          <th class="px-6 py-3 text-left font-medium">
                          </th>
                        </tr>
                      </thead>
                      <!-- HEAD end -->
                      <!-- BODY start -->
                      <tbody class="bg-white">
                        <tr>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              page.name
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://via.placeholder.com/400x400"
                                     alt=""/>
                              </div>
                              <div class="ml-4">
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              page.slug
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                              published
                            </span>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            page.created_at
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#"
                               class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline" >
                              Show
                            </a>
                          </td>
                        </tr>

                        <tr class="bg-gray-100">
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              page.name
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://via.placeholder.com/400x400"
                                     alt=""/>
                              </div>
                              <div class="ml-4">
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              page.slug
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                              Inactive
                            </span>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            page.created_at
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#"
                               class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline" >
                              Show
                            </a>
                          </td>
                        </tr>

                        <tr>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              page.name
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://via.placeholder.com/400x400"
                                     alt=""/>
                              </div>
                              <div class="ml-4">
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">
                              page.slug
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                              draft
                            </span>
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            page.created_at
                          </td>
                          <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#"
                               class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline" >
                              Show
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!-- BODY end -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>






   </div>
</x-app-layout>
