<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AYU-NE</title>

    {{-- Google Fonts: font Poppins untuk semua teks di halaman --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* Reset semua margin/padding bawaan browser */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Background halaman: gradien pink, card di tengah secara vertikal & horizontal */
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #fce4ec 0%, #fff0f3 40%, #fce4ec 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Card putih utama: membungkus seluruh konten form login */
        .card {
            background: white;
            border-radius: 24px;
            padding: 40px 36px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.06);
        }

        /* Logo AYU-NE: di-center horizontal, jarak bawah ke judul */
        .logo {
            height: 36px;
            width: auto;
            object-fit: contain;
            margin: 0 auto 20px auto;
            display: block;
        }

        /* Judul utama "Hey Aybies!" */
        h1 {
            text-align: center;
            font-size: 24px;
            font-weight: 800;
            color: #3b1a1a;
            margin-bottom: 6px;
        }

        /* Subjudul di bawah judul */
        .subtitle {
            text-align: center;
            font-size: 13px;
            color: #b07070;
            margin-bottom: 28px;
        }

        /* Label input form */
        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #3b1a1a;
            margin-bottom: 7px;
        }

        /* Wrapper input: position relative agar tombol mata bisa absolute di dalamnya */
        .input-wrapper {
            position: relative;
            margin-bottom: 18px;
        }

        /* Style umum semua input teks: border pink lembut, sudut bulat */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 13px 16px;
            border: 1.5px solid #f0d5d5;
            border-radius: 12px;
            font-size: 13px;
            color: #3b1a1a;
            background: #fff;
            outline: none;
            transition: border 0.2s;
        }

        /* Warna placeholder input */
        input::placeholder {
            color: #d4a0a0;
        }

        /* Border berubah warna saat input difokus */
        input:focus {
            border-color: #e8a0a8;
        }

        /* ==========================================
           TOMBOL MATA (SHOW/HIDE PASSWORD)
           Posisi absolute di kanan tengah input password
           ========================================== */
        .eye-icon {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background: none;
            border: none;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Wrapper ikon mata: animasi flip vertikal saat toggle password
           transform-origin diset ke tengah atas SVG agar animasi natural */
        #eyeWrap {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: center 11px;
        }

        /* Link "Lupa Password?" rata kanan */
        .forgot {
            text-align: right;
            margin-top: -10px;
            margin-bottom: 22px;
        }

        .forgot a {
            font-size: 12px;
            color: #e07080;
            text-decoration: none;
            font-weight: 500;
        }

        /* Tombol submit login: full width, sudut pill, warna pink */
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #f4a0aa;
            color: white;
            font-size: 15px;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background 0.2s;
            margin-bottom: 20px;
        }

        /* Hover tombol login: pink lebih gelap */
        .btn-login:hover {
            background: #e8858f;
        }

        /* ==========================================
           DIVIDER "atau"
           Garis horizontal kiri-kanan dengan teks di tengah
           ========================================== */
        .divider {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .divider hr {
            flex: 1;
            border: none;
            border-top: 1px solid #f0d5d5;
        }

        .divider span {
            font-size: 12px;
            color: #c4a0a0;
        }

        /* ==========================================
           TOMBOL SOCIAL LOGIN (Facebook & Google)
           Outline putih, ikon + teks berdampingan
           ========================================== */
        .btn-social {
            width: 100%;
            padding: 12px;
            background: white;
            border: 1.5px solid #f0d5d5;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            color: #3b1a1a;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 12px;
            transition: background 0.2s;
            text-decoration: none;
        }

        /* Hover tombol social: background pink sangat muda */
        .btn-social:hover {
            background: #fff5f6;
        }

        /* Ukuran ikon logo Facebook / Google */
        .btn-social img {
            width: 18px;
            height: 18px;
        }

        /* Teks "Tidak memiliki akun?" di bawah tombol social */
        .signup-text {
            text-align: center;
            font-size: 13px;
            color: #b07070;
            margin-top: 6px;
        }

        .signup-text a {
            color: #e07080;
            font-weight: 700;
            text-decoration: none;
        }

        /* ==========================================
           PESAN ERROR VALIDASI
           Muncul jika email/password salah atau tidak valid
           ========================================== */
        .error-message {
            background: #ffe0e3;
            color: #c0404a;
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 12px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="card">

        {{-- Logo AYU-NE di bagian atas card --}}
        <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE" class="logo">

        <h1>Hey Aybies!</h1>
        <p class="subtitle">Log in untuk masuk ke zona bersinarmu!</p>

        {{-- Pesan error validasi: ditampilkan jika ada kesalahan input (email/password salah)
             $errors diisi otomatis oleh Laravel setelah redirect dari controller --}}
        @if($errors->any())
            <div class="error-message">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        {{-- Form login: method POST ke route login --}}
        <form method="POST" action="{{ route('login') }}">

            {{-- Token CSRF: wajib di setiap form POST Laravel untuk keamanan --}}
            @csrf

            {{-- INPUT EMAIL
                 value="{{ old('email') }}" → mengisi ulang email jika form gagal disubmit
                 autofocus → kursor langsung ke field ini saat halaman dibuka --}}
            <label for="email">Nama Pengguna / Email</label>
            <div class="input-wrapper">
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan nama pengguna atau email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >
            </div>

            {{-- INPUT PASSWORD
                 Tombol mata (eye-icon) di kanan untuk toggle show/hide password
                 Logika toggle ada di fungsi JS togglePassword() --}}
            <label for="password">Password</label>
            <div class="input-wrapper">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

                {{-- Tombol toggle show/hide password: klik → animasi flip + ganti ikon + ganti type input --}}
                <button type="button" class="eye-icon" onclick="togglePassword()">
                    <span id="eyeWrap">
                        {{-- SVG ikon mata tertutup (default: password tersembunyi)
                             Path diganti dinamis oleh JS saat toggle --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path id="eyePath" fill="#c9a0a0" d="M4.851 5.567L3.437 4.153L4.15 3.44l16.97 16.97l-.713.713l-2.388-2.388A10.45 10.45 0 0 1 12 19c-3.53 0-6.539-2.005-9.5-6.243a1.5 1.5 0 0 1 0-1.516a17.7 17.7 0 0 1 2.35-2.674m10.26 10.26l-1.607-1.606A3 3 0 0 1 9.111 10.13L7.647 8.666A5 5 0 0 0 12 17a4.98 4.98 0 0 0 3.11-1.173M12 5c3.53 0 6.539 2.005 9.5 6.241a1.5 1.5 0 0 1 0 1.516a17.8 17.8 0 0 1-1.9 2.348l-1.42-1.42a15.8 15.8 0 0 0 1.62-1.986C17.197 8.548 14.806 7 12 7a7.7 7.7 0 0 0-2.635.47l-1.534-1.535A10.2 10.2 0 0 1 12 5m-3.053 4.053l1.485 1.486a3 3 0 0 1 3.98 3.98l1.485 1.484A5 5 0 0 0 9 12c0-.829.207-1.61.571-2.294z"/>
                        </svg>
                    </span>
                </button>
            </div>

            {{-- Link "Lupa Password?": hanya ditampilkan jika route password.request terdaftar --}}
            <div class="forgot">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Lupa Password?</a>
                @endif
            </div>

            {{-- Tombol submit form login --}}
            <button type="submit" class="btn-login">Log In</button>

        </form>

        {{-- Divider pemisah antara form login dan tombol social login --}}
        <div class="divider">
            <hr><span>atau</span><hr>
        </div>

        {{-- Tombol social login: Facebook & Google berdampingan dalam grid 2 kolom --}}
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 12px;">
            <a href="#" class="btn-social">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                Facebook
            </a>
            <a href="#" class="btn-social">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google">
                Google
            </a>
        </div>

        {{-- Link ke halaman registrasi untuk user yang belum punya akun --}}
        <p class="signup-text">
            Tidak memiliki akun? <a href="{{ route('register') }}">Sign Up</a>
        </p>

    </div>

    <script>
    // ==========================================
    // TOGGLE SHOW/HIDE PASSWORD
    // iconOpen   → path SVG ikon mata terbuka (password terlihat)
    // iconClosed → path SVG ikon mata tertutup (password tersembunyi)
    // isAnimating → flag pencegah double-click saat animasi berjalan
    // ==========================================
    const iconOpen   = "M12 4.998c-3.53 0-6.539 2.005-9.5 6.243a1.5 1.5 0 0 0 0 1.516C5.461 17 8.47 19.004 12 19.004s6.539-2.005 9.5-6.243a1.5 1.5 0 0 0 0-1.516C18.539 7.003 15.53 4.998 12 4.998m0 10.006a3 3 0 1 1 0-6 3 3 0 0 1 0 6";
    const iconClosed = "M4.851 5.567L3.437 4.153L4.15 3.44l16.97 16.97l-.713.713l-2.388-2.388A10.45 10.45 0 0 1 12 19c-3.53 0-6.539-2.005-9.5-6.243a1.5 1.5 0 0 1 0-1.516a17.7 17.7 0 0 1 2.35-2.674m10.26 10.26l-1.607-1.606A3 3 0 0 1 9.111 10.13L7.647 8.666A5 5 0 0 0 12 17a4.98 4.98 0 0 0 3.11-1.173M12 5c3.53 0 6.539 2.005 9.5 6.241a1.5 1.5 0 0 1 0 1.516a17.8 17.8 0 0 1-1.9 2.348l-1.42-1.42a15.8 15.8 0 0 0 1.62-1.986C17.197 8.548 14.806 7 12 7a7.7 7.7 0 0 0-2.635.47l-1.534-1.535A10.2 10.2 0 0 1 12 5m-3.053 4.053l1.485 1.486a3 3 0 0 1 3.98 3.98l1.485 1.484A5 5 0 0 0 9 12c0-.829.207-1.61.571-2.294z";
    let isAnimating = false;

    function togglePassword() {
        if (isAnimating) return; // Cegah klik ganda saat animasi sedang berjalan
        isAnimating = true;

        const wrap  = document.getElementById('eyeWrap');
        const path  = document.getElementById('eyePath');
        const input = document.getElementById('password');

        // Fase 1: ikon "menutup" (scaleY → 0) selama 250ms
        wrap.style.transform = 'scaleY(0.08)';

        setTimeout(() => {
            const isNowText = input.type === 'password';

            // Ganti type input: password ↔ text
            input.type = isNowText ? 'text' : 'password';

            // Ganti path SVG ikon mata: terbuka ↔ tertutup
            path.setAttribute('d', isNowText ? iconOpen : iconClosed);

            // Fase 2: ikon "membuka" kembali (scaleY → 1) selama 250ms
            wrap.style.transform = 'scaleY(1)';

            // Buka kunci animasi setelah selesai
            setTimeout(() => { isAnimating = false; }, 250);
        }, 250);
    }
    </script>
</body>
</html>