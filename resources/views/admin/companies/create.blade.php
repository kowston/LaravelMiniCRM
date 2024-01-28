<x-app-layout>
    <x-card>
        <h1>Create</h1>

        <form action="{{ route('companies.store') }}" method="post">
            @csrf

            <div>
                <lable for="name" >Company Name</lable>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="company_num" >Company Number</lable>
                <input type="text" id="company_num" name="company_num" value="{{ old('company_num') }}">
                @error('company_num')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="vat_num" >Vat Number</lable>
                <input type="text" id="vat_num" name="vat_num" value="{{ old('vat_num') }}">
                @error('vat_num')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="address_1" >Address 1</lable>
                <input type="text" id="address_1" name="address_1" value="{{ old('address_1') }}">
                @error('address_1')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="address_2" >Address 2</lable>
                <input type="text" id="address_2" name="address_2" value="{{ old('address_2') }}">
                @error('address_2')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="address_3" >Address 3</lable>
                <input type="text" id="address_3" name="address_3" value="{{ old('address_3') }}">
                @error('address_3')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="city" >City</lable>
                <input type="text" id="city" name="city" value="{{ old('city') }}">
                @error('city')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="county" >County</lable>
                <input type="text" id="county" name="county" value="{{ old('county') }}">
                @error('county')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="contry" >Country</lable>
                <input type="text" id="contry" name="contry" value="{{ old('contry') }}">
                @error('contry')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <lable for="postcode" >Post Code</lable>
                <input type="text" id="postcode" name="postcode" value="{{ old('postcode') }}">
                @error('postcode')
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
                <lable for="email" >Email</lable>
                <input type="text" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <x-primary-button type="submit">Submit</x-primary-button>
        </form>
    </x-card>
</x-app-layout>
