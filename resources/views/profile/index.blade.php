<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #fff;
            color: #3b1a1a;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 40px;
            border-bottom: 1px solid #f5e0e0;
            background: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

           .nav-logo img {
            height: 36px;
            width: auto;
            object-fit: contain;
        }


        .nav-links {
            display: flex;
            gap: 36px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #7a4a4a;
            transition: color 0.2s;
        }

        .nav-links a:hover { color: #e07080; }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #f9f0f2;
            border-radius: 50px;
            padding: 8px 16px;
            gap: 8px;
            width: 200px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 13px;
            color: #3b1a1a;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .search-box input::placeholder { color: #c4a0a0; }

        .nav-icon {
            position: relative;
            cursor: pointer;
            font-size: 20px;
            color: #7a4a4a;
        }

        .badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: #e07080;
            color: white;
            font-size: 9px;
            font-weight: 700;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #f4a0aa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
        }

        /* CONTENT */
        .content {
            max-width: 660px;
            margin: 36px auto;
            padding: 0 20px;
        }

        /* PROFILE CARD */
        .profile-card {
            background: #fdf0f2;
            border-radius: 20px;
            padding: 28px 28px 24px 28px;
            margin-bottom: 20px;
        }

        .profile-top {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .profile-avatar-wrap {
            position: relative;
            flex-shrink: 0;
        }

        .profile-avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #f4a0aa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 700;
            color: white;
        }

        .edit-avatar {
            position: absolute;
            bottom: 0;
            right: 0;
            background: white;
            border: 1.5px solid #f0d5d5;
            border-radius: 50%;
            width: 26px;
            height: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            cursor: pointer;
        }

        .profile-info h2 {
            font-size: 20px;
            font-weight: 700;
            color: #3b1a1a;
            margin-bottom: 6px;
        }

        .profile-stats {
            display: flex;
            gap: 20px;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            color: #7a4a4a;
        }

        .stat-icon { font-size: 14px; }

        .stat strong {
            font-weight: 700;
            color: #3b1a1a;
        }

        .koin-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f4a0aa;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        /* PESANAN SAYA */
        .order-card {
            background: #fdf0f2;
            border-radius: 20px;
            padding: 24px 28px;
            margin-bottom: 20px;
        }

        .order-card h3 {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .order-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .order-item {
            background: white;
            border-radius: 14px;
            padding: 16px 10px;
            text-align: center;
            cursor: pointer;
            transition: box-shadow 0.2s;
            position: relative;
        }

        .order-item:hover {
            box-shadow: 0 4px 12px rgba(224,112,128,0.1);
        }

        .order-item .icon { font-size: 28px; margin-bottom: 8px; }

        .order-item p {
            font-size: 11px;
            color: #7a4a4a;
            font-weight: 500;
        }

        .order-badge {
            position: absolute;
            top: 8px;
            right: 18px;
            background: #e07080;
            color: white;
            font-size: 9px;
            font-weight: 700;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* MENU LIST */
        .menu-list {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-bottom: 28px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px;
            border: 1.5px solid #f5e0e0;
            border-radius: 14px;
            cursor: pointer;
            text-decoration: none;
            color: #3b1a1a;
            transition: background 0.2s;
        }

        .menu-item:hover { background: #fdf0f2; }

        .menu-left {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 500;
        }

        .menu-left span:first-child { font-size: 18px; }

        .menu-arrow {
            color: #c4a0a0;
            font-size: 16px;
        }

        /* LOGOUT */
        .logout-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            background: none;
            border: none;
            color: #e07080;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            padding: 12px;
            font-family: 'Poppins', sans-serif;
        }

        .logout-btn:hover { opacity: 0.8; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE">
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
            <span>🔍</span>
            <input type="text" placeholder="Cari produk...">
        </div>
        <a href="{{ route('notifikasi') }}" class="nav-icon">🔔<div class="badge">•</div></a>
        <a href="{{ route('keranjang') }}" class="nav-icon">🛒<div class="badge">2</div></a>
        <div class="avatar">👤</div>
    </div>
</nav>

<!-- CONTENT -->
<div class="content">

    <!-- Profile Card -->
    <div class="profile-card">
        <div class="profile-top">
            <div class="profile-avatar-wrap">
                <div class="profile-avatar">A</div>
                <div class="edit-avatar">✏️</div>
            </div>
            <div class="profile-info">
                <h2>Ayu Beauty</h2>
                <div class="profile-stats">
                    <div class="stat">
                        <span class="stat-icon">🔄</span>
                        <strong>15</strong> Daur Ulang
                    </div>
                    <div class="stat">
                        <span class="stat-icon">➕</span>
                        <strong>8</strong> Donasi
                    </div>
                    <div class="stat">
                        <span class="stat-icon">📦</span>
                        <strong>12</strong> Pembelian
                    </div>
                </div>
            </div>
        </div>
        <button class="koin-btn">🪙 850 Ayu Koin</button>
    </div>

    <!-- Pesanan Saya -->
    <div class="order-card">
        <h3>Pesanan Saya</h3>
        <div class="order-grid">
            <div class="order-item">
                <div class="icon">💳</div>
                <p>Belum Dibayar</p>
            </div>
            <div class="order-item">
                <div class="icon">📦</div>
                <div class="order-badge">1</div>
                <p>Diproses</p>
            </div>
            <div class="order-item">
                <div class="icon">🚚</div>
                <div class="order-badge">1</div>
                <p>Dikirim</p>
            </div>
            <div class="order-item">
                <div class="icon">⭐</div>
                <div class="order-badge">2</div>
                <p>Penilaian</p>
            </div>
        </div>
    </div>

    <!-- Menu List -->
    <div class="menu-list">
        <a href="#" class="menu-item">
            <div class="menu-left">
                <span>✏️</span>
                <span>Edit Profil</span>
            </div>
            <span class="menu-arrow">›</span>
        </a>
        <a href="#" class="menu-item">
            <div class="menu-left">
                <span>📍</span>
                <span>Alamat Saya</span>
            </div>
            <span class="menu-arrow">›</span>
        </a>
        <a href="#" class="menu-item">
            <div class="menu-left">
                <span>🪙</span>
                <span>Riwayat Ayu Koin</span>
            </div>
            <span class="menu-arrow">›</span>
        </a>
        <a href="{{ route('pesanan-saya') }}" class="menu-item">
            <div class="menu-left">
                <span>🛍️</span>
                <span>Pesanan Saya</span>
            </div>
            <span class="menu-arrow">›</span>
        </a>
        <a href="#" class="menu-item">
            <div class="menu-left">
                <span>⚙️</span>
                <span>Pengaturan</span>
            </div>
            <span class="menu-arrow">›</span>
        </a>
    </div>

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">
            ↪ Keluar
        </button>
    </form>

</div>

</body>
</html>