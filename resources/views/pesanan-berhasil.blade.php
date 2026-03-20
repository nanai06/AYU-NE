<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil - AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #fff; color: #3b1a1a; }

        /* SUCCESS */
        .success-wrap {
            min-height: calc(100vh - 73px);
            background: linear-gradient(160deg, #fff5f6 0%, #fff0f0 50%, #fffaf5 100%);
            display: flex; align-items: center; justify-content: center;
        }

        .success-box { text-align: center; padding: 60px 40px; max-width: 560px; }

        .check-circle {
            width: 90px; height: 90px; border-radius: 50%;
            border: 3px solid #2ecc71; display: flex;
            align-items: center; justify-content: center;
            font-size: 40px; color: #2ecc71;
            margin: 0 auto 28px auto;
        }

        .success-title { font-size: 28px; font-weight: 800; color: #3b1a1a; margin-bottom: 10px; }
        .order-id { font-size: 14px; color: #9a6a6a; margin-bottom: 14px; font-weight: 500; }
        .success-desc { font-size: 14px; color: #7a6a6a; line-height: 1.7; margin-bottom: 36px; }

        .action-buttons { display: flex; gap: 14px; justify-content: center; }

        .btn-lihat {
            padding: 14px 28px; background: #f4a0aa; color: white;
            border: none; border-radius: 50px; font-size: 14px; font-weight: 700;
            cursor: pointer; font-family: 'Poppins', sans-serif;
            text-decoration: none; transition: background 0.2s;
        }
        .btn-lihat:hover { background: #e8858f; }

        .btn-lanjut {
            padding: 14px 28px; background: white; color: #3b1a1a;
            border: 1.5px solid #e0e0e0; border-radius: 50px; font-size: 14px; font-weight: 700;
            cursor: pointer; font-family: 'Poppins', sans-serif;
            text-decoration: none; transition: all 0.2s;
        }
        .btn-lanjut:hover { border-color: #f4a0aa; color: #e07080; }
    </style>
</head>
<body>

@include('layouts.navigation')

<div class="success-wrap">
    <div class="success-box">
        <div class="check-circle">✓</div>
        <div class="success-title">Pesanan Berhasil Dibuat! 🎉</div>
        <div class="order-id">Order ID: #AYU-2026-00123</div>
        <div class="success-desc">Pesananmu sedang diproses. Kami akan mengirimkan notifikasi saat pesanan dikirim.</div>
        <div class="action-buttons">
            <a href="{{ route('pesanan-saya') }}" class="btn-lihat">Lihat Pesanan Saya</a>
            <a href="{{ route('ayu-belanja') }}" class="btn-lanjut">Lanjut Belanja</a>
        </div>
    </div>
</div>

</body>
</html>