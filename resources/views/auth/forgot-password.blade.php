{{-- Layout tamu (guest): digunakan untuk halaman yang tidak memerlukan login
     File layout ada di resources/views/layouts/guest.blade.php --}}
<x-guest-layout>

    {{-- Teks peringatan: memberitahu user bahwa ini area aman
         dan meminta konfirmasi password sebelum melanjutkan --}}
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    {{-- Form konfirmasi password: method POST ke route password.confirm --}}
    <form method="POST" action="{{ route('password.confirm') }}">

        {{-- Token CSRF: wajib ada di setiap form POST Laravel untuk keamanan --}}
        @csrf

        {{-- INPUT PASSWORD
             Komponen x-input-label     → label "Password"
             Komponen x-text-input      → input bertipe password, autocomplete current-password
             Komponen x-input-error     → menampilkan pesan error validasi jika password salah --}}
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Tombol submit: rata kanan, mengirim form konfirmasi password --}}
        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>