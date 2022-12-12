<x-app-layout>
<!-- This is an example component -->
<div>
    <style>

  .loader-dots div {
      animation-timing-function: cubic-bezier(0, 1, 1, 0);
  }
  .loader-dots div:nth-child(1) {
      left: 8px;
      animation: loader-dots1 0.6s infinite;
  }
  .loader-dots div:nth-child(2) {
      left: 8px;
      animation: loader-dots2 0.6s infinite;
  }
  .loader-dots div:nth-child(3) {
      left: 32px;
      animation: loader-dots2 0.6s infinite;
  }
  .loader-dots div:nth-child(4) {
      left: 56px;
      animation: loader-dots3 0.6s infinite;
  }
  @keyframes loader-dots1 {
      0% {
          transform: scale(0);
      }
      100% {
          transform: scale(1);
      }
  }
  @keyframes loader-dots3 {
      0% {
          transform: scale(1);
      }
      100% {
          transform: scale(0);
      }
  }
  @keyframes loader-dots2 {
      0% {
          transform: translate(0, 0);
      }
      100% {
          transform: translate(24px, 0);
      }
  }
  </style>
  <div class="fixed top-0 left-0 z-50 w-screen h-screen flex items-center justify-center" style="background: rgba(0, 0, 0, 0.3);">
    <div class="bg-white border py-2 px-5 rounded-lg flex items-center flex-col">
      <div class="loader-dots block relative w-20 h-7 mt-2">
        <div class="absolute top-0 mt-2 w-5 h-5  rounded-full bg-green-500"></div>
        <div class="absolute top-0 mt-2 w-5 h-5  rounded-full bg-green-500"></div>
        <div class="absolute top-0 mt-2 w-5 h-5  rounded-full bg-green-500"></div>
        <div class="absolute top-0 mt-2 w-5 h-5  rounded-full bg-green-500"></div>
      </div>
      <div class="text-gray-500 text-5xl font-medium mt-5 text-center">
        Publicando Sitio
      </div>
    </div>
    </div>
  </div>
<form action="{{route('publicar')}}" method="post">
    @csrf
    <input type="hidden" value="{{$sitioId}}" name="sitioId">
    <button type="submit" id="btn" onmouseover="mifuncion()" >
</form>
<script>
    window.addEventListener("load",function mifuncion(){
        document.getElementById("btn").click();
    })

</script>


</x-app-layout>
