<x-app-layout>
    <x-card>
        <h1>Create</h1>

        <form action="{{ route('statuses.store') }}" method="post">
            @csrf

            <div>
                <label for="name"></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <x-primary-button type="submit">Submit</x-primary-button>
        </form>
    </x-card>
</x-app-layout>
