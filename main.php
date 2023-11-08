 <h2>İnsan Kaynakları Başvuru Formu</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    İsim/Soyisim: <input type="text" name="isim">
    <br><br>
    E-posta: <input type="text" name="email">
    <br><br>
    İletişim Bilgileri: <textarea name="iletisim" rows="5" cols="40"></textarea>
    <br><br>
    Eğitim Durumu:
    <select name="egitimDurumu">
        <option value="ilkokul">İlkokul</option>
        <option value="ortaokul">Ortaokul</option>
        <option value="lise">Lise</option>
        <option value="üniversite">Üniversite</option>
    </select>
    <br><br>
    Askerlik Durumu: <br>
    <input type="radio" name="askerlikDurumu" value="Yapıldı">Yapıldı
    <input type="radio" name="askerlikDurumu" value="Yapılmadı">Yapılmadı
    <input type="radio" name="askerlikDurumu" value="muaf">muaf
    <br><br>
    Hobiler: <br>
    <input type="checkbox" name="hobiler[]" value="Spor">Spor
    <input type="checkbox" name="hobiler[]" value="Müzik">Müzik
    <input type="checkbox" name="hobiler[]" value="Sanat">Sanat
    <input type="checkbox" name="hobiler[]" value="Gezi">Gezi
    <br><br>
    <label for="cv">CV Yükle: (Dosya boyunu 5mb'dan küçük ve doc,docx veya pdf tipinde yükleyiniz..)</label>
    CV Yükleyin: <input type="file" name="cv">
    <br><br>
    <input type="submit" name="submit" value="Başvur">
</form>

