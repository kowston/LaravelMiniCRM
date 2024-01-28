<x-app-layout>

    <x-card>
        <h1>index</h1>

        <table>
            <tr>
                <th>Company</th>
                <th>Rep</th>
                <th>Action</th>
            </tr>
            @foreach($data as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->user->name }}</td>
                <td>
                    <a href="{{ route('companies.edit', $company->id) }}">Edit</a>
                    <a href="{{ route('companies.show', $company->id) }}">Show</a>
                    <form action="" method="post" onclick="return confirm('Are you sure?')">
                       @csrf
                       @method('delete')

                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-card>

</x-app-layout>
