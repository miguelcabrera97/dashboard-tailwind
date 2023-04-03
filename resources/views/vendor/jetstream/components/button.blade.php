<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-[#0675FF] hover:bg-blue-500 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
