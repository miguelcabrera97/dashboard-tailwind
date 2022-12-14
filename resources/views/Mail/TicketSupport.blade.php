<x-app-layout>

    <style>

.h-128{
  height: 22rem;
}
.content__header{
  background: #070D12 url(https://images.unsplash.com/photo-1512499582704-623afeaf82c9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9fe691e9e5263a1fd49c1c5f88812e03&auto=format&fit=crop&w=2766&q=80) no-repeat;
  background-position: center 1px;
  background-size: cover;
}
    </style>


    <div class="app font-sans min-w-screen min-h-screen bg-grey-lighter py-8 px-4">

        <div class="mail__wrapper max-w-md mx-auto">

          <div class="mail__content bg-white p-8 shadow-md">

            <div class="content__header h-128 flex flex-col items-center justify-center text-center tracking-wide leading-normal bg-black -mx-8 -mt-8">

            </div>

            <div class="content__body py-1 border-b">
              <h3 class="text-center text-2xl sm:text-3xl pt-4"> Tu Ticket se ha creado</h3>
              <h4 class="text-center text-2xl sm:text-3xl  mb-8"> <b> #3519845 </b></h4>

              <p class="pt-4 leading-normal text-justify">
                Estimad@  <b>{{ Auth::user()->name }}</b>

                <br><br> El motivo de este correo es para informarte que hemos recibido tu consulta y hemos comenzado a trabajar en ella para darle el seguimiento
                correcto.

               <br><br> Recibirás una respesta por este medio, te pedimos estes atento la respuesta puede tardar de <b>48 - 72 Hrs hábiles</b> de acuerdo a la cantidad de sobrecarga.


              <button class="text-white text-sm tracking-wide bg-red rounded w-full my-8 p-4 ">CHECK THE NEW VERSION</button>
              <p class="text-sm">
                 El Equipo <b>Conectaply</b><br>
                 soporte@conectaply.com
              </p>
            </div>

            <div class="content__footer mt-8 text-center text-grey-darker">
              <h3 class="text-base sm:text-lg">Gracias por ser parte de Conectaply</h3>
              <p> <a href="#"> www.conectaply.com </a></p>
            </div>

          </div>


        </div>

      </div>

</x-app-layout>
