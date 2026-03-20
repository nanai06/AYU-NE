<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayu Koin - AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #fff; color: #3b1a1a; }

        /* CONTENT */
        .content { padding: 36px 40px; }

        /* KOIN BANNER */
        .koin-banner {
            background: #fce4ec;
            border-radius: 20px;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 36px;
        }

        .koin-left { display: flex; flex-direction: column; gap: 6px; }

        .koin-label {
            display: flex; align-items: center; gap: 10px;
            font-size: 14px; font-weight: 600; color: #7a4a4a;
        }

        .koin-icon-wrap {
            width: 36px; height: 36px; border-radius: 50%;
            background: #f9a825; display: flex; align-items: center;
            justify-content: center; font-size: 18px;
        }

        .koin-number { font-size: 48px; font-weight: 800; color: #3b1a1a; line-height: 1.1; }
        .koin-equiv { font-size: 13px; color: #9a6a6a; }

        .btn-tukar-voucher {
            padding: 13px 28px; background: white; border: none;
            border-radius: 50px; font-size: 14px; font-weight: 700;
            color: #3b1a1a; cursor: pointer; font-family: 'Poppins', sans-serif;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08); transition: all 0.2s;
            white-space: nowrap;
        }
        .btn-tukar-voucher:hover { background: #f9f0f2; }

        /* VOUCHER SECTION */
        .section-title { font-size: 20px; font-weight: 800; color: #3b1a1a; margin-bottom: 20px; }

        .voucher-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 40px; }

        .voucher-card {
            border: 1px solid #f5e0e0; border-radius: 16px;
            padding: 18px; display: flex; flex-direction: column; gap: 8px;
            transition: box-shadow 0.2s;
        }
        .voucher-card:hover { box-shadow: 0 4px 16px rgba(224,112,128,0.1); }

        .voucher-logo {
            width: 48px; height: 32px; background: #f9f0f2;
            border-radius: 6px; display: flex; align-items: center;
            justify-content: center; font-size: 10px; color: #c4a0a0;
            margin-bottom: 4px;
        }

        .voucher-badge {
            display: inline-block; padding: 3px 10px; border-radius: 50px;
            font-size: 11px; font-weight: 600; width: fit-content;
        }
        .badge-populer { background: #fce4ec; color: #e07080; }
        .badge-habis { background: #fff3e0; color: #f57c00; }

        .voucher-title { font-size: 18px; font-weight: 800; color: #3b1a1a; }
        .voucher-koin { font-size: 14px; font-weight: 700; color: #e07080; }
        .voucher-min { font-size: 12px; color: #9a6a6a; }
        .voucher-exp { font-size: 12px; color: #9a6a6a; margin-bottom: 4px; }

        .btn-tukar {
            width: 100%; padding: 11px; background: #f4a0aa; color: white;
            border: none; border-radius: 50px; font-size: 13px; font-weight: 700;
            cursor: pointer; font-family: 'Poppins', sans-serif; transition: background 0.2s;
            margin-top: auto;
        }
        .btn-tukar:hover { background: #e8858f; }

        /* DIVIDER */
        .divider { border: none; border-top: 1px solid #f5e0e0; margin: 8px 0 32px 0; }

        /* VOUCHER AKTIF */
        .tab-row {
            display: flex; align-items: center; gap: 0;
            margin-bottom: 20px; border-bottom: 1px solid #f5e0e0;
        }

        .tab-item {
            font-size: 14px; font-weight: 500; color: #9a6a6a;
            padding: 10px 0; margin-right: 28px; cursor: pointer;
            border-bottom: 2px solid transparent; transition: all 0.2s;
        }
        .tab-item.active { color: #e07080; font-weight: 700; border-bottom: 2px solid #e07080; }
        .tab-item:hover:not(.active) { color: #7a4a4a; }

        .voucher-list { margin-bottom: 40px; }

        .voucher-item {
            display: flex; align-items: center; justify-content: space-between;
            padding: 18px 20px; border: 1.5px dashed #f4a0aa;
            border-radius: 14px; margin-bottom: 12px; background: #fff9fa;
            transition: all 0.2s;
        }
        .voucher-item:hover { background: #fff5f6; }

        .voucher-item-code { font-size: 13px; font-weight: 700; color: #7a4a4a; margin-bottom: 4px; }
        .voucher-item-disc { font-size: 16px; font-weight: 800; color: #3b1a1a; margin-bottom: 4px; }
        .voucher-item-info { font-size: 12px; color: #9a6a6a; }

        .btn-pakai {
            padding: 9px 22px; border: 1.5px solid #f0d5d5;
            border-radius: 50px; background: white; font-size: 13px;
            font-weight: 700; color: #3b1a1a; cursor: pointer;
            font-family: 'Poppins', sans-serif; transition: all 0.2s; white-space: nowrap;
        }
        .btn-pakai:hover { background: #fce4ec; border-color: #f4a0aa; }

        /* RIWAYAT */
        .riwayat-item {
            display: flex; align-items: center; gap: 16px;
            padding: 16px 0; border-bottom: 1px solid #f9f0f2;
        }

        .riwayat-icon {
            width: 42px; height: 42px; border-radius: 50%; background: #fdf0f2;
            display: flex; align-items: center; justify-content: center;
            font-size: 18px; flex-shrink: 0;
        }

        .riwayat-info { flex: 1; }
        .riwayat-nama { font-size: 14px; font-weight: 600; color: #3b1a1a; }
        .riwayat-tgl { font-size: 12px; color: #b4a0a0; margin-top: 2px; }

        .riwayat-koin { font-size: 14px; font-weight: 700; white-space: nowrap; }
        .plus { color: #2ecc71; }
        .minus { color: #e07080; }
    </style>
</head>
<body>

    @include('layouts.navigation')
<div class="content">

    <!-- KOIN BANNER -->
    <div class="koin-banner">
        <div class="koin-left">
            <div class="koin-label">
                <div class="koin-icon-wrap">🪙</div>
                Ayu Koin Kamu
            </div>
            <div class="koin-number">1200</div>
            <div class="koin-equiv">Setara Rp 50.000 voucher</div>
        </div>
        <button class="btn-tukar-voucher">Tukar Jadi Voucher</button>
    </div>

    <!-- VOUCHER YANG BISA DITUKAR -->
    <div class="section-title">Voucher yang Bisa Kamu Tukarkan</div>
    <div class="voucher-grid">

        <div class="voucher-card">
            <div class="voucher-logo">Logo</div>
            <span class="voucher-badge badge-populer">Terpopuler</span>
            <div class="voucher-title">Diskon 20%</div>
            <div class="voucher-koin">500 Koin</div>
            <div class="voucher-min">Min. belanja Rp 100.000</div>
            <div class="voucher-exp">Berlaku hingga 31 Maret 2026</div>
            <button class="btn-tukar">Tukar Sekarang</button>
        </div>

        <div class="voucher-card">
            <div class="voucher-logo">Logo</div>
            <div class="voucher-title">Diskon 15%</div>
            <div class="voucher-koin">300 Koin</div>
            <div class="voucher-min">Min. belanja Rp 75.000</div>
            <div class="voucher-exp">Berlaku hingga 28 Februari 2026</div>
            <button class="btn-tukar">Tukar Sekarang</button>
        </div>

        <div class="voucher-card">
            <div class="voucher-logo">Logo</div>
            <span class="voucher-badge badge-habis">Hampir Habis</span>
            <div class="voucher-title">Diskon 30%</div>
            <div class="voucher-koin">800 Koin</div>
            <div class="voucher-min">Min. belanja Rp 150.000</div>
            <div class="voucher-exp">Berlaku hingga 15 Maret 2026</div>
            <button class="btn-tukar">Tukar Sekarang</button>
        </div>

        <div class="voucher-card">
            <div class="voucher-logo">Logo</div>
            <div class="voucher-title">Diskon 10%</div>
            <div class="voucher-koin">200 Koin</div>
            <div class="voucher-min">Min. belanja Rp 50.000</div>
            <div class="voucher-exp">Berlaku hingga 31 Maret 2026</div>
            <button class="btn-tukar">Tukar Sekarang</button>
        </div>

    </div>

    <hr class="divider">

    <!-- VOUCHER AKTIFKU -->
    <div class="section-title">Voucher Aktifku</div>
    <div class="tab-row">
        <div class="tab-item active" onclick="switchVoucher('aktif', this)">Aktif</div>
        <div class="tab-item" onclick="switchVoucher('digunakan', this)">Digunakan</div>
        <div class="tab-item" onclick="switchVoucher('kedaluwarsa', this)">Kedaluwarsa</div>
    </div>

    <div class="voucher-list" id="vAktif">
        <div class="voucher-item">
            <div>
                <div class="voucher-item-code">AYUBEAUTY20</div>
                <div class="voucher-item-disc">Diskon Rp 20.000</div>
                <div class="voucher-item-info">Min. belanja Rp 100.000 • Berlaku hingga 31 Maret 2026</div>
            </div>
            <button class="btn-pakai">Pakai</button>
        </div>
        <div class="voucher-item">
            <div>
                <div class="voucher-item-code">AYUBEAUTY20</div>
                <div class="voucher-item-disc">Diskon Rp 20.000</div>
                <div class="voucher-item-info">Min. belanja Rp 100.000 • Berlaku hingga 31 Maret 2026</div>
            </div>
            <button class="btn-pakai">Pakai</button>
        </div>
    </div>

    <div class="voucher-list" id="vDigunakan" style="display:none;">
        <div class="voucher-item" style="opacity:0.5;">
            <div>
                <div class="voucher-item-code">AYUDAUR10</div>
                <div class="voucher-item-disc">Diskon Rp 10.000</div>
                <div class="voucher-item-info">Digunakan pada 1 Maret 2026</div>
            </div>
            <span style="font-size:12px; color:#9a6a6a; font-weight:600;">Terpakai</span>
        </div>
    </div>

    <div class="voucher-list" id="vKedaluwarsa" style="display:none;">
        <div class="voucher-item" style="opacity:0.5;">
            <div>
                <div class="voucher-item-code">AYUFEB15</div>
                <div class="voucher-item-disc">Diskon 15%</div>
                <div class="voucher-item-info">Kedaluwarsa pada 28 Februari 2026</div>
            </div>
            <span style="font-size:12px; color:#9a6a6a; font-weight:600;">Kedaluwarsa</span>
        </div>
    </div>

    <hr class="divider">

    <!-- RIWAYAT AKTIVITAS -->
    <div class="section-title">Riwayat Aktivitas</div>
    <div class="tab-row">
        <div class="tab-item active" onclick="switchRiwayat('semua', this)">Semua</div>
        <div class="tab-item" onclick="switchRiwayat('masuk', this)">Masuk</div>
        <div class="tab-item" onclick="switchRiwayat('keluar', this)">Keluar</div>
    </div>

    <div id="rSemua">
        <div class="riwayat-item">
            <div class="riwayat-icon">♻️</div>
            <div class="riwayat-info">
                <div class="riwayat-nama">Daur ulang 5 kemasan</div>
                <div class="riwayat-tgl">5 Maret 2026</div>
            </div>
            <div class="riwayat-koin plus">+50 Koin</div>
        </div>
        <div class="riwayat-item">
            <div class="riwayat-icon">🛍️</div>
            <div class="riwayat-info">
                <div class="riwayat-nama">Tukar voucher 20%</div>
                <div class="riwayat-tgl">3 Maret 2026</div>
            </div>
            <div class="riwayat-koin minus">-500 Koin</div>
        </div>
        <div class="riwayat-item">
            <div class="riwayat-icon">⭐</div>
            <div class="riwayat-info">
                <div class="riwayat-nama">Bonus misi harian</div>
                <div class="riwayat-tgl">1 Maret 2026</div>
            </div>
            <div class="riwayat-koin plus">+25 Koin</div>
        </div>
        <div class="riwayat-item">
            <div class="riwayat-icon">♻️</div>
            <div class="riwayat-info">
                <div class="riwayat-nama">Daur ulang 3 kemasan</div>
                <div class="riwayat-tgl">28 Februari 2026</div>
            </div>
            <div class="riwayat-koin plus">+30 Koin</div>
        </div>
    </div>

    <div id="rMasuk" style="display:none;">
        <div class="riwayat-item">
            <div class="riwayat-icon">♻️</div>
            <div class="riwayat-info"><div class="riwayat-nama">Daur ulang 5 kemasan</div><div class="riwayat-tgl">5 Maret 2026</div></div>
            <div class="riwayat-koin plus">+50 Koin</div>
        </div>
        <div class="riwayat-item">
            <div class="riwayat-icon">⭐</div>
            <div class="riwayat-info"><div class="riwayat-nama">Bonus misi harian</div><div class="riwayat-tgl">1 Maret 2026</div></div>
            <div class="riwayat-koin plus">+25 Koin</div>
        </div>
        <div class="riwayat-item">
            <div class="riwayat-icon">♻️</div>
            <div class="riwayat-info"><div class="riwayat-nama">Daur ulang 3 kemasan</div><div class="riwayat-tgl">28 Februari 2026</div></div>
            <div class="riwayat-koin plus">+30 Koin</div>
        </div>
    </div>

    <div id="rKeluar" style="display:none;">
        <div class="riwayat-item">
            <div class="riwayat-icon">🛍️</div>
            <div class="riwayat-info"><div class="riwayat-nama">Tukar voucher 20%</div><div class="riwayat-tgl">3 Maret 2026</div></div>
            <div class="riwayat-koin minus">-500 Koin</div>
        </div>
    </div>

</div>

<script>
    function switchVoucher(tab, el) {
        ['vAktif','vDigunakan','vKedaluwarsa'].forEach(id => document.getElementById(id).style.display = 'none');
        document.querySelectorAll('.tab-row')[0].querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
        const map = { aktif: 'vAktif', digunakan: 'vDigunakan', kedaluwarsa: 'vKedaluwarsa' };
        document.getElementById(map[tab]).style.display = 'block';
        el.classList.add('active');
    }

    function switchRiwayat(tab, el) {
        ['rSemua','rMasuk','rKeluar'].forEach(id => document.getElementById(id).style.display = 'none');
        document.querySelectorAll('.tab-row')[1].querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
        const map = { semua: 'rSemua', masuk: 'rMasuk', keluar: 'rKeluar' };
        document.getElementById(map[tab]).style.display = 'block';
        el.classList.add('active');
    }
</script>

</body>
</html>