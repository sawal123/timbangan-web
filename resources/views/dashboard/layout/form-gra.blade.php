<form method="GET" class="form-inline" action="/graphic" style="margin-bottom: 20px;">
    @php
        error_reporting(0);
    @endphp
    @php
    
        $bulan = date("m");
        $tahun = date("Y");
        $bulan1 = date("m");
        $tahun1 = date("Y");
        $bln = $_GET['bulan'];
        $thn = $_GET['tahun'];
        $bln1 = $_GET['bulan1'];
        $thn1 = $_GET['tahun1'];
    @endphp
    <p>Bulan1</p>
    
    <select name='tahun' id='tahun' class='form-control ' style="margin-left: 10px;">
        <?php $mulai = date('Y') - 2;
        for ($i = $mulai; $i <= $mulai + 100; $i++) {
        ?>
            <option value='<?php echo $i; ?>' <?php if ($i == $_GET['tahun']) {echo " selected";} ?>>
                <?php echo $i; ?>
            </option>
        <?php
            // echo $mulai;
        }
        ?>
    </select>
    <select name='bulan' id='bulan' class='form-control'>
        <?php
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        for ($i = 0; $i < 12; $i++) {
        ?>
            <option value=<?= $i + 1 ?> <?php if ($_GET['bulan'] == $i + 1) {echo 'selected';}?>>
                <?= $bulan[$i]; ?>
            </option>
        <?php
        }
        ?>
    </select>
    <p style="margin-left: 30px; margin-right:10px">Bulan2</p>
    <select name='tahun1' id='tahun1' class='form-control'>

        <?php $mulai = date('Y') - 2;
        for ($i = $mulai; $i <= $mulai + 100; $i++) {
        ?>
            <option value='{{$i}}' @php if ($i == $_GET['tahun1']) {echo " selected";} @endphp>{{$i}}</option>
        @php
            }
        @endphp
        
    </select>
    <select name='bulan1' id='bulan1' class='form-control'>
        <?php
        $bulan1 = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        for ($i = 0; $i < 12; $i++) {
        ?>
            <option value=<?= $i + 1 ?> <?php if ($_GET['bulan1'] == $i + 1) {echo 'selected';}?>>
                <?= $bulan1[$i]; ?>
            </option>
        <?php
        }
        ?>
    </select>
    <button class="btn btn-primary ml-2"><span class="glyphicon glyphicon-search"></span> Search</button>
</form>