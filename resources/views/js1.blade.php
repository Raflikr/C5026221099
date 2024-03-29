<html>

<head>
    <title>Responsive Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showalert() {
            alert("Selamat ! Anda mendapatkan 100 juta !");
        }
        function changeText() {
            //var tulisanLama = document.getElementById("");
            var span = document.getElementById("output"); //membaca isi tulisan lama di span
            var textBox = document.getElementById("textbox"); //membaca tulisan yang baru
            textBox.style.color = "red"; //mengibah warna fot dari textbox menjadi merah
            span.innerHTML= textBox.value;
            // innerHTML mengubah text secara runtime
            //.value = membaca isi komponen form
            console.log("Horee sudah disini");
            console.log("isinya text box adalah"+ textBox.value);
        }
    </script>
    <script src="operasi.js"></script>
</head>

<body>
    <div class="container">
        <center><button class="btn btn-primary" onclick="showalert();">Klik disini !</button></center>
        <br>
        <button onclick="changeText();" class="btn btn-success">Click me!</button>
        <span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control" />
        <br>
        <div class="form-group">
            <label for="bill">Bilangan 1</label>
            <input type="number" id="bil1" placeholder="Masukkan Bilangan pertama" class="form-control">
        </div>
        <div class="form-group">
            <label for="bill">Bilangan 2</label>
            <input type="number" id="bil2" placeholder="Masukkan Bilangan kedua" class="form-control">
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary" onclick="tambah();">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="kali();">Perkalian</button>
        </div>
        <h3>Hasil Operasi : <div id="hasil"></div></h3>
    </div>
</body>

</html>
