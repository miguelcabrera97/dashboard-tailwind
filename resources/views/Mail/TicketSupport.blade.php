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

            <div class="content__body py-8 border-b">
              <h3 class="text-center text-2xl sm:text-3xl pt-4 mb-8 ">New version of The App<br>is finally here! 🎉</h3>
              <p class="pt-4 leading-normal">
                Greetings!<br><br> Check out this quick read on The App Blog about the highly anticipated new version of our app.<br><br> This means you now have an ultimate access to a new version of The App. Click the link below to read more!
              </p>
              <button class="text-white text-sm tracking-wide bg-red rounded w-full my-8 p-4 ">CHECK THE NEW VERSION</button>
              <p class="text-sm">
                Keep Rockin'!<br> Your The App team
              </p>
            </div>

            <div class="content__footer mt-8 text-center text-grey-darker">
              <h3 class="text-base sm:text-lg mb-4">Thanks for using The App!</h3>
              <p>www.theapp.io</p>
            </div>

          </div>

          <div class="mail__meta text-center text-sm text-grey-darker mt-8">

            <div class="meta__social flex justify-center my-4">
              <a href="#" class="flex items-center justify-center mr-4 bg-black text-white rounded-full w-8 h-8 no-underline"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="flex items-center justify-center mr-4 bg-black text-white rounded-full w-8 h-8 no-underline"><i class="fab fa-instagram"></i></a>
              <a href="#" class="flex items-center justify-center bg-black text-white rounded-full w-8 h-8 no-underline"><i class="fab fa-twitter"></i></a>
            </div>

            <div class="meta__help">
              <p class="leading-loose">
                Questions or concerns? <a href="#" class="text-grey-darkest">help@theapp.io</a>

                <br> Want to quit getting updates? <a href="#" class="text-grey-darkest">Unsubscribe</a>
              </p>
            </div>

          </div>

        </div>

      </div>

</x-app-layout>
