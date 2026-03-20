{{-- Layout tamu (guest): digunakan untuk halaman yang tidak memerlukan login
     File layout ada di resources/views/layouts/guest.blade.php --}}
<x-guest-layout>

    {{-- Form reset password: method POST ke route password.store --}}
    <form method="POST" action="{{ route('password.store') }}">

        {{-- Token CSRF: wajib di setiap form POST Laravel untuk keamanan --}}
        @csrf

        {{-- TOKEN RESET PASSWORD
             Diambil dari URL (parameter route 'token') dan dikirim sebagai hidden input
             Token ini diverifikasi server untuk memastikan permintaan reset valid & tidak kedaluwarsa --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        {{-- INPUT EMAIL
             old('email', $request->email) → prioritas: nilai lama jika form gagal,
             fallback ke email dari URL query string (?email=...) yang dikirim via link reset
             autocomplete="username" → hint browser untuk autofill email --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- INPUT PASSWORD BARU
             autocomplete="new-password" → hint browser agar tidak autofill password lama --}}
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- INPUT KONFIRMASI PASSWORD
             Harus cocok dengan password di atas; divalidasi Laravel secara otomatis
             karena name="password_confirmation" (konvensi bawaan Laravel) --}}
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- Tombol submit: rata kanan, mengirim form reset password ke server --}}
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>