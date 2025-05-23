<html>
<body>
    <h1>Praktikum PHP</h1>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>
    <hr>
    <div class="konten">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'soal1':
                    include 'soal1.php';
                    break;
                case 'soal2':
                    include 'soal2.php';
                    break;
                case 'soal3':
                    include 'soal3.php';
                    break;
                case 'soal4':
                    include 'soal4.php';
                    break;
                default:
                    echo "Halaman tidak ditemukan.";
            }
        } else {
            echo "Silakan pilih menu di atas.";
        }
        ?>
    </div>
</body>
</html>