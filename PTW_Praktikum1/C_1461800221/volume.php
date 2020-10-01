<!DOCTYPE html>
<head>
        <title>Menghitung Volume Bola</title>
        <link rel="stylesheet" type="text/css" href="V_1461800221/style.css">
</head>
<body>
<nav>
  <a>
    <img src="Logo-Untag.jpg" width="30" height="30">
    Untag Surabaya
  </a>
</nav>
    <br/>
    <br/>
    <center><h2>Form Menghitung Volume Bola</h2></center>
    <div class="kolom">
    <br/>
        <form action= "#" method="post" onSubmit="validasi()">
            <div>
                <label>Jari-jari (cm) : <label>
                <input type="text" name="jari" id="jari"/>
            </div>
            <div>
                <input type="submit" name="submit" value="Hitung" class="tombol">
            </div>
        </form>
    </div>

    <div class="hasil">
	    <h5>Hasil : </h5>
        <?php
            if(isset($_POST['submit'])){
                $jari = $_POST['jari'];

                $volume = 4 / 3 * 3.14 * $jari * $jari * $jari;
            
                echo "Bola dengan jari-jari : $jari cm<br>";
                echo "Memiliki volume: $volume cm3";
            }
        ?>
    </div>
</body>

<script type="text/javascript">
	function validasi() {
		var jari = document.getElementById("jari").value;
		if(jari != ""){
			return true;
		}else{
			alert('Kolom tidak boleh kosong!!!'); // kode ini bertujuan untuk membuat validasi jika user tidak mengisi bidang jari-jari
		}
    }
</script>
</html>
