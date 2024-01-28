<x-app-layout>
    <x-card>
        <h1>Create</h1>

        <form action="{{ route('liklihoods.store') }}" method="post">
            @csrf

            <x-primary-button>Submit</x-primary-button>
        </form>
    </x-card>
</x-app-layout>
