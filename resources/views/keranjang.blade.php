<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <title>Keranjang Belanja - AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background: linear-gradient(180deg, #ffe8ed 0%, #fff5f5 50%, #ffe8ed 100%);
            color: #3b1a1a;
        }

        /* ── NAVBAR ── */
        .navbar { display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; padding: 0 50px; height: 75px; background: white; background-image: url("{{ asset('images/frame 310(2).png') }}"); background-size: cover; border-bottom: 1px solid #f5e0e0; box-shadow: 0 4px 16px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 100; }
        .nav-left { display: flex; justify-content: flex-start; align-items: center; }
        .nav-links { display: flex; gap: 28px; list-style: none; font-size: 13px; }
        .nav-links a { font-weight: 500; color: #7a4a4a; text-decoration: none; padding: 4px 0; border-bottom: 1.5px solid transparent; opacity: 0.7; transition: all 0.2s; }
        .nav-links a:hover { color: #e07080; border-bottom-color: #FFBBC0; opacity: 1; }
        .nav-right { display: flex; align-items: center; justify-content: flex-end; gap: 18px; }
        .search-box { display: flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.8); border: 1px solid #f5e0e0; border-radius: 100px; padding: 8px 16px; width: 190px; transition: all 0.2s; }
        .search-box:focus-within { border-color: #FFBBC0; box-shadow: 0 0 0 3px rgba(224,112,128,0.1); }
        .search-box input { border: none; background: transparent; outline: none; font-size: 13px; color: #3b1a1a; width: 100%; font-family: 'Poppins', sans-serif; }
        .search-box input::placeholder { color: #c4a0a0; }
        .nav-icon { position: relative; cursor: pointer; color: #7a4a4a; display: flex; align-items: center; justify-content: center; transition: color 0.2s; text-decoration: none; }
        .nav-icon:hover { color: #e07080; }
        .badge { position: absolute; top: -6px; right: -6px; background: #e07080; color: white; font-size: 9px; font-weight: 700; width: 16px; height: 16px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .avatar { width: 38px; height: 38px; border-radius: 50%; background: linear-gradient(135deg, #ffe8ed 0%, #f5a5b6 50%, #ffdde4 100%); display: flex; align-items: center; justify-content: center; font-size: 18px; cursor: pointer; text-decoration: none; transition: transform 0.2s; }
        .avatar:hover { transform: scale(1.08); }

        /* ── PAGE HEADER ── */
        .page-header { padding: 28px 50px 0; display: flex; align-items: center; gap: 12px; }
        .page-title { font-size: 24px; font-weight: 800; color: #2A1520; display: flex; align-items: center; gap: 10px; }
        .item-count { font-size: 13px; color: #9E7178; font-weight: 500; background: #fff0f3; padding: 3px 12px; border-radius: 100px; }

        /* ── LAYOUT ── */
        .content { padding: 24px 50px 60px; display: flex; gap: 32px; align-items: flex-start; }
        .cart-left { flex: 1; display: flex; flex-direction: column; gap: 14px; }

        /* ── CART ITEM ── */
        .cart-item { display: flex; align-items: center; gap: 20px; padding: 18px 22px; background: white; border: 1.5px solid #F0D5D8; border-radius: 18px; transition: all 0.25s; animation: slideIn 0.3s ease both; }
        @keyframes slideIn { from{opacity:0;transform:translateY(8px)} to{opacity:1;transform:translateY(0)} }
        .cart-item:hover { box-shadow: 0 4px 20px rgba(184,92,101,0.1); border-color: #FFBBC0; }

        .item-photo { width: 88px; height: 88px; border-radius: 14px; overflow: hidden; background: linear-gradient(145deg, #FFF0F4, #FFE4EC); border: 1px solid #F0D5D8; flex-shrink: 0; }
        .item-photo img { width: 100%; height: 100%; object-fit: cover; }

        .item-info { flex: 1; }
        .item-brand { font-size: 10px; color: #9E7178; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 600; margin-bottom: 4px; }
        .item-name  { font-size: 14px; font-weight: 700; color: #2A1520; margin-bottom: 8px; line-height: 1.4; }
        .item-kondisi { font-size: 11px; color: #9E7178; margin-bottom: 6px; }
        .item-price { font-size: 15px; font-weight: 800; color: #e07080; }

        .item-right { display: flex; flex-direction: column; align-items: flex-end; gap: 14px; }

        .btn-delete { background: none; border: none; cursor: pointer; color: #C4A0A8; padding: 4px; border-radius: 8px; transition: all 0.2s; display: flex; align-items: center; }
        .btn-delete:hover { color: #e07080; background: #FFF0F3; }

        .qty-wrap { display: flex; align-items: center; background: #FFF0F3; border: 1.5px solid #F0D5D8; border-radius: 100px; padding: 3px; }
        .qty-btn { width: 30px; height: 30px; border-radius: 50%; border: none; background: white; font-size: 16px; cursor: pointer; display: flex; align-items: center; justify-content: center; color: #7a4a4a; font-family: 'Poppins', sans-serif; transition: all 0.2s; line-height: 1; }
        .qty-btn:hover { background: #e07080; color: white; }
        .qty-num { font-size: 14px; font-weight: 700; color: #2A1520; min-width: 30px; text-align: center; }

        /* ── EMPTY STATE ── */
        .empty-cart { text-align: center; padding: 60px 20px; background: white; border-radius: 20px; border: 1.5px solid #F0D5D8; }
        .empty-cart p { font-size: 14px; color: #9E7178; margin: 12px 0 20px; }
        .empty-cart a { display: inline-block; padding: 12px 28px; background: #e07080; color: white; border-radius: 100px; text-decoration: none; font-weight: 600; font-size: 14px; transition: background 0.2s; }
        .empty-cart a:hover { background: #c85070; }

        /* ── RINGKASAN (lebih besar) ── */
        .cart-right { width: 420px; flex-shrink: 0; position: sticky; top: 95px; }

        .summary-box { background: white; border: 1.5px solid #F0D5D8; border-radius: 24px; padding: 30px; box-shadow: 0 4px 24px rgba(184,92,101,0.1); }

        .summary-title { font-size: 20px; font-weight: 800; color: #2A1520; margin-bottom: 22px; display: flex; align-items: center; gap: 8px; }

        .summary-row { display: flex; justify-content: space-between; align-items: center; font-size: 14px; color: #9E7178; margin-bottom: 13px; }
        .summary-row span:last-child { font-weight: 600; color: #3b1a1a; }
        .summary-row.diskon span:last-child { color: #4CAF7D; font-weight: 700; }

        .summary-divider { border: none; border-top: 1.5px dashed #F0D5D8; margin: 16px 0; }

        .summary-total { display: flex; justify-content: space-between; align-items: center; font-size: 20px; font-weight: 800; margin-bottom: 6px; }
        .summary-total span:first-child { color: #5D393B; }
        .summary-total span:last-child  { color: #e07080; }

        .summary-note { font-size: 11px; color: #9E7178; text-align: right; margin-bottom: 22px; }

        .btn-checkout { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 15px; background: #e07080; color: white; border: none; border-radius: 100px; font-size: 15px; font-weight: 700; cursor: pointer; font-family: 'Poppins', sans-serif; text-decoration: none; text-align: center; transition: all 0.2s; box-shadow: 0 4px 16px rgba(224,112,128,0.35); }
        .btn-checkout:hover { background: #c85070; transform: translateY(-1px); box-shadow: 0 6px 20px rgba(224,112,128,0.45); }

        .btn-lanjut { display: block; width: 100%; padding: 11px; background: transparent; color: #9E7178; border: none; font-size: 13px; font-weight: 500; text-decoration: none; text-align: center; margin-top: 10px; transition: color 0.2s; cursor: pointer; }
        .btn-lanjut:hover { color: #e07080; }

        /* ── PROMO BOX ── */
        .promo-section { margin-top: 18px; }
        .promo-label { font-size: 11px; font-weight: 700; color: #9E7178; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 8px; }
        .promo-box { display: flex; align-items: center; gap: 8px; background: #FFF0F3; border: 1.5px solid #F0D5D8; border-radius: 12px; padding: 10px 14px; margin-bottom: 12px; transition: all 0.2s; }
        .promo-box:focus-within { border-color: #FFBBC0; }
        .promo-box input { flex: 1; border: none; background: transparent; outline: none; font-size: 13px; font-family: 'Poppins', sans-serif; color: #3b1a1a; text-transform: uppercase; }
        .promo-box input::placeholder { color: #C4A0A8; text-transform: none; }
        .btn-promo { padding: 7px 16px; background: #e07080; color: white; border: none; border-radius: 8px; font-size: 12px; font-weight: 700; cursor: pointer; font-family: 'Poppins', sans-serif; transition: background 0.2s; white-space: nowrap; }
        .btn-promo:hover { background: #c85070; }

        .promo-applied { display: none; align-items: center; gap: 8px; background: #e8f5e9; border: 1.5px solid #4CAF7D; border-radius: 10px; padding: 8px 14px; font-size: 12px; font-weight: 600; color: #2e7d32; margin-bottom: 12px; }
        .promo-applied.show { display: flex; }
        .promo-remove { margin-left: auto; cursor: pointer; color: #9E7178; font-size: 15px; }
        .promo-remove:hover { color: #e07080; }

        /* ── AYU KOIN TOGGLE ── */
        .koin-toggle { display: flex; align-items: center; justify-content: space-between; padding: 13px 16px; border: 1.5px solid #F0D5D8; border-radius: 14px; cursor: pointer; transition: all 0.2s; background: white; }
        .koin-toggle.active { border-color: #e07080; background: #FFF0F3; }
        .koin-toggle:hover { border-color: #FFBBC0; background: #FFF8F9; }
        .koin-left { display: flex; align-items: center; gap: 10px; }
        .koin-icon { width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #ffe8ed, #f5a5b6); display: flex; align-items: center; justify-content: center; font-size: 18px; }
        .koin-title { font-size: 13px; font-weight: 700; color: #3b1a1a; }
        .koin-sub   { font-size: 11px; color: #9E7178; }
        .koin-right { display: flex; align-items: center; gap: 8px; }
        .koin-disc-label { font-size: 12px; font-weight: 700; color: #e07080; }
        .koin-switch { position: relative; width: 40px; height: 22px; }
        .koin-switch input { opacity: 0; width: 0; height: 0; }
        .koin-slider { position: absolute; inset: 0; background: #F0D5D8; border-radius: 100px; transition: 0.3s; cursor: pointer; }
        .koin-slider::before { content:""; position:absolute; width:16px; height:16px; left:3px; top:3px; background:white; border-radius:50%; transition:0.3s; box-shadow:0 1px 3px rgba(0,0,0,0.15); }
        .koin-switch input:checked + .koin-slider { background: #e07080; }
        .koin-switch input:checked + .koin-slider::before { transform: translateX(18px); }

        /* ── TOAST ── */
        .toast { position: fixed; bottom: 28px; left: 50%; transform: translateX(-50%) translateY(90px); background: #3b1a1a; color: white; padding: 13px 26px; border-radius: 100px; font-size: 13px; font-weight: 500; z-index: 999; box-shadow: 0 8px 28px rgba(0,0,0,0.2); transition: transform 0.4s cubic-bezier(0.34,1.48,0.64,1); white-space: nowrap; }
        .toast.show { transform: translateX(-50%) translateY(0); }
    </style>
</head>
<body>

<div class="toast" id="toast"></div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-left">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE" style="height:36px;width:auto;object-fit:contain;">
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('ayu-belanja') }}">Ayu Belanja</a></li>
        <li><a href="{{ route('ayu-daur-ulang') }}">Ayu Daur Ulang</a></li>
        <li><a href="{{ route('ayu-koin') }}">Ayu Koin</a></li>
    </ul>
    <div class="nav-right">
        <div class="search-box">
            <iconify-icon icon="basil:search-solid" width="18" style="color:#c4a0a0;flex-shrink:0;"></iconify-icon>
            <input type="text" placeholder="Cari produk...">
        </div>
        <a href="{{ route('notifikasi') }}" class="nav-icon">
            <iconify-icon icon="basil:notification-outline" width="25"></iconify-icon>
            <div class="badge">2</div>
        </a>
        <a href="{{ route('keranjang') }}" class="nav-icon">
            <iconify-icon icon="mynaui:cart" width="25"></iconify-icon>
            <div class="badge" id="cartBadge">5</div>
        </a>
        <a href="{{ route('profil') }}" class="avatar">
            <iconify-icon icon="icon-park-solid:women" width="20"></iconify-icon>
        </a>
    </div>
</nav>

<!-- PAGE HEADER -->
<div class="page-header">
    <div class="page-title">
        <iconify-icon icon="mynaui:cart" width="24" style="color:#e07080;"></iconify-icon>
        Keranjang Belanja
    </div>
    <div class="item-count" id="itemCount">5 item</div>
</div>

<!-- KONTEN -->
<div class="content">

    <!-- KIRI: ITEM -->
    <div class="cart-left" id="cartList">

        @php
        $items = [
            ['id'=>1, 'brand'=>'Skintific',           'nama'=>'5X Ceramide Barrier Repair Moisture Gel', 'kondisi'=>'Preloved – Sisa 65%', 'harga'=>95000,  'img'=>'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?q=80&w=200&auto=format&fit=crop'],
            ['id'=>2, 'brand'=>'Somethinc',            'nama'=>'Holyshield Sunscreen SPF 50',             'kondisi'=>'Preloved – Sisa 80%', 'harga'=>75000,  'img'=>'https://images.unsplash.com/photo-1599305090598-fe179d501227?q=80&w=200&auto=format&fit=crop'],
            ['id'=>3, 'brand'=>'Whitelab',             'nama'=>'Brightening Face Toner',                  'kondisi'=>'Preloved – Sisa 30%', 'harga'=>45000,  'img'=>'https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=200&auto=format&fit=crop'],
            ['id'=>4, 'brand'=>'Maybelline',           'nama'=>'Fit Me Foundation',                       'kondisi'=>'Baru – Tersegel',     'harga'=>85000,  'img'=>'https://plus.unsplash.com/premium_photo-1677175230595-87f8721ff703?q=80&w=200&auto=format&fit=crop'],
            ['id'=>5, 'brand'=>'Focallure',            'nama'=>'Professional Brush Set 18pcs',            'kondisi'=>'Preloved – Sisa 80%', 'harga'=>45000,  'img'=>'https://images.unsplash.com/photo-1596462502278-27bfdc403348?q=80&w=200&auto=format&fit=crop'],
        ];
        @endphp

        @foreach($items as $item)
        <div class="cart-item" id="item{{ $item['id'] }}">
            <div class="item-photo">
                <img src="{{ $item['img'] }}" alt="{{ $item['nama'] }}">
            </div>
            <div class="item-info">
                <div class="item-brand">{{ $item['brand'] }}</div>
                <div class="item-name">{{ $item['nama'] }}</div>
                <div class="item-kondisi">{{ $item['kondisi'] }}</div>
                <div class="item-price" id="priceDisplay{{ $item['id'] }}">Rp {{ number_format($item['harga'],0,',','.') }}</div>
            </div>
            <div class="item-right">
                <button class="btn-delete" onclick="hapusItem({{ $item['id'] }})" title="Hapus">
                    <iconify-icon icon="ph:trash-bold" width="18"></iconify-icon>
                </button>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="kurang({{ $item['id'] }})">−</button>
                    <span class="qty-num" id="qty{{ $item['id'] }}">1</span>
                    <button class="qty-btn" onclick="tambah({{ $item['id'] }})">+</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <!-- KANAN: RINGKASAN -->
    <div class="cart-right">
        <div class="summary-box">

            <div class="summary-title">
                <iconify-icon icon="ph:receipt-bold" width="22" style="color:#e07080;"></iconify-icon>
                Ringkasan Belanja
            </div>

            <div class="summary-row">
                <span id="subtotalLabel">Subtotal (5 item)</span>
                <span id="subtotal">Rp 345.000</span>
            </div>
            <div class="summary-row">
                <span>Estimasi Ongkir</span>
                <span>Rp 15.000</span>
            </div>
            <div class="summary-row diskon" id="diskonRow" style="display:none;">
                <span>Diskon</span>
                <span id="diskonVal">- Rp 0</span>
            </div>

            <hr class="summary-divider">

            <div class="summary-total">
                <span>Total</span>
                <span id="total">Rp 360.000</span>
            </div>
            <div class="summary-note">Sudah termasuk estimasi ongkir</div>

            <a href="{{ route('checkout') }}" class="btn-checkout">
                <iconify-icon icon="ph:shopping-bag-bold" width="18"></iconify-icon>
                Lanjut ke Checkout
            </a>
            <a href="{{ route('ayu-belanja') }}" class="btn-lanjut">← Lanjut Belanja</a>

            <!-- Kode Promo -->
            <div class="promo-section">
                <div class="promo-label">Kode Voucher</div>
                <div class="promo-box">
                    <iconify-icon icon="ph:ticket-bold" width="16" style="color:#e07080;flex-shrink:0;"></iconify-icon>
                    <input type="text" id="promoInput" placeholder="Masukkan kode voucher...">
                    <button class="btn-promo" onclick="pakaiPromo()">Pakai</button>
                </div>
                <div class="promo-applied" id="promoApplied">
                    <iconify-icon icon="ph:check-circle-bold" width="15" style="color:#4CAF7D;flex-shrink:0;"></iconify-icon>
                    <span id="promoLabel"></span>
                    <span class="promo-remove" onclick="hapusPromo()">✕</span>
                </div>

                <!-- Ayu Koin -->
                <div class="koin-toggle" id="koinToggle" onclick="toggleKoin()">
                    <div class="koin-left">
                        <div class="koin-icon">🪙</div>
                        <div>
                            <div class="koin-title">Gunakan Ayu Koin</div>
                            <div class="koin-sub">150 koin = <strong>Rp 15.000</strong> diskon</div>
                        </div>
                    </div>
                    <div class="koin-right">
                        <span class="koin-disc-label" id="koinLabel"></span>
                        <label class="koin-switch" onclick="event.stopPropagation()">
                            <input type="checkbox" id="koinCheck" onchange="toggleKoin()">
                            <span class="koin-slider"></span>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    const hargaBase = { 1:95000, 2:75000, 3:45000, 4:85000, 5:45000 };
    const ongkir    = 15000;
    const koinNilai = 15000;
    let qty     = { 1:1, 2:1, 3:1, 4:1, 5:1 };
    let active  = { 1:true, 2:true, 3:true, 4:true, 5:true };
    let diskonPromo = 0;
    let diskonKoin  = 0;

    const VOUCHERS = {
        'AYUNE10'  : { label: 'AYUNE10 — diskon 10%',  tipe:'persen', nilai:10    },
        'HEMAT20K' : { label: 'HEMAT20K — Rp 20.000',  tipe:'flat',   nilai:20000 },
        'PRELOVED5': { label: 'PRELOVED5 — diskon 5%', tipe:'persen', nilai:5     },
    };

    function formatRp(num) {
        return 'Rp ' + Math.max(num,0).toLocaleString('id-ID');
    }

    function hitungSubtotal() {
        let sub = 0;
        Object.keys(active).forEach(i => {
            if (active[i]) sub += hargaBase[i] * qty[i];
        });
        return sub;
    }

    function updateUI() {
        const sub        = hitungSubtotal();
        const totalItems = Object.keys(active).filter(i => active[i]).reduce((s,i) => s + qty[i], 0);

        // hitung diskon promo
        if (diskonPromo === 0) {
            const kode = document.getElementById('promoInput').value.trim().toUpperCase();
        }

        const totalDiskon = diskonPromo + diskonKoin;
        const total       = sub + ongkir - totalDiskon;

        document.getElementById('subtotal').textContent      = formatRp(sub);
        document.getElementById('total').textContent         = formatRp(total);
        document.getElementById('itemCount').textContent     = totalItems + ' item';
        document.getElementById('subtotalLabel').textContent = 'Subtotal (' + totalItems + ' item)';
        document.getElementById('cartBadge').textContent     = totalItems;

        document.getElementById('diskonVal').textContent     = '- ' + formatRp(totalDiskon);
        document.getElementById('diskonRow').style.display   = totalDiskon > 0 ? 'flex' : 'none';

        // update harga per item
        Object.keys(active).forEach(i => {
            const el = document.getElementById('priceDisplay' + i);
            if (el && active[i]) el.textContent = formatRp(hargaBase[i] * qty[i]);
        });
    }

    function tambah(id) {
        qty[id]++;
        document.getElementById('qty' + id).textContent = qty[id];
        updateUI();
    }

    function kurang(id) {
        if (qty[id] > 1) {
            qty[id]--;
            document.getElementById('qty' + id).textContent = qty[id];
            updateUI();
        }
    }

    function hapusItem(id) {
        const item = document.getElementById('item' + id);
        item.style.transition = 'all 0.3s ease';
        item.style.opacity    = '0';
        item.style.transform  = 'translateX(-20px)';
        setTimeout(() => {
            item.style.display = 'none';
            active[id]         = false;
            updateUI();
            showToast('🗑️ Item dihapus dari keranjang');
        }, 280);
    }

    function pakaiPromo() {
        const kode = document.getElementById('promoInput').value.trim().toUpperCase();
        const v    = VOUCHERS[kode];
        if (!kode) { showToast('⚠️ Masukkan kode voucher dulu!'); return; }
        if (!v)    { showToast('❌ Kode voucher tidak valid!'); return; }

        const sub   = hitungSubtotal();
        diskonPromo = v.tipe === 'persen' ? Math.round(sub * v.nilai / 100) : v.nilai;

        document.getElementById('promoLabel').textContent = '✓ ' + v.label;
        document.getElementById('promoApplied').classList.add('show');
        document.getElementById('promoInput').disabled = true;
        updateUI();
        showToast('✅ Voucher berhasil dipakai!');
    }

    function hapusPromo() {
        diskonPromo = 0;
        document.getElementById('promoInput').value    = '';
        document.getElementById('promoInput').disabled = false;
        document.getElementById('promoApplied').classList.remove('show');
        updateUI();
    }

    function toggleKoin() {
        const cb     = document.getElementById('koinCheck');
        const toggle = document.getElementById('koinToggle');
        const label  = document.getElementById('koinLabel');
        if (event.target !== cb) cb.checked = !cb.checked;
        if (cb.checked) {
            diskonKoin = koinNilai;
            label.textContent = '- Rp 15.000';
            toggle.classList.add('active');
            showToast('🪙 150 Ayu Koin dipakai!');
        } else {
            diskonKoin = 0;
            label.textContent = '';
            toggle.classList.remove('active');
        }
        updateUI();
    }

    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg; t.classList.add('show');
        clearTimeout(t._timer); t._timer = setTimeout(() => t.classList.remove('show'), 2800);
    }
</script>
</body>
</html>