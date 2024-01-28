<x-app-layout>

    <x-card>
        <form action="{{ route('companies.update', $company) }}" method="post">
            @csrf
            @method('patch')



            <x-primary-button>Submit</x-primary-button>
        </form>
    </x-card>

</x-app-layout>
