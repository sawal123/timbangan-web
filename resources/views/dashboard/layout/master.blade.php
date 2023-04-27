@php
    date_default_timezone_set('Asia/Jakarta');
@endphp
<!DOCTYPE html>
<!--
Template Name: NobleUI - Laravel Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_laravel
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive Laravel Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

    <title>Timbangan Digital</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- plugin css -->
    <link href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
    <!-- end plugin css -->



    @stack('plugin-styles')

    <!-- common css -->
    <link href="{{ asset('css/css/app.css') }}" rel="stylesheet" />
    <!-- end common css -->

    @stack('style')

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css"> --}}

    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}


</head>

<body data-base-url="{{ url('/') }}">

    <script src="{{ asset('assets/js/spinner.js') }}"></script>

    <div class="main-wrapper" id="app">
        @include('dashboard.layout.sidebar')
        <div class="page-wrapper">
            @include('dashboard.layout.header')
            <div class="page-content">
                @yield('content')
            </div>
            @include('dashboard.layout.footer')
        </div>
    </div>


    <!-- base js -->
    <script src="{{ asset('js/js/app.js') }}"></script>
    <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->



    <!-- common js -->
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- end common js -->

    @stack('custom-scripts')




    {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>




    {{-- <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script> --}}
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>

    <script src="{{ asset('assets/js/data-table.js') }}"></script>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
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

        var image = myBar.toBase64Image();
        // console.log(image);

        document.getElementById('png').onclick = function() {
            // Trigger the download
            var a = document.createElement('a');
            a.href = myBar.toBase64Image();
            a.download = 'grapik.png';
            a.click();
        }

        $('#download').click(function(event) {
            // get size of report page
            var reportPageHeight = $('#reportPage').innerHeight();
            var reportPageWidth = $('#reportPage').innerWidth();

            // create a new canvas object that we will populate with all other canvas objects
            var pdfCanvas = $('<canvas />').attr({
                id: "canvaspdf",
                width: reportPageWidth,
                height: reportPageHeight
            });

            // keep track canvas position
            var pdfctx = $(pdfCanvas)[0].getContext('2d');
            var pdfctxX = 0;
            var pdfctxY = 0;
            var buffer = 100;

            // for each chart.js chart
            $("canvas").each(function(index) {
                // get the chart height/width
                var canvasHeight = $(this).innerHeight();
                var canvasWidth = $(this).innerWidth();

                // draw the chart into the new canvas
                pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
                pdfctxX += canvasWidth + buffer;

                // our report page is in a grid pattern so replicate that in the new canvas
                if (index % 2 === 1) {
                    pdfctxX = 0;
                    pdfctxY += canvasHeight + buffer;
                }
            });

            // create new pdf and add our new canvas as an image
            var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
            pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);

            // download the pdf
            pdf.save('filename.pdf');
        });
    </script>


    //
    //
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($msg = Session::get('success'))
        {{-- <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div> --}}
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Horeee!!!',
                text: '{{$msg}}',
                timer: 3000,
                showConfirmButton: false
            })
        </script>
    @endif

    <script>
        $('.button').on('click', function() {
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin hapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            }).then(result => {
                //jika klik ya maka arahkan ke proses.php
                if (result.isConfirmed) {
                    window.location.href = getLink;
                }
            })
            return false;
        });
    </script>



    // <script>
    //     $('#edit-modal').on('show.bs.modal', function(event) {
    //         // event.relatedtarget menampilkan elemen mana yang digunakan saat diklik.
    //         var button = $(event.relatedTarget)

    //         var id = button.data('id')
    //         var berat = button.data('berat')
    //         var modal = $(this)

    //         modal.find('#id').val(id)
    //         modal.find('#berat').val(berat)

    //     })
    // </script>




</body>

</html>
