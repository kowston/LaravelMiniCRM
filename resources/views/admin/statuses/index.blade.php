<x-app-layout>

    <x-card>
        <h1>index</h1>

        <table>
            <tr>
                <th>Status Name</th>
                <th>Action</th>
            </tr>
            @foreach($data as $status)
                <tr>
                    <td>{{ $status->name }}</td>
                    <td>
                        <a href="{{ route('statues.edit', $status->id) }}">Edit</a>
                        <form action="" method="" onclick="return confirm('are you sure?')">
                            @csrf
                            @method('delete')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-card>

</x-app-layout>
