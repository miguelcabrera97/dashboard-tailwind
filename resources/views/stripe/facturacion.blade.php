<x-app-layout>
    

    <div class="container px-4 mx-auto sm:px-8">
        <div class="py-8">
          <div>
            <h2 class="text-3xl font-semibold leading-tight text-center">Mi Facturacion</h2>
          </div>
          <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div
              class="inline-block w-full overflow-hidden rounded-lg shadow-md"
            >
              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Numero de Factura
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Total
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Divisa
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Estado
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Ver Factura
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                      Descargar
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Creado
                    </th>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Finaliza
                    </th>
                  </tr>
                  
                </thead>
                <tbody>

                  @php
                    $cont =0;    
                  @endphp
                 @foreach ($invoices as $invoice) 
                  <tr>
                    <td class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200">
                      <div class="text-center">
                        <p class="text-gray-900 whitespace-no-wrap">
                          {{$invoice->number}}
                        </p>
                      </div>
                  </td>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <div class="text-center">
                          <p class="text-gray-900 whitespace-no-wrap">
                            ${{$invoice->amount_paid/100}}
                          </p>
                        </div>
                    </td>


                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-center text-gray-900 uppercase whitespace-no-wrap">
                            {{$invoice->currency}}
                        </p> 
                    </td>


                    <td class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200">
                      <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-center text-green-900">
                        <span aria-hidden class="absolute inset-0 text-center bg-green-200 rounded-full opacity-50 "></span>
                        @php
                            if ($invoice->status == "paid")
                            {
                              $status = "Pagado";
                            }
                        @endphp

                        <span class="relative text-center">{{$status}}</span>
                      </span>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 ">
                      
                      <div class="flex items-center justify-center">
                          <span class="text-center capitalize">
                            <a href="{{$invoice->hosted_invoice_url}}" target='blank_'>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-center">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                            </a>
                          </span>
                      </div>
                    
                  
                    </td>

                    
                    <td class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200 ">
                      <div class="flex items-center justify-center">
                        <span class="text-center capitalize">
                          <a href="{{$invoice->invoice_pdf}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z"/>
                              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                            </svg>
                          </a>
                        </span>
                    </div>
                       
                    </td>

                    <td class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200">
                      <span class="capitalize">{{ date('d/m/Y',$invoices->data[$cont]->lines->data[0]->period->start)}}</span>
                    </td>

                    <td class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200">
                      <span class="capitalize">{{date('d/m/Y',$invoices->data[$cont]->lines->data[0]->period->end)}}</span>
                    </td>
                  </tr>
                    @php
                         $cont = $cont+1;
                    @endphp
                    @endforeach 

                    
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>


</x-app-layout>