<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verileri alınıyor
    $isim = $_POST['isim'];
    $email = $_POST['email'];
    $egitimDurumu = $_POST['egitimDurumu'];
    $askerlikDurumu = $_POST['askerlikDurumu'];
    $hobiler = isset($_POST['hobiler']) ? implode(", ", $_POST['hobiler']) : '';

    // CV Yükleme özellikleri
    $dosya = $_FILES['cv'];
    $dosya_adi = $dosya['name'];
    $dosya_boyutu = $dosya['size'];
    $dosya_tipi = pathinfo($dosya_adi, PATHINFO_EXTENSION);

    if ($dosya_boyutu <= 5000000 && ($dosya_tipi == 'doc' || $dosya_tipi == 'docx' || $dosya_tipi == 'pdf')) {
        $unique_id = uniqid('cv_') . '.' . $dosya_tipi;

        // CV İçin İndirme Linki
        echo "<a href='cv_uploads/$unique_id' download>CV İndir</a>";
        
        // Kişinin Verilerini Listele
        // Verileri TXT dosyasına yazdır
        $veri = "Ad: $isim\nE-Posta: $email\nEğitim Durumu: $egitimDurumu\nAskerlik Durumu: $askerlik_durumu\nHobiler: $hobiler\nCV ID: $unique_id\n\n";
        file_put_contents('veriler.txt', $veri, FILE_APPEND);

        echo "Veriler Başarıyla Yüklendi";
    } else {
        echo "Dosya yüklenirken hata oluştu!";
        echo "Dosya boyutu 5 mb dan küçük ve dosya tipi doc,docx veya pdf olmalıdır!";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST['isim'] ?? '';
    $email = $_POST['email'] ?? '';
    $egitimDurumu = $_POST['egitimDurumu'] ?? '';
    $askerlikDurumu = $_POST['askerlikDurumu'] ?? '';
    $hobiler = $_POST['hobiler'] ?? [];
    $cv = $_FILES['cv'] ?? '';

    $isEmpty = empty($isim) || empty($email) || empty($egitimDurumu) || empty($askerlikDurumu) || empty($hobiler) || empty($cv);

    if ($isEmpty) {
        echo "Lütfen tüm alanları doldurun.";
    } else {
    }
}
?> 