<x-app-layout>
    <x-card>
        <h1>Create</h1>

        <form action="{{ route('user-profiles.store') }}" method="post">
            @csrf

            <div>
                <lable for="title" >Title</lable>
                <input type="text" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="first_name" >First Name</lable>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="last_name" >Last Name</lable>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="email" >Email</lable>
                <input type="text" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="phone" >Phone</lable>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="department" >Department</lable>
                <input type="text" id="department" name="department" value="{{ old('department') }}">
                @error('department')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="role" >Role</lable>
                <input type="text" id="role" name="role" value="{{ old('role') }}">
                @error('role')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="position" >Position</lable>
                <input type="text" id="position" name="position" value="{{ old('position') }}">
                @error('position')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <x-primary-button>Submit</x-primary-button>
        </form>
    </x-card>
</x-app-layout>
