<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Control de notas') }}
        </h2>
    </x-slot>
    <main class="container-fluid">
        <livewire:home-component/>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-4 mt-40">
        <div class="container mx-auto text-center">
            <p>Todos los derechos reservados &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</x-app-layout>
