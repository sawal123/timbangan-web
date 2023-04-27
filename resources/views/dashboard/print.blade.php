<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <h1 class="text-center mt-5">Laporan Graphic</h1>
    <div class="container text-center" style="margin-top: 100px">
        <div id="reportPage">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</body>
<script>
    setTimeout(() => {
        window.print();
    }, 1000);
    
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    @php
        error_reporting(0);
    @endphp
    var hari = <?php echo json_encode($hari); ?>;
    var bulan1 = <?php echo json_encode($chart); ?>;
    var bulan2 = <?php echo json_encode($graphic); ?>;
    var barChartData = {
        labels: hari,


        datasets: [{
                label: "Bulan 1",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
                data: bulan1

            },
            {

                label: "Bulan 2",
                backgroundColor: "Pink",
                borderColor: "red",
                borderWidth: 1,

                data: bulan2
            }
        ]
    };

    var chartOptions = {
        responsive: true,
        legend: {
            position: "top"
        },
        title: {
            display: true,
            text: "Chart.js Bar Chart"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }

    var ctx = document.getElementById("myChart").getContext("2d");
    const myBar = new Chart(ctx, {
        type: "bar",
        data: barChartData,
        options: chartOptions
    });

    // var image = myBar.toBase64Image();
    // console.log(image);
</script>
