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


    <div class="min-h-screen px-4 py-8 font-sans app min-w-screen bg-grey-lighter">
      <img src="https://images.unsplash.com/photo-1512499582704-623afeaf82c9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9fe691e9e5263a1fd49c1c5f88812e03&auto=format&fit=crop&w=2766&q=80" width="250px" alt="">
        <div class="max-w-md mx-auto mail__wrapper">

          <div class="p-8 bg-white shadow-md mail__content">

            <div class="flex flex-col items-center justify-center -mx-8 -mt-8 leading-normal tracking-wide text-center bg-black content__header h-128">

            </div>

            <div class="py-1 border-b content__body">
              <h3 class="pt-4 text-2xl text-center sm:text-3xl"> Tu Ticket se ha creado</h3>
              <h4 class="mb-8 text-2xl text-center sm:text-3xl"> <b> #3519845 </b></h4>

              <p class="pt-4 leading-normal text-justify">
                Estimad@  <b>{{ Auth::user()->name }}</b>

                <br><br> El motivo de este correo es para informarte que hemos recibido tu consulta y hemos comenzado a trabajar en ella para darle el seguimiento
                correcto.

               <br><br> Recibirás una respesta por este medio, te pedimos estes atento la respuesta puede tardar de <b>48 - 72 Hrs hábiles</b> de acuerdo a la cantidad de sobrecarga.


              <button class="w-full p-4 my-8 text-sm tracking-wide text-white rounded bg-red ">CHECK THE NEW VERSION</button>
              <p class="text-sm">
                 El Equipo <b>Conectaply</b><br>
                 soporte@conectaply.com
              </p>
            </div>

            <div class="mt-8 text-center content__footer text-grey-darker">
              <h3 class="text-base sm:text-lg">Gracias por ser parte de Conectaply</h3>
              <p> <a href="#"> www.conectaply.com </a></p>
            </div>

          </div>


        </div>

      </div>

