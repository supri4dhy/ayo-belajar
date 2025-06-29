<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo Belajar!</title>
    
    <!-- Memuat Tailwind CSS untuk styling modern -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Memuat ikon dari Phosphor Icons (untuk dashboard) -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- [BARU] Memuat Lottie Player untuk animasi -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <style>
        /* Menggunakan font Nunito yang ramah dan mudah dibaca anak-anak */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap');
        body {
            font-family: 'Nunito', sans-serif;
            -webkit-tap-highlight-color: transparent; /* Menghilangkan sorotan biru saat disentuh di mobile */
        }

        /* Styling untuk splash screen */
        #splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f0f9ff; /* Warna biru langit yang cerah */
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.7s ease-out;
        }

        /* Gaya kartu dashboard yang lebih ceria */
        .dashboard-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            border-bottom-width: 4px;
        }
        .dashboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- ===== [DIUBAH] SPLASH SCREEN DENGAN ANIMASI LOTTIE ===== -->
    <div id="splash-screen">
        <div class="text-center">
            <!-- Animasi Lottie dari URL yang Anda berikan -->
            <lottie-player src="https://lottie.host/bfa23d27-63ef-4bb5-81cd-0aef57bd1c71/dEBHpX6BJt.json" background="transparent" speed="1" style="width: 300px; height: 300px; margin: 0 auto;" loop autoplay></lottie-player>
            <p class="mt-4 text-2xl font-extrabold text-blue-500">Ayo Mulai Belajar!</p>
        </div>
    </div>

    <!-- ===== KONTEN UTAMA (DASHBOARD) ===== -->
    <div id="main-content" class="hidden">
        <header class="bg-blue-500 shadow-lg">
            <div class="max-w-4xl mx-auto py-4 px-5 text-center">
                <h1 class="text-3xl font-extrabold text-white">Menu Belajar</h1>
            </div>
        </header>

        <main class="max-w-4xl mx-auto p-5">
            <!-- Grid untuk kartu-kartu link belajar -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">

                <!-- Kartu 1: Belajar Membaca -->
                <a href="https://www.youtube.com/results?search_query=belajar+membaca+untuk+anak" target="_blank" class="dashboard-card block bg-white p-6 rounded-2xl shadow-md border-blue-400">
                    <div class="text-center">
                        <i class="ph-fill ph-book-open-text text-5xl text-blue-500"></i>
                        <p class="mt-3 font-bold text-gray-700 text-lg">Membaca</p>
                    </div>
                </a>

                <!-- Kartu 2: Belajar Berhitung -->
                <a href="https://www.youtube.com/results?search_query=belajar+berhitung+untuk+anak" target="_blank" class="dashboard-card block bg-white p-6 rounded-2xl shadow-md border-green-400">
                    <div class="text-center">
                        <i class="ph-fill ph-calculator text-5xl text-green-500"></i>
                        <p class="mt-3 font-bold text-gray-700 text-lg">Berhitung</p>
                    </div>
                </a>

                <!-- Kartu 3: Video Edukasi -->
                <a href="https://www.youtube.com/c/kokbisa" target="_blank" class="dashboard-card block bg-white p-6 rounded-2xl shadow-md border-red-400">
                    <div class="text-center">
                        <i class="ph-fill ph-play-circle text-5xl text-red-500"></i>
                        <p class="mt-3 font-bold text-gray-700 text-lg">Video Seru</p>
                    </div>
                </a>

                <!-- Kartu 4: Mewarnai Gambar -->
                <a href="https://www.google.com/search?q=gambar+mewarnai+untuk+anak+printable" target="_blank" class="dashboard-card block bg-white p-6 rounded-2xl shadow-md border-orange-400">
                    <div class="text-center">
                        <i class="ph-fill ph-paint-brush-broad text-5xl text-orange-500"></i>
                        <p class="mt-3 font-bold text-gray-700 text-lg">Mewarnai</p>
                    </div>
                </a>

                <!-- Kartu 5: Dengar Cerita -->
                <a href="https://dongeng.bicaraindonesia.org/" target="_blank" class="dashboard-card block bg-white p-6 rounded-2xl shadow-md border-purple-400">
                    <div class="text-center">
                        <i class="ph-fill ph-headphones text-5xl text-purple-500"></i>
                        <p class="mt-3 font-bold text-gray-700 text-lg">Dengar Cerita</p>
                    </div>
                </a>

                <!-- Kartu 6: Teka-Teki -->
                <a href="https://www.google.com/search?q=teka+teki+logika+anak+sd" target="_blank" class="dashboard-card block bg-white p-6 rounded-2xl shadow-md border-pink-400">
                    <div class="text-center">
                        <i class="ph-fill ph-puzzle-piece text-5xl text-pink-500"></i>
                        <p class="mt-3 font-bold text-gray-700 text-lg">Teka-Teki</p>
                    </div>
                </a>

            </div>
        </main>
    </div>

    <script>
        // JavaScript sederhana untuk menyembunyikan splash screen
        window.addEventListener('load', () => {
            const splashScreen = document.getElementById('splash-screen');
            const mainContent = document.getElementById('main-content');

            // Tunggu 3.5 detik agar animasi terlihat lebih lama
            setTimeout(() => {
                splashScreen.style.opacity = '0';
                // Tunggu transisi selesai sebelum menghilangkan dari layout
                setTimeout(() => {
                    splashScreen.style.display = 'none';
                    mainContent.classList.remove('hidden');
                }, 700); // Durasi ini sama dengan transisi di CSS
            }, 3500); 
        });
    </script>

</body>
</html>
