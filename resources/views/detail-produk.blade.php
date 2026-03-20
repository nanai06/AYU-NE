<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #fff; color: #3b1a1a; }

        /* CONTENT */
        .content { padding: 40px; display: flex; gap: 48px; align-items: flex-start; }

        /* LEFT: IMAGES */
        .img-left { width: 460px; flex-shrink: 0; }

        .main-img {
            width: 100%; height: 420px; background: #fdf0f2;
            border-radius: 16px; display: flex; align-items: center;
            justify-content: center; font-size: 14px; color: #c4a0a0;
            margin-bottom: 16px;
        }

        .thumb-row { display: flex; gap: 12px; }

        .thumb {
            flex: 1; height: 90px; background: #fdf0f2; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 11px; color: #c4a0a0; cursor: pointer;
            border: 2px solid transparent; transition: border 0.2s;
        }

        .thumb:hover { border-color: #f4a0aa; }

        /* RIGHT: INFO */
        .info-right { flex: 1; }

        .tag-verified {
            display: inline-flex; align-items: center; gap: 6px;
            background: #f4a0aa; color: white; font-size: 12px;
            font-weight: 600; padding: 5px 14px; border-radius: 50px; margin-bottom: 14px;
        }

        .product-brand { font-size: 12px; color: #9a6a6a; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
        .product-name { font-size: 22px; font-weight: 800; color: #3b1a1a; margin-bottom: 14px; line-height: 1.3; }
        .product-price { font-size: 24px; font-weight: 800; color: #3b1a1a; margin-bottom: 20px; }

        hr { border: none; border-top: 1px solid #f5e0e0; margin: 20px 0; }

        .kondisi-label { font-size: 14px; font-weight: 700; color: #3b1a1a; margin-bottom: 8px; }
        .kondisi-desc { font-size: 13px; color: #7a4a4a; line-height: 1.7; }

        /* SELLER */
        .seller-box {
            display: flex; align-items: center; justify-content: space-between;
            background: #fdf0f2; border-radius: 14px; padding: 14px 18px; margin-top: 8px;
        }

        .seller-left { display: flex; align-items: center; gap: 12px; }

        .seller-avatar {
            width: 40px; height: 40px; border-radius: 50%;
            background: #f4a0aa; display: flex; align-items: center;
            justify-content: center; font-size: 16px; font-weight: 700; color: white;
        }

        .seller-name { font-size: 14px; font-weight: 700; color: #3b1a1a; margin-bottom: 3px; }

        .stars { display: flex; align-items: center; gap: 3px; font-size: 14px; }
        .star-count { font-size: 12px; color: #9a6a6a; margin-left: 4px; }

        .btn-chat {
            padding: 9px 20px; border: 1.5px solid #f0d5d5; border-radius: 50px;
            background: white; font-size: 13px; font-weight: 600; color: #3b1a1a;
            cursor: pointer; font-family: 'Poppins', sans-serif; transition: all 0.2s;
        }

        .btn-chat:hover { background: #fce4ec; border-color: #f4a0aa; }

        /* ACTION BUTTONS */
        .action-buttons { display: flex; gap: 14px; margin-top: 24px; }

        .btn-keranjang {
            flex: 1; padding: 14px; border: 1.5px solid #f0d5d5;
            border-radius: 50px; background: white; font-size: 14px;
            font-weight: 700; color: #3b1a1a; cursor: pointer;
            font-family: 'Poppins', sans-serif; transition: all 0.2s;
            text-decoration: none; text-align: center;
        }

        .btn-keranjang:hover { background: #fce4ec; border-color: #f4a0aa; }

        .btn-beli {
            flex: 1; padding: 14px; background: #f4a0aa; border: none;
            border-radius: 50px; font-size: 14px; font-weight: 700;
            color: white; cursor: pointer; font-family: 'Poppins', sans-serif;
            transition: background 0.2s; text-decoration: none; text-align: center;
            display: flex; align-items: center; justify-content: center;
        }

        .btn-beli:hover { background: #e8858f; }
    </style>
</head>
<body>
    @include('layouts.navigation')

<div class="content">
    <!-- LEFT -->
    <div class="img-left">
        <div class="main-img">Main Product Photo</div>
        <div class="thumb-row">
            <div class="thumb">Thumb 1</div>
            <div class="thumb">Thumb 2</div>
            <div class="thumb">Thumb 3</div>
            <div class="thumb">Thumb 4</div>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="info-right">
        <div class="tag-verified">Terverifikasi ✓</div>
        <div class="product-brand">Skintific</div>
        <div class="product-name">5X Ceramide Barrier Repair Moisture Gel</div>
        <div class="product-price">Rp 95.000</div>

        <hr>

        <div class="kondisi-label">Kondisi Produk</div>
        <div class="kondisi-desc">Preloved – Sisa 80%, masih tersegel. Beli 2 bulan lalu, tidak cocok dengan jenis kulit.</div>

        <hr>

        <div class="seller-box">
            <div class="seller-left">
                <div class="seller-avatar">S</div>
                <div>
                    <div class="seller-name">Sarah Beauty Store</div>
                    <div class="stars">
                        ⭐⭐⭐⭐☆
                        <span class="star-count">(4.0)</span>
                    </div>
                </div>
            </div>
           <a href="{{ route('chat-penjual') }}" class="btn-chat" style="text-decoration:none;">Chat Penjual</a>
        </div>

        <div class="action-buttons">
            <a href="{{ route('keranjang') }}" class="btn-keranjang">Tambah ke Keranjang</a>
            <a href="{{ route('checkout') }}" class="btn-beli">Beli Sekarang</a>
        </div>
    </div>
</div>

</body>
</html>